<?php
/**
 * 2008 - 2017 Presto-Changeo
 *
 * MODULE Authorize.net (AIM / DPM)
 *
 * @author    Presto-Changeo <info@presto-changeo.com>
 * @copyright Copyright (c) permanent, Presto-Changeo
 * @license   Addons PrestaShop license limitation
 * @version   2.0.0
 * @link      http://www.presto-changeo.com
 *
 * NOTICE OF LICENSE
 *
 * Don't use this module on several shops. The license provided by PrestaShop Addons
 * for all its modules is valid only once for a single shop.
 */

class AuthorizedotnetValidationModuleFrontController extends ModuleFrontController
{

    public $ssl = true;

    public function setMedia()
    {
        parent::setMedia();
        $this->addJS(__PS_BASE_URI__ . 'modules/authorizedotnet/views/js/authorizedotnet.js');
        $this->addCSS(__PS_BASE_URI__ . 'modules/authorizedotnet/views/css/authorizedotnet.css');
    }

    public function initContent()
    {
        if (Configuration::get('ADN_SHOW_LEFT') == 0) {
            $this->display_column_left = false;
        }
        parent::initContent();
    }

    public function init()
    {
        if (Configuration::get('ADN_SHOW_LEFT') == 0) {
            $this->display_column_left = false;
        }
        parent::init();
    }

    public function doPayment($adn, $adnCIM, $cart, $retData, $shippingId = null)
    {

        $shippingCost = number_format($cart->getOrderTotal(!Product::getTaxCalculationMethod(), Cart::ONLY_SHIPPING), 2, '.', '');
        $amount_wot = number_format($cart->getOrderTotal(false, Cart::BOTH), 2, '.', '');
        $amount = number_format($cart->getOrderTotal(true, Cart::BOTH), 2, '.', '');

        $tax = $amount - $amount_wot;


        $lineItems = array();
        foreach ($cart->getProducts() as $product) {
            $lineItems[] = array(
                'itemId' => $product['id_product'],
                'name' => $product['name'],
                // 'description' => $product['description_short'],
                'quantity' => $product['cart_quantity'],
                'unitPrice' => number_format($product['price'], 2, '.', ''),
                'taxable' => 'false',
            );
        }

        $transactionData = array(
            'amount' => $amount,
            'tax' => $tax,
            'trx_type' => $adn->_adn_type,
            'cartId' => $cart->id,
            'shipping' => array(
                'amount' => $shippingCost,
            ),
            'lineItems' => $lineItems,
            'customerProfileId' => $retData['customer_profile_id'],
            'customerPaymentProfileId' => $retData['customer_payment_profile_id'],
            'shippingId' => $shippingId,
        );

        //print_r($transactionData); die();
        $responseTransactionData = $adnCIM->doPayment($transactionData);

        $respNew = array(
            'order_reference' => $responseTransactionData['order_reference'],
            'post_response' => explode(',', $responseTransactionData['post_response']->directResponse));

        return $respNew;
    }

    public function getAddressInformation($id_address)
    {
        $address = new Address($id_address);
        $state = new State($address->id_state);

        return array(
            'email' => $this->context->customer->email,
            'lastname' => Tools::htmlentitiesUTF8($address->lastname),
            'firstname' => Tools::htmlentitiesUTF8($address->firstname),
            'vat_number' => Tools::htmlentitiesUTF8($address->vat_number),
            'dni' => Tools::htmlentitiesUTF8($address->dni),
            'address1' => Tools::htmlentitiesUTF8($address->address1),
            'address2' => Tools::htmlentitiesUTF8($address->address2),
            'company' => Tools::htmlentitiesUTF8($address->company),
            'postcode' => Tools::htmlentitiesUTF8($address->postcode),
            'city' => Tools::htmlentitiesUTF8($address->city),
            'phone' => Tools::htmlentitiesUTF8($address->phone),
            'phone_mobile' => Tools::htmlentitiesUTF8($address->phone_mobile),
            'id_country' => (int) ($address->id_country),
            'name_country' => $address->country,
            'id_state' => (int) ($address->id_state),
            'name_state' => ($state->name),
            'id_address' => $address->id
        );
    }

    public function postProcess()
    {
        $cart = $this->context->cart;
        $link = new Link();
        $psv = (float) (Tools::substr(_PS_VERSION_, 0, 3));

        $confirm = Tools::getValue('confirm');

        $adn = new AuthorizeDotNet();

        $this->context->smarty->assign(array(
            'pc_payment_module_adn' => $adn->name
        ));
        /* Validate order */
        $time = time();
        $adn_cc_err = '';


        if ($confirm) {
            if (Tools::getValue('adn_exist_card')) {
                $customer = $this->context->customer;
                $adnCIM = new AuthorizedotnetCIM($adn->_adn_id, $adn->_adn_key, $adn->_adn_demo_mode);
                $retData = $adnCIM->getPaymentProfileById(Tools::getValue('adn_exist_card'), $customer->id);
                $billAddress = $this->getAddressInformation($this->context->cart->id_address_invoice);

                $retData['card_number'] = $retData['last4digit'];

                $retData = array_merge($retData, array(
                    'bill_firstname' => $billAddress['firstname'],
                    'bill_lastname' => $billAddress['lastname'],
                    'bill_company' => $billAddress['company'],
                    'bill_address' => $billAddress['address1'] . ' ' . $billAddress['address2'],
                    'bill_city' => $billAddress['city'],
                    'bill_state' => $billAddress['name_state'],
                    'bill_zip' => $billAddress['postcode'],
                    'bill_country' => $billAddress['name_country'],
                    'bill_phoneNumber' => $billAddress['phone'],
                    'id_address' => $billAddress['id_address']
                ));
                /*
                  echo '<pre>';
                  print_r($retData);
                  echo '</pre>';
                  exit();
                 */
                if ($adnCIM->saveProfile($retData)) {
                    $retData = $adnCIM->getReturnData();

                    $id_address_delivery = $this->context->cart->id_address_delivery;

                    $dataShippingId = array(
                        'customerProfileId' => $retData['customer_profile_id'],
                        'id_address' => $id_address_delivery);

                    $shippingId = $adnCIM->getCustomerShippingAddressRequest($dataShippingId);

                    if (isset($shippingId['refId']) && !empty($shippingId['refId'])) {
                        $retData['shippingId'] = $shippingId['refId'];
                        $shippingId = $retData['shippingId'];
                    } else {
                        $id_address_delivery = $this->context->cart->id_address_delivery;

                        $address = new Address($id_address_delivery);
                        $state = new State($address->id_state);

                        $dataShippingId['firstName'] = $address->firstname;
                        $dataShippingId['lastName'] = $address->lastname;
                        $dataShippingId['company'] = $address->company;
                        $dataShippingId['address'] = $address->address1;
                        $dataShippingId['city'] = $address->city;
                        $dataShippingId['state'] = ($state->name);
                        $dataShippingId['zip'] = ($address->postcode);
                        $dataShippingId['country'] = $address->country;
                        $dataShippingId['phoneNumber'] = ($address->phone);

                        $dataShippingId['id_address_delivery'] = $id_address_delivery;
                        $dataShippingId['firstName'] = $address->firstname;
                        $shippingId = $adnCIM->createCustomerShippingAddressRequest($dataShippingId);
                    }


                    $response_array = $this->doPayment($adn, $adnCIM, $cart, $retData, $shippingId);
                    $order_reference = $response_array['order_reference'];
                    $response_array = $response_array['post_response'];
                } else {
                    $jsonReturn = $adn->getTranslator()->trans('The was an error processing your payment', array(), 'Modules.AuthorizeDotNet') . '<br />Details: ' . implode('<br />', $adnCIM->getErrors());
                    echo $jsonReturn;
                    exit();
                }
            } elseif ((Tools::getValue('adn_save_card') || $adn->_adn_cim_save) && !Tools::getValue('adn_exist_card')) {
                $customer = $this->context->customer;
                $customerId = $customer->id;
                $adnCIM = new AuthorizedotnetCIM($adn->_adn_id, $adn->_adn_key, $adn->_adn_demo_mode);

                $cardInfo = $adnCIM->getPaymentProfileById((int) $this->context->cookie->cppi, $customerId);

                $last4 = Tools::substr(Tools::getValue('adn_cc_number'), -4);
                $getCustomerPaymentProfileByCard = $adnCIM->getCustomerPaymentProfileByCard($last4, $customerId);
                //echo Tools::getValue('adn_cc_number');
                //echo 'last4'.$last4;
                //echo 'customerId'.$customerId;
                //print_r($getCustomerPaymentProfileByCard);
                if (isset($getCustomerPaymentProfileByCard) && !empty($getCustomerPaymentProfileByCard)) {
                    $customerPaymentProfileId = $getCustomerPaymentProfileByCard['customer_payment_profile_id'];
                } else {
                    $customerPaymentProfileId = 0;
                }
                /* if(!empty($cardInfo)) {
                  $customerPaymentProfileId = $this->context->cookie->cppi;
                  } else {
                  $customerPaymentProfileId = 0;
                  }* */

                //$customerPaymentProfileId = 0;
                $billAddress = $this->getAddressInformation($this->context->cart->id_address_invoice);

                $firstname = Tools::getValue('adn_cc_fname');
                $lastname = Tools::getValue('adn_cc_lname');

                if (!empty($customerPaymentProfileId)) {
                    $cardInfo = $adnCIM->getPaymentProfileById($customerPaymentProfileId, $customerId);
                    $oldLast4digit = str_repeat('*', 12) . Tools::substr($cardInfo['last4digit'], 4, 4);
                    $adn_cc_number = Tools::getValue('adn_cc_number') == $oldLast4digit ? $cardInfo['last4digit'] : Tools::getValue('adn_cc_number');
                } else {
                    $adn_cc_number = Tools::getValue('adn_cc_number');
                }
                $cardLast4Digit = Tools::substr(Tools::getValue('adn_cc_number'), -4);
                $data = array(
                    'id_customer' => $customerId,
                    'email' => $customer->email,
                    'description' => $customer->firstname . ' ' . $customer->lastname,
                    'customer_payment_profile_id' => (isset($customerPaymentProfileId) && !empty($customerPaymentProfileId) ? $customerPaymentProfileId : 0),
                    'title' => Tools::getValue('adn_cc_title'),
                    'card_number' => Tools::getValue('adn_cc_number'),
                    'exp_date' => Tools::getValue('adn_cc_Year') . '-' . Tools::getValue('adn_cc_Month'),
                    'bill_firstname' => $firstname,
                    'bill_lastname' => $lastname,
                    'bill_company' => $billAddress['company'],
                    'bill_address' => $billAddress['address1'] . ' ' . $billAddress['address2'],
                    'bill_city' => $billAddress['city'],
                    'bill_state' => $billAddress['name_state'],
                    'bill_zip' => $billAddress['postcode'],
                    'bill_country' => $billAddress['name_country'],
                    'bill_phoneNumber' => $billAddress['phone'],
                    'id_address' => $billAddress['id_address'],
                    'is_hidden' => Tools::getValue('adn_save_card') ? 0 : 1
                );
                $jsonReturn = array();
                if ($adnCIM->saveProfile($data)) {
                    $retData = $adnCIM->getReturnData();
                    $this->context->cookie->cppi = $retData['customer_payment_profile_id'];

                    $id_address_delivery = $this->context->cart->id_address_delivery;

                    $dataShippingId = array(
                        'customerProfileId' => $retData['customer_profile_id'],
                        'id_address' => $id_address_delivery);

                    $shippingId = $adnCIM->getCustomerShippingAddressRequest($dataShippingId);

                    if (isset($shippingId['refId']) && !empty($shippingId['refId'])) {
                        $retData['shippingId'] = $shippingId['refId'];
                        $shippingId = $retData['shippingId'];
                    } else {
                        $id_address_delivery = $this->context->cart->id_address_delivery;

                        $address = new Address($id_address_delivery);
                        $state = new State($address->id_state);

                        $dataShippingId['firstName'] = $address->firstname;
                        $dataShippingId['lastName'] = $address->lastname;
                        $dataShippingId['company'] = $address->company;
                        $dataShippingId['address'] = $address->address1;
                        $dataShippingId['city'] = $address->city;
                        $dataShippingId['state'] = ($state->name);
                        $dataShippingId['zip'] = ($address->postcode);
                        $dataShippingId['country'] = $address->country;
                        $dataShippingId['phoneNumber'] = ($address->phone);

                        $dataShippingId['id_address_delivery'] = $id_address_delivery;
                        $dataShippingId['firstName'] = $address->firstname;
                        $shippingId = $adnCIM->createCustomerShippingAddressRequest($dataShippingId);
                    }
                    // var_dump($shippingId); die();
                    // var_dump($cart->simulateCarrierSelectedOutput());
                    $response_array = $this->doPayment($adn, $adnCIM, $cart, $retData, $shippingId);
                    $order_reference = $response_array['order_reference'];
                    $response_array = $response_array['post_response'];
                } else {
                    $jsonReturn = $adn->getTranslator()->trans('The was an error processing your payment', array(), 'Modules.AuthorizeDotNet') . '<br />Details: ' . implode('<br />', $adnCIM->getErrors());
                    echo $jsonReturn;
                    exit();
                }
            } else {
                $response_array = explode('|', $adn->doPayment());
            }
            if (!empty($retData)) {
                $cardData = $adnCIM->getPaymentProfileById($retData['customer_payment_profile_id'], $customer->id);
                $customerPaymentProfileId = $retData['customer_payment_profile_id'];
                $cardLast4Digit = Tools::substr($cardData['last4digit'], -4);
            } else {
                $cardLast4Digit = Tools::substr(Tools::getValue('adn_cc_number'), -4);
                $customerPaymentProfileId = 0;
            }


            if ($response_array[0] == '1') {
                $customer = new Customer((int) ($cart->id_customer));
                $total = $response_array[9];


                $adn->validateOrder((int) ($cart->id), $adn->_adn_type == 'AUTH_ONLY' ? $adn->_adn_auth_status : _PS_OS_PAYMENT_, $total, $adn->displayName, null, array(), null, false, $customer->secure_key);


                $order = new Order((int) ($adn->currentOrder));

                $message = new Message();
                $message->message = ($adn->_adn_type == 'AUTH_ONLY' ? $adn->getTranslator()->trans('Authorization Only - ', array(), 'Modules.AuthorizeDotNet') : '') . $adn->getTranslator()->trans('Transaction ID: ', array(), 'Modules.AuthorizeDotNet') . $response_array[6] . $adn->getTranslator()->trans(' - Last 4 digits of the card: ', array(), 'Modules.AuthorizeDotNet') . Tools::substr(Tools::getValue('adn_cc_number'), -4) . $adn->getTranslator()->trans(' - AVS Response: ', array(), 'Modules.AuthorizeDotNet') . $response_array[5] . $adn->getTranslator()->trans(' - Card Code Response: ', array(), 'Modules.AuthorizeDotNet') . $response_array[38];
                $message->id_customer = $cart->id_customer;
                $message->id_order = $order->id;
                $message->private = 1;
                $message->id_employee = 0;
                $message->id_cart = $cart->id;
                $message->add();

                $adn_cc = Tools::getValue('adn_cc_number');
                if (isset($adn_cc) && !empty($adn_cc)) {
                    $cardLast4Digit = Tools::substr(Tools::getValue('adn_cc_number'), -4);
                } else {
                    if (!empty($retData)) {
                        $cardData = $adnCIM->getPaymentProfileById($retData['customer_payment_profile_id'], $customer->id);
                        $customerPaymentProfileId = $retData['customer_payment_profile_id'];
                        $cardLast4Digit = Tools::substr($cardData['last4digit'], -4);
                    }
                }
                //print_r($response_array); die();
                Db::getInstance()->Execute('INSERT INTO `' . _DB_PREFIX_ . "authorizedotnet_refunds` VALUES ('$order->id','" . pSQL($response_array[6]) . "','" . pSQL($cardLast4Digit) . "','" . pSQL($response_array[4]) . "','" . ($adn->_adn_type == 'AUTH_ONLY' ? '0' : '1') . "','" . pSQL($response_array[51]) . "', '" . (int) $customerPaymentProfileId . "')");


                $payments = $order->getOrderPaymentCollection();
                $firstname = Tools::getValue('adn_cc_fname');
                $lastname = Tools::getValue('adn_cc_lname');
                foreach ($payments as $payment) {
                    /** @var OrderPayment $payment */
                    $payment->transaction_id = $response_array[6];
                    $payment->card_number = $cardLast4Digit;
                    $payment->card_brand = $response_array[51];
                    $payment->card_holder = $firstname . ' ' . $lastname;
                    $payment->update();
                }

                if (!$adn->_adn_payment_page) {
                    Tools::redirectLink($adn->getRedirectBaseUrl() . 'key=' . $customer->secure_key . '&id_cart=' . (int) ($cart->id) . '&id_module=' . (int) ($adn->id) . '&id_order=' . (int) ($adn->currentOrder));
                } else {
                    /**
                     * Redirect to ordr-confirmation - ajax verision
                     * $adn->_adn_payment_page == 1
                     */
                    @ob_end_clean();

                    echo 'url:' . $adn->getRedirectBaseUrl() . 'key=' . $customer->secure_key . '&id_cart=' . (int) ($cart->id) . '&id_module=' . (int) ($adn->id) . '&id_order=' . (int) ($adn->currentOrder);
                    exit();
                }
            }

            $adn_cc_err = $adn->getTranslator()->trans('There was an error processing your payment', array(), 'Modules.AuthorizeDotNet') . '<br />Details: ' . $response_array[3];

            if ($adn->_adn_ft == 1 && !empty($adn->_adn_ft_email)) {
                $cartInfo = array();

                if ($adn->_adn_get_address) {
                    $cartInfo = array(
                        'firstname' => Tools::getValue('adn_cc_fname'),
                        'lastname' => Tools::getValue('adn_cc_lname'),
                        'address' => Tools::getValue('adn_cc_address'),
                        'city' => Tools::getValue('adn_cc_city'),
                        'state' => Tools::getValue('adn_id_state'),
                        'country' => Tools::getValue('adn_id_country'),
                        'zip' => Tools::getValue('adn_cc_zip')
                    );
                }

                $cartInfo['number'] = Tools::substr(Tools::getValue('adn_cc_number'), -4);

                $adn->sendErrorEmail($adn->_adn_ft_email, $cart, $response_array[3], 'error', $cartInfo, $adn->_adn_get_address);
            }

            if ($adn->_adn_payment_page) {
                echo $adn_cc_err;
                exit();
            } else {
                echo $adn_cc_err;
                exit();
            }
            $time = mktime(0, 0, 0, Tools::getValue('adn_cc_Month'), 1, Tools::getValue('adn_cc_Year'));
            $address = new Address((int) ($cart->id_address_invoice));
            $selectedState = (int) (Tools::getValue('adn_id_state'));
            $selectedCountry = (int) (Tools::getValue('adn_id_country'));
            $this->context->smarty->assign('id_state', $selectedState);
        }

        self::prepareVarsView($this->context, $adn, $adn_cc_err, $time);

        $this->setTemplate('module:authorizedotnet/views/templates/front/validation.tpl');
    }

    public static function prepareVarsView($context, $adn, $adn_cc_err, $time)
    {
        $years = array();
        for ($i = date('Y'); $i < date('Y') + 10; $i++) {
            $years[$i] = $i;
        }

        $months = array();
        for ($i = 1; $i < 13; $i++) {
            $pi = $i < 10 ? '0' . $i : $i;
            $months[$pi] = $pi;
        }

        $cart = $context->cart;

        if (is_null($adn)) {
            $adn = new AuthorizeDotNet();
        }
        $adnCIM = new AuthorizedotnetCIM($adn->_adn_id, $adn->_adn_key, $adn->_adn_demo_mode);
        $listCards = $adnCIM->getCardsListByCustomerId($context->cookie->id_customer);

        // get default currency
        $currency_module = (int) Configuration::get('PS_CURRENCY_DEFAULT');
        // recalculate currency if Currency: User Selected
        if ($cart->id_currency != $currency_module && $adn->_adn_currency == 1) {
            $old_id = $cart->id_currency;
            $cart->id_currency = $currency_module;
            if (is_object($context->cookie)) {
                $context->cookie->id_currency = $currency_module;
            }

            $context->currency = new Currency($currency_module);

            $cart->update();
        }

        $confirm = Tools::getValue('confirm');

        if (!$confirm) {
            $address = new Address((int) ($cart->id_address_invoice));
            $customer = new Customer((int) ($cart->id_customer));
            $state = new State($address->id_state);
            $selectedCountry = (int) ($address->id_country);
        } else {
            $selectedCountry = (int) (Tools::getValue('adn_id_country'));
            $address = new Address((int) ($cart->id_address_invoice));
        }

        $countries = Country::getCountries((int) ($context->cookie->id_lang), true);
        $countriesList = '';
        foreach ($countries as $country) {
            $countriesList .= '<option value="' . (int) ($country['id_country']) . '" ' . ($country['id_country'] == $selectedCountry ? 'selected="selected"' : '') . '>' . htmlentities($country['name'], ENT_COMPAT, 'UTF-8') . '</option>';
        }

        $translator = $context->getTranslator();
        $conditionsToApproveFinder = new ConditionsToApproveFinder($context, $translator);
        $conditions_to_approve = $conditionsToApproveFinder->getConditionsToApproveForTemplate();

        $adn_filename = $adn->getAdnFilename();
        $currencies = Currency::getCurrencies();
        $context->smarty->assign('countries_list', $countriesList);
        $context->smarty->assign('countries', $countries);
        $context->smarty->assign('address', $address);
        $context->smarty->assign('currencies', $currencies);
        $context->smarty->assign(
            array(
                'conditions_to_approve' => $conditions_to_approve,
                'action' => $context->link->getModuleLink($adn->name, 'validation', array(), true),
                'adn_payment_page' => $adn->_adn_payment_page,
                'adn_cim' => $adn->_adn_cim,
                'adn_filename' => $adn_filename,
                'adn_total' => number_format($cart->getOrderTotal(true, 3), 2, '.', ''),
                'this_path_ssl' => $adn->getHttpPathModule(),
                'adn_cc_fname' => $confirm ? Tools::getValue('adn_cc_fname') : "$address->firstname",
                'adn_cc_lname' => $confirm ? Tools::getValue('adn_cc_lname') : "$address->lastname",
                'adn_cc_address' => $confirm ? Tools::getValue('adn_cc_address') : $address->address1,
                'adn_cc_city' => $confirm ? Tools::getValue('adn_cc_city') : $address->city,
                'adn_cc_state' => $confirm ? Tools::getValue('adn_cc_state') : $state->iso_code,
                'adn_cc_zip' => $confirm ? Tools::getValue('adn_cc_zip') : $address->postcode,
                'adn_cc_number' => Tools::getValue('adn_cc_number'),
                'adn_cc_cvm' => Tools::getValue('adn_cc_cvm'),
                'adn_cc_err' => $adn_cc_err,
                'adn_get_address' => Configuration::get('ADN_GET_ADDRESS'),
                'adn_get_cvm' => Configuration::get('ADN_GET_CVM'),
                'adn_visa' => $adn->_adn_visa,
                'adn_mc' => $adn->_adn_mc,
                'adn_amex' => $adn->_adn_amex,
                'adn_discover' => $adn->_adn_discover,
                'adn_jcb' => $adn->_adn_jcb,
                'adn_diners' => $adn->_adn_diners,
                'adn_enroute' => $adn->_adn_enroute,
                'adn_years' => $years,
                'adn_months' => $months,
                'time' => $time,
                'adn_list_cards' => $listCards
            )
        );
        if ((int) (ceil(number_format($cart->getOrderTotal(true, 3), 2, '.', ''))) == 0) {
            Tools::redirect('order.php?step=1');
        }
        $context->smarty->assign('this_path', __PS_BASE_URI__ . 'modules/authorizedotnet/');
    }

    /**
     * Send email error
     * $email - email which will be sent error
     * $cartObj - PS cart object
     * $errorText - text that return payment gateway
     */
    public function sendErrorEmail($email, $cartObj, $errorText, $template = 'error', $cartInfo = array(), $isCustomAddress = 0)
    {
        $customerObj = new Customer($cartObj->id_customer);
        $address = new Address((int) ($cartObj->id_address_invoice));

        $addressHTML = '';
        $addressHTML .= $this->l('Cart ') . '# ' . $cartObj->id . '<br /><br />' . '\n\r' . '\n\r';

        if (!empty($cartInfo['number'])) {
            $addressHTML .= $this->l('Card Number') . ': XXXX XXXX XXXX ' . $cartInfo['number'] . '<br /><br />' . '\n\r' . '\n\r';
        }
        if ($isCustomAddress) {
            $addressHTML .= $cartInfo['firstname'] . ' ' . $cartInfo['lastname'] . '<br />' . '\n\r';
            $addressHTML .= $cartInfo['address'] . '<br />' . '\n\r';
            $addressHTML .= $cartInfo['city'] . ' ' . $cartInfo['zip'] . '<br />' . '\n\r';

            if (!empty($cartInfo['country'])) {
                $country = new Country($cartInfo['country']);
                $addressHTML .= $this->l('Country') . ': ' . $country->name[$cartObj->id_lang] . '<br />' . '\n\r';
            } elseif (!empty($cartInfo['country_name'])) {
                $addressHTML .= $this->l('Country') . ': ' . $cartInfo['country_name'] . '<br />' . '\n\r';
            }
            if (!empty($cartInfo['state'])) {
                $state = new State($cartInfo['state']);
                $addressHTML .= $this->l('State') . ': ' . $state->name . '<br />' . '\n\r';
            } elseif (!empty($cartInfo['state_name'])) {
                $addressHTML .= $this->l('State') . ': ' . $cartInfo['state_name'] . '<br />' . '\n\r';
            }
        } else {
            $addressHTML .= $address->firstname . ' ' . $address->lastname . '<br />' . '\n\r';
            $addressHTML .=!empty($address->company) ? $address->company . '<br />' . '\n\r' : '';
            $addressHTML .= $address->address1 . ' ' . $address->address2 . '<br />' . '\n\r';
            $addressHTML .= $address->postcode . ' ' . $address->city . '<br />' . '\n\r';

            if (!empty($address->country)) {
                $addressHTML .= $this->l('Country') . ': ' . $address->country . '<br />' . '\n\r';
            }
            if (!empty($address->id_state)) {
                $state = new State($address->id_state);
                $addressHTML .= $this->l('State') . ': ' . $state->name . '<br />' . '\n\r';
            }
        }

        $cartHTML = '<table cellpadding="2">' . '\n\r';
        foreach ($cartObj->getProducts() as $product) {
            $cartHTML .= '<tr>';
            $cartHTML .= '<td> ' . $product['quantity'] . '</td>';
            $cartHTML .= '<td>x</td>';
            $cartHTML .= '<td> ' . Tools::displayPrice($product['price']) . '</td>';
            $cartHTML .= '<td> ' . Tools::displayPrice($product['total']) . '</td>';

            $cartHTML .= '<td> ' . $product['name'] . '</td>';
            $cartHTML .= '</tr>' . '\n\r';
        }

        $cartHTML .= '<tr>';
        $cartHTML .= '<td colspan="2"></td>';

        $cartHTML .= '<td align="right"> ' . $this->l('Total') . '</td>';
        $cartHTML .= '<td> ' . Tools::displayPrice($cartObj->getOrderTotal()) . '</td>';
        $cartHTML .= '</tr>' . '\n\r';

        $cartHTML .= '</table>';

        $arrEm = array(
            '{customer_email}' => $customerObj->email,
            '{customer_ip}' => $_SERVER['REMOTE_ADDR'],
            '{error}' => $errorText,
            '{cartHTML}' => $cartHTML,
            '{cartTXT}' => strip_tags($cartHTML),
            '{addressHTML}' => $addressHTML,
            '{addressTXT}' => strip_tags($addressHTML)
        );
        Mail::Send(Language::getIdByIso('en'), $template, $this->l('Transaction failed'), $arrEm, $email, null, null, null, null, null, _PS_MODULE_DIR_ . Tools::strtolower($this->name) . '/views/templates/emails/');
    }
}
