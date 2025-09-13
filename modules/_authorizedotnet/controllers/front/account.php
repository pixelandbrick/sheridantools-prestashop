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

class AuthorizedotnetAccountModuleFrontController extends ModuleFrontController
{

    public $ssl = true;
    protected $adn;
    protected $adnCIM;
    public $errors = array();

    public function setMedia()
    {
        parent::setMedia();
        $this->addJS(__PS_BASE_URI__ . 'modules/authorizedotnet/views/js/account.js');
        $this->addCSS(__PS_BASE_URI__ . 'modules/authorizedotnet/views/css/account.css');
    }

    public function init()
    {
        /*
          if (Configuration::get('ADN_SHOW_LEFT') == 0) {
          $this->display_column_left = false;
          }
         */
        $this->adn = new authorizedotnet();
        parent::init();
    }

    public function getErrors()
    {
        return $this->errors;
    }

    public function getAdnCIM()
    {
        if ($this->adnCIM === null) {
            $this->adnCIM = new AuthorizedotnetCIM($this->adn->_adn_id, $this->adn->_adn_key, $this->adn->_adn_demo_mode);
        }
        return $this->adnCIM;
    }

    public function initContent()
    {
        if (Configuration::get('ADN_SHOW_LEFT') == 0) {
            $this->display_column_left = false;
        }

        if (!Context::getContext()->customer->isLogged()) {
            Tools::redirect('index.php?controller=authentication&redirect=module&module=authorizedotnet&action=account');
        }
        $context = Context::getContext();
        parent::initContent();

        if (Tools::getValue('ajax')) {
            switch (Tools::getValue('subaction')) {
                case 'getCardForm':
                    $jsonReturn = $this->getCardFormAction(Tools::getValue('id'));
                    if (isset($jsonReturn) && !empty($jsonReturn)) {
                        echo Tools::jsonEncode($jsonReturn);
                    }
                    die();
                    break;
                case 'saveCardForm':
                    $jsonReturn = $this->saveCardFormAction(Tools::getValue('id'));
                    echo Tools::jsonEncode($jsonReturn);
                    die();
                    break;
                case 'loadListCards':
                    $jsonReturn = $this->loadListCardsAction();
                    echo $jsonReturn;
                    die();
                    break;
                case 'deleteCard':
                    $jsonReturn = $this->deleteCardAction();
                    echo $jsonReturn;
                    die();
                    break;
                default:
                    break;
            }
        } else if (Context::getContext()->customer->id) {
            $this->loadListCardsAction();
            $link = new Link();
            $context->smarty->assign(array(
                'psvADN' => 1,
                'linkADN' => $link->getModuleLink('authorizedotnet', 'account', array(), true)
            ));
            $this->setTemplate('module:authorizedotnet/views/templates/front/cim/list.tpl');
            //echo $this->context->smarty->fetch('module:authorizedotnet/views/templates/front/cim/list.tpl');
        }
    }

    public function postProcess()
    {
        $this->initContent();
    }

    public function deleteCardAction()
    {
        $customerId = (int) Context::getContext()->customer->id;
        $id = (int) Tools::getValue('id');
        $retDelete = $this->getAdnCIM()->deleteCustomerPaymentProfile($id, $customerId);

        if ($retDelete) {
            $jsonReturn = array(
                'status' => 'successful',
            );
        } else {
            $jsonReturn = array(
                'status' => 'error',
                'errors' => $this->getAdnCIM()->getErrors()
            );
        }
        echo Tools::jsonEncode($jsonReturn);
    }

    public function loadListCardsAction()
    {
        $customerId = Context::getContext()->customer->id;
        $cardsList = $this->getAdnCIM()->getCardsListByCustomerId($customerId);
        foreach ($cardsList as &$cardRow) {
            if (empty($cardRow['title'])) {
                $cardRow['title'] = $cardRow['card_type'] . ' ' . str_replace('X', 'x', $cardRow['last4digit']);
            }
        }
        $context = Context::getContext();
        $context->smarty->assign(array(
            'cardsList' => $cardsList,
            'psvADN' => 1
        ));

        $htmlCardsList = $context->smarty->fetch('module:authorizedotnet/views/templates/front/cim/cards_list.tpl');

        if (Tools::getValue('ajax')) {
            echo $this->context->smarty->fetch('module:authorizedotnet/views/templates/front/cim/cards_list.tpl');
        } else {
            $context->smarty->assign('htmlCardsList', $htmlCardsList);
        }
    }

    public function validateForm()
    {
        $errors = array();
        if (Tools::getValue('card_name') == '') {
            $errors[] = $this->adn->l('<b>First / Last Name </b>is required');
        }
        if (Tools::getValue('card_description') == '') {
            $errors[] = $this->adn->l('<b>Payment Method Name </b>is required');
        }
        if (Tools::getValue('card_number') == '') {
            $errors[] = $this->adn->l('<b>Card Number </b>is required');
        }
        if ((int) Tools::getValue('card_address') == 0) {
            $errors[] = $this->adn->l('<b>Select Address</b>is required');
        }
        return $errors;
    }

    public function saveCardFormAction($id)
    {
        $errors = $this->validateForm();
        $context = Context::getContext();
        if (empty($errors)) {
            $cookie = $context->cookie;
            $customer = new Customer($cookie->id_customer);

            $name = explode(' ', Tools::getValue('card_name'));

            $firstname = '';
            $lastname = '';

            if (is_array($name) && count($name) == 2) {
                $firstname = trim($name[0]);
                $lastname = trim($name[1]);
            }

            $billAddress = $this->getAddressInformation((int) Tools::getValue('card_address'));

            $customerId = (int) Context::getContext()->customer->id;

            if ($billAddress['id_customer'] != $customerId) {
                $errors = array();

                $errors[] = $this->adn->l('Address is not valid');

                $jsonReturn = array(
                    'status' => 'error',
                    'errors' => $errors
                );
                return $jsonReturn;
            }
            $cardInfo = $this->getAdnCIM()->getPaymentProfileById($id, $customerId);

            $oldLast4digit = str_repeat('*', 12) . Tools::substr($cardInfo['last4digit'], 4, 4);

            $data = array(
                'id_customer' => $customer->id,
                'email' => $customer->email,
                'description' => $customer->firstname . ' ' . $customer->lastname,
                'customer_payment_profile_id' => Tools::getValue('id'),
                'customer_profile_id' => Tools::getValue('card_description'),
                'title' => Tools::getValue('card_description'),
                'card_number' => Tools::getValue('card_number') == $oldLast4digit ? $cardInfo['last4digit'] : Tools::getValue('card_number'),
                'exp_date' => Tools::getValue('card_exp_year') . '-' . Tools::getValue('card_exp_month'),
                'bill_firstname' => $firstname,
                'bill_lastname' => $lastname,
                'bill_company' => $billAddress['company'],
                'bill_address' => $billAddress['address1'] . ' ' . $billAddress['address2'],
                'bill_city' => $billAddress['city'],
                'bill_state' => $billAddress['name_state'],
                'bill_zip' => $billAddress['postcode'],
                'bill_country' => $billAddress['name_country'],
                'bill_phoneNumber' => $billAddress['phone'],
                'id_address' => $billAddress['id_address']
            );

            $jsonReturn = array();
            if ($this->getAdnCIM()->saveProfile($data)) {
                $jsonReturn = array(
                    'status' => 'successful',
                );
            } else {
                $jsonReturn = array(
                    'status' => 'error',
                    'errors' => $this->getAdnCIM()->getErrors()
                );
            }
        } else {
            $jsonReturn = array(
                'status' => 'error',
                'errors' => $errors
            );
        }
        return $jsonReturn;
    }

    public function getCardFormAction($id)
    {
        $cardData = array();
        $context = Context::getContext();
        if ($id == 0) {
            $cookie = $context->cookie;
            $customer = new Customer($cookie->id_customer);
            $cardData['card_name'] = $customer->firstname . ' ' . $customer->lastname;
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

        $id = (int) Tools::getValue('id');

        if (!empty($id)) {
            $customerId = (int) Context::getContext()->customer->id;
            $cardInfo = $this->getAdnCIM()->getPaymentProfileById($id, $customerId);
            $cardInfo['exp_date'] = explode('-', $cardInfo['exp_date']);
            if (empty($cardInfo['title'])) {
                $cardInfo['title'] = $cardInfo['card_type'] . ' ' . str_replace('X', 'x', $cardInfo['last4digit']);
            }
            $cardInfo['last4digit'] = str_repeat('*', 12) . Tools::substr($cardInfo['last4digit'], 4, 4);

            $context->smarty->assign('cardInfo', $cardInfo);
        }

        $customer = Context::getContext()->customer;

        $addresses = $customer->getAddresses(Context::getContext()->language->id);

        $context->smarty->assign(
            array(
                'id' => $id,
                'years' => $years,
                'months' => $months,
                'card_data' => $cardData,
                'addresses' => $addresses,
                'this_path_ssl' => $this->adn->getHttpPathModule(),
                'adn_visa' => $this->adn->_adn_visa,
                'adn_mc' => $this->adn->_adn_mc,
                'adn_amex' => $this->adn->_adn_amex,
                'adn_discover' => $this->adn->_adn_discover,
                'adn_jcb' => $this->adn->_adn_jcb,
                'adn_diners' => $this->adn->_adn_diners,
                'adn_enroute' => $this->adn->_adn_enroute,
            )
        );

        echo $this->context->smarty->fetch('module:authorizedotnet/views/templates/front/cim/form.tpl');
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
            'id_address' => $address->id,
            'id_customer' => $address->id_customer
        );
    }
}
