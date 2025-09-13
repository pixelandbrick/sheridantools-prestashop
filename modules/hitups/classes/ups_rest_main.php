<?php
	/**
	 * 
	 */
	class ups_rest
	{
		public $mode = "test";
		public $orderCurrency = "";
		public $recCurrency = "";
		public $live_rate_url = "https://onlinetools.ups.com/api/rating/v2205/shop?additionalinfo=timeintransit";
		public $test_rate_url = "https://wwwcie.ups.com/api/rating/v2205/shop?additionalinfo=timeintransit";
		public $live_auth_url = "https://onlinetools.ups.com/security/v1/oauth/token";
		public $test_auth_url = "https://wwwcie.ups.com/security/v1/oauth/token";
		public $live_trk_url = "https://onlinetools.ups.com/api/track/v1/details/";
		public $test_trk_url = "https://wwwcie.ups.com/api/track/v1/details/";
		public $live_ship_url = "https://onlinetools.ups.com/api/shipments/v2205/ship";
		public $test_ship_url = "https://wwwcie.ups.com/api/shipments/v2205/ship";
		public $live_del_url = "https://onlinetools.ups.com/api/shipments/v1/void/cancel/";
		public $test_del_url = "https://wwwcie.ups.com/api/shipments/v1/void/cancel/";
		public $order_total = 0;
		public $total_pack_count = 0;
		public $total_pack_weight = 0;
		public $weg_unit = "";
		public $dim_unit = "";
		function __construct()
		{
			// code...
		}
		public function gen_access_token($grant_type='', $api_key='', $api_secret='')
		{
			$request_url = ($this->mode == "test") ? $this->test_auth_url : $this->live_auth_url;
			$curl = curl_init();
    				curl_setopt($curl, CURLOPT_POSTFIELDS, 'grant_type='.$grant_type);
    				curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
                    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    				curl_setopt_array($curl, array(
    					CURLOPT_URL            => $request_url,
    					CURLOPT_RETURNTRANSFER => true,
    					CURLOPT_ENCODING       => "",
    					CURLOPT_MAXREDIRS      => 10,
    					CURLOPT_TIMEOUT        => 60,
    					CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
    					CURLOPT_CUSTOMREQUEST  => 'POST',
    					CURLOPT_HTTPHEADER => array(
    						'Content-Type: application/x-www-form-urlencoded',
    						"x-merchant-id: ".$api_key,
    						"Authorization: Basic " . base64_encode($api_key.":".$api_secret)
    					)
    				));
    		$result = curl_exec($curl);
			if (!empty($result)) {
				$auth_data = json_decode($result);
				return isset($auth_data->access_token) ? $auth_data->access_token : "";
			}
			return;
		}
		public function make_rate_req_rest($general_settings=[], $ven_settings=[], $rec_addr=[], $packages=[])
		{
			if (isset($general_settings['hit_ups_auto_weight_unit']) && $general_settings['hit_ups_auto_weight_unit'] == "KG_CM") {
				$this->weg_unit = "KGS";
				$this->dim_unit = "CM";
			} else {
				$this->weg_unit = "LBS";
				$this->dim_unit = "IN";
			}
			
			$rate_req = [];
			$rate_req['RateRequest']['Request']['RequestOption'] = "Shoptimeintransit";
			if (isset($ven_settings['hit_ups_auto_country']) && $ven_settings['hit_ups_auto_country'] == "US") {
				$rate_req['RateRequest']['Request']['CustomerClassification'] = isset($general_settings['hit_ups_auto_customer_classification']) ? $general_settings['hit_ups_auto_customer_classification'] : "00";
			}
			$rate_req['RateRequest']['Shipment']['Shipper'] = $this->make_ship_addr($ven_settings);
			$rate_req['RateRequest']['Shipment']['ShipTo'] = $this->make_rec_addr($rec_addr);
			$rate_req['RateRequest']['Shipment']['ShipFrom'] = $this->make_ship_addr($ven_settings);
			$rate_req['RateRequest']['Shipment']['Package'] = $this->make_pack_info($packages);
			$rate_req['RateRequest']['Shipment']['ShipmentTotalWeight'] = [
				'UnitOfMeasurement' => [
					"Code" => $this->weg_unit,
					"Description" => ($this->weg_unit == "KGS") ? "Kilograms" : "Pounds"
				],
				'Weight' => substr(number_format($this->total_pack_weight, 4), 0, 6)
			];
			if (isset($general_settings['cod']) && $general_settings['cod'] == "Y") {
				$rate_req['RateRequest']['Shipment']['ShipmentServiceOptions'] = [
					'COD' => [
						'CODFundsCode' => '1',
						'CODAmount' => [
							"CurrencyCode" => $this->recCurrency,
							"MonetaryValue" => (string)$this->order_total
						]
					]
				];
			}
			$rate_req['RateRequest']['Shipment']['ShipmentRatingOptions'] = ['NegotiatedRatesIndicator' => "1"];
			$rate_req['RateRequest']['Shipment']['DeliveryTimeInformation'] = ['PackageBillType' => '03'];
			$rate_req['RateRequest']['Shipment']['InvoiceLineTotal'] = ["CurrencyCode" => $this->orderCurrency, "MonetaryValue" => (string)$this->order_total];
			// echo "<pre>";print_r($rate_req);die();
			return $rate_req;
		}
		private function make_ship_addr($ven_settings=[], $type="rate")
		{
			$ship_addr = [];
			if ($type=="ship") {
				$ship_addr['Name'] = isset($ven_settings['hit_ups_auto_shipper_company']) ? $ven_settings['hit_ups_auto_shipper_company'] : "";
				$ship_addr['AttentionName'] = isset($ven_settings['hit_ups_auto_shipper_name']) ? $ven_settings['hit_ups_auto_shipper_name'] : "";
				$ship_addr['ShipperNumber'] = isset($ven_settings['hit_ups_auto_rest_acc_no']) ? $ven_settings['hit_ups_auto_rest_acc_no'] : "";
				$ship_addr['Phone'] = ['Number' => isset($ven_settings['hit_ups_auto_phone']) ? $ven_settings['hit_ups_auto_phone'] : ""];
				$ship_addr['EMailAddress'] = isset($ven_settings['hit_ups_auto_email']) ? $ven_settings['hit_ups_auto_email'] : "";
			}
			$ship_addr['Address']['AddressLine'][] = isset($ven_settings['hit_ups_auto_address1']) ? $ven_settings['hit_ups_auto_address1'] : "";
			if (isset($ven_settings['hit_ups_auto_address2']) && !empty($ven_settings['hit_ups_auto_address2'])) {
				$ship_addr['Address']['AddressLine'][] = $ven_settings['hit_ups_auto_address2'];
			}
			$ship_addr['Address']['City'] = isset($ven_settings['hit_ups_auto_city']) ? $ven_settings['hit_ups_auto_city'] : "";
			$ship_addr['Address']['StateProvinceCode'] = isset($ven_settings['hit_ups_auto_state']) ? substr($ven_settings['hit_ups_auto_state'], 0, 2) : "";
			$ship_addr['Address']['PostalCode'] = isset($ven_settings['hit_ups_auto_zip']) ? $ven_settings['hit_ups_auto_zip'] : "";
			$ship_addr['Address']['CountryCode'] = isset($ven_settings['hit_ups_auto_country']) ? $ven_settings['hit_ups_auto_country'] : "";
			return $ship_addr;
		}
		private function make_rec_addr($rec_addr=[], $type="rate")
		{
			$rec_addr_info = [];
			if ($type=="ship") {
				$rec_addr_info['Name'] = (isset($rec_addr['company']) && !empty($rec_addr['company'])) ? substr($rec_addr['company'], 0, 35) : substr($rec_addr['name'], 0, 35);
				$rec_addr_info['AttentionName'] = isset($rec_addr['name']) ? substr($rec_addr['name'], 0, 35) : "";
				$rec_addr_info['Phone'] = ['Number' => isset($rec_addr['phone']) ? $rec_addr['phone'] : ""];
				$rec_addr_info['EMailAddress'] = isset($rec_addr['email']) ? $rec_addr['email'] : "";
			}
			$rec_addr_info['Address']['AddressLine'][] = isset($rec_addr['address_1']) ? $rec_addr['address_1'] : "";
			if (isset($rec_addr['address_2']) && !empty($rec_addr['address_2'])) {
				$rec_addr_info['Address']['AddressLine'][] = $rec_addr['address_2'];
			}
			$rec_addr_info['Address']['City'] = isset($rec_addr['city']) ? $rec_addr['city'] : "";
			$rec_addr_info['Address']['StateProvinceCode'] = isset($rec_addr['state']) ? substr($rec_addr['state'], 0, 2) : "";
			$rec_addr_info['Address']['PostalCode'] = isset($rec_addr['postcode']) ? $rec_addr['postcode'] : "";
			$rec_addr_info['Address']['CountryCode'] = isset($rec_addr['country']) ? $rec_addr['country'] : "";
			return $rec_addr_info;
		}
		private function make_pack_info($packs=[], $pack_type="02", $type="rate")
		{
			$packs_info = [];
			if (!empty($packs)) {
				foreach ($packs as $p_key => $pack) {
					$curr_pack_info = [];
					if ($type=="rate") {
						$curr_pack_info['PackagingType'] = ["Code" => $pack_type];
					} else {
						$curr_pack_info['Packaging'] = ["Code" => $pack_type];
					}
					$curr_pack_info['PackageWeight']['UnitOfMeasurement'] = [
						"Code" => $this->weg_unit,
						"Description" => ($this->weg_unit == "KGS") ? "Kilograms" : "Pounds"
					];
					$curr_pack_info['PackageWeight']['Weight'] = isset($pack['Weight']['Value']) ? substr(number_format($pack['Weight']['Value'], 4), 0, 6) : "0.5000";
					if (isset($pack["Dimensions"])) {
						$curr_pack_info['Dimensions']['UnitOfMeasurement'] = [
							"Code" => $this->dim_unit,
							"Description" => ($this->dim_unit == "KGS") ? "Centimeter" : "Inches"
						];
						$curr_pack_info['Dimensions']['Length'] = isset($pack['Dimensions']['Length']) ? substr(number_format($pack['Dimensions']['Length'], 4), 0, 6) : "0.5000";
						$curr_pack_info['Dimensions']['Width'] = isset($pack['Dimensions']['Width']) ? substr(number_format($pack['Dimensions']['Width'], 4), 0, 6) : "0.5000";
						$curr_pack_info['Dimensions']['Height'] = isset($pack['Dimensions']['Height']) ? substr(number_format($pack['Dimensions']['Height'], 4), 0, 6) : "0.5000";
					}
					$packs_info[] = $curr_pack_info;
					foreach ($pack['packed_products'] as $pp_key => $p_prods) {
						if (isset($p_prods['price'])) {
							$this->order_total += $p_prods['price'];
						}
					}
					$this->total_pack_weight += isset($pack['Weight']['Value']) ? substr(number_format($pack['Weight']['Value'], 4), 0, 6) : "0.5000";
					$this->total_pack_count++;
				}
			}
			return $packs_info;
		}
		public function get_rate_res_rest($req_data=[], $auth_tok="")
		{
			$request_url = ($this->mode == "test") ? $this->test_rate_url : $this->live_rate_url;
			$curl = curl_init();
    				curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($req_data));
    				curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
                    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    				curl_setopt_array($curl, array(
    					CURLOPT_URL            => $request_url,
    					CURLOPT_RETURNTRANSFER => true,
    					CURLOPT_ENCODING       => "",
    					CURLOPT_MAXREDIRS      => 10,
    					CURLOPT_TIMEOUT        => 60,
    					CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
    					CURLOPT_CUSTOMREQUEST  => 'POST',
    					CURLOPT_HTTPHEADER => array(
    						'Content-Type: application/json',
    						"Authorization: Bearer " . $auth_tok
    					)
    				));
    		$result = curl_exec($curl);
    		if (!empty($result)) {
    			$rate_res_data = json_decode($result);
				return $rate_res_data;
    		}
			return;
		}
		public function get_ship_res_rest($req_data=[], $auth_tok="")
		{
			$request_url = ($this->mode == "test") ? $this->test_ship_url : $this->live_ship_url;
			$curl = curl_init();
    				curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($req_data));
    				curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
                    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    				curl_setopt_array($curl, array(
    					CURLOPT_URL            => $request_url,
    					CURLOPT_RETURNTRANSFER => true,
    					CURLOPT_ENCODING       => "",
    					CURLOPT_MAXREDIRS      => 10,
    					CURLOPT_TIMEOUT        => 60,
    					CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
    					CURLOPT_CUSTOMREQUEST  => 'POST',
    					CURLOPT_HTTPHEADER => array(
    						'Content-Type: application/json',
    						"Authorization: Bearer " . $auth_tok
    					)
    				));
    		$result = curl_exec($curl);
			if (!empty($result)) {
    			$result = json_decode($result);
    		}
			return $result;
		}
		public function get_ship_del_res_rest($ship_id=[], $auth_tok="")
		{
			$request_url = ($this->mode == "test") ? $this->test_del_url.$ship_id : $this->live_del_url.$ship_id;
			$curl = curl_init();
    				curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
                    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    				curl_setopt_array($curl, array(
    					CURLOPT_URL            => $request_url,
    					CURLOPT_RETURNTRANSFER => true,
    					CURLOPT_ENCODING       => "",
    					CURLOPT_MAXREDIRS      => 10,
    					CURLOPT_TIMEOUT        => 60,
    					CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
    					CURLOPT_CUSTOMREQUEST  => 'DELETE',
    					CURLOPT_HTTPHEADER => array(
    						"Authorization: Bearer " . $auth_tok
    					)
    				));
    		$result = curl_exec($curl);
			if (!empty($result)) {
    			$result = json_decode($result);
    		}
			return $result;
		}
		public function make_ship_req($gen_settings=[], $ven_settings=[], $toaddress=[], $package=[])
		{
			if (isset($general_settings['hit_ups_auto_weight_unit']) && $general_settings['hit_ups_auto_weight_unit'] == "KG_CM") {
				$this->weg_unit = "KGS";
				$this->dim_unit = "CM";
			} else {
				$this->weg_unit = "LBS";
				$this->dim_unit = "IN";
			}
			$ship_req = [];
			$ship_req['ShipmentRequest']['Request'] = ['RequestOption' => 'nonvalidate'];
			$ship_req['ShipmentRequest']['Shipment']['Description'] = isset($gen_settings['shipment_content']) ? $gen_settings['shipment_content'] : "";
			$ship_req['ShipmentRequest']['Shipment']['Shipper'] = $this->make_ship_addr($ven_settings, "ship");
			$ship_req['ShipmentRequest']['Shipment']['ShipFrom'] = $this->make_ship_addr($ven_settings, "ship");	// Required for return or different shipper location
			$ship_req['ShipmentRequest']['Shipment']['ShipTo'] = $this->make_rec_addr($toaddress, "ship");
			if (isset($gen_settings['dutiable']) && $gen_settings['dutiable'] == "S" && $this->dutyCheck($ven_settings['hit_ups_auto_country'], $toaddress['country'])) {
				$ship_req['ShipmentRequest']['Shipment']['PaymentInformation']['ShipmentCharge'] = [
					[
						'Type' => "02",
						'BillShipper' => [
							'AccountNumber' => isset($ven_settings['hit_ups_auto_rest_acc_no']) ? $ven_settings['hit_ups_auto_rest_acc_no'] : ""
						]
					],
					[
						'Type' => "01",
						'BillShipper' => [
							'AccountNumber' => isset($ven_settings['hit_ups_auto_rest_acc_no']) ? $ven_settings['hit_ups_auto_rest_acc_no'] : ""
						]
					]
				];
			}
			$ship_req['ShipmentRequest']['Shipment']['ShipmentRatingOptions'] = ['NegotiatedRatesIndicator' => "1"];
			$ship_req['ShipmentRequest']['Shipment']['Service'] = ['Code' => isset($gen_settings['service_code']) ? $gen_settings['service_code'] : ""];
			$ship_req['ShipmentRequest']['Shipment']['Package'] = $this->make_pack_info($package, $gen_settings['pack_type'], "ship");
			$ship_req['ShipmentRequest']['Shipment']['InvoiceLineTotal'] = ['CurrencyCode' => $this->orderCurrency, 'MonetaryValue' => substr(number_format($this->order_total, 2), 0, 11)];
			// $ship_req['ShipmentRequest']['Shipment']['ShipmentServiceOptions']['InternationalForms'] = $this->make_international_forms($gen_settings, $ven_settings);
			if (isset($gen_settings['cod']) && $gen_settings['cod'] == "Y") {
				$ship_req['ShipmentRequest']['Shipment']['ShipmentServiceOptions']['COD'] = [
					'CODFundsCode' => '1',
					'CODAmount' => [
						"CurrencyCode" => $this->recCurrency,
						"MonetaryValue" => (string)$this->order_total
					]
				];
			}
			if(isset($gen_settings['return']) && $gen_settings['return'] == "1"){
				$ship_req['ShipmentRequest']['Shipment']['ReturnService'] = ['Code' => '9'];
			}
			$ship_req['ShipmentRequest']['LabelSpecification'] = [
				'LabelImageFormat' => ['Code' => 'GIF'],
				// 'LabelStockSize' => []
			];
			return $ship_req;
		}
		private function dutyCheck($from_con="", $to_con="")
		{
			$eu_countrycodes = array(
				'AT', 'BE', 'BG', 'CY', 'CZ', 'DE', 'DK', 'EE', 
				'ES', 'FI', 'FR', 'HU', 'IE', 'IT', 'LT', 'LU', 'LV',
				'MT', 'NL', 'PL', 'PT', 'RO', 'SE', 'SI', 'SK',	'HR', 'GR'
			);
			if (isset($to_con) && isset($from_con)) {
				if ( ($to_con == "US" && $from_con == "PR") || ($to_con == "PR" && $from_con == "US") ) {
					return false;
				}
				if (in_array($to_con, $eu_countrycodes) && in_array($from_con, $eu_countrycodes)) {
					return false;
				}
				return true;
			}
			return false;
		}
		private function make_international_forms($data=[], $ven_settings=[])
		{
			$inter_forms = [];
			$inter_forms['FormType'] = "01";
			$inter_forms['InvoiceDate'] = date("Ymd");
			$inter_forms['ReasonForExport'] = "SALE";
			$inter_forms['CurrencyCode'] = $this->orderCurrency;
			$products = isset($data['products']) ? $data['products'] : [];
			foreach ($products as $key => $prod) {
				$inter_forms['Product'][] = [
					'Description' => isset($prod['product_name']) ? substr($prod['product_name'], 0, 34) : "",
					'Unit' => [
						'Number' => isset($prod['product_quantity']) ? $prod['product_quantity'] : "",
						'UnitOfMeasurement' => ['Code' => 'PCS'],
						'Value' => isset($prod['price']) ? $prod['price'] : ""
					],
					'OriginCountryCode' => isset($ven_settings['hit_ups_auto_country']) ? $ven_settings['hit_ups_auto_country'] : "",
					'ProductWeight' => [
						'UnitOfMeasurement' => ['Code' => $this->weg_unit],
						'Weight' => isset($prod['weight']) ? substr(number_format($prod['weight'], 1), 0, 5) : ""
					],
					// 'TermsOfShipment' => 'DDP',
					// 'ReasonForExport' => 'SALE'
				];
			}
			return $inter_forms;
		}
	}