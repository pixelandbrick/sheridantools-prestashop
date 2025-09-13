<?php
/**
 * 2011-2014 OBSolutions S.C.P. All Rights Reserved.
 *
 * NOTICE:  All information contained herein is, and remains
 * the property of OBSolutions S.C.P. and its suppliers,
 * if any.  The intellectual and technical concepts contained
 * herein are proprietary to OBSolutions S.C.P.
 * and its suppliers and are protected by trade secret or copyright law.
 * Dissemination of this information or reproduction of this material
 * is strictly forbidden unless prior written permission is obtained
 * from OBSolutions S.C.P.
 *
 *  @author    OBSolutions SCP <http://addons.prestashop.com/en/65_obs-solutions>
 *  @copyright 2011-2014 OBSolutions SCP
 *  @license   OBSolutions S.C.P. All Rights Reserved
 *  International Registered Trademark & Property of OBSolutions SCP
 */

class Mystocks extends ObjectModel {

	public static function importFile($filename, $log)
	{
		@set_time_limit(0);
		ini_set('auto_detect_line_endings',TRUE);

		/* Set memory limit to 128M only if current is lower */
		$memory_limit = @ini_get('memory_limit');
		if (Tools::substr($memory_limit, -1) != 'G' && ((Tools::substr($memory_limit, -1) == 'M' && Tools::substr($memory_limit, 0, -1) < 128) || is_numeric($memory_limit) && ((int)($memory_limit) < 131072)))
			@ini_set('memory_limit', '128M');

		//*** PREVENT ERRORS READING LINE ENDINGS ***//
		$file_contents = Tools::file_get_contents($filename);
		$file_cont_new = preg_replace('/\r\n|\n\r|\n|\r/', PHP_EOL, $file_contents);
		file_put_contents($filename,$file_cont_new);

		if (($gestor = fopen($filename, "r")) !== FALSE) {
			$lineNum = 0;
			$errorsCount = 0;
			while (($datos = fgetcsv($gestor, 0, Configuration::get('OBSSTOCKS_SEPARATOR'))) !== FALSE) {

				$lineNum++;

				/* Skip first OBSSTOCKS_SKIP_LINES lines */
				if((int) Configuration::get('OBSSTOCKS_SKIP_LINES') >= $lineNum)
					continue;

				/* Validate fields offset */
				$total_fields = count($datos);
				if(Configuration::get('OBSSTOCKS_ID_COL') > $total_fields )
				{
					$log->error('LINE #'.$lineNum.'|OFFSET UID COLUMN VALUE:'.Configuration::get('OBSSTOCKS_ID_COL'));
					$errorsCount++;
					continue;
				}
				if(Configuration::get('OBSSTOCKS_STOCKS_COL') > $total_fields )
				{
					$log->error('LINE #'.$lineNum.'|OFFSET STOCKS COLUMN VALUE:'.Configuration::get('OBSSTOCKS_STOCKS_COL'));
					$errorsCount++;
					continue;
				}
				if(Configuration::get('OBSSTOCKS_ALERTS_COL') > $total_fields )
				{
					$log->error('LINE #'.$lineNum.'|OFFSET ALERTS COLUMN VALUE:'.Configuration::get('OBSSTOCKS_ALERTS_COL'));
					$errorsCount++;
					continue;
				}
				if(Configuration::get('OBSSTOCKS_WHOLESALE_PRICES_COL') > $total_fields )
				{
					$log->error('LINE #'.$lineNum.'|OFFSET WHOLESALE PRICE COLUMN VALUE:'.Configuration::get('OBSSTOCKS_WHOLESALE_PRICES_COL'));
					$errorsCount++;
					continue;
				}
				if(Configuration::get('OBSSTOCKS_PRICES_COL') > $total_fields )
				{
					$log->error('LINE #'.$lineNum.'|OFFSET PRICES COLUMN VALUE:'.Configuration::get('OBSSTOCKS_PRICES_COL'));
					$errorsCount++;
					continue;
				}
				/* UID column */
				$valid_uid = false;

				if(Configuration::get('OBSSTOCKS_ID_COL') <= $total_fields)
				{
					$uid = trim($datos[(int) Configuration::get('OBSSTOCKS_ID_COL') - 1]);

					if(Configuration::get('OBSSTOCKS_ID_TYPE') == 'id')
					{
						if(Validate::isInt($uid))
							$valid_uid = true;
						else
						{
							$log->error('LINE #'.$lineNum.'|UID (ID) VALUE NOT VALID|VALUE:'.$uid);
							$errorsCount++;
						}
					}
					else if(Configuration::get('OBSSTOCKS_ID_TYPE') == 'ean13')
					{
						if(Validate::isEan13($uid))
							$valid_uid = true;
						else
						{
							$log->error('LINE #'.$lineNum.'|UID (EAN13) VALUE NOT VALID|VALUE:'.$uid);
							$errorsCount++;
						}
					}
					else
						$valid_uid = true;
				}

						$combinations = array();
						$products = array();

				/* Searching combination and product */
				//If uid = id_product, we don't search combinations
				if($valid_uid)
				{
					if(Configuration::get('OBSSTOCKS_ID_TYPE') != 'id')
					{
						//Buscamos primero la combinacion, si existe la actualizamos sino buscamos el producto
								$combinations = self::getCombinationsByUidType($uid, Configuration::get('OBSSTOCKS_ID_TYPE'));
					}

							$products =  self::getProductsByUidType($uid, Configuration::get('OBSSTOCKS_ID_TYPE'));

							$foundIds = array_merge($combinations, $products);

							foreach($foundIds as $objectId) {
								if($objectId['type'] == 'COMBINATION') {
									$combination = new Combination($objectId['id_product_attribute']);
									$product = false;
								} else {
									$combination = false;
									$product = new Product($objectId['id_product']);
								}
					/* Stocks column */
					$stock = false;
					if(($combination OR $product) AND Configuration::get('OBSSTOCKS_STOCKS_COL') AND Configuration::get('OBSSTOCKS_STOCKS_COL') <= $total_fields)
					{
						$stock = trim($datos[(int) Configuration::get('OBSSTOCKS_STOCKS_COL') - 1]);

						if($stock !== false AND (Validate::isInt($stock) OR (Validate::isFloat($stock) AND (int) $stock == $stock)))
							self::updateStock($combination, $product, (int) $stock, (int) Configuration::get('OBSSTOCKS_ADD_STOCK'));
						else
						{
							$log->error('LINE #'.$lineNum.'|STOCK VALUE NOT VALID|VALUE:'.$stock);
							$errorsCount++;
						}
					}

					/* Alerts column */
					$alert = false;
					if(Configuration::get('OBSSTOCKS_ALERTS_COL') AND Configuration::get('OBSSTOCKS_ALERTS_COL') <= $total_fields)
					{
						$alert = trim($datos[(int) Configuration::get('OBSSTOCKS_ALERTS_COL') - 1]);

						if(Validate::isInt($alert))
						{
							if(Validate::isLoadedObject($combination))
							{
								self::updateAlert($combination->reference, (int) $alert);
							}
							else if (Validate::isLoadedObject($product))
							{
								self::updateAlert($product->reference, (int) $alert);
							}
						}
						else
						{
							$log->error('LINE #'.$lineNum.'|MINIMUM STOCK ALERT VALUE NOT VALID|VALUE:'.$alert);
							$errorsCount++;
						}
					}

					/* Wholesale price column */
					$wholesale_price = false;
					if(Configuration::get('OBSSTOCKS_WHOLESALE_PRICES_COL') AND Configuration::get('OBSSTOCKS_WHOLESALE_PRICES_COL') <= $total_fields)
					{
						$wholesale_price = trim(preg_replace('/,/', '.', $datos[(int) Configuration::get('OBSSTOCKS_WHOLESALE_PRICES_COL') - 1]));

						if(!Validate::isFloat($wholesale_price))
						{
							$log->error('LINE #'.$lineNum.'|PRICE WHOLESALE VALUE NOT VALID|VALUE:'.$wholesale_price);
							$errorsCount++;
						}
					}

					/* Prices column */
					$price = false;
					if(Configuration::get('OBSSTOCKS_PRICES_COL') AND Configuration::get('OBSSTOCKS_PRICES_COL') <= $total_fields)
					{
						if(Configuration::get('OBSSTOCKS_PRICE_OPTIONS') == 1)
							$price = trim(preg_replace('/,/', '.', $datos[(int) Configuration::get('OBSSTOCKS_WHOLESALE_PRICES_COL') - 1])) * (float) Configuration::get('OBSSTOCKS_PRICES_MARGIN');
						else
							$price = trim(preg_replace('/,/', '.', $datos[(int) Configuration::get('OBSSTOCKS_PRICES_COL') - 1]));

						if(!Validate::isFloat($price))
						{
							$log->error('LINE #'.$lineNum.'|PRICE VALUE NOT VALID|VALUE:'.$price);
							$errorsCount++;
						}

					}

					if(($combination OR $product) AND (Validate::isFloat($wholesale_price) OR Validate::isFloat($price)))
					{
						self::updatePrice($combination, $product, $wholesale_price, $price);
					}


				}
						}

			}
			fclose($gestor);
		}

		return $errorsCount;
	}

	public static function importFileTest($filename)
	{
		@set_time_limit(0);
		ini_set('auto_detect_line_endings',TRUE);

		/* Set memory limit to 128M only if current is lower */
		$memory_limit = @ini_get('memory_limit');
		if (Tools::substr($memory_limit, -1) != 'G' && ((Tools::substr($memory_limit, -1) == 'M' && Tools::substr($memory_limit, 0, -1) < 128) || is_numeric($memory_limit) && ((int)($memory_limit) < 131072)))
			@ini_set('memory_limit', '128M');

		//*** PREVENT ERRORS READING LINE ENDINGS ***//
		$file_contents = Tools::file_get_contents($filename);
		$file_cont_new = preg_replace('/\r\n|\n\r|\n|\r/', PHP_EOL, $file_contents);
		file_put_contents($filename,$file_cont_new);

		if (($gestor = fopen($filename, "r")) !== FALSE) {
			$lineNum = 0;
			$testLine = 0;
			$testValues = array();
			while (($datos = fgetcsv($gestor, 0, Configuration::get('OBSSTOCKS_SEPARATOR'))) !== FALSE) {

				$lineNum++;

				/* Skip first OBSSTOCKS_SKIP_LINES lines */
				if((int) Configuration::get('OBSSTOCKS_SKIP_LINES') >= $lineNum)
					continue;

				//Only test first 5 lines
				$testLine++;
				if($testLine == 5)
					break;

				$testValues[$lineNum] = array(
											'uid' =>
												array
												(	'type' => Configuration::get('OBSSTOCKS_ID_TYPE'),
													'value' => 'DISABLED',
												 	'result' => '-'
												),
											'stock' =>
												array
												(	'value' => 'DISABLED',
													'result' => '-'
												),
											'alert' =>
											array
											(	'value' => 'DISABLED',
													'result' => '-'
											),
											'wholesale_price' =>
											array
											(	'value' => 'DISABLED',
													'result' => '-'
											),
											'price' =>
												array
												(	'value' => 'DISABLED',
													'result' => '-'
												)
										);


				/* Validate fields offset */
				$total_fields = count($datos);
				if(Configuration::get('OBSSTOCKS_ID_COL') > $total_fields )
				{
					$testValues[$lineNum]['uid']['value'] = 'WRONG OFFSET COLUMN INDEX ('.Configuration::get('OBSSTOCKS_ID_COL').')';
					$testValues[$lineNum]['uid']['result'] = 'FAILED';
				}
				if(Configuration::get('OBSSTOCKS_STOCKS_COL') > $total_fields )
				{
					$testValues[$lineNum]['stock']['value'] = 'WRONG OFFSET COLUMN INDEX ('.Configuration::get('OBSSTOCKS_STOCKS_COL').')';
					$testValues[$lineNum]['stock']['result'] = 'FAILED';
				}
				if(Configuration::get('OBSSTOCKS_ALERTS_COL') > $total_fields )
				{
					$testValues[$lineNum]['alert']['value'] = 'WRONG OFFSET COLUMN INDEX ('.Configuration::get('OBSSTOCKS_ALERTS_COL').')';
					$testValues[$lineNum]['alert']['result'] = 'FAILED';
				}
				if(Configuration::get('OBSSTOCKS_WHOLESALE_PRICES_COL') > $total_fields )
				{
					$testValues[$lineNum]['wholesale_price']['value'] = 'WRONG OFFSET COLUMN INDEX ('.Configuration::get('OBSSTOCKS_WHOLESALE_PRICES_COL').')';
					$testValues[$lineNum]['wholesale_price']['result'] = 'FAILED';
				}
				if(Configuration::get('OBSSTOCKS_PRICES_COL') > $total_fields )
				{
					$testValues[$lineNum]['price']['value'] = 'WRONG OFFSET COLUMN INDEX ('.Configuration::get('OBSSTOCKS_PRICES_COL').')';
					$testValues[$lineNum]['price']['result'] = 'FAILED';
				}

				/* UID column */
				if(Configuration::get('OBSSTOCKS_ID_COL') <= $total_fields)
					{$uid = trim($datos[(int) Configuration::get('OBSSTOCKS_ID_COL') - 1]);
					$testValues[$lineNum]['uid']['value'] = $uid;
					if(Configuration::get('OBSSTOCKS_ID_TYPE') == 'id')
					{
						if(!Validate::isInt($uid))
							$testValues[$lineNum]['uid']['result'] = 'FAILED';
						else
							$testValues[$lineNum]['uid']['result'] = 'OK';
					}
					else if(Configuration::get('OBSSTOCKS_ID_TYPE') == 'ean13')
					{
						if(!Validate::isEan13($uid))
							$testValues[$lineNum]['uid']['result'] = 'FAILED';
						else
							$testValues[$lineNum]['uid']['result'] = 'OK';

					}
					else
						$testValues[$lineNum]['uid']['result'] = 'OK';


				}

				if(Configuration::get('OBSSTOCKS_STOCKS_COL') AND Configuration::get('OBSSTOCKS_STOCKS_COL') <= $total_fields)
				{
					$stock = trim($datos[(int) Configuration::get('OBSSTOCKS_STOCKS_COL') - 1]);
					$testValues[$lineNum]['stock']['value'] = $stock;
					if($stock !== false AND (Validate::isInt($stock) OR (Validate::isFloat($stock) AND (int) $stock == $stock)))
						$testValues[$lineNum]['stock']['result'] = 'OK';
					else
						$testValues[$lineNum]['stock']['result'] = 'FAILED';
				}
				if(Configuration::get('OBSSTOCKS_ALERTS_COL') AND Configuration::get('OBSSTOCKS_ALERTS_COL') <= $total_fields)
				{
					$alert = trim($datos[(int) Configuration::get('OBSSTOCKS_ALERTS_COL') - 1]);
					$testValues[$lineNum]['alert']['value'] = $alert;
					if(!Validate::isInt($alert))
						$testValues[$lineNum]['alert']['result'] = 'FAILED';
					else
						$testValues[$lineNum]['alert']['result'] = 'OK';
				}
				if(Configuration::get('OBSSTOCKS_WHOLESALE_PRICES_COL') AND Configuration::get('OBSSTOCKS_WHOLESALE_PRICES_COL') <= $total_fields)
				{
					$wholesale_price = trim(preg_replace('/,/', '.', $datos[(int) Configuration::get('OBSSTOCKS_WHOLESALE_PRICES_COL') - 1]));
					$testValues[$lineNum]['wholesale_price']['value'] = $wholesale_price;
					if(!Validate::isFloat($wholesale_price))
						$testValues[$lineNum]['wholesale_price']['result'] = 'FAILED';
					else
						$testValues[$lineNum]['wholesale_price']['result'] = 'OK';
				}
				if(Configuration::get('OBSSTOCKS_PRICES_COL') AND Configuration::get('OBSSTOCKS_PRICES_COL') <= $total_fields)
				{
					if(Configuration::get('OBSSTOCKS_PRICE_OPTIONS') == 1)
							$price = trim(preg_replace('/,/', '.', $datos[(int) Configuration::get('OBSSTOCKS_WHOLESALE_PRICES_COL') - 1])) * (float) Configuration::get('OBSSTOCKS_PRICES_MARGIN');
					else
							$price = trim(preg_replace('/,/', '.', $datos[(int) Configuration::get('OBSSTOCKS_PRICES_COL') - 1]));

					$testValues[$lineNum]['price']['value'] = $price;
					if(!Validate::isFloat($price))
						$testValues[$lineNum]['price']['result'] = 'FAILED';
					else
						$testValues[$lineNum]['price']['result'] = 'OK';
				}
			}
			fclose($gestor);
		}

		return $testValues;
	}

	public static function updateStock($combination, $product, $stock, $add_stock){

		//Context::getContext()->employee = 1;
		Context::getContext()->link = new Link();

		if(Validate::isLoadedObject($combination))
		{
			//Add
			if($add_stock == 1)
				$stock = Product::getQuantity($combination->id_product, $combination->id) + (int)$stock;

			StockAvailable::setQuantity($combination->id_product, $combination->id, (int) $stock);
			return true;
		}

		if(Validate::isLoadedObject($product))
		{

			if($add_stock == 1)
				$stock = Product::getQuantity($product->id) + (int)$stock;

			StockAvailable::setQuantity($product->id, 0, (int) $stock);
			return true;
		}
		return false;
	}

	public static function updatePrice($combination, $product, $wholesale_price, $price){

		//Context::getContext()->employee = 1;
		Context::getContext()->link = new Link();

		if(Validate::isLoadedObject($combination))
		{
			if(Validate::isFloat($wholesale_price))
				$combination->wholesale_price = (float) $wholesale_price;
			if(Validate::isFloat($price))
				$combination->price = (float) $price;

			$fatherProduct = new Product($combination->id_product);
			$fatherProduct->updateAttribute($combination->id, $combination->wholesale_price, $combination->price, $combination->weight, $combination->unit_price_impact, $combination->ecotax,
					null, $combination->reference, $combination->ean13, $combination->default_on, $combination->location, $combination->upc, $combination->minimal_quantity,
					$combination->available_date, false, array());

		}

		if(Validate::isLoadedObject($product))
		{
			if(is_numeric($wholesale_price))
				$product->wholesale_price = (float) $wholesale_price;
			if(is_numeric($price))
				$product->price = (float) $price;

			$product->setFieldsToUpdate(array('wholesale_price' => true, 'price' => true));

			$product->update();

		}
	}

	public static function updateAlert($reference, $alert){

		$result = Db::getInstance()->Execute("
			INSERT INTO `"._DB_PREFIX_."obsstocks_minstocks`
			(reference, min_stock) VALUES ('".pSQL($reference)."', ".pSQL($alert).")
				ON DUPLICATE KEY UPDATE min_stock = ".pSQL($alert));

		return $result;
	}

	public static function getDatasheetStockBelowMinium(){


		$lang = new Language((int)Configuration::get('PS_LANG_DEFAULT'));

		$sql = "SELECT * from "._DB_PREFIX_."obsstocks_minstocks";
		$result = Db::getInstance()->ExecuteS($sql);

		$totalresult = array();

		foreach ($result as $minStockData){

			//Buscamos primero la combinaci�n, si existe la actualizamos sino buscamos el producto
			$combination = self::getCombinationByUidType($minStockData['reference']);

			if($combination AND (StockAvailable::getQuantityAvailableByProduct($combination->id_product, $combination->id) < (int)$minStockData['min_stock']))
			{

				$product = new Product($combination->id_product);
				$attributesName = $combination->getAttributesName($lang->id);

				$combiName = $product->name[$lang->id];
				foreach($attributesName as $aName)
				{
					$combiName .=":".$aName['name'];
				}

				$stockData = new stdClass();
				$stockData->reference = '"'.$minStockData['reference'].'"';
				$stockData->name = '"'.preg_replace("/\"/","'",$combiName).'"';
				$stockData->real_stock = StockAvailable::getQuantityAvailableByProduct($combination->id_product, $combination->id);
				$stockData->alert_stock = $minStockData['min_stock'];
				$totalresult[] = $stockData;
			}

			$product = self::getProductByUidType($minStockData['reference']);

			if($product AND (StockAvailable::getQuantityAvailableByProduct($product->id, 0) < (int)$minStockData['min_stock']))
			{
				$stockData = new stdClass();
				$stockData->reference = '"'.$minStockData['reference'].'"';
				$stockData->name = '"'.$product->name[$lang->id].'"';
				$stockData->real_stock = StockAvailable::getQuantityAvailableByProduct($product->id, 0);
				$stockData->alert_stock = $minStockData['min_stock'];
				$totalresult[] = $stockData;

			}
		}

		return $totalresult;
	}

	public static function getDatasheetAllStock(){

		$lang = new Language((int)Configuration::get('PS_LANG_DEFAULT'));

		$sql = "SELECT a.reference as reference, a.id_product_attribute as id from "._DB_PREFIX_."product_attribute a, "._DB_PREFIX_."product p WHERE p.id_product = a.id_product";
		$result = Db::getInstance()->ExecuteS($sql);

		$totalresult = array();

		$idProductWithCombis = array();
		foreach ($result as $stockDB){
			//Buscamos primero la combinación, si existe la actualizamos sino buscamos el producto
			//$combination = self::getCombinationByReference($stockDB['reference']);
			$combination = new Combination($stockDB['id']);
			$product = new Product($combination->id_product);
			$attributesName = $combination->getAttributesName($lang->id);

			$combiName = $product->name[$lang->id];
			foreach($attributesName as $aName)
			{
				$combiName .=":".$aName['name'];
			}

			//var_dump($combination->getAttributesName($lang->id));die;
			if($combination)
			{
				$stockData = new stdClass();
				$stockData->type = 'combination';
				$stockData->object_id = $stockDB['id'];
				$stockData->reference = '"'.$stockDB['reference'].'"';
				$stockData->name = '"'.preg_replace("/\"/","'",$combiName).'"';
				$stockData->real_stock = StockAvailable::getQuantityAvailableByProduct($combination->id_product, $combination->id);
				$totalresult[] = $stockData;
			}

			$idProductWithCombis[] = $combination->id_product;
		}

		$sql = "SELECT p.reference as reference, p.id_product as id from "._DB_PREFIX_."product p WHERE p.id_product";

		if(count($idProductWithCombis) > 0)
			$sql .= " not in (".implode(',', array_map("pSQL",$idProductWithCombis)).")";

		$result = Db::getInstance()->ExecuteS($sql);

		foreach ($result as $stockDB){
			//Buscamos primero la combinación, si existe la actualizamos sino buscamos el producto
			//$combination = self::getCombinationByReference($stockDB['reference']);
			$product = new Product($stockDB['id']);
			//var_dump($product);die;
			if($product)
			{
				$stockData = new stdClass();
				$stockData->type = 'product';
				$stockData->object_id = $stockDB['id'];
				$stockData->reference = '"'.$stockDB['reference'].'"';
				$stockData->name = '"'.preg_replace("/\"/","'",$product->name[$lang->id]).'"';
				$stockData->real_stock = StockAvailable::getQuantityAvailableByProduct($product->id);
				$totalresult[] = $stockData;
			}

		}

		return $totalresult;


	}

	public static function getDatasheetCurrentAlertConf(){

		$sql = "SELECT * from "._DB_PREFIX_."obsstocks_minstocks";
		$result = Db::getInstance()->ExecuteS($sql);

		$totalresult = array();

		foreach ($result as $minStockData){
			$stockData = new stdClass();
			$stockData->reference = '"'.$minStockData['reference'].'"';
			$stockData->alert_stock = $minStockData['min_stock'];
			$totalresult[] = $stockData;
		}

		return $totalresult;


	}

	public static function getProductByUidType($uid_value, $uid_type = 'reference')
	{

		if($uid_type == 'id')
			$uid_type = 'id_product';

		$result = Db::getInstance()->getRow("
			SELECT id_product
			FROM "._DB_PREFIX_."product
			WHERE ".pSQL($uid_type)." = '".pSQL($uid_value)."'");

		if($result)
			return new Product($result['id_product']);
		else
			return false;

	}

	public static function getCombinationByUidType($uid_value, $uid_type = 'reference')
	{

		$result = Db::getInstance()->getRow("
			SELECT id_product_attribute
			FROM "._DB_PREFIX_."product_attribute
			WHERE ".pSQL($uid_type)." = '".pSQL($uid_value)."'");

		if($result)
			return new Combination($result['id_product_attribute']);
		else
			return false;
	}

	public static function getProductsByUidType($uid_value, $uid_type = 'reference')
	{

		if($uid_type == 'id')
			$uid_type = 'id_product';

			return Db::getInstance()->ExecuteS("
			SELECT 'PRODUCT' as type, id_product
			FROM "._DB_PREFIX_."product
			WHERE ".pSQL($uid_type)." = '".pSQL($uid_value)."'");

	}

	public static function getCombinationsByUidType($uid_value, $uid_type = 'reference')
	{

		return Db::getInstance()->ExecuteS("
			SELECT 'COMBINATION' as type, id_product_attribute
			FROM "._DB_PREFIX_."product_attribute
			WHERE ".pSQL($uid_type)." = '".pSQL($uid_value)."'");

	}

	public static function createNewImportLog($import_method, $source){

		Db::getInstance()->Execute("
			INSERT INTO `"._DB_PREFIX_."obsstocks_log`
			(import_method, date, errors_nb, data_source) VALUES ('".pSQL($import_method)."',NOW(), 0, '".pSQL($source)."')");

		return (int)Db::getInstance()->Insert_ID();

	}

	public static function saveImportLogErrors($import_id, $errors_nb){

		$result = Db::getInstance()->Execute("
			UPDATE `"._DB_PREFIX_."obsstocks_log`
			SET `errors_nb` = ".(int) $errors_nb."
			WHERE `import_id` = ".(int) $import_id);

		return $result;
	}

	public static function deleteImportLogErrors($import_id){

		$result = Db::getInstance()->Execute("
			DELETE FROM `"._DB_PREFIX_."obsstocks_log`
			WHERE `import_id` = ".(int) $import_id);

		return $result;
	}

	public static function getLogs()
	{
		$result = array();
		$perPage = "5";

		$sql = "SELECT `import_id` as id, `import_method`, `date`, `errors_nb`, `data_source`
				FROM `"._DB_PREFIX_."obsstocks_log` ";
		$sql .= " ORDER BY `date` DESC ";

		$pag = 0;
		if (Tools::getIsset('pag'))
			$pag = (int)Tools::getValue('pag', 1) - 1;

		$sql .= ' LIMIT '.($pag * $perPage).','.$perPage;

		if (!$notifies = Db::getInstance()->executeS($sql))
			return false;

		$i = 0;
		foreach ($notifies as $notify)
		{
			$result[$i] = $notify;

			$i++;
		}

		return $result;
	}
}