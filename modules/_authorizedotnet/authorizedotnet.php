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

use PrestaShop\PrestaShop\Core\Payment\PaymentOption;

require_once(_PS_MODULE_DIR_ . 'authorizedotnet/PrestoChangeoClasses/init.php');

if (!defined('_PS_VERSION_')) {
    exit;
}

class Authorizedotnet extends PaymentModule
{

    protected $_html = '';
    protected $_postErrors = array();
    public $_adn_id = '';
    public $_adn_secure_key = '';
    public $_adn_key = '';
    public $_adn_md_hash = '';
    public $_adn_type = '';
    public $_adn_api = '';
    public $_secure_key = '';
    public $_adn_auth_status = '';
    public $_adn_capture_status = '';
    public $_adn_refund_status = '';
    private $_adn_payment_method = '';
    public $_adn_get_address = '';
    private $_adn_get_cvm = '';
    private $_adn_update_currency = '';
    public $_adn_visa = '';
    public $_adn_mc = '';
    public $_adn_amex = '';
    public $_adn_discover = '';
    public $_adn_jcb = '';
    public $_adn_diners = '';
    public $_adn_enroute = '';
    public $_adn_demo_mode = '';
    public $_adn_payment_page = '';
    public $_adn_currency = '';
    public $_adn_customer_email = '';
    public $_adn_show_left = '';
    public $_adn_cim = '';
    public $_adn_cim_save = '';
    public $_adn_ac_status = '';
    public $adn_public_client_key = '';

    /**
     * ft = failed_transaction
     */
    public $_adn_ft = '';
    public $_adn_ft_email = '';
    protected $_full_version = 20100;

    public function __construct()
    {
        $this->name = 'authorizedotnet';
        $this->tab = 'payments_gateways';
        $this->version = '2.0.1';

        $this->ps_versions_compliancy = array('min' => '1.7', 'max' => _PS_VERSION_);
        $this->author = 'Presto-changeo';
        $this->controllers = array('validation');
        $this->is_eu_compatible = 1;

        $this->currencies = true;
        $this->currencies_mode = 'checkbox';

        $this->bootstrap = true;
        parent::__construct();

        $this->_refreshProperties();

        $this->displayName = $this->l('Authorize.net (AIM / DPM)');
        $this->description = $this->l('Receive and Refund payments using Authorize.net (AIM or DPM)');

        if (!count(Currency::checkPaymentCurrencies($this->id))) {
            $this->warning = $this->l('No currency has been set for this module.');
        }
        if ($this->_adn_id == '' || $this->_adn_key == '') {
            $this->warning = $this->l('You must enter your Authorize.net API infomation, for details on how to get them click "Configure"');
        }
    }

    public function install()
    {
        $secure_key = md5(mt_rand() . time());

        if (!parent::install() || !$this->registerHook('backOfficeHeader')|| !$this->registerHook('displayHeader') || !$this->registerHook('paymentOptions') || !$this->registerHook('paymentReturn')) {
            return false;
        }
        if (!Configuration::updateValue('ADN_TYPE', 'AUTH_CAPTURE') || !Configuration::updateValue('ADN_VISA', '1') || !Configuration::updateValue('ADN_API', 'AIM') || !Configuration::updateValue('ADN_AUTH_STATUS', '2') || !Configuration::updateValue('ADN_PAYMENT_PAGE', '1') || !Configuration::updateValue('ADN_GET_ADDRESS', '1') || !Configuration::updateValue('ADN_GET_CVM', '1') || !Configuration::updateValue('ADN_SECURE_KEY', $secure_key) || !Configuration::updateValue('ADN_DEMO_MODE', '1') || !Configuration::updateValue('ADN_MC', '1') || !Configuration::updateValue('ADN_FT', '0') || !Configuration::updateValue('ADN_CIM', '0') || !Configuration::updateValue('ADN_FT_EMAIL', '') || !Configuration::updateValue('ADN_CUSTOMER_EMAIL', '1') || !Configuration::updateValue('ADN_ADMINHOOK_ADDED', '1')) {
            return false;
        }

        return true;
    }

    protected function isColumnExistInTable($column, $table)
    {
        $sqlExistsColumn = 'SELECT * FROM information_schema.COLUMNS WHERE TABLE_SCHEMA=DATABASE()
                        AND COLUMN_NAME="' . pSQL($column) . '" AND TABLE_NAME="' . pSQL(_DB_PREFIX_ . $table) . '"; ';
        $exists = Db::getInstance()->ExecuteS($sqlExistsColumn);
        return !empty($exists);
    }

    /**
     * Method for register hook for installed module
     */
    public function registerHookWithoutInstall($hookname, $module_prefix)
    {
        $varName = $module_prefix . '_' . Tools::strtoupper($hookname) . '_ADDED';

        if (Configuration::get($varName) != 1) {
            $hookId = Hook::getIdByName($hookname);
            $isExistModule = Hook::getModulesFromHook($hookId, $this->id);

            if (empty($isExistModule)) {
                if ($this->registerHook($hookname)) {
                    Configuration::updateValue($varName, '1');
                }
            } else {
                // if module already istalled just set variable = 1
                Configuration::updateValue($varName, '1');
            }
        }
    }

    protected function applyUpdatesAlertTable()
    {
        // from module verstion 1.4.3 ADN_ALTER_TABLE = 2
        if (Configuration::get('ADN_ALTER_TABLE') != 2) {
            if (!$this->isColumnExistInTable('details', 'authorizedotnet_refund_history')) {
                Db::getInstance()->Execute('ALTER TABLE `' . _DB_PREFIX_ . 'authorizedotnet_refund_history` ADD `details` varchar(255)  AFTER `amount`');
            }
            if (!$this->isColumnExistInTable('auth_code', 'authorizedotnet_refunds')) {
                Db::getInstance()->Execute('ALTER TABLE `' . _DB_PREFIX_ . 'authorizedotnet_refunds` ADD `auth_code` varchar(10) NOT NULL AFTER `card`');
            }
            if (!$this->isColumnExistInTable('captured', 'authorizedotnet_refunds')) {
                Db::getInstance()->Execute('ALTER TABLE `' . _DB_PREFIX_ . 'authorizedotnet_refunds` ADD `captured` TINYINT(1) NOT NULL DEFAULT \'0\' AFTER `auth_code`');
            }
            Configuration::updateValue('ADN_ALTER_TABLE', '2');
        }
        Configuration::updateValue('ADN_ALTER_TABLE_3', '2');
        if (Configuration::get('ADN_ALTER_TABLE_3') != 3) {
            if (!$this->isColumnExistInTable('card_type', 'authorizedotnet_refunds')) {
                Db::getInstance()->Execute('ALTER TABLE `' . _DB_PREFIX_ . 'authorizedotnet_refunds` ADD `card_type` varchar(32) NOT NULL AFTER `captured`');
            }
            if (!$this->isColumnExistInTable('customer_payment_profile_id', 'authorizedotnet_refunds')) {
                Db::getInstance()->Execute('ALTER TABLE `' . _DB_PREFIX_ . 'authorizedotnet_refunds` ADD `customer_payment_profile_id` varchar(30) NOT NULL DEFAULT \'0\' AFTER `card_type`');
            }
            Configuration::updateValue('ADN_ALTER_TABLE_3', '3');
        }
    }

    private function _refreshProperties()
    {
        $this->_adn_id = Configuration::get('ADN_ID');
        $this->_adn_key = Configuration::get('ADN_KEY');
        $this->_adn_api = Configuration::get('ADN_API');
        $this->_adn_md_hash = Configuration::get('ADN_MD_HASH');
        $this->_adn_type = Configuration::get('ADN_TYPE');
        $this->_adn_secure_key = Configuration::get('ADN_SECURE_KEY');
        $this->_adn_update_currency = (int) (Configuration::get('ADN_UPDATE_CURRENCY'));
        $this->_adn_payment_page = (int) (Configuration::get('ADN_PAYMENT_PAGE'));
        #$this->_adn_cim = (int) (Configuration::get('ADN_CIM'));
        $this->_adn_cim = 0;
        $this->_adn_cim_save = 0;
        $this->_adn_customer_email = (int) (Configuration::get('ADN_CUSTOMER_EMAIL'));
        $this->_adn_ft = (int) (Configuration::get('ADN_FT'));
        $this->_adn_ft_email = Configuration::get('ADN_FT_EMAIL');
        $this->_adn_get_address = (int) (Configuration::get('ADN_GET_ADDRESS'));
        $this->_adn_get_cvm = (int) (Configuration::get('ADN_GET_CVM'));
        $this->_adn_visa = (int) (Configuration::get('ADN_VISA'));
        $this->_adn_mc = (int) (Configuration::get('ADN_MC'));
        $this->_adn_amex = (int) (Configuration::get('ADN_AMEX'));
        $this->_adn_discover = (int) (Configuration::get('ADN_DISCOVER'));
        $this->_adn_jcb = (int) (Configuration::get('ADN_JCB'));
        $this->_adn_diners = (int) (Configuration::get('ADN_DINERS'));
        $this->_adn_enroute = (int) (Configuration::get('ADN_ENROUTE'));
        $this->_adn_capture_status = (int) (Configuration::get('ADN_CAPTURE_STATUS'));
        $this->_adn_auth_status = (int) (Configuration::get('ADN_AUTH_STATUS'));
        $this->_adn_refund_status = (int) (Configuration::get('ADN_REFUND_STATUS'));
        $this->_adn_demo_mode = (int) (Configuration::get('ADN_DEMO_MODE'));
        $this->_adn_show_left = (int) (Configuration::get('ADN_SHOW_LEFT'));
        $this->_adn_currency = Configuration::get('ADN_CURRENCY');
        $this->adn_public_client_key = Configuration::get('ADN_PUBLIC_CLIENT_KEY');
        $this->_last_updated = Configuration::get('PRESTO_CHANGEO_UC');
        $this->_adn_ac_status = Configuration::get('ADN_AC_STATUS');
    }

    protected function applyUpdates()
    {
        /**
         * set by default Email custoler: not emailed
         */
        if (Configuration::get('ADN_CUSTOMER_EMAIL') === false) {
            Configuration::updateValue('ADN_CUSTOMER_EMAIL', '1');
            $this->_refreshProperties();
        }
        $query = 'CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'authorizedotnet_cim_profile` (
                  `id_customer` int(11) NOT NULL,
                  `customer_profile_id` bigint(20) NOT NULL,
                  `email` varchar(256) NOT NULL,
                  `description` varchar(256) NOT NULL,
                  PRIMARY KEY  (`id_customer`),
                  KEY `customer_profile_id` (`customer_profile_id`)
                ) ENGINE=InnoDb;';
        Db::getInstance()->execute($query);

        $query = 'CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'authorizedotnet_cim_payment_profile` (
                  `customer_payment_profile_id` bigint(20),
                  `id_customer` int(11) NOT NULL,
                  `title` varchar(128) NOT NULL,
                  `customer_profile_id` bigint(20) NOT NULL,
                  `last4digit` varchar(30) NOT NULL,
                  `exp_date` varchar(32) NOT NULL,
                  `card_type` varchar(32) NOT NULL,
                  `bill_firstname` varchar(64) NOT NULL,
                  `bill_lastname` varchar(64) NOT NULL,
                  `tx_id` varchar(64) NOT NULL,
                  `is_hidden` varchar(30) NOT NULL,
                  `id_address`  int(11) NOT NULL,
                  PRIMARY KEY  (`customer_payment_profile_id`),
                  KEY `id_customer` (`id_customer`),
                  KEY `customer_profile_id` (`customer_profile_id`)
                ) ENGINE=InnoDB;';
        Db::getInstance()->execute($query);

        $query = 'CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'authorizedotnet_refunds` (
                  `id_order` int(11) NOT NULL,
                  `id_trans` varchar(30) NOT NULL,
                  `card` varchar(4) NOT NULL,
                  `auth_code` varchar(10) NOT NULL,
                  `captured` TINYINT( 1 ) NOT NULL DEFAULT \'0\',
                  PRIMARY KEY  (`id_order`)
                ) ENGINE=MyISAM;';
        Db::getInstance()->execute($query);

        $query = 'CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'authorizedotnet_refund_history` (
                        `id_refund` int(11) unsigned NOT NULL auto_increment,
                        `id_order` int(11) NOT NULL,
                        `amount` varchar(20) NOT NULL,
                        `date` datetime NOT NULL,
                        `details` varchar(255) NOT NULL,
                        PRIMARY KEY  (`id_refund`)
                        ) ENGINE=MyISAM;';
        Db::getInstance()->execute($query);

        $query = 'CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'authorizedotnet_cim_address` (
                        `id_address` int(11) NOT NULL,
                        `id_address_adn` bigint(20) NOT NULL,
                        `customer_profile_id` bigint(20) NOT NULL,
                  PRIMARY KEY  (`id_address`)
                ) ENGINE=MyISAM;';
        Db::getInstance()->execute($query);
        $this->applyUpdatesAlertTable();

        /**
         * update hook module without reinstall module
         */
        $this->registerHookWithoutInstall('adminOrder', 'ADN');
        $this->registerHookWithoutInstall('header', 'ADN');
        $this->registerHookWithoutInstall('displayCustomerAccount', 'ADN');
        $this->registerHookWithoutInstall('backOfficeHeader', 'ADN');

        $this->registerHookWithoutInstall('updateOrderStatus', 'ADN');
    }

    public function hookUpdateOrderStatus($params)
    {
        $id_order = $params['id_order'];
        $id_new_status = $params['newOrderStatus']->id;
        $ret = $this->doCaptureByOrderState($id_order, $id_new_status);
    }

    public function doCapture($id_order, $trans_id, $amount, $auth_code)
    {
        if ($this->_adn_demo_mode == 2) {
            $post_url = 'https://test.authorize.net/gateway/transact.dll';
        } else {
            $post_url = 'https://secure2.authorize.net/gateway/transact.dll';
        }
        $post_values_capture = array(
            // the API Login ID and Transaction Key must be replaced with valid values
            'x_login' => $this->_adn_id,
            'x_tran_key' => $this->_adn_key,
            'x_version' => '3.1',
            'x_delim_data' => 'TRUE',
            'x_delim_char' => '|',
            'x_relay_response' => 'FALSE',
            'x_type' => 'PRIOR_AUTH_CAPTURE',
            'x_auth_code' => $auth_code,
            'x_invoice_num' => $this->l('Order') . ' #' . $id_order,
            'x_trans_id' => $trans_id,
            'x_amount' => $amount);

        $post_string = '';

        foreach ($post_values_capture as $key => $value) {
            $post_string .= "$key=" . urlencode($value) . '&';
        }
        $post_string = rtrim($post_string, '& ');
        $request = curl_init($post_url);
        curl_setopt($request, CURLOPT_HEADER, 0);
        curl_setopt($request, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($request, CURLOPT_POSTFIELDS, $post_string);
        curl_setopt($request, CURLOPT_SSL_VERIFYPEER, false);
        $post_response_capture = curl_exec($request);
        curl_close($request);
        return str_replace('"', '', $post_response_capture);
    }

    public function doCaptureByOrderId($id_order)
    {
        $ret = Db::getInstance()->ExecuteS('SELECT * FROM ' . _DB_PREFIX_ . 'authorizedotnet_refunds WHERE id_order=' . (int) $id_order);
        if (!empty($ret) && $ret[0]['captured'] == 0) {
            if ($this->_adn_demo_mode == 2) {
                $post_url = 'https://test.authorize.net/gateway/transact.dll';
            } else {
                $post_url = 'https://secure2.authorize.net/gateway/transact.dll';
            }
            $id_trans = $ret[0]['id_trans'];
            $auth_code = $ret[0]['auth_code'];

            $post_values = array(
                // the API Login ID and Transaction Key must be replaced with valid values
                'x_login' => $this->_adn_id,
                'x_tran_key' => $this->_adn_key,
                'x_version' => '3.1',
                'x_delim_data' => 'TRUE',
                'x_delim_char' => '|',
                'x_relay_response' => 'FALSE',
                'x_encap_char' => '"',
                'x_type' => 'PRIOR_AUTH_CAPTURE',
                'x_auth_code' => $auth_code,
                'x_trans_id' => $id_trans,
            );
            // 	This section takes the input fields and converts them to the proper format
            // 	for an http post.  For example: "x_login=username&x_tran_key=a1B2c3D4"
            $post_string = '';
            foreach ($post_values as $key => $value) {
                $post_string .= "$key=" . str_replace('%26x_line_item', '&x_line_item', urlencode($value)) . '&';
            }
            $post_string = rtrim($post_string, '& ');

            // 	This sample code uses the CURL library for php to establish a connection,
            // submit the post, and record the response.
            // If you receive an error, you may want to ensure that you have the curl
            // library enabled in your php configuration
            $request = curl_init($post_url);
            curl_setopt($request, CURLOPT_HEADER, 0);
            curl_setopt($request, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($request, CURLOPT_POSTFIELDS, $post_string);
            curl_setopt($request, CURLOPT_SSL_VERIFYPEER, false);
            $post_response = curl_exec($request);
            curl_close($request);

            $trReturn = explode('|', str_replace('"', '', $post_response));

            if ($trReturn[0] == 1) {
                Db::getInstance()->Execute('UPDATE ' . _DB_PREFIX_ . 'authorizedotnet_refunds SET captured = 1  WHERE id_order=' . (int) $id_order);

                $order = new Order($id_order);
                $message = new Message();
                $message->message = $this->l('Transaction has been captured.') . $this->l('Transaction ID: ') . $trReturn[6] . $this->l(' - Last 4 digits of the card: ') . Tools::substr($trReturn[50], -4) . $this->l(' - AVS Response: ') . $trReturn[5] . $this->l(' - Card Code Response: ') . $trReturn[38];

                $message->id_customer = $order->id_customer;
                $message->id_order = $order->id;
                $message->private = 1;
                $message->id_employee = $this->getContext()->cookie->id_employee;
                $message->id_cart = $order->id_cart;
                $message->add();

                return $trReturn;
            } else {
                return false;
            }
        }
    }

    public function doCaptureByOrderState($id_order, $id_new_status)
    {
        if ($this->_adn_ac_status == $id_new_status && $this->_adn_type == 'AUTH_ONLY') {
            return $this->doCaptureByOrderId($id_order);
        }

        return false;
    }

    public function hookAdminOrder()
    {
        $smarty = $this->context->smarty;
        $cookie = $this->context->cookie;

        $orderId = Tools::getValue('id_order');

        $order = new Order($orderId);
        $refundsRecord = Db::getInstance()->ExecuteS('SELECT * FROM  `' . _DB_PREFIX_ . 'authorizedotnet_refunds` WHERE id_order = "' . ((int) $orderId ) . '"');

        if (!empty($refundsRecord)) {
            $refundsHistory = Db::getInstance()->ExecuteS('SELECT * FROM  `' . _DB_PREFIX_ . 'authorizedotnet_refund_history` WHERE id_order = "' . ((int) $orderId ) . '"');

            $id_shop = Shop::getContextShopID();

            $smarty->assign(array(
                'order_id' => $orderId,
                'cookie' => $cookie,
                'path' => $this->_path,
                'id_shop' => $id_shop,
                '_adn_secure_key' => $this->_adn_secure_key,
                'module_basedir' => _MODULE_DIR_ . 'authorizedotnet/',
                'isCanCapture' => !$refundsRecord[0]['captured'] && $this->_adn_type == 'AUTH_ONLY'
            ));
            return $this->display(__FILE__, 'views/templates/admin/adminOrder.tpl');
        }
        return '';
    }

    public function hookDisplayHeader()
    {
        $page_name = Dispatcher::getInstance()->getController();
        if ($page_name !== 'order') {
            return;
        }

        $this->context->controller->registerJavascript(
            'authorizedotnet',
            'modules/' . $this->name . '/views/js/authorizedotnet.js'
        );
        $this->context->controller->registerStylesheet(
            'authorizedotnet',
            'modules/' . $this->name . '/views/css/authorizedotnet.css'
        );

    }

    private function createCombo($adn_visa, $adn_mc, $adn_amex, $adn_discover, $adn_jcb, $adn_diners)
    {
        $imgBuf = array();
        if ($adn_visa) {
            array_push($imgBuf, imagecreatefromgif(dirname(__FILE__) . '/views/img/visa.gif'));
        }
        if ($adn_mc) {
            array_push($imgBuf, imagecreatefromgif(dirname(__FILE__) . '/views/img/mc.gif'));
        }
        if ($adn_amex) {
            array_push($imgBuf, imagecreatefromgif(dirname(__FILE__) . '/views/img/amex.gif'));
        }
        if ($adn_discover) {
            array_push($imgBuf, imagecreatefromgif(dirname(__FILE__) . '/views/img/discover.gif'));
        }
        if ($adn_jcb) {
            array_push($imgBuf, imagecreatefromgif(dirname(__FILE__) . '/views/img/jcb.gif'));
        }
        if ($adn_diners) {
            array_push($imgBuf, imagecreatefromgif(dirname(__FILE__) . '/views/img/diners.gif'));
        }
        $iOut = imagecreatetruecolor('86', ceil(count($imgBuf) / 2) * 26);
        $bgColor = imagecolorallocate($iOut, 255, 255, 255);
        imagefill($iOut, 0, 0, $bgColor);
        foreach ($imgBuf as $i => $img) {
            imagecopy($iOut, $img, ($i % 2 == 0 ? 0 : 49) - 1, floor($i / 2) * 26 - 1, 0, 0, imagesx($img), imagesy($img));
            imagedestroy($img);
        }
        imagejpeg($iOut, dirname(__FILE__) . '/views/img/combo.jpg', 100);
    }

    public function getContent()
    {
        $this->_postProcess();
        $output = $this->_displayForm();
        return $this->_html . $output;
    }

    private function _displayForm()
    {
        $this->applyUpdates();
        $this->prepareAdminVars();

        $topMenuDisplay = $this->display(__FILE__, 'views/templates/admin/top_menu.tpl');
        $leftMenuDisplay = $this->display(__FILE__, 'views/templates/admin/left_menu.tpl');

        $basicSettingsDisplay = $this->display(__FILE__, 'views/templates/admin/basic_settings.tpl');
        $captureTransactionDisplay = $this->display(__FILE__, 'views/templates/admin/capture_transaction.tpl');
        $refundTransactionDisplay = $this->display(__FILE__, 'views/templates/admin/refund_transaction.tpl');

        $bottomSettingsDisplay = $this->display(__FILE__, 'views/templates/admin/bottom_menu.tpl');
        return $topMenuDisplay . $leftMenuDisplay . $basicSettingsDisplay . $captureTransactionDisplay . $refundTransactionDisplay . $bottomSettingsDisplay;
    }

    private function prepareAdminVars()
    {
        $states = OrderState::getOrderStates((int) ($this->context->cookie->id_lang));

        $displayUpgradeCheck = '';
        if (file_exists(dirname(__FILE__) . '/PrestoChangeoClasses/PrestoChangeoUpgrade.php')) {
            if (!in_array('PrestoChangeoUpgrade', get_declared_classes())) {
                require_once(dirname(__FILE__) . '/PrestoChangeoClasses/PrestoChangeoUpgrade.php');
            }
            $initFile = new PrestoChangeoUpgrade($this, $this->_path, $this->_full_version);

            $upgradeCheck = $initFile->displayUpgradeCheck('ADN');
            if (isset($upgradeCheck) && !empty($upgradeCheck)) {
                $displayUpgradeCheck = $upgradeCheck;
            }
        }

        $getModuleRecommendations = '';
        if (file_exists(dirname(__FILE__) . '/PrestoChangeoClasses/PrestoChangeoUpgrade.php')) {
            if (!in_array('PrestoChangeoUpgrade', get_declared_classes())) {
                require_once(dirname(__FILE__) . '/PrestoChangeoClasses/PrestoChangeoUpgrade.php');
            }
            $initFile = new PrestoChangeoUpgrade($this, $this->_path, $this->_full_version);

            $getModuleRecommendations = $initFile->getModuleRecommendations('ADN');
        }

        $logoPrestoChangeo = '';
        $contactUsLinkPrestoChangeo = '';
        if (file_exists(dirname(__FILE__) . '/PrestoChangeoClasses/PrestoChangeoUpgrade.php')) {
            if (!in_array('PrestoChangeoUpgrade', get_declared_classes())) {
                require_once(dirname(__FILE__) . '/PrestoChangeoClasses/PrestoChangeoUpgrade.php');
            }
            $initFile = new PrestoChangeoUpgrade($this, $this->_path, $this->_full_version);


            $logoPrestoChangeo = $initFile->getPrestoChangeoLogo();
            $contactUsLinkPrestoChangeo = $initFile->getContactUsOnlyLink();
        }

        $this->context->smarty->assign(array(
            'base_uri' => __PS_BASE_URI__,
            'displayUpgradeCheck' => $displayUpgradeCheck,
            'getModuleRecommendations' => $getModuleRecommendations,
            'id_lang' => $this->context->cookie->id_lang,
            'id_employee' => $this->context->cookie->id_employee,
            'adn_secure_key' => $this->_adn_secure_key,
            'adn_id' => Tools::getValue('adn_id', $this->_adn_id),
            'adn_key' => Tools::getValue('adn_key', $this->_adn_key),
            'adn_demo_mode' => Tools::getValue('adn_demo_mode', Configuration::get('ADN_DEMO_MODE')),
            'adn_api' => Tools::getValue('adn_api', $this->_adn_api),
            'adn_md_hash' => Tools::getValue('adn_md_hash', $this->_adn_md_hash),
            'adn_payment_page' => Tools::getValue('adn_payment_page', $this->_adn_payment_page),
            'adn_cim' => Tools::getValue('adn_cim', $this->_adn_cim),
            'adn_type' => Tools::getValue('adn_type', $this->_adn_type),
            'adn_auth_status' => Tools::getValue('adn_auth_status', $this->_adn_auth_status),
            'states' => $states,
            'adn_ac_status' => Tools::getValue('adn_ac_status', $this->_adn_ac_status),
            'adn_customer_email' => Tools::getValue('adn_customer_email', $this->_adn_customer_email),
            'adn_ft' => Tools::getValue('adn_ft', $this->_adn_ft),
            'adn_ft_email' => Tools::getValue('adn_ft_email', $this->_adn_ft_email),
            'adn_currency' => Tools::getValue('adn_currency', $this->_adn_currency),
            'path' => $this->_path,
            'module_name' => $this->displayName,
            'adn_visa' => Tools::getValue('adn_visa', $this->_adn_visa),
            'adn_mc' => Tools::getValue('adn_mc', $this->_adn_mc),
            'adn_amex' => Tools::getValue('adn_amex', $this->_adn_amex),
            'adn_discover' => Tools::getValue('adn_discover', $this->_adn_discover),
            'adn_diners' => Tools::getValue('adn_diners', $this->_adn_diners),
            'adn_jcb' => Tools::getValue('adn_jcb', $this->_adn_jcb),
            'adn_enroute' => Tools::getValue('adn_enroute', $this->_adn_enroute),
            'adn_get_address' => Tools::getValue('adn_get_address', $this->_adn_get_address),
            'adn_get_cvm' => Tools::getValue('adn_get_cvm', $this->_adn_get_cvm),
            'adn_show_left' => Tools::getValue('adn_show_left', $this->_adn_show_left),
            'adn_update_currency' => Tools::getValue('adn_update_currency', $this->_adn_update_currency),
            'adn_public_client_key' => Tools::getValue('adn_public_client_key', $this->adn_public_client_key),
            'module_dir' => _MODULE_DIR_,
            'module_basedir' => _MODULE_DIR_ . 'authorizedotnet/',
            'request_uri' => $_SERVER['REQUEST_URI'],
            'mod_version' => $this->version,
            'upgradeCheck' => (isset($upgradeCheck) && !empty($upgradeCheck) ? true : false),
            'logoPrestoChangeo' => $logoPrestoChangeo,
            'contactUsLinkPrestoChangeo' => $contactUsLinkPrestoChangeo
        ));
    }

    private function _postProcess()
    {
        if (Tools::isSubmit('submitChanges')) {
            if (Tools::getValue('adn_type') == 'AUTH_ONLY') {
                $adn_ac_status = Tools::getValue('adn_ac_status');
            } else {
                $_POST['adn_ac_status'] = 0;
                $adn_ac_status = 0;
            }

            $default_language = 'en-us';

            if (!Configuration::updateValue('ADN_PUBLIC_CLIENT_KEY', Tools::getValue('adn_public_client_key')) || !Configuration::updateValue('ADN_ID', Tools::getValue('adn_id')) || !Configuration::updateValue('ADN_KEY', Tools::getValue('adn_key')) || !Configuration::updateValue('ADN_MD_HASH', Tools::getValue('adn_md_hash')) || !Configuration::updateValue('ADN_TYPE', Tools::getValue('adn_type')) || !Configuration::updateValue('ADN_API', Tools::getValue('adn_api')) || !Configuration::updateValue('ADN_AUTH_STATUS', Tools::getValue('adn_auth_status')) || !Configuration::updateValue('ADN_VISA', Tools::getValue('adn_visa')) || !Configuration::updateValue('ADN_MC', Tools::getValue('adn_mc')) || !Configuration::updateValue('ADN_AMEX', Tools::getValue('adn_amex')) || !Configuration::updateValue('ADN_PAYMENT_PAGE', Tools::getValue('adn_payment_page')) || !Configuration::updateValue('ADN_DISCOVER', Tools::getValue('adn_discover')) || !Configuration::updateValue('ADN_JCB', Tools::getValue('adn_jcb')) || !Configuration::updateValue('ADN_DINERS', Tools::getValue('adn_diners')) || !Configuration::updateValue('ADN_ENROUTE', Tools::getValue('adn_enroute')) || !Configuration::updateValue('ADN_UPDATE_CURRENCY', Tools::getValue('adn_update_currency')) || !Configuration::updateValue('ADN_GET_ADDRESS', Tools::getValue('adn_get_address')) || !Configuration::updateValue('ADN_DEMO_MODE', Tools::getValue('adn_demo_mode')) || !Configuration::updateValue('ADN_CURRENCY', Tools::getValue('adn_currency')) || !Configuration::updateValue('ADN_CUSTOMER_EMAIL', Tools::getValue('adn_customer_email')) || !Configuration::updateValue('ADN_FT', Tools::getValue('adn_ft')) || !Configuration::updateValue('ADN_SHOW_LEFT', Tools::getValue('adn_show_left')) || !Configuration::updateValue('ADN_CIM', Tools::getValue('adn_cim')) || !Configuration::updateValue('ADN_CIM_SAVE', 0) || !Configuration::updateValue('ADN_FT_EMAIL', Tools::getValue('adn_ft_email')) || !Configuration::updateValue('ADN_AC_STATUS', $adn_ac_status) || !Configuration::updateValue('ADN_GET_CVM', Tools::getValue('adn_get_cvm'))) {
                $this->_html .= $this->displayError($this->l('Cannot update settings', array(), $default_language));
            } else {
                $this->_html .= $this->displayConfirmation($this->l('Settings updated', array(), $default_language));
            }
            $this->createCombo(Tools::getValue('adn_visa'), Tools::getValue('adn_mc'), Tools::getValue('adn_amex'), Tools::getValue('adn_discover'), Tools::getValue('adn_jcb'), Tools::getValue('adn_diners'));
        }
        $this->_refreshProperties();
    }

    /**
     * Add the CSS & JavaScript files you want to be loaded in the BO.
     */
    public function hookBackOfficeHeader()
    {

        if (Tools::getValue('configure') == $this->name) {
            //$this->context->controller->addJS($this->_path . 'views/js/back.js');
            $this->context->controller->addCSS($this->_path . 'views/css/globalBack.css');
            $this->context->controller->addCSS($this->_path . 'views/css/specificBack.css');
        }
    }

    /**
     * Return path to http module directory.
     */
    public function getHttpPathModule()
    {
        return (Configuration::get('PS_SSL_ENABLED') ? 'https://' : 'http://') . htmlspecialchars($_SERVER['HTTP_HOST'], ENT_COMPAT, 'UTF-8') . __PS_BASE_URI__ . 'modules/' . $this->name . '/';
    }

    public function getRedirectBaseUrl()
    {


        $redirect_url = Context::getContext()->link->getPageLink('order-confirmation');
        return $redirect_url = strpos($redirect_url, '?') !== false ? $redirect_url . '&' : $redirect_url . '?';
    }

    public function hookDisplayCustomerAccount($params)
    {
        if (!$this->active) {
            return '';
        }
        if (!$this->_adn_cim) {
            return '';
        }
        if ($this->_adn_api == 'dpn') {
            return '';
        }
        $link = $this->context->link;

        $this->context->smarty->assign(array(
            'adn_my_account_link' => $link->getModuleLink('authorizedotnet', 'account'),
            'adn_path' => $this->_path
        ));
        return $this->context->smarty->fetch('module:authorizedotnet/views/templates/front/my-account.tpl');
    }

    public function doPayment()
    {
        $cart = $this->context->cart;
        $cookie = $this->context->cookie;

        if ($this->_adn_demo_mode == 2) {
            $post_url = 'https://test.authorize.net/gateway/transact.dll';
        } else {
            $post_url = 'https://secure2.authorize.net/gateway/transact.dll';
        }
        $address_delivery = new Address((int) $cart->id_address_delivery);
        $address_billing = new Address((int) $cart->id_address_invoice);
        $customer = new Address();
        if ($this->_adn_update_currency) {
            Currency::refreshCurrencies();
        }
        //$currency_module = Currency::getIdByIsoCode('USD');
        // get default currency
        $currency_module = (int) Configuration::get('PS_CURRENCY_DEFAULT');
        // recalculate currency if Currency: User Selected
        if ($cart->id_currency != $currency_module && $this->_adn_currency == 1) {
            $old_id = $cart->id_currency;
            $cart->id_currency = $currency_module;
            if (is_object($cookie)) {
                $cookie->id_currency = $currency_module;
            }
            if ($this->getPSV() >= 1.5) {
                $this->context->currency = new Currency($currency_module);
            }
            $cart->update();
        }
        // get cart currency for set to ADN request
        $currencyOrder = new Currency($cart->id_currency);

        $products = $cart->getProducts();



        /*
          class cart

          const ONLY_PRODUCTS = 1;
          const ONLY_DISCOUNTS = 2;
          const BOTH = 3;
          const BOTH_WITHOUT_SHIPPING = 4;
          const ONLY_SHIPPING = 5;
          const ONLY_WRAPPING = 6;
          const ONLY_PRODUCTS_WITHOUT_SHIPPING = 7;
          const ONLY_PHYSICAL_PRODUCTS_WITHOUT_SHIPPING = 8;
         */

        $shippingCost = number_format($cart->getOrderTotal(!Product::getTaxCalculationMethod(), Cart::ONLY_SHIPPING), 2, '.', '');

        if ($cart->getOrderTotal(true, Cart::BOTH_WITHOUT_SHIPPING) == $cart->getOrderTotal(true, Cart::BOTH)) {
            $shippingCost = 0;
        }

        $x_amount_wot = number_format($cart->getOrderTotal(false, Cart::BOTH), 2, '.', '');
        $x_amount = number_format($cart->getOrderTotal(true, Cart::BOTH), 2, '.', '');

        $tax = $x_amount - $x_amount_wot;


        $country = new Country(Tools::getValue('adn_id_country'), (int) (Configuration::get('PS_LANG_DEFAULT')));
        $state = Tools::getIsset('adn_id_state') ? new State(Tools::getValue('adn_id_state')) : '';
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
        $items = '';
        $x_description = '';
        foreach ($products as $product) {
            $name = $product['name'];
            if ($id_lang > 0) {
                $eng_product = new Product($product['id_product']);
                $name = $eng_product->name[$id_lang];
            }
            $name = utf8_decode($name);
            $items .= ($items != '' ? '&x_line_item=' : '') . $product['id_product'];
            $items .= '<|>' . Tools::substr($name, 0, 30);
            $items .= '<|> ';
            $items .= '<|>' . $product['cart_quantity'];
            $items .= '<|>' . number_format($product['price_wt'], 2, '.', '');
            $items .= '<|>' . ($product['price_wt'] - $product['price'] > 0 ? 1 : 0);
            $x_description .= ($i == 1 ? '' : ', ') . $product['cart_quantity'] . ' X ' . Tools::substr($name, 0, 30);
            $i++;
            if ($i == 30) {
                break;
            }
        }
        $x_email_customer = 'FALSE';
        $x_email = '';
        if ($this->_adn_customer_email == 2) {
            if ($cart->id_customer > 0) {
                $customerObj = new Customer($cart->id_customer);
                $x_email = $customerObj->email;
                $x_email_customer = 'TRUE';
            }
        }

        $post_values = array(
            // the API Login ID and Transaction Key must be replaced with valid values
            'x_login' => $this->_adn_id,
            'x_tran_key' => $this->_adn_key,
            'x_solution_id' => 'AAA100831',
            'x_version' => '3.1',
            'x_delim_data' => 'TRUE',
            'x_delim_char' => '|',
            'x_relay_response' => 'FALSE',
            'x_encap_char' => '"',
            'x_type' => $this->_adn_type,
            'x_method' => 'CC',
            'x_card_num' => Tools::getValue('adn_cc_number'),
            'x_exp_date' => Tools::getValue('adn_cc_Month') . Tools::substr(Tools::getValue('adn_cc_Year'), 2),
            'x_card_code' => Tools::getValue('adn_cc_cvm'),
            'x_amount' => $x_amount,
            'x_recurring_billing' => 'NO',
            'x_description' => str_replace('|', '', Tools::substr(Configuration::get('PS_SHOP_NAME') . ' ' . $this->l('purchase: ') . $x_description, 0, 253)),
            'x_line_item' => $items,
            'x_first_name' => Tools::getValue('adn_cc_fname'),
            'x_last_name' => Tools::getValue('adn_cc_lname'),
            'x_city' => Tools::getValue('adn_cc_city'),
            'x_address' => Tools::getValue('adn_cc_address'),
            'x_country' => $country->name,
            'x_state' => Tools::getIsset('adn_id_state') && Tools::getValue('adn_id_state') != '' ? $state->iso_code : 'NA',
            'x_zip' => Tools::getValue('adn_cc_zip'),
            'x_company' => $address_billing->company,
            'x_phone' => !empty($address_billing->phone) ? $address_billing->phone : $address_billing->phone_mobile,
            'x_customer_ip' => $_SERVER['REMOTE_ADDR'],
            'x_ship_to_first_name' => $address_delivery->firstname,
            'x_ship_to_last_name' => $address_delivery->lastname,
            'x_ship_to_company' => $address_delivery->company,
            'x_ship_to_address' => trim($address_delivery->address1 . ' ' . $address_delivery->address2),
            'x_ship_to_city' => $address_delivery->city,
            'x_ship_to_state' => $address_delivery->state,
            'x_ship_to_zip' => $address_delivery->postcode,
            'x_ship_to_country' => $address_delivery->country,
            'x_freight' => (float) ($shippingCost),
            'x_tax' => max((float) $tax, 0),
            'x_invoice_num' => 'Cart #' . $cart->id,
            'x_test_request' => $this->_adn_demo_mode == 1 ? 1 : 0,
            'x_duplicate_window' => 3,
            'x_currency_code' => $currencyOrder->iso_code,
            'x_email_customer' => $x_email_customer,
            'x_email' => $x_email
            // Additional fields can be added here as outlined in the AIM integration
            // guide at: http://developer.authorize.net
        );

        // 	This section takes the input fields and converts them to the proper format
        // 	for an http post.  For example: "x_login=username&x_tran_key=a1B2c3D4"
        $post_string = '';
        foreach ($post_values as $key => $value) {
            $post_string .= "$key=" . str_replace('%26x_line_item', '&x_line_item', urlencode($value)) . '&';
        }
        $post_string = rtrim($post_string, '& ');
        //print_r($post_values);
        // 	This sample code uses the CURL library for php to establish a connection,
        // submit the post, and record the response.
        // If you receive an error, you may want to ensure that you have the curl
        // library enabled in your php configuration
        $request = curl_init($post_url);
        curl_setopt($request, CURLOPT_HEADER, 0);
        curl_setopt($request, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($request, CURLOPT_POSTFIELDS, $post_string);
        curl_setopt($request, CURLOPT_SSL_VERIFYPEER, false);
        $post_response = curl_exec($request);
        // 	additional options may be required depending upon your server configuration
        // 	you can find documentation on curl options at http://www.php.net/curl_setopt
        curl_close($request); // close curl object
        //print_r($post_response);
        return str_replace('"', '', $post_response);
    }

    public function doRefund($id_order, $is_void, $trans_id, $card, $amount)
    {
        $order = new Order($id_order);
        $customer = new Customer($order->id_customer);
        $address = new Address($order->id_address_delivery);
        if ($this->_adn_demo_mode == 2) {
            $post_url = 'https://test.authorize.net/gateway/transact.dll';
        } else {
            $post_url = 'https://secure2.authorize.net/gateway/transact.dll';
        }
        $post_values_void = array(
            // the API Login ID and Transaction Key must be replaced with valid values
            'x_login' => $this->_adn_id,
            'x_tran_key' => $this->_adn_key,
            'x_first_name' => $customer->firstname,
            'x_last_name' => $customer->lastname,
            'x_address' => $address->address1,
            'x_city' => $address->city,
            'x_state' => State::getNameById($address->id_state),
            'x_zip' => $address->postcode,
            'x_country' => Country::getNameById($this->context->cookie->id_lang, $address->id_country),
            'x_email' => ($this->_adn_customer_email == 2 ? $customer->email : ''),
            'x_version' => '3.1',
            'x_delim_data' => 'TRUE',
            'x_delim_char' => '|',
            'x_relay_response' => 'FALSE',
            'x_invoice_num' => $this->l('Order') . ' #' . $id_order,
            'x_type' => 'VOID',
            'x_trans_id' => $trans_id);

        $post_values_credit = array(
            // the API Login ID and Transaction Key must be replaced with valid values
            'x_login' => $this->_adn_id,
            'x_tran_key' => $this->_adn_key,
            'x_version' => '3.1',
            'x_delim_data' => 'TRUE',
            'x_delim_char' => '|',
            'x_relay_response' => 'FALSE',
            'x_first_name' => $customer->firstname,
            'x_last_name' => $customer->lastname,
            'x_address' => $address->address1,
            'x_city' => $address->city,
            'x_state' => State::getNameById($address->id_state),
            'x_zip' => $address->postcode,
            'x_country' => Country::getNameById($this->context->cookie->id_lang, $address->id_country),
            'x_email' => ($this->_adn_customer_email == 2 ? $customer->email : ''),
            'x_type' => 'CREDIT',
            'x_invoice_num' => $this->l('Order') . ' #' . $id_order,
            'x_trans_id' => $trans_id,
            'x_card_num' => $card,
            'x_amount' => $amount);
        if ($is_void) {
            $post_string = '';
            foreach ($post_values_void as $key => $value) {
                $post_string .= "$key=" . urlencode($value) . '&';
            }
            $post_string = rtrim($post_string, '& ');
            $request = curl_init($post_url);
            curl_setopt($request, CURLOPT_HEADER, 0);
            curl_setopt($request, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($request, CURLOPT_POSTFIELDS, $post_string);
            curl_setopt($request, CURLOPT_SSL_VERIFYPEER, false);
            $post_response_void = curl_exec($request);
            curl_close($request);
            $response_array = explode('|', str_replace('"', '', $post_response_void));

            if ($response_array[0] == 1) {
                return $response_array;
            }
        }

        $post_string = '';
        foreach ($post_values_credit as $key => $value) {
            $post_string .= "$key=" . urlencode($value) . '&';
        }
        $post_string = rtrim($post_string, '& ');
        $request = curl_init($post_url);
        curl_setopt($request, CURLOPT_HEADER, 0);
        curl_setopt($request, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($request, CURLOPT_POSTFIELDS, $post_string);
        curl_setopt($request, CURLOPT_SSL_VERIFYPEER, false);
        $post_response_credit = curl_exec($request);
        $response_array = explode('|', str_replace('"', '', $post_response_credit));
        curl_close($request);
        return $response_array;
    }

    public function getAdnFilename()
    {
        return $this->_adn_api == 'aim' ? 'validation' : 'validationdpn';
    }

    /**
     * Retrun validation for all version prestashop
     */
    public function getValidationLink($file = 'validation')
    {

        $validationLink = Context::getContext()->link->getModuleLink($this->name, $file, array(), true);

        return $validationLink;
    }

    public function hookPaymentOptions($params)
    {
        if (!$this->active) {
            return;
        }

        if (!$this->checkCurrency($params['cart'])) {
            return;
        }

        $this->context->smarty->assign(array(
            'pc_payment_module_adn' => $this->name
        ));
        if ($this->_adn_api == 'aim' && $this->_adn_payment_page == 1) {
            $payment_options = array(
                $this->getEmbeddedAIMPaymentOption(),
            );

            return $payment_options;
        }

        if ($this->_adn_api == 'dpn' && $this->_adn_payment_page == 1) {
            $payment_options = array(
                $this->getEmbeddedDPMPaymentOption(),
            );

            return $payment_options;
        }


        $adn_cards = '';

        if ($this->_adn_visa) {
            $adn_cards .= $this->l('Visa') . ', ';
        }
        if ($this->_adn_mc) {
            $adn_cards .= $this->l('Mastercard') . ', ';
        }
        if ($this->_adn_amex) {
            $adn_cards .= $this->l('Amex') . ', ';
        }
        if ($this->_adn_discover) {
            $adn_cards .= $this->l('Discover') . ', ';
        }
        if ($this->_adn_jcb) {
            $adn_cards .= $this->l('JCB') . ', ';
        }
        if ($this->_adn_diners) {
            $adn_cards .= $this->l('Diners') . ', ';
        }
        if ($this->_adn_enroute) {
            $adn_cards .= $this->l('Enroute') . ', ';
        }

        $adn_cards = Tools::substr($adn_cards, 0, -2);

        $adn_filename = $this->getAdnFilename();

        $currencies = Currency::getCurrencies();


        $cart = $this->context->cart;
        $address = new Address((int) ($cart->id_address_invoice));
        $customer = new Customer((int) ($cart->id_customer));
        $state = new State((int) $address->id_state);
        $selectedCountry = (int) ($address->id_country);
        $address_delivery = new Address((int) ($cart->id_address_delivery));
        $countries = Country::getCountries((int) ($this->context->cookie->id_lang), true);
        $countriesList = '';
        foreach ($countries as $country) {
            $countriesList .= '<option value="' . ($country['id_country']) . '" ' . ($country['id_country'] == $selectedCountry ? 'selected="selected"' : '') . '>' . htmlentities($country['name'], ENT_COMPAT, 'UTF-8') . '</option>';
        }
        if ($address->id_state) {
            $this->context->smarty->assign('id_state', $state->iso_code);
        }
        $x_email_customer = 'FALSE';
        $x_email = '';





        $currencies = Currency::getCurrencies();
        $this->context->smarty->assign('countries_list', $countriesList);
        $this->context->smarty->assign('countries', $countries);
        $this->context->smarty->assign('address', $address);
        $this->context->smarty->assign('currencies', $currencies);

        $this->context->smarty->assign(array(
            'adn_payment_page' => $this->_adn_payment_page,
            'currencies' => $currencies,
            'this_path' => $this->_path,
            'active' => (($this->_adn_id != '' && $this->_adn_key != '') || $this->_adn_secure_key != '') ? true : false,
            'adn_visa' => $this->_adn_visa,
            'adn_mc' => $this->_adn_mc,
            'adn_amex' => $this->_adn_amex,
            'adn_discover' => $this->_adn_discover,
            'adn_jcb' => $this->_adn_jcb,
            'adn_diners' => $this->_adn_diners,
            'adn_enroute' => $this->_adn_enroute,
            'adn_filename' => $adn_filename,
            'adn_get_address' => $this->_adn_get_address,
            'adn_get_cvm' => $this->_adn_get_cvm,
            'adn_cards' => $adn_cards,
            'this_path' => __PS_BASE_URI__ . 'modules/' . $this->name . '/',
            'this_validation_link' => $this->getValidationLink($adn_filename) . '',
        ));


        $iframeOption = new PaymentOption();
        $iframeOption->setCallToActionText($this->l('Pay by Credit Card'))
            ->setAction($this->getValidationLink($adn_filename))
            ->setAdditionalInformation($this->context->smarty->fetch('module:authorizedotnet/views/templates/front/payment.tpl'));

        // return $iframeOption;
        //return $this->display(__FILE__, 'views/templates/front/payment.tpl');

        $payment_options = array(
            $iframeOption
        );

        return $payment_options;
    }

    public function checkCurrency($cart)
    {
        $currency_order = new Currency($cart->id_currency);
        $currencies_module = $this->getCurrency($cart->id_currency);

        if (is_array($currencies_module)) {
            foreach ($currencies_module as $currency_module) {
                if ($currency_order->id == $currency_module['id_currency']) {
                    return true;
                }
            }
        }
        return false;
    }

    public function getEmbeddedDPMPaymentOption()
    {

        $embeddedOption = new PaymentOption();
        $embeddedOption->setCallToActionText($this->l('Pay by Credit Card - We accept '))
            ->setForm($this->generateDPMForm())
            ->setLogo(Media::getMediaPath(_PS_MODULE_DIR_ . $this->name . '/views/img/combo.jpg'))
            ->setModuleName($this->name);

        return $embeddedOption;
    }

    protected function generateDPMForm()
    {
        require_once('controllers/front/validationdpn.php');
        AuthorizedotnetValidationdpnModuleFrontController::prepareVarsView($this->context, $this, $adn_cc_err = '', time());


        $this->context->smarty->assign(
            array(
                'adn_api' => $this->_adn_api
            )
        );

        return $this->context->smarty->fetch('module:authorizedotnet/views/templates/front/validation_minified.tpl');
    }

    public function getEmbeddedAIMPaymentOption()
    {
        $embeddedOption = new PaymentOption();
        $embeddedOption->setCallToActionText($this->l('Pay by Credit Card - We accept '))
            ->setForm($this->generateForm())
            ->setLogo(Media::getMediaPath(_PS_MODULE_DIR_ . $this->name . '/views/img/combo.jpg'))
            ->setModuleName($this->name);

        return $embeddedOption;
    }

    protected function generateForm()
    {
        require_once('controllers/front/validation.php');
        AuthorizedotnetValidationModuleFrontController::prepareVarsView($this->context, $this, $adn_cc_err = '', time());

        $this->context->smarty->assign(
            array(
                'adn_api' => $this->_adn_api
            )
        );
        return $this->context->smarty->fetch('module:authorizedotnet/views/templates/front/validation_minified.tpl');
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
