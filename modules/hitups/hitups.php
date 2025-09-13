<?php
/**
 * 2007-2018 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/afl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 *  @author    PrestaShop SA <contact@prestashop.com>
 *  @copyright 2007-2018 PrestaShop SA
 *  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 *  International Registered Trademark & Property of PrestaShop SA
 */

if (!defined('_PS_VERSION_')) {
	exit;
}

class Hitups extends CarrierModule
{
	protected $config_form = false;
	public $id_carrier;
	public static $isoCountryFix = array(
		'BL' => 'XY',
	);
	protected $_carriers = array(
		//"Public carrier name" => "technical name",
		'ups_12'                    => '3 Day Select',
		'ups_03'                    => 'Ground',
		'ups_02'                    => '2nd Day Air',
		'ups_59'                    => '2nd Day Air AM',
		'ups_01'                    => 'Next Day Air',
		'ups_13'                    => 'Next Day Air Saver',
		'ups_14'                    => 'Next Day Air Early AM',
		'ups_11'                    => 'UPS Standard',
		'ups_07'                    => 'UPS Express',
		'ups_08'                    => 'UPS Expedited',
		'ups_54'                    => 'UPS Express Plus',
		'ups_65'                    => 'UPS Saver',
		'ups_92'                    => 'SurePost Less than 1 lb',
		'ups_93'                    => 'SurePost 1 lb or Greater',
		'ups_94'                    => 'SurePost BPM',
		'ups_95'                    => 'SurePost Media',
		'ups_08'                    => 'UPS ExpeditedSM',
		'ups_82'                    => 'Today Standard',
		"ups_83"					=> "UPS Today Dedicated Courier",
		"ups_84"					=> "UPS Today Intercity",
		"ups_85"					=> "UPS Today Express",
		"ups_86" 					=> "UPS Today Express Saver",
		'ups_M2'                    => 'First Class Mail',
		'ups_M3'                    => 'Priority Mail',
		'ups_M4'                    => 'Expedited Mail Innovations',
		'ups_M5'                    => 'Priority Mail Innovations',
		'ups_M6'                    => 'EconomyMail Innovations',
		'ups_70'                    => 'Access Point Economy',
		'ups_96'                    => 'Worldwide Express Freight',
		'ups_308'					=> 'UPS Freight LTL',
		'ups_309'					=> 'UPS Freight LTL Guaranteed',
		'ups_334'					=> 'UPS Freight LTL Guaranteed AM',
		'ups_349'					=> 'UPS Standard LTL'

	);

	protected $packing_types_ser = array(
		'02' => 'Customer Supplied Package',
		'01' => 'UPS Letter',
		'03' => 'Tube',
		'04' => 'PAK',
		'21' => 'UPS Express Box',
		'24' => 'UPS 25KG Box',
		'25' => 'UPS 10KG Box',
		'30' => 'Pallet',
		'2a' => 'Small Express Box',
		'2b' => 'Medium Express Box',
		'2c' => 'Large Express Box',
		'56' => 'Flats 57 = Parcels',
		'58' => 'BPM 59 = First Class',
		'60' => 'Priority',
		'61' => 'Machinables',
		'62' => 'Irregulars',
		'63' => 'Parcel Post',
		'64' => 'BPM Parcel',
		'65' => 'Media Mail',
		'66' => 'BPM Flat',
		'67' => 'Standard Flat',
	);
	public function __construct()
	{
		$this->name = 'hitups';
		$this->tab = 'shipping_logistics';
		$this->version = '3.0.0';
		$this->author = 'HIT Tech Market';
		$this->need_instance = 0;
		$this->module_key = 'c6c8d8c2815533fc772d742513f49e3a';
		$this->author_address = '0x46F8Cc515e15396c7D3d8eE6e7Bc7E1BC5Dc19D6';
		/**
		 * Set $this->bootstrap to true if your module is compliant with bootstrap (PrestaShop 1.6)
		 */
		$this->bootstrap = true;

		parent::__construct();

		$this->displayName = $this->l('UPS Shipping Module With Print Label');
		$this->description = $this->l('Displays UPS Live Shipping Rates based on the Shipping Address and Cart Content. supports UPS Label Printing & Tracking');

		$this->confirmUninstall = $this->l('Are You Sure?');

		$this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_);
	}

	/**
	 * Don't forget to create update methods if needed:
	 * http://doc.prestashop.com/display/PS16/Enabling+the+Auto-Update
	 */
	public function install()
	{
		if (extension_loaded('curl') == false) {
			$this->_errors[] = $this->l('You have to enable the cURL extension on your server to install this module');
			return false;
		}
		foreach ($this->_carriers as $key => $value) {

			$check_old = Configuration::get('HITUPS_' . $key);
			if (!$check_old) {
				$carrier = $this->addCarrier($key, $value);
				$this->addZones($carrier);
				$this->addGroups($carrier);
				$this->addRanges($carrier);
			}
		}

		return parent::install() &&
			$this->registerHook('header') &&
			$this->registerHook('updateCarrier') &&
			$this->registerHook('actionCarrierProcess') &&
			$this->registerHook('actionCarrierUpdate') &&
			$this->registerHook('actionOrderDetail') &&
			// $this->registerHook('displayAdminOrder') &&
			$this->registerHook('displayAdminOrderContentShip') &&
			$this->registerHook('displayAdminOrderTabShip') &&
			$this->registerHook('displayBeforeCarrier') &&
			$this->registerHook('displayCarrierExtraContent') &&
			$this->registerHook('actionProductUpdate') &&
			$this->registerHook('displayAdminProductsExtra') &&
			$this->registerHook('displayCarrierList') &&
			$this->registerHook('displayAdminOrderTabContent');
	}

	public function uninstall()
	{

		return parent::uninstall();
	}

	/**
	 * Load the configuration form
	 */
	public function getContent()
	{
		/**
		 * If values have been submitted in the form, process.
		 */

		$output = "";
		if (((bool)Tools::isSubmit('hit_button_submit')) == true) {
			$this->hit_postProcess();
			if ((Tools::getValue('hit_ups_shipping_shipper_person_name') == '') || (Tools::getValue('hit_ups_shipping_shipper_company_name') == '') || (Tools::getValue('hit_ups_shipping_shipper_phone_number') == '')  || (Tools::getValue('hit_ups_shipping_freight_shipper_city') == '') || (Tools::getValue('hit_ups_shipping_freight_shipper_state') == '') || (Tools::getValue('hit_ups_shipping_base_country') == '') || (Tools::getValue('hit_ups_shipping_origin') == '')) {
				$output = $this->displayError($this->l('Dont Leave the Important fields as Empty.'));
			} elseif (Tools::getValue('hit_ups_shipping_packing_type') == null) {
				$output = $this->displayError($this->l('Please Select Your Packing Type.'));
			} else {
				$output = $this->displayConfirmation($this->l('Settings saved successfully.'));
			}
		}
		if (((bool)Tools::isSubmit('hit_ups_shipping_recrate_carriers')) == true) {
			foreach ($this->_carriers as $key => $value) {
				$check_old = Configuration::get('HITUPS_' . $key);
				$carrier = $this->addCarrier($key, $value);
				$this->addZones($carrier);
				$this->addGroups($carrier);
				$this->addRanges($carrier);
			}
			$output = $this->displayConfirmation($this->l('Carriers created successfully.'));
		}
		
		$this->context->smarty->assign('module_dir', $this->_path);
		$general_settings = $this->hit_get_ups_data_db();

		//to continue

		$custom_services = Configuration::get('hit_ups_shipping_services_adj');

		$custom_boxes = Configuration::get('hit_ups_shipping_services_box');
		$is_json = '';
		if (!empty($custom_services)) {
			$is_json = $this->isJson($custom_services);
			if($is_json){
			$custom_services = json_decode($custom_services,true);
			}else{
				$custom_services = Tools::unSerialize($custom_services);
			}
		} else {
			$custom_services = $this->_carriers;
		}
		if (!empty($custom_boxes)) {
			$boxes = json_decode($custom_boxes,true);
		} else {
			$boxes = array();
		}

		$this->context->smarty->assign('services', $custom_services);
		$slected_pack_type = isset($general_settings['shp_pack_type']) ? $general_settings['shp_pack_type'] : 'BOX';
		$this->context->smarty->assign('general_settings', $general_settings);

		$countires =  array(
			'AF' => 'Afghanistan',
			'AX' => 'Aland Islands',
			'AL' => 'Albania',
			'DZ' => 'Algeria',
			'AS' => 'American Samoa',
			'AD' => 'Andorra',
			'AO' => 'Angola',
			'AI' => 'Anguilla',
			'AQ' => 'Antarctica',
			'AG' => 'Antigua and Barbuda',
			'AR' => 'Argentina',
			'AM' => 'Armenia',
			'AW' => 'Aruba',
			'AU' => 'Australia',
			'AT' => 'Austria',
			'AZ' => 'Azerbaijan',
			'BS' => 'Bahamas',
			'BH' => 'Bahrain',
			'BD' => 'Bangladesh',
			'BB' => 'Barbados',
			'BY' => 'Belarus',
			'BE' => 'Belgium',
			'BZ' => 'Belize',
			'BJ' => 'Benin',
			'BM' => 'Bermuda',
			'BT' => 'Bhutan',
			'BO' => 'Bolivia',
			'BQ' => 'Bonaire, Saint Eustatius and Saba',
			'BA' => 'Bosnia and Herzegovina',
			'BW' => 'Botswana',
			'BV' => 'Bouvet Island',
			'BR' => 'Brazil',
			'IO' => 'British Indian Ocean Territory',
			'VG' => 'British Virgin Islands',
			'BN' => 'Brunei',
			'BG' => 'Bulgaria',
			'BF' => 'Burkina Faso',
			'BI' => 'Burundi',
			'KH' => 'Cambodia',
			'CM' => 'Cameroon',
			'CA' => 'Canada',
			'CV' => 'Cape Verde',
			'KY' => 'Cayman Islands',
			'CF' => 'Central African Republic',
			'TD' => 'Chad',
			'CL' => 'Chile',
			'CN' => 'China',
			'CX' => 'Christmas Island',
			'CC' => 'Cocos Islands',
			'CO' => 'Colombia',
			'KM' => 'Comoros',
			'CK' => 'Cook Islands',
			'CR' => 'Costa Rica',
			'HR' => 'Croatia',
			'CU' => 'Cuba',
			'CW' => 'Curacao',
			'CY' => 'Cyprus',
			'CZ' => 'Czech Republic',
			'CD' => 'Democratic Republic of the Congo',
			'DK' => 'Denmark',
			'DJ' => 'Djibouti',
			'DM' => 'Dominica',
			'DO' => 'Dominican Republic',
			'TL' => 'East Timor',
			'EC' => 'Ecuador',
			'EG' => 'Egypt',
			'SV' => 'El Salvador',
			'GQ' => 'Equatorial Guinea',
			'ER' => 'Eritrea',
			'EE' => 'Estonia',
			'ET' => 'Ethiopia',
			'FK' => 'Falkland Islands',
			'FO' => 'Faroe Islands',
			'FJ' => 'Fiji',
			'FI' => 'Finland',
			'FR' => 'France',
			'GF' => 'French Guiana',
			'PF' => 'French Polynesia',
			'TF' => 'French Southern Territories',
			'GA' => 'Gabon',
			'GM' => 'Gambia',
			'GE' => 'Georgia',
			'DE' => 'Germany',
			'GH' => 'Ghana',
			'GI' => 'Gibraltar',
			'GR' => 'Greece',
			'GL' => 'Greenland',
			'GD' => 'Grenada',
			'GP' => 'Guadeloupe',
			'GU' => 'Guam',
			'GT' => 'Guatemala',
			'GG' => 'Guernsey',
			'GN' => 'Guinea',
			'GW' => 'Guinea-Bissau',
			'GY' => 'Guyana',
			'HT' => 'Haiti',
			'HM' => 'Heard Island and McDonald Islands',
			'HN' => 'Honduras',
			'HK' => 'Hong Kong',
			'HU' => 'Hungary',
			'IS' => 'Iceland',
			'IN' => 'India',
			'ID' => 'Indonesia',
			'IR' => 'Iran',
			'IQ' => 'Iraq',
			'IE' => 'Ireland',
			'IM' => 'Isle of Man',
			'IL' => 'Israel',
			'IT' => 'Italy',
			'CI' => 'Ivory Coast',
			'JM' => 'Jamaica',
			'JP' => 'Japan',
			'JE' => 'Jersey',
			'JO' => 'Jordan',
			'KZ' => 'Kazakhstan',
			'KE' => 'Kenya',
			'KI' => 'Kiribati',
			'XK' => 'Kosovo',
			'KW' => 'Kuwait',
			'KG' => 'Kyrgyzstan',
			'LA' => 'Laos',
			'LV' => 'Latvia',
			'LB' => 'Lebanon',
			'LS' => 'Lesotho',
			'LR' => 'Liberia',
			'LY' => 'Libya',
			'LI' => 'Liechtenstein',
			'LT' => 'Lithuania',
			'LU' => 'Luxembourg',
			'MO' => 'Macao',
			'MK' => 'Macedonia',
			'MG' => 'Madagascar',
			'MW' => 'Malawi',
			'MY' => 'Malaysia',
			'MV' => 'Maldives',
			'ML' => 'Mali',
			'MT' => 'Malta',
			'MH' => 'Marshall Islands',
			'MQ' => 'Martinique',
			'MR' => 'Mauritania',
			'MU' => 'Mauritius',
			'YT' => 'Mayotte',
			'MX' => 'Mexico',
			'FM' => 'Micronesia',
			'MD' => 'Moldova',
			'MC' => 'Monaco',
			'MN' => 'Mongolia',
			'ME' => 'Montenegro',
			'MS' => 'Montserrat',
			'MA' => 'Morocco',
			'MZ' => 'Mozambique',
			'MM' => 'Myanmar',
			'NA' => 'Namibia',
			'NR' => 'Nauru',
			'NP' => 'Nepal',
			'NL' => 'Netherlands',
			'NC' => 'New Caledonia',
			'NZ' => 'New Zealand',
			'NI' => 'Nicaragua',
			'NE' => 'Niger',
			'NG' => 'Nigeria',
			'NU' => 'Niue',
			'NF' => 'Norfolk Island',
			'KP' => 'North Korea',
			'MP' => 'Northern Mariana Islands',
			'NO' => 'Norway',
			'OM' => 'Oman',
			'PK' => 'Pakistan',
			'PW' => 'Palau',
			'PS' => 'Palestinian Territory',
			'PA' => 'Panama',
			'PG' => 'Papua New Guinea',
			'PY' => 'Paraguay',
			'PE' => 'Peru',
			'PH' => 'Philippines',
			'PN' => 'Pitcairn',
			'PL' => 'Poland',
			'PT' => 'Portugal',
			'PR' => 'Puerto Rico',
			'QA' => 'Qatar',
			'CG' => 'Republic of the Congo',
			'RE' => 'Reunion',
			'RO' => 'Romania',
			'RU' => 'Russia',
			'RW' => 'Rwanda',
			'BL' => 'Saint Barthelemy',
			'SH' => 'Saint Helena',
			'KN' => 'Saint Kitts and Nevis',
			'LC' => 'Saint Lucia',
			'MF' => 'Saint Martin',
			'PM' => 'Saint Pierre and Miquelon',
			'VC' => 'Saint Vincent and the Grenadines',
			'WS' => 'Samoa',
			'SM' => 'San Marino',
			'ST' => 'Sao Tome and Principe',
			'SA' => 'Saudi Arabia',
			'SN' => 'Senegal',
			'RS' => 'Serbia',
			'SC' => 'Seychelles',
			'SL' => 'Sierra Leone',
			'SG' => 'Singapore',
			'SX' => 'Sint Maarten',
			'SK' => 'Slovakia',
			'SI' => 'Slovenia',
			'SB' => 'Solomon Islands',
			'SO' => 'Somalia',
			'ZA' => 'South Africa',
			'GS' => 'South Georgia and the South Sandwich Islands',
			'KR' => 'South Korea',
			'SS' => 'South Sudan',
			'ES' => 'Spain',
			'LK' => 'Sri Lanka',
			'SD' => 'Sudan',
			'SR' => 'Suriname',
			'SJ' => 'Svalbard and Jan Mayen',
			'SZ' => 'Swaziland',
			'SE' => 'Sweden',
			'CH' => 'Switzerland',
			'SY' => 'Syria',
			'TW' => 'Taiwan',
			'TJ' => 'Tajikistan',
			'TZ' => 'Tanzania',
			'TH' => 'Thailand',
			'TG' => 'Togo',
			'TK' => 'Tokelau',
			'TO' => 'Tonga',
			'TT' => 'Trinidad and Tobago',
			'TN' => 'Tunisia',
			'TR' => 'Turkey',
			'TM' => 'Turkmenistan',
			'TC' => 'Turks and Caicos Islands',
			'TV' => 'Tuvalu',
			'VI' => 'U.S. Virgin Islands',
			'UG' => 'Uganda',
			'UA' => 'Ukraine',
			'AE' => 'United Arab Emirates',
			'GB' => 'United Kingdom',
			'US' => 'United States',
			'UM' => 'United States Minor Outlying Islands',
			'UY' => 'Uruguay',
			'UZ' => 'Uzbekistan',
			'VU' => 'Vanuatu',
			'VA' => 'Vatican',
			'VE' => 'Venezuela',
			'VN' => 'Vietnam',
			'WF' => 'Wallis and Futuna',
			'EH' => 'Western Sahara',
			'YE' => 'Yemen',
			'ZM' => 'Zambia',
			'ZW' => 'Zimbabwe',
		);
		$selected_excountrys = array();

		if (isset($general_settings['exclude']) && !empty($general_settings['exclude'])) {
			$selected_excountrys = explode(',', $general_settings['exclude']);
		}
		$selected_excus = array();

		if (isset($general_settings['excus']) && !empty($general_settings['excus'])) {
			$selected_excus = explode(',', $general_settings['excus']);
		}

		$weight_type =  array('pack_descending' => $this->l('Pack heavier items first'), 'pack_ascending' => $this->l('Pack lighter items first'), 'pack_simple' => $this->l('Pack purely divided by weight'));
		$slected_weight_type = isset($general_settings['weight_packing_process']) ? $general_settings['weight_packing_process'] : 'pack_descending';
		$print_size = array('8X4_A4_PDF' => '8X4_A4_PDF', '8X4_thermal' => '8X4_thermal', '8X4_A4_TC_PDF' => '8X4_A4_TC_PDF', '8X4_CI_PDF' => '8X4_CI_PDF', '8X4_CI_thermal' => '8X4_CI_thermal', '8X4_RU_A4_PDF' => '8X4_RU_A4_PDF', '8X4_PDF' => '8X4_PDF', '8X4_CustBarCode_PDF' => '8X4_CustBarCode_PDF', '8X4_CustBarCode_thermal' => '8X4_CustBarCode_thermal', '6X4_A4_PDF' => '6X4_A4_PDF', '6X4_thermal' => '6X4_thermal', '6X4_PDF' => '6X4_PDF');
		$printer_doc_type = array('PDF' => 'PDF Output', 'ZPL2' => 'ZPL2 Output', 'EPL2' => 'EPL2 Output');
		$duty_payment_type = array('' => 'None', 'S' => 'Shipper', 'R' => 'Recipient', 'T' => 'Third Party/Other');
		$selected_print_size_value = !empty($general_settings['output_format']) ? $general_settings['output_format'] : '6X4_A4_PDF';
		$slected_doc_type = !empty($general_settings['image_type']) ? $general_settings['image_type'] : 'PDF';
		$selected_pay_type = isset($general_settings['dutypayment_type']) ? $general_settings['dutypayment_type'] : '';
		$classification = array("00" => "Rate associated with account number", "00" => "Rate Type based on the shipper's country or territory","01"=>"Daily Rates","04"=>"Retail Rates","53"=>"Standard List Rates","06"=>"General List Rates","07"=>"Alternative Zoning","08"=>"General List Rates II","09"=>"SMB Loyalty","10"=>"All Inclusive","11"=>"Value Bundle I","none"=>"None");
		$customer = new Customer(true);
		$list_of_customers = $customer->getCustomers();
		$list_cus = array();
		foreach ($list_of_customers as $value) {
			$list_cus[$value['id_customer']] = $value['firstname'] . ' ' . $value['lastname'];
		}

		$this->context->smarty->assign('list_cus', $list_cus);

		$this->context->smarty->assign('countires', $countires);
		$this->context->smarty->assign('selected_excountrys', $selected_excountrys);
		$this->context->smarty->assign('selected_excus', $selected_excus);


		$this->context->smarty->assign('boxes', $boxes);
		$this->context->smarty->assign('weight_type', $weight_type);
		$this->context->smarty->assign('slected_weight_type', $slected_weight_type);
		$this->context->smarty->assign('print_size', $print_size);
		$this->context->smarty->assign('selected_print_size_value', $selected_print_size_value);
		$this->context->smarty->assign('printer_doc_type', $printer_doc_type);
		$this->context->smarty->assign('slected_doc_type', $slected_doc_type);
		$this->context->smarty->assign('duty_payment_type', $duty_payment_type);
		$this->context->smarty->assign('classification', $classification);


		$output .= $this->context->smarty->fetch($this->local_path . 'views/templates/admin/configure.tpl');

		return $output;
	}
	public function hit_get_ups_data_db()
	{
		$initial_values = 	array(
			'production' => Configuration::get('hit_ups_shipping_production', ''),
			'account_number'	=> Configuration::get('hit_ups_shipping_account_number', ''),
			'site_id' => Configuration::get('hit_ups_shipping_site_id', ''),
			'site_pwd' => Configuration::get('hit_ups_shipping_site_pwd', ''),
			'site_acess' => Configuration::get('hit_ups_shipping_site_acess', ''),
			'api_type' => Configuration::get('hit_ups_shipping_api_type', ''),
			'rest_client_id' => Configuration::get('hit_ups_shipping_rest_client_id', ''),
			'rest_client_sec' => Configuration::get('hit_ups_shipping_rest_client_sec', ''),
			'rest_acc_no' => Configuration::get('hit_ups_shipping_rest_acc_no', ''),
			'rest_grant_type' => Configuration::get('hit_ups_shipping_rest_grant_type', ''),
			'rate_live' => Configuration::get('hit_ups_shipping_rate_live', 'yes'),
			'rate_insure' => Configuration::get('hit_ups_shipping_rate_insure', 'no'),
			'customer_classification' => Configuration::get('hit_ups_shipping_customer_classification', ''),
			'request_type' => Configuration::get('hit_ups_shipping_request_type', 'no'),
			'rate_with_tax' => Configuration::get('hit_ups_shipping_rate_with_tax', 'no'),
			'shipper_person_name' => Configuration::get('hit_ups_shipping_shipper_person_name', ''),
			'shipper_company_name' => Configuration::get('hit_ups_shipping_shipper_company_name', ''),
			'shipper_phone_number' => Configuration::get('hit_ups_shipping_shipper_phone_number', ''),
			'shipper_email' => Configuration::get('hit_ups_shipping_shipper_email', ''),
			'freight_shipper_street' => Configuration::get('hit_ups_shipping_freight_shipper_street', ''),
			'shipper_street_2' => Configuration::get('hit_ups_shipping_shipper_street_2', ''),
			'freight_shipper_city' => Configuration::get('hit_ups_shipping_freight_shipper_city', ''),
			'freight_shipper_state' => Configuration::get('hit_ups_shipping_freight_shipper_state', ''),
			'origin' => Configuration::get('hit_ups_shipping_origin', ''),
			'base_country' => Configuration::get('hit_ups_shipping_base_country', ''),
			'packing_type' => Configuration::get('hit_ups_shipping_packing_type', 'per_item'),
			'weg_dim' => Configuration::get('hit_ups_shipping_weg_dim', 'BOX'),
			'box_max_weight' => Configuration::get('hit_ups_shipping_box_max_weight', '0'),
			'weight_packing_process' => Configuration::get('hit_ups_shipping_weight_packing_process', '0'),
			'dimension_send' => Configuration::get('hit_ups_shipping_dimension_send', 'no'),
			'dev_f' => Configuration::get('hit_ups_shipping_dev_f'),
			'dev_b' => Configuration::get('hit_ups_shipping_dev_b'),
			'exclude' => Configuration::get('hit_ups_shipping_exclude'),
			'excus' => Configuration::get('hit_ups_shipping_excus'),
			'sig_req' => Configuration::get('hit_ups_shipping_sig_req'),
			'label_format' => Configuration::get('hit_ups_shipping_label_format'),
			'osd' => Configuration::get('hit_ups_shipping_osd'),
			'oss' => Configuration::get('hit_ups_shipping_oss'),
			'cod' => Configuration::get('hit_ups_shipping_cod'),
			'admin_fol' => Configuration::get('hit_ups_shipping_admin_fol'),
			//'' => Configuration::get(''),
		);

		return $initial_values;
	}
	public function hit_object_to_array($data)
	{
		if (is_array($data) || is_object($data)) {
			$result = array();
			foreach ($data as $key => $value) {
				$result[$key] = $this->hit_object_to_array($value);
			}
			return $result;
		}
		return $data;
	}

	/**
	 * Save form data.
	 */
	protected function hit_postProcess()
	{
		$selected_excludes = (array) Tools::getValue('hit_ups_shipping_exclude', null);
		if (is_array($selected_excludes)) {
			$selected_excludes = implode(',', $selected_excludes);
		}
		$selected_excus = (array) Tools::getValue('hit_ups_shipping_excus', null);
		if (is_array($selected_excus)) {
			$selected_excus = implode(',', $selected_excus);
		}
		$form_values = array(
			'production' => pSQL(Tools::getValue('hit_ups_shipping_production', 'test')),
			'account_number'	=> pSQL(Tools::getValue('hit_ups_shipping_ac_num', null)),
			'site_id' => pSQL(Tools::getValue('hit_ups_shipping_site_id', null)),
			'site_pwd' => pSQL(Tools::getValue('hit_ups_shipping_site_pwd', null)),
			'site_acess' => pSQL(Tools::getValue('hit_ups_shipping_site_acess', null)),
			'api_type' => pSQL(Tools::getValue('hit_ups_shipping_api_type', null)),
			'rest_client_id' => pSQL(Tools::getValue('hit_ups_shipping_rest_client_id', null)),
			'rest_client_sec' => pSQL(Tools::getValue('hit_ups_shipping_rest_client_sec', null)),
			'rest_acc_no' => pSQL(Tools::getValue('hit_ups_shipping_rest_acc_no', null)),
			'rest_grant_type' => pSQL(Tools::getValue('hit_ups_shipping_rest_grant_type', null)),
			'rate_live' => pSQL(Tools::getValue('hit_ups_shipping_rate_live', 'no')),
			'rate_insure' => pSQL(Tools::getValue('hit_ups_shipping_rate_insure' . null)),
			'customer_classification' => pSQL(Tools::getValue('hit_ups_shipping_customer_classification' . null)),
			'request_type' => pSQL(Tools::getValue('hit_ups_shipping_request_type', null)),
			'rate_with_tax' => pSQL(Tools::getValue('hit_ups_shipping_rate_with_tax', null)),
			'shipper_person_name' => pSQL(Tools::getValue('hit_ups_shipping_shipper_person_name', null)),
			'shipper_company_name' => pSQL(Tools::getValue('hit_ups_shipping_shipper_company_name', null)),
			'shipper_email' => pSQL(Tools::getValue('hit_ups_shipping_shipper_email', null)),
			'freight_shipper_street' => pSQL(Tools::getValue('hit_ups_shipping_freight_shipper_street', null)),
			'shipper_street_2' => pSQL(Tools::getValue('hit_ups_shipping_shipper_street_2', null)),
			'freight_shipper_city' => pSQL(Tools::getValue('hit_ups_shipping_freight_shipper_city', null)),
			'freight_shipper_state' => pSQL(Tools::getValue('hit_ups_shipping_freight_shipper_state', null)),
			'shipper_phone_number' => (int)Tools::getValue('hit_ups_shipping_shipper_phone_number', null),
			'origin' => pSQL(Tools::getValue('hit_ups_shipping_origin', null)),
			'base_country' => pSQL(Tools::getValue('hit_ups_shipping_base_country', null)),
			'packing_type' => pSQL(Tools::getValue('hit_ups_shipping_packing_type', null)),
			'box_max_weight' => pSQL(Tools::getValue('hit_ups_shipping_box_max_weight', null)),
			'weg_dim' => pSQL(Tools::getValue('hit_ups_shipping_weg_dim', null)),
			'weight_packing_process' => pSQL(Tools::getValue('hit_ups_shipping_weight_packing_process', null)),
			'dimension_send' => pSQL(Tools::getValue('hit_ups_shipping_dimension_send', null)),
			'dev_f' => pSQL(Tools::getValue('hit_ups_shipping_dev_f', null)),
			'dev_b' => pSQL(Tools::getValue('hit_ups_shipping_dev_b', null)),
			'exclude' => $selected_excludes,
			'excus' => $selected_excus,
			'sig_req' => Tools::getValue('hit_ups_shipping_sig_req', 0),
			'label_format' => Tools::getValue('hit_ups_shipping_label_format', ''),
			'osd' => pSQL(Tools::getValue('hit_ups_shipping_osd', null)),
			'oss' => pSQL(Tools::getValue('hit_ups_shipping_oss', null)),
			'cod' => pSQL(Tools::getValue('hit_ups_shipping_cod', null)),
			'admin_fol' => pSQL(Tools::getValue('hit_ups_shipping_admin_fol', '')),

			//'' => Tools::getValue(''),
		);

		$box_data = (array)Tools::getValue('boxes_name', null);
		$box_id = (array)Tools::getValue('boxes_id', null);
		$box_name = (array)Tools::getValue('boxes_name', null);
		$box_length = (array)Tools::getValue('boxes_length', null);
		$boxes_width = (array)Tools::getValue('boxes_width', null);
		$boxes_height = (array)Tools::getValue('boxes_height', null);
		$boxes_box_weight = (array)Tools::getValue('boxes_box_weight', null);
		$boxes_max_weight = (array)Tools::getValue('boxes_max_weight', null);
		$box_enabled = (array)Tools::getValue('boxes_enabled', 'no');
		$box = array();
		foreach ($box_data as $key => $value) {
			$ind_box_id = $box_id[$key];

			if (!empty($box_name[$key])) {
				$ind_box_name = empty($box_name[$key]) ? 'New Box' : $box_name[$key];
				$ind_box_length = empty($box_length[$key]) ? 0 : $box_length[$key];
				$ind_boxes_width = empty($boxes_width[$key]) ? 0 : $boxes_width[$key];
				$ind_boxes_height = empty($boxes_height[$key]) ? 0 : $boxes_height[$key];
				$ind_boxes_box_weight = empty($boxes_box_weight[$key]) ? 0 : $boxes_box_weight[$key];
				$ind_boxes_max_weight = empty($boxes_max_weight[$key]) ? 0 : $boxes_max_weight[$key];
				$ind_box_enabled = isset($box_enabled[$key]) ? true : false;

				$box[$key] = array(
					'id' => $ind_box_id,
					'name' => $ind_box_name,
					'length' => $ind_box_length,
					'width' => $ind_boxes_width,
					'height' => $ind_boxes_height,
					'box_weight' => $ind_boxes_box_weight,
					'max_weight' => $ind_boxes_max_weight,
					'enabled' => $ind_box_enabled,
				);
			}
		}
		Configuration::updateValue('hit_ups_shipping_services_box', json_encode($box));
		Configuration::updateValue('hit_ups_shipping_services_adj', json_encode(Tools::getValue('ups_service')));
		
		// Configuration::updateValue('HIT_UPS_FORM_VALUES', json_encode($form_values));

		foreach ($form_values as $key => $value) {
			Configuration::updateValue('hit_ups_shipping_' . $key, $value);
		}
	}

	public function setMedia()
	{
		$this->addJquery();
	}
	public function getOrderShippingCost($params, $shipping_cost)
	{
		return $this->getPackageShippingCost($params, $shipping_cost, null);
	}

	public function existFreeRule($id_cart_rule)
	{
		$result = Db::getInstance()->getValue('
		SELECT `free_shipping`
		FROM `' . _DB_PREFIX_ . 'cart_rule` cr
		WHERE cr.id_cart_rule = ' . (int)$id_cart_rule . ' 
		AND cr.date_from < "' . date('Y-m-d H:i:s') . '"
		AND cr.date_to > "' . date('Y-m-d H:i:s') . '"');

		return $result;
	}

	function isJson($string) {
		json_decode($string);
		return (json_last_error() == JSON_ERROR_NONE);
	   }

	/**
	 * @param params       $params
	 * @param float      $shipping_cost
	 * @param array|null $products
	 * @return float|bool
	 * @throws PrestaShopDatabaseException
	 * @throws PrestaShopException
	 */
	public function getPackageShippingCost($params, $shipping_cost, $products = null)
	{
		
		$total_rates = 0;
		//$current_context = Context::getContext();
		//if ($current_context != '' && isset($current_context->controller->controller_type) && $current_context->controller->controller_type != 'front'){
		//   return false;
		// }
		$carrier = new Carrier($this->id_carrier);
		$general_settings = $this->hit_get_ups_data_db();
		//@ini_set('max_execution_time', -1);
		if (!empty($carrier->external_module_name) && $carrier->external_module_name == 'hitups') {

			
			$active_check = $general_settings['rate_live'];
			if ((!empty($active_check) && $active_check == 'yes') || (!empty($active_check) && $active_check == 'live') || (!empty($active_check) && $active_check == 'freight_rate')) {

				//$id_address_delivery = Context::getContext()->cart->id_address_delivery;
				//$address = new Address($id_address_delivery);
				$idCarrierReference = $carrier->id_reference;
				$customerAddress = new Address($params->id_address_delivery);

				if (!Validate::isLoadedObject($customerAddress)) {
					return false;
				}

				$destination_country_name = $this->hit_getIsoCountryById((int) $customerAddress->id_country);
				$county_exclude_check = isset($general_settings['exclude']) ? $general_settings['exclude'] : '';
				$county_excus_check = isset($general_settings['excus']) ? $general_settings['excus'] : '';
				if (!empty($county_exclude_check)) {
					$county_exclude_check = explode(',', $county_exclude_check);
					if (in_array($destination_country_name, $county_exclude_check)) {
						if (!empty($county_excus_check)) {
							$county_excus_check = explode(',', $county_excus_check);
							if (!in_array($destination_country_name, $county_exclude_check)) {
								return false;
							}
						} else {
							return false;
						}
					}
				}
				$check_name = Configuration::get('HITUPS_' . $idCarrierReference);
				$check_name = str_replace("ups_", '', $check_name);
				$custom_services = Configuration::get('hit_ups_shipping_services_adj');
				$custom_services = !empty($custom_services) ? json_decode($custom_services,true) : $this->_carriers;
				if (isset($custom_services['ups_' . $check_name]) && empty($custom_services['ups_' . $check_name]['enabled'])) {
					return false;
				}
				$orderCurrency = new Currency((int) $params->id_currency);
				$products = $params->getProducts();
				if (is_array($products) && !empty($products)) {
					$productString = implode(
						'|',
						array_map(
							function ($entry) {
								return isset($entry['id_product']) ? $entry['id_product'] . '_' . $entry['quantity'] : 0;
							},
							$products
						)
					);
					$cacheKey = 'HIT_UPSexpress::quoteRequest_' . $productString . '_';
					$cacheKey .= $customerAddress->id . '_' . date('YmdH');
				} else {
					$cacheKey = 'HIT_UPSexpresss::quoteRequest_' . $customerAddress->id . '_' . date('YmdH');
				}

				$ps_weg_unit = strtoupper(Configuration::get('PS_WEIGHT_UNIT'));
				$ps_dim_unit = strtoupper(Configuration::get('PS_DIMENSION_UNIT'));
				
				$mod_weg_unit = (isset($general_settings['weg_dim']) && $general_settings['weg_dim'] == 'yes') ? 'KG' : 'LB';
				$mod_dim_unit = (isset($general_settings['weg_dim']) && $general_settings['weg_dim'] == 'yes') ? 'CM' : 'IN';
				if ( !empty($ps_weg_unit) ) {
					$ps_weg_unit = $this->get_ps_weg_unit($ps_weg_unit);
				}
				if ( !empty($ps_dim_unit) ) {
					$ps_dim_unit = $this->get_ps_dim_unit($ps_dim_unit);
				}

				if ( !empty($ps_weg_unit) && ($ps_weg_unit != $mod_weg_unit) ) {
					foreach ($products as $key => $prod) {
						$products[$key]['weight'] = (isset($prod['weight']) && !empty($prod['weight'])) ? round($this->convert_weg($prod['weight'], $ps_weg_unit, $mod_weg_unit), 3) : 1;
						if (!empty($ps_dim_unit) && ($ps_dim_unit != $mod_dim_unit) ) {
							$products[$key]['width'] = (isset($prod['width']) && !empty($prod['width'])) ? round($this->convert_dim($prod['width'], $ps_dim_unit, $mod_dim_unit), 3) : 1;
							$products[$key]['height'] = (isset($prod['height']) && !empty($prod['height'])) ? round($this->convert_dim($prod['height'], $ps_dim_unit, $mod_dim_unit), 3) : 1;
							$products[$key]['depth'] = (isset($prod['depth']) && !empty($prod['depth'])) ? round($this->convert_dim($prod['depth'], $ps_dim_unit, $mod_dim_unit), 3) : 1;
						}
					}
				}

				$ups_packs		=	$this->hit_get_ups_packages($products, $general_settings, $orderCurrency);

					$is_freight = ($general_settings['rate_live'] == 'freight_rate') ? 'yes' : '' ;
				
					if($is_freight == 'yes'){
						$request_url = (isset($general_settings['production']) && $general_settings['production'] == 'yes') ? 'https://onlinetools.ups.com/ship/v1607/freight/rating/ground' : 'https://wwwcie.ups.com/ship/v1607/freight/rating/ground';
					} else{
						$request_url = (isset($general_settings['production']) && $general_settings['production'] == 'yes') ? 'https://onlinetools.ups.com/ups.app/xml/Rate' : 'https://wwwcie.ups.com/ups.app/xml/Rate';
					}
				$total_results = array();
				if (!Cache::isStored($cacheKey)) {
					if($is_freight == 'yes'){
						$ups_reqs =	$this->hit_get_ups_freight_requests($ups_packs, $general_settings, $params);
						
						foreach ($ups_reqs as $single_ups_pack) {
							$result = $this->ups_freight_rate_response($single_ups_pack, $idCarrierReference, $request_url,$general_settings);
							$total_results[] = $result;
							
						}
					}else{
						if (isset($general_settings['api_type']) && $general_settings['api_type'] == "REST") {
							if ( ! class_exists( 'ups_rest' ) ) {
								include_once 'classes/ups_rest_main.php';
							}
							$ups_rest_obj = new ups_rest();
							$auth_token = $this->getAuthToken($ups_rest_obj);
							if (empty($auth_token)) {
								return;
							}
							$gen_settings = $this->getGenSettings($general_settings);
							$ven_settings = $this->getVenSettings($general_settings);
							$address = $this->getRecAddr($params);
							$ups_rest_obj->mode = (isset($general_settings['production']) && $general_settings['production'] == 'yes') ? 'live' : 'test';
							$ups_rest_obj->orderCurrency = $orderCurrency->iso_code;
							$ups_rest_obj->recCurrency = $this->get_country_currency($address['country']);
							$ups_reqs = $ups_rest_obj->make_rate_req_rest($gen_settings, $ven_settings, $address, $ups_packs);
							$xmloutput = $ups_rest_obj->get_rate_res_rest($ups_reqs, $auth_token);
							$total_results = isset($xmloutput->RateResponse) ? array($xmloutput->RateResponse) : $xmloutput;
						} else {
							$ups_reqs =	$this->hit_get_ups_requests($ups_packs, $general_settings, $params);
							foreach ($ups_reqs as $single_ups_pack) {
								$result = $this->ups_rate_response($single_ups_pack, $idCarrierReference, $request_url);
								$total_results[] = $result;
							}
						}
					}
					Cache::store($cacheKey, $total_results);
				} else {
					$total_results = Cache::retrieve($cacheKey);
				}
				if (isset($general_settings['dev_f']) && $general_settings['dev_f'] == 'yes') {
					echo '<pre>';
					$ii = 1;
					if (isset($ups_reqs[0])) {
						foreach ($ups_reqs as $singlr_reg) {
							echo '<h1>Request ' . $ii++ . '</h1> <br/>';
							print_r(htmlspecialchars($singlr_reg));
						}
					} else {
						print_r($ups_reqs);
					}
					echo '<br/><h1>Response</h1> <br/>';
					print_r($total_results);
					die();
				}

				foreach ($total_results as $result) {
					if (empty($result)) {
						return false;
					}

					if($is_freight == 'yes' && $result->FreightRateResponse->Response->ResponseStatus->Code != '1'){
						return false;
					}
					if ($is_freight == '' && isset($result->Response->ResponseStatusCode) && $result->Response->ResponseStatusCode != '1') {
						
						return false;
					}
					
					//$rate_local_code ='';
					$ups_configured_curr = include('data_helper/country_details.php');
					$ups_selected_curr = $ups_configured_curr[$general_settings['base_country']]['currency'];
					if (empty($ups_selected_curr)) {
						$ups_selected_curr = $orderCurrency->iso_code;
					}
					$isoUPSCurrency = '';
					//$check_name
					$rate_cost = 0;
					
					if($is_freight == 'yes'){

						foreach ($result as $freightrate) {

							$get_code = (string)$freightrate->Service->Code;
							if (isset($get_code) && $get_code == $check_name) {
								
									$isoUPSCurrency = (string) $freightrate->TotalShipmentCharge->CurrencyCode;
									$rate_cost = (float) $freightrate->TotalShipmentCharge->MonetaryValue;
								
							} else {
								continue;
							}
	
							$cart = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS('
									SELECT `id_cart_rule`
									FROM `' . _DB_PREFIX_ . 'cart_cart_rule` cr
									WHERE cr.`id_cart` = ' . (int)$params->id);
							if (count($cart) > 0) {
								foreach ($cart as $crr) {
									$exist = $this->existFreeRule($crr['id_cart_rule']);

									if ($exist == 1) {
										return 0;
									}
								}
							}
	
							$idCurrencyUPS = Currency::getIdByIsoCode($isoUPSCurrency);
							if (!$idCurrencyUPS) {
	
								//									$logger->error('Currency '.$service['CurrencyCode'].' unknown');
								return false;
							}
							$upsCurrency = new Currency((int) $idCurrencyUPS);
							$customerCurrency = new Currency((int) $params->id_currency);
							if (!Validate::isLoadedObject($upsCurrency) || !Validate::isLoadedObject($customerCurrency)) {
								return false;
							}
	
							if (!empty($custom_services['ups_' . $check_name]['adjustment_percent'])) {
								$adjustprice = (float)($custom_services['ups_' . $check_name]['adjustment_percent']);
								$rate_cost = $rate_cost + ($rate_cost * ($adjustprice / 100));
							}
							// Cost adjustment
							if (!empty($custom_services['ups_' . $check_name]['adjustment'])) {
								$adjustprice_cost = (float)($custom_services['ups_' . $check_name]['adjustment']);
								$rate_cost = $rate_cost + $adjustprice_cost;
							}

							// Additional Shipping Cost per product
							foreach ($products as $p) {
								if (!$p['is_virtual']) {
									$rate_cost += $p['additional_shipping_cost'] * (int) $p['cart_quantity'];
								}
							}
	
							// We need to convert the price in the default currency of the shop
							$rate_cost = $rate_cost / $upsCurrency->conversion_rate;
							$rate_cost = $rate_cost * $customerCurrency->conversion_rate;
	
							if (!empty($custom_services['ups_' . $check_name]['freeshipping'])) {
								$freeshipping = (float)($custom_services['ups_' . $check_name]['freeshipping']);
								$total_value = 0;
								foreach ($products as $s_product) {
									$total_value += ($s_product['price'] * $s_product['cart_quantity']);
								}
								if ($total_value > 0) {
									$freeshipping = $freeshipping / $upsCurrency->conversion_rate;
									$freeshipping = $freeshipping * $customerCurrency->conversion_rate;
									if ($total_value >= $freeshipping) {
										return 0;
									}
								}
							}
							$handlingFees = Configuration::get('PS_SHIPPING_HANDLING');
							// print_r($handlingFees);
							// die();
							if (isset($handlingFees) && $handlingFees > 0) {
								$rate_cost += (float) $handlingFees;
							}
							if ($rate_cost > 0) {
								$total_rates += $rate_cost;
							}
						}
						// return $total_rates;
					}else{
						if (!isset($result->RatedShipment)) {
							return false;
						}
					foreach ($result->RatedShipment as $indshipment) {
						$get_code = (string)$indshipment->Service->Code;
						if (isset($get_code) && $get_code == $check_name) {
							if ($general_settings['request_type'] == 'yes' && isset($indshipment->NegotiatedRates->NetSummaryCharges->GrandTotal->MonetaryValue)) {
								if (isset($general_settings['rate_with_tax']) && $general_settings['rate_with_tax'] == "yes" && isset($indshipment->NegotiatedRates->NetSummaryCharges->TotalChargesWithTaxes->MonetaryValue) ) {
									$isoUPSCurrency = (string) $indshipment->NegotiatedRates->NetSummaryCharges->TotalChargesWithTaxes->CurrencyCode;
									$rate_cost = (float) $indshipment->NegotiatedRates->NetSummaryCharges->TotalChargesWithTaxes->MonetaryValue;
								} else {
									$isoUPSCurrency = (string) $indshipment->NegotiatedRates->NetSummaryCharges->GrandTotal->CurrencyCode;
									$rate_cost = (float) $indshipment->NegotiatedRates->NetSummaryCharges->GrandTotal->MonetaryValue;
								}
							} else {
								if (isset($general_settings['rate_with_tax']) && $general_settings['rate_with_tax'] == "yes" && isset($indshipment->TotalChargesWithTaxes->MonetaryValue) ) {
									$isoUPSCurrency = (string) $indshipment->TotalChargesWithTaxes->CurrencyCode;
									$rate_cost = (float) $indshipment->TotalChargesWithTaxes->MonetaryValue;
								} else {
									$isoUPSCurrency = (string) $indshipment->TotalCharges->CurrencyCode;
									$rate_cost = (float) $indshipment->TotalCharges->MonetaryValue;
								}
							}
						} else {
							continue;
						}

						$cart = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS('
								SELECT `id_cart_rule`
								FROM `' . _DB_PREFIX_ . 'cart_cart_rule` cr
								WHERE cr.`id_cart` = ' . (int)$params->id);
						if (count($cart) > 0) {
							foreach ($cart as $crr) {
								$exist = $this->existFreeRule($crr['id_cart_rule']);

								if ($exist == 1) {
									return 0;
								}
							}
						}

						$idCurrencyUPS = Currency::getIdByIsoCode($isoUPSCurrency);
						if (!$idCurrencyUPS) {

							//									$logger->error('Currency '.$service['CurrencyCode'].' unknown');
							return false;
						}
						$upsCurrency = new Currency((int) $idCurrencyUPS);
						$customerCurrency = new Currency((int) $params->id_currency);
						if (!Validate::isLoadedObject($upsCurrency) || !Validate::isLoadedObject($customerCurrency)) {
							return false;
						}

						if (!empty($custom_services['ups_' . $check_name]['adjustment_percent'])) {
							$adjustprice = (float)($custom_services['ups_' . $check_name]['adjustment_percent']);
							$rate_cost = $rate_cost + ($rate_cost * ($adjustprice / 100));
						}
						// Cost adjustment
						if (!empty($custom_services['ups_' . $check_name]['adjustment'])) {
							$adjustprice_cost = (float)($custom_services['ups_' . $check_name]['adjustment']);
							$rate_cost = $rate_cost + $adjustprice_cost;
						}

						// Additional Shipping Cost per product
						foreach ($products as $p) {
							if (!$p['is_virtual']) {
								$rate_cost += $p['additional_shipping_cost'] * (int) $p['cart_quantity'];
							}
						}

						// We need to convert the price in the default currency of the shop
						$rate_cost = $rate_cost / $upsCurrency->conversion_rate;
						$rate_cost = $rate_cost * $customerCurrency->conversion_rate;

						if (!empty($custom_services['ups_' . $check_name]['freeshipping'])) {
							$freeshipping = (float)($custom_services['ups_' . $check_name]['freeshipping']);
							$total_value = 0;
							foreach ($products as $s_product) {
								$total_value += ($s_product['price'] * $s_product['cart_quantity']);
							}
							if ($total_value > 0) {
								$freeshipping = $freeshipping / $upsCurrency->conversion_rate;
								$freeshipping = $freeshipping * $customerCurrency->conversion_rate;
								if ($total_value >= $freeshipping) {
									return 0;
								}
							}
						}
						$handlingFees = Configuration::get('PS_SHIPPING_HANDLING');
						// print_r($handlingFees);
						// die();
						if (isset($handlingFees) && $handlingFees > 0) {
							$rate_cost += (float) $handlingFees;
						}
						if ($rate_cost > 0) {
							$total_rates += $rate_cost;
						}
					}
				}
				}
			} else if ((!empty($active_check) && $active_check == 'local')) {
				return $shipping_cost;
			}

			if ($total_rates > 0) {
				return $total_rates;
			}
		}
		return false;
	}
	public function hit_get_ups_packages($package, $general_settings, $orderCurrency, $chk = false)
	{
		switch ($general_settings['packing_type']) {
			case 'box':
				return $this->box_shipping($package, $general_settings, $orderCurrency, $chk);
				break;
			case 'weight_based':
				return $this->weight_based_shipping($package, $general_settings, $orderCurrency, $chk);
				break;
			case 'per_item':
			default:
				return $this->per_item_shipping($package, $general_settings, $orderCurrency, $chk);
				break;
		}
	}
	private function weight_based_shipping($package, $general_settings, $orderCurrency, $chk = false)
	{
		
		if (!class_exists('WeightPack')) {
			include_once 'classes/weight_pack/class-hit-weight-packing.php';
		}
		$weight_pack = new WeightPack($general_settings['weight_packing_process']);
		$weight_pack->set_max_weight($general_settings['box_max_weight']);

		$package_total_weight = 0;
		$insured_value = 0;
		$ctr = 0;
		foreach ($package as $item_id => $values) {
			$ctr++;

			$skip_product = '';
			if ($skip_product) {
				continue;
			}

			if (!$values['weight']) {
				$values['weight'] = 0.01;
			}
			$chk_qty = $chk ? $values['product_quantity'] : $values['cart_quantity'];

			$weight_pack->add_item($values['weight'], $values, $chk_qty);
		}

		$pack   =   $weight_pack->pack_items();
		$errors =   $pack->get_errors();
		if (!empty($errors)) {
			//do nothing
			return;
		} else {
			$boxes    =   $pack->get_packed_boxes();
			$unpacked_items =   $pack->get_unpacked_items();
			
			$insured_value        =   0;

			$packages      =   array_merge($boxes, $unpacked_items); // merge items if unpacked are allowed
			$package_count  =   sizeof($packages);
			// get all items to pass if item info in box is not distinguished
			$packable_items =   $weight_pack->get_packable_items();
			$all_items    =   array();
			if (is_array($packable_items)) {
				foreach ($packable_items as $packable_item) {
					$all_items[]    =   $packable_item['data'];
				}
			}
			//pre($packable_items);
			$order_total = '';

			$to_ship  = array();
			$group_id = 1;
			foreach ($packages as $package) { //pre($package);
				
				$packed_products = array();
				if (($package_count  ==  1) && isset($order_total)) {
					$insured_value  =  (isset($values['product_price']) ? $values['product_price'] : $values['price']) * (isset($values['product_quantity']) ? $values['product_quantity'] : $values['cart_quantity']);
				} else {
					$insured_value  =   0;
					if (!empty($package['items'])) {
						foreach ($package['items'] as $item) {

							$insured_value        +=   $item['price']; //+ $item->price;

						}
					} else {
						if (isset($order_total) && $package_count) {
							$insured_value  =   $order_total / $package_count;
						}
					}
				}

				$packed_products    =   isset($package['items']) ? $package['items'] : $all_items;
				
				// Creating package request
				$package_total_weight   = $package['weight'];

				$insurance_array = array(
					'Amount' => $insured_value,
					'Currency' => $orderCurrency->iso_code
				);

				$group = array(
					'GroupNumber' => $group_id,
					'GroupPackageCount' => 1,
					'Weight' => array(
						'Value' => round($package_total_weight, 3),
						'Units' => (isset($general_settings['weg_dim']) && $general_settings['weg_dim'] === 'yes') ? 'KGS' : 'LBS'
					),
					'packed_products' => $packed_products,
				);
								
				$package_items = isset($package['items']) ? $package['items'] : '';
				$group['Dimensions'] = array();
				if(isset($package_items) && !empty($package_items)){
				foreach ($package_items as $key => $singleitem) {
					if ($singleitem['width'] && $singleitem['height'] && $singleitem['depth']) {
						$chk_qty = $chk ? $singleitem['product_quantity'] : $singleitem['cart_quantity'];
						$group['Dimensions'] = array(
							'Length' => max(1, Tools::ps_round($singleitem['depth'] * $chk_qty, 3)),
							'Width' => max(1, Tools::ps_round($singleitem['width'] * $chk_qty, 3)),
							'Height' => max(1, Tools::ps_round($singleitem['height'] * $chk_qty, 3)),
							'Units' => (isset($general_settings['weg_dim']) && $general_settings['weg_dim'] === 'yes') ? 'CM' : 'IN'
						);
					}
				}
			}

				$group['InsuredValue'] = $insurance_array;
				$group['packtype'] = isset($general_settings['shp_pack_type']) ? $general_settings['shp_pack_type'] : 'OD';

				$to_ship[] = $group;
				$group_id++;
			}
		}

		return $to_ship;
	}
	private function box_shipping($package, $general_settings, $orderCurrency, $chk = false)
	{
		if (!class_exists('HIT_Boxpack')) {
			include_once 'classes/hit-box-packing.php';
		}
		$boxpack = new HIT_Boxpack();
		$boxes = Configuration::get('hit_ups_shipping_services_box');
		if (empty($boxes)) {
			return false;
		}
		$boxes = json_decode($boxes,true);
		// Define boxes
		foreach ($boxes as $key => $box) {
			if (!$box['enabled']) {
				continue;
			}
			$box['pack_type'] = !empty($box['pack_type']) ? $box['pack_type'] : 'BOX';

			$newbox = $boxpack->add_box($box['length'], $box['width'], $box['height'], $box['box_weight'], $box['pack_type']);

			if (isset($box['id'])) {
				$newbox->set_id(current(explode(':', $box['id'])));
			}

			if ($box['max_weight']) {
				$newbox->set_max_weight($box['max_weight']);
			}
			if ($box['pack_type']) {
				$newbox->set_packtype($box['pack_type']);
			}
		}

		// Add items
		foreach ($package as $item_id => $values) {

			$skip_product = '';
			if ($skip_product) {
				continue;
			}

			if ($values['width'] && $values['height'] && $values['depth'] && $values['weight']) {

				$dimensions = array($values['depth'], $values['height'], $values['width']);
				$chk_qty = $chk ? $values['product_quantity'] : $values['cart_quantity'];
				for ($i = 0; $i < $chk_qty; $i++) {
					$boxpack->add_item($dimensions[2], $dimensions[1], $dimensions[0], $values['weight'], $values['price'], array(
						'data' => $values
					));
				}
			} else {
				//    $this->debug(sprintf(__('Product #%s is missing dimensions. Aborting.', 'wf-shipping-ups'), $item_id), 'error');
				return;
			}
		}

		// Pack it
		$boxpack->pack();
		$packages = $boxpack->get_packages();
		$to_ship = array();
		$group_id = 1;
		foreach ($packages as $package) {
			if ($package->unpacked === true) {
				//$this->debug('Unpacked Item');
			} else {
				//$this->debug('Packed ' . $package->id);
			}

			$dimensions = array($package->length, $package->width, $package->height);

			sort($dimensions);
			$insurance_array = array(
				'Amount' => round($package->value),
				'Currency' => $orderCurrency->iso_code
			);


			$group = array(
				'GroupNumber' => $group_id,
				'GroupPackageCount' => 1,
				'Weight' => array(
					'Value' => round($package->weight, 3),
					'Units' => (isset($general_settings['weg_dim']) && $general_settings['weg_dim'] === 'yes') ? 'KGS' : 'LBS'
				),
				'Dimensions' => array(
					'Length' => max(1, round($dimensions[2], 3)),
					'Width' => max(1, round($dimensions[1], 3)),
					'Height' => max(1, round($dimensions[0], 3)),
					'Units' => (isset($general_settings['weg_dim']) && $general_settings['weg_dim'] === 'yes') ? 'CM' : 'IN'
				),
				'InsuredValue' => $insurance_array,
				'packed_products' => array(),
				'package_id' => $package->id,
				'packtype' => isset($package->packtype) ? $package->packtype : 'BOX'
			);

			if (!empty($package->packed) && is_array($package->packed)) {
				foreach ($package->packed as $packed) {
					$group['packed_products'][] = $packed->get_meta('data');
				}
			}

			$to_ship[] = $group;

			$group_id++;
		}

		return $to_ship;
	}
	private function per_item_shipping($package, $general_settings, $orderCurrency, $chk = false)
	{
		$to_ship = array();
		$group_id = 1;

		// Get weight of order
		foreach ($package as $item_id => $values) {


			if (!$values['weight']) {
				//   $this->debug(sprintf(__('Product # is missing weight. Aborting.', 'wf-shipping-ups'), $item_id), 'error');
				return;
			}

			$group = array();
			$insurance_array = array(
				'Amount' => $values['price'],
				'Currency' => $orderCurrency->iso_code
			);

			if ($values['weight'] < 0.001) {
				$ups_per_item_weight = 0.001;
			} else {
				$ups_per_item_weight = round($values['weight'], 3);
			}
			$group = array(
				'GroupNumber' => $group_id,
				'GroupPackageCount' => 1,
				'Weight' => array(
					'Value' => $ups_per_item_weight,
					'Units' => (isset($general_settings['weg_dim']) && $general_settings['weg_dim'] === 'yes') ? 'KGS' : 'LBS'
				),
				'packed_products' => $package
			);

			if ($values['width'] && $values['height'] && $values['depth']) {

				$group['Dimensions'] = array(
					'Length' => max(1, Tools::ps_round($values['depth'], 3)),
					'Width' => max(1, Tools::ps_round($values['width'], 3)),
					'Height' => max(1, Tools::ps_round($values['height'], 3)),
					'Units' => (isset($general_settings['weg_dim']) && $general_settings['weg_dim'] === 'yes') ? 'CM' : 'IN'
				);
			}
			$group['packtype'] = isset($general_settings['shp_pack_type']) ? $general_settings['shp_pack_type'] : 'BOX';
			$group['InsuredValue'] = $insurance_array;

			$chk_qty = $chk ? $values['product_quantity'] : $values['cart_quantity'];

			for ($i = 0; $i < $chk_qty; $i++)
				$to_ship[] = $group;

			$group_id++;
		}

		return $to_ship;
	}
	private function get_country_currency($country)
	{
		$list = array();
		$list = array(
			'AF' => 'AFN',
			'AL' => 'ALL',
			'DZ' => 'DZD',
			'AS' => 'USD',
			'AD' => 'EUR',
			'AO' => 'AOA',
			'AI' => 'XCD',
			'AQ' => 'XCD',
			'AG' => 'XCD',
			'AR' => 'ARS',
			'AM' => 'AMD',
			'AW' => 'AWG',
			'AU' => 'AUD',
			'AT' => 'EUR',
			'AZ' => 'AZN',
			'BS' => 'BSD',
			'BH' => 'BHD',
			'BD' => 'BDT',
			'BB' => 'BBD',
			'BY' => 'BYR',
			'BE' => 'EUR',
			'BZ' => 'BZD',
			'BJ' => 'XOF',
			'BM' => 'BMD',
			'BT' => 'BTN',
			'BO' => 'BOB',
			'BA' => 'BAM',
			'BW' => 'BWP',
			'BV' => 'NOK',
			'BR' => 'BRL',
			'IO' => 'USD',
			'BN' => 'BND',
			'BG' => 'BGN',
			'BF' => 'XOF',
			'BI' => 'BIF',
			'KH' => 'KHR',
			'CM' => 'XAF',
			'CA' => 'CAD',
			'CV' => 'CVE',
			'KY' => 'KYD',
			'CF' => 'XAF',
			'TD' => 'XAF',
			'CL' => 'CLP',
			'CN' => 'CNY',
			'HK' => 'HKD',
			'CX' => 'AUD',
			'CC' => 'AUD',
			'CO' => 'COP',
			'KM' => 'KMF',
			'CG' => 'XAF',
			'CD' => 'CDF',
			'CK' => 'NZD',
			'CR' => 'CRC',
			'HR' => 'HRK',
			'CU' => 'CUP',
			'CY' => 'EUR',
			'CZ' => 'CZK',
			'DK' => 'DKK',
			'DJ' => 'DJF',
			'DM' => 'XCD',
			'DO' => 'DOP',
			'EC' => 'ECS',
			'EG' => 'EGP',
			'SV' => 'SVC',
			'GQ' => 'XAF',
			'ER' => 'ERN',
			'EE' => 'EUR',
			'ET' => 'ETB',
			'FK' => 'FKP',
			'FO' => 'DKK',
			'FJ' => 'FJD',
			'FI' => 'EUR',
			'FR' => 'EUR',
			'GF' => 'EUR',
			'TF' => 'EUR',
			'GA' => 'XAF',
			'GM' => 'GMD',
			'GE' => 'GEL',
			'DE' => 'EUR',
			'GH' => 'GHS',
			'GI' => 'GIP',
			'GR' => 'EUR',
			'GL' => 'DKK',
			'GD' => 'XCD',
			'GP' => 'EUR',
			'GU' => 'USD',
			'GT' => 'QTQ',
			'GG' => 'GGP',
			'GN' => 'GNF',
			'GW' => 'GWP',
			'GY' => 'GYD',
			'HT' => 'HTG',
			'HM' => 'AUD',
			'HN' => 'HNL',
			'HU' => 'HUF',
			'IS' => 'ISK',
			'IN' => 'INR',
			'ID' => 'IDR',
			'IR' => 'IRR',
			'IQ' => 'IQD',
			'IE' => 'EUR',
			'IM' => 'GBP',
			'IL' => 'ILS',
			'IT' => 'EUR',
			'JM' => 'JMD',
			'JP' => 'JPY',
			'JE' => 'GBP',
			'JO' => 'JOD',
			'KZ' => 'KZT',
			'KE' => 'KES',
			'KI' => 'AUD',
			'KP' => 'KPW',
			'KR' => 'KRW',
			'KW' => 'KWD',
			'KG' => 'KGS',
			'LA' => 'LAK',
			'LV' => 'EUR',
			'LB' => 'LBP',
			'LS' => 'LSL',
			'LR' => 'LRD',
			'LY' => 'LYD',
			'LI' => 'CHF',
			'LT' => 'EUR',
			'LU' => 'EUR',
			'MK' => 'MKD',
			'MG' => 'MGF',
			'MW' => 'MWK',
			'MY' => 'MYR',
			'MV' => 'MVR',
			'ML' => 'XOF',
			'MT' => 'EUR',
			'MH' => 'USD',
			'MQ' => 'EUR',
			'MR' => 'MRO',
			'MU' => 'MUR',
			'YT' => 'EUR',
			'MX' => 'MXN',
			'FM' => 'USD',
			'MD' => 'MDL',
			'MC' => 'EUR',
			'MN' => 'MNT',
			'ME' => 'EUR',
			'MS' => 'XCD',
			'MA' => 'MAD',
			'MZ' => 'MZN',
			'MM' => 'MMK',
			'NA' => 'NAD',
			'NR' => 'AUD',
			'NP' => 'NPR',
			'NL' => 'EUR',
			'AN' => 'ANG',
			'NC' => 'XPF',
			'NZ' => 'NZD',
			'NI' => 'NIO',
			'NE' => 'XOF',
			'NG' => 'NGN',
			'NU' => 'NZD',
			'NF' => 'AUD',
			'MP' => 'USD',
			'NO' => 'NOK',
			'OM' => 'OMR',
			'PK' => 'PKR',
			'PW' => 'USD',
			'PA' => 'PAB',
			'PG' => 'PGK',
			'PY' => 'PYG',
			'PE' => 'PEN',
			'PH' => 'PHP',
			'PN' => 'NZD',
			'PL' => 'PLN',
			'PT' => 'EUR',
			'PR' => 'USD',
			'QA' => 'QAR',
			'RE' => 'EUR',
			'RO' => 'RON',
			'RU' => 'RUB',
			'RW' => 'RWF',
			'SH' => 'SHP',
			'KN' => 'XCD',
			'LC' => 'XCD',
			'PM' => 'EUR',
			'VC' => 'XCD',
			'WS' => 'WST',
			'SM' => 'EUR',
			'ST' => 'STD',
			'SA' => 'SAR',
			'SN' => 'XOF',
			'RS' => 'RSD',
			'SC' => 'SCR',
			'SL' => 'SLL',
			'SG' => 'SGD',
			'SK' => 'EUR',
			'SI' => 'EUR',
			'SB' => 'SBD',
			'SO' => 'SOS',
			'ZA' => 'ZAR',
			'GS' => 'GBP',
			'SS' => 'SSP',
			'ES' => 'EUR',
			'LK' => 'LKR',
			'SD' => 'SDG',
			'SR' => 'SRD',
			'SJ' => 'NOK',
			'SZ' => 'SZL',
			'SE' => 'SEK',
			'CH' => 'CHF',
			'SY' => 'SYP',
			'TW' => 'TWD',
			'TJ' => 'TJS',
			'TZ' => 'TZS',
			'TH' => 'THB',
			'TG' => 'XOF',
			'TK' => 'NZD',
			'TO' => 'TOP',
			'TT' => 'TTD',
			'TN' => 'TND',
			'TR' => 'TRY',
			'TM' => 'TMT',
			'TC' => 'USD',
			'TV' => 'AUD',
			'UG' => 'UGX',
			'UA' => 'UAH',
			'AE' => 'AED',
			'GB' => 'GBP',
			'US' => 'USD',
			'UM' => 'USD',
			'UY' => 'UYU',
			'UZ' => 'UZS',
			'VU' => 'VUV',
			'VE' => 'VEF',
			'VN' => 'VND',
			'VI' => 'USD',
			'WF' => 'XPF',
			'EH' => 'MAD',
			'YE' => 'YER',
			'ZM' => 'ZMW',
			'ZW' => 'ZWD',
		);
		return $list[$country];
		//print_r($country);
	}
	private function hit_get_ups_freight_requests($ups_packs, $general_settings, $params)
	{

		
		$pick_date = date('Ymd',time() + 172800);
		$orderCurrency = new Currency((int) $params->id_currency);
		$origin_postcode_city = $this->hit_get_postcode_city($general_settings['base_country'], $general_settings['freight_shipper_city'], $general_settings['origin']);
		$customerAddress = new Address($params->id_address_delivery);
		$prod = $params->getProducts();
		$total_amount = 0;
		if (!empty($prod)) {
			foreach ($prod as $key => $value) {
				$total_amount += $value['total_wt'];
			}
		}
		// print_r($total_amount);
		// $total_value = $this->hit_get_package_total_value($ups_packs);

		$customerAddressIso = $this->hit_getIsoCountryById((int) $customerAddress->id_country);
		$destination_postcode_city = $this->hit_get_postcode_city($customerAddressIso, $customerAddress->city, $customerAddress->postcode);
		$weight_unit = (isset($general_settings['weg_dim']) && $general_settings['weg_dim'] === 'yes') ? 'KGS' : 'LBS';
		$dim_unit = (isset($general_settings['weg_dim']) && $general_settings['weg_dim'] === 'yes') ? 'CM' : 'IN';
		$destination_country = "";
		$state_details = Db::getInstance()->getRow('SELECT `iso_code` FROM `' . _DB_PREFIX_ . 'state` WHERE `id_state` = ' . (int)($customerAddress->id_state));
		
		if (("PR" == $customerAddressIso) && ("US" == $customerAddressIso)) {
			$destination_country = "PR";
		} else {
			$destination_country = $customerAddressIso;
		}
		$curr = $this->get_country_currency($destination_country);
		$ups_selectd_curr_id = Currency::getIdByIsoCode($curr);
		$ups_selectd_curr_obj = new Currency((int) $ups_selectd_curr_id);
		$ups_selectd_curr_rate = $ups_selectd_curr_obj->conversion_rate;
		$total_amount_converted = $total_amount *  $ups_selectd_curr_rate;
		$access = $general_settings['site_acess'];
		$userid = $general_settings['site_id'];
		$passwd = $general_settings['site_pwd'];
		$total_weight = $this->hit_get_package_piece($ups_packs);
		// print_r(round($total_amount_converted));
		// die();
		$totl_request = array();
		$package_xml = '';
		
			if (!empty($ups_packs)) {
				foreach ($ups_packs as $single_pack) {
					$pack_dim = '';
					if (isset($general_settings['dimension_send']) && $general_settings['dimension_send'] == 'yes' && !empty($single_pack['Dimensions']) && $single_pack['Dimensions']['Length'] > 0) {
						$pack_dim = '<Dimensions>  
										<Height>' . $single_pack['Dimensions']['Height'] . '</Height>  
										<Length>' . $single_pack['Dimensions']['Length'] . '</Length>  
						                <UnitOfMeasurement>  
										  <Code>' . $single_pack['Dimensions']['Units'] . '</Code>  
										  <Description />
						                </UnitOfMeasurement>  
						                
						                <Width>' . $single_pack['Dimensions']['Width'] . '</Width>  
						                
						              </Dimensions>';
					}

					
					
					$wght = '<Weight>
					<UnitOfMeasurement>
					   <Code>'.$weight_unit.'</Code>
					</UnitOfMeasurement>
					<Value>'.$single_pack['Weight']['Value'].'</Value>
				 </Weight>';
					// $package_xml .= '<Package>
					// 					<PackagingType>
					// 						<Code>02</Code>
					// 					</PackagingType>
					// 					' . $pack_dim . '
					// 					<PackageWeight>
					// 						<UnitOfMeasurement>
					// 							<Code>' . $weight_unit . '</Code>
					// 						</UnitOfMeasurement>
					// 						<Weight>' . $single_pack['Weight']['Value'] . '</Weight>
					// 					</PackageWeight>
					// 					' . $extraserviceoption . '
					// 				</Package>';
				}
				$xmlRequest =  Tools::file_get_contents(dirname(__FILE__) . '/xml/ltlrates.xml');
				$xmlRequest = str_replace('{ac_hit}', $access, $xmlRequest);
				$xmlRequest = str_replace('{usr}', $userid, $xmlRequest);
				$xmlRequest = str_replace('{pwd}', $passwd, $xmlRequest);
				$xmlRequest = str_replace('{from_name}', $general_settings['shipper_person_name'], $xmlRequest);
				$xmlRequest = str_replace('{from_acc}', $general_settings['account_number'], $xmlRequest);
				$xmlRequest = str_replace('{from_city}', $general_settings['freight_shipper_city'], $xmlRequest);
				$xmlRequest = str_replace('{from_state}', $general_settings['freight_shipper_state'], $xmlRequest);
				$xmlRequest = str_replace('{from_country}', $general_settings['base_country'], $xmlRequest);
				$xmlRequest = str_replace('{from_postal}', $general_settings['origin'], $xmlRequest);
				$xmlRequest = str_replace('{to_address}', $customerAddress->address1, $xmlRequest);
				$xmlRequest = str_replace('{to_city}', $customerAddress->city, $xmlRequest);
				$xmlRequest = str_replace('{to_country}', $destination_country, $xmlRequest);
				$xmlRequest = str_replace('{to_postal}', $customerAddress->postcode, $xmlRequest);
				$xmlRequest = str_replace('{to_state}', $state_details['iso_code'], $xmlRequest);
				$xmlRequest = str_replace('{dimension}', $pack_dim, $xmlRequest);
				$xmlRequest = str_replace('{weight}', $wght, $xmlRequest);
				$xmlRequest = str_replace('{pick}', $pick_date, $xmlRequest);
				
				$totl_request[] = $xmlRequest;
				//print_r(htmlspecialchars($xmlRequest));
				// die();

			}
			return $totl_request;
		
	}
	

	private function hit_get_ups_requests($ups_packs, $general_settings, $params)
	{

		// Time is modified to avoid date diff with server.
		$mailing_date = date('Y-m-d');
		$mailing_datetime = date('c');
		//$origin_postcode_city = $this->hit_get_postcode_city($this->origin_country, $this->freight_shipper_city, $this->origin);
		$orderCurrency = new Currency((int) $params->id_currency);
		$origin_postcode_city = $this->hit_get_postcode_city($general_settings['base_country'], $general_settings['freight_shipper_city'], $general_settings['origin']);
		$customerAddress = new Address($params->id_address_delivery);
		$prod = $params->getProducts();
		$total_amount = 0;
		if (!empty($prod)) {
			foreach ($prod as $key => $value) {
				$total_amount += $value['total_wt'];
			}
		}
		// print_r($total_amount);
		// $total_value = $this->hit_get_package_total_value($ups_packs);

		$customerAddressIso = $this->hit_getIsoCountryById((int) $customerAddress->id_country);
		$destination_postcode_city = $this->hit_get_postcode_city($customerAddressIso, $customerAddress->city, $customerAddress->postcode);
		$weight_unit = (isset($general_settings['weg_dim']) && $general_settings['weg_dim'] === 'yes') ? 'KGS' : 'LBS';
		$dim_unit = (isset($general_settings['weg_dim']) && $general_settings['weg_dim'] === 'yes') ? 'CM' : 'IN';
		$destination_country = "";
		if (("PR" == $customerAddressIso) && ("US" == $customerAddressIso)) {
			$destination_country = "PR";
		} else {
			$destination_country = $customerAddressIso;
		}
		$curr = $this->get_country_currency($destination_country);
		$ups_selectd_curr_id = Currency::getIdByIsoCode($curr);
		$ups_selectd_curr_obj = new Currency((int) $ups_selectd_curr_id);
		$ups_selectd_curr_rate = $ups_selectd_curr_obj->conversion_rate;
		$total_amount_converted = $total_amount *  $ups_selectd_curr_rate;
		$access = $general_settings['site_acess'];
		$userid = $general_settings['site_id'];
		$passwd = $general_settings['site_pwd'];
		$total_weight = $this->hit_get_package_piece($ups_packs);
		// print_r(round($total_amount_converted));
		// die();
		$totl_request = array();
		$cod = '';
		$package_xml = '';
		if (isset($general_settings['cod']) && $general_settings['cod'] == 'yes') {
			$cod = '<ShipmentServiceOptions><COD>
				<CODFundsCode>1</CODFundsCode>
				<CODAmount>
				<CurrencyCode>' . $curr . '</CurrencyCode>
				<MonetaryValue>' . round($total_amount_converted) . '</MonetaryValue>
				</CODAmount>
				</COD>
				</ShipmentServiceOptions>';
		}

		if ($general_settings['packing_type'] == 'weight_based') {
			if (!empty($ups_packs)) {
				foreach ($ups_packs as $single_pack) {
					$pack_dim = '';
					if (isset($general_settings['dimension_send']) && $general_settings['dimension_send'] == 'yes' && !empty($single_pack['Dimensions']) && $single_pack['Dimensions']['Length'] > 0) {
						$pack_dim = '<Dimensions>  
						                <UnitOfMeasurement>  
						                  <Code>' . $single_pack['Dimensions']['Units'] . '</Code>  
						                </UnitOfMeasurement>  
						                <Length>' . $single_pack['Dimensions']['Length'] . '</Length>  
						                <Width>' . $single_pack['Dimensions']['Width'] . '</Width>  
						                <Height>' . $single_pack['Dimensions']['Height'] . '</Height>  
						              </Dimensions>';
					}

					$extraserviceoption = '';
					if ($general_settings['rate_insure'] && $general_settings['rate_insure'] == 'yes') {
						$extraserviceoption = '<PackageServiceOptions><InsuredValue><CurrencyCode>' . $orderCurrency->iso_code . '</CurrencyCode><MonetaryValue>' . $single_pack['InsuredValue']['Amount'] . '</MonetaryValue></InsuredValue></PackageServiceOptions>';
					}

					$package_xml .= '<Package>
										<PackagingType>
											<Code>02</Code>
										</PackagingType>
										' . $pack_dim . '
										<PackageWeight>
											<UnitOfMeasurement>
												<Code>' . $weight_unit . '</Code>
											</UnitOfMeasurement>
											<Weight>' . $single_pack['Weight']['Value'] . '</Weight>
										</PackageWeight>
										' . $extraserviceoption . '
									</Package>';
				}
				
				$cus_classification = '';
				
				if($general_settings['base_country'] == 'US' && $general_settings['customer_classification'] != 'none'){
					$cus_classification = '<CustomerClassification>
					<Code>'.$general_settings['customer_classification'].'</Code>
					</CustomerClassification>';
				}

				$xmlRequest =  Tools::file_get_contents(dirname(__FILE__) . '/xml/rate.xml');
				$xmlRequest = str_replace('{customer_classification}',$cus_classification,$xmlRequest);
				$xmlRequest = str_replace('{ac_hit}', $access, $xmlRequest);
				$xmlRequest = str_replace('{usr}', $userid, $xmlRequest);
				$xmlRequest = str_replace('{pwd}', $passwd, $xmlRequest);
				$xmlRequest = str_replace('{from_name}', $general_settings['shipper_person_name'], $xmlRequest);
				$xmlRequest = str_replace('{from_acc}', $general_settings['account_number'], $xmlRequest);
				$xmlRequest = str_replace('{from_city}', $general_settings['freight_shipper_city'], $xmlRequest);
				$xmlRequest = str_replace('{from_state}', $general_settings['freight_shipper_state'], $xmlRequest);
				$xmlRequest = str_replace('{from_country}', $general_settings['base_country'], $xmlRequest);
				$xmlRequest = str_replace('{from_postal}', $general_settings['origin'], $xmlRequest);
				$xmlRequest = str_replace('{to_city}', $customerAddress->city, $xmlRequest);
				$xmlRequest = str_replace('{to_country}', $destination_country, $xmlRequest);
				$xmlRequest = str_replace('{to_postal}', $customerAddress->postcode, $xmlRequest);
				$xmlRequest = str_replace('{cod}', $cod, $xmlRequest);
				$xmlRequest = str_replace('{package}', $package_xml, $xmlRequest);

				$totl_request[] = $xmlRequest;
				//print_r(htmlspecialchars($xmlRequest));
				// die();

			}
		} else {
			if (!empty($ups_packs)) {
				foreach ($ups_packs as $single_pack) {
					$pack_dim = '';
					if (!empty($single_pack['Dimensions']) && $single_pack['Dimensions']['Length'] > 0) {
						$pack_dim = '<Dimensions>  
						                <UnitOfMeasurement>  
						                  <Code>' . $single_pack['Dimensions']['Units'] . '</Code>  
						                </UnitOfMeasurement>  
						                <Length>' . $single_pack['Dimensions']['Length'] . '</Length>  
						                <Width>' . $single_pack['Dimensions']['Width'] . '</Width>  
						                <Height>' . $single_pack['Dimensions']['Height'] . '</Height>  
						              </Dimensions>';
					}

					$extraserviceoption = '';
					if ($general_settings['rate_insure'] && $general_settings['rate_insure'] == 'yes') {
						$extraserviceoption = '<PackageServiceOptions><InsuredValue><CurrencyCode>' . $orderCurrency->iso_code . '</CurrencyCode><MonetaryValue>' . $single_pack['InsuredValue']['Amount'] . '</MonetaryValue></InsuredValue></PackageServiceOptions>';
					}

					$package_xml .= '<Package>
										<PackagingType>
											<Code>02</Code>
										</PackagingType>
										' . $pack_dim . '
										<PackageWeight>
											<UnitOfMeasurement>
												<Code>' . $weight_unit . '</Code>
											</UnitOfMeasurement>
											<Weight>' . $single_pack['Weight']['Value'] . '</Weight>
										</PackageWeight>
										' . $extraserviceoption . '
									</Package>';
				}
				$cus_classification = '';
				
				if($general_settings['base_country'] == 'US' && $general_settings['customer_classification'] != 'none'){
					$cus_classification = '<CustomerClassification>
					<Code>'.$general_settings['customer_classification'].'</Code>
					</CustomerClassification>';
				}

				$xmlRequest =  Tools::file_get_contents(dirname(__FILE__) . '/xml/rate.xml');
				$xmlRequest = str_replace('{customer_classification}',$cus_classification,$xmlRequest);
				$xmlRequest = str_replace('{ac_hit}', $access, $xmlRequest);
				$xmlRequest = str_replace('{usr}', $userid, $xmlRequest);
				$xmlRequest = str_replace('{pwd}', $passwd, $xmlRequest);
				$xmlRequest = str_replace('{from_name}', $general_settings['shipper_person_name'], $xmlRequest);
				$xmlRequest = str_replace('{from_acc}', $general_settings['account_number'], $xmlRequest);
				$xmlRequest = str_replace('{from_city}', $general_settings['freight_shipper_city'], $xmlRequest);
				$xmlRequest = str_replace('{from_state}', $general_settings['freight_shipper_state'], $xmlRequest);
				$xmlRequest = str_replace('{from_country}', $general_settings['base_country'], $xmlRequest);
				$xmlRequest = str_replace('{from_postal}', $general_settings['origin'], $xmlRequest);
				$xmlRequest = str_replace('{to_city}', $customerAddress->city, $xmlRequest);
				$xmlRequest = str_replace('{to_country}', $destination_country, $xmlRequest);
				$xmlRequest = str_replace('{to_postal}', $customerAddress->postcode, $xmlRequest);
				$xmlRequest = str_replace('{package}', $package_xml, $xmlRequest);
				$xmlRequest = str_replace('{cod}', $cod, $xmlRequest);
				$totl_request[] = $xmlRequest;
				//print_r(htmlspecialchars($xmlRequest));
				// die();
			}
		}

		return $totl_request;
	}
	public function hit_ups_is_eu_country($countrycode, $destinationcode)
	{
		$eu_countrycodes = array(
			'AT', 'BE', 'BG', 'CY', 'CZ', 'DE', 'DK', 'EE',
			'ES', 'FI', 'FR', 'GB', 'HU', 'IE', 'IT', 'LT', 'LU', 'LV',
			'MT', 'NL', 'PL', 'PT', 'RO', 'SE', 'SI', 'SK',
			'HR', 'GR'

		);
		return (in_array($countrycode, $eu_countrycodes) && in_array($destinationcode, $eu_countrycodes));
	}
	private function ups_rate_response($xmlrequest, $idCarrierReference, $url)
	{
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_POSTFIELDS, $xmlrequest);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt_array($curl, array(
			CURLOPT_URL            => $url,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING       => "",
			CURLOPT_MAXREDIRS      => 10,
			CURLOPT_HEADER         => false,
			CURLOPT_TIMEOUT        => 60,
			CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST  => 'POST',
		));
		$result = utf8_encode(curl_exec($curl));

		$xml = '';
		libxml_use_internal_errors(true);
		if (!empty($result)) {
			$xml = simplexml_load_string(utf8_encode($result));
		}
		if ($xml) {
			return $xml;
		} else {
			return null;
		}
	}
	private function ups_freight_rate_response($xmlrequest, $idCarrierReference, $url,$general_settings)
	{
		// print_r(json_encode($xmlrequest));
		// die();

		$xml = simplexml_load_string($xmlrequest);
		$curl = curl_init($url); // Create REST Request
			curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
			curl_setopt($curl, CURLOPT_POST, true);
			curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($xml));
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Accept: application/json', 'AccessLicenseNumber: ' . $general_settings["site_acess"], 'Username: ' . $general_settings["site_id"], 'Password:' . $general_settings["site_pwd"]));
			$result = utf8_encode(curl_exec($curl));
			

		$xml = '';
		if (!empty($result)) {
			$xml = json_decode($result);
		}
		if ($xml) {
			return $xml;
		} else {
			return null;
		}
	}

	private function hit_getIsoCountryById($id)
	{
		$iso = Country::getIsoById((int) $id);
		if (isset(self::$isoCountryFix[$iso])) {
			return self::$isoCountryFix[$iso];
		} else {
			return $iso;
		}
	}
	private function hit_getIsoStateById($id)
	{
		$state = new State($id);
		return $state->iso_code;
	}
	private function hit_get_package_total_value($ups_packages)
	{
		$total_value = 0;
		if ($ups_packages) {
			foreach ($ups_packages as $key => $parcel) {
				$total_value += $parcel['InsuredValue']['Amount'] * $parcel['GroupPackageCount'];
			}
		}

		return $total_value;
	}

	private function hit_get_package_piece($ups_packages)
	{
		$pieces = 0;
		if ($ups_packages) {
			foreach ($ups_packages as $key => $parcel) {
				$package_total_weight   = (string) $parcel['Weight']['Value'];
				$package_total_weight   = str_replace(',', '.', $package_total_weight);
				if ($package_total_weight < 0.001) {
					$package_total_weight = 0.001;
				} else {
					$package_total_weight = round((float)$package_total_weight, 3);
				}
				$pieces += $package_total_weight;
			}
		}
		return $pieces;
	}
	private function hit_get_pack_type($selected)
	{
		$pack_type = 'BOX';
		if ($selected == 'FLY') {
			$pack_type = 'FLY';
		}
		return $pack_type;
	}
	private function hit_get_postcode_city($country, $city, $postcode)
	{
		$no_postcode_country = array(
			'AE', 'AF', 'AG', 'AI', 'AL', 'AN', 'AO', 'AW', 'BB', 'BF', 'BH', 'BI', 'BJ', 'BM', 'BO', 'BS', 'BT', 'BW', 'BZ', 'CD', 'CF', 'CG', 'CI', 'CK',
			'CL', 'CM', 'CO', 'CR', 'CV', 'DJ', 'DM', 'DO', 'EC', 'EG', 'ER', 'ET', 'FJ', 'FK', 'GA', 'GD', 'GH', 'GI', 'GM', 'GN', 'GQ', 'GT', 'GW', 'GY', 'HK', 'HN', 'HT', 'IE', 'IQ', 'IR',
			'JM', 'JO', 'KE', 'KH', 'KI', 'KM', 'KN', 'KP', 'KW', 'KY', 'LA', 'LB', 'LC', 'LK', 'LR', 'LS', 'LY', 'ML', 'MM', 'MO', 'MR', 'MS', 'MT', 'MU', 'MW', 'MZ', 'NA', 'NE', 'NG', 'NI',
			'NP', 'NR', 'NU', 'OM', 'PA', 'PE', 'PF', 'PY', 'QA', 'RW', 'SA', 'SB', 'SC', 'SD', 'SL', 'SN', 'SO', 'SR', 'SS', 'ST', 'SV', 'SY', 'TC', 'TD', 'TG', 'TL', 'TO', 'TT', 'TV', 'TZ',
			'UG', 'UY', 'VC', 'VE', 'VG', 'VN', 'VU', 'WS', 'XA', 'XB', 'XC', 'XE', 'XL', 'XM', 'XN', 'XS', 'YE', 'ZM', 'ZW'
		);

		$postcode_city = !in_array($country, $no_postcode_country) ? $postcode_city = "<Postalcode>{$postcode}</Postalcode>" : '';
		if (!empty($city)) {
			$postcode_city .= "<City>{$city}</City>";
		}
		return $postcode_city;
	}
	public function getOrderShippingCostExternal($params)
	{

		return false;
	}

	protected function addCarrier($key, $value)
	{

		$carrier = new Carrier();
		$carrier->url = 'https://www.ups.com/track?loc=en_US&tracknum=@';
		$carrier->name = $this->l($value);
		$carrier->is_module = true;
		$carrier->active = 1;
		$carrier->range_behavior = 1;
		$carrier->need_range = 1;
		$carrier->shipping_external = true;
		$carrier->external_module_name = $this->name;
		$carrier->shipping_method = Carrier::SHIPPING_METHOD_WEIGHT;

		foreach (Language::getLanguages() as $lang)
			$carrier->delay[$lang['id_lang']] = $this->l($value);

		if ($carrier->add() == true) {
			@copy(dirname(__FILE__) . '/views/img/carrier_image.png', _PS_SHIP_IMG_DIR_ . '/' . (int)$carrier->id . '.jpg');
			Configuration::updateValue('HITUPS_' . $key, (int)$carrier->id);
			Configuration::updateValue('HITUPS_' . $carrier->id, $key);
			return $carrier;
		}

		return false;
	}

	protected function addGroups($carrier)
	{
		$groups_ids = array();
		$groups = Group::getGroups(Context::getContext()->language->id);
		foreach ($groups as $group)
			$groups_ids[] = $group['id_group'];

		$carrier->setGroups($groups_ids);
	}

	protected function addRanges($carrier)
	{
		$range_price = new RangePrice();
		$range_price->id_carrier = $carrier->id;
		$range_price->delimiter1 = '0';
		$range_price->delimiter2 = '10000';
		$range_price->add();

		$range_weight = new RangeWeight();
		$range_weight->id_carrier = $carrier->id;
		$range_weight->delimiter1 = '0';
		$range_weight->delimiter2 = '10000';
		$range_weight->add();
	}

	protected function addZones($carrier)
	{
		$zones = Zone::getZones();

		foreach ($zones as $zone)
			$carrier->addZone($zone['id_zone']);
	}

	public function hookHeader()
	{
		if ($this->context->controller->php_self !== 'product') {
			return;
		}
		$this->context->controller->addJS($this->_path.'/views/js/front.js');
		$this->context->controller->addCSS($this->_path.'/views/css/front.css');
	}

	public function hookUpdateCarrier($params)
	{
		/**
         * Not needed since 1.5
         * You can identify the carrier by the id_reference
        */
		foreach ($this->_carriers as $key => $value) {
			if ($params['carrier']->id_reference == Configuration::get('HIT_UPS'.$key)) {
				Configuration::updateValue('HIT_UPS'.$key, $params['carrier']->id);
			}
		}
	}

	public function hookActionCarrierProcess()
	{
		/* Place your code here. */
	}

	public function hookActionCarrierUpdate()
	{

	}

	public function hookActionOrderDetail()
	{
		/* Place your code here. */

	}

	// public function hookDisplayAdminOrder(array $params)
	// {
    // //    $output = $this->create_shipment_label($params);
	// // 	return $output;
	// }

	public function hookDisplayAdminOrderContentShip(array $params)
	{
       $output = $this->create_shipment_label($params);
		return $output;
	}
	
	public function hookDisplayAdminOrderTabContent(array $params)
	{
       $output = $this->create_shipment_label($params);
        return $output;
	}
	

	public function create_shipment_label($params){
		// print_r('SSSSSSS');
		// die();
		$output = "";
		$order_id = isset($params['id_order']) ? $params['id_order'] : null;
		if(!empty($order_id)){
			$order = new Order((int) $order_id);
		}
		if(empty($order_id))
		{
			$order = isset($params['order']) ? $params['order'] : null;
			if(empty($order))
			{
				return;
			}
			$order_id = $order->id;

		}


		//$order = new Order((int) $order_id);
		$package = $order->getProducts(); //$this->hit_get_package_from_order($order);
		$general_settings = $this->hit_get_ups_data_db();
		$orderCurrency = new Currency((int) $order->id_currency);
		$ps_weg_unit = strtoupper(Configuration::get('PS_WEIGHT_UNIT'));
		$ps_dim_unit = strtoupper(Configuration::get('PS_DIMENSION_UNIT'));
		$mod_weg_unit = (isset($general_settings['weg_dim']) && $general_settings['weg_dim'] == 'yes') ? 'KG' : 'LB';
		$mod_dim_unit = (isset($general_settings['weg_dim']) && $general_settings['weg_dim'] == 'yes') ? 'CM' : 'IN';

		if ( !empty($ps_weg_unit) ) {
			$ps_weg_unit = $this->get_ps_weg_unit($ps_weg_unit);
		}
		if ( !empty($ps_dim_unit) ) {
			$ps_dim_unit = $this->get_ps_dim_unit($ps_dim_unit);
		}

		if ( !empty($ps_weg_unit) && ($ps_weg_unit != $mod_weg_unit) ) {
			foreach ($package as $key => $prod) {
				$package[$key]['weight'] = (isset($prod['weight']) && !empty($prod['weight'])) ? round($this->convert_weg($prod['weight'], $ps_weg_unit, $mod_weg_unit), 3) : 1;
				if (!empty($ps_dim_unit) && ($ps_dim_unit != $mod_dim_unit) ) {
					$package[$key]['width'] = (isset($prod['width']) && !empty($prod['width'])) ? round($this->convert_dim($prod['width'], $ps_dim_unit, $mod_dim_unit), 3) : 1;
					$package[$key]['height'] = (isset($prod['height']) && !empty($prod['height'])) ? round($this->convert_dim($prod['height'], $ps_dim_unit, $mod_dim_unit), 3) : 1;
					$package[$key]['depth'] = (isset($prod['depth']) && !empty($prod['depth'])) ? round($this->convert_dim($prod['depth'], $ps_dim_unit, $mod_dim_unit), 3) : 1;
				}
			}
		}

		$dimensions = array();
		$package_single = $this->hit_get_ups_packages($package, $general_settings, $orderCurrency, true);
		if (empty($package_single[0])) {
			$package_single[0][0] = $this->hit_get_ups_dummy_package();
		}
		foreach ($package_single as $package_group_key	=>	$package_group) {
			if (!empty($package_group) && is_array($package_group)) {
				$dimensions[]	=	$package_group;
			}
		}
	

		if (((bool)Tools::isSubmit('hit_create_shipment_ups')) == true) {
			$ship_return_data = $this->hit_create_shipment_ups($order, $package_single, $general_settings, $orderCurrency);
			if ($ship_return_data == 'Shipment Created Successfully.') {
				$output = $this->displayConfirmation($ship_return_data);
			} else {
				$output = $this->displayError($ship_return_data);
			}
		}
		$label_check = Configuration::get('HIT_UPS_LABEL_IMAGE' . $order_id);
		$label_data = Configuration::get('HIT_UPS_LABEL_DATA' . $order_id);

		if (((bool)Tools::isSubmit('hit_ups_shipment_label')) == true) {
			$stored_label_format = Configuration::get('HIT_UPS_SAVED_LABEL_FORMAT' . $order_id);
			header('Content-Type: application/' . $stored_label_format);
			header('Content-disposition: attachment; filename="hit_ups_shipping_label_' . $order_id . $stored_label_format . '"');
			print($this->hit_get_base_decoding($label_data));
		}

		if (((bool)Tools::isSubmit('hit_ups_commercial_invoice')) == true) {
			$label_com = Configuration::get('HIT_UPS_LABEL_COM' . $order_id);
			header('Content-Type: application/pdf');
			header('Content-disposition: attachment; filename="commercial-invoice-' . $order_id . '.pdf"');
			print($this->hit_get_base_decoding($label_com));
		}
		if (((bool)Tools::isSubmit('hit_ups_reset_invoice')) == true) {
			$label_check = json_decode($label_check,true);
			if (isset($general_settings['api_type']) && $general_settings['api_type'] == "REST") {
				if ( ! class_exists( 'ups_rest' ) ) {
					include_once 'classes/ups_rest_main.php';
				}
				$ups_rest_obj = new ups_rest();
				$auth_token = $this->getAuthToken($ups_rest_obj);
				if (empty($auth_token)) {
					return;
				}
				$ups_rest_obj->mode = (isset($general_settings['production']) && $general_settings['production'] == 'yes') ? 'live' : 'test';
				$ups_rest_obj->get_ship_del_res_rest($label_check['ShipmentID'], $auth_token);
			} else {
				$accessLicenseNumber = $general_settings['site_acess'];
				$userId = $general_settings['site_id'];
				$password = $general_settings['site_pwd'];

				$accessRequestXML = new SimpleXMLElement("<AccessRequest></AccessRequest>");
				$accessRequestXML->addChild("AccessLicenseNumber", $accessLicenseNumber);
				$accessRequestXML->addChild("UserId", $userId);
				$accessRequestXML->addChild("Password", $password);

				// Create VoidShipmentRequest XMl
				$voidShipmentRequestXML = new SimpleXMLElement("<VoidShipmentRequest ></VoidShipmentRequest >");
				$request = $voidShipmentRequestXML->addChild('Request');
				$request->addChild("RequestAction", "1");

				$voidShipmentRequestXML->addChild("ShipmentIdentificationNumber", $label_check['ShipmentID']);
				$requestXML = $accessRequestXML->asXML() . $voidShipmentRequestXML->asXML();

				$request_url = (isset($general_settings['production']) && $general_settings['production'] == 'yes') ? 'https://onlinetools.ups.com/ups.app/xml/Void' : 'https://wwwcie.ups.com/ups.app/xml/Void';

				$xml = $this->ups_rate_response($requestXML, '', $request_url);
			}

			Configuration::updateValue('HIT_UPS_LABEL_IMAGE' . $order_id, null);
			Configuration::updateValue('HIT_UPS_LABEL_DATA' . $order_id, null);
			Configuration::updateValue('HIT_UPS_LABEL_COM' . $order_id, null);
		}
		$label_check = Configuration::get('HIT_UPS_LABEL_IMAGE' . $order_id);
		$label_data = Configuration::get('HIT_UPS_LABEL_DATA' . $order_id);
		//$label_com = Configuration::get('HIT_UPS_LABEL_COM'.$order_id);


		if (!empty($label_check) && !empty($label_data)) {
			$label_check = json_decode($label_check,true);
			$this->context->smarty->assign('label_check', $label_check);
			$this->context->smarty->assign('order_id', $order_id);
		} else {
			$this->context->smarty->assign('label_check', false);
		}

		$selected_carrier = new Carrier($order->id_carrier);
		$carrier_ups_value = Configuration::get('HITUPS_' . $selected_carrier->id_reference);
		$carrier_ups_value = str_replace("ups_", '', $carrier_ups_value);
		$format_type = isset($general_settings['label_format']) ? $general_settings['label_format'] : "gif";
		if (isset($general_settings['api_type']) && $general_settings['api_type'] == "REST") {
			$format_type = "gif";
		}
		if (empty($carrier_ups_value)) {
			$carrier_ups_value = '0';
		}
		$my_carriers = array();
		foreach ($this->_carriers as $key => $ind_carrier) {
			$my_carriers_key = str_replace("ups_", '', $key);
			$my_carriers[$my_carriers_key] = $ind_carrier;
		}
		$this->context->smarty->assign('order_id', $order_id);
		$this->context->smarty->assign('services', $my_carriers);
		$this->context->smarty->assign('dimensions', $dimensions);
		$this->context->smarty->assign('general_settings', $general_settings);
		$this->context->smarty->assign('carrier_ups_value', $carrier_ups_value);
		$this->context->smarty->assign('packing_types_ser', $this->packing_types_ser);
		$this->context->smarty->assign('format_type', strtolower($format_type));

		$stat = PS_ADMIN_DIR;
		$admin_folder = substr(strrchr($stat, "\ "), 1);
		if (empty($admin_folder)) {
			$admin_folder = ( isset($general_settings['admin_fol']) && !empty($general_settings['admin_fol']) ) ? $general_settings['admin_fol'] : '';
		}
		$admin_url =_PS_BASE_URL_.__PS_BASE_URI__.$admin_folder;
		$token = Tools::getAdminTokenLite('AdminModules');
		$this->context->smarty->assign('token', $token);
		$this->context->smarty->assign('admin_url', $admin_url );

		$output .= $this->context->smarty->fetch($this->local_path . 'views/templates/admin/order.tpl');

		return $output;
	}
	private function hit_create_shipment_ups($order, $package, $general_settings, $orderCurrency)
	{
		$order_id = $order->id;
		$manual_weight = (Tools::getValue('ups_manual_weight')) ? Tools::getValue('ups_manual_weight') : 0;
		$manual_length = (Tools::getValue('ups_manual_length')) ? Tools::getValue('ups_manual_length') : 0;
		$manual_width = (Tools::getValue('ups_manual_width')) ? Tools::getValue('ups_manual_width') : 0;
		$manual_height = (Tools::getValue('ups_manual_height')) ? Tools::getValue('ups_manual_height') : 0;
		$manual_insurance = (Tools::getValue('ups_manual_insurance')) ? Tools::getValue('ups_manual_insurance') : 0;
		$selected_service = (Tools::getValue('hit_ups_services')) ? Tools::getValue('hit_ups_services') : 'P';
		$open_time = (Tools::getValue('hit_ups_open_time')) ? Tools::getValue('hit_ups_open_time') : '';
		$close_time = (Tools::getValue('hit_ups_close_time')) ? Tools::getValue('hit_ups_close_time') : '';
		$pick_date = (Tools::getValue('hit_ups_pick_date')) ? Tools::getValue('hit_ups_pick_date') : '';
		$hit_ups_ship_desc = (Tools::getValue('hit_ups_ship_desc')) ? Tools::getValue('hit_ups_ship_desc') : 'shipment content';
		$hit_ups_packing = (Tools::getValue('hit_ups_packing')) ? Tools::getValue('hit_ups_packing') : '02';
		$hit_ups_cod = (Tools::getValue('hit_ups_cod') == 'yes') ? Tools::getValue('hit_ups_cod') : 'no';
		$weight_unit = (isset($general_settings['weg_dim']) && $general_settings['weg_dim'] === 'yes') ? 'KGS' : 'LBS';
		$customerAddress = new Address((int) $order->id_address_delivery);
		$destination_country_name = $this->hit_getIsoCountryById((int) $customerAddress->id_country);

		$in_shipper =  array(
			'shipper_id'			=>  $general_settings['account_number'],
			'company_name'		  =>  str_replace("&", '&amp;', $general_settings['shipper_company_name']),
			'registered_account'	=>  $general_settings['account_number'],
			'address_line'		  =>  $general_settings['freight_shipper_street'],
			'address_line2'		 =>  $general_settings['shipper_street_2'],
			'city'				  =>  $general_settings['freight_shipper_city'],
			'division'			  =>  $general_settings['freight_shipper_state'],
			'division_code'		 =>  $general_settings['freight_shipper_state'],
			'postal_code'		   =>  $general_settings['origin'],
			'country_code'		  =>  $general_settings['base_country'],
			'country_name'		  =>  $general_settings['base_country'],
			'contact_person_name'   =>  $general_settings['shipper_person_name'],
			'contact_phone_number'  =>  $general_settings['shipper_phone_number'],
			'contact_email'		 =>  $general_settings['shipper_email'],
		);
		

		$id_customer = $order->id_customer;
		$customer = new Customer((int)$id_customer);
		$toaddress = array(
			'first_name'	=> $customerAddress->firstname,
			'last_name'	 => $customerAddress->lastname,
			'company'	   => substr(!empty($customerAddress->company) ? str_replace("&", "&amp;", $customerAddress->company) : $customerAddress->firstname, 0, 26),
			'address_1'	 => $customerAddress->address1,
			'address_2'	 => $customerAddress->address2,
			'city'		  => $customerAddress->city,
			'postcode'	  => $customerAddress->postcode,
			'country'	   => $destination_country_name,
			'email'		 => $customer->email,
			'phone'		 => (!empty($customerAddress->phone) ? $customerAddress->phone : '1234567890'),
			'state'      => $this->hit_getIsoStateById((int) $customerAddress->id_state),
			'name'		 => $customerAddress->firstname.' '.$customerAddress->lastname
		);
		if ($selected_service == '308' || $selected_service == '309' || $selected_service == '334' || $selected_service == '349') {
			
			//FREIGHT LTL
			$dim_unit = (isset($general_settings['weg_dim']) && $general_settings['weg_dim'] === 'yes') ? 'CM' : 'IN';
			$dimansions = array();
			$total_value = 0;
			$total_weight = 0;
			$key = 0;
			$dimansions[1] = $dimansions[2] = $dimansions[3] = 0;
			$i = 0;
			$in_packge = $package;
			foreach ($package as $group_kay => $parcel) {
				$index = $key + 1;
				if ($manual_weight[$i] < 0.01) {
					$manual_weight[$i] = 0.01;
				} else {
					$manual_weight[$i] = round((float)$manual_weight[$i], 3);
				}

				$total_weight += $manual_weight[$i] * $parcel['GroupPackageCount'];
				$total_value += $parcel['InsuredValue']['Amount'] * $parcel['GroupPackageCount'];
				$pack_type = $this->hit_two_get_pack_type($parcel['packtype']);
				$manual_weight[$i] = (string)$manual_weight[$i];
				if (!empty($manual_width[$i]) && $manual_height[$i] && $manual_length[$i]) {
					$dimansions[1] += $manual_height[$i];
					$dimansions[2] += $manual_width[$i];
					$dimansions[3] += $manual_length[$i];
				}
			}
			$pcs = '<NumberOfPieces>' . $index . '</NumberOfPieces>
            <PackagingType>
               <Code>PKG</Code>
            </PackagingType>
            <Weight>
               <UnitOfMeasurement>
                  <Code>' . $weight_unit . '</Code>
               </UnitOfMeasurement>
               <Value>' . $total_weight . '</Value>
			</Weight>';

			if ($dimansions[1] && $dimansions[2] && $dimansions[3]) {
				// $Dimensions
				$Dimensions = '<Dimensions><Height>' . $dimansions[1] . '</Height><Length>' . $dimansions[3] . '</Length><UnitOfMeasurement><Code>' . $dim_unit . '</Code></UnitOfMeasurement><Width>' . $dimansions[2] . '</Width></Dimensions>';
			}
			$adrs_to = '';
			if (isset($customerAddress->address1) && isset($customerAddress->address2)) {
				$adrs_to = $customerAddress->address1 . "," . $customerAddress->address2;
			} else {
				$adrs_to = $customerAddress->address1;
			}
			$open_time = str_replace(':', '', $open_time);
			$close_time = str_replace(':', '', $close_time);
			$pick_date = str_replace('-', '', $pick_date);
			$state_details = Db::getInstance()->getRow('SELECT `iso_code` FROM `' . _DB_PREFIX_ . 'state` WHERE `id_state` = ' . (int)($customerAddress->id_state));
			$statecode = $state_details['iso_code'];
			$pay_address = '<Address>
			<AddressLine>' . $adrs_to . '</AddressLine>
			<City>' . $toaddress['city'] . '</City>
			<CountryCode>' . $toaddress['country'] . '</CountryCode>
			<PostalCode>' . $toaddress['postcode'] . '</PostalCode>
			<StateProvinceCode>' . $statecode . '</StateProvinceCode>
		 </Address>';
			$pick_req = '<EarliestTimeReady>' . $open_time . '</EarliestTimeReady>
		 <LatestTimeReady>' . $close_time . '</LatestTimeReady>
		 <PickupDate>' . $pick_date . '</PickupDate>';
			$payer_name =  $toaddress['first_name'] . " " . $toaddress['last_name'];
			$pay_number = $toaddress['phone'];


			$adrs_from = '';
			if (isset($general_settings['freight_shipper_street']) && isset($general_settings['shipper_street_2'])) {
				$adrs_from = $in_shipper['address_line'] . ',' . $in_shipper['address_line2'];
			} else {
				$adrs_from = $in_shipper['address_line'];
			}

			$from_address = '<Address>
			<AddressLine>' . $adrs_from . '</AddressLine>
			<City>' . $in_shipper['city'] . '</City>
			<CountryCode>' . $in_shipper['country_code'] . '</CountryCode>
			<PostalCode>' . $in_shipper['postal_code'] . '</PostalCode>
			<StateProvinceCode>' . $in_shipper['division_code'] . '</StateProvinceCode>
		 </Address>';

			$xmlRequest =  Tools::file_get_contents(dirname(__FILE__) . '/xml/ltl.xml');
			$xmlRequest = str_replace('{content}', $hit_ups_ship_desc, $xmlRequest);
			$xmlRequest = str_replace('{dimensions}', $Dimensions, $xmlRequest);
			$xmlRequest = str_replace('{pcs}', $pcs, $xmlRequest);
			$xmlRequest = str_replace('{toaddress}', $pay_address, $xmlRequest);
			$xmlRequest = str_replace('{pickup}', $pick_req, $xmlRequest);
			$xmlRequest = str_replace('{payname}', $payer_name, $xmlRequest);
			$xmlRequest = str_replace('{paynumber}', $pay_number, $xmlRequest);
			$xmlRequest = str_replace('{accountnumber}', $general_settings['account_number'], $xmlRequest);
			$xmlRequest = str_replace('{fromaddress}', $from_address, $xmlRequest);
			$xmlRequest = str_replace('{shippercompanyname}', $in_shipper['company_name'], $xmlRequest);
			$xmlRequest = str_replace('{shipperphone}', $in_shipper['contact_phone_number'], $xmlRequest);
			$xmlRequest = str_replace('{shipattention}', $in_shipper['contact_person_name'], $xmlRequest);
			$xmlRequest = str_replace('{shipmail}', $in_shipper['contact_email'], $xmlRequest);


			$xml = simplexml_load_string($xmlRequest);
			$request_url = (isset($general_settings['production']) && $general_settings['production'] == 'yes') ? 'https://onlinetools.ups.com/ship/v1607/freight/shipments/ground' : 'https://wwwcie.ups.com/ship/v1607/freight/shipments/ground';

			$curl = curl_init($request_url); // Create REST Request
			curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
			curl_setopt($curl, CURLOPT_POST, true);
			curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($xml));
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Accept: application/json', 'AccessLicenseNumber: ' . $general_settings["site_acess"], 'Username: ' . $general_settings["site_id"], 'Password:' . $general_settings["site_pwd"]));
			$result = utf8_encode(curl_exec($curl));
			$xml = json_decode($result);
			// print_r($xml);
			// die();
			if (empty($xml)) {
				$return = array('ErrorMessage' => 'UPS Connection Problem With API. Contact HIT Tech Market');
			} else if (isset($xml->response->errors)) {
				$return = array('ErrorMessage' => $xml->response->errors[0]->message) ;
			} else if (isset($xml->FreightShipResponse->ShipmentResults->Documents->Image)) {

				$LabelImage = (string) $xml->FreightShipResponse->ShipmentResults->Documents->Image->GraphicImage;
				
				if (empty($xml)) {
					$return = array('ErrorMessage' => 'UPS Connection Problem With API. Contact HIT Tech Market');
				} else if (isset($xml->FreightShipResponse->ShipmentResults->Documents->Image)) {
					$return = array(
						'ShipmentID' => (string) $xml->FreightShipResponse->ShipmentResults->ShipmentNumber,
						'ErrorMessage' => '',
						'selected_service' => $selected_service,
						'labels' => 0
					);
					$sample_base64_encoded_pdf = $this->hit_generate_commercial_invoice($general_settings, $order, $in_packge, $in_shipper, $toaddress, $orderCurrency, $return['ShipmentID']);

					$CommercialInvoice	=   (string)$sample_base64_encoded_pdf;

					



					Configuration::updateValue('HIT_UPS_LABEL_IMAGE' . $order_id, json_encode($return));
					Configuration::updateValue('HIT_UPS_LABEL_DATA' . $order_id, $LabelImage);
					Configuration::updateValue('HIT_UPS_LABEL_COM' . $order_id, $CommercialInvoice);



					$saved_label_format = '.pdf';
					Configuration::updateValue('HIT_UPS_SAVED_LABEL_FORMAT' . $order_id, $saved_label_format);


					$fp = fopen('hit_ups_shipping_label_' . $order_id . $saved_label_format, 'wb');
					fwrite($fp, base64_decode($LabelImage)); //Create COD Return PNG or PDF file
					fclose($fp);
					$order->shipping_number = $return['ShipmentID'];
					$order->update();
					
					$fp = fopen('commercial-invoice-' . $order_id . '.pdf', 'wb');
					fwrite($fp, base64_decode($CommercialInvoice)); //Create COD Return PNG or PDF file
					fclose($fp);
					//$order_carrier = new OrderCarrier($order_id);
					//$order_carrier->tracking_number = $return['ShipmentID'];
					//$order_carrier->update();
					$sql = 'update `' . _DB_PREFIX_ . 'order_carrier` set tracking_number = \'' . $return['ShipmentID'] . '\' where id_order = ' . $order->id;
					if (!Db::getInstance()->execute($sql))
						die('error!');

					if (isset($general_settings['oss']) && $general_settings['oss'] == 'yes') {
						$objOrder = new Order($order_id);
						$history = new OrderHistory();
						$history->id_order = (int)$objOrder->id;
						$history->changeIdOrderState(4, (int)($objOrder->id)); //order status=5 Delivered
						$history->save();
						//$history->addWithemail(true);
					}

					if (isset($general_settings['osd']) && $general_settings['osd'] == 'yes') {
						$site_id = Configuration::get('hit_ups_tracking_site_id', '');
						if (!empty($site_id)) {
							Db::getInstance()->execute("INSERT INTO `" . _DB_PREFIX_ . "hit_ups_tracking` ( `tracking_number`, `order_no`, `tracking_status`) VALUES (" . pSQL($return['ShipmentID']) . ", " . pSQL($order_id) . ", 'open')");
							Configuration::updateValue('hit_ups_TRACKING' . pSQL($order_id), 'yes');
						}
					}
				}
			} else {
				$return_message = $this->l('Something Went Wrong. Check Your Module Configurartion Access Keys.');
			}
			if (empty($return['ErrorMessage'])) {
				$return_message = $this->l('Shipment Created Successfully.');
			} else {
				$return_message = $this->l($return['ErrorMessage']);
			}
			return $return_message;
		} else {

			$mailing_date = date('Y-m-d');
			$mailing_datetime = date('c');


			$ups_configured_curr = include('data_helper/country_details.php');
			$ups_selected_curr = $ups_configured_curr[$general_settings['base_country']]['currency'];
			if (empty($ups_selected_curr)) {
				$ups_selected_curr = $orderCurrency->iso_code;
			}
			$ups_selectd_curr_id = Currency::getIdByIsoCode($ups_selected_curr);
			$ups_selectd_curr_obj = new Currency((int) $ups_selectd_curr_id);

			if (!Validate::isLoadedObject($ups_selectd_curr_obj)) {
				//	return false;
			}

			$ups_selectd_curr_rate = $ups_selectd_curr_obj->conversion_rate;
			$order_subtotal = $order->total_paid - $order->total_shipping;
			$order_subtotal = (float) round(($order_subtotal * $ups_selectd_curr_rate), 2);

			$destination_city = Tools::strtoupper($customerAddress->city);
			$destination_postcode = Tools::strtoupper($customerAddress->postcode);
			$consignee_name = $customerAddress->firstname . ' ' . $customerAddress->lastname;
			$order_currency = $orderCurrency->iso_code;
			//$cod_order_total	=   $order_subtotal;

			if (isset($general_settings['api_type']) && $general_settings['api_type'] == "REST") {
				if ( ! class_exists( 'ups_rest' ) ) {
					include_once 'classes/ups_rest_main.php';
				}
				$ups_rest_obj = new ups_rest();
				$auth_token = $this->getAuthToken($ups_rest_obj);
				if (empty($auth_token)) {
					return;
				}
				$ups_packs = $package;
				if (!empty($manual_weight)) {
					foreach ($manual_weight as $key => $w_val) {
						$ups_packs[$key]['Weight']['Value'] = $w_val;
						$ups_packs[$key]['Dimensions']['Length'] = $manual_length[$key];
						$ups_packs[$key]['Dimensions']['Width'] = $manual_width[$key];
						$ups_packs[$key]['Dimensions']['Height'] = $manual_height[$key];
						if (isset($manual_insurance[$key]) && $manual_insurance[$key] > 0) {
							$ups_packs[$key]['InsuredValue']['Amount'] = $manual_insurance[$key];
						}
					}
				}
				
				$gen_settings = $this->getGenSettings($general_settings);
				$gen_settings['shipment_content'] = $hit_ups_ship_desc;
				$gen_settings['pack_type'] = $hit_ups_packing;
				$gen_settings['cod'] = ($hit_ups_cod == "yes") ? "Y" : "N";
				$gen_settings['service_code'] = $selected_service;
				$gen_settings['products'] = $order->getProducts();
				$ven_settings = $this->getVenSettings($general_settings);
				$ups_rest_obj->mode = (isset($general_settings['production']) && $general_settings['production'] == 'yes') ? 'live' : 'test';
				$ups_rest_obj->orderCurrency = $order_currency;
				$ups_rest_obj->recCurrency = $this->get_country_currency($toaddress['country']);
				$requestXML = $ups_rest_obj->make_ship_req($gen_settings, $ven_settings, $toaddress, $ups_packs);
				$xmloutput = $ups_rest_obj->get_ship_res_rest($requestXML, $auth_token);
				$xml = isset($xmloutput->ShipmentResponse) ? $xmloutput->ShipmentResponse : $xmloutput;
			} else {
				$pieces = "";
				$total_packages = 0;
				$total_weight = 0;
				$dimansions = array();
				$dimansions[1] = $dimansions[2] = $dimansions[3] = 0;
				$total_value = 0;
				$i = 0;
				$key = 0;
				$in_packge = $package;
				if ($package) {
					foreach ($package as $group_kay => $parcel) {

						$index = $key + 1;
						$total_packages += $parcel['GroupPackageCount'];
						if ($manual_weight[$i] < 0.01) {
							$manual_weight[$i] = 0.01;
						} else {
							$manual_weight[$i] = round((float)$manual_weight[$i], 3);
						}
						$total_weight += $manual_weight[$i] * $parcel['GroupPackageCount'];
						$total_value += $parcel['InsuredValue']['Amount'] * $parcel['GroupPackageCount'];
						$pack_type = $this->hit_two_get_pack_type($parcel['packtype']);
						$manual_weight[$i] = (string)$manual_weight[$i];
						$pieces .= '<Piece><PieceID>' . $index . '</PieceID>';
						$pieces .= '<PackageType>' . $pack_type . '</PackageType>';
						$pieces .= '<Weight>' . $manual_weight[$i] . '</Weight>';
						if (!empty($manual_width[$i]) && $manual_height[$i] && $manual_length[$i]) {
							$dimansions[1] += $manual_height[$i];
							$dimansions[2] += $manual_width[$i];
							$dimansions[3] += $manual_length[$i];
							$pieces .= '<Width>' . round($manual_width[$i]) . '</Width>';
							$pieces .= '<Height>' . round($manual_height[$i]) . '</Height>';
							$pieces .= '<Depth>' . round($manual_length[$i]) . '</Depth>';
						}
						$pieces .= '</Piece>';
					}
				}

				$total_value = $total_value * $ups_selectd_curr_rate;
				$special_service_insurance = ($general_settings['rate_insure'] && $total_value != 0) ? "<InsuredAmount>{$total_value}</InsuredAmount>" : "";


				//for ups 
				$customerAddressIso = $this->hit_getIsoCountryById((int) $customerAddress->id_country);
				if (("PR" == $customerAddressIso) && ("US" == $customerAddressIso)) {
					$destination_country = "PR";
				} else {
					$destination_country = $customerAddressIso;
				}

				$request_url = (isset($general_settings['production']) && $general_settings['production'] == 'yes') ? 'https://onlinetools.ups.com/ups.app/xml/ShipConfirm' : 'https://wwwcie.ups.com/ups.app/xml/ShipConfirm';

				$dim_unit = (isset($general_settings['weg_dim']) && $general_settings['weg_dim'] === 'yes') ? 'CM' : 'IN';


				$access = $general_settings['site_acess'];
				$userid = $general_settings['site_id'];
				$passwd = str_replace("&", "&amp;", $general_settings['site_pwd']);

				// Create AccessRequest XMl
				$accessRequestXML = new SimpleXMLElement("<AccessRequest></AccessRequest>");
				$accessRequestXML->addChild("AccessLicenseNumber", $access);
				$accessRequestXML->addChild("UserId", $userid);
				$accessRequestXML->addChild("Password", $passwd);

				// Create ShipmentConfirmRequest XMl
				$shipmentConfirmRequestXML = new SimpleXMLElement("<ShipmentConfirmRequest></ShipmentConfirmRequest>");
				$request = $shipmentConfirmRequestXML->addChild('Request');

				$transactionReference = $shipmentConfirmRequestXML->addChild('TransactionReference');
				$transactionReference->addChild("CustomerContext", $order_id);

				$request->addChild("RequestAction", "ShipConfirm");
				$request->addChild("RequestOption", "nonvalidate");


				$labelSpecification = $shipmentConfirmRequestXML->addChild('LabelSpecification');
				$labelSpecification->addChild("HTTPUserAgent", "");
				$labelPrintMethod = $labelSpecification->addChild('LabelPrintMethod');
				$labelPrintMethod->addChild("Code", $general_settings['label_format']);
				$labelPrintMethod->addChild("Description", "Label for" . $order_id);
				$labelImageFormat = $labelSpecification->addChild('LabelImageFormat');
				$labelImageFormat->addChild("Code", $general_settings['label_format']);
				$labelImageFormat->addChild("Description", "Label");

				$shipment = $shipmentConfirmRequestXML->addChild('Shipment');
				$shipment->addChild("Description", $hit_ups_ship_desc);
				$rateInformation = $shipment->addChild('RateInformation');
				$rateInformation->addChild("NegotiatedRatesIndicator", "");

				$shipper = $shipment->addChild('Shipper');

				$shipper->addChild("Name", $general_settings['shipper_person_name']);
				$shipper->addChild("AttentionName", $general_settings['shipper_company_name']);
				$shipper->addChild("PhoneNumber", $general_settings['shipper_phone_number']);
				//$shipper->addChild ( "TaxIdentificationNumber", "1234567877" );
				$shipper->addChild("ShipperNumber",  $general_settings['account_number']);
				$shipperAddress = $shipper->addChild('Address');
				$shipperAddress->addChild("AddressLine1", $general_settings['freight_shipper_street']);
				if (!empty($general_settings['shipper_street_2'])) {
					$shipperAddress->addChild("AddressLine2", $general_settings['shipper_street_2']);
				}
				$shipperAddress->addChild("City", $general_settings['freight_shipper_city']);
				$shipperAddress->addChild("StateProvinceCode",  $general_settings['freight_shipper_state']);
				$shipperAddress->addChild("PostalCode", $general_settings['origin']);
				$shipperAddress->addChild("CountryCode", $general_settings['base_country']);
				//$state_obj = new State();
				$state_details = Db::getInstance()->getRow('SELECT `iso_code` FROM `' . _DB_PREFIX_ . 'state` WHERE `id_state` = ' . (int)($customerAddress->id_state));

				$ship_to_company_name = substr(!empty($customerAddress->company) ? str_replace("&", "&amp;", $customerAddress->company) : $customerAddress->firstname, 0, 26);
				$shipTo = $shipment->addChild('ShipTo');
				$shipTo->addChild("CompanyName",  $ship_to_company_name);
				$shipTo->addChild("AttentionName", $customerAddress->firstname . ' ' . $customerAddress->lastname);
				$shipTo->addChild("PhoneNumber", (!empty($customerAddress->phone) ? $customerAddress->phone : '1234567890'));
				$shipToAddress = $shipTo->addChild('Address');
				if (strlen($customerAddress->address1) > 35) {
					$shipToAddress->addChild("AddressLine1", substr($customerAddress->address1, 34));
					$shipToAddress->addChild("AddressLine2", substr($customerAddress->address1, 0, 34));
				} else {
					$shipToAddress->addChild("AddressLine1", $customerAddress->address1);
				}
				if (isset($customerAddress->address2) && !empty($customerAddress->address2) && strlen($customerAddress->address1) > 35) {
					$shipToAddress->addChild("AddressLine3", substr($customerAddress->address2, 0, 34));
				} else if (isset($customerAddress->address2) && !empty($customerAddress->address2)) {
					$shipToAddress->addChild("AddressLine2", $customerAddress->address2);
				}
				$shipToAddress->addChild("City", $customerAddress->city);
				$shipToAddress->addChild("StateProvinceCode", $state_details['iso_code']);
				$shipToAddress->addChild("PostalCode", $customerAddress->postcode);
				$shipToAddress->addChild("CountryCode", $destination_country);


				$shipFrom = $shipment->addChild('ShipFrom');
				$shipFrom->addChild("CompanyName", $general_settings['shipper_company_name']);
				$shipFrom->addChild("AttentionName", $general_settings['shipper_person_name']);
				$shipFrom->addChild("PhoneNumber", $general_settings['shipper_phone_number']);
				$shipFromAddress = $shipFrom->addChild('Address');
				$shipFromAddress->addChild("AddressLine1", $general_settings['freight_shipper_street']);
				$shipFromAddress->addChild("City", $general_settings['freight_shipper_city']);
				$shipFromAddress->addChild("StateProvinceCode", $general_settings['freight_shipper_state']);
				$shipFromAddress->addChild("PostalCode", $general_settings['origin']);
				$shipFromAddress->addChild("CountryCode", $general_settings['base_country']);

				$paymentInformation = $shipment->addChild('PaymentInformation');
				$prepaid = $paymentInformation->addChild('Prepaid');
				$billShipper = $prepaid->addChild('BillShipper');
				$billShipper->addChild("AccountNumber", $general_settings['account_number']);

				if ($destination_country == 'CA') {
					$invoicelinetotal = $shipment->addChild('InvoiceLineTotal');
					$invoicelinetotal->addChild('CurrencyCode', "USD");
					$invoicelinetotal->addChild('MonetaryValue', $order->total_paid);
				}

				if ($hit_ups_cod == 'yes') {
					$ShipmentServiceOptions = $shipment->addChild('ShipmentServiceOptions');
					$COD = $ShipmentServiceOptions->addChild('COD');
					$COD->addChild("CODCode", '3');
					$COD->addChild("CODFundsCode", '1');
					$CODAmount = $COD->addChild('CODAmount');
					$CODAmount->addChild("MonetaryValue", $order->total_paid);
				}

				$service = $shipment->addChild('Service');
				$service->addChild("Code", $selected_service);
				$service->addChild("Description", $hit_ups_ship_desc);

				/*
			// Invoice Stars
			
			$internationalforms = $shipment->addChild ( 'InternationalForms' );
			$internationalforms->addChild ( "FormType", '01' );
			$internationalforms->addChild ( "AdditionalDocumentIndicator", 'EDI' );
			
			$ind_product = $internationalforms->addChild ( "Product" );
			$ind_product->addChild ( "Description","My product" );
			$ind_unit = $ind_product->addChild ( "Unit" );
			$ind_unit->addChild ( "Number","1" ); //qty
			$ind_unit->addChild ( "Value","21" ); //price
			
			$ind_product = $internationalforms->addChild ( "Product" );
			$ind_product->addChild ( "Description","My product" );
			$ind_unit = $ind_product->addChild ( "Unit" );
			$ind_unit->addChild ( "Number","1" ); //qty
			$ind_unit->addChild ( "Value","21" ); //price
			
			$ind_UnitOfMeasurement = $ind_unit->addChild ( "UnitOfMeasurement");
			$ind_UnitOfMeasurement->addChild ( "Code", $weight_unit );
			$ind_UnitOfMeasurement->addChild ( "Description", 'Package Weight' );
			$ind_product->addChild ( "OriginCountryCode","US" );
			$ind_product->addChild ( "InvoiceNumber","123456" );
			$ind_product->addChild ( "InvoiceDate","17-08-2018" );
			$ind_product->addChild ( "TermsOfShipment","DDP" );
			$ind_product->addChild ( "ReasonForExport","Deliver to customer" );
			$ind_product->addChild ( "CurrencyCode","USD" );
			
			*/
				// invoice Ends
			$hit_ups_packages = $package;

				foreach ($hit_ups_packages as $key=>$pack) {
					$package = $shipment->addChild('Package');
					$package->addChild("Description", $hit_ups_ship_desc);
					$packagingType = $package->addChild('PackagingType');
					$packagingType->addChild("Code", $hit_ups_packing);
					$packagingType->addChild("Description", $hit_ups_ship_desc);

					$packageWeight = $package->addChild('PackageWeight');
					$unitOfMeasurement = $packageWeight->addChild('UnitOfMeasurement');
					$unitOfMeasurement->addChild("Code", $weight_unit);
					$packageWeight->addChild("Weight", $manual_weight[$key]);


					if (isset($manual_length) && $manual_width && $manual_height && $manual_weight) {
						$Dimensions = $package->addChild('Dimensions');
						$UnitOfMeasurement1 = $Dimensions->addChild('UnitOfMeasurement');
						$UnitOfMeasurement1->addChild("Code", $dim_unit);
						$Dimensions->addChild("Length", $manual_length[$key]);
						$Dimensions->addChild("Width", $manual_width[$key]);
						$Dimensions->addChild("Height", $manual_height[$key]);
					}
				}

				if (($general_settings['sig_req'] && $general_settings['sig_req'] != '0') || ($general_settings['rate_insure'] && $general_settings['rate_insure'] == 'yes')) {
					$packageoptions = $package->addChild('PackageServiceOptions');

					if ($general_settings['sig_req'] && $general_settings['sig_req'] != '0') {
						$delivery_sign = $packageoptions->addChild('DeliveryConfirmation');
						$delivery_sign->addChild("DCISType", $general_settings['sig_req']);
					}
					if ($general_settings['rate_insure'] && $general_settings['rate_insure'] != '0') {
						$insurance_value = $packageoptions->addChild('InsuredValue');
						$insurance_value->addChild("CurrencyCode", $ups_selected_curr);
						$insurance_value->addChild("MonetaryValue", $total_value);
					}
				}


				$requestXML = $accessRequestXML->asXML() . $shipmentConfirmRequestXML->asXML();

				$xml = $this->ups_rate_response($requestXML, '', $request_url);
			}

			if (isset($general_settings['dev_b']) && $general_settings['dev_b'] == 'yes') {
				echo '<pre>';
				echo '<h1>Request</h1> <br/>';
				if (is_array($requestXML)) {
					print_r($requestXML);
				} else {
					print_r(htmlspecialchars($requestXML));
				}
				echo '<br/><h1>Response</h1> <br/>';
				print_r($xml);
				die();
			}
			
			if (empty($xml)) {
				$return = array('ErrorMessage' => 'UPS Connection Problem With API. Contact HIT Tech Market');
			} else if (isset($xml->Response->Error->ErrorSeverity) && $xml->Response->Error->ErrorSeverity == 'Hard') {
				$return = array('ErrorMessage' => $xml->Response->Error->ErrorDescription);
			} else if (isset($xml->response->errors) && !empty($xml->response->errors)) {
				if (is_array($xml->response->errors)) {
					$all_err_data = $xml->response->errors;
				} else {
					$all_err_data[] = $xml->response->errors;
				}
				$errs = "";
				foreach ($all_err_data as $key => $err_data) {
					$errs .= isset($err_data->message) ? $err_data->message." || " : "";
				}
				$return = array('ErrorMessage' => $errs);
			} else if (isset($xml->ShipmentIdentificationNumber) || isset($xml->ShipmentResults->PackageResults)) {
				if (isset($xml->ShipmentIdentificationNumber)) {
					$LabelImage = (string) $xml->ShipmentDigest;

					// Create AccessRequest XMl
					$accessRequestXML = new SimpleXMLElement("<AccessRequest></AccessRequest>");
					$accessRequestXML->addChild("AccessLicenseNumber", $access);
					$accessRequestXML->addChild("UserId", $userid);
					$accessRequestXML->addChild("Password", $passwd);

					// Create ShipmentAcceptRequest XMl
					$shipmentAcceptRequestXML = new SimpleXMLElement("<ShipmentAcceptRequest ></ShipmentAcceptRequest >");
					$request = $shipmentAcceptRequestXML->addChild('Request');
					$request->addChild("RequestAction", "01");

					$shipmentAcceptRequestXML->addChild("ShipmentDigest", $LabelImage);

					$requestXML = $accessRequestXML->asXML() . $shipmentAcceptRequestXML->asXML();

					$request_url = (isset($general_settings['production']) && $general_settings['production'] == 'yes') ? 'https://onlinetools.ups.com/ups.app/xml/ShipAccept' : 'https://wwwcie.ups.com/ups.app/xml/ShipAccept';

					$xml = $this->ups_rate_response($requestXML, '', $request_url);
					if (!empty($xml)) {
			        	$xml = json_decode(json_encode($xml));
			        }
				}
				if (empty($xml)) {
					$return = array('ErrorMessage' => 'UPS Connection Problem With API. Contact HIT Tech Market');
				}else if (isset($xml->ShipmentResults->PackageResults)) {
					if (isset($general_settings['label_format']) && $general_settings['label_format'] == "GIF") {
						$saved_label_format = '.gif';
						Configuration::updateValue('HIT_UPS_SAVED_LABEL_FORMAT' . $order_id, $saved_label_format);
					} elseif (isset($general_settings['label_format']) && $general_settings['label_format'] == "PNG") {
						$saved_label_format = '.png';
						Configuration::updateValue('HIT_UPS_SAVED_LABEL_FORMAT' . $order_id, $saved_label_format);
					}
					if (isset($general_settings['api_type']) && $general_settings['api_type'] == "REST") {
						$saved_label_format = '.gif';
						Configuration::updateValue('HIT_UPS_SAVED_LABEL_FORMAT' . $order_id, $saved_label_format);
					}

					if (is_array($xml->ShipmentResults->PackageResults)) {
		            	$ship_pac_res = $xml->ShipmentResults->PackageResults;
		            } else {
		            	$ship_pac_res[] = $xml->ShipmentResults->PackageResults;
		            }

					if ($ship_pac_res[0]) {
						$return = array(
								'ShipmentID' => (string) $xml->ShipmentResults->ShipmentIdentificationNumber,
								'ErrorMessage' => '',
								'selected_service' => $selected_service,
								'labels' => 0
						);
						$label_key = 0;
						foreach ($ship_pac_res as $value) {
							$labelImage = isset($value->LabelImage->GraphicImage) ? (string) $value->LabelImage->GraphicImage : (string)$value->ShippingLabel->GraphicImage;
							$fp = fopen('hit_ups_shipping_label_' . $order_id .'_'. $label_key . $saved_label_format, 'wb');
							fwrite($fp, base64_decode($labelImage)); //Create COD Return PNG or PDF file
							fclose($fp);

							$return['labels'] = $label_key;
							$label_key++;
						}
						$order->shipping_number = $return['ShipmentID'];
						$order->update();

					}else {		// this block won't execute for non-freight, may run for freight
						$return = array(
								'ShipmentID' => (string) $xml->ShipmentResults->PackageResults->TrackingNumber,
								'ErrorMessage' => '',
								'selected_service' => $selected_service,
								'labels' => 0
						);

						$labelImage = (string) $xml->ShipmentResults->PackageResults->LabelImage->GraphicImage;

						$fp = fopen('hit_ups_shipping_label_' . $order_id .'_0'. $saved_label_format, 'wb');
						fwrite($fp, base64_decode($labelImage)); //Create COD Return PNG or PDF file
						fclose($fp);
						$order->shipping_number = $return['ShipmentID'];
						$order->update();
						//$order_carrier = new OrderCarrier($order_id);
						//$order_carrier->tracking_number = $return['ShipmentID'];
						//$order_carrier->update();
					}

					$sample_base64_encoded_pdf = $this->hit_generate_commercial_invoice($general_settings, $order, $in_packge, $in_shipper, $toaddress, $orderCurrency, $return['ShipmentID']);
					$CommercialInvoice	=   (string)$sample_base64_encoded_pdf;

					$fp = fopen('commercial-invoice-' . $order_id . '.pdf', 'wb');
					fwrite($fp, base64_decode($CommercialInvoice)); //Create COD Return PNG or PDF file
					fclose($fp);

					Configuration::updateValue('HIT_UPS_LABEL_IMAGE' . $order_id, json_encode($return));
					Configuration::updateValue('HIT_UPS_LABEL_DATA' . $order_id, "YES");
					Configuration::updateValue('HIT_UPS_LABEL_COM' . $order_id, $CommercialInvoice);
					
					$sql = 'update `' . _DB_PREFIX_ . 'order_carrier` set tracking_number = \'' . $return['ShipmentID'] . '\' where id_order = ' . $order->id;
					if (!Db::getInstance()->execute($sql))
						die('error!');

					if (isset($general_settings['oss']) && $general_settings['oss'] == 'yes') {
						$objOrder = new Order($order_id);
						$history = new OrderHistory();
						$history->id_order = (int)$objOrder->id;
						$history->changeIdOrderState(4, (int)($objOrder->id)); //order status=5 Delivered
						$history->save();
						//$history->addWithemail(true);
					}

					if (isset($general_settings['osd']) && $general_settings['osd'] == 'yes') {
						$site_id = Configuration::get('hit_ups_tracking_site_id', '');
						if (!empty($site_id)) {
							Db::getInstance()->execute("INSERT INTO `" . _DB_PREFIX_ . "hit_ups_tracking` ( `tracking_number`, `order_no`, `tracking_status`) VALUES (" . pSQL($return['ShipmentID']) . ", " . pSQL($order_id) . ", 'open')");
							Configuration::updateValue('hit_ups_TRACKING' . pSQL($order_id), 'yes');
						}
					}
				}
			} else {
				$return_message = $this->l('Something Went Wrong. Unknown response found.');
			}
			if (empty($return['ErrorMessage'])) {
				$return_message = $this->l('Shipment Created Successfully.');
			} else {
				$return_message = $this->l($return['ErrorMessage']);
			}
			return $return_message;
		}
	}
	public function hit_get_base_encoding($data)
	{
		return base64_encode($data);
	}
	public function hit_get_base_decoding($data)
	{
		return base64_decode($data);

		//return base64_decode($data);
	}

	private function hit_two_get_pack_type($selected)
	{
		$pack_type = 'OD';
		if ($selected == 'FLY') {
			$pack_type = 'DF';
		} elseif ($selected == 'BOX') {
			$pack_type = 'OD';
		} elseif ($selected == 'YP') {
			$pack_type = 'YP';
		}
		return $pack_type;
	}
	private function hit_generate_commercial_invoice($general_settings, $order, $packages, $shipper, $toaddress, $orderCurrency, $awb)
	{
		include_once("fpdf/hit-ups-commercial-invoice-template.php");
		$commercial_invoice = new hit_ups_commercial_invoice();

		$fromaddress = array();
		$fromaddress['sender_name']			 	= $shipper['contact_person_name'];
		$fromaddress['sender_address_line1'] 	= $shipper['address_line'];
		$fromaddress['sender_address_line2'] 	= $shipper['address_line2'];
		$fromaddress['sender_city']			 	= $shipper['city'];
		$fromaddress['sender_country']		 	= $shipper['country_name'];
		$fromaddress['sender_postalcode']	 	= $shipper['postal_code'];
		$fromaddress['phone_number']			= $shipper['contact_phone_number'];
		$fromaddress['sender_company']			= $shipper['company_name'];
		$fromaddress['sender_state_code']		= $shipper['division_code'];
		$fromaddress['sender_email']			= $shipper['contact_email'];
		$packages = $order->getProducts();
		$products_details = array();
		if (!empty($packages)) {
			$total_weight = 0;
			$total_value = 0;

			$currency = $orderCurrency->iso_code;
			$weight_unit = (isset($general_settings['weg_dim']) && $general_settings['weg_dim'] === 'yes') ? 'KGS' : 'LBS';

			$total_units = 0;
			$i = 0;
			$pre_product_id = '';
			$net_weight = 0;
			$pre_package = 0;
			if (!empty($packages)) {
				foreach ($packages as $item_id => $orderItem) {


					$wf_hs_code 	= ''; //get_post_meta( $post_id, '_wf_hs_code', 1); //this works for variable product also
					$manufacture 	= ''; //get_post_meta( $post_id, '_wf_manufacture_country', 1); //this works for variable 

					$products_details[$i]['quantity'] 		= $orderItem['product_quantity'];
					$products_details[$i]['description'] 	= $orderItem['product_name'];
					$products_details[$i]['weight'] 		= number_format($orderItem['product_weight'], 2);
					$products_details[$i]['price'] 			= number_format($orderItem['product_price'], 2);
					$products_details[$i]['total'] 			= (float) $orderItem['product_price'] * (int)$orderItem['product_quantity'];
					$products_details[$i]['hs'] 			= $wf_hs_code;
					$products_details[$i]['weight_unit'] 	= $weight_unit;
					$products_details[$i]['manufacture'] 	= $manufacture;
					$products_details[$i]['no_package'] 	= 1;

					$products_details[$i] = $products_details[$i];

					$total_value += $products_details[$i]['total'];
					$total_units += $orderItem['product_quantity'];
					$net_weight 	+= number_format(($orderItem['weight'] * $orderItem['product_quantity']), 3);
					$total_weight 	+= number_format(($orderItem['weight'] * $orderItem['product_quantity']), 3);
					$i++;
				}
			}
		}
		/*
		if(!empty($products_details))
		{
			foreach($products_details as $product){
				$i=0;
				foreach($packages as $package)
				{
					$total_units 	+= $product['quantity'];
					$net_weight 	+= number_format($product['weight'], 3);
					$total_weight 	+= number_format($product['weight'], 3);
				}
				$i++;
			}
		}
*/
		$package_details = array(
			'value' 		=> number_format($total_value, 2), //total product price sum
			'diccount'	 	=> number_format($order->total_discounts, 2),
			'other' 		=> '0.00',
			'total' 		=> number_format($total_value - (float)$order->total_discounts, 2),
			'net_weight' 	=> number_format($net_weight, 3),
			'gross_weight' 	=> number_format($total_weight, 3),
			'currency' 		=> $currency,
			'weight_unit' 	=> $weight_unit,
			'total_unit' 	=> $total_units,
			'total_package' => (isset($packages[0]) ? count($packages[0]) :  1),
			'originator' 	=> $shipper['company_name'],
		);

		$exta_details = array(
			'Terms Of Trade' 	=> '',
			'Terms Of Payment' 	=> 'Online (Paid)',
			'Contract number' 	=> '',
			'Contract Date' 	=> '',
		);

		$designated_broker = array(
			'dutypayment_type' 	=> isset($general_settings['dutypayment_type']) ? $general_settings['dutypayment_type'] : '',
			'dutyaccount_number' 	=> isset($general_settings['dutyaccount_number']) ? $general_settings['dutyaccount_number'] : '',
		);
		$fromaddress['awb'] = $awb;

		$commercial_invoice->get_package_total($total_units);
		$commercial_invoice->init(2);
		$commercial_invoice->addShippingToAddress($toaddress);
		$commercial_invoice->addShippingFromAddress($fromaddress);
		$commercial_invoice->designated_broker($designated_broker);
		$commercial_invoice->addExtraDetails($exta_details);
		$commercial_invoice->addProductDetails($products_details);
		$commercial_invoice->addPackageDetails($package_details);
		return $this->hit_get_base_encoding($commercial_invoice->Output('S'));
	}

	public function hit_get_dimension_from_package($package)
	{

		$dimensions	=	array(
			'Length'	=>	0,
			'Width'		=>	0,
			'Height'	=>	0,
			'Weight'	=>	0,
			'insurance'	=>	0,
		);
		if (!is_array($package)) { // Package is not valid
			return $dimensions;
		}

		if (isset($package['Dimensions'])) {
			$dimensions['Length']	=	$package['Dimensions']['Length'];
			$dimensions['Width']	=	$package['Dimensions']['Width'];
			$dimensions['Height']	=	$package['Dimensions']['Height'];
			$dimensions['dim_unit']	=	isset($package['Dimensions']['Units']) ? $package['Dimensions']['Units'] : 0;
		}
		$dimensions['Weight']	=	$package['Weight']['Value'];
		$dimensions['weight_unit']	=	$package['Weight']['Units'];
		if ($this->insure_contents) {
			$dimensions['insurance']	=	isset($package['InsuredValue']['Amount']) ? $package['InsuredValue']['Amount'] : 0;
		} else {
			$dimensions['insurance'] = 0;
		}

		return $dimensions;
	}
	private function hit_get_local_product_code($global_product_code, $origin_country = '', $destination_country = '')
	{

		$countrywise_local_product_code = array(
			'SA' => 'global_product_code',
			'ZA' => 'global_product_code',
			'CH' => 'global_product_code'
		);

		if (array_key_exists($origin_country, $countrywise_local_product_code)) {
			return ($countrywise_local_product_code[$origin_country] == 'global_product_code') ? $global_product_code : $countrywise_local_product_code[$origin_country];
		}
		return $global_product_code;
	}
	private function hit_get_ups_dummy_package()
	{
		return array(
			'Dimensions' => array(
				'Length' => 0,
				'Width' => 0,
				'Height' => 0,
				'Units' => $this->dim_unit
			),
			'Weight' => array(
				'Value' => 0,
				'Units' => $this->weight_unit
			)
		);
	}

	public function hit_get_package_from_order($order)
	{
		$customerAddress = new Address((int) $order->id_address_delivery);
		$customerAddressIso = $this->hit_getIsoCountryById((int) $customerAddress->id_country);

		$orderItems = $order->getProducts();

		$items = array();
		foreach ($orderItems as $orderItem) {

			//$product_data = wc_get_product($orderItem['product_id'] );
			$mesured_weight = 0;
			if (isset($orderItem['product_weight'])) {
				$mesured_weight = $orderItem['product_weight'];
			}
			$items[] = array('data' => $orderItem, 'quantity' => $orderItem['product_quantity'], 'mesured_weight' => $mesured_weight);
		}
		$package = array();
		$package['contents'] = $items;
		$package['destination']['country']	  = $customerAddressIso;
		$package['destination']['first_name']   = $customerAddress->firstname;
		$package['destination']['last_name']	= $customerAddress->last_name;
		$package['destination']['company']	  = $customerAddress->company;
		$package['destination']['address_1']	= $customerAddress->address1;
		$package['destination']['address_2']	= $customerAddress->address2;
		$package['destination']['city']		 = $customerAddress->city;
		$package['destination']['state']		= $customerAddress->id_state;
		$package['destination']['postcode']	 = $customerAddress->postcode;

		$package = array($package);

		return $package;
	}
	public function hookDisplayAdminOrderTabShip()
	{
		/* Place your code here. */
	}

	public function hookDisplayBeforeCarrier()
	{

		/* Place your code here. */
	}

	public function hookDisplayCarrierExtraContent()
	{
		/* Place your code here. */
	}

	public function hookDisplayCarrierList()
	{
		/* Place your code here. */
	}

	public function hookDisplayAdminProductsExtra($params)
	{

	}

	public function hookActionProductUpdate($params)
	{
		/* Place your code here. */
	}

	public function get_ps_weg_unit($unit='')
	{
		$all_units = array("KG" => array("KG", "KILOGRAM", "KILOGRAMS"),
							"LB" => array("LBS", "LB", "POUND", "POUNDS"),
							"G" => array("G", "GRM", "GRS", "GRAM", "GRAMS", "γραμ.")
							);
		if (!empty($unit) && in_array($unit, $all_units["KG"])) {
			return "KG";
		} elseif (!empty($unit) && in_array($unit, $all_units["LB"])) {
			return "LB";
		} elseif (!empty($unit) && in_array($unit, $all_units["G"])) {
			return "G";
		} else {
			return;
		}
	}
	public function convert_weg($value, $from, $to) {
		$weg_con = array();
		$weg_con['KG'] = "1.00000000";
		$weg_con['G'] = "1000.00000000";
		$weg_con['LB'] = "2.20460000";
		$weg_con['OZ'] = "35.27400000";
		// print_r($weg_con);
		if ($from == $to) {
			return $value;
		} else {			
			$from = (float)isset($weg_con[$from]) ? $weg_con[$from] : 1;
			$to = (float)isset($weg_con[$to]) ? $weg_con[$to] : 1;
			return $value * ($to / $from);
			
		}
	}
	public function get_ps_dim_unit($unit='')
	{
		$all_units = array("CM" => array("CM", "CENTIMETER"),
							"MM" => array("MM", "MILLIMETER"),
							"IN" => array("IN", "INCH")
							);
		if (!empty($unit) && in_array($unit, $all_units["CM"])) {
			return "CM";
		} elseif (!empty($unit) && in_array($unit, $all_units["MM"])) {
			return "MM";
		} elseif (!empty($unit) && in_array($unit, $all_units["IN"])) {
			return "IN";
		} else {
			return;
		}
	}
	public function convert_dim($value, $from, $to) {
		$weg_con = array();
		$weg_con['CM'] = "1.00000000";
		$weg_con['MM'] = "10.00000000";
		$weg_con['IN'] = "0.39370000";
		// print_r($weg_con);
		if ($from == $to) {
			return $value;
		} else {
			$from = (float)isset($weg_con[$from]) ? $weg_con[$from] : 1;
			$to = (float)isset($weg_con[$to]) ? $weg_con[$to] : 1;
			return $value * ($to / $from);
			
		}
	}
	private function getAuthToken($shipment_obj=[], $ven_id='default')
	{
		$token = "";
		$old_token_data = Configuration::get('hit_ups_shipping_oauth_tok_'.$ven_id, '');
		$old_token_data = !empty($old_token_data) ? json_decode($old_token_data, true) : [];
		if (!empty($old_token_data)) {
			$old_auth_key = isset($old_token_data["auth_key"]) ? $old_token_data["auth_key"] : '';
			$old_auth_time = isset($old_token_data["updated_at"]) ? $old_token_data["updated_at"] : '';
			if (!empty($old_auth_key) && !empty($old_auth_time)) {
				$curr_time = date('Y-m-d H:i:s');
				$expire_mins = 238;
				$auth_expire_time = date('Y-m-d H:i:s', strtotime($old_auth_time . '+' . $expire_mins . ' minutes'));
				if ($curr_time <= $auth_expire_time) {
					$token = $old_auth_key;
				}
			}
		}
		if (empty($token)) {
			// create token from carrier's shipment object
			$grant_type = Configuration::get('hit_ups_shipping_rest_grant_type', '');
			$api_key = Configuration::get('hit_ups_shipping_rest_client_id', '');
			$api_secret = Configuration::get('hit_ups_shipping_rest_client_sec', '');
			$token = $shipment_obj->gen_access_token($grant_type, $api_key, $api_secret);
			$curr_time = date('Y-m-d H:i:s');
			if (!empty($token)) {
				$tok_data_to_update = ['auth_key' => $token, 'updated_at' => $curr_time];
				Configuration::updateValue('hit_ups_shipping_oauth_tok_'.$ven_id, json_encode($tok_data_to_update));
			}
		}
		return $token;
	}
	private function getGenSettings($general_settings=[])
	{
		$gen_set = [];
		$gen_set['hit_ups_auto_weight_unit'] = (isset($general_settings['weg_dim']) && $general_settings['weg_dim'] == "no") ? "LB_IN" : "KG_CM";
		$gen_set['hit_ups_auto_customer_classification'] = (isset($general_settings['customer_classification']) && !empty($general_settings['customer_classification'])) ? $general_settings['customer_classification'] : "00";
		$gen_set['cod'] = (isset($general_settings['cod']) && $general_settings['cod'] == "yes") ? "Y" : "N";
		$gen_set['pack_type'] = "02";
		$gen_set['dutiable'] = "S";
		return $gen_set;
	}
	private function getVenSettings($general_settings=[], $ven_id='default')
	{
		$ven_set = [];
		$ven_set['hit_ups_auto_shipper_company'] = isset($general_settings['shipper_company_name']) ? $general_settings['shipper_company_name'] : "";
		$ven_set['hit_ups_auto_shipper_name'] = isset($general_settings['shipper_person_name']) ? $general_settings['shipper_person_name'] : "";
		$ven_set['hit_ups_auto_rest_acc_no'] = isset($general_settings['rest_acc_no']) ? $general_settings['rest_acc_no'] : "";
		$ven_set['hit_ups_auto_address1'] = isset($general_settings['freight_shipper_street']) ? $general_settings['freight_shipper_street'] : "";
		$ven_set['hit_ups_auto_address2'] = isset($general_settings['shipper_street_2']) ? $general_settings['shipper_street_2'] : "";
		$ven_set['hit_ups_auto_city'] = isset($general_settings['freight_shipper_city']) ? $general_settings['freight_shipper_city'] : "";
		$ven_set['hit_ups_auto_state'] = isset($general_settings['freight_shipper_state']) ? $general_settings['freight_shipper_state'] : "";
		$ven_set['hit_ups_auto_zip'] = isset($general_settings['origin']) ? $general_settings['origin'] : "";
		$ven_set['hit_ups_auto_country'] = isset($general_settings['base_country']) ? $general_settings['base_country'] : "";
		$ven_set['hit_ups_auto_phone'] = isset($general_settings['shipper_phone_number']) ? $general_settings['shipper_phone_number'] : "";
		$ven_set['hit_ups_auto_email'] = isset($general_settings['shipper_email']) ? $general_settings['shipper_email'] : "";
		return $ven_set;
	}
	private function getRecAddr($params=[])
	{
		$customerAddress = new Address($params->id_address_delivery);
		$recAddr = [];
		$recAddr['address_1'] = $customerAddress->address1;
		$recAddr['address_2'] = $customerAddress->address2;
		$recAddr['city'] = $customerAddress->city;
		$recAddr['state'] = $this->hit_getIsoStateById((int) $customerAddress->id_state);
		$recAddr['postcode'] = $customerAddress->postcode;
		$recAddr['country'] = $this->hit_getIsoCountryById((int) $customerAddress->id_country);
// echo "<pre>";print_r($recAddr);die();
		return $recAddr;
	}
}
