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

/**
 * Converts given amount to cents
 */
final class AmountToCentsConverter
{
    /**
     * @param float $amount
     * @param string $currencyIsoCode
     *
     * @return int
     */
    public static function convert($amount, $currencyIsoCode)
    {
        return (int) round($amount * (10 ** self::getExponent($currencyIsoCode)));
    }

    /**
     * @param string $currencyIsoCode
     *
     * @return int
     */
    private static function getExponent($currencyIsoCode)
    {
        if (in_array($currencyIsoCode, [
            'ADP', 'BEF', 'BIF', 'BYR', 'CLP', 'DJF', 'ESP', 'GNF', 'ISK',
            'ITL', 'JPY', 'KMF', 'KRW', 'LUF', 'MGF', 'PTE', 'PYG', 'RWF',
            'TPE', 'TRL', 'UYI', 'VND', 'VUV', 'XAF', 'XOF', 'XPF',
        ])) {
            return 0;
        }

        if (in_array($currencyIsoCode, [
            'BHD', 'CSD', 'IQD', 'JOD', 'KWD', 'LYD', 'OMR', 'TND',
        ])) {
            return 3;
        }

        if ($currencyIsoCode === 'CLF') {
            return 4;
        }

        return 2;
    }
}
