<?php
/**
 * 2008 - 2017 Presto-Changeo
 *
 * MODULE Authorize.net (AIM / DPM)
 *
 * @author    Presto-Changeo <info@presto-changeo.com>
 * @copyright Copyright (c) permanent, Presto-Changeo
 * @license   Addons PrestaShop license limitation
 * @version   2.0.0
 * @link      http://www.presto-changeo.com
 *
 * NOTICE OF LICENSE
 *
 * Don't use this module on several shops. The license provided by PrestaShop Addons
 * for all its modules is valid only once for a single shop.
 */

/* SSL Management */
$useSSL = true;

require_once(dirname(__FILE__).'/../../config/config.inc.php');
require_once(dirname(__FILE__).'/../../init.php');
require_once('PrestoChangeoClasses/init.php');
require_once('controllers/front/validationdpn.php');

$_POST['module'] = 'authorizedotnet';

$controller = new AuthorizedotnetValidationdpnModuleFrontController('authorizedotnet');
$adn = new AuthorizeDotNet();
if (!$adn->_adn_payment_page) {
    $controller->run();
} else {
    $controller->postProcess();
}
