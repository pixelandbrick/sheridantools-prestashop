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

ini_set("auto_detect_line_endings", true);

class AdminObsstocksController extends ModuleAdminController
{
	private $log = null;

	public function __construct() {

		$this->bootstrap = true;
		$this->display = 'view';

		parent::__construct();
		if(!class_exists('OBSLog'))
			include($this->module->getLocalPath().'classes/OBSLog.php');
			include($this->module->getLocalPath().'classes/Mystocks.php');

			define('OBS_EXPORT_DIR', $this->module->getLocalPath().'export/');
			define('OBS_IMPORT_DIR', $this->module->getLocalPath().'import/');
			define('OBS_LOGS_DIR', $this->module->getLocalPath().'logs/');
	}

	public function setMedia($isNewTheme = false)
	{
	    if(version_compare(_PS_VERSION_,'1.7','<'))
	        parent::setMedia();
        else
            parent::setMedia($isNewTheme);
        
		$this->addJs(_MODULE_DIR_.$this->module->name.'/views/js/admin_functions.js');

	}

	public function postProcess() {

		include($this->module->getLocalPath().'classes/MyCSV.php');

		$currentIndex = $this->context->link->getAdminLink('AdminObsstocks', true);

		if (Tools::isSubmit('submitAutoImportSettings') && is_writable(OBS_IMPORT_DIR))
		{
			Configuration::updateValue('OBSSTOCKS_DATA_SOURCE', (string) Tools::getValue('import_data_source'));
				
			if((string) Tools::getValue('import_data_source') == "url_feed")
			{
				if(Validate::isURL((string) Tools::getValue('url_feed_url')))
					Configuration::updateValue('OBSSTOCKS_FEED_URL', (string) Tools::getValue('url_feed_url'));
					else
					{
						Configuration::updateValue('OBSSTOCKS_DATA_SOURCE', '0');
						$this->context->controller->errors[] = Tools::displayError($this->l('URL Feed is not a valid URL'));
					}
			}
			else if((string) Tools::getValue('import_data_source') == "remote_ftp")
			{
				Configuration::updateValue('OBSSTOCKS_FTP_HOST', (string) Tools::getValue('remote_ftp_host'));
				Configuration::updateValue('OBSSTOCKS_FTP_PORT', (string) Tools::getValue('remote_ftp_port'));
				Configuration::updateValue('OBSSTOCKS_FTP_USER', (string) Tools::getValue('remote_ftp_user'));
				Configuration::updateValue('OBSSTOCKS_FTP_PWD', (string) Tools::getValue('remote_ftp_pwd'));
				Configuration::updateValue('OBSSTOCKS_FTP_PATH', (string) Tools::getValue('remote_ftp_path'));
			}
			else if((string) Tools::getValue('import_data_source') == "local_file")
			{
				Configuration::updateValue('OBSSTOCKS_LOCAL_FILE_PATH', (string) Tools::getValue('local_file_path'));
			}
				
			if(empty($this->context->controller->errors))
				Tools::redirectAdmin($currentIndex.'&conf=4');

		}

		if (Tools::isSubmit('submitAutoExportSettings') && is_writable(OBS_EXPORT_DIR))
		{

			Configuration::updateValue('OBSSTOCKS_ALERT_EMAIL', Tools::getValue('alert_email', Configuration::get('PS_SHOP_EMAIL')));
			Tools::redirectAdmin($currentIndex.'&conf=4');

		}

		else if(Tools::isSubmit('submitSaveDataColumnSettings'))
		{
				
			if(!Validate::isInt(Tools::getValue('id_column')))
				$this->context->controller->errors[] = Tools::displayError($this->l('ID column must be a valid number'));
				if(Validate::isInt(Tools::getValue('id_column')) AND (int) Tools::getValue('id_column') == 0)
					$this->context->controller->errors[] = Tools::displayError($this->l('ID column is required'));
	 	 	if ((int) Tools::getValue('retail_price_options') == 1 AND Validate::isInt(Tools::getValue('wholesale_prices_column')) AND (int) Tools::getValue('wholesale_prices_column') == 0)
	 	 		$this->context->controller->errors[] = Tools::displayError($this->l('Wholesale price column must be informed when you choose calculated retail price with margin'));
	 	 		if(!Validate::isInt(Tools::getValue('stocks_column')))
	 	 			$this->context->controller->errors[] = Tools::displayError($this->l('Stock column must be a valid number'));
	 	 			if(!Validate::isInt(Tools::getValue('alerts_column')))
	 	 				$this->context->controller->errors[] = Tools::displayError($this->l('Alerts column must be a valid number'));
	 	 				if(!Validate::isInt(Tools::getValue('wholesale_prices_column')))
	 	 					$this->context->controller->errors[] = Tools::displayError($this->l('Wholesale prices column must be a valid number'));
	 	 					if((int) Tools::getValue('retail_price_options') == 1 AND !Validate::isFloat(Tools::getValue('prices_margin')))
	 	 						$this->context->controller->errors[] = Tools::displayError($this->l('Margin for retail prices value must be a valid float number'));
	 	 						if((int) Tools::getValue('retail_price_options') != 1 AND !Validate::isInt(Tools::getValue('prices_column')))
	 	 							$this->context->controller->errors[] = Tools::displayError($this->l('Prices column must be a valid number'));
	 	 								
	 	 							if(empty($this->context->controller->errors))
	 	 							{
	 	 									
	 	 								Configuration::updateValue('OBSSTOCKS_SEPARATOR', Tools::getValue('separator'));
	 	 								Configuration::updateValue('OBSSTOCKS_SKIP_LINES', (int) Tools::getValue('skip_lines'));
	 	 								Configuration::updateValue('OBSSTOCKS_ID_TYPE', Tools::getValue('id_type'));
	 	 								Configuration::updateValue('OBSSTOCKS_ID_COL', (int) Tools::getValue('id_column'));
	 	 								Configuration::updateValue('OBSSTOCKS_WHOLESALE_PRICES_COL', (int) Tools::getValue('wholesale_prices_column'));
	 	 								Configuration::updateValue('OBSSTOCKS_STOCKS_COL', (int) Tools::getValue('stocks_column'));
	 	 								Configuration::updateValue('OBSSTOCKS_ADD_STOCK', (int) Tools::getValue('add_stock'));
	 	 								Configuration::updateValue('OBSSTOCKS_ALERTS_COL', (int) Tools::getValue('alerts_column'));
	 	 								Configuration::updateValue('OBSSTOCKS_PRICE_OPTIONS', (int) Tools::getValue('retail_price_options'));

	 	 								if((int) Tools::getValue('retail_price_options') == 1)
	 	 								{
	 	 									Configuration::updateValue('OBSSTOCKS_PRICES_MARGIN', (float) Tools::getValue('prices_margin'));
	 	 									if((int) Configuration::get('OBSSTOCKS_PRICES_COL') == 0)
	 	 										Configuration::updateValue('OBSSTOCKS_PRICES_COL', 1);
	 	 								}
	 	 								else
	 	 									Configuration::updateValue('OBSSTOCKS_PRICES_COL', (int) Tools::getValue('prices_column'));

	 	 									Tools::redirectAdmin($currentIndex.'&conf=4');
	 	 							}
		}
	 	
		else if(Tools::isSubmit('submitManualImport'))
		{
			if(key_exists('stocks_file', $_FILES) AND $_FILES['stocks_file']['name']){
					
				$test_mode = (bool) Tools::getValue('test_mode');
				if($test_mode == false)
				{
					$import_id = Mystocks::createNewImportLog('manual',Configuration::get('OBSSTOCKS_DATA_SOURCE'));
					$error_log = new OBSLog('errors_'.(int) $import_id.'.log', $this->module->getLocalPath().'logs/');
					$result_errors = Mystocks::importFile($_FILES['stocks_file']['tmp_name'], $error_log);
					if($result_errors == 0)
						Tools::redirectAdmin($currentIndex.'&conf=4');
						else
						{
							Mystocks::saveImportLogErrors($import_id, $result_errors);
							$this->context->controller->errors[] = $this->l('Import completed with errors: '.$result_errors.' errors found - view').' <a href="#logs_list">logs</a>';
							}
				}
				else
				{
					$test_result = Mystocks::importFileTest($_FILES['stocks_file']['tmp_name']);

					$this->context->smarty->assign(array(
							'test_result' => $test_result,
							'back_button' => 1,
							'back_link' => $this->context->link->getAdminLink('AdminObsstocks', false),
							'admin_token' => Tools::getAdminTokenLite('AdminObsstocks')
					));
					print($this->context->smarty->fetch($this->module->getLocalPath().'views/templates/front/test.tpl'));
					die;
				}
			}
			else
			{
				$this->context->controller->errors[] = $this->l('No file selected');
			}

		}
		 
		else if(Tools::isSubmit('submitExportAll'))
		{
			$csv = new MyCSV(Mystocks::getDatasheetAllStock(), date("YmdHms").'_all_stock');
			$csv->export();
			die;

		}
		else if(Tools::isSubmit('submitExportMiniums'))
		{
			//$this->arrayToCSV(Mystocks::getDatasheetStockBelowMinium(), date("YmdHms").'_current_stock.csv');
			$csv = new MyCSV(Mystocks::getDatasheetStockBelowMinium(), date("YmdHms").'_current_stock');
			$csv->export();
			die;
		}
		else if(Tools::isSubmit('submitExportAlertsConf'))
		{
			//$this->arrayToCSV(Mystocks::getDatasheetCurrentAlertConf(), date("YmdHms").'_current_alerts_conf.csv');
			$csv = new MyCSV(Mystocks::getDatasheetCurrentAlertConf(), date("YmdHms").'_current_alerts_conf');
			$csv->export();
			die;
		}
		else if(Tools::getIsset('viewobsstocks') AND Tools::getIsset('id'))
		{
			$filename = 'errors_'.(int)Tools::getValue('id').'.log';
			$file = $this->module->getLocalPath().'logs/'.$filename;

			if(file_exists($file))
			{
				/* Set headers for download */
				header('Content-Transfer-Encoding: binary');
				header('Content-Type: txt');
				header('Content-Length: '.filesize($file));
				header('Content-Disposition: attachment; filename="'.$filename.'"');
				//prevents max execution timeout, when reading large files
				@set_time_limit(0);
				$fp = fopen($file, 'rb');
				while (!feof($fp))
					echo fgets($fp, 16384);
					die;
			}
			else{
				$this->context->controller->errors[] = Tools::displayError($this->l('Error log file not found'));
			}
		}
		else if(Tools::getIsset('deleteobsstocks') AND Tools::getIsset('id'))
		{
			$import_id = (int)Tools::getValue('id');
			$filename = 'errors_'.$import_id.'.log';
			$file = $this->module->getLocalPath().'logs/'.$filename;
			if(Mystocks::deleteImportLogErrors($import_id))
				unlink($file);

				Tools::redirectAdmin($currentIndex.'&conf=1#logs_list');

		}
	}

	public function initContent()
	{
		$output = '';
		parent::initContent();

		$locale = Language::getIsoById($this->context->cookie->id_lang);

		if($locale == 'es' AND $locale == 'ca' AND $locale == 'gl')
			$locale = 'es';
			else
				$locale = 'en';

				$this->context->smarty->assign(array(
						'OBS_IMPORT_DIR' => OBS_IMPORT_DIR,
						'OBS_EXPORT_DIR' => OBS_EXPORT_DIR,
						'OBS_LOGS_DIR' => OBS_LOGS_DIR,
						'W_OBS_IMPORT_DIR' => is_writable(OBS_IMPORT_DIR),
						'W_OBS_EXPORT_DIR' => is_writable(OBS_EXPORT_DIR),
						'W_OBS_LOGS_DIR' => is_writable(OBS_LOGS_DIR),
						'csv' => $this->_getCSV(),
						'automatic' => $this->_getAutomaticConfiguration(),
						'moduleCronsInstalled' => Module::isInstalled('cronjobs'),
						'moduleCronLink' => $this->context->link->getAdminLink('AdminModules', true),
						'manualImportForm' => $this->_getManualImportForm(),
						'exportAllStockForm' => $this->_getExportAllStockForm(),
						'exportStockBMForm' => $this->_getExportStockBMForm(),
						'exportConfigAlertsForm' => $this->_getExportConfigAlertsForm(),
						'settingsExportForm' => $this->_getSettingsExportForm(),
						'logsList' => $this->_getLogsList(),
						'logsPagination' => $this->getPagination(),
						'modulePathUri' => $this->module->getPathUri(),
						'locale' => $locale,
						'manual_es_exists' => file_exists(dirname(__FILE__).'/../../docs/readme_es.pdf'),
						'manual_en_exists' => file_exists(dirname(__FILE__).'/../../docs/readme_es.pdf'),
				));
				$output = $this->context->smarty->fetch($this->module->getLocalPath().'views/templates/admin/main.tpl');


				$this->content .= $output;
				$this->context->smarty->assign('content', $this->content);
	}

	private function _getLogsList()
	{
		$notifiesList = Mystocks::getLogs();

		$fields_list = array(
				'id' => array(
						'title' => $this->l('Import Id'),
						'type' => 'text',
				),
				'date' => array(
						'title' => $this->l('Date'),
						'type' => 'datetime',
				),
				'import_method' => array(
						'title' => $this->l('Import Method'),
						'type' => 'text',
				)
				,'data_source' => array(
						'title' => $this->l('Source Method'),
						'type' => 'text',
				),
				'errors_nb' => array(
						'title' => $this->l('Errors'),
						'type' => 'text',
				),

		);

		if (is_array($notifiesList) && count($notifiesList))
		{
			$helper = new HelperList();
			$helper->shopLinkType = '';
			$helper->simple_header = true;
			$helper->identifier = 'id';
			$helper->actions = array('view', 'delete');
			$helper->show_toolbar = false;
			$helper->no_link = true;

			$helper->title = $this->l('Import Logs list');
			$helper->table = 'obsstocks';
			$helper->token = Tools::getAdminTokenLite('AdminObsstocks');
			$helper->currentIndex = $this->context->link->getAdminLink('AdminObsstocks', false);

			$return = $helper->generateList($notifiesList, $fields_list);

			//$return .= $this->getPagination();
				
		}
		else
			$return = $this->l('There is no import logs yet.');

			return $return;
	}

	private function getPagination()
	{
		$totalElems = $this->getTotalNotifies();
		$perPage = "5";
		$pages = ceil($totalElems / $perPage);
		$maxPagesToShowTop = 4;
		$maxPagesToShowBottom = 4;

		$pag = 1;
		if (Tools::getIsset('pag'))
			$pag = (int)Tools::getValue('pag', 1);

			$startToShowAtPage = $pag - $maxPagesToShowBottom;
			$endToShowAtPage = $pag + $maxPagesToShowTop;

			if ($endToShowAtPage > $pages)
				$endToShowAtPage = $pages;
				if ($startToShowAtPage < 1)
					$startToShowAtPage = 1;

					$output = '';
					if ($startToShowAtPage > 1)
						$output .= $this->_createPaginationLink(1).' .. ';

						for ($i = $startToShowAtPage; $i <= $endToShowAtPage; $i++)
							$output .= $this->_createPaginationLink($i, $pag != $i);

							if ($endToShowAtPage < $pages)
								$output .= ' .. '.$this->_createPaginationLink($pages);

								return $output;
	}

	private function _createPaginationLink($page, $isLinked = true)
	{
		$url = $this->context->link->getAdminLink('AdminObsstocks', false).'&token='.Tools::getAdminTokenLite('AdminObsstocks').'&pag='.$page.'#logs_list';

		return '<a '.($isLinked?'href="'.$url.'"':'disabled="disabled"').'  class="btn btn-default button" >'.$page.'</a>';
	}

	private function getTotalNotifies()
	{
		$sql = 'SELECT COUNT(\'\') as total
			FROM `'._DB_PREFIX_.'obsstocks_log` ';
		return Db::getInstance()->getValue($sql);
	}

	private function _getConfigForm(CsvConfigModel $csv)
	{
		$uidOptions = array();
		$uidOptions[] = array("id" => "id", "name" => $this->l('ID (ONLY FOR PRODUCTS)'));
		$uidOptions[] = array("id" => "reference", "name" => "REFERENCE");
		$uidOptions[] = array("id" => "ean13", "name" => "EAN13");

		$stockBehaviorOptions = array();
		$stockBehaviorOptions[] = array("id" => "0", "name" => $this->l('Replace product stock with the new value'));
		$stockBehaviorOptions[] = array("id" => "1", "name" => $this->l('Increment the current product stock'));

		$pricesTaxesOptions = array();
		$pricesTaxesOptions[] = array("id" => "0", "name" => $this->l('Without taxes'));
		$pricesTaxesOptions[] = array("id" => "1", "name" => $this->l('With taxes'));

		$retailPriceOptions = array();
		$retailPriceOptions[] = array("id" => "1", "name" => ($csv->file_type == 'xml')?$this->l('Price in a tag'):$this->l('Price in a column'));
		$retailPriceOptions[] = array("id" => "2", "name" => ($csv->file_type == 'xml')?$this->l('Calculated with Margin in a tag (format 0.XX)'):$this->l('Calculated with Margin in a column (format 0.XX)'));
		$retailPriceOptions[] = array("id" => "3", "name" => $this->l('Calculated with input Margin'));

		$sourceOptions = array();
		$sourceOptions[] = array("id" => "none", "name" => $this->l('Disable automatic import'));
		$sourceOptions[] = array("id" => "url_feed", "name" => $this->l('Feed URL'));
		$sourceOptions[] = array("id" => "remote_ftp", "name" => $this->l('Remote FTP'));
		$sourceOptions[] = array("id" => "local_file", "name" =>  $this->l('Local file'));

		$fileTypeOptions = array();
		$fileTypeOptions[] = array("id" => "csv", "name" => $this->l('CSV'));
		$fileTypeOptions[] = array("id" => "xml", "name" => $this->l('XML'));

		$fields_form = array(
				'form' => array(
						'legend' => array(
								'title' => $this->l('Configuration for Feed/File Data Import:'),
								'icon' => 'icon-wrench'
						),
						'input' => array(
		
								array(
										'type' => 'text',
										'label' => $this->l('Fields / columns separator'),
										'hint' => $this->l('Enter the character that separates fields / columns'),
										'name' => 'separator',
										'required' => true
								),
								array(
										'type' => 'text',
										'label' => $this->l('Skip lines:'),
										'hint' => $this->l('Enter the number of lines to skip'),
										'class' => 't',
										'name' => 'skip_lines'
		
								),
								array(
										'type' => 'select',
										'label' => $this->l('ID column is:'),
										'hint' => $this->l('Select the field that refers to ID column'),
										'name' => 'id_type',
										'class' => 't',
										'desc' => $this->l('(ID only supported by PRODUCTS. For COMBINATIONS, please, choose REFERENCE or EAN)'),
										'options' => array(
												'query' => $uidOptions,
												'id' => 'id',
												'name' => 'name'
										),
								),
								array(
										'type' => 'text',
										'label' => $this->l('"ID" column number:'),
										'hint' => $this->l('Enter the column number of the source that refers to ID'),
										'desc' => $this->l('(Required)'),
										'class' => 't',
										'name' => 'id_column',
										'required' => true
		
								),
								array(
										'type' => 'text',
										'label' => $this->l('"New stock" column number:'),
										'hint' => $this->l('Enter the column number of the source that refers to Stock'),
										'desc' => $this->l('(Enter 0 to disable this column)'),
										'class' => 't',
										'name' => 'stocks_column',
		
								),
								array(
										'type' => 'select',
										'label' => $this->l('Stock behaviour:'),
										'hint' => $this->l('Select the behaviour you want for the stock field'),
										'name' => 'add_stock',
										'class' => 't',
										'options' => array(
												'query' => $stockBehaviorOptions,
												'id' => 'id',
												'name' => 'name'
										),
								),
								array(
										'type' => 'text',
										'label' => $this->l('"Stock alert" column number:'),
										'hint' => $this->l('Enter the column number of the source that refers to the "Minimum stock available to add product to a warning list"'),
										'desc' => $this->l('(Enter 0 to disable this column)'),
										'class' => 't',
										'name' => 'alerts_column',
		
								),
		
								array(
										'type' => 'text',
										'label' => $this->l('"Pre-tax WHOLESALE prices" column number:'),
										'hint' => $this->l('Enter the column number of the source that refers to the WHOLESALE Prices without tax'),
										'desc' => $this->l('(Enter 0 to disable this column)'),
										'class' => 't',
										'name' => 'wholesale_prices_column',
		
								),
		
								array(
										'type' => 'select',
										'label' => $this->l('Retail price options:'),
										'hint' => $this->l('Select an option for retail price'),
										'name' => 'retail_price_options',
										'class' => 'retail_price_opt',
										'desc' => $this->l('(Calculated with margin: Product retail prices are calculated with WHOLESALE PRICE * MARGIN / In a column: Retail prices are informed in a column)'),
										'options' => array(
												'query' => $retailPriceOptions,
												'id' => 'id',
												'name' => 'name'
										),
								),
		
								array(
										'type' => 'text',
										'label' => $this->l('"Pre-tax RETAIL prices" margin:'),
										'hint' => $this->l('Enter the margin for RETAIL Prices without tax'),
										'desc' => $this->l('(For example: 1.20 = 120%)'),
										'form_group_class' => 'obsstocks_retail_prices_margin',
										'name' => 'prices_margin',
		
								),
		
								array(
										'type' => 'text',
										'label' => $this->l('"Pre-tax RETAIL prices" column number:'),
										'hint' => $this->l('Enter the column number of the source that refers to the RETAIL Prices without tax'),
										'desc' => $this->l('(Enter 0 to disable this column)'),
										'form_group_class' => 'obsstocks_retail_prices_column',
										'name' => 'prices_column',
		
								),
		
						),
						'submit' => array(
								'title' => $this->l('Save'),
						)
				),
		);

		$helper = new HelperForm();
		$helper->show_toolbar = false;
		//$helper->base_folder = '../modules/obsstockspro/views/templates/admin/obsstockspro/helpers/form/';
		$helper->table =  $this->table;
		$lang = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
		$helper->default_form_language = $lang->id;
		$this->fields_form = array();
		$helper->id = '1';
		$helper->identifier = $this->identifier;
		$helper->table = 'obsstockspro_csv';
		$helper->submit_action = 'submitSaveDataColumnSettings';
		$helper->currentIndex = $this->context->link->getAdminLink('AdminObsstockspro', false);
		$helper->token = Tools::getAdminTokenLite('AdminObsstockspro');
		$helper->show_cancel_button = true;
		$helper->tpl_vars = array(
				'fields_value' => $this->getConfigFieldsValues($csv),
				'languages' => $this->context->controller->getLanguages(),
				'id_language' => $this->context->language->id
		);

		return $helper->generateForm(array($fields_form));

	}

	private function _getManualImportForm()
	{
		$fields_form = array(
				'form' => array(
						'legend' => array(
								'title' => $this->l('Manual CSV FILE Import:'),
								'icon' => 'icon-wrench'
						),
						'input' => array(
								array(
										'type' => 'free',
										'hint' => $this->l('Download an example of a CSV import file'),
										'label' => $this->l('Example file'),
										'name' => 'example'
								),
								array(
										'type' => (version_compare(_PS_VERSION_,'1.6','<'))?'radio':'switch',
										'label' => $this->l('Test mode:'),
										'hint' => $this->l('Activate this field if you want to test your data file and view a report'),
										'class' => 't',
										'name' => 'test_mode',
										'is_bool' => true,
										'values' => array(
												array(
														'id' => 'test_on',
														'value' => 1,
														'label' => $this->l('Enabled')
												),
												array(
														'id' => 'test_off',
														'value' => 0,
														'label' => $this->l('Disabled')
												)
										),
								),

								array(
										'type' => 'file',
										'label' => $this->l('Select import file'),
										'name' => 'stocks_file',
								),


						),
						'submit' => array(
								'title' => $this->l('Import data'),
						)
				),
		);

		$helper = new HelperForm();
		$helper->show_toolbar = false;
		$helper->table =  $this->table;
		$lang = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
		$helper->default_form_language = $lang->id;
		$this->fields_form = array();
		$helper->id = '1';
		$helper->identifier = $this->identifier;
		$helper->submit_action = 'submitManualImport';
		$helper->currentIndex = $this->context->link->getAdminLink('AdminObsstocks', false);
		$helper->token = Tools::getAdminTokenLite('AdminObsstocks');
		$helper->tpl_vars = array(
				'fields_value' => array(
						'test_mode' => '0',
						'example' => '<a href="'.$this->module->getPathUri().'docs/example.csv">Download</a>',
						'stocks_file' => ''
				),
				'languages' => $this->context->controller->getLanguages(),
				'id_language' => $this->context->language->id
		);

		return $helper->generateForm(array($fields_form));
	}

	private function _getCSV(){
		$uidOptions = array();
		$uidOptions[] = array("id" => "id", "name" => $this->l('ID (ONLY FOR PRODUCTS)'));
		$uidOptions[] = array("id" => "reference", "name" => "REFERENCE");
		$uidOptions[] = array("id" => "ean13", "name" => "EAN13");

		$stockBehaviorOptions = array();
		$stockBehaviorOptions[] = array("id" => "0", "name" => $this->l('Replace product stock with the new value'));
		$stockBehaviorOptions[] = array("id" => "1", "name" => $this->l('Increment the current product stock'));

		$retailPriceOptions = array();
		$retailPriceOptions[] = array("id" => "1", "name" => $this->l('Calculated with margin'));
		$retailPriceOptions[] = array("id" => "2", "name" => $this->l('In a column'));

		$fields_form = array(
				'form' => array(
						'legend' => array(
								'title' => $this->l('Configuration for Feed/File Data Import:'),
								'icon' => 'icon-wrench'
						),
						'input' => array(

								array(
										'type' => 'text',
										'label' => $this->l('Fields / columns separator'),
										'hint' => $this->l('Enter the character that separates fields / columns'),
										'name' => 'separator',
										'required' => true
								),
								array(
										'type' => 'text',
										'label' => $this->l('Skip lines:'),
										'hint' => $this->l('Enter the number of lines to skip'),
										'class' => 't',
										'name' => 'skip_lines'

								),
								array(
										'type' => 'select',
										'label' => $this->l('ID column is:'),
										'hint' => $this->l('Select the field that refers to ID column'),
										'name' => 'id_type',
										'class' => 't',
										'desc' => $this->l('(ID only supported by PRODUCTS. For COMBINATIONS, please, choose REFERENCE or EAN)'),
										'options' => array(
												'query' => $uidOptions,
												'id' => 'id',
												'name' => 'name'
										),
								),
								array(
										'type' => 'text',
										'label' => $this->l('"ID" column number:'),
										'hint' => $this->l('Enter the column number of the source that refers to ID'),
										'desc' => $this->l('(Required)'),
										'class' => 't',
										'name' => 'id_column',
										'required' => true

								),
								array(
										'type' => 'text',
										'label' => $this->l('"New stock" column number:'),
										'hint' => $this->l('Enter the column number of the source that refers to Stock'),
										'desc' => $this->l('(Enter 0 to disable this column)'),
										'class' => 't',
										'name' => 'stocks_column',

								),
								array(
										'type' => 'select',
										'label' => $this->l('Stock behaviour:'),
										'hint' => $this->l('Select the behaviour you want for the stock field'),
										'name' => 'add_stock',
										'class' => 't',
										'options' => array(
												'query' => $stockBehaviorOptions,
												'id' => 'id',
												'name' => 'name'
										),
								),
								array(
										'type' => 'text',
										'label' => $this->l('"Stock alert" column number:'),
										'hint' => $this->l('Enter the column number of the source that refers to the "Minimum stock available to add product to a warning list"'),
										'desc' => $this->l('(Enter 0 to disable this column)'),
										'class' => 't',
										'name' => 'alerts_column',

								),

								array(
										'type' => 'text',
										'label' => $this->l('"Pre-tax WHOLESALE prices" column number:'),
										'hint' => $this->l('Enter the column number of the source that refers to the WHOLESALE Prices without tax'),
										'desc' => $this->l('(Enter 0 to disable this column)'),
										'class' => 't',
										'name' => 'wholesale_prices_column',

								),

								array(
										'type' => 'select',
										'label' => $this->l('Retail price options:'),
										'hint' => $this->l('Select an option for retail price'),
										'name' => 'retail_price_options',
										'class' => 'retail_price_opt',
										'desc' => $this->l('(Calculated with margin: Product retail prices are calculated with WHOLESALE PRICE * MARGIN / In a column: Retail prices are informed in a column)'),
										'options' => array(
												'query' => $retailPriceOptions,
												'id' => 'id',
												'name' => 'name'
										),
								),

								array(
										'type' => 'text',
										'label' => $this->l('"Pre-tax RETAIL prices" margin:'),
										'hint' => $this->l('Enter the margin for RETAIL Prices without tax'),
										'desc' => $this->l('(For example: 1.20 = 120%)'),
										'form_group_class' => 'obsstocks_retail_prices_margin',
										'name' => 'prices_margin',

								),

								array(
										'type' => 'text',
										'label' => $this->l('"Pre-tax RETAIL prices" column number:'),
										'hint' => $this->l('Enter the column number of the source that refers to the RETAIL Prices without tax'),
										'desc' => $this->l('(Enter 0 to disable this column)'),
										'form_group_class' => 'obsstocks_retail_prices_column',
										'name' => 'prices_column',

								),

						),
						'submit' => array(
								'title' => $this->l('Save'),
						)
				),
		);

		$helper = new HelperForm();
		$helper->show_toolbar = false;
		//$helper->base_folder = '../modules/obsstocks/views/templates/admin/obsstocks/helpers/form/';
		$helper->table =  $this->table;
		$lang = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
		$helper->default_form_language = $lang->id;
		$this->fields_form = array();
		$helper->id = '1';
		$helper->identifier = $this->identifier;
		$helper->submit_action = 'submitSaveDataColumnSettings';
		$helper->currentIndex = $this->context->link->getAdminLink('AdminObsstocks', false);
		$helper->token = Tools::getAdminTokenLite('AdminObsstocks');
		$helper->tpl_vars = array(
				'fields_value' => array(
						'separator' => Tools::getValue('separator', Configuration::get('OBSSTOCKS_SEPARATOR')),
						'skip_lines' => Tools::getValue('skip_lines', Configuration::get('OBSSTOCKS_SKIP_LINES')),
						'id_column' => Tools::getValue('id_column', Configuration::get('OBSSTOCKS_ID_COL')),
						'id_type' => Tools::getValue('id_type', Configuration::get('OBSSTOCKS_ID_TYPE')),
						'stocks_column' => Tools::getValue('stocks_column', Configuration::get('OBSSTOCKS_STOCKS_COL')),
						'add_stock' => Tools::getValue('add_stock', Configuration::get('OBSSTOCKS_ADD_STOCK')),
						'alerts_column' => Tools::getValue('alerts_column', Configuration::get('OBSSTOCKS_ALERTS_COL')),
						'wholesale_prices_column' => Tools::getValue('wholesale_prices_column', Configuration::get('OBSSTOCKS_WHOLESALE_PRICES_COL')),
						'retail_price_options' => Tools::getValue('retail_price_options', Configuration::get('OBSSTOCKS_PRICE_OPTIONS')),
						'prices_column' => Tools::getValue('prices_column', Configuration::get('OBSSTOCKS_PRICES_COL')),
						'prices_margin' => Tools::getValue('prices_margin', Configuration::get('OBSSTOCKS_PRICES_MARGIN'))
				),
				'languages' => $this->context->controller->getLanguages(),
				'id_language' => $this->context->language->id
		);

		return $helper->generateForm(array($fields_form));
	}

	private function _getAutomaticConfiguration(){
		if(is_writable(OBS_IMPORT_DIR)){

			$sourceOptions = array();
			$sourceOptions[] = array("id" => "0", "name" => $this->l('Disable automatic import'));
			$sourceOptions[] = array("id" => "url_feed", "name" => $this->l('Feed URL'));
			$sourceOptions[] = array("id" => "remote_ftp", "name" => $this->l('Remote FTP'));
			$sourceOptions[] = array("id" => "local_file", "name" =>  $this->l('Local file'));

			$fields_form = array(
					'form' => array(
							'legend' => array(
									'title' => $this->l('Automatic DATA IMPORT settings:'),
									'icon' => 'icon-wrench'
							),
							'input' => array(

									array(
											'type' => 'select',
											'label' => $this->l('Data source options:'),
											'hint' => $this->l('Select a data source option'),
											'name' => 'import_data_source',
											'class' => 'import_data_source_opt',
											'options' => array(
													'query' => $sourceOptions,
													'id' => 'id',
													'name' => 'name'
											),
									),
									array(
											'type' => 'text',
											'label' => $this->l('Feed URL'),
											'name' => 'url_feed_url',
											'desc' => $this->l('Enter the URL from which the data will be collected'),
											'form_group_class' => 'obsstocks_feed_url',
											'size' => 100
									),
									array(
											'type' => 'text',
											'label' => $this->l('FTP Host'),
											'name' => 'remote_ftp_host',
											'hint' => $this->l('Enter remote FTP host where the file to be imported is hosted'),
											'desc' => $this->l('Example: ftp.domain.com'),
											'form_group_class' => 'obsstocks_remote_ftp',
											'size' => 50
									),
									array(
											'type' => 'text',
											'label' => $this->l('FTP Port'),
											'name' => 'remote_ftp_port',
											'hint' => $this->l('Enter remote FTP port'),
											'desc' => $this->l('Default: 21'),
											'form_group_class' => 'obsstocks_remote_ftp'
									),
									array(
											'type' => 'text',
											'label' => $this->l('FTP User'),
											'name' => 'remote_ftp_user',
											'form_group_class' => 'obsstocks_remote_ftp',
											'size' => 50
									),
									array(
											'type' => 'text',
											'label' => $this->l('FTP Password'),
											'name' => 'remote_ftp_pwd',
											'form_group_class' => 'obsstocks_remote_ftp',
											'class' => 'obsstocks_remote_ftp_pwd',
											'size' => 50
									),
									array(
											'type' => 'text',
											'label' => $this->l('FTP file path'),
											'name' => 'remote_ftp_path',
											'hint' => $this->l('Enter remote FTP path where the file to be imported is hosted'),
											'desc' => $this->l('Example: /httpdocs/files/myfeed.txt'),
											'form_group_class' => 'obsstocks_remote_ftp',
											'size' => 100
									),
									array(
											'type' => 'text',
											'hint' => $this->l('Enter the absolute local path where the file to be imported is'),
											'label' => $this->l('Local file'),
											'desc' => $this->l('Example: /httpdocs/files/myfeed.txt'),
											'form_group_class' => 'obsstocks_local_file',
											'name' => 'local_file_path',
											'size' => 100
									),
									array(
											'type' => 'free',
											'hint' => $this->l('Set this url in your cronjobs application'),
											'label' => $this->l('URL for Import Cronjob'),
											'form_group_class' => 'obsstocks_import_cron',
											'name' => 'url_import_cron'
									),
									array(
											'type' => 'free',
											'hint' => $this->l('This URL is only for testing'),
											'label' => $this->l('TEST URL'),
											'form_group_class' => 'obsstocks_import_cron',
											'name' => 'url_import_cron_test'
									),

							),
							'submit' => array(
									'title' => $this->l('Save settings'),
							)
					),
			);

			$helper = new HelperForm();
			$helper->show_toolbar = false;
			$helper->table =  $this->table;
			$lang = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
			$helper->default_form_language = $lang->id;
			$this->fields_form = array();
			$helper->id = '1';
			$helper->identifier = $this->identifier;
			$helper->submit_action = 'submitAutoImportSettings';
			$helper->currentIndex = $this->context->link->getAdminLink('AdminObsstocks', false);
			$helper->token = Tools::getAdminTokenLite('AdminObsstocks');
			$helper->tpl_vars = array(
					'fields_value' => array(
							'import_data_source' => Tools::getValue('import_data_source', Configuration::get('OBSSTOCKS_DATA_SOURCE')),
							'url_feed_url' => Tools::getValue('url_feed_url', Configuration::get('OBSSTOCKS_FEED_URL')),
							'remote_ftp_host' => Tools::getValue('remote_ftp_host', Configuration::get('OBSSTOCKS_FTP_HOST')),
							'remote_ftp_port' => Tools::getValue('remote_ftp_port', Configuration::get('OBSSTOCKS_FTP_PORT')),
							'remote_ftp_user' => Tools::getValue('remote_ftp_user', Configuration::get('OBSSTOCKS_FTP_USER')),
							'remote_ftp_pwd' => Tools::getValue('remote_ftp_pwd', Configuration::get('OBSSTOCKS_FTP_PWD')),
							'remote_ftp_path' => Tools::getValue('remote_ftp_path', Configuration::get('OBSSTOCKS_FTP_PATH')),
							'local_file_path' => Tools::getValue('local_file', Configuration::get('OBSSTOCKS_LOCAL_FILE_PATH')),
							'url_import_cron' => '<a style="font-size:12px; color: green;" href="'.$this->context->link->getModuleLink('obsstocks', 'importCron', array('token' => Configuration::get('OBSSTOCKS_TOKEN')), true).'" target="_blank">'.$this->context->link->getModuleLink('obsstocks', 'importCron', array('token' => Configuration::get('OBSSTOCKS_TOKEN')), true).'</a>',
							'url_import_cron_test' => '<a style="font-size:12px; color: blue;" href="'.$this->context->link->getModuleLink('obsstocks', 'importCron', array('token' => Configuration::get('OBSSTOCKS_TOKEN'), 'test' => '1'), true).'" target="_blank">'.$this->context->link->getModuleLink('obsstocks', 'importCron', array('token' => Configuration::get('OBSSTOCKS_TOKEN'), 'test' => '1'), true).'</a>'
					),
					'languages' => $this->context->controller->getLanguages(),
					'id_language' => $this->context->language->id
			);

			return $helper->generateForm(array($fields_form));
		}
	}

	private function _getExportAllStockForm(){

		$fields_form = array(
				'form' => array(
						'legend' => array(
								'title' => $this->l('Export all stock:'),
								'icon' => 'icon-wrench'
						),

						'submit' => array(
								'title' => $this->l('Export all stock to CSV'),
						)
				),
		);



		$helper = new HelperForm();
		$helper->show_toolbar = false;
		$helper->table =  $this->table;
		$lang = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
		$helper->default_form_language = $lang->id;
		$this->fields_form = array();
		$helper->id = '1';
		$helper->identifier = $this->identifier;
		$helper->submit_action = 'submitExportAll';
		$helper->currentIndex = $this->context->link->getAdminLink('AdminObsstocks', false);
		$helper->token = Tools::getAdminTokenLite('AdminObsstocks');
		$helper->tpl_vars = array(
				'fields_value' => array(
				),
				'languages' => $this->context->controller->getLanguages(),
				'id_language' => $this->context->language->id
		);

		return $helper->generateForm(array($fields_form));
	}

	private function _getExportStockBMForm(){
		$fields_form = array(
				'form' => array(
						'legend' => array(
								'title' => $this->l('Export stocks below minimums:'),
								'icon' => 'icon-wrench'
						),
							
						'submit' => array(
								'title' => $this->l('Export stocks below minimum to CSV'),
						)
				),
		);
			
			
			
		$helper = new HelperForm();
		$helper->show_toolbar = false;
		$helper->table =  $this->table;
		$lang = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
		$helper->default_form_language = $lang->id;
		$this->fields_form = array();
		$helper->id = '1';
		$helper->identifier = $this->identifier;
		$helper->submit_action = 'submitExportMiniums';
		$helper->currentIndex = $this->context->link->getAdminLink('AdminObsstocks', false);
		$helper->token = Tools::getAdminTokenLite('AdminObsstocks');
		$helper->tpl_vars = array(
				'fields_value' => array(
				),
				'languages' => $this->context->controller->getLanguages(),
				'id_language' => $this->context->language->id
		);
			
		return $helper->generateForm(array($fields_form));
	}

	private function _getExportConfigAlertsForm(){
		$fields_form = array(
				'form' => array(
						'legend' => array(
								'title' => $this->l('Export configured alerts:'),
								'icon' => 'icon-wrench'
						),
							
						'submit' => array(
								'title' => $this->l('Export current stock alerts configuration to CSV'),
						)
				),
		);
			
			
			
		$helper = new HelperForm();
		$helper->show_toolbar = false;
		$helper->table =  $this->table;
		$lang = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
		$helper->default_form_language = $lang->id;
		$this->fields_form = array();
		$helper->id = '1';
		$helper->identifier = $this->identifier;
		$helper->submit_action = 'submitExportAlertsConf';
		$helper->currentIndex = $this->context->link->getAdminLink('AdminObsstocks', false);
		$helper->token = Tools::getAdminTokenLite('AdminObsstocks');
		$helper->tpl_vars = array(
				'fields_value' => array(
				),
				'languages' => $this->context->controller->getLanguages(),
				'id_language' => $this->context->language->id
		);
			
		return $helper->generateForm(array($fields_form));
	}

	private function _getSettingsExportForm(){
		$fields_form = array(
				'form' => array(
						'legend' => array(
								'title' => $this->l('Setting for EXPORT DATA:'),
								'icon' => 'icon-wrench'
						),
						'input' => array(

								array(
										'type' => 'text',
										'label' => $this->l('Alert email'),
										'name' => 'alert_email',
										'size' => 50
								),
									
								array(
										'type' => 'free',
										'hint' => $this->l('Set this url in your cronjobs application'),
										'label' => $this->l('URL for Export Cronjob'),
										'name' => 'url_export_cron'
								),
									
								array(
										'type' => 'free',
										'hint' => $this->l('Set this url in your cronjobs application'),
										'label' => $this->l('URL for Export all stock Cronjob'),
										'name' => 'url_export_cron_all'
								),
									
						),
						'submit' => array(
								'title' => $this->l('Save settings'),
						)
				),
		);
			
		$helper = new HelperForm();
		$helper->show_toolbar = false;
		$helper->table =  $this->table;
		$lang = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
		$helper->default_form_language = $lang->id;
		$this->fields_form = array();
		$helper->id = '1';
		$helper->identifier = $this->identifier;
		$helper->submit_action = 'submitAutoExportSettings';
		$helper->currentIndex = $this->context->link->getAdminLink('AdminObsstocks', false);
		$helper->token = Tools::getAdminTokenLite('AdminObsstocks');
		$helper->tpl_vars = array(
				'fields_value' => array(
						'alert_email' => Configuration::get('OBSSTOCKS_ALERT_EMAIL'),
						'url_export_cron' => '<a style="font-size:12px; color: green;" href="'.$this->context->link->getModuleLink('obsstocks', 'cron', array('token' => Configuration::get('OBSSTOCKS_TOKEN')), true).'" target="_blank">'.$this->context->link->getModuleLink('obsstocks', 'cron', array('token' => Configuration::get('OBSSTOCKS_TOKEN')), true).'</a>',
						'url_export_cron_all' => '<a style="font-size:12px; color: green;" href="'.$this->context->link->getModuleLink('obsstocks', 'cronAll', array('token' => Configuration::get('OBSSTOCKS_TOKEN')), true).'" target="_blank">'.$this->context->link->getModuleLink('obsstocks', 'cronAll', array('token' => Configuration::get('OBSSTOCKS_TOKEN')), true).'</a>'
				),
				'languages' => $this->context->controller->getLanguages(),
				'id_language' => $this->context->language->id
		);
			
		return $helper->generateForm(array($fields_form));
	}


}
?>