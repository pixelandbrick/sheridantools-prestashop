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

use Invertus\CardinalCommerce\Centinel\Environment;
use Invertus\CardinalCommerce\PaymentMethod;
use Invertus\CardinalCommerce\Settings;

/**
 * Manages configurable module settings
 */
class AdminCardinalCommerceSettingsController extends ModuleAdminController
{
    /**
     * AdminCardinalCommerceSettingsController constructor.
     */
    public function __construct()
    {
        $this->bootstrap = true;

        parent::__construct();

        $this->override_folder = 'custom-options/';
        $this->tpl_folder = 'custom-options/';

        $this->initFieldsOptions();
    }

    /**
     * Initializes configuration options for module
     */
    private function initFieldsOptions()
    {
        $this->fields_options = [
            'setting' => [
                'title' => $this->l('Cardinal Commerce Settings'),

                'description' =>
                    $this->l('In order to use this module, required invoice phone number setting must be on'),
                'fields' => [
                    Settings::API_IDENTIFIER => [
                        'title' => $this->l('API Identifier'),
                        'type' => 'text',
                    ],
                    Settings::API_ORG_UNIT_ID => [
                        'title' => $this->l('API OrgUnitId'),
                        'type' => 'text',
                    ],
                    Settings::API_KEY => [
                        'title' => $this->l('API Key'),
                        'type' => 'text',
                    ],
                    Settings::ENVIRONMENT => [
                        'title' => $this->l('Chosen environment'),
                        'cast' => 'pSQL',
                        'type' => 'select',
                        'list' => [
                            [
                                'name' => 'Centinel Test',
                                'id' => Environment::STAG,
                            ],
                            [
                                'name' => 'CyberSource',
                                'id' => Environment::CYBERSOURCE,
                            ],
                            [
                                'name' => 'FirstData',
                                'id' => Environment::FIRSTDATA,
                            ],
                            [
                                'name' => 'FirstData Test',
                                'id' => Environment::FIRSTDATA_TEST,
                            ],
                            [
                                'name' => 'Paymentech',
                                'id' => Environment::PAYMENTECH,
                            ],
                            [
                                'name' => 'PayPal',
                                'id' => Environment::PAYPAL,
                            ],
                            [
                                'name' => 'Production 200',
                                'id' => Environment::PRODUCTION_200,
                            ],
                            [
                                'name' => 'Production 300',
                                'id' => Environment::PRODUCTION_300,
                            ],
                            [
                                'name' => 'Production 400',
                                'id' => Environment::PRODUCTION_400,
                            ],
                            [
                                'name' => 'Production 600',
                                'id' => Environment::PROD,
                            ],
                            [
                                'name' => 'Production 800',
                                'id' => Environment::PRODUCTION_800,
                            ],
                            [
                                'name' => 'Production 1000',
                                'id' => Environment::PRODUCTION_1000,
                            ],
                            [
                                'name' => 'Production 1200',
                                'id' => Environment::PRODUCTION_1200,
                            ],
                        ],
                        'identifier' => 'id',
                    ],
                    Settings::ENABLED_CCA => [
                        'title' => $this->l('Enable CCA'),
                        'cast' => 'intval',
                        'type' => 'bool',
                    ],
                    Settings::IS_BROWSER_LOGGING_ENABLED => [
                        'title' => $this->l('Enable browser logging'),
                        'cast' => 'intval',
                        'type' => 'bool',
                    ],
                    Settings::ENABLED_SALE_ACTION => [
                        'title' => $this->l('Enable sale action'),
                        'desc' => $this->l('In case you choose NO, you will have to capture money yourself.'),
                        'cast' => 'intval',
                        'type' => 'bool',
                    ],
                    Settings::PAYMENT_METHOD => [
                        'title' => $this->l('Displayed payment methods'),
                        'type' => 'custom-options',
                        'choices' => [
                            PaymentMethod::VISA => 'Visa',
                            PaymentMethod::MASTER_CARD => 'MasterCard',
                            PaymentMethod::AMERICAN_EXPRESS => 'American Express',
                            PaymentMethod::DISCOVER => 'Discover',
                            PaymentMethod::JCB => 'JCB',
                            PaymentMethod::DINERS => 'Diners',
                        ],
                        'auto_value' => false,
                    ],
                ],
                    'submit' => [
                        'title' => $this->l('Save'),
                    ],
            ],
        ];
    }

    /**
     * Collect and save payment method selected options
     *
     * @param $paymentMethods
     */
    public function updateOptionCcPaymentMethod($paymentMethods)
    {
        if (false === $paymentMethods) {
            $paymentMethods = [];
        }

        Configuration::updateValue(Settings::PAYMENT_METHOD, json_encode($paymentMethods));
    }

    /**
     * Manually set payment method selected options
     *
     * @return string
     */
    public function renderOptions()
    {
        $paymentMethods = json_decode(Configuration::get(Settings::PAYMENT_METHOD), true);

        if (null === $paymentMethods) {
            $paymentMethods = [];
        }

        $this->fields_options['setting']['fields'][Settings::PAYMENT_METHOD]['value'] = $paymentMethods;

        return parent::renderOptions();
    }
}
