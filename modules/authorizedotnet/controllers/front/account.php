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

class AuthorizedotnetAccountModuleFrontController extends ModuleFrontController
{
    public $ssl = true;

    /** @var AuthorizedotnetAPI */
    protected $auth_api;

    /** @var Authorizedotnet */
    public $module;

    public function setMedia()
    {
        parent::setMedia();
        $this->addJS($this->module->getPathUri().'views/js/account.js');
        $this->addCSS($this->module->getPathUri().'views/css/account.css');
    }

    public function init()
    {
        parent::init();
        $this->auth_api = new AuthorizedotnetAPI($this->module);
    }

    public function postProcess()
    {
        parent::postProcess();

        if (Tools::getValue('ajax'))
        {
            switch (Tools::getValue('subaction'))
            {
                case 'getCardForm':
                    $response = $this->getCardFormAction((int) Tools::getValue('id'));
                    die($response);

                case 'saveCardForm':
                    $response = $this->saveCardFormAction((int) Tools::getValue('id'));
                    die(Tools::jsonEncode($response));

                case 'loadListCards':
                    $response = $this->loadListCardsAction(true);
                    die($response);

                case 'deleteCard':
                    $response = $this->deleteCardAction((int) Tools::getValue('id'));
                    die(Tools::jsonEncode($response));

                default:
                    break;
            }
        }
    }

    public function initContent()
    {
        if (Configuration::get('ADN_SHOW_LEFT') == 0)
        {
            $this->display_column_left = false;
        }

        if (!$this->context->customer->isLogged())
        {
            Tools::redirect('index.php?controller=authentication&redirect=module&module=authorizedotnet&action=account');
        }

        parent::initContent();

        $this->loadListCardsAction();

        $this->context->smarty->assign([
            'psvADN' => 1,
            'linkADN' => $this->context->link->getModuleLink('authorizedotnet', 'account', [], true)
        ]);

        $this->setTemplate('module:authorizedotnet/views/templates/front/cim/list.tpl');
    }

    public function loadListCardsAction($ajax = false)
    {
        $card_list = $this->auth_api->getCardsListByCustomerId($this->context->customer->id);
        foreach ($card_list as $key => $card)
        {
            if (empty($card['title']))
            {
                $card_list[$key]['title'] = $card['card_type'].' '.str_replace('X', 'x', $card['last4digit']);
            }
        }

        $this->context->smarty->assign([
            'cardsList' => $card_list,
            'psvADN' => 1
        ]);

        $card_list_html = $this->context->smarty->fetch('module:authorizedotnet/views/templates/front/cim/cards_list.tpl');

        if ($ajax)
        {
            return $card_list_html;
        }
        else
        {
            $this->context->smarty->assign([
                'htmlCardsList' => $card_list_html
            ]);
        }
    }

    public function getCardFormAction($id)
    {
        $cardData = [];
        if (empty($id))
        {
            $cardData['card_name'] = $this->context->customer->firstname . ' ' . $this->context->customer->lastname;
        }

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

        if (!empty($id))
        {
            $card_info = $this->auth_api->getPaymentProfileById($id, $this->context->customer->id);
            $card_info['exp_date'] = explode('-', $card_info['exp_date']);

            if (empty($card_info['title']))
            {
                $card_info['title'] = $card_info['card_type'].' '.str_replace('X', 'x', $card_info['last4digit']);
            }

            $card_info['last4digit'] = str_repeat('*', 12) . Tools::substr($card_info['last4digit'], 4, 4);

            $this->context->smarty->assign([
                'cardInfo' => $card_info
            ]);
        }

        $this->context->smarty->assign([
            'id' => $id,
            'years' => $years,
            'months' => $months,
            'card_data' => $cardData,
            'addresses' => $this->context->customer->getAddresses($this->context->language->id),
            'this_path_ssl' => $this->module->getHttpPathModule(),
            'adn_visa' => $this->module->_adn_visa,
            'adn_mc' => $this->module->_adn_mc,
            'adn_amex' => $this->module->_adn_amex,
            'adn_discover' => $this->module->_adn_discover,
            'adn_jcb' => $this->module->_adn_jcb,
            'adn_diners' => $this->module->_adn_diners,
            'adn_enroute' => $this->module->_adn_enroute,
        ]);

        return $this->context->smarty->fetch('module:authorizedotnet/views/templates/front/cim/form.tpl');
    }

    public function saveCardFormAction($id)
    {
        $card_description = Tools::getValue('card_description');
        $card_description = trim($card_description);

        $card_number = Tools::getValue('card_number');
        $card_number = trim($card_number);

        $exp_year = Tools::getValue('card_exp_year');
        $exp_year = trim($exp_year);

        $exp_month = Tools::getValue('card_exp_month');
        $exp_month = trim($exp_month);

        $card_name = Tools::getValue('card_name');
        $card_name = trim($card_name);

        $card_address = Tools::getValue('card_address');
        $card_address = (int) $card_address;

        $errors = $this->validateForm(
            $card_description,
            $card_number,
            $exp_year,
            $exp_month,
            $card_name,
            $card_address
        );

        if (count($errors))
        {
            return [
                'status' => 'error',
                'errors' => $errors
            ];
        }

        $name = explode(' ', $card_name);

        $firstname = '';
        $lastname = '';
        if (is_array($name) && count($name) == 2) {
            $firstname = trim($name[0]);
            $lastname = trim($name[1]);
        }

        $bill_address = $this->getAddressInformation($card_address);
        if ($bill_address['id_customer'] != $this->context->customer->id)
        {
            return [
                'status' => 'error',
                'errors' => [$this->module->l('Address is not valid')]
            ];
        }

        $card_info = $this->auth_api->getPaymentProfileById($id, $this->context->customer->id);

        $old_last_digits = str_repeat('*', 12) . Tools::substr((!empty($card_info['last4digit']) ? $card_info['last4digit'] : ''), 4, 4);

        $data = [
            'id_customer' => $this->context->customer->id,
            'email' => $this->context->customer->email,
            'description' => $this->context->customer->firstname.' '.$this->context->customer->lastname,
            'customer_payment_profile_id' => $id,
            'customer_profile_id' => $card_description,
            'title' => $card_description,
            'card_number' => $card_number == $old_last_digits ? $card_info['last4digit'] : $card_number,
            'exp_date' => $exp_year.'-'.$exp_month,
            'bill_firstname' => $firstname,
            'bill_lastname' => $lastname,
            'bill_company' => $bill_address['company'],
            'bill_address' => $bill_address['address1'].' '.$bill_address['address2'],
            'bill_city' => $bill_address['city'],
            'bill_state' => $bill_address['name_state'],
            'bill_zip' => $bill_address['postcode'],
            'bill_country' => $bill_address['country'],
            'bill_phoneNumber' => $bill_address['phone'],
            'id_address' => $bill_address['id_address']
        ];

        $response = $this->auth_api->saveProfile($data);
        if (!$response)
        {
            return [
                'status' => 'error',
                'errors' => [$this->auth_api->getLastError()]
            ];
        }

        return [
            'status' => 'successful',
        ];
    }

    protected function validateForm($card_description, $card_number, $exp_year, $exp_month, $card_name, $card_address)
    {
        $errors = [];

        if ($card_description == '')
        {
            $errors[] = $this->module->l('<b>Payment Method Name </b>is required');
        }

        if ($card_number == '')
        {
            $errors[] = $this->module->l('<b>Card Number </b>is required');
        }

        if ((int) $exp_year == 0)
        {
            $errors[] = $this->module->l('<b>Select Expiration year</b>is required');
        }

        if ((int) $exp_month == 0)
        {
            $errors[] = $this->module->l('<b>Select Expiration month</b>is required');
        }

        if ($card_name == '')
        {
            $errors[] = $this->module->l('<b>First / Last Name </b>is required');
        }

        if ((int) $card_address == 0)
        {
            $errors[] = $this->module->l('<b>Select Address</b>is required');
        }

        return $errors;
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
            'country' => $address->country,
            'id_state' => (int) ($address->id_state),
            'name_state' => ($state->name),
            'id_address' => $address->id,
            'id_customer' => $address->id_customer
        );
    }

    public function deleteCardAction($id)
    {
        $response = $this->auth_api->deleteCustomerPaymentProfile($this->context->customer->id, $id);
        if (!$response)
        {
            return [
                'status' => 'error',
                'errors' => [$this->auth_api->getLastError()]
            ];
        }

        return [
            'status' => 'successful',
        ];
    }
}
