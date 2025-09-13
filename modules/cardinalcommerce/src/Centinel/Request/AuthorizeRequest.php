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

namespace Invertus\CardinalCommerce\Centinel\Request;

use Order;

/**
 * Carries data needed for Authorize request
 */
final class AuthorizeRequest
{
    /**
     * @var string
     */
    private $eci;

    /**
     * @var string
     */
    private $cavv;

    /**
     * @var string
     */
    private $xid;

    /**
     * @var Order
     */
    private $order;

    /**
     * @var string
     */
    private $centinelOrderId;

    /**
     * AuthorizeRequest constructor.
     *
     * @param Order $order
     * @param string $eci
     * @param string $cavv
     * @param string $xid
     * @param string $centinelOrderId
     */
    public function __construct(Order $order, $eci, $cavv, $xid, $centinelOrderId)
    {
        $this->order = $order;
        $this->centinelOrderId = $centinelOrderId;
        $this->eci = $eci;
        $this->cavv = $cavv;
        $this->xid = $xid;
    }

    /**
     * @return string
     */
    public function getEci()
    {
        return $this->eci;
    }

    /**
     * @return string
     */
    public function getCavv()
    {
        return $this->cavv;
    }

    /**
     * @return string
     */
    public function getXid()
    {
        return $this->xid;
    }

    /**
     * @return Order
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @return string
     */
    public function getCentinelOrderId()
    {
        return $this->centinelOrderId;
    }
}
