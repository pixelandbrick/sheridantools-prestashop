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

/**
 * Defines available environments for cardinal commerce
 */
final class Environment
{
    const STAG = 'STAG';
    const CYBERSOURCE = 'CYBERSOURCE';
    const FIRSTDATA = 'FIRSTDATA';
    const FIRSTDATA_TEST = 'FIRSTDATA_TEST';
    const PAYMENTECH = 'PAYMENTECH';
    const PAYPAL = 'PAYPAL';
    const PRODUCTION_200 = '200';
    const PRODUCTION_300 = '300';
    const PRODUCTION_400 = '400';
    const PROD = 'PROD';
    const PRODUCTION_800 = '800';
    const PRODUCTION_1000 = '1000';
    const PRODUCTION_1200 = '1200';

    /**
     * Get URL by Environment class constant
     *
     * @param $environment
     * @return mixed
     */
    public static function getUrl($environment)
    {
        $map = [
            self::STAG => 'https://centineltest.cardinalcommerce.com',
            self::CYBERSOURCE => 'https://cybersource.cardinalcommerce.com',
            self::FIRSTDATA => 'https://production.altpayfirstdata.com',
            self::FIRSTDATA_TEST => 'https://test.altpayfirstdata.com',
            self::PAYMENTECH => 'https://paymentech.cardinalcommerce.com',
            self::PAYPAL => 'https://paypal.cardinalcommerce.com',
            self::PRODUCTION_200 => 'https://centinel.cardinalcommerce.com',
            self::PRODUCTION_300 => 'https://centinel300.cardinalcommerce.com',
            self::PRODUCTION_400 => 'https://centinel400.cardinalcommerce.com',
            self::PROD => 'https://centinel600.cardinalcommerce.com',
            self::PRODUCTION_800 => 'https://centinel800.cardinalcommerce.com',
            self::PRODUCTION_1000 => 'https://centinel1000.cardinalcommerce.com',
            self::PRODUCTION_1200 => 'https://centinel1200.cardinalcommerce.com',
        ];

        return $map[$environment];
    }

    /**
     * This class can't be instantiated
     */
    private function __construct()
    {
    }
}
