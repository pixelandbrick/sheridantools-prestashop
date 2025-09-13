<?php
/**
 * 2008 - 2020 Presto-Changeo
 *
 * MODULE Authorize.net (API / DPM)
 *
 * @author    Presto-Changeo <info@presto-changeo.com>
 * @copyright Copyright (c) permanent, Presto-Changeo
 * @license   Addons PrestaShop license limitation
 * @version   2.0.3
 * @link      http://www.presto-changeo.com
 *
 * NOTICE OF LICENSE
 *
 * Don't use this module on several shops. The license provided by PrestaShop Addons
 * for all its modules is valid only once for a single shop.
 */

//if (!in_array('AuthorizedotnetCIM', get_declared_classes())) {
//    require_once(_PS_MODULE_DIR_. 'authorizedotnet/PrestoChangeoClasses/AuthorizedotnetCIM.php');
//}

if (!in_array('AuthorizedotnetAPI', get_declared_classes())) {
    require_once(_PS_MODULE_DIR_. 'authorizedotnet/PrestoChangeoClasses/AuthorizedotnetAPI.php');
}
