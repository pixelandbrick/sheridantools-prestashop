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

require_once('express_fpdf.php');
class hit_ups_commercial_invoice extends EXPRESS_FPDF
{
	
	public $xfactor=0;
	public $yfactor=0;
	public $new_page=0;
	public function get_package_total($data)
	{
		$this->total = $data;
	}
	public function Packge_Header($data =''){
		$total = $this->total;
		$total = 0;//($total - 5) *4 ;
		if($total <= 0)
		{
			$total =0;
		}
		//$this->total= $total;
		$chartYPos = 35;
		$chartXPos = 70;
		 if(!empty($data))
		 {
			$this->new_page='2';
			$this->get_table_params(32);
			$start = $chartYPos;
			$this->Line(15,45,195,45);
			$this->Line(15,35,195,35);
			$this->Line( 37, $start, 37, $start+200 );
			$this->Line( 51, $start, 51, $start+200 );
			$this->Line( 62, $start, 62, $start+200 );
			
			$this->Line( 27, $start, 27, $start+200 );
			$this->Line( 37, $start, 37, $start+200 );
			$this->Line( 110, $start, 110, $start+200 );
			$this->Line( 125, $start, 125, $start+200 );
			$this->Line( 154, $start, 154, $start+200 );
			$this->Line( 176, $start+200, 176, $start+200 );	   
			//$this->Line( 91, $start, 91, $start+200 );
			$this->Line(15,$start+200+13,195,$start+200+13);
			$this->Line(15,$start+200+25,195,$start+200+25);
			$this->Line(15,$start+200+31,195,$start+200+31);
			//$this->Line(15,$start+200+39,195,$start+200+39);
			$this->Line(15,$start+200,195,$start+200);
			$total = 30;
			$this->Line( 91, $start+200+13, 91, $start+200 );
			$this->Line( 37, $start+200+13, 37, $start+200 );
			$this->Line( 51, $start, 51, $start+200 );
			$this->Line( 62, $start+200+13, 62, $start+200 );
		}
		 else
		 {
			$this->new_page='1';
			//$this->get_table_params(132);
			 //Line(obsessa,ending point,obsessa ,starting point)
			$this->Line( $chartXPos + 30, $chartYPos, $chartXPos + 30, 120 );
			
			$start = 195;
			if($this->total <= 8 )
			{
				$this->Line(15,$start+13,195,$start+13);
				$this->Line(15,$start+25,195,$start+25);
				$this->Line(15,$start+31,195,$start+31);
				$this->Line(15,$start+39,195,$start+39);
				$this->Line(15,$start,195,$start);
				$this->Line( 91, $start+13, 91, 195+$total );
				$this->Line(15,202+$total+1,91,202+$total+1);
				$this->Line(154,202+$total+1,195,202+$total+1);
				$this->Line(154,214+$total+1,195,214+$total+1);
				$this->Line( 37, $start+13, 37, 135 );
				$this->Line( 51, $start, 51, 135 );
				$this->Line( 62, $start+13, 62, 135 );
				   
				$this->Line( 27, 208+$total, 27, 135 );
				$this->Line( 110, $start, 110, 135 );
				$this->Line( 125, $start, 125, 135 );
				$this->Line( 154, $start+39, 154, 135 );
				$this->Line( 176, $start+39, 176, 135 );	   
				
			}else{
				$this->Line( 37, 48+$start, 37, 135 );
				$this->Line( 51, 48+$start, 51, 135 );
				$this->Line( 62, 48+$start, 62, 135 );
				$this->Line( 27, 48+$start, 27, 135 );
			   
				$this->Line( 110, 48+$start, 110, 135 );
				$this->Line( 125, 48+$start, 125, 135 );
				$this->Line( 154, 48+$start, 154, 135 );
				$this->Line( 176, 48+$start, 176, 135 );	   
				
			}
			$this->Line(15,80,195,80);
			$this->Line(15,120,195,120);
			$this->Line(15,145,195,145);
			$this->Line(15,135,195,135);
			
		 }
		$this->Rect(15, 35, 180, 208+$total, 'D');
		//horizontal lines
		//Line(starting point,obsessa ,ending point ,obsessa)
		
		
		//vertical lines
		  
			}
	
	public function init($par)
	{
		//function to add page
		$this->AddPage();
		$this->SetFont('Arial','',8*$this->xfactor);
		$this->xfactor=$par+0.18;
		
		$this->fontfactor=2;
		
		$this->addTitle();
	}
	public function addTitle(){
		
		$this->SetXY(83,26);
		$this->SetFont('Arial','B',5.6*$this->fontfactor);
		$this->Cell(20,10,'Commercial Invoice',0,0,'L');
	}
	
	public function designated_broker($designated_details){
		
		$this->SetFont('Arial','',3.5*$this->fontfactor);
		$this->SetXY(15,117);
		$this->Cell(60,10,'If there is a designated broker for this shipment, please provide contact information.',0,0,'L');
		$this->Ln(4);
		$this->SetFont('Arial','B',3.5*$this->fontfactor);
		$this->SetXY(15,122);
		$this->Cell(40,10,'Name of Broker',0,0,'L');
		$this->Ln(4);
		$this->SetFont('Arial','B',3.5*$this->fontfactor);
		$this->SetXY(15,128);
		$this->Cell(40,10,'Duties and Taxes Payable by',0,0,'L');
		$this->Ln(4);
		$this->SetXY(83,122);
		$this->Cell(10,10,'Tel.No.',0,0,'L');
		$this->Ln(4);
		$this->SetXY(130,122);
		$this->Cell(30,10,'Contact Name',0,0,'L');
		$this->Ln(4);
		$this->SetXY(58,128);
		$this->Cell(30,10,'Exporter',0,0,'L');
		$this->Ln(4);
		$this->SetXY(76,128);
		$this->Cell(20,10,'Consignee',0,0,'L');
		$this->Ln(4);
		$this->SetXY(96,128);
		$this->Cell(20,10,'Other',0,0,'L');
		$this->Ln(4);
		if(($designated_details['dutyaccount_number'] != "") && ($designated_details['dutypayment_type'] == 'T')){
			$this->SetXY(109,128);
			$this->Cell(45,10,'Duty Account Number: '.$designated_details['dutyaccount_number'],0,0,'L');
			$this->Ln(4);
		}else{
			$this->SetXY(109,128);
			$this->Cell(45,10,'If Other, please specify',0,0,'L');
			$this->Ln(4);
		}
		$this->Rect(54, 131, 3.8, 3.4, 'D');
		$this->Rect(72, 131, 3.8, 3.4, 'D');
		$this->Rect(92, 131, 3.8, 3.4, 'D');
		$this->SetFont('Arial','',4.8*$this->fontfactor);
		
		$dutypayment_type_horizontal_position = 54;
		if($designated_details['dutypayment_type'] == 'S'){
			$dutypayment_type_horizontal_position = 54 ;
		}else if($designated_details['dutypayment_type'] == 'R'){
			$dutypayment_type_horizontal_position = 72;
		}else if($designated_details['dutypayment_type'] == 'T'){
			$dutypayment_type_horizontal_position = 92;
		}
		if($designated_details['dutypayment_type'] != ""){
			$this->SetXY($dutypayment_type_horizontal_position,128);
			$this->Cell(5,10,'X',0,0,'L');
			$this->Ln(4);
		}
	}
		
		
	public function addShippingFromAddress($faddress)
	{
		$this->SetFont('Arial','B',3.5*$this->fontfactor);
		$this->SetXY(15,32);
		$this->Cell(10,10,'EXPORTER:',0,0,'L');
		$this->Ln(4);
		$this->SetXY(15,36);
		$this->Cell(20,10,'Contact Name: ',0,0,'L');
		$this->SetFont('Arial','',3.5*$this->fontfactor);
		$this->SetXY(34,36);
		$this->Cell(60,10,$faddress['sender_name'],0,0,'L');
		$this->Ln(4);
		$this->SetFont('Arial','B',3.5*$this->fontfactor);
		$this->SetXY(15,40);
		$this->Cell(20,10,'Telephone No.: ',0,0,'L');
		$this->SetFont('Arial','',3.5*$this->fontfactor);
		$this->SetXY(34,40);
		$this->Cell(20,10,$faddress['phone_number'],0,0,'L');
		$this->Ln(4);
		$this->SetFont('Arial','B',3.5*$this->fontfactor);
		$this->SetXY(15,44);
		$this->Cell(60,10,'Email:',0,0,'L');
		$this->SetFont('Arial','',3.5*$this->fontfactor);
		$this->SetXY(23,44);
		$this->Cell(30,10,$faddress['sender_email'],0,0,'L');
		$this->Ln(4);
		$this->SetFont('Arial','B',3.5*$this->fontfactor);
		$this->SetXY(15,48);
		$this->Cell(40,10,'Company Name/Address:',0,0,'L');
		$this->Ln(4);
		$this->SetFont('Arial','',3.5*$this->fontfactor);
		$this->SetXY(15,52);
		$this->Cell(40,10,html_entity_decode($faddress['sender_company']),0,0,'L');
		$this->Ln(4);
		$this->SetXY(15,56);
		$this->Cell(60,10,$faddress['sender_address_line1'],0,0,'L');
		$this->Ln(4);
		$this->SetXY(15,60);
		$this->Cell(60,10,$faddress['sender_address_line2'],0,0,'L');
		$this->Ln(4);
		$this->SetXY(15,69);
		$this->Cell(60,10,Tools::strtoupper($faddress['sender_city']).'  '.$faddress['sender_state_code'].'  '.$faddress['sender_postalcode'],0,0,'L');
		$this->Ln(4);
		$this->SetFont('Arial','B',3.5*$this->fontfactor);
		$this->SetXY(15,73);
		$this->Cell(10,10,'Country: ',0,0,'L');
		$this->SetFont('Arial','',3.5*$this->fontfactor);
		$this->SetXY(26,73);
		$this->Cell(60,10,Tools::strtoupper($faddress['sender_country']),0,0,'L');
		
		$this->SetFont('Arial','B',3.5*$this->fontfactor);
		$this->SetXY(100,32);
		$this->Cell(10,10,'Invoice Date:',0,0,'L');
		$this->Ln(4);
		$this->SetFont('Arial','',3.5*$this->fontfactor);
		$this->SetXY(100,36);
		$this->Cell(20,10,date("Y/m/d"),0,0,'L');
		$this->Ln(4);
		$this->SetFont('Arial','B',3.5*$this->fontfactor);
		$this->SetXY(100,40);
		$this->Cell(50,10,'Air Waybill No./Tracking No.: '.$faddress['awb'],0,0,'L');
		$this->Ln(4);
		$this->SetFont('Arial','B',3.5*$this->fontfactor);
		$this->SetXY(100,48);
		$this->Cell(20,10,'Invoice No.:',0,0,'L');
		$this->Ln(4);
		$this->SetFont('Arial','B',3.5*$this->fontfactor);
		
		$this->SetXY(146,48);
		$this->Cell(20,10,'Purchase Order No.:',0,0,'L');
		$this->Ln(4);
		$this->SetXY(146,55);
		$this->Cell(20,10,'Bill of Lading:',0,0,'L');
		$this->Ln(4);
	}
	
	public function addShippingToAddress($addr){
		
		$ups_tax_id = isset($addr['ups_tax_id']) ? $addr['ups_tax_id'] : '';
		$this->SetFont('Arial','B',3.5*$this->fontfactor);
		$this->SetXY(15,77);
		$this->Cell(20,10,'CONSIGNEE:',0,0,'L');
		$this->Ln(4);
		$this->SetXY(15,81);
		$this->Cell(20,10,'Contact Name:',0,0,'L');
		$this->SetFont('Arial','',3.5*$this->fontfactor);
		$this->SetXY(34,81);
		$this->Cell(80,10,$addr['first_name'].' '.$addr['last_name'],0,0,'L');
		$this->Ln(4);
		$this->SetFont('Arial','B',3.5*$this->fontfactor);
		$this->SetXY(15,85);
		$this->Cell(20,10,'Telephone No.:',0,0,'L');
		$this->SetFont('Arial','',3.5*$this->fontfactor);
		$this->SetXY(34,85);
		$this->Cell(20,10,$addr['phone'],0,0,'L');
		$this->Ln(4);
		$this->SetFont('Arial','B',3.5*$this->fontfactor);
		$this->SetXY(15,89);
		$this->Cell(60,10,'E-Mail:',0,0,'L');
		$this->Ln(4);
		$this->SetXY(15,93);
		$this->Cell(20,10,'Company Name/Address:',0,0,'L');
		$this->Ln(4);
		$this->SetFont('Arial','',3.5*$this->fontfactor);
		$this->SetXY(15,97);
		$this->Cell(60,10,$addr['company'],0,0,'L');
		$this->Ln(4);
		$this->SetXY(15,101);
		$this->Cell(60,10,$addr['address_1'],0,0,'L');
		$this->Ln(4);
		$this->SetXY(15,105);
		$this->Cell(60,10,$addr['address_2'],0,0,'L');
		$this->Ln(4);
		$this->SetXY(15,110);
		$this->Cell(60,10,$addr['city'].' '.$addr['postcode'],0,0,'L');
		$this->Ln(4);
		$this->SetFont('Arial','B',3.5*$this->fontfactor);
		$this->SetXY(15,113);
		$this->Cell(60,10,'Country: ',0,0,'L');
		$this->SetFont('Arial','',3.5*$this->fontfactor);
		$this->SetXY(26,113);
		$this->Cell(10,10,Tools::strtoupper($addr['country']),0,0,'L');
		$this->Ln(4);
		$this->SetFont('Arial','',4.8*$this->fontfactor);
		$this->SetXY(102,82);
		$this->Cell(5,10,'X',0,0,'L');
		$this->Ln(4);
		
		$this->SetFont('Arial','B',3.5*$this->fontfactor);
		$this->SetXY(100,77);
		$this->Cell(60,10,'SOLD TO / IMPORTER (if different from Consignee):',0,0,'L');
		$this->Ln(4);
		$this->Rect(102, 85, 3.8, 3.4, 'D');
		$this->SetXY(106,82);
		$this->Cell(20,10,'Same as CONSIGNEE:',0,0,'L');
		$this->Ln(4);
		$this->SetXY(100,87);
		$this->Cell(10,10,'Tax ID#: '.$ups_tax_id,0,0,'L');
		$this->Ln(4);
		$this->SetXY(100,93);
		$this->Cell(20,10,'Company Name/Address:',0,0,'L');
		$this->Ln(4);
		$this->SetFont('Arial','',3.5*$this->fontfactor);
		$this->SetXY(100,97);
		$this->Cell(60,10,$addr['company'],0,0,'L');
		$this->Ln(4);
		$this->SetXY(100,101);
		$this->Cell(60,10,$addr['address_1'],0,0,'L');
		$this->Ln(4);
		$this->SetXY(100,105);
		$this->Cell(60,10,$addr['address_2'],0,0,'L');
		$this->Ln(4);
		$this->SetXY(100,110);
		$this->Cell(60,10,$addr['city'].' '.$addr['postcode'],0,0,'L');
		$this->Ln(4);
		$this->SetFont('Arial','B',3.5*$this->fontfactor);
		$this->SetXY(100,113);
		$this->Cell(20,10,'Country:',0,0,'L');
		$this->Ln(4);
		$this->SetFont('Arial','',3.5*$this->fontfactor);
		$this->SetXY(111,113);
		$this->Cell(60,10,Tools::strtoupper($addr['country']),0,0,'L');
		$this->Ln(4);	
	}
	public function get_table_params($line)
	{
		$this->SetFont('Arial','B',3.5*$this->fontfactor);
		$this->SetXY(16,$line);
		$this->Cell(10,10,'No. of',0,0,'C');
		$this->Ln(4);
		$this->SetFont('Arial','B',3.3*$this->fontfactor);
		$this->SetXY(16,$line+4);
		$this->Cell(10,10,'Packages',0,0,'C');
		$this->SetXY(27,$line);
		$this->Cell(10,10,'Product',0,0,'C');
		$this->Ln(4);
		$this->SetXY(27,$line+4);
		$this->Cell(10,10,'Quantity',0,0,'C');
		$this->SetXY(39,$line);
		$this->Cell(10,10,'Unit',0,0,'C');
		$this->SetXY(39,$line+3);
		$this->Cell(10,10,'Net Weight',0,0,'C');
		$this->Ln(4);
		$this->SetFont('Arial','B',3*$this->fontfactor);
		$this->SetXY(39,$line+6);
		$this->Cell(10,10,'(LB/KG)',0,0,'C');
		$this->SetFont('Arial','B',3.5*$this->fontfactor);
		$this->SetXY(51,$line);
		$this->Cell(10,10,'Unit of',0,0,'C');
		$this->Ln(4);
		$this->SetFont('Arial','B',3.3*$this->fontfactor);
		$this->SetXY(51,$line+4);
		$this->Cell(10,10,'Measure',0,0,'C');
		$this->SetFont('Arial','B',3.5*$this->fontfactor);
		$this->SetXY(82,$line+2);
		$this->Cell(10,10,'Description of Goods',0,0,'C');
		$this->SetXY(112,$line+2);
		$this->Cell(10,10,'HS Tariff',0,0,'C');
		$this->SetXY(135,$line);
		$this->Cell(10,10,'Country of',0,0,'C');
		$this->Ln(4);
		$this->SetFont('Arial','B',3.3*$this->fontfactor);
		$this->SetXY(135,$line+4);
		$this->Cell(10,10,'Manufacture',0,0,'C');
		$this->SetFont('Arial','B',3.5*$this->fontfactor);
		$this->SetXY(160,$line);
		$this->Cell(10,10,'Unit',0,0,'C');
		$this->Ln(4);
		$this->SetXY(160,$line+4);
		$this->Cell(10,10,'Value',0,0,'C');
		$this->SetXY(181,$line);
		$this->Cell(10,10,'Total',0,0,'C');
		$this->Ln(4);
		$this->SetXY(181,$line+4);
		$this->Cell(10,10,'Value',0,0,'C');
		$this->Ln(4);
		
		
	}
	public function addProductDetails($product_details){
		$this->get_table_params(132);
		$this->package_information = $product_details;
		$i = 0;
		$next_page = true;
		foreach ($product_details as $key => $product) {
			if($key > 9 && $next_page)
			{
				$this->AddPage('','',0,'add');
				$next_page = false;
				$i=0;
			}
			if($next_page)
			{
				$this->table_values($product,143,151,$i);
			}
			else
			{
				$this->table_values($product,45,53,$i);
			}	
			$i = $i+6;	
		
		}
		
	}
	public function table_values($product,$vertical_position,$line_horizontal_position,$i)
	{
		
			$this->SetXY(16,$vertical_position+$i);
			$this->Cell(10,10,$product['no_package'],0,0,'C');
			
			$this->SetXY(27,$vertical_position+$i);
			$this->Cell(10,10,$product['quantity'],0,0,'C');
			
			$this->SetXY(41,$vertical_position+$i);
			$this->Cell(10,10,$product['weight'],0,0,'R');
			
			$this->SetXY(52,$vertical_position+$i);
			$this->Cell(10,10,$product['weight_unit'],0,0,'C');
			
			$this->SetXY(62,$vertical_position+$i);
			$this->Cell(10,10, Tools::substr($product['description'], 0,40) ,0,0,'L');
			if( Tools::strlen($product['description']) > 40 ){
				$i=$i+4;
				$this->SetXY(62,$vertical_position+$i);
				$this->Cell(10,10, Tools::substr($product['description'], 41,40) ,0,0,'L');
			} 
			$this->SetXY(112,$vertical_position+$i);
			$this->Cell(10,10,$product['hs'],0,0,'C');
			
			$this->SetXY(135,$vertical_position+$i);
			$this->Cell(10,10,$product['manufacture'],0,0,'C');
			
			$this->SetXY(166,$vertical_position+$i);
			$this->Cell(10,10,$product['price'],0,0,'R');
			
			$this->SetXY(185,$vertical_position+$i);
			$this->Cell(10,10,number_format( $product['total'], 2),0,0,'R');
				
			//$this->Line(15,$line_horizontal_position+$i,195,$line_horizontal_position+$i);
			
	}
	public function addPackageDetails( $package_details ){
	
		if($this->total <= 8)
		{
			$height =0;
		}
		else
		{
			$height = 41;
		}
		$this->SetFont('Arial','B',3.5*$this->fontfactor);
		$this->SetXY(17,192+$height);
		$this->Cell(10,10,'Total',0,0,'L');
		$this->Ln(4);
		$this->SetXY(17,195+$height);
		$this->Cell(10,10,'Pkgs',0,0,'L');
		$this->SetXY(28,192+$height);
		$this->Cell(10,10,'Total',0,0,'L');
		$this->Ln(4);
		$this->SetXY(28,195+$height);
		$this->Cell(10,10,'Units',0,0,'L');
		$this->SetXY(37,192+$height);
		$this->Cell(20,10,'Total Net',0,0,'L');
		$this->Ln(4);
		$this->SetXY(38,195+$height);
		$this->Cell(10,10,'Weight',0,0,'L');
		$this->SetXY(49,192+$height);
		$this->Cell(20,10,'(Indicate',0,0,'L');
		$this->Ln(4);
		$this->SetXY(48,195+$height);
		$this->Cell(10,10,'LB/KG)',0,0,'L');
		$this->SetXY(62,192+$height);
		$this->Cell(20,10,'Total Gross',0,0,'L');
		$this->Ln(4);
		$this->SetXY(64,195+$height);
		$this->Cell(10,10,'Weight',0,0,'L');
		$this->SetXY(78,192+$height);
		$this->Cell(10,10,'(Indicate',0,0,'L');
		$this->Ln(4);
		$this->SetXY(77,195+$height);
		$this->Cell(20,10,'LB/KG)',0,0,'L');
		$this->Ln(4);
		
		$this->SetXY(16,200+$height);
		$this->Cell(10,10,$package_details['total_package'],0,0,'C');
		$this->SetXY(27,200+$height);
		$this->Cell(10,10,$package_details['total_unit'],0,0,'C');
		$this->SetXY(41,200+$height);
		$this->Cell(10,10,$package_details['net_weight'],0,0,'R');
		$this->SetXY(49,200+$height);
		$this->Cell(10,10,$package_details['weight_unit'],0,0,'C');
		$this->SetXY(69,200+$height);
		$this->Cell(10,10,$package_details['gross_weight'],0,0,'C');
		$this->SetXY(75,200+$height);
		$this->Cell(10,10,$package_details['weight_unit'],0,0,'C');
		
		$this->SetFont('Arial','B',3.3*$this->fontfactor);
		$this->SetXY(15,205+$height);
		$this->Cell(10,10,'Declaration Statement(s):',0,0,'L');
		$this->Ln(4);
		$this->SetXY(15,217+$height);
		$this->Cell(10,10,'I declare that all the information contained in this invoice to be true and correct.',0,0,'L');
		$this->Ln(4);
		$this->SetXY(15,223+$height);
		$this->Cell(10,10,'Originator or Name of Company Representative if the invoice is being completed on behalf of a company or individual:',0,0,'L');
		$this->Ln(4);
		$this->SetFont('Arial','',3.5*$this->fontfactor);
		//$this->SetXY(15,227+15+7);
		//$this->Cell(10,10,$package_details['originator'],0,0,'L');
		$this->Ln(4);
		$this->SetFont('Arial','B',3.5*$this->fontfactor);
		if($height <= 0)
		{
			$this->SetXY(15,236);
		}else{
			$this->SetXY(15,236+15);
		}
		$this->Cell(10,10,'Signature / Title / Date:',0,0,'L');
		$this->Ln(4);
		
		$this->SetFont('Arial','B',3.5*$this->fontfactor);
		$this->SetXY(154,194+$height);
		$this->Cell(10,10,'Subtotal:',0,0,'L');
		$this->Ln(4);
		$this->SetXY(154,200+$height);
		$this->Cell(10,10,'Insurance:',0,0,'L');
		$this->Ln(4);
		$this->SetXY(154,206+$height);
		$this->Cell(10,10,'Other:',0,0,'L');
		$this->Ln(4);
		$this->SetXY(154,212+$height);
		$this->Cell(10,10,'Discount:',0,0,'L');
		$this->Ln(4);
		$this->SetXY(154,218+$height);
		$this->Cell(10,10,'Invoice Total:',0,0,'L');
		$this->Ln(4);
		$this->SetXY(154,224+$height);
		$this->Cell(10,10,'Currency Code:',0,0,'L');
		$this->Ln(4);
		
		$this->SetXY(185,194+$height);
		$this->Cell(10,10,$package_details['value'],0,0,'R');
		$this->Ln(4);
		$this->SetXY(185,200+$height);
		$this->Cell(10,10,'0.00',0,0,'R');
		$this->Ln(4);
		$this->SetXY(185,206+$height);
		$this->Cell(10,10,$package_details['other'],0,0,'R');
		$this->Ln(4);
		$this->SetXY(185,212+$height);
		$this->Cell(10,10,$package_details['diccount'],0,0,'R');
		$this->Ln(4);
		$this->SetXY(185,218+$height);
		$this->Cell(10,10,$package_details['total'],0,0,'R');
		$this->Ln(4);
		$this->SetXY(178,224+$height);
		$this->Cell(10,10,$package_details['currency'],0,0,'C');
		$this->Ln(4);
	}
	
	public function addExtraDetails( $extras ){
		$trade_vertical_position = 55;
		foreach ($extras as $key => $value) {
			
			$this->SetFont('Arial','B',3.5*$this->fontfactor);
			$this->SetXY(100,$trade_vertical_position);
			$this->Cell(10,10,$key.':',0,0,'L');
			$this->SetFont('Arial','',3.5*$this->fontfactor);			
			$this->SetXY(124,$trade_vertical_position);
			$this->Cell(10,10,$value,0,0,'L');
			$this->Ln(4);
			$trade_vertical_position = $trade_vertical_position+4;
		}	
	}
}