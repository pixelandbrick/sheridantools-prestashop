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
use Invertus\CardinalCommerce\Centinel\Request\CaptureRequest;
use Invertus\CardinalCommerce\Centinel\Request\RefundRequest;
use Invertus\CardinalCommerce\Centinel\Request\VoidRequest;
use Invertus\CardinalCommerce\Settings;

class AdminCardinalCommerceOrderChangeController extends ModuleAdminController
{
    private $tempErrors = [];
    private $tempConfirmations = [];

    /**
     * Override PrestaShop postProcess() function
     *
     * @return bool|ObjectModel|void
     */
    public function postProcess()
    {
        $orderId = Tools::getValue('id_order');
        $orderIds = Tools::getValue('orderBox');
        $refundMessage = Tools::getValue('refund_message');

        if (Tools::isSubmit('capture_payment')) {
            $this->capturePayment($orderId);
            $this->redirectWithNotifications($orderId);
        } elseif (Tools::isSubmit('refund_payment')) {
            $this->refundPayment($orderId, $refundMessage);
            $this->redirectWithNotifications($orderId);
        } elseif (Tools::isSubmit('void_payment')) {
            $this->voidPayment($orderId);
            $this->redirectWithNotifications($orderId);
        } elseif (Tools::isSubmit('capture_payments')) {
            $this->captureBulkPayments($orderIds);
            $this->redirectWithNotifications();
        }
    }

    /**
     * @param int $orderId
     *
     * @return void
     */
    private function capturePayment($orderId)
    {
        $centinelOrder = CentinelOrder::getByOrderId($orderId);

        if (null === $centinelOrder) {
            throw new RuntimeException('Attempted to capture non Cardinal commerce order.');
        }

        $order = new Order($orderId);
        $centinelClient = CentinelApiClientFactory::createNew();

        try {
            $captureRequest = new CaptureRequest(
                $order,
                $centinelOrder->id_processor_order
            );

            $captureResponse = $centinelClient->capture($captureRequest);
            $centinelOrder->capture_status = $captureResponse->getStatusCode();
        } catch (CentinelApiException $e) {
            $this->errors[] = sprintf('%s [%s]', $e->getMessage(), $e->getCode());

            return;
        }

        $centinelOrder->update();
        $order->setCurrentState(Configuration::get(Settings::CAPTURED));
        $this->confirmations[] = $this->module->l('The payment have been successfully captured');
    }

    /**
     * @param int $orderId
     * @param $refundMessage
     *
     * @return void
     */
    private function refundPayment($orderId, $refundMessage)
    {
        $centinelOrder= CentinelOrder::getByOrderId($orderId);

        if (null === $centinelOrder) {
            throw new RuntimeException('Attempted to refund non Cardinal commerce order.');
        }

        $order = new Order($orderId);
        $centinelClient = CentinelApiClientFactory::createNew();

        try {
            $refundRequest = new RefundRequest(
                $order,
                $centinelOrder->id_processor_order,
                $refundMessage
            );

            $refundResponse = $centinelClient->refund($refundRequest);

            $centinelOrder->refund_status = $refundResponse->getStatusCode();
            $centinelOrder->update();

            if ($refundResponse->isSuccess()) {
                $order->setCurrentState(Configuration::get(Settings::REFUNDED));

                $this->confirmations[] = sprintf(
                    $this->l('Refunded successfully: %s'),
                    $refundResponse->getReasonDescription()
                );
            } else {
                $this->errors[] = $this->centinel_success[] = sprintf(
                    $this->l('Refunded failed: %s'),
                    $refundResponse->getReasonDescription()
                );
            }
        } catch (CentinelApiException $e) {
            $this->errors[] = sprintf('%s [%s]', $e->getMessage(), $e->getCode());

            return;
        }

        $order->setCurrentState(Configuration::get(Settings::REFUNDED));
        $this->confirmations[] = $this->module->l('The refund has been successfully processed');
    }

    /**
     * @param int $orderId
     */
    private function redirectWithNotifications($orderId = false)
    {
        $this->saveMessages();

        if (Settings::isPS16()) {
            $params = $orderId ? '&vieworder&id_order='.$orderId : '';
            Tools::redirectAdmin($this->context->link->getAdminLink('AdminOrders', true).$params);
        } else {
            $params = $orderId ? ['id_order' => $orderId, 'vieworder' => 1] : [];
            Tools::redirect($this->context->link->getAdminLink('AdminOrders', true, [], $params));
        }
    }

    /**
     * Save success and error messages
     */
    private function saveMessages()
    {
        if (!empty($this->errors)) {
            $this->context->cookie->cardinal_errors = json_encode($this->errors);
        }

        if (!empty($this->confirmations)) {
            $this->context->cookie->cardinal_success = json_encode($this->confirmations);
        }
    }

    /**
     * @param array $orderIds
     */
    private function captureBulkPayments($orderIds)
    {
        if (!$orderIds) {
            $orderIds = [];
        }

        foreach ($orderIds as $orderId) {
            try {
                $this->capturePayment((int)$orderId);
                $this->generateBulkMessages();
            } catch (Exception $e) {
                $this->errors[] = sprintf('%s [%s]', $e->getMessage(), $e->getCode());
                $this->generateBulkMessages();
            }
        }

        if (!empty($this->confirmations)) {
            $this->confirmations = $this->module->l('The payment have been successfully captured');
        }

        $this->errors = $this->tempErrors;
        $this->confirmations = $this->tempConfirmations;
    }

    /**
     * Void (cancel) payment for given order
     *
     * @param int $orderId
     */
    private function voidPayment($orderId)
    {
        $centinelOrder = CentinelOrder::getByOrderId($orderId);

        if (null === $centinelOrder) {
            $this->errors[] = sprintf(
                $this->l('Centinel order was not found for order with ID "%s"'),
                $orderId
            );

            return;
        }

        if (!$centinelOrder->isAuthorized()) {
            $this->errors[] = $this->l('Only authorized orders can be voided.');

            return;
        }

        $order = new Order($orderId);
        $client = CentinelApiClientFactory::createNew();

        try {
            $voidRequest = new VoidRequest(
                $order,
                $centinelOrder->id_processor_order
            );

            $voidResponse = $client->void($voidRequest);

            $centinelOrder->void_status = $voidResponse->getStatusCode();
            $centinelOrder->update();

            if ($voidResponse->isSuccess()) {
                $order->setCurrentState(Configuration::get(Settings::VOIDED));

                $this->confirmations[] = sprintf(
                    $this->l('Voided successfully: %s'),
                    $voidResponse->getReasonDescription()
                );
            } else {
                $this->errors[] = $this->errors[] = sprintf(
                    $this->l('Void failed: %s'),
                    $voidResponse->getReasonDescription()
                );
            }
        } catch (CentinelApiException $e) {
            $this->errors[] = sprintf('%s [%s]', $e->getMessage(), $e->getCode());

            return;
        }
    }

    /**
     * Generate bulk confirmation and success messages
     */
    private function generateBulkMessages()
    {
        $isErrorSaved = !empty($this->errors) && !in_array($this->errors[0], $this->tempErrors, true);
        $isConfirmationsSaved = !empty($this->confirmations) && empty($this->tempConfirmations);

        if ($isErrorSaved) {
            $this->tempErrors[] = $this->errors[0];
        }

        if ($isConfirmationsSaved) {
            $this->tempConfirmations[] = $this->confirmations[0];
        }

        $this->errors = [];
        $this->confirmations = [];
    }
}
