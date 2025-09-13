<?php
/**
* 2007-2018 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
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
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2018 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

$type = 'Core';
$name = 'Courier';
$up = -100;
$ut = 50;
$cw = array();
for($i=0;$i<=255;$i++)
	$cw[chr($i)] = 600;
$enc = 'cp1252';
$uv = array(0=>array(0,128),128=>8364,130=>8218,131=>402,132=>8222,133=>8230,134=>array(8224,2),136=>710,137=>8240,138=>352,139=>8249,140=>338,142=>381,145=>array(8216,2),147=>array(8220,2),149=>8226,150=>array(8211,2),152=>732,153=>8482,154=>353,155=>8250,156=>339,158=>382,159=>376,160=>array(160,96));
?>
