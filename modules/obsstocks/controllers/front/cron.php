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

class ObsstocksCronModuleFrontController extends ModuleFrontController
{
	public $display_column_left = false;
	public $ssl = true;
	

	/**
	 * @see FrontController::initContent()
	 */
	public function initContent()
	{
		if(!Tools::getIsset('token') OR Tools::getValue('token') != Configuration::get('OBSSTOCKS_TOKEN'))
			die("Obsstocks: Forbidden access, You don't have permission to access");
		
		parent::initContent();

		include($this->module->getLocalPath().'classes/Mystocks.php');
				
		define('OBS_EXPORT_DIR', $this->module->getLocalPath().'export/');
		$this->display_header = false;
		$this->display_footer = false;
		
		$id_lang = (int)Context::getContext()->language->id;
		$email = Configuration::get('OBSSTOCKS_ALERT_EMAIL');
		$from_email = Configuration::get('PS_SHOP_EMAIL');
		$from_name = Configuration::get('PS_SHOP_NAME');
		
		$datasheet = Mystocks::getDatasheetStockBelowMinium();
		$file_path = OBS_EXPORT_DIR.'current_min-stock.csv';
		
		$file_attachment = null;
		if(count($datasheet) > 1)
		{
			$this->arrayToFile($datasheet, $file_path);
			$file_attachment['content'] = Tools::file_get_contents($file_path);
			$file_attachment['name'] = "current_min-stock.csv";
			$file_attachment['mime'] = "text/plain";
			
			Mail::Send(
			$id_lang,
			'current_stock',
			$this->module->l('Automatic email: Stock below minimum'),
			array(), $email, null, $from_email, $from_name, $file_attachment, null,
			$this->module->getLocalPath().'mails/', true);
		}
		
		
	}
	
	private function arrayToFile($datasheet, $file_path)
	{
		//var_dump($datasheet);
		//Si hay resultados generamos el CSV
		if(count($datasheet) >0){
	
			$sep = ";";
			$filedata = "";
			$header_line = false;
			
			foreach ($datasheet as $campos) {
				
				$vars = get_object_vars($campos);
				if (!$header_line)
				{
					$filedata .= implode($sep,array_keys($vars))."\r\n";
					$header_line = true;
				}
					
				$filedata .= implode($sep,$vars);
				$filedata .=  "\r\n";
			}
	
			file_put_contents($file_path,$filedata);
	
			return true;
		}
	}
}
?>