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

namespace Invertus\CardinalCommerce\Centinel;

use Address;
use Configuration;
use Country;
use Currency;
use GuzzleHttp\Client;
use Invertus\CardinalCommerce\AmountToCentsConverter;
use Invertus\CardinalCommerce\Centinel\Exception\CentinelApiException;
use Invertus\CardinalCommerce\Centinel\Exception\CentinelException;
use Invertus\CardinalCommerce\Centinel\Request\AuthorizeRequest;
use Invertus\CardinalCommerce\Centinel\Request\CaptureRequest;
use Invertus\CardinalCommerce\Centinel\Request\RefundRequest;
use Invertus\CardinalCommerce\Centinel\Request\TokenAuthorizeRequest;
use Invertus\CardinalCommerce\Centinel\Request\VoidRequest;
use Invertus\CardinalCommerce\Centinel\Response\AuthorizeResponse;
use Invertus\CardinalCommerce\Centinel\Response\CaptureResponse;
use Invertus\CardinalCommerce\Centinel\Response\RefundResponse;
use Invertus\CardinalCommerce\Centinel\Response\VoidResponse;
use Invertus\CardinalCommerce\Settings;
use Order;
use SimpleXMLElement;
use State;

/**
 * Wrapper around Centinel API
 */
final class CentinelApiClient
{
    /**
     * @var string
     */
    private $environment;

    /**
     * @param string $environment Environment in which API client operates
     */
    public function __construct($environment)
    {
        $this->environment = $environment;
    }

    /**
     * Perform authorization
     *
     * @param AuthorizeRequest $request
     *
     * @return AuthorizeResponse
     */
    public function authorize(AuthorizeRequest $request)
    {
        $invoiceAddress = new Address($request->getOrder()->id_address_invoice);
        $deliveryAddress = new Address($request->getOrder()->id_address_delivery);

        $invoiceCountry = new Country($invoiceAddress->id_country);
        $deliveryCountry = new Country($deliveryAddress->id_country);

        $authorizeParams = [
            'Eci' => $request->getEci(),
            'Cavv' => $request->getCavv(),
            'Xid' => $request->getXid(),
            'OrderNumber' => $request->getOrder()->id,
            'EMail' => $request->getOrder()->getCustomer()->email,
            'MsgType' => 'cmpi_authorize',
            'OrderId' => $request->getCentinelOrderId(),
            'BillingFirstName' => $invoiceAddress->firstname,
            'BillingLastName' => $invoiceAddress->lastname,
            'BillingAddress1' => $deliveryAddress->address1,
            'BillingAddress2' => $deliveryAddress->address2,
            'BillingCity' => $invoiceAddress->city,
            'BillingState' => (string) State::getNameById($invoiceAddress->id_state),
            'BillingPostalCode' => $invoiceAddress->postcode,
            'BillingCountryCode' => $invoiceCountry->iso_code,
            'BillingPhone' => $invoiceAddress->phone ?: $invoiceAddress->phone_mobile,
            'ShippingFirstName' => $deliveryAddress->firstname,
            'ShippingLastName' => $deliveryAddress->lastname,
            'ShippingAddress1' => $deliveryAddress->address1,
            'ShippingAddress2' => $deliveryAddress->address2,
            'ShippingCity' => $deliveryAddress->city,
            'ShippingState' => (string) State::getNameById($deliveryAddress->id_state),
            'ShippingPostalCode' => $deliveryAddress->postcode,
            'ShippingCountryCode' => $deliveryCountry->iso_code,
        ];

        return AuthorizeResponse::fromXmlResponse($this->callApi($request->getOrder(), $authorizeParams));
    }

    /**
     * @param TokenAuthorizeRequest $tokenAuthorizationRequest
     */
    public function authorizeWithToken(TokenAuthorizeRequest $request)
    {
        $invoiceAddress = new Address($request->getOrder()->id_address_invoice);
        $deliveryAddress = new Address($request->getOrder()->id_address_delivery);

        $invoiceCountry = new Country($invoiceAddress->id_country);
        $deliveryCountry = new Country($deliveryAddress->id_country);

        $authorizeParams = [
            'Token' => $request->getCardToken()->token,
            'CardLastFour' => $request->getCardToken()->card_last_four_digits,
            'OrderNumber' => $request->getOrder()->id,
            'EMail' => $request->getOrder()->getCustomer()->email,
            'MsgType' => 'cmpi_authorize',
            'OrderId' => $request->getCardToken()->id_processor_order,
            'BillingFirstName' => $invoiceAddress->firstname,
            'BillingLastName' => $invoiceAddress->lastname,
            'BillingAddress1' => $deliveryAddress->address1,
            'BillingAddress2' => $deliveryAddress->address2,
            'BillingCity' => $invoiceAddress->city,
            'BillingState' => (string) State::getNameById($invoiceAddress->id_state),
            'BillingPostalCode' => $invoiceAddress->postcode,
            'BillingCountryCode' => $invoiceCountry->iso_code,
            'BillingPhone' => $invoiceAddress->phone ?: $invoiceAddress->phone_mobile,
            'ShippingFirstName' => $deliveryAddress->firstname,
            'ShippingLastName' => $deliveryAddress->lastname,
            'ShippingAddress1' => $deliveryAddress->address1,
            'ShippingAddress2' => $deliveryAddress->address2,
            'ShippingCity' => $deliveryAddress->city,
            'ShippingState' => (string) State::getNameById($deliveryAddress->id_state),
            'ShippingPostalCode' => $deliveryAddress->postcode,
            'ShippingCountryCode' => $deliveryCountry->iso_code,
        ];

        return AuthorizeResponse::fromXmlResponse($this->callApi($request->getOrder(), $authorizeParams));
    }

    /**
     * Perform payment capture
     *
     * @param CaptureRequest $request
     *
     * @return CaptureResponse
     */
    public function capture(CaptureRequest $request)
    {
        $captureParams = [
            'MsgType' => 'cmpi_capture',
            'OrderId' => $request->getCentinelOrderId(),
        ];

        return CaptureResponse::fromXmlResponse($this->callApi($request->getOrder(), $captureParams));
    }

    /**
     * Perform payment refund
     *
     * @param RefundRequest $request
     *
     * @return RefundResponse
     */
    public function refund(RefundRequest $request)
    {
        $refundParams = [
            'MsgType' => 'cmpi_refund',
            'OrderId' => $request->getCentinelOrderId(),
            'Description' => $request->getReason(),
        ];

        return RefundResponse::fromXmlResponse($this->callApi($request->getOrder(), $refundParams));
    }

    /**
     * Perform payment void
     *
     * @param VoidRequest $request
     *
     * @return VoidResponse
     */
    public function void(VoidRequest $request)
    {
        $voidParams = [
            'MsgType' => 'cmpi_void',
            'OrderId' => $request->getCentinelOrderId(),
        ];

        return VoidResponse::fromXmlResponse($this->callApi($request->getOrder(), $voidParams));
    }

    /**
     * @param Order $order
     * @param array $params
     *
     * @return array
     */
    private function getMessageWithCommonData(Order $order, array $params)
    {
        $timestamp = time() * 1000;
        $plaintext = $timestamp . Configuration::get(Settings::API_KEY);
        $signature = base64_encode(hash('sha256', $plaintext, true));

        $orderCurrency = new Currency($order->id_currency);

        $amountInCents = AmountToCentsConverter::convert(
            $order->total_paid_tax_incl,
            $orderCurrency->iso_code
        );

        $message = [
            'Version' => '1.7',
            'TransactionType' => 'CC',
            'OrgUnit' => Configuration::get(Settings::API_ORG_UNIT_ID),
            'Identifier' => Configuration::get(Settings::API_IDENTIFIER),
            'Algorithm' => 'SHA-256',
            'Timestamp' => $timestamp,
            'Signature' => $signature,
            'Amount' => $amountInCents,
            'CurrencyCode' => $orderCurrency->iso_code_num,
        ];

        $message = array_merge($message, $params);

        return $message;
    }

    /**
     * @param Order $order
     * @param array $params
     * @return SimpleXMLElement
     */
    private function callApi(Order $order, array $params)
    {
        $message = $this->getMessageWithCommonData($order, $params);

        $url = sprintf('%s%s', Environment::getUrl($this->environment), '/maps/txns.asp');
        $client = new Client();

        $response = $client->post($url, [
            'body' => [
                'cmpi_msg' => $this->buildXmlMessageFromArray($message),
            ],
        ]);

        if (null === $response) {
            throw new CentinelException('Failed to perform curl call to Cardinal Commerce API.');
        }

        if ($response->getStatusCode() > 299) {
            throw new CentinelException(sprintf('Http error occurred. Status code: %s', $response->getStatusCode()));
        }

        $xmlResponse = simplexml_load_string($response->getBody()->getContents());

        if (isset($xmlResponse->ErrorNo, $xmlResponse->ErrorDesc)
            && $xmlResponse->ErrorNo != '0'
            && $xmlResponse->ErrorDesc
        ) {
            throw new CentinelApiException(
                $xmlResponse->ErrorDesc,
                (int) $xmlResponse->ErrorNo
            );
        }

        return $xmlResponse;
    }

    /**
     * @param array $arrayMessage
     *
     * @return string
     */
    private function buildXmlMessageFromArray(array $arrayMessage)
    {
        $xmlResponse = '<CardinalMPI>';

        foreach ($arrayMessage as $paramName => $paramValue) {
            $paramValue = str_replace(['&', '<'], ['&amp;', '&lt;'], $paramValue);
            $xmlResponse .= "<{$paramName}>{$paramValue}</{$paramName}>";
        }

        $xmlResponse .= '</CardinalMPI>';

        return $xmlResponse;
    }
}
