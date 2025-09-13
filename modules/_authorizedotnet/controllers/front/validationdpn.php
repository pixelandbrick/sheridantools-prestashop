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

class AuthorizedotnetValidationdpnModuleFrontController extends ModuleFrontController
{

    public $ssl = true;

    /*
     * For using in the files vlidationdpn.php
     */
    public $module;

    public function setMedia()
    {
        parent::setMedia();
        $this->addJS(__PS_BASE_URI__ . 'modules/authorizedotnet/views/js/statesManagement.js');
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

    public function getFingerprint($api_login_id, $transaction_key, $amount, $fp_sequence, $currency_code, $fp_timestamp)
    {
        if (function_exists('hash_hmac')) {
            return hash_hmac('md5', $api_login_id . '^' . $fp_sequence . '^' . $fp_timestamp . '^' . $amount . '^' . $currency_code, $transaction_key);
        }
        return bin2hex(mhash(MHASH_MD5, $api_login_id . '^' . $fp_sequence . '^' . $fp_timestamp . '^' . $amount . '^' . $currency_code, $transaction_key));
    }

    public function postProcess()
    {
        $cart = $this->context->cart;
        $cookie = $this->context->cookie;

        $this->module = $adn = new AuthorizeDotNet();
        /* Validate order */
        $time = time();
        $adn_cc_err = '';
        $adn_filename = 'validationdpn';

        $this->context->smarty->assign(array(
            'pc_payment_module_adn' => $adn->name
        ));

        $confirm = Tools::getValue('confirm');
        if ($confirm) {
            /*
             * Send payment to ADN
             */
            $cart = new Cart(str_replace('"', '', Tools::getValue('id_cart')));
            $customer = new Customer((int) ($cart->id_customer));
            $dataDescriptor = Tools::getValue('dataDescriptor');
            $dataDescriptor = Tools::getValue('dataDescriptor');
            $dataValue = Tools::getValue('dataValue');

            $cartInfo = array();
            if ($adn->_adn_get_address) {
                $cartInfo = array(
                    'firstname' => Tools::getValue('x_first_name'),
                    'lastname' => Tools::getValue('x_last_name'),
                    'address' => Tools::getValue('x_address'),
                    'city' => Tools::getValue('x_city'),
                    'state_name' => Tools::getValue('x_state'),
                    'country_name' => Tools::getValue('x_country'),
                    'zip' => Tools::getValue('x_zip')
                );

                $x_first_name = Tools::getValue('x_first_name');
                $x_last_name = Tools::getValue('x_last_name');
                $x_address = Tools::getValue('x_address');
                $x_city = Tools::getValue('x_city');
                $x_state = Tools::getValue('x_state');
                $x_country = Tools::getValue('x_country');
                $x_zip = Tools::getValue('x_zip');

                $x_company = '';
            } else {
                $address = new Address((int) ($cart->id_address_invoice));
                $state = new State($address->id_state);

                $x_first_name = $address->firstname;
                $x_last_name = $address->lastname;
                $x_address = $address->address1;
                $x_city = $address->city;
                $x_state = $state->iso_code;
                $x_country = $address->country;
                $x_zip = $address->postcode;
                $x_company = $address->company;
            }

            $id_address_delivery = $cart->id_address_delivery;

            $addressDelivery = new Address($id_address_delivery);
            $stateDelivery = new State($addressDelivery->id_state);

            $delivery_first_name = $addressDelivery->firstname;
            $delivery_last_name = $addressDelivery->lastname;
            $delivery_address = $addressDelivery->address1;
            $delivery_city = $addressDelivery->city;
            $delivery_state = $stateDelivery->iso_code;
            $delivery_country = $addressDelivery->country;
            $delivery_zip = $addressDelivery->postcode;
            $delivery_company = $addressDelivery->company;

            $orderCurrency = new Currency((int) $cart->id_currency);
            $x_amount = number_format($cart->getOrderTotal(true, Cart::BOTH), 2, '.', '');

            $products = $cart->getProducts();

            $id_lang = 0;
            $languages = Language::getLanguages();
            foreach ($languages as $language) {
                if ($language['iso_code'] == 'en') {
                    $id_lang = $language['id_lang'];
                }
            }
            if ($id_lang == $cart->id_lang) {
                $id_lang = 0;
            }

            $xmlProducts = '';
            $i = 1;
            foreach ($products as $product) {
                $name = $product['name'];
                if ($id_lang > 0) {
                    $eng_product = new Product($product['id_product']);
                    $name = $eng_product->name[$id_lang];
                }
                $name = utf8_decode($name);

                $xmlProducts .= '<lineItem>
                                <itemId>' . $product['id_product'] . '</itemId>
                                <name>' . Tools::substr($name, 0, 30) . '</name>
                                <description></description>
                                <quantity>' . $product['cart_quantity'] . '</quantity>
                                <unitPrice>' . number_format($product['price_wt'], 2, '.', '') . '</unitPrice>
                              </lineItem>';
                $i++;
                if ($i == 30) {
                    break;
                }
            }

            $transRequestXmlStr = '<?xml version="1.0" encoding="UTF-8"?>
                <createTransactionRequest xmlns="AnetApi/xml/v1/schema/AnetApiSchema.xsd">
                      <merchantAuthentication>
                        <name>' . $adn->_adn_id . '</name>
                        <transactionKey>' . $adn->_adn_key . '</transactionKey>
                      </merchantAuthentication>
                      <transactionRequest>
                         <transactionType>' . ($adn->_adn_type == 'AUTH_ONLY' ? 'authOnlyTransaction' : 'authCaptureTransaction') . '</transactionType>
                         <amount>' . $x_amount . '</amount>
                         <currencyCode>' . $orderCurrency->iso_code . '</currencyCode>
                         <payment>
                            <opaqueData>
                               <dataDescriptor>' . $dataDescriptor . '</dataDescriptor>
                               <dataValue>' . $dataValue . '</dataValue>
                            </opaqueData>
                         </payment>
                        <lineItems>' . $xmlProducts . '</lineItems>
                        <poNumber>' . $cart->id . '</poNumber>
                        <billTo>
                          <firstName>' . $x_first_name . '</firstName>
                          <lastName>' . $x_last_name . '</lastName>
                          <company>' . $x_company . '</company>
                          <address>' . $x_address . '</address>
                          <city>' . $x_city . '</city>
                          <state>' . $x_state . '</state>
                          <zip>' . $x_zip . '</zip>
                          <country>' . $x_country . '</country>
                        </billTo>
                        <shipTo>
                          <firstName>' . $delivery_first_name . '</firstName>
                          <lastName>' . $delivery_last_name . '</lastName>
                          <company>' . $delivery_company . '</company>
                          <address>' . $delivery_address . '</address>
                          <city>' . $delivery_city . '</city>
                          <state>' . $delivery_state . '</state>
                          <zip>' . $delivery_zip . '</zip>
                          <country>' . $delivery_country . '</country>
                        </shipTo>
                      </transactionRequest>
                </createTransactionRequest>
                ';

            $url = "https://api2.authorize.net/xml/v1/request.api";

            try { //setting the curl parameters.
                $ch = curl_init();
                if (false === $ch) {
                    $jsonReturn = $adn->l('Curl init failed');
                    echo $jsonReturn;

                    if ($adn->_adn_ft == 1 && !empty($adn->_adn_ft_email)) {
                        $adn->sendErrorEmail($adn->_adn_ft_email, $cart, $jsonReturn, 'error', $cartInfo, $adn->_adn_get_address);
                    }
                    exit();
                }
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/xml'));
                curl_setopt($ch, CURLOPT_POSTFIELDS, $transRequestXmlStr);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 300);
                // The following two curl SSL options are to "false" for ease of development/debug purposes only.
                // Any code used in production should either remove these lines or set them to the appropriate
                // values to properly use secure connections for PCI-DSS compliance.
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true); //for production, set value to true or 1
                curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2); //for production, set value to 2
                curl_setopt($ch, CURLOPT_DNS_USE_GLOBAL_CACHE, false);
                $content = curl_exec($ch);
                //print_r($content);
                $content = str_replace('xmlns="AnetApi/xml/v1/schema/AnetApiSchema.xsd"', '', $content);
                if (false === $content) {
                    $jsonReturn = curl_error($ch) . ' - ' . curl_errno($ch);
                    echo $jsonReturn;
                    if ($adn->_adn_ft == 1 && !empty($adn->_adn_ft_email)) {
                        $adn->sendErrorEmail($adn->_adn_ft_email, $cart, $jsonReturn, 'error', $cartInfo, $adn->_adn_get_address);
                    }
                    exit();
                }
                curl_close($ch);

                $xmlResult = simplexml_load_string($content);

                if ($xmlResult->messages->resultCode == 'Error') {
                    $jsonReturn = $xmlResult->messages->message->code . ' - ' . $xmlResult->messages->message->text;
                    echo $jsonReturn;
                    if ($adn->_adn_ft == 1 && !empty($adn->_adn_ft_email)) {
                        $adn->sendErrorEmail($adn->_adn_ft_email, $cart, $jsonReturn, 'error', $cartInfo, $adn->_adn_get_address);
                    }
                    exit();
                } else if ($xmlResult->messages->resultCode == 'Ok') {
                    if ($xmlResult->transactionResponse->responseCode != '1') {
                        /* Card declined */
                        $jsonReturn = $xmlResult->transactionResponse->errors->error->errorCode . ' - ' . $xmlResult->transactionResponse->errors->error->errorText;
                        echo $jsonReturn;
                        if ($adn->_adn_ft == 1 && !empty($adn->_adn_ft_email)) {
                            $adn->sendErrorEmail($adn->_adn_ft_email, $cart, $jsonReturn, 'error', $cartInfo, $adn->_adn_get_address);
                        }
                        exit();
                    } else {
                        /* Succesfull */
                        $total = $x_amount;
                        $adn->validateOrder((int) ($cart->id), $adn->_adn_type == 'AUTH_ONLY' ? $adn->_adn_auth_status : _PS_OS_PAYMENT_, $total, $adn->displayName, null, array(), null, false, $customer->secure_key);

                        $authCode = $xmlResult->transactionResponse->authCode;
                        $transId = $xmlResult->transactionResponse->transId;
                        $transHash = $xmlResult->transactionResponse->transHash;
                        $accountNumber = $xmlResult->transactionResponse->accountNumber; // XXXX1234
                        $accountType = $xmlResult->transactionResponse->accountType; // Visa

                        $order = new Order((int) ($adn->currentOrder));

                        $message = new Message();
                        $message->message = ($adn->_adn_type == 'AUTH_ONLY' ? $adn->getTranslator()->trans('Authorization Only - ', array(), 'Modules.AuthorizeDotNet') : '') . $adn->getTranslator()->trans('Transaction ID: ', array(), 'Modules.AuthorizeDotNet') . $transId . $adn->getTranslator()->trans(' - Last 4 digits of the card: ', array(), 'Modules.AuthorizeDotNet') . $accountNumber . $adn->getTranslator()->trans(' - AVS Response: ', array(), 'Modules.AuthorizeDotNet') . $authCode . $adn->getTranslator()->trans(' - Card Hash Response: ', array(), 'Modules.AuthorizeDotNet') . $transHash;
                        $message->id_customer = $cart->id_customer;
                        $message->id_order = $order->id;
                        $message->private = 1;
                        $message->id_employee = 0;
                        $message->id_cart = $cart->id;
                        $message->add();

                        $cardLast4Digit = Tools::substr($accountNumber, -4);

                        //print_r($response_array); die();
                        $customerPaymentProfileId = 0;
                        Db::getInstance()->Execute('INSERT INTO `' . _DB_PREFIX_ . "authorizedotnet_refunds` VALUES ('$order->id','" . pSQL($transId) . "','" . pSQL($cardLast4Digit) . "','" . pSQL($authCode) . "','" . ($adn->_adn_type == 'AUTH_ONLY' ? '0' : '1') . "','" . pSQL($accountType) . "', '" . (int) $customerPaymentProfileId . "')");

                        $payments = $order->getOrderPaymentCollection();
                        foreach ($payments as $payment) {
                            /** @var OrderPayment $payment */
                            $payment->transaction_id = $transId;
                            $payment->card_number = $accountNumber;
                            $payment->card_brand = $accountType;
                            $payment->card_holder = $x_first_name . ' ' . $x_last_name;
                            $payment->update();
                        }

                        @ob_end_clean();

                        echo 'url:' . $adn->getRedirectBaseUrl() . 'key=' . $customer->secure_key . '&id_cart=' . (int) ($cart->id) . '&id_module=' . (int) ($adn->id) . '&id_order=' . (int) ($adn->currentOrder);
                        exit();
                    }
                }
            } catch (Exception $e) {
                $jsonReturn = sprintf('Curl failed with error #%d: %s', $e->getCode(), $e->getMessage());
                echo $jsonReturn;
                if ($adn->_adn_ft == 1 && !empty($adn->_adn_ft_email)) {
                    $adn->sendErrorEmail($adn->_adn_ft_email, $cart, $jsonReturn, 'error', $cartInfo, $adn->_adn_get_address);
                }

                exit();
            }
        }

        self::prepareVarsView($this->context, $adn, $adn_cc_err, $time);
        //$this->context->smarty->fetch('validationdpn.tpl');
        $this->setTemplate('module:authorizedotnet/views/templates/front/validationdpn.tpl');
    }

    public static function prepareVarsView($context, $adn, $adn_cc_err, $time)
    {

        $cart = $context->cart;
        $cookie = $context->cookie;

        $adn = new AuthorizeDotNet();
        /* Validate order */
        $time = time();
        $adn_cc_err = '';
        $adn_filename = 'validationdpn';

        $context->smarty->assign(array(
            'pc_payment_module_adn' => $adn->name
        ));


        $address = new Address((int) ($cart->id_address_invoice));
        $customer = new Customer((int) ($cart->id_customer));
        $state = new State((int) $address->id_state);
        $selectedCountry = (int) ($address->id_country);
        // NEW DPM CODE
        $address_delivery = new Address((int) ($cart->id_address_delivery));
        //$currency_module = Currency::getIdByIsoCode('USD');//$this->getCurrency();
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
        // get cart currency for set to ADN request
        $orderCurrency = new Currency((int) $cart->id_currency);
        $x_amount = number_format($cart->getOrderTotal(true, Cart::BOTH), 2, '.', '');


        $del_state = new State($address_delivery->id_state);
        $address_delivery->state = $del_state->iso_code;
        $i = 1;
        $id_lang = 0;
        $languages = Language::getLanguages();
        foreach ($languages as $language) {
            if ($language['iso_code'] == 'en') {
                $id_lang = $language['id_lang'];
            }
        }
        if ($id_lang == $cart->id_lang) {
            $id_lang = 0;
        }


        $countries = Country::getCountries((int) ($context->cookie->id_lang), true);
        $countriesList = '';
        foreach ($countries as $country) {
            $countriesList .= '<option value="' . ($country['id_country']) . '" ' . ($country['id_country'] == $selectedCountry ? 'selected="selected"' : '') . '>' . htmlentities($country['name'], ENT_COMPAT, 'UTF-8') . '</option>';
        }

        if ($address->id_state) {
            $context->smarty->assign('id_state', $state->iso_code);
        }


        $years = array();
        for ($i = date('Y'); $i < date('Y') + 10; $i++) {
            $years[$i] = $i;
        }

        $months = array();
        for ($i = 1; $i < 13; $i++) {
            $pi = $i < 10 ? '0' . $i : $i;
            $months[$pi] = $pi;
        }
        $translator = $context->getTranslator();
        $conditionsToApproveFinder = new ConditionsToApproveFinder($context, $translator);
        $conditions_to_approve = $conditionsToApproveFinder->getConditionsToApproveForTemplate();

        $currencies = Currency::getCurrencies();
        $context->smarty->assign('this_path', __PS_BASE_URI__ . 'modules/authorizedotnet/');
        $context->smarty->assign('countries_list', $countriesList);
        $context->smarty->assign('countries', $countries);
        $context->smarty->assign('address', $address);
        $context->smarty->assign('currencies', $currencies);

        $adn_filename = $adn->getAdnFilename();
        $context->smarty->assign(
            array(
                'conditions_to_approve' => $conditions_to_approve,
                'adn_payment_page' => $adn->_adn_payment_page,
                'adn_total' => $x_amount,
                'this_path_ssl' => $adn->getHttpPathModule(),
                'adn_cc_fname' => $address->firstname,
                'adn_cc_lname' => $address->lastname,
                'adn_cc_address' => $address->address1,
                'adn_cc_city' => $address->city,
                'adn_cc_state' => $state->iso_code ? $state->iso_code : 'NA',
                'adn_cc_zip' => $address->postcode,
                'adn_cc_company' => $address->company,
                'adn_cc_phone' => !empty($address->phone) ? $address->phone : $address->phone_mobile,
                'adn_cc_err' => Tools::getValue('adn_err'),
                'adn_get_address' => Configuration::get('ADN_GET_ADDRESS'),
                'adn_get_cvm' => Configuration::get('ADN_GET_CVM'),
                'adn_public_client_key' => $adn->adn_public_client_key,
                'adn_id' => $adn->_adn_id,
                'adn_visa' => $adn->_adn_visa,
                'adn_mc' => $adn->_adn_mc,
                'adn_amex' => $adn->_adn_amex,
                'adn_discover' => $adn->_adn_discover,
                'adn_jcb' => $adn->_adn_jcb,
                'adn_diners' => $adn->_adn_diners,
                'adn_enroute' => $adn->_adn_enroute,
                'adn_years' => $years,
                'adn_months' => $months,
                'id_cart' => $cart->id,
                'post_url' => $adn->getValidationLink($adn_filename),
                'id_cart' => (int) $cart->id
            )
        );
        if ((int) (ceil(number_format($cart->getOrderTotal(true, 3), 2, '.', ''))) == 0) {
            Tools::redirect('order.php?step=1');
        }

        $context->smarty->assign('adn_filename', $adn_filename);

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
