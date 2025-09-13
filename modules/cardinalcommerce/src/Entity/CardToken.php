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

class CardToken extends ObjectModel
{
    /**
     * @var int
     */
    public $id_customer;

    /**
     * @var string
     */
    public $card_last_four_digits;

    /**
     * @var string
     */
    public $token;

    /**
     * @var string
     */
    public $id_processor_order;

    /**
     * @var string
     */
    public $action_code;

    /**
     * @var array
     */
    public static $definition = [
        'table' => 'cc_token',
        'primary' => 'id_cc_token',
        'multilang' => false,
        'fields' => [
            'id_customer' => ['type' => self::TYPE_INT, 'validate' => 'isInt', 'required' => true],
            'card_last_four_digits' => ['type' => self::TYPE_STRING, 'validate' => 'isString'],
            'token' => ['type' => self::TYPE_STRING, 'validate' => 'isString'],
            'id_processor_order' => ['type' => self::TYPE_STRING, 'validate' => 'isString'],
            'action_code' => ['type' => self::TYPE_STRING, 'validate' => 'isString'],
        ],
    ];

    /**
     * @param int $customerId
     * @return bool|array
     */
    public static function getByCustomerId($customerId)
    {
        $query = (new DbQuery())
            ->select('*')
            ->from('cc_token', 't')
            ->where('t.`id_customer` = '. (int) $customerId);

        $result = Db::getInstance()->getRow($query);

        if (empty($result)) {
            return false;
        }

        return $result;
    }

    /**
     * @param int $customerId
     * @param string $cardLastFour
     * @param string $token
     * @param string $processorOrderId
     * @param $actionCode
     *
     * @return bool
     */
    public static function saveToken($customerId, $cardLastFour, $token, $processorOrderId, $actionCode)
    {
        $query = (new DbQuery())
            ->select('*')
            ->from('cc_token', 't')
            ->where('t.`id_customer` = ' . (int) $customerId .
                ' AND t.`card_last_four_digits` = ' . pSQL($cardLastFour));

        $result = Db::getInstance()->getRow($query);

        $cardToken = new CardToken((bool) $result ? $result['id_token'] : null);
        $cardToken->id_customer = $customerId;
        $cardToken->card_last_four_digits = $cardLastFour;
        $cardToken->token = $token;
        $cardToken->id_processor_order = $processorOrderId;
        $cardToken->action_code = $actionCode;

        return (bool) $result ? $cardToken->update() : $cardToken->add();
    }

    /**
     * @param $customerId
     * @return bool
     */
    public static function deleteToken($customerId)
    {
        return Db::getInstance()->execute(
            'DELETE
                    FROM `' . _DB_PREFIX_ . 'cc_token`
                    WHERE id_customer=' . (int)$customerId . '
                '
        );
    }
}
