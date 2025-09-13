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

class AuthorizedotnetValidationdpnModuleFrontController extends ModuleFrontController
{
    public $ssl = true;

    /** @var AuthorizedotnetAPI */
    protected $auth_api;

    /** @var Authorizedotnet */
    public $module;

    public function setMedia()
    {
        parent::setMedia();
        $this->addJS($this->module->getPathUri().'views/js/statesManagement.js');
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

            $cart = new Cart(str_replace('"', '', Tools::getValue('id_cart')));

            $transaction_data = [
                'poNumber' => $cart->id
            ];

            if ($this->module->_adn_get_address)
            {
                $bill_address = array(
                    'bill_firstname' => Tools::getValue('x_first_name'),
                    'bill_lastname' => Tools::getValue('x_last_name'),
                    'bill_address' => Tools::getValue('x_address'),
                    'bill_city' => Tools::getValue('x_city'),
                    'bill_state_name' => Tools::getValue('x_state'),
                    'bill_country_name' => Tools::getValue('x_country'),
                    'bill_zip' => Tools::getValue('x_zip'),
                    'bill_company' => ''
                );
            }
            else
            {
                $bill_address = $this->getAddressInformation($cart->id_address_invoice, 'bill');
            }
            $transaction_data['bill'] = $bill_address;

            $delivery_address = $this->getAddressInformation($cart->id_address_delivery, 'ship');
            $transaction_data['ship'] = $delivery_address;

            $transaction_data['payment'] = [
                'opaqueData' => [
                    'dataDescriptor' => Tools::getValue('dataDescriptor'),
                    'dataValue' => Tools::getValue('dataValue'),
                ]
            ];

            $amount = number_format($cart->getOrderTotal(true, Cart::BOTH), 2, '.', '');
            $transaction_data['amount'] = $amount;

            $id_lang = 0;
            foreach (Language::getLanguages() as $language)
            {
                if ($language['iso_code'] == 'en')
                {
                    $id_lang = $language['id_lang'];
                    break;
                }
            }

            if ($id_lang == $cart->id_lang)
            {
                $id_lang = 0;
            }

            $unwanted_array = ['Š'=>'S', 'š'=>'s', 'Ž'=>'Z', 'ž'=>'z', 'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E',
                'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O', 'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U',
                'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss', 'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c',
                'è'=>'e', 'é'=>'e', 'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o',
                'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'þ'=>'b', 'ÿ'=>'y'];

            $items = [];
            foreach ($cart->getProducts() as $key => $product)
            {
                $name = $product['name'];
                if ($id_lang > 0)
                {
                    $eng_product = new Product($product['id_product']);
                    $name = $eng_product->name[$id_lang];
                }
                $name = strtr($name, $unwanted_array);
                $name = utf8_decode($name);

                $items[] = [
                    'itemId' => $product['id_product'],
                    'name' => Tools::substr(str_replace('&','', $name), 0, 30),
                    'description' => '',
                    'quantity' => $product['cart_quantity'],
                    'unitPrice' => number_format($product['price_wt'], 2, '.', '')
                ];

                if ($key >= 30)
                {
                    break;
                }
            }
            $transaction_data['lineItems'] = $items;

            if ($this->module->_adn_type == 'AUTH_ONLY')
            {
                $response = $this->auth_api->authorizeCreditCart($transaction_data);
            }
            else
            {
                $response = $this->auth_api->chargeCreditCart($transaction_data);
            }

            if (!$response)
            {
                $api_message = $this->auth_api->getLastError();
                $message = $this->module->getTranslator()->trans('The was an error processing your payment', array(), 'Modules.AuthorizeDotNet').'<br />Details: '.$api_message;

                if ($this->module->_adn_ft == 1 && !empty($this->module->_adn_ft_email))
                {
                    $this->module->sendErrorEmail($this->module->_adn_ft_email, $cart, $api_message, 'error', $bill_address, $this->module->_adn_get_address);
                }

                die($message);
            }

            if ($response['transactionResponse']['responseCode'] != '1') /* Card declined */
            {
                $api_message = $response['transactionResponse']['errors']['error']['errorCode'].' '.$response['transactionResponse']['errors']['error']['errorText'];
                $message = $this->module->getTranslator()->trans('The was an error processing your payment', array(), 'Modules.AuthorizeDotNet').'<br />Details: '.$api_message;

                if ($this->module->_adn_ft == 1 && !empty($this->module->_adn_ft_email))
                {
                    $this->module->sendErrorEmail($this->module->_adn_ft_email, $cart, $api_message, 'error', $bill_address, $this->module->_adn_get_address);
                }

                die($message);
            }
            else /* Succesfull */
            {
                $this->module->validateOrder(
                    (int) $cart->id,
                    ($this->module->_adn_type == 'AUTH_ONLY' ? $this->module->_adn_auth_status : _PS_OS_PAYMENT_),
                    $transaction_data['amount'],
                    $this->module->displayName,
                    null,
                    [],
                    null,
                    false,
                    $this->context->customer->secure_key
                );

                $order = new Order((int) ($this->module->currentOrder));

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
                $message->id_customer = $cart->id_customer;
                $message->id_order = $order->id;
                $message->private = 1;
                $message->id_employee = 0;
                $message->id_cart = $cart->id;
                $message->add();

                $cardLast4Digit = Tools::substr($response['transactionResponse']['accountNumber'], -4);

                Db::getInstance()->Execute('INSERT INTO `' . _DB_PREFIX_ . "authorizedotnet_refunds` VALUES ('$order->id','".pSQL($transId)."','".pSQL($cardLast4Digit)."','".pSQL($authCode)."','".($this->module->_adn_type == 'AUTH_ONLY' ? '0' : '1')."','".pSQL($accountType)."', 0)");

                $payments = $order->getOrderPaymentCollection();
                foreach ($payments as $payment)
                {
                    /** @var OrderPayment $payment */
                    $payment->transaction_id = $transId;
                    $payment->card_number = $accountNumber;
                    $payment->card_brand = $accountType;
                    $payment->card_holder = $bill_address['bill_firstname'].' '.$bill_address['bill_lastname'];
                    $payment->update();
                }

                @ob_end_clean();

                echo 'url:'.$this->module->getRedirectBaseUrl().'key=' . $this->context->customer->secure_key.'&id_cart='.(int) $cart->id.'&id_module='.(int) $this->module->id.'&id_order='.(int) $this->module->currentOrder;
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
        $this->setTemplate('module:authorizedotnet/views/templates/front/validationdpn.tpl');
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

        $default_currency = (int) Configuration::get('PS_CURRENCY_DEFAULT');
        if ($context->cart->id_currency != $default_currency && $context->cart->_adn_currency == 1)
        {
            $context->cart->id_currency = $default_currency;
            if (is_object($context->cookie))
            {
                $context->cookie->id_currency = $default_currency;
            }

            $context->currency = new Currency($default_currency);
            $context->cart->update();
        }

        $address_invoice = new Address((int) ($context->cart->id_address_invoice));
        $address_delivery = new Address((int) ($context->cart->id_address_delivery));
        $state_invoice = new State((int) $address_invoice->id_state);
        $state_delivery = new State($address_delivery->id_state);
        $address_delivery->state = $state_delivery->iso_code;

        $countries = Country::getCountries((int) ($context->cookie->id_lang), true);
        $countriesList = '';
        foreach ($countries as $country)
        {
            $countriesList .= '<option value="'.(int) $country['id_country'].'" '.($country['id_country'] == $address_invoice->id_country ? 'selected="selected"' : '').'>'.htmlentities($country['name'], ENT_COMPAT, 'UTF-8').'</option>';
        }

        if ($address_invoice->id_state)
        {
            $context->smarty->assign('id_state', $state_invoice->iso_code);
        }

        $translator = $context->getTranslator();
        $conditionsToApproveFinder = new ConditionsToApproveFinder($context, $translator);
        $conditions_to_approve = $conditionsToApproveFinder->getConditionsToApproveForTemplate();

        $currencies = Currency::getCurrencies();
        $context->smarty->assign('this_path', __PS_BASE_URI__ . 'modules/authorizedotnet/');
        $context->smarty->assign('countries_list', $countriesList);
        $context->smarty->assign('countries', $countries);
        $context->smarty->assign('address', $address_invoice);
        $context->smarty->assign('currencies', $currencies);

        $context->smarty->assign([
            'conditions_to_approve' => $conditions_to_approve,
            'adn_payment_page' => $module->_adn_payment_page,
            'adn_total' => number_format($context->cart->getOrderTotal(true, Cart::BOTH), 2, '.', ''),
            'this_path_ssl' => $module->getHttpPathModule(),
            'adn_cc_fname' => $address_invoice->firstname,
            'adn_cc_lname' => $address_invoice->lastname,
            'adn_cc_address' => $address_invoice->address1,
            'adn_cc_city' => $address_invoice->city,
            'adn_cc_state' => $state_invoice->iso_code ? $state_invoice->iso_code : 'NA',
            'adn_cc_zip' => $address_invoice->postcode,
            'adn_cc_company' => $address_invoice->company,
            'adn_cc_phone' => !empty($address_invoice->phone) ? $address_invoice->phone : $address_invoice->phone_mobile,
            'adn_cc_err' => (!empty($errors) ? implode('<br>', $errors) : ''),
            'adn_get_address' => Configuration::get('ADN_GET_ADDRESS'),
            'adn_get_cvm' => Configuration::get('ADN_GET_CVM'),
            'adn_public_client_key' => $module->adn_public_client_key,
            'adn_id' => $module->_adn_id,
            'adn_visa' => $module->_adn_visa,
            'adn_mc' => $module->_adn_mc,
            'adn_amex' => $module->_adn_amex,
            'adn_discover' => $module->_adn_discover,
            'adn_jcb' => $module->_adn_jcb,
            'adn_diners' => $module->_adn_diners,
            'adn_enroute' => $module->_adn_enroute,
            'adn_years' => $years,
            'adn_months' => $months,
            'adn_filename' => $module->getAdnFilename(),
            'post_url' => $module->getValidationLink($module->getAdnFilename()),
            'id_cart' => (int) $context->cart->id,
            'pc_payment_module_adn' => $module->name
        ]);

        if ((int) (ceil(number_format($context->cart->getOrderTotal(true, Cart::BOTH), 2, '.', ''))) == 0)
        {
            Tools::redirect('order.php?step=1');
        }
    }
}
