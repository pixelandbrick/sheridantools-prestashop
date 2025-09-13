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

use Invertus\CardinalCommerce\Centinel\CentinelApiClientFactory;
use Invertus\CardinalCommerce\Centinel\Exception\CentinelApiException;
use Invertus\CardinalCommerce\Centinel\Request\AuthorizeRequest;
use Invertus\CardinalCommerce\Centinel\Request\CaptureRequest;
use Invertus\CardinalCommerce\Centinel\Request\TokenAuthorizeRequest;
use Invertus\CardinalCommerce\Centinel\Response\AuthorizeResponse;
use Invertus\CardinalCommerce\CreditCardFormActions;
use Invertus\CardinalCommerce\Settings;
use Invertus\CardinalCommerce\Songbird\Exception\SongbirdException;
use Invertus\CardinalCommerce\Songbird\JWTGenerator;
use Invertus\CardinalCommerce\Songbird\SongbirdJwtResponse;

class CardinalCommerceAuthenticationModuleFrontController extends ModuleFrontController
{
    /**
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

        if (!$this->isTokenValid()) {
            $this->errors[] = $this->module->l('Security token is invalid.', 'authentication');

            return $this->redirectWithNotifications(
                $this->context->link->getModuleLink('cardinalcommerce', 'gateway')
            );
        }

        $this->order = $order;

        return true;
    }

    public function postProcess()
    {
        $centinelOrder = new CentinelOrder();

        if (CreditCardFormActions::PAY_WITH_TOKEN === Tools::getValue('card_token_action_selected')) {
            $tokenResponse = CardToken::getByCustomerId($this->context->customer->id);
            $token = new CardToken($tokenResponse['id_cc_token']);
            $songbirdProcessorOrderId = $token->id_processor_order;

            $centinelOrder->id_order = $this->order->id;
            $centinelOrder->id_processor_order = $token->id_processor_order;
            $centinelOrder->action_code = $token->action_code;

            $authorizationResponse = $this->makeTokenAuthorization($token);

            if (null === $authorizationResponse) {
                return $this->redirectWithNotifications($this->getErrorRedirectUrl());
            }
        } else {
            $cardinalCommerceResponse = Tools::getValue('cardinal-commerce-response');
            $response = json_decode($cardinalCommerceResponse, true);

            $this->validateResponse($response);

            if (!empty($this->errors)) {
                return $this->redirectWithNotifications($this->getErrorRedirectUrl());
            }

            try {
                $songbirdResponse = $this->parseJwt($response['jwt']);
            } catch (SongbirdException $e) {
                $this->errors[] = sprintf('%s [%s]', $e->getMessage(), $e->getCode());

                return $this->redirectWithNotifications($this->getErrorRedirectUrl());
            }

            $this->validateSongbirdResponse($songbirdResponse, $response);

            if (!empty($this->errors)) {
                return $this->redirectWithNotifications($this->getErrorRedirectUrl());
            }
            $songbirdProcessorOrderId = $songbirdResponse->getProcessorOrderId();

            if (CreditCardFormActions::SAVE_PAYMENT_WITH_TOKEN === Tools::getValue('card_token_action_selected')) {
                CardToken::saveToken(
                    $this->order->id_customer,
                    $songbirdResponse->getCardLastFour(),
                    $songbirdResponse->getToken(),
                    $songbirdResponse->getProcessorOrderId(),
                    $songbirdResponse->getActionCode()
                );
            }

            $centinelOrder->id_order = $this->order->id;
            $centinelOrder->id_processor_order = $songbirdResponse->getProcessorOrderId();
            $centinelOrder->action_code = $songbirdResponse->getActionCode();

            $authorizationResponse = $this->makeAuthorization($songbirdResponse);

            if (null === $authorizationResponse) {
                return $this->redirectWithNotifications($this->getErrorRedirectUrl());
            }
        }


        if (CreditCardFormActions::DELETE_PAYMENT_WITH_TOKEN === Tools::getValue('card_token_action_selected')) {
            CardToken::deleteToken($this->order->id_customer);
        }

        $centinelOrder->authorization_status = $authorizationResponse->getStatusCode()[0];
        $centinelOrder->processor_order_number = $authorizationResponse->getProcessorOrderNumber();
        $centinelOrder->authorization_code = $authorizationResponse->getAuthorizationCode();
        $centinelOrder->avs_result = $authorizationResponse->getAvsResult();
        $centinelOrder->card_code_result = $authorizationResponse->getCardCode();

        $centinelClient = CentinelApiClientFactory::createNew();

        if ($authorizationResponse->isSuccess()) {
            $this->order->setCurrentState(Configuration::get(Settings::AUTHORIZED));

            $isAutoCaptureEnabled = Configuration::get(Settings::ENABLED_SALE_ACTION);

            if ($isAutoCaptureEnabled) {
                try {
                    $captureRequest = new CaptureRequest(
                        $this->order,
                        $songbirdProcessorOrderId
                    );

                    $captureResponse = $centinelClient->capture($captureRequest);
                    $centinelOrder->capture_status = $captureResponse->getStatusCode();

                    if ($captureResponse->isSuccess()) {
                        $this->order->setCurrentState(Configuration::get(Settings::CAPTURED));
                    }
                } catch (CentinelApiException $e) {
                    $this->errors[] = sprintf('%s [%s]', $e->getMessage(), $e->getCode());
                    $this->order->setCurrentState(Configuration::get('PS_OS_ERROR'));

                    return $this->redirectWithNotifications($this->getErrorRedirectUrl());
                }
            }
        } else {
            $this->order->setCurrentState(Configuration::get('PS_OS_ERROR'));
        }

        $centinelOrder->add();

        return $this->redirectWithNotifications(
            $this->getConfirmationRedirectUrl()
        );
    }

    /**
     * @param array $response
     */
    private function validateResponse($response)
    {
        switch ($response['data']['ActionCode']) {
            case 'SUCCESS':
            case 'NOACTION':
                break;
            case 'FAILURE':
                $this->errors[] = sprintf(
                    '%s, %s',
                    $this->module->l('Payment was unsuccessful.', 'authentication'),
                    $this->module->l('Please try again or provide another form of payment.', 'authentication')
                );
                break;
            case 'ERROR':
                $this->errors[] = sprintf(
                    '%s %s',
                    $response['data']['ErrorDescription'],
                    isset($response['ErrorNumber']) ? '('.$response['ErrorNumber'].')' : ''
                );
                break;
            default:
                $this->errors[] = $this->module->l('Unknown ActionCode', 'authentication');
                break;
        }

        if (empty($this->errors)) {
            if (!isset($response['jwt']) || !$response['jwt']) {
                $this->errors[] = $this->module->l('Payment was unsuccessful.', 'authentication');
            }
        }
    }

    /**
     * @param SongbirdJwtResponse $songbirdResponse
     * @param array $response
     */
    private function validateSongbirdResponse(SongbirdJwtResponse $songbirdResponse, array $response)
    {
        if ($songbirdResponse->getActionCode() !== $response['data']['ActionCode']) {
            $this->errors[] = $this->module->l('data and Payload ActionCode do not match', 'authentication');
        }
    }

    /**
     * @param string $jwt
     *
     * @return SongbirdJwtResponse
     */
    private function parseJwt($jwt)
    {
        $jwtGenerator = new JWTGenerator();

        return $jwtGenerator->parse($jwt);
    }

    /**
     * @return string
     */
    private function getErrorRedirectUrl()
    {
        return $this->context->link->getModuleLink(
            'cardinalcommerce',
            'gateway',
            [
                'order_id' => Tools::getValue('order_id'),
                'secure_key' => Tools::getValue('secure_key'),
            ]
        );
    }

    /**
     * @return string
     */
    private function getConfirmationRedirectUrl()
    {
        return $this->context->link->getPageLink(
            'order-confirmation',
            true,
            $this->context->language->id,
            [
                'id_cart' => $this->order->id_cart,
                'id_module' => $this->module->id,
                'id_order' => $this->order->id,
                'key' => $this->order->getCustomer()->secure_key,
            ]
        );
    }

    /**
     * @param SongbirdJwtResponse $songbirdResponse
     *
     * @return AuthorizeResponse|null
     */
    private function makeAuthorization(SongbirdJwtResponse $songbirdResponse)
    {
        $centinelClient = CentinelApiClientFactory::createNew();

        try {
            $authorizeRequest = new AuthorizeRequest(
                $this->order,
                $songbirdResponse->getECIFlag(),
                $songbirdResponse->getCAVV(),
                $songbirdResponse->getXID(),
                $songbirdResponse->getProcessorOrderId()
            );

            return $centinelClient->authorize($authorizeRequest);
        } catch (CentinelApiException $e) {
            $this->errors[] = sprintf('%s [%s]', $e->getMessage(), $e->getCode());
        }

        $this->order->setCurrentState(Configuration::get('PS_OS_ERROR'));

        return null;
    }

    /**
     * @return AuthorizeResponse|null
     */
    private function makeTokenAuthorization($token)
    {
        $centinelClient = CentinelApiClientFactory::createNew();

        try {
            $tokenAuthorizeRequest = new TokenAuthorizeRequest(
                $token,
                $this->order
            );

            return $centinelClient->authorizeWithToken($tokenAuthorizeRequest);
        } catch (CentinelApiException $e) {
            $this->errors[] = sprintf('%s [%s]', $e->getMessage(), $e->getCode());
        }

        $this->order->setCurrentState(Configuration::get('PS_OS_ERROR'));

        return null;
    }

    /**
     * @return mixed
     */
    public function redirectWithNotifications()
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

        $this->context->cookie->cardinal_errors = json_encode($this->errors);

        return call_user_func_array(['Tools', 'redirect'], func_get_args());
    }
}
