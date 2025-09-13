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

namespace Invertus\CardinalCommerce\Songbird;

use Address;
use Configuration;
use Country;
use Currency;
use Invertus\CardinalCommerce\AmountToCentsConverter;
use Invertus\CardinalCommerce\Settings;
use Invertus\CardinalCommerce\Songbird\Exception\InvalidJWTSignatureException;
use Invertus\CardinalCommerce\Songbird\Exception\MissingJWTContentException;
use Order;
use State;

final class JWTGenerator
{
    /**
     * Generate Songbird JWT token
     *
     * @param Order $order
     *
     * @return string
     */
    public function generate(Order $order)
    {
        $header = $this->generateHeader();
        $body = $this->generateBody($order);
        $signature = $this->generateSignature($header, $body);

        return sprintf('%s.%s.%s', $header, $body, $signature);
    }

    /**
     * @param string $jwt
     *
     * @return SongbirdJwtResponse
     */
    public function parse($jwt)
    {
        $jwtParts = explode('.', $jwt);

        if (count($jwtParts) !== 3) {
            throw new MissingJWTContentException('JWT content is missing');
        }

        list($header, $body, $signature) = $jwtParts;

        if ($signature !== $this->generateSignature($header, $body)) {
            throw new InvalidJWTSignatureException('Invalid JWT signature');
        }

        $rawResponse = json_decode(Base64Encoder::decode($body), true);

        return SongbirdJwtResponse::fromRawResponse($rawResponse);
    }

    /**
     * @return string
     */
    private function generateHeader()
    {
        return Base64Encoder::encode(json_encode([
            'alg' => 'HS256',
            'typ' => 'JWT',
        ]));
    }

    /**
     * @param Order $order
     *
     * @return string
     */
    private function generateBody(Order $order)
    {
        $expirationTime = 7200; // 2h in seconds
        $timestamp = time();

        $data = [
            'jti' => uniqid('', true),
            'iat' => $timestamp,
            'exp' => $timestamp + $expirationTime,
            'iss' => Configuration::get(Settings::API_IDENTIFIER),
            'OrgUnitId' => Configuration::get(Settings::API_ORG_UNIT_ID),
            'Payload' => $this->generatePayload($order),
            'ObjectifyPayload' => true,
        ];

        return Base64Encoder::encode(json_encode($data));
    }

    /**
     * @param string $header
     * @param string $body
     *
     * @return string
     */
    private function generateSignature($header, $body)
    {
        $apiKey = Configuration::get(Settings::API_KEY);

        return Base64Encoder::encode(
            hash_hmac(
                'sha256',
                sprintf('%s.%s', $header, $body),
                $apiKey,
                true
            )
        );
    }

    /**
     * @param Order $order
     *
     * @return array
     */
    private function generatePayload(Order $order)
    {
        $invoiceAddress = new Address($order->id_address_invoice);
        $deliveryAddress = new Address($order->id_address_delivery);

        $invoiceCountry = new Country($invoiceAddress->id_country);
        $deliveryCountry = new Country($deliveryAddress->id_country);

        $orderCurrency = new Currency($order->id_currency);

        $amountInCents = AmountToCentsConverter::convert(
            $order->total_paid_tax_incl,
            $orderCurrency->iso_code
        );

        $payload = [
            'Consumer' => [
                'BillingAddress' => [
                    'FirstName' => $invoiceAddress->firstname,
                    'LastName' => $invoiceAddress->lastname,
                    'Address1' => $invoiceAddress->address1,
                    'Address2' => $invoiceAddress->address2,
                    'City' => $invoiceAddress->city,
                    'State' => (string) State::getNameById($invoiceAddress->id_state),
                    'PostalCode' => $invoiceAddress->postcode,
                    'CountryCode' => $invoiceCountry->iso_code,
                    'Phone1' => $invoiceAddress->phone,
                    'MobilePhone' => $invoiceAddress->phone_mobile,
                ],
                'ShippingAddress' => [
                    'FirstName' => $deliveryAddress->firstname,
                    'LastName' => $deliveryAddress->lastname,
                    'Address1' => $deliveryAddress->address1,
                    'Address2' => $deliveryAddress->address2,
                    'City' => $deliveryAddress->city,
                    'State' => (string) State::getNameById($deliveryAddress->id_state),
                    'PostalCode' => $deliveryAddress->postcode,
                    'CountryCode' => $deliveryCountry->iso_code,
                    'Phone1' => $deliveryAddress->phone,
                    'MobilePhone' => $deliveryAddress->phone_mobile,
                ],
                'Email1' => $order->getCustomer()->email,
            ],
            'OrderDetails' => [
                'OrderNumber' => $order->id,
                'Amount' => $amountInCents,
                'CurrencyCode' => $orderCurrency->iso_code,
                'OrderChannel' => 'S',
            ],
            'Options' => [
                'EnableCCA' => (bool) Configuration::get(Settings::ENABLED_CCA),
            ],
        ];

        return $payload;
    }
}
