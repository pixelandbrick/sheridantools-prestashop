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

if (!defined('_PS_VERSION_'))
	exit;

/**
 * Function used to update your module from previous versions to the version 2.0.0,
 * Don't forget to create one file per version.
 */
function upgrade_module_2_0_0($module)
{
	//New database tables
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
	
	//New module params
	Configuration::updateValue('OBSSTOCKS_ID_COL', '1');
	Configuration::updateValue('OBSSTOCKS_STOCKS_COL', '3');
	Configuration::updateValue('OBSSTOCKS_ADD_STOCK', '0');
	Configuration::updateValue('OBSSTOCKS_WHOLESALE_PRICES_COL', '0');
	Configuration::updateValue('OBSSTOCKS_PRICES_COL', '5');
	Configuration::updateValue('OBSSTOCKS_ALERTS_COL', '4');
	Configuration::updateValue('OBSSTOCKS_ID_TYPE', 'reference'); //id / reference / ean13
	Configuration::updateValue('OBSSTOCKS_SKIP_LINES', '1');
	Configuration::updateValue('OBSSTOCKS_SEPARATOR', ';');
	Configuration::updateValue('OBSSTOCKS_PRICE_OPTIONS', '2');
	Configuration::updateValue('OBSSTOCKS_PRICES_MARGIN', '1');
	Configuration::updateValue('OBSSTOCKS_DATA_SOURCE', '0');
	Configuration::updateValue('OBSSTOCKS_FEED_URL', '');
	Configuration::updateValue('OBSSTOCKS_FTP_HOST', '');
	Configuration::updateValue('OBSSTOCKS_FTP_PORT', '21');
	Configuration::updateValue('OBSSTOCKS_FTP_USER', '');
	Configuration::updateValue('OBSSTOCKS_FTP_PWD', '');
	Configuration::updateValue('OBSSTOCKS_FTP_PATH', '');
	Configuration::updateValue('OBSSTOCKS_LOCAL_FILE_PATH', $module->getLocalPath().'docs/example.csv');
	if(!Configuration::get('OBSSTOCKS_TOKEN'))
		Configuration::updateValue ('OBSSTOCKS_TOKEN', Tools::passwdGen ( 25 ));
	
	//Update tab controller
	$className = 'OBSStocksAdminTab';
	$newClassName = 'AdminObsstocks';
	$subTab = Tab::getInstanceFromClassName($className);
	$subTab->class_name = $newClassName;
	$subTab->update();
	
	//Delete old controller
	unlink($module->getLocalPath().'controllers/admin/OBSStocksAdminTabController.php');

	return $module;
}
