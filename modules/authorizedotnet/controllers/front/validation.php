<?php
/**
 * 2008 - 2020 Presto-Changeo
 *
 * MODULE Authorize.net (API / DPM)
 *
 * @author    Presto-Changeo <info@presto-changeo.com>
 * @copyright Copyright (c) permanent, Presto-Changeo
 * @license   Addons PrestaShop license limitation
 * @version   2.0.3
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

    /** @var AuthorizedotnetAPI */
    protected $auth_api;

    /** @var Authorizedotnet */
    public $module;

    public function setMedia()
    {
        parent::setMedia();
        $this->addJS($this->module->getPathUri().'views/js/authorizedotnet.js');
        $this->addCSS($this->module->getPathUri().'views/css/authorizedotnet.css');
    }

    public function init()
    {
        parent::init();
        $this->auth_api = new AuthorizedotnetAPI($this->module);
    }

    public function postProcess()
    {
        if (Tools::getValue('confirm'))
        {
            if (!$this->auth_api)
            {
                $this->auth_api = new AuthorizedotnetAPI($this->module);
            }

            $existing_card = Tools::getValue('adn_exist_card');
            $save_card = Tools::getValue('adn_save_card');

            if ($existing_card)
            {
                $payment_profile = $this->auth_api->getPaymentProfileById($existing_card, $this->context->customer->id);
                if (is_array($payment_profile))
                {
                    $payment_profile['card_number'] = $payment_profile['last4digit'];
                }
            }
            else
            {
                $last4 = Tools::substr(Tools::getValue('adn_cc_number'), -4);
                $payment_profile = $this->auth_api->getCustomerPaymentProfileByCard($last4, $this->context->customer->id);
            }

            if (!is_array($payment_profile))
            {
                $payment_profile = [];
            }

            $payment_profile_id = 0;
            if (!empty($payment_profile))
            {
                $payment_profile_id = $payment_profile['customer_payment_profile_id'];
            }

            $data = [
                'id_address' => $this->context->cart->id_address_invoice,
                'is_hidden' => $save_card ? 0 : 1,
            ];
            $data['bill'] = $this->getAddressInformation($this->context->cart->id_address_invoice, 'bill');
            $data['ship'] = $this->getAddressInformation($this->context->cart->id_address_delivery, 'ship');

            $data = array_merge($data, $payment_profile);

            if (!$existing_card)
            {
                $data = array_merge($data, [
                    'id_customer' => $this->context->customer->id,
                    'email' => $this->context->customer->email,
                    'description' => $this->context->customer->firstname.' '.$this->context->customer->lastname,
                    'customer_payment_profile_id' => $payment_profile_id,
                    'title' => Tools::getValue('adn_cc_title'),
                    'card_number' => Tools::getValue('adn_cc_number'),
                    'exp_date' => Tools::getValue('adn_cc_Year') . '-' . Tools::getValue('adn_cc_Month'),
                ]);
            }

            $profile_data = [];
            if ($this->module->_adn_cim && !($profile_data = $this->auth_api->saveProfile($data)))
            {
                $message = $this->module->getTranslator()->trans('The was an error processing your payment', array(), 'Modules.AuthorizeDotNet').'<br />Details: '.$this->auth_api->getLastError();
                if ($this->module->_adn_payment_page)
                {
                    die($message);
                }
                else
                {
                    $this->errors[] = $message;
                    return;
                }
            }

            $data = array_merge($data, $profile_data);

            $payment_profile_id = isset($profile_data['customer_payment_profile_id']) ? $profile_data['customer_payment_profile_id'] : '';
            if ($save_card && $this->module->_adn_cim_save && !$existing_card)
            {
                $this->context->cookie->cppi = $profile_data['customer_payment_profile_id'];
            }

            if (!$existing_card)
            {
                $data = array_merge($data, [
                    'payment' => [
                        'cardNumber' => Tools::getValue('adn_cc_number'),
                        'expirationDate' => Tools::getValue('adn_cc_Year') . '-' . Tools::getValue('adn_cc_Month'),
                        'cardCode' => Tools::getValue('adn_cc_cvm')
                    ]
                ]);
            }

            $response = $this->doPayment($data);

            if ($response && $response['transactionResponse']['responseCode'] == '1')
            {
                $this->module->validateOrder(
                    $this->context->cart->id,
                    $this->module->_adn_type == 'AUTH_ONLY' ? $this->module->_adn_auth_status : _PS_OS_PAYMENT_,
                    number_format($this->context->cart->getOrderTotal(true, Cart::BOTH), 2, '.', ''),
                    $this->module->displayName,
                    null,
                    [],
                    null,
                    false,
                    $this->context->customer->secure_key
                );

                $order = new Order($this->module->currentOrder);

                $authCode = $response['transactionResponse']['authCode'];
                $accountNumber = $response['transactionResponse']['accountNumber'];
                $transId = $response['transactionResponse']['transId'];
                $transHash = $response['transactionResponse']['transHashSha2'];
                $accountType = $response['transactionResponse']['accountType'];

                $message_text = '';
                if ($this->module->_adn_type == 'AUTH_ONLY')
                {
                    $message_text .= $this->module->getTranslator()->trans('Authorization Only - ', [], 'Modules.AuthorizeDotNet');
                }
                $message_text .= $this->module->getTranslator()->trans('Transaction ID: ', [], 'Modules.AuthorizeDotNet');
                $message_text .= $transId;
                $message_text .= $this->module->getTranslator()->trans(' - Last 4 digits of the card: ', [], 'Modules.AuthorizeDotNet');
                $message_text .= $accountNumber;
                $message_text .= $this->module->getTranslator()->trans(' - AVS Response: ', array(), 'Modules.AuthorizeDotNet');
                $message_text .= $authCode;
                $message_text .= $this->module->getTranslator()->trans(' - Card Code Response: ', array(), 'Modules.AuthorizeDotNet');
                $message_text .= $transHash;

                $message = new Message();
                $message->message = $message_text;
                $message->id_customer = $order->id_customer;
                $message->id_order = $order->id;
                $message->private = 1;
                $message->id_employee = 0;
                $message->id_cart = $order->id_cart;
                $message->add();

                if (!empty(Tools::getValue('adn_cc_number')))
                {
                    $cardLast4Digit = Tools::substr(Tools::getValue('adn_cc_number'), -4);
                }
                else
                {
                    $cardData = $this->auth_api->getPaymentProfileById($payment_profile_id, $this->context->customer->id);
                    $cardLast4Digit = Tools::substr($cardData['last4digit'], -4);
                }

                Db::getInstance()->execute('INSERT INTO `' . _DB_PREFIX_ . "authorizedotnet_refunds` VALUES ('$order->id','".pSQL($transId)."','".pSQL($cardLast4Digit)."','".pSQL($authCode)."','".($this->module->_adn_type == 'AUTH_ONLY' ? '0' : '1')."','".pSQL($accountType)."', '".(int) $payment_profile_id."')");

                $payments = $order->getOrderPaymentCollection();
                $firstname = Tools::getValue('adn_cc_fname');
                $lastname = Tools::getValue('adn_cc_lname');

                foreach ($payments as $payment)
                {
                    /** @var OrderPayment $payment */
                    $payment->transaction_id = $transId;
                    $payment->card_number = $accountNumber;
                    $payment->card_brand = $accountType;
                    $payment->card_holder = $firstname.' '.$lastname;
                    $payment->update();
                }

                $link = $this->module->getRedirectBaseUrl() . 'key=' . $this->context->customer->secure_key . '&id_cart=' . (int) ($order->id_cart) . '&id_module=' . (int) ($this->module->id) . '&id_order=' . (int) ($this->module->currentOrder);
                if (!$this->module->_adn_payment_page)
                {
                    Tools::redirectLink($link);
                }
                else
                {
                    @ob_end_clean();
                    echo 'url:'.$link;
                    die();
                }
            }

            $this->errors[] = $this->module->getTranslator()->trans('There was an error processing your payment', array(), 'Modules.AuthorizeDotNet').'<br />Details: '.$this->auth_api->getLastError();

            if ($response && $this->module->_adn_ft == 1 && !empty($this->module->_adn_ft_email))
            {
                $cartInfo = [];

                if ($this->module->_adn_get_address)
                {
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

                $messages = [];
                foreach ($response['transactionResponse']['messages'] as $message)
                {
                    $messages[] = $message['code'].' '.$message['description'];
                }
                $messages = implode('<br>', $messages);

                $this->module->sendErrorEmail($this->module->_adn_ft_email, $this->context->cart, $messages, 'error', $cartInfo, $this->module->_adn_get_address);
            }

            if ($this->module->_adn_payment_page)
            {
                if (!empty($this->errors))
                {
                    echo implode('<br>', $this->errors);
                }

                die();
            }
        }
    }

    public function initContent()
    {
        if (Configuration::get('ADN_SHOW_LEFT') == 0)
        {
            $this->display_column_left = false;
        }

        parent::initContent();

        self::prepareVarsView($this->context, $this->module, $this->auth_api, $this->errors);
        $this->setTemplate('module:authorizedotnet/views/templates/front/validation.tpl');
    }

    public function doPayment($data)
    {
        $shipping_cost = number_format($this->context->cart->getOrderTotal(!Product::getTaxCalculationMethod(), Cart::ONLY_SHIPPING), 2, '.', '');
        $amount_wot = number_format($this->context->cart->getOrderTotal(false, Cart::BOTH), 2, '.', '');
        $amount = number_format($this->context->cart->getOrderTotal(true, Cart::BOTH), 2, '.', '');

        $tax = $amount - $amount_wot;

        $items = [];
        $description = '';
        $i = 1;
        foreach ($this->context->cart->getProducts() as $product)
        {
            $items[] = [
                'itemId' => $product['id_product'],
                'name' => utf8_decode($product['name']),
                'description' => '',
                'quantity' => $product['cart_quantity'],
                'unitPrice' => number_format($product['price'], 2, '.', ''),
                'taxable' => 'false',
            ];
            $description .= ($i == 1 ? '' : ', ') . $product['quantity'] . ' X ' . Tools::substr(utf8_decode($product['name']), 0, 30);
            $i++;
        }

        $transaction_data = [
            'amount' => $amount,
            'tax' => $tax,
            'cartId' => $this->context->cart->id,
            'shipping' => [
                'amount' => $shipping_cost,
            ],
            'order' => [
                'invoiceNumber' => 'Cart #' . $this->context->cart->id,
                'description' => $description
            ],
            'lineItems' => $items,
            'customerProfileId' => isset($data['customer_profile_id']) ? $data['customer_profile_id'] : '',
            'customerPaymentProfileId' => isset($data['customer_payment_profile_id']) ? $data['customer_payment_profile_id'] : '',
            'bill' => $data['bill'],
            'ship' => $data['ship'],
            'customerIP' => $_SERVER['REMOTE_ADDR'],
            'payment' => [
                'creditCard' => [
                    'cardNumber' => $data['payment']['cardNumber'],
                    'expirationDate' => $data['payment']['expirationDate'],
                    'cardCode' => $data['payment']['cardCode']
                ]
            ]
        ];

        if ($this->module->_adn_type == 'AUTH_ONLY')
        {
            $response = $this->auth_api->authorizeCreditCart($transaction_data);
        }
        else
        {
            $response = $this->auth_api->chargeCreditCart($transaction_data);
        }

        return $response;
    }

    public function getAddressInformation($id_address, $prefix = '')
    {
        $address = new Address($id_address);
        $state = new State($address->id_state);

        $prefix = (!empty($prefix) ? $prefix.'_' : '');

        return [
            $prefix.'email' => $this->context->customer->email,
            $prefix.'lastname' => Tools::htmlentitiesUTF8($address->lastname),
            $prefix.'firstname' => Tools::htmlentitiesUTF8($address->firstname),
            $prefix.'vat_number' => Tools::htmlentitiesUTF8($address->vat_number),
            $prefix.'dni' => Tools::htmlentitiesUTF8($address->dni),
            $prefix.'address1' => Tools::htmlentitiesUTF8($address->address1),
            $prefix.'address2' => Tools::htmlentitiesUTF8($address->address2),
            $prefix.'address' => Tools::htmlentitiesUTF8($address->address1).' '.Tools::htmlentitiesUTF8($address->address2),
            $prefix.'company' => Tools::htmlentitiesUTF8($address->company),
            $prefix.'postcode' => Tools::htmlentitiesUTF8($address->postcode),
            $prefix.'zip' => Tools::htmlentitiesUTF8($address->postcode),
            $prefix.'city' => Tools::htmlentitiesUTF8($address->city),
            $prefix.'phone' => Tools::htmlentitiesUTF8($address->phone),
            $prefix.'phoneNumber' => Tools::htmlentitiesUTF8($address->phone),
            $prefix.'phone_mobile' => Tools::htmlentitiesUTF8($address->phone_mobile),
            $prefix.'id_country' => (int) ($address->id_country),
            $prefix.'country' => $address->country,
            $prefix.'id_state' => (int) ($address->id_state),
            $prefix.'name_state' => ($state->name),
        ];
    }

    /**
     * @param $context Context
     * @param $module Authorizedotnet
     * @param $auth_api AuthorizedotnetAPI
     * @param $errors string[]
     * @throws PrestaShopDatabaseException
     * @throws PrestaShopException
     */
    public static function prepareVarsView($context, $module, $auth_api, $errors)
    {
        $years = [];
        for ($i = date('Y'); $i < date('Y') + 10; $i++)
        {
            $years[$i] = $i;
        }

        $months = [];
        for ($i = 1; $i < 13; $i++)
        {
            $month = str_pad($i, 2, '0', STR_PAD_LEFT);
            $months[$month] = $month;
        }

        $card_list = $auth_api->getCardsListByCustomerId($context->customer->id);

        $default_currency = (int) Configuration::get('PS_CURRENCY_DEFAULT');
        if ($context->cart->id_currency != $default_currency && $module->_adn_currency == 1)
        {
            $context->cart->id_currency = $default_currency;
            if (is_object($context->cookie))
            {
                $context->cookie->id_currency = $default_currency;
            }

            $context->currency = new Currency($default_currency);
            $context->cart->update();
        }

        $confirm = Tools::getValue('confirm');
        if (!$confirm)
        {
            $address = new Address((int) ($context->cart->id_address_invoice));
            $state = new State($address->id_state);
            $selected_country = (int) ($address->id_country);
        } else
        {
            $selected_country = (int) (Tools::getValue('adn_id_country'));
            $address = new Address((int) ($context->cart->id_address_invoice));
        }

        $countries = Country::getCountries((int) ($context->cookie->id_lang), true);
        $countriesList = '';
        foreach ($countries as $country)
        {
            $countriesList .= '<option value="'.(int) $country['id_country'].'" ' . ($country['id_country'] == $selected_country ? 'selected="selected"' : '') . '>'.htmlentities($country['name'], ENT_COMPAT, 'UTF-8').'</option>';
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

        $context->smarty->assign([
            'conditions_to_approve' => $conditions_to_approve,
            'adn_payment_page' => $module->_adn_payment_page,
            'adn_total' => number_format($context->cart->getOrderTotal(true, Cart::BOTH), 2, '.', ''),
            'action' => $context->link->getModuleLink($module->name, 'validation', array(), true),
            'adn_cim' => $module->_adn_cim,
            'adn_filename' => $module->getAdnFilename(),
            'this_path_ssl' => $module->getHttpPathModule(),
            'adn_cc_fname' => $confirm ? Tools::getValue('adn_cc_fname') : "$address->firstname",
            'adn_cc_lname' => $confirm ? Tools::getValue('adn_cc_lname') : "$address->lastname",
            'adn_cc_address' => $confirm ? Tools::getValue('adn_cc_address') : $address->address1,
            'adn_cc_city' => $confirm ? Tools::getValue('adn_cc_city') : $address->city,
            'adn_cc_state' => $confirm ? Tools::getValue('adn_cc_state') : $state->iso_code,
            'adn_cc_zip' => $confirm ? Tools::getValue('adn_cc_zip') : $address->postcode,
            'adn_cc_number' => Tools::getValue('adn_cc_number'),
            'adn_cc_cvm' => Tools::getValue('adn_cc_cvm'),
            'adn_cc_err' => (!empty($errors) ? implode('<br>', $errors) : ''),
            'adn_get_address' => Configuration::get('ADN_GET_ADDRESS'),
            'adn_get_cvm' => Configuration::get('ADN_GET_CVM'),
            'adn_visa' => $module->_adn_visa,
            'adn_mc' => $module->_adn_mc,
            'adn_amex' => $module->_adn_amex,
            'adn_discover' => $module->_adn_discover,
            'adn_jcb' => $module->_adn_jcb,
            'adn_diners' => $module->_adn_diners,
            'adn_enroute' => $module->_adn_enroute,
            'adn_years' => $years,
            'adn_months' => $months,
            'adn_list_cards' => $card_list,
            'pc_payment_module_adn' => $module->name
        ]);

        if ((int) (ceil(number_format($context->cart->getOrderTotal(true, Cart::BOTH), 2, '.', ''))) == 0)
        {
            Tools::redirect('order.php?step=1');
        }
    }
}
