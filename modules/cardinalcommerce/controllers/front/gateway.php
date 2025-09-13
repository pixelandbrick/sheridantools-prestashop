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
use Invertus\CardinalCommerce\Songbird\JWTGenerator;
use Invertus\CardinalCommerce\Settings;
use Invertus\CardinalCommerce\Songbird\SongbirdUrl;

class CardinalCommerceGatewayModuleFrontController extends ModuleFrontController
{
    /**
     * Override PrestaShop checkAccess() function
     *
     * @var Order
     */
    private $order;

    public function checkAccess()
    {
        $secureKey = Tools::getValue('secure_key');
        $order = new Order(Tools::getValue('order_id'));

        if ($this->context->customer->secure_key !== $secureKey
            || $order->secure_key !== $secureKey
            || !$this->module->active
        ) {
            Tools::redirect('index.php?controller=order&step=1');
        }

        $this->order = $order;

        return true;
    }

    /**
     * Override PrestaShop setMedia() function
     *
     * @return bool|void
     */
    public function setMedia()
    {
        parent::setMedia();

        if (Configuration::get(Settings::ENVIRONMENT) === Environment::STAG) {
            $songbirdUrl = SongbirdUrl::STAGING;
        } else {
            $songbirdUrl = SongbirdUrl::PRODUCTION;
        }

        if (Settings::isPS16()) {
            $this->addJS(
                $songbirdUrl,
                false
            );
            $this->addJS(
                $this->module->getLocalPath() . '/views/js/front/gateway.js'
            );
            $this->addCSS(
                $this->module->getLocalPath() . '/views/css/gateway.css'
            );
        } else {
            $this->registerJavascript(
                'cardinalcommerce-songbird',
                $songbirdUrl,
                [
                    'server' => 'remote',
                ]
            );

            $this->registerJavascript(
                'cardinalcommerce-gateway',
                'modules/'.$this->module->name.'/views/js/front/gateway.js'
            );

            $this->registerStylesheet(
                'cardinalcommerce-gateway-stylesheet',
                'modules/'.$this->module->name.'/views/css/gateway.css'
            );
        }
    }

    /**
     * Override PrestaShop initContent() function
     */
    public function initContent()
    {
        parent::initContent();

        $cart = new Cart($this->order->id_cart);
        $token = CardToken::getByCustomerId($this->order->id_customer);

        $jwtGenerator = new JWTGenerator();
        $jwt = $jwtGenerator->generate($this->order);

        Media::addJsDef([
            'cardinal_commerce_jwt' => $jwt,
            'cardinal_commerce_browser_logging' => (bool) Configuration::get(Settings::IS_BROWSER_LOGGING_ENABLED),
        ]);

        if (Settings::isPS16()) {
            $this->initContent16($token);
        } else {
            $this->initPS17Content($cart, $token);
        }
    }

    /**
     * Set smarty cariables for Prestashop 1.6
     *
     * @param $token
     */
    private function initContent16($token)
    {
        $this->context->smarty->assign([
            'cardinal_errors' => $this->context->controller->errors,
            'order_id' => $this->order->id,
            'secure_key' => $this->order->secure_key,
            'cvc_image' => __PS_BASE_URI__ . 'modules/cardinalcommerce/views/img/credit-cards/cvc.png',
            'last_four_digits' => $token ? $token['card_last_four_digits'] :false,
            'authentication_url' => $this->context->link->getModuleLink($this->module->name, 'authentication', [
                'secure_key' => $this->order->secure_key,
                'order_id' => $this->order->id,
            ])
        ]);

        unset($this->context->cookie->cardinal_errors);
        $this->setTemplate('gateway16.tpl');
    }

    /**
     * Set smarty cariables for Prestashop 1.7
     *
     * @param Cart $cart
     * @param $token
     */
    private function initPS17Content(Cart $cart, $token)
    {
        $this->context->smarty->assign([
            'order_id' => $this->order->id,
            'secure_key' => $this->order->secure_key,
            'cart' => $this->cart_presenter->present($cart),
            'cvc_image' => __PS_BASE_URI__ . 'modules/cardinalcommerce/views/img/credit-cards/cvc.png',
            'last_four_digits' => $token ? $token['card_last_four_digits'] :false,
        ]);

        $this->setTemplate('module:cardinalcommerce/views/templates/front/gateway.tpl');
    }
}
