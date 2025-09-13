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

class ObsstocksImportCronModuleFrontController extends ModuleFrontController
{
	public $display_column_left = false;
	public $ssl = true;
	private $log = null;
	private $test = false;
	private $import_id = 0;

	/**
	 * @see FrontController::initContent()
	 */
	public function initContent()
	{
		if(!Tools::getIsset('token') OR Tools::getValue('token') != Configuration::get('OBSSTOCKS_TOKEN'))
			die("Obsstocks: Forbidden access, You don't have permission to access");

		parent::initContent();

		include($this->module->getLocalPath().'classes/Mystocks.php');

		if(!class_exists('OBSLog'))
			include($this->module->getLocalPath().'classes/OBSLog.php');

		define('OBS_EXPORT_DIR', $this->module->getLocalPath().'import/');
		$this->display_header = false;
		$this->display_footer = false;
		$this->test = Tools::getIsset('test');

		if(!$this->test){
			$this->import_id = Mystocks::createNewImportLog('cronjob',Configuration::get('OBSSTOCKS_DATA_SOURCE'));
			$this->log = new OBSLog('errors_'.(int) $this->import_id.'.log', $this->module->getLocalPath().'logs/');
		}

		if(Configuration::get('OBSSTOCKS_DATA_SOURCE') == 'url_feed')
			$this->importURLFeed();
		else if (Configuration::get('OBSSTOCKS_DATA_SOURCE') == 'remote_ftp')
			$this->importRemoteFTP();
		else if (Configuration::get('OBSSTOCKS_DATA_SOURCE') == 'local_file')
			$this->importLocalFile();

	}

	private function csv_file_exists($filename)
	{
		if( is_callable(array('Tools', 'file_exists_no_cache')))
			return Tools::file_exists_no_cache($filename);
		else
			return file_exists($filename);
	}

	private function importURLFeed()
	{
		$url = Configuration::get('OBSSTOCKS_FEED_URL');
		$filename = OBS_EXPORT_DIR.'URLFeed.txt';

		$text = Tools::file_get_contents($url);
		if(!$text){
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$text = curl_exec($ch);
			curl_close($ch);
		}

		/*file_put_contents($filename, preg_replace('#<br\s*?/?>#i', "\n", $text));*/
		file_put_contents($filename, $text);


		if($text AND $this->csv_file_exists($filename)){

			$this->importFile($filename);
		}
		else
			echo 'Obtaining data feed has failed. Import file not found.';

	}

	private function importLocalFile()
	{
		$local_file = Configuration::get('OBSSTOCKS_LOCAL_FILE_PATH');
		$filename = OBS_EXPORT_DIR.'localFeed.txt';

		try {
			if(!Tools::copy($local_file, $filename)){
				throw new Exception('Local file not found in path: \''.$local_file.'\'');
			}
		} catch (Exception $e) {
			echo "Failure: " . $e->getMessage();
			die;
		}
		if($this->csv_file_exists($filename)){

			$this->importFile($filename);

		}
		else
			echo 'Obtaining data feed has failed. Import file not found.';

	}

	private function importRemoteFTP()
	{
		$ftp_host = Configuration::get('OBSSTOCKS_FTP_HOST');
		$ftp_port = (int) Configuration::get('OBSSTOCKS_FTP_PORT');
		$ftp_user = Configuration::get('OBSSTOCKS_FTP_USER');
		$ftp_pwd = Configuration::get('OBSSTOCKS_FTP_PWD');
		$ftp_path = Configuration::get('OBSSTOCKS_FTP_PATH');
		$filename = OBS_EXPORT_DIR.'FTPFeed.txt';

		// abrir un archivo para escribir
		$handle = fopen($filename, 'w');

		try {
			// establecer una conexión básica
			$conn_id = ftp_connect($ftp_host, $ftp_port);
			if (false === $conn_id) {
				throw new Exception('Unable to connect \''.$ftp_host.':'.$ftp_port.'\'');
			}
			// iniciar sesión con nombre de usuario y contraseña
			$login_result = ftp_login($conn_id, $ftp_user, $ftp_pwd);
			if (false === $login_result) {
				throw new Exception('Unable to log in, please check your access credentials');
			}
			// intenta descargar un $remote_file y guardarlo en $handle
			if (!ftp_fget($conn_id, $handle, $ftp_path, FTP_ASCII, 0)){
				throw new Exception('Remote file not found in path: \''.$ftp_path.'\'');
			}

			// cerrar la conexión ftp y el gestor de archivo
			ftp_close($conn_id);
			fclose($handle);
		} catch (Exception $e) {
			echo "FTP Failure: " . $e->getMessage();
			die;
		}
		if($this->csv_file_exists($filename))
		{
			$this->importFile($filename);
		}
		else
		{
			echo 'Obtaining data from FTP has failed. Import file not found.';
		}

	}

	private function cleanOldFiles()
	{
		$files = glob(OBS_EXPORT_DIR."*");
		$now   = time();

		foreach ($files as $file)
		{
			if(!preg_match('/index.php/', $file) AND !preg_match('/.htaccess/',$file)){
				if (is_file($file))
					if ($now - filemtime($file) >= 60*60*24*30) // 30 days
						unlink($file);
			}
		}
	}

	private function importFile($filename)
	{
		if($this->test){
			$test_result = Mystocks::importFileTest($filename);

			$this->context->smarty->assign(array(
					'test_result' => $test_result,
					'back_button' => 0
			));

			if (version_compare(_PS_VERSION_, '1.7.0.0', '>='))
				$this->setTemplate('module:'.$this->module->name.'/views/templates/front/test.tpl');
			else
				$this->setTemplate('test.tpl');
		}
		else
		{
			$result_errors = Mystocks::importFile($filename, $this->log);

			rename($filename, $filename."_imported_".$this->import_id);
			$this->cleanOldFiles();

			if($result_errors)
				Mystocks::saveImportLogErrors($this->import_id, $result_errors);
			
			$this->context->smarty->assign(array(
					'result_errors' => $result_errors
			));

			if (version_compare(_PS_VERSION_, '1.7.0.0', '>='))
				$this->setTemplate('module:'.$this->module->name.'/views/templates/front/real.tpl');
			else
				$this->setTemplate('real.tpl');
		}
	}
}
?>