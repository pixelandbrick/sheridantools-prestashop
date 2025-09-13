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

namespace Invertus\CardinalCommerce;

final class Settings
{
    // Module configuration names
    const ENABLED_CCA = 'CC_ENABLED_CCA';
    const IS_BROWSER_LOGGING_ENABLED = 'CC_IS_BROWSER_LOGGING_ENABLED';
    const ENABLED_SALE_ACTION = 'CC_ENABLED_SALE_ACTION';
    const ENVIRONMENT = 'CC_ENVIRONMENT';
    const PAYMENT_METHOD = 'CC_PAYMENT_METHOD';
    const API_IDENTIFIER = 'CC_API_IDENTIFIER';
    const API_ORG_UNIT_ID = 'CC_API_ORG_UNIT_ID';
    const API_KEY = 'CC_API_KEY';

    // Order states
    const AUTHORIZED = 'CC_PAYMENT_AUTHORIZED_STATUS_ID';
    const CAPTURED = 'CC_PAYMENT_CAPTURED_STATUS_ID';
    const REFUNDED = 'CC_REFUNDED_STATUS_ID';
    const AWAITING_PAYMENT = 'CC_AWAITING_PAYMENT_STATUS_ID';
    const VOIDED = 'CC_VOIDED_STATUS_ID';

    /**
     * This class can't be instantiated
     */
    private function __construct()
    {
    }

    /**
     * Check if PrestaShop version is < 1.7
     *
     * @return bool
     */
    public static function isPS16()
    {
        return version_compare(_PS_VERSION_, '1.7', '<');
    }
}
