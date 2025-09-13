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

	
class obsstocks extends Module {
	
	public function __construct() {	
		$this->name = 'obsstocks';
		parent::__construct();
		
		$this->tab = 'migration_tools';
		$this->version = '2.1.8';
		$this->author = 'OBSolutions';
		$this->author_address = '0xF6A3888b1C6C2d5f20AdE2FdbE26C338A8F31011';
		$this->module_key = '521b72dea0fca11d85a736e2cffc1635';
		
		$this->displayName = $this->l('Massive stocks and prices updater via CSV / URL / FTP and custom stock alerts');
		$this->description = $this->l('Allows update products/combinations stock and prices via CSV file, data feed URL, remote FTP file o local server file. Also allows to configure stock alerts by product');
		$this->confirmUninstall = $this->l('Are you sure you want to delete your details ?');
		
		$this->_errors = array();
		
		/* Backward compatibility */
    	if(version_compare(_PS_VERSION_, '1.5', '<'))
           require(_PS_MODULE_DIR_.$this->name.'/backward_compatibility/backward.php');
	}

	public function install() {
		if(!parent::install() OR !$this->createSubmenu())
			return false;

		include(dirname(__FILE__).'/sql/install.php');
		
		Configuration::updateValue('OBSSTOCKS_ALERT_EMAIL', Configuration::get('PS_SHOP_EMAIL'));
		Configuration::updateValue('OBSSTOCKS_ID_COL', '1'); 
		Configuration::updateValue('OBSSTOCKS_STOCKS_COL', '3');
		Configuration::updateValue('OBSSTOCKS_ADD_STOCK', '0');
		Configuration::updateValue('OBSSTOCKS_WHOLESALE_PRICES_COL', '6');
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
		Configuration::updateValue('OBSSTOCKS_LOCAL_FILE_PATH', $this->getLocalPath().'docs/example.csv');
		if(!Configuration::get('OBSSTOCKS_TOKEN'))
			Configuration::updateValue ('OBSSTOCKS_TOKEN', Tools::passwdGen ( 25 ));
		
		
		return true;
	}
	
	public function uninstall() {
		if(!parent::uninstall() OR !$this->deleteSubmenu())
			return false;
			
		include(dirname(__FILE__).'/sql/uninstall.php');
		
		Configuration::deleteByName('OBSSTOCKS_ALERT_EMAIL');
		Configuration::deleteByName('OBSSTOCKS_ID_COL');
		Configuration::deleteByName('OBSSTOCKS_STOCKS_COL');
		Configuration::deleteByName('OBSSTOCKS_ADD_STOCK');
		Configuration::deleteByName('OBSSTOCKS_WHOLESALE_PRICES_COL');
		Configuration::deleteByName('OBSSTOCKS_PRICES_COL');
		Configuration::deleteByName('OBSSTOCKS_ALERTS_COL');
		Configuration::deleteByName('OBSSTOCKS_ID_TYPE');
		Configuration::deleteByName('OBSSTOCKS_SKIP_LINES');
		Configuration::deleteByName('OBSSTOCKS_SEPARATOR');
		Configuration::deleteByName('OBSSTOCKS_PRICE_OPTIONS');
		Configuration::deleteByName('OBSSTOCKS_PRICE_MARGIN');
		Configuration::deleteByName('OBSSTOCKS_DATA_SOURCE');
		Configuration::deleteByName('OBSSTOCKS_FEED_URL');
		Configuration::deleteByName('OBSSTOCKS_FTP_HOST');
		Configuration::deleteByName('OBSSTOCKS_FTP_PORT');
		Configuration::deleteByName('OBSSTOCKS_FTP_USER');
		Configuration::deleteByName('OBSSTOCKS_FTP_PWD');
		Configuration::deleteByName('OBSSTOCKS_FTP_PATH');
		Configuration::deleteByName('OBSSTOCKS_LOCAL_FILE_PATH');
		return true;
	}
	
		
	private function createSubmenu() {
		
		$parentId = 9;
		$menuName = array('1' => 'Massive Updater');
		$className = 'AdminObsstocks';
		
		$subTab = Tab::getInstanceFromClassName($className);
		if(!Validate::isLoadedObject($subTab)) {
			$subTab->active = 1;
			$subTab->class_name = $className;
			$subTab->id_parent = $parentId;
			$subTab->module = $this->name;
			$subTab->name = $this->createMultiLangFieldHard($menuName);
			return $subTab->save();
		} elseif($subTab->id_parent != $parentId) {
			$subTab->id_parent = $parentId;
			return $subTab->save();
		}
		return true;
	}
	
	private function deleteSubmenu() {
		$className = 'AdminObsstocks';
		$subTab = Tab::getInstanceFromClassName($className);
		return $subTab->delete();
	}
	
	private static function createMultiLangFieldHard($res)
	{
		$languages = Language::getLanguages(false);
		foreach ($languages as $lang)
		{
			if(!array_key_exists($lang['id_lang'], $res))
				$res[$lang['id_lang']] = $res['1'];
		}
		return $res;
	}
	
	
	
}
