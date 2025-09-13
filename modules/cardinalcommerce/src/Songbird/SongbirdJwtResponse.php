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

/**
 * Carries decoded JWT response from Songbird
 */
final class SongbirdJwtResponse
{
    /**
     * @var string
     */
    private $actionCode;

    /**
     * @var string
     */
    private $CAVV;

    /**
     * @var string
     */
    private $ECIFlag;

    /**
     * @var string
     */
    private $XID;

    /**
     * @var string
     */
    private $processorOrderId;

    /**
     * @var string
     */
    private $cardLastFour;

    /**
     * @var string
     */
    private $token;

    /**
     * @param array $rawResponse
     *
     * @return self
     */
    public static function fromRawResponse(array $rawResponse)
    {
        $payload = $rawResponse['Payload'];

        $response = new self();
        $response->actionCode = $payload['ActionCode'];

        $response->CAVV = isset($payload['Payment']['ExtendedData']['CAVV']) ?
            $payload['Payment']['ExtendedData']['CAVV'] :
            '';
        $response->ECIFlag = isset($payload['Payment']['ExtendedData']['ECIFlag']) ?
            $payload['Payment']['ExtendedData']['ECIFlag'] :
            '';
        $response->XID = isset($payload['Payment']['ExtendedData']['XID']) ?
            $payload['Payment']['ExtendedData']['XID'] :
            '';
        $response->processorOrderId = isset($payload['AuthorizationProcessor']['ProcessorOrderId']) ?
            $payload['AuthorizationProcessor']['ProcessorOrderId'] :
            '';
        $response->cardLastFour = isset($payload['Token']['CardLastFour']) ?
            $payload['Token']['CardLastFour'] :
            '';
        $response->token = isset($payload['Token']['Token']) ? $payload['Token']['Token'] : '' ;

        return $response;
    }

    /**
     * This class should be created using static factory
     */
    private function __construct()
    {
    }

    /**
     * @return string
     */
    public function getCAVV()
    {
        return $this->CAVV;
    }

    /**
     * @return string
     */
    public function getECIFlag()
    {
        return $this->ECIFlag;
    }

    /**
     * @return string
     */
    public function getXID()
    {
        return $this->XID;
    }

    /**
     * @return string
     */
    public function getActionCode()
    {
        return $this->actionCode;
    }

    /**
     * @return string
     */
    public function getProcessorOrderId()
    {
        return $this->processorOrderId;
    }

    /**
     * @return string
     */
    public function getCardLastFour()
    {
        return $this->cardLastFour;
    }

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }
}
