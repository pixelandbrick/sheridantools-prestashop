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

namespace Invertus\CardinalCommerce\Centinel\Response;

use Invertus\CardinalCommerce\Centinel\StatusCode;
use SimpleXMLElement;

final class AuthorizeResponse
{
    /**
     * @var string
     */
    private $statusCode;

    /**
     * @var string
     */
    private $reasonCode;

    /**
     * @var string
     */
    private $reasonDescription;

    /**
     * @var string
     */
    private $authorizationCode;

    /**
     * @var string
     */
    private $cardCode;

    /**
     * @var string
     */
    private $processorOrderNumber;

    /**
     * @var string
     */
    private $avsResult;

    /**
     * @param SimpleXMLElement $xmlResponse
     *
     * @return AuthorizeResponse
     */
    public static function fromXmlResponse(SimpleXMLElement $xmlResponse)
    {
        $response = new self();

        $response->statusCode = (string) $xmlResponse->StatusCode;
        $response->reasonCode = (string)$xmlResponse->ReasonCode;
        $response->reasonDescription = (string)$xmlResponse->ReasonDesc;
        $response->authorizationCode = (string) $xmlResponse->AuthorizationCode;
        $response->cardCode = (string) $xmlResponse->CardCodeResult;
        $response->processorOrderNumber = (string)$xmlResponse->ProcessorOrderNumber;
        $response->avsResult = (string)$xmlResponse->AVSResult;

        return $response;
    }

    /**
     * This class should be initialized using static factory
     */
    private function __construct()
    {
    }

    /**
     * @return string
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * @return string
     */
    public function getReasonCode()
    {
        return $this->reasonCode;
    }

    /**
     * @return string
     */
    public function getReasonDescription()
    {
        return $this->reasonDescription;
    }

    /**
     * @return string
     */
    public function getAuthorizationCode()
    {
        return $this->authorizationCode;
    }

    /**
     * @return string
     */
    public function getCardCode()
    {
        return $this->cardCode;
    }

    /**
     * @return string
     */
    public function getProcessorOrderNumber()
    {
        return $this->processorOrderNumber;
    }

    /**
     * @return string
     */
    public function getAvsResult()
    {
        return $this->avsResult;
    }

    /**
     * Check if transaction successful
     *
     * @return bool
     */
    public function isSuccess()
    {
        return $this->getStatusCode() == StatusCode::TRANSACTION_APPROVED;
    }
}
