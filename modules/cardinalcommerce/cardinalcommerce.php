<?php
/**
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author INVERTUS UAB www.invertus.eu  <support@invertus.eu>
 * @copyright CardinalCommerce
 * @license   Addons PrestaShop license limitation
 */

class CardinalCommerce extends PaymentModule
{
    /**
     * Instantiates module with meta data required by PrestaShop
     */
    public function __construct()
    {
        $this->name = 'cardinalcommerce';
        $this->author = 'Invertus';
        $this->version = '1.0.0';
        $this->tab = 'payments_gateways';
        $this->controllers = ['validation', 'gateway', 'authentication'];
        $this->need_instance = false;

        parent::__construct();

        require_once $this->getLocalPath() . 'vendor/autoload.php';

        $this->displayName = $this->l('CardinalCommerce');
        $this->description = $this->l('3-D Secure Payment Gateway by CardinalCommerce');
		$this->module_key = '3fb7428ac814f9d8877e6f9bf53a9db0';
    }

    /**
     * Redirect to module configuration in Back Office
     */
    public function getContent()
    {
        Tools::redirectAdmin($this->context->link->getAdminLink('AdminCardinalCommerceSettings'));
    }

    /**
     * Define tabs (controllers) used by module
     *
     * @return array
     */
    public function getTabs()
    {
        return [
            [
                'name' => $this->l('Cardinal Commerce'),
                'parent_class_name' => 'AdminParentModulesSf',
                'class_name' => 'AdminCardinalCommerceParent',
                'visible' => false,
            ],
            [
                'name' => $this->l('Settings'),
                'parent_class_name' => 'AdminCardinalCommerceParent',
                'class_name' => 'AdminCardinalCommerceSettings',
                'visible' => true,
            ],
            [
                'name' => $this->l('Payment Capture'),
                'parent_class_name' => 'AdminCardinalCommerceParent',
                'class_name' => 'AdminCardinalCommerceOrderChange',
                'visible' => false,
            ],
        ];
    }

    /**
     * Install module, create database tables and register hooks
     *
     * @return bool
     */
    public function install()
    {
        if (!parent::install()) {
            return false;
        }

        if (Invertus\CardinalCommerce\Settings::isPS16()) {
            if (!$this->installTabs16()) {
                return false;
            }
        }

        $isDbInstalled = Db::getInstance()->execute(
            'CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'cc_centinel_order` (
                id_centinel_order INT(11) NOT NULL AUTO_INCREMENT,
                id_order INT(11) NOT NULL,
                id_processor_order VARCHAR(32),
                authorization_status VARCHAR(2),
                capture_status VARCHAR(2),
                void_status VARCHAR(2),
                refund_status VARCHAR(2),
                avs_result VARCHAR(2),
                processor_order_number VARCHAR(20),
                action_code VARCHAR(32),
                authorization_code VARCHAR(50),
                card_code_result VARCHAR(2),
                PRIMARY KEY(id_centinel_order)
            ) ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=utf8'
        );

        $isDbInstalled &= Db::getInstance()->execute(
            'CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'cc_token` (
                id_cc_token INT(11) NOT NULL AUTO_INCREMENT,
                id_customer INT(11) NOT NULL,
                id_processor_order VARCHAR(32),
                card_last_four_digits VARCHAR(5),
                token VARCHAR(32),
                action_code VARCHAR(32),
                PRIMARY KEY(id_cc_token)
            ) ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=utf8'
        );

        return $isDbInstalled
            && $this->registerHook('paymentOptions')
            && $this->registerHook('displayAdminOrderLeft')
            && $this->registerHook('displayBackOfficeHeader')
            && $this->registerHook('displayOrderConfirmation')
            && $this->registerHook('payment')
            && $this->registerHook('header')
            && $this->createOrderStatuses();
    }

    /**
     * Uninstall module and drop database tables
     *
     * @return bool
     */
    public function uninstall()
    {
        if (Invertus\CardinalCommerce\Settings::isPS16()) {
            if (!$this->uninstallTabs16()) {
                return false;
            }
        }

        return
            Db::getInstance()->execute('DROP TABLE IF EXISTS `' . _DB_PREFIX_ . 'cc_token`') &&
            $this->removeOrderStatuses() &&
            $this->removeConfig() &&
            parent::uninstall();
    }

    /**
     * Provide PrestaShop with new payment capture form
     *
     * @param array $params
     *
     * @return string
     */
    public function hookDisplayAdminOrderLeft(array $params)
    {
        $centinelOrder = CentinelOrder::getByOrderId($params['id_order']);

        if (null === $centinelOrder) {
            // if order is not paid using Cardinal module
            // then no information should be displayed
            return '';
        }

        $isRefundApplicable = false;
        $actions = [];

        if ($centinelOrder->canBeVoided()) {
            $actions[] = [
                'name' => $this->l('Void payment'),
                'id' => 'void_payment',
                'confirmation' => $this->l('Are you sure you want to void the payment?'),
            ];
        }

        if ($centinelOrder->canBeCaptured()) {
            $actions[] = [
                'name' => $this->l('Capture payment'),
                'id' => 'capture_payment',
                'confirmation' => $this->l('Are you sure you want to capture the payment?'),
            ];
        }

        if ($centinelOrder->canBeRefunded()) {
            $isRefundApplicable = true;
            $actions[] = [
                'name' => $this->l('Refund payment'),
                'id' => 'refund_payment',
                'confirmation' => $this->l('Are you sure you want to refund the payment?'),
            ];
        }

        $this->context->smarty->assign([
            'cc_order_action_url' => $this->context->link->getAdminLink('AdminCardinalCommerceOrderChange'),
            'cc_actions' => $actions,
            'cc_is_refund_applicable' => $isRefundApplicable,
            'cc_centinel_order' => $centinelOrder,
        ]);

        return $this->context->smarty->fetch($this->getLocalPath() . '/views/templates/hook/displayAdminOrderLeft.tpl');
    }

    /**
     * This hook is used only for PS 1.6
     * @param $params
     *
     * @return string
     */
    public function hookPayment($params)
    {
        if (!$this->active) {
            return '';
        }

        $this->context->smarty->assign([
            'cardinal_commerce_payment_url' => $this->context->link->getModuleLink($this->name, 'validation', [], true),
            'payment_method_images' => $this->getPaymentMethodImages(),
            'is_invoice_phone_set' => $this->isInvoicePhoneSet($params['cart']->id_address_invoice),
        ]);

        return $this->context->smarty->fetch($this->getLocalPath() . 'views/templates/hook/PaymentOption16.tpl');
    }

    /**
     * Provide PrestaShop with new payment options that are supported by module
     *
     * @param array $params
     *
     * @return PaymentOption[]
     */
    public function hookPaymentOptions(array $params)
    {
        $this->context->smarty->assign([
            'payment_method_images' => $this->getPaymentMethodImages(),
            'is_invoice_phone_set' => $this->isInvoicePhoneSet($params['cart']->id_address_invoice),
        ]);

        $paymentOption = new PrestaShop\PrestaShop\Core\Payment\PaymentOption();
        $paymentOption
            ->setModuleName($this->name)
            ->setCallToActionText($this->l('Pay by Card'))
            ->setAction($this->context->link->getModuleLink($this->name, 'validation', [], true))
            ->setAdditionalInformation(
                $this->fetch('module:cardinalcommerce/views/templates/hook/paymentOptions.tpl')
            );

        return [$paymentOption];
    }

    /**
     * Render order confirmation message
     *
     * @return string
     */
    public function hookDisplayOrderConfirmation()
    {
        return $this->context->smarty->fetch(
            $this->getLocalPath().'views/templates/front/order-confirmation-message.tpl'
        );
    }

    /**
     * Return data for rendering payment method images
     *
     * @return array
     */
    private function getPaymentMethodImages()
    {
        $paymentMethods = json_decode(Configuration::get(\Invertus\CardinalCommerce\Settings::PAYMENT_METHOD), true);

        if (empty($paymentMethods)) {
            return [];
        }

        $baseImgDir = __PS_BASE_URI__ . 'modules/cardinalcommerce/views/img/credit-cards/';

        $imagesMap = [
            \Invertus\CardinalCommerce\PaymentMethod::VISA => [
                'logo' => $baseImgDir . 'visa.svg',
                'name' => 'Visa',
            ],
            \Invertus\CardinalCommerce\PaymentMethod::MASTER_CARD => [
                'logo' => $baseImgDir . 'mastercard.svg',
                'name' => 'Mastercard',
            ],
            \Invertus\CardinalCommerce\PaymentMethod::AMERICAN_EXPRESS => [
                'logo' => $baseImgDir . 'amex.svg',
                'name' => 'American Express',
            ],
            \Invertus\CardinalCommerce\PaymentMethod::DISCOVER => [
                'logo' => $baseImgDir . 'discover.svg',
                'name' => 'Discover',
            ],
            \Invertus\CardinalCommerce\PaymentMethod::JCB => [
                'logo' => $baseImgDir . 'jcb.svg',
                'name' => 'JCB',
            ],
            \Invertus\CardinalCommerce\PaymentMethod::DINERS => [
                'logo' => $baseImgDir . 'diners.svg',
                'name' => 'JCB',
            ],
        ];

        $images = [];

        foreach ($paymentMethods as $paymentMethod) {
            $images[] = $imagesMap[$paymentMethod];
        }

        return $images;
    }

    /**
     * Create custom order statuses that module use
     *
     * @return bool
     */
    private function createOrderStatuses()
    {
        $contextLangId = $this->context->language->id;

        $orderStatusDefinition = [
            [
                'name' => [
                    $contextLangId => 'Payment authorized',
                ],
                'pdf_invoice' => true,
                'loggable' => true,
                'invoice' => true,
                'color' => '#1a1f71',
                'paid' => false,
                'send_email' => false,
                'email_template' => '',
                'configuration_name' => \Invertus\CardinalCommerce\Settings::AUTHORIZED,
            ],
            [
                'name' => [
                    $contextLangId => 'Payment captured',
                ],
                'pdf_invoice' => true,
                'loggable' => true,
                'invoice' => true,
                'color' => '#1a1f71',
                'paid' => true,
                'send_email' => true,
                'email_template' => 'payment',
                'configuration_name' => \Invertus\CardinalCommerce\Settings::CAPTURED,
            ],
            [
                'name' => [
                    $contextLangId => 'Payment refunded',
                ],
                'pdf_invoice' => true,
                'loggable' => true,
                'invoice' => true,
                'color' => '#1a1f71',
                'paid' => false,
                'send_email' => true,
                'email_template' => 'refund',
                'configuration_name' => \Invertus\CardinalCommerce\Settings::REFUNDED,
            ],
            [
                'name' => [
                    $contextLangId => 'Awaiting payment',
                ],
                'pdf_invoice' => false,
                'loggable' => false,
                'invoice' => false,
                'color' => '#1a1f71',
                'paid' => false,
                'send_email' => false,
                'email_template' => '',
                'configuration_name' => \Invertus\CardinalCommerce\Settings::AWAITING_PAYMENT,
            ],
            [
                'name' => [
                    $contextLangId => 'Payment voided',
                ],
                'pdf_invoice' => false,
                'loggable' => false,
                'invoice' => false,
                'color' => '#1a1f71',
                'paid' => false,
                'send_email' => true,
                'email_template' => 'order_canceled',
                'configuration_name' => \Invertus\CardinalCommerce\Settings::VOIDED,
            ],
        ];

        foreach ($orderStatusDefinition as $definition) {
            $status = new OrderState();
            $status->name = $definition['name'];
            $status->color = $definition['color'];
            $status->pdf_invoice = $definition['pdf_invoice'];
            $status->logable = $definition['loggable'];
            $status->invoice = $definition['invoice'];
            $status->paid = $definition['paid'];
            $status->module_name = $this->name;
            $status->send_email = $definition['send_email'];
            $status->template = $definition['email_template'];

            if (false === $status->save()) {
                return false;
            }

            if (!copy(
                $this->getLocalPath() . '/views/img/cardinal_os.gif',
                _PS_IMG_DIR_ . 'os/' . $status->id . '.gif'
            )) {
                return false;
            }

            Configuration::updateValue($definition['configuration_name'], $status->id);
        }

        return true;
    }

    /**
     * @param $addressInvoiceId
     *
     * @return bool
     */
    private function isInvoicePhoneSet($addressInvoiceId)
    {
        $invoiceAddress = new Address($addressInvoiceId);

        if ($invoiceAddress->phone_mobile) {
            return true;
        }

        if ($invoiceAddress->phone) {
            return true;
        }

        return false;
    }

    /**
     * Render error and confirmation messages at BO AdminOrders controller, add JS content
     */
    public function hookDisplayBackOfficeHeader()
    {
        if (!$this->context->controller instanceof AdminOrdersController) {
            return;
        }

        if (\Invertus\CardinalCommerce\Settings::isPS16()) {
            Media::addJsDef([
                'order_change_controller_link' => $this->context->link->getAdminLink(
                    'AdminCardinalCommerceOrderChange'.'&capture_payments=1',
                    true
                ),
                'cc_csrf_token' => Tools::getAdminTokenLite('AdminCardinalCommerceOrderChange'),
                'capture_name' => $this->l('Capture Payments'),
            ]);
        } else {
            Media::addJsDef([
                'order_change_controller_link' => $this->context->link->getAdminLink(
                    'AdminCardinalCommerceOrderChange',
                    true,
                    [],
                    ['capture_payments' => 1]
                ),
                'cc_csrf_token' => Tools::getAdminTokenLite('AdminCardinalCommerceOrderChange'),
                'capture_name' => $this->l('Capture Payments'),
            ]);

            $this->context->controller->addJS($this->getLocalPath() . 'views/js/back/bulk-capture.js', 'all');
            $this->context->controller->addJS($this->getLocalPath() . 'views/js/back/confirmation-message.js', 'all');
        }

        $this->loadCcErrors();

        if (\Invertus\CardinalCommerce\Settings::isPS16()) {
            $this->context->smarty->assign(
                [
                    'sources' => [
                        Media::getJSPath($this->getLocalPath() . "views/js/back/bulk-capture.js"),
                        Media::getJSPath($this->getLocalPath() . "views/js/back/confirmation-message.js")
                    ]
                ]
            );
            return $this->context->smarty->fetch(
                $this->getLocalPath().'views/templates/admin/script-tag.tpl'
            );
        }
    }

    /**
     * Load Cardinal Commerce errors in PrestaShop BO
     */
    public function hookDisplayHeader()
    {
        $this->loadCcErrors();
    }

    /**
     * @return bool
     */
    private function removeOrderStatuses()
    {
        $orderStatuses = Configuration::getMultiple([
            \Invertus\CardinalCommerce\Settings::AWAITING_PAYMENT,
            \Invertus\CardinalCommerce\Settings::CAPTURED,
            \Invertus\CardinalCommerce\Settings::AUTHORIZED,
            \Invertus\CardinalCommerce\Settings::REFUNDED,
            \Invertus\CardinalCommerce\Settings::VOIDED,
        ]);

        foreach ($orderStatuses as $orderStatusId) {
            if ($orderStatusId) {
                $status = new OrderState($orderStatusId);

                $status->deleted = 1;

                if (!$status->save()) {
                    return false;
                }
            }
        }

        return true;
    }

    /**
     * @return bool
     */
    private function removeConfig()
    {
        $settings = [
            \Invertus\CardinalCommerce\Settings::ENABLED_CCA,
            \Invertus\CardinalCommerce\Settings::IS_BROWSER_LOGGING_ENABLED,
            \Invertus\CardinalCommerce\Settings::ENABLED_SALE_ACTION,
            \Invertus\CardinalCommerce\Settings::ENVIRONMENT,
            \Invertus\CardinalCommerce\Settings::PAYMENT_METHOD,
            \Invertus\CardinalCommerce\Settings::API_IDENTIFIER,
            \Invertus\CardinalCommerce\Settings::API_ORG_UNIT_ID,
            \Invertus\CardinalCommerce\Settings::API_KEY,

            \Invertus\CardinalCommerce\Settings::AWAITING_PAYMENT,
            \Invertus\CardinalCommerce\Settings::CAPTURED,
            \Invertus\CardinalCommerce\Settings::AUTHORIZED,
            \Invertus\CardinalCommerce\Settings::REFUNDED,
            \Invertus\CardinalCommerce\Settings::VOIDED,
        ];

        foreach ($settings as $setting) {
            if (!Configuration::deleteByName($setting)) {
                return false;
            }
        }

        return true;
    }

    /**
     * Define tabs (controllers) used by module. Used for Prestashop 1.6
     *
     * @return array
     */
    private function getTabs16()
    {
        return [
            [
                'name' => $this->l('Settings'),
                'parent_class_name' => -1,
                'class_name' => 'AdminCardinalCommerceSettings',
                'is_active' => true,
            ],
            [
                'name' => $this->l('Payment Capture'),
                'parent_class_name' => -1,
                'class_name' => 'AdminCardinalCommerceOrderChange',
                'is_active' => false,
            ],
        ];
    }

    /**
     * Install Back Office tabs. Used for PrestaShop 1.6
     *
     * @return bool
     */
    private function installTabs16()
    {
        $tabs = $this->getTabs16();

        foreach ($tabs as $tab) {
            $moduleTab = new Tab();
            $moduleTab->module = $this->name;
            $moduleTab->class_name = $tab['class_name'];
            $moduleTab->id_parent = $tab['parent_class_name'];
            $moduleTab->active = $tab['is_active'];

            $languages = \Language::getLanguages(true);
            foreach ($languages as $language) {
                $moduleTab->name[$language['id_lang']] = $tab['name'];
            }

            if (!$moduleTab->save()) {
                return false;
            }
        }

        return true;
    }

    /**
     * Install Back Office tabs. Used for PrestaShop 1.6
     *
     * @return bool
     */
    private function uninstallTabs16()
    {
        foreach ($this->getTabs16() as $tab) {
            $idTab = \Tab::getIdFromClassName($tab['class_name']);

            if (!$idTab) {
                continue;
            }

            $tab = new \Tab($idTab);
            if (!$tab->delete()) {
                return false;
            }
        }

        return true;
    }

    /**
     * Load Cardinal Commerce errors from cookie to controller
     */
    private function loadCcErrors()
    {
        if (isset($this->context->cookie->cardinal_errors)) {
            $this->context->controller->errors = array_merge(
                $this->context->controller->errors,
                json_decode($this->context->cookie->cardinal_errors, true)
            );
            unset($this->context->cookie->cardinal_errors);
        }

        if (isset($this->context->cookie->cardinal_success)) {
            $this->context->controller->confirmations = array_merge(
                $this->context->controller->confirmations,
                json_decode($this->context->cookie->cardinal_success, true)
            );
            unset($this->context->cookie->cardinal_success);
        }
    }
}
