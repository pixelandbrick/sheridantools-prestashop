<?php
/**
 * 2011-2018 OBSOLUTIONS WD S.L. All Rights Reserved.
 *
 * NOTICE:  All information contained herein is, and remains
 * the property of OBSOLUTIONS WD S.L. and its suppliers,
 * if any.  The intellectual and technical concepts contained
 * herein are proprietary to OBSOLUTIONS WD S.L.
 * and its suppliers and are protected by trade secret or copyright law.
 * Dissemination of this information or reproduction of this material
 * is strictly forbidden unless prior written permission is obtained
 * from OBSOLUTIONS WD S.L.
 *
 *  @author    OBSOLUTIONS WD S.L. <http://addons.prestashop.com/en/65_obs-solutions>
 *  @copyright 2011-2018 OBSOLUTIONS WD S.L.
 *  @license   OBSOLUTIONS WD S.L. All Rights Reserved
 *  International Registered Trademark & Property of OBSOLUTIONS WD S.L.
 */

$sql = array();

$sql[] = "CREATE TABLE IF NOT EXISTS `"._DB_PREFIX_."obsstocks_minstocks` (
			  `reference` varchar(32) NOT NULL,
			  `min_stock` int(11) NOT NULL,
			   PRIMARY KEY (`reference`)	
			) ENGINE="._MYSQL_ENGINE_." DEFAULT CHARSET=utf8;";

$sql[] = "CREATE TABLE IF NOT EXISTS `"._DB_PREFIX_."obsstocks_log` (
			  `import_id` int(11) NOT NULL AUTO_INCREMENT,
			  `import_method` VARCHAR(32),
			  `date` datetime NOT NULL,
			  `errors_nb` int(11) NOT NULL,
			  `data_source` varchar(32) NOT NULL,
			  PRIMARY KEY (`import_id`)
			) ENGINE="._MYSQL_ENGINE_." DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;";

foreach ($sql as $query)
if (Db::getInstance()->execute($query) == false)
	return false;

?>