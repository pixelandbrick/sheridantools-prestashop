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

use Invertus\CardinalCommerce\Settings;

class CardinalCommerceValidationModuleFrontController extends ModuleFrontController
{
    /**
     * @var CardinalCommerce
     */
    public $module;

    /**
     * Override PrestaShop checkAccess() function
     *
     * @return bool
     */
    public function checkAccess()
    {
        $cart = $this->context->cart;

        if ($cart->id_customer == 0
            || $cart->id_address_delivery == 0
            || $cart->id_address_invoice == 0
            || !$this->module->active
        ) {
            Tools::redirect('index.php?controller=order&step=1');
        }

        $this->validateOrderAddress($cart);

        return true;
    }

    /**
     * Validates and places order
     */
    public function postProcess()
    {
        $cart = $this->context->cart;
        $currency = $this->context->currency;
        $customer = $this->context->customer;

        $this->module->validateOrder(
            $cart->id,
            Configuration::get(Settings::AWAITING_PAYMENT),
            $cart->getOrderTotal(),
            $this->module->displayName,
            null,
            [],
            $currency->id,
            false,
            $customer->secure_key
        );

        Tools::redirect($this->context->link->getModuleLink($this->module->name, 'gateway', [
            'secure_key' => $customer->secure_key,
            'order_id' => $this->module->currentOrder,
        ]));
    }

    /**
     * Validates the order address to include a phone number
     *
     * @param Cart $cart
     */
    private function validateOrderAddress(Cart $cart)
    {
        $invoiceAddress = new Address($cart->id_address_invoice);

        if (empty($invoiceAddress->phone) && empty($invoiceAddress->phone_mobile)) {
            $this->errors[] =
                $this->module->
                l('The billing address phone number is required to use this payment option', 'validation');
            $this->redirectWithNotifications('index.php?controller=order&step=1');
        }
    }
}
