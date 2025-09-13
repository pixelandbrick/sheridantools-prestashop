<?php
/**
* Prestashop Addons | Module by: <App1Pro>
*
* @author    Chuyen Nguyen [App1Pro].
* @copyright Chuyenim@gmail.com
* @license   http://app1pro.com/license.txt
*/

if (!defined('_PS_VERSION_')) {
    exit;
}

function upgrade_module_2_7_0()
{
    $res = true;
    $sql = array();

    $sql[] = 'CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'product_related_pro_custom` (
        `id_product` INT(11) unsigned NOT NULL,
        `id_shop` INT(10) unsigned NOT NULL,
        `is_custom` TINYINT(1) NULL DEFAULT 0,
        `id_type` INT(3) NULL DEFAULT 0,
        PRIMARY KEY (`id_product`, `id_shop`)
    )ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8';

    foreach ($sql as $query) {
        $res &= Db::getInstance()->execute($query);
    }

    return $res;
}
