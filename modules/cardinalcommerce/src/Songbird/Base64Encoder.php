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

use Tools;

/**
 * URL safe base64 encoder
 */
final class Base64Encoder
{
    /**
     * @param mixed $data
     *
     * @return string
     */
    public static function encode($data)
    {
        $content = base64_encode($data);

        return str_replace(['=', '+', '/'], ['', '-', '_'], $content);
    }

    /**
     * @param string $data
     *
     * @return mixed
     */
    public static function decode($data)
    {
        $data = str_replace(['-', '_'], ['+', '/'], $data);
        $data = str_pad($data, Tools::strlen($data) + Tools::strlen($data) % 4, '=');

        return base64_decode($data);
    }
}
