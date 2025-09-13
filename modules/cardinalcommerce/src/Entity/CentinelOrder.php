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

class CentinelOrder extends ObjectModel
{
    /**
     * @var int
     */
    public $id_order;

    /**
     * @var int
     */
    public $id_processor_order;

    /**
     * @var string
     */
    public $authorization_status;

    /**
     * @var string
     */
    public $capture_status;

    /**
     * @var string
     */
    public $void_status;

    /**
     * @var string
     */
    public $refund_status;

    /**
     * @var string
     */
    public $avs_result;

    /**
     * @var string
     */
    public $processor_order_number;

    /**
     * @var string
     */
    public $action_code;

    /**
     * @var string
     */
    public $authorization_code;

    /**
     * @var string
     */
    public $card_code_result;

    /**
     * @var array
     */
    public static $definition = [
        'table' => 'cc_centinel_order',
        'primary' => 'id_centinel_order',
        'multilang' => false,
        'fields' => [
            'id_order' => ['type' => self::TYPE_INT, 'validate' => 'isInt', 'required' => true],
            'id_processor_order' => ['type' => self::TYPE_STRING, 'validate' => 'isString'],
            'authorization_status' => ['type' => self::TYPE_STRING, 'validate' => 'isString'],
            'capture_status' => ['type' => self::TYPE_STRING, 'validate' => 'isString'],
            'refund_status' => ['type' => self::TYPE_STRING, 'validate' => 'isString'],
            'void_status' => ['type' => self::TYPE_STRING, 'validate' => 'isString'],
            'avs_result' => ['type' => self::TYPE_STRING, 'validate' => 'isString'],
            'processor_order_number' => ['type' => self::TYPE_STRING, 'validate' => 'isString'],
            'action_code' => ['type' => self::TYPE_STRING, 'validate' => 'isString'],
            'authorization_code' => ['type' => self::TYPE_STRING, 'validate' => 'isString'],
            'card_code_result' => ['type' => self::TYPE_STRING, 'validate' => 'isString'],
        ],
    ];

    /**
     * Get CentinelOrder object instance by order id
     *
     * @param int $orderId
     *
     * @return CentinelOrder|null
     */
    public static function getByOrderId($orderId)
    {
        $query = (new DbQuery())
            ->select('*')
            ->from('cc_centinel_order', 'co')
            ->where('co.`id_order` = '. (int) $orderId);

        $result = Db::getInstance()->getRow($query);

        if (!$result) {
            return null;
        }

        $centinelOrder = new self();
        $centinelOrder->id = $result['id_centinel_order'];
        $centinelOrder->id_order = $result['id_order'];
        $centinelOrder->id_processor_order = $result['id_processor_order'];
        $centinelOrder->authorization_status = $result['authorization_status'];
        $centinelOrder->capture_status = $result['capture_status'];
        $centinelOrder->refund_status = $result['refund_status'];
        $centinelOrder->void_status = $result['void_status'];
        $centinelOrder->avs_result = $result['avs_result'];
        $centinelOrder->processor_order_number = $result['processor_order_number'];
        $centinelOrder->action_code = $result['action_code'];
        $centinelOrder->authorization_code = $result['authorization_code'];
        $centinelOrder->card_code_result = $result['card_code_result'];

        return $centinelOrder;
    }

    /**
     * @return bool
     */
    public function isAuthorized()
    {
        return $this->authorization_status === 'Y';
    }

    /**
     * @return bool
     */
    public function isCaptured()
    {
        return $this->capture_status === 'Y';
    }

    /**
     * @return bool
     */
    public function canBeVoided()
    {
        return $this->isAuthorized() && !$this->isCaptured() && !$this->void_status;
    }

    /**
     * @return bool
     */
    public function canBeCaptured()
    {
        return $this->isAuthorized() && !$this->capture_status && !$this->void_status;
    }

    /**
     * @return bool
     */
    public function canBeRefunded()
    {
        return $this->capture_status === 'Y' && !$this->void_status;
    }
}
