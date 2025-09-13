{*
* 2007-2023 PrestaShop
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
*  @copyright 2007-2023 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

<table style="width:100%">
<tr>
<td  style="width:45%;text-align:top;vertical-align:baseline;padding:5px;">
<form method="post">
<div class="panel">
<h3><i class="icon icon-tags"></i> {l s='UPS Account Information' mod='hitups'}</h3>
<table style="width:100%;">
<tr valign="top">
{*<td style="width:25%;font-weight:800;">
<label for="hit_ups_shipping_production">{l s='UPS Account Information' mod='hitups'}
</label> 
</td>*}
<td scope="row" class="titledesc" style="width:100%;text-align:center;display: block;margin-bottom: 20px;margin-top: 3px;">
<center>
<table>
	<tr valign="top">
		<td style="padding:3px;">
			<label class="form-control-label">Select API type<span style="color:red;">*</span> : </label>
		</td>
		<td>
			<fieldset style="padding:3px;">
				{if ((isset($general_settings['api_type']) && $general_settings['api_type'] ==='SOAP') || (!isset($general_settings['api_type']) && isset($general_settings['site_id']) && !empty($general_settings['site_id'])))}
					<input class="input-text regular-input" type="radio" name="hit_ups_shipping_api_type"  id="hit_ups_shipping_api_type" value="REST"> {l s='I don\'t have access key (OAuth API)' mod='hitups'}&nbsp; &nbsp;
					<input class="input-text regular-input" type="radio"  name="hit_ups_shipping_api_type" checked="true" id="hit_ups_shipping_api_type" value="SOAP"> {l s='I have access key (XML API)' mod='hitups'}
				{else}
					<input class="input-text regular-input" type="radio" name="hit_ups_shipping_api_type" checked="true" id="hit_ups_shipping_api_type" value="REST"> {l s='I don\'t have access key (OAuth API)' mod='hitups'}&nbsp; &nbsp;
					<input class="input-text regular-input" type="radio" name="hit_ups_shipping_api_type" id="hit_ups_shipping_api_type" value="SOAP"> {l s='I have access key (XML API)' mod='hitups'}
				{/if}
			</fieldset>
		</td>
	</tr>
	<tr><td colspan="2"><hr></td></tr>
</table>
<fieldset style="padding:3px;">
{if (isset($general_settings['production']) && $general_settings['production'] ==='yes')}
<input class="input-text regular-input " type="radio" name="hit_ups_shipping_production"  id="hit_ups_shipping_production_test" value="no" placeholder=""> {l s='Test Mode' mod='hitups'}
<input class="input-text regular-input " type="radio"  name="hit_ups_shipping_production" checked="true" id="hit_ups_shipping_production" value="yes" placeholder=""> {l s='Live Mode' mod='hitups'}
{else}
<input class="input-text regular-input " type="radio" name="hit_ups_shipping_production" checked="true" id="hit_ups_shipping_production_test" value="no" placeholder=""> {l s='Test Mode' mod='hitups'}
<input class="input-text regular-input " type="radio" name="hit_ups_shipping_production" id="hit_ups_shipping_production" value="yes" placeholder=""> {l s='Live Mode' mod='hitups'}
{/if}
<br>
</fieldset>
<fieldset class="SOAP_auth" style="padding:3px;width:50%">
<label for="hit_ups_shipping_ac_num">{l s='Account Number' mod='hitups'}</label> <br/><input class="input-text regular-input" type="text" name="hit_ups_shipping_ac_num" id="hit_ups_shipping_ac_num"  value="{if (isset($general_settings['account_number']))}{$general_settings['account_number']|escape:'html':'UTF-8'}{else}130000279{/if}" placeholder="130000279"> 
</fieldset>
<fieldset class="SOAP_auth" style="padding:3px;width:50%">
<label for="hit_ups_shipping_site_id">{l s='User ID' mod='hitups'}</label> <input class="input-text regular-input " type="text" name="hit_ups_shipping_site_id" id="hit_ups_shipping_site_id"  value="{if (isset($general_settings['site_id']))}{$general_settings['site_id']|escape:'html':'UTF-8'}{else}130000279{/if}" placeholder="Enter UPS Site ID"> 
</fieldset>
<fieldset class="SOAP_auth" style="padding:3px;width:50%">
<label for="hit_ups_shipping_site_pwd">{l s='User Password' mod='hitups'}</label> <input class="input-text regular-input " type="password" name="hit_ups_shipping_site_pwd" id="hit_ups_shipping_site_pwd"  value="{if (isset($general_settings['site_pwd']))}{$general_settings['site_pwd']|escape:'html':'UTF-8'}{else}130000279{/if}" placeholder="130000279"> 
</fieldset>
<fieldset class="SOAP_auth" style="padding:3px;width:50%">
<label for="hit_ups_shipping_site_acess">{l s='Access Key' mod='hitups'}</label> <input class="input-text regular-input " type="text" name="hit_ups_shipping_site_acess" id="hit_ups_shipping_site_acess"  value="{if (isset($general_settings['site_acess']))}{$general_settings['site_acess']|escape:'html':'UTF-8'}{else}130000279{/if}" placeholder="130000279"> 
</fieldset>
<fieldset class="REST_auth" style="padding:3px;width:50%">
<label>{l s='Client Id' mod='hitups'}</label> <input class="input-text regular-input" type="text" name="hit_ups_shipping_rest_client_id" id="hit_ups_shipping_rest_client_id"  value="{if (isset($general_settings['rest_client_id']))}{$general_settings['rest_client_id']|escape:'html':'UTF-8'}{/if}"> 
</fieldset>
<fieldset class="REST_auth" style="padding:3px;width:50%">
<label>{l s='Client Secret' mod='hitups'}</label> <input class="input-text regular-input" type="text" name="hit_ups_shipping_rest_client_sec" id="hit_ups_shipping_rest_client_sec"  value="{if (isset($general_settings['rest_client_sec']))}{$general_settings['rest_client_sec']|escape:'html':'UTF-8'}{/if}"> 
</fieldset>
<fieldset class="REST_auth" style="padding:3px;width:50%">
<label>{l s='Account number' mod='hitups'}</label> <input class="input-text regular-input" type="text" name="hit_ups_shipping_rest_acc_no" id="hit_ups_shipping_rest_acc_no"  value="{if (isset($general_settings['rest_acc_no']))}{$general_settings['rest_acc_no']|escape:'html':'UTF-8'}{/if}"> 
</fieldset>
<fieldset class="REST_auth" style="padding:3px;width:50%">
<label>{l s='Grant Type' mod='hitups'}</label>
<select name="hit_ups_shipping_rest_grant_type" class="form-control">
	<option value="client_credentials" {if (isset($general_settings['rest_grant_type']) && $general_settings['rest_grant_type'] == "client_credentials")}selected{/if} >Client Credentials</option>
</select>
</fieldset>
<br/><small style="color:green;">{l s='Enter your UPS API credentials obtained from UPS developer site. You can contact your UPS sales representative to get it if you don\'t have.' mod='hitups'}</small>
</center>
</td>
</tr>
</table>
</div>
<div class="panel">
<h3><i class="icon icon-tags"></i> {l s='Rates Section (Front Office)' mod='hitups'}</h3>
<table style="width:100%;">
<tr valign="top">
<td style="width:45%;font-weight:800;">
<label for="hit_ups_shipping_delivery_time">{l s='Enable/Disable' mod='hitups'}</label>
</td>
<td scope="row" class="titledesc" style="display: block;margin-bottom: 20px;margin-top: 3px;">
<fieldset style="padding:3px;">
	<input class="input-text regular-input " type="radio" name="hit_ups_shipping_rate_live" style="" value="live" {if ((isset($general_settings['rate_live']) && $general_settings['rate_live'] === 'live') || (isset($general_settings['rate_live']) && $general_settings['rate_live'] === 'yes') || (empty($general_settings['rate_live'])))}checked{/if} placeholder="">  {l s='Enable Real-time Rates' mod='hitups'} <br/><small style="color:green;">{l s='On enabling this, the Live rates will be shown in the cart/checkout page.' mod='hitups'}</small>
</fieldset>
<fieldset style="padding:3px;">
	<input class="input-text regular-input " type="radio" name="hit_ups_shipping_rate_live" style="" value="local" {if (isset($general_settings['rate_live']) && $general_settings['rate_live'] ==='local')}checked{/if} placeholder="">  {l s='Enable Local Rates' mod='hitups'} <br/><small style="color:green;">{l s='On enabling this, the Prestashop configured rates will be shown in the cart/checkout page.' mod='hitups'}</small>
</fieldset>
<fieldset style="padding:3px;">
	<input class="input-text regular-input " type="radio" name="hit_ups_shipping_rate_live" style="" value="freight_rate" {if (isset($general_settings['rate_live']) && $general_settings['rate_live'] ==='freight_rate')}checked{/if} placeholder="">  {l s='Enable Freight Rates' mod='hitups'} <br/><small style="color:green;">{l s='Shows only LTL Freight Rates not ordinary Services. Only available for XML API.' mod='hitups'}</small>
</fieldset>
<fieldset style="padding:3px;">
	<input class="input-text regular-input " type="radio" name="hit_ups_shipping_rate_live" style="" value="disable" {if (isset($general_settings['rate_live']) && $general_settings['rate_live'] ==='disable')}checked{/if} placeholder="">  {l s='Disable Rates' mod='hitups'} <br/><small style="color:green;">{l s='On enabling this, Rates are get disabled.' mod='hitups'}</small>
</fieldset>
<fieldset style="padding:3px;">
<input class="input-text regular-input " type="checkbox" name="hit_ups_shipping_rate_insure" id="hit_ups_shipping_rate_insure" style="" value="yes" {if (isset($general_settings['rate_insure']) && $general_settings['rate_insure'] ==='yes')}checked{/if} placeholder="">  {l s='Enable Insurance' mod='hitups'} <br/><small style="color:green;">{l s='Enable this to insure your products. The insured value will be the total cart value.' mod='hitups'}</small>
</fieldset>
</td>
</tr>

<tr valign="top">
<td style="width:45%;font-weight:800;">
<label for="">{l s='Enable/Disable' mod='hitups'}</label>
</td>

<td scope="row" class="titledesc" style="display: block;margin-bottom: 20px;margin-top: 3px;">
<fieldset style="padding:3px;">
<input class="input-text regular-input " type="checkbox" name="hit_ups_shipping_cod" id="hit_ups_shipping_cod" style="" value="yes" {if (isset($general_settings['cod']) && $general_settings['cod'] ==='yes')}checked{/if} placeholder="">  {l s='Enable COD' mod='hitups'} <br/><small style="color:green;">{l s='On enabling this, the plugin will fetch rates for COD.' mod='hitups'}</small>
</fieldset>
</td>
</tr>

<tr valign="top">
<td style="width:45%;font-weight:800;">
<label for="">{l s='Customer Classification' mod='hitups'}</label>
</td>
<td scope="row" class="titledesc" style="display: block;margin-bottom: 20px;margin-top: 3px;">
<fieldset style="padding:3px;">
<select name="hit_ups_shipping_customer_classification" class="">
{foreach $classification as $key => $value}
	{if (isset($general_settings['customer_classification'])) && $general_settings['customer_classification'] == $key}
	<option value="{$key}" selected="true">{$value}</option>
	{else}
	<option value="{$key}">{$value}</option>
	{/if}
{/foreach}
</select>

</fieldset>
</td>
</tr>


<tr valign="top">
<td style="width:45%;font-weight:800;">
<label for="hit_ups_shipping_exclude">{l s='Exclude Countries' mod='hitups'}</label>
</td>
<td scope="row" class="titledesc" style="display: block;margin-bottom: 20px;margin-top: 3px;">
<fieldset style="padding:3px;">
<select name="hit_ups_shipping_exclude[]" class="chosen" multiple="true">
{foreach $countires as $key => $value}
	{if (isset($selected_excountrys)) && in_array($key,$selected_excountrys)}
	<option value="{$key}" selected="true">{$value}</option>
	{else}
	<option value="{$key}">{$value}</option>
	{/if}
{/foreach}
</select>

</fieldset>


</td>
</tr>
<tr valign="top">
<td style="width:45%;font-weight:800;">
<label for="hit_ups_shipping_delivery_time">{l s='Show/Hide' mod='hitups'}</label>
</td>
<td scope="row" class="titledesc" style="display: block;margin-bottom: 20px;margin-top: 3px;">
<fieldset style="padding:3px;">
<input class="input-text regular-input " type="checkbox" name="hit_ups_shipping_request_type" id="hit_ups_shipping_request_type" style="" value="yes" {if (isset($general_settings['request_type']) && $general_settings['request_type'] ==='yes')}checked{/if} placeholder="">  {l s='Show UPS Negotiated Rates' mod='hitups'} <br/><small style="color:green;">{l s='On enabling this, the plugin will fetch the account specific rates of the shipper.' mod='hitups'}</small>

</fieldset>


</td>
</tr>

<tr valign="top">
<td style="width:45%;font-weight:800;">
<label for="">{l s='Enable/Disable' mod='hitups'}</label>
</td>
<td scope="row" class="titledesc" style="display: block;margin-bottom: 20px;margin-top: 3px;">
<fieldset style="padding:3px;">
<input class="input-text regular-input " type="checkbox" name="hit_ups_shipping_rate_with_tax" id="hit_ups_shipping_rate_with_tax" style="" value="yes" {if (isset($general_settings['rate_with_tax']) && $general_settings['rate_with_tax'] ==='yes')}checked{/if} placeholder="">  {l s='Show Rates With Tax if available' mod='hitups'} <br/><small style="color:green;">{l s='On enabling this, the plugin will fetch the tax added charges for negotiated and non-negotiated rates.' mod='hitups'}</small>

</fieldset>


</td>
</tr>

<tr valign="top">
<td style="width:45%;font-weight:800;">
<label for="hit_ups_shipping_excus">{l s='WhiteList Customer from Selected Countires' mod='hitups'}</label>
</td>
<td scope="row" class="titledesc" style="display: block;margin-bottom: 20px;margin-top: 3px;">
<fieldset style="padding:3px;">
<select name="hit_ups_shipping_excus[]" class="chosen" multiple="true">
{foreach $list_cus as $key => $value}
	{if (isset($selected_excus)) && in_array($key,$selected_excus)}
	<option value="{$key}" selected="true">{$value}</option>
	{else}
	<option value="{$key}">{$value}</option>
	{/if}
{/foreach}
</select>
</fieldset>


</td>
</tr>
</table>
</div>
<div class="panel">
<h3><i class="icon icon-tags"></i> {l s='Choose Packaging' mod='hitups'}</h3>
<table style="width:100%;">
<tr valign="top">
<td style="width:45%;font-weight:800;">
<label for="hit_ups_shipping_packing_type">{l s='Choose Weight/Dimension Unit' mod='hitups'}</label><span style="color:red;"></span>
</td>
<td scope="row" class="titledesc" style="display: block;margin-bottom: 20px;margin-top: 3px;">
<fieldset style="padding:3px;">
{if (isset($general_settings['weg_dim']) && $general_settings['weg_dim'] ==='yes')}
<input class="input-text regular-input " type="radio" name="hit_ups_shipping_weg_dim"  id="hit_ups_shipping_weg_dim_lb" value="no" placeholder=""> {l s='LBS - IN' mod='hitups'}
<input class="input-text regular-input " type="radio"  name="hit_ups_shipping_weg_dim" checked="true" id="hit_ups_shipping_weg_dim" value="yes" placeholder=""> {l s='KG - CM' mod='hitups'}
{else}
<input class="input-text regular-input " type="radio" name="hit_ups_shipping_weg_dim" checked="true" id="hit_ups_shipping_weg_dim_lb" value="no" placeholder=""> {l s='LBS - IN' mod='hitups'}
<input class="input-text regular-input " type="radio" name="hit_ups_shipping_weg_dim" id="hit_ups_shipping_weg_dim" value="yes" placeholder=""> {l s='KG - CM' mod='hitups'}
{/if}
<br>
</fieldset>
</td>
</tr>
<tr valign="top">
<td style="width:45%;font-weight:800;">
<label for="hit_ups_shipping_packing_type">{l s='Choose your packing type' mod='hitups'}</label><span style="color:red;">*</span>
</td>
<td scope="row" class="titledesc" style="display: block;margin-bottom: 20px;margin-top: 3px;">
<fieldset style="padding:3px;">
<input class="input-text regular-input " type="radio" name="hit_ups_shipping_packing_type" id="hit_ups_shipping_packing_type_per" style="" value="per_item" {if (isset($general_settings['packing_type']) && $general_settings['packing_type'] ==='per_item')}checked{/if} placeholder="">  {l s='Default: Pack items individually' mod='hitups'} <br/><small style="color:green;">{l s='UPS Box: There are the most commonly used boxes for packing. These are the boxes which get populated when you install the plugin. Flyer: This option is suitable for Binded documents and Flat materials. Your Box: With this option, your item gets packed into customized box. For example, the shipping cost of Item X is £10. If the customer adds two quantities of Item X to the Cart, then the total shipping cost is £10 x 2, which is £20.' mod='hitups'}</small>
</fieldset>
<fieldset style="padding:3px;">
<input class="input-text regular-input " type="radio" name="hit_ups_shipping_packing_type" id="hit_ups_shipping_packing_type_box" style="" value="box" {if (isset($general_settings['packing_type']) && $general_settings['packing_type'] ==='box')}checked{/if} placeholder="">  {l s='Recommended: Pack into boxes with weights and dimensions' mod='hitups'} <br/><small style="color:green;">{l s='Box Sizes - This section allows you to create your own box size(dimensions) and provide the box weight.' mod='hitups'}</small>
</fieldset>
<fieldset style="padding:3px;">
<input class="input-text regular-input " type="radio" name="hit_ups_shipping_packing_type" id="hit_ups_shipping_packing_type" style="" value="weight_based" {if (isset($general_settings['packing_type']) && $general_settings['packing_type'] ==='weight_based')}checked{/if} placeholder="">  {l s='Weight based: Calculate shipping on the basis of order total weight' mod='hitups'} <br/><small style="color:green;">{l s='This option will allow each box to hold the maximum value provided in the field.' mod='hitups'}</small>
</fieldset>
</td>
</tr>
</table>
</div>
</div>
<div class="panel">
<h3><i class="icon icon-tags"></i> {l s='Box Packing' mod='hitups'}</h3>
<table style="width:100%;" class="ups_boxes">
<tr>
<th style="padding:3px;"><input type="checkbox" /></th>
<th style="padding:3px;">{l s='Name' mod='hitups'}</th>
<th style="padding:3px;">{l s='Length' mod='hitups'}</th>
<th style="padding:3px;">{l s='Width' mod='hitups'}</th>
<th style="padding:3px;">{l s='Height' mod='hitups'}</th>
<th style="padding:3px;">{l s='Box Weight' mod='hitups'}</th>
<th style="padding:3px;">{l s='Max Weight' mod='hitups'}</th>
<th style="padding:3px;">{l s='Enabled' mod='hitups'}</th>
</tr>
<tfoot>
<tr>
<th colspan="3">
<a href="#" class="plus insert btn" style="vertical-align: center;">{l s='Add Box' mod='hitups'}</a>
<a href="#" class="minus remove btn">{l s='Remove selected box(es)' mod='hitups'}</a>
</th>
<th colspan="6">
<small class="description">{l s='Preloaded the Dimension and Weight in unit Inches and Pound. If you have selected unit as Centimetre and Kilogram please convert it accordingly.' mod='hitups'}</small>
</th>
</tr>
</tfoot>
<tbody id="rates">
{if $boxes }
{foreach $boxes as $key => $box }
<tr>
<td class="check-column" style="padding:3px;"><input type="checkbox" /></td>
<input type="hidden" size="1" name="boxes_id[{$key}]" value="{$box['id']|escape:'html':'UTF-8'}" />
<td style="padding:3px;"><input type="text" size="25" name="boxes_name[{$key}]" value="{$box['name']|escape:'html':'UTF-8'}" /></td>

<td style="padding:3px;"><input type="text" style="width:100%;" name="boxes_length[{$key}]" value="{$box['length']|escape:'html':'UTF-8'}" /></td>
<td style="padding:3px;"><input type="text" style="width:100%;" name="boxes_width[{$key}]" value="{$box['width']|escape:'html':'UTF-8'}" /></td>
<td style="padding:3px;"><input type="text" style="width:100%;" name="boxes_height[{$key}]" value="{$box['height']|escape:'html':'UTF-8'}" /></td>

<td style="padding:3px;"><input type="text" style="width:100%;" name="boxes_box_weight[{$key}]" value="{$box['box_weight']|escape:'html':'UTF-8'}" /></td>
<td style="padding:3px;"><input type="text" style="width:100%;" name="boxes_max_weight[{$key}]" value="{$box['max_weight']|escape:'html':'UTF-8'}" /></td>
<td style="padding:3px;"><center><input type="checkbox" name="boxes_enabled[{$key}]" {if $box['enabled'] == true }checked{/if} /></center></td>
</tr>
{/foreach}
{/if}
</table>

</div>
<div class="panel">
<h3><i class="icon icon-tags"></i> {l s='Weight Based packing' mod='hitups'}</h3>
<table style="width:100%;">
<tr valign="top">
<td style="width:45%;font-weight:800;">
<label for="hit_ups_shipping_packing_type">{l s='Maximum Weight / Packing' mod='hitups'}</label><span style="color:red;">*</span>
</td>
<td scope="row" class="titledesc" style="display: block;width:100%;margin-bottom: 20px;margin-top: 3px;">
<fieldset style="padding:5px;">
<input class="input-text regular-input " type="text" name="hit_ups_shipping_box_max_weight" id="hit_ups_shipping_box_max_weight" style="" value="{if (isset($general_settings['box_max_weight']))}{$general_settings['box_max_weight']|escape:'html':'UTF-8'}{/if}" placeholder="">
</fieldset>
<fieldset style="padding:5px;">
{foreach $weight_type as $key => $value }
{if $key === $slected_weight_type}
<input class="input-text regular-input " type="radio" name="hit_ups_shipping_weight_packing_process" id="hit_ups_shipping_weight_packing_process_{$key}" style="" value="{$key}" checked="true" placeholder=""> {$value|escape:'html':'UTF-8'}<br/>
{else}
<input class="input-text regular-input " type="radio" name="hit_ups_shipping_weight_packing_process" id="hit_ups_shipping_weight_packing_process_{$key}" style="" value="{$key}"  placeholder=""> {$value|escape:'html':'UTF-8'}<br/>
{/if}
{/foreach}
</td>
</tr>
<tr valign="top">
<td style="width:45%;font-weight:800;">
<label for="hit_ups_shipping_dimension_send">{l s='Send Dimension to UPS' mod='hitups'}</label>
</td>
<td scope="row" class="titledesc" style="display: block;width:100%;margin-bottom: 20px;margin-top: 3px;">
			<fieldset style="padding:5px;">
				 <input class="input-text regular-input " type="checkbox" name="hit_ups_shipping_dimension_send" id="hit_ups_shipping_dimension_send" style="" value="yes" {if (isset($general_settings['dimension_send']) && $general_settings['dimension_send'] ==='yes')}checked{/if} placeholder=""> {l s='Enable' mod='hitups'}
			</fieldset>
			
		</td>
</tr>
</table>
</div>
<div class="panel">
	<h3><i class="icon icon-tags"></i> {l s='Developer Use Only' mod='hitups'}</h3>
		<table style="width:100%;">
		<tr valign="top">
		<td style="width:45%;font-weight:800;">
			<label for="hit_ups_shipping_packing_type">{l s='Enable to See Request and Response in Front Office' mod='hitups'}</label>
		</td>
		<td scope="row" class="titledesc" style="display: block;width:100%;margin-bottom: 20px;margin-top: 3px;">
			<fieldset style="padding:5px;">
				 <input class="input-text regular-input " type="checkbox" name="hit_ups_shipping_dev_f" id="hit_ups_shipping_dev_f" style="" value="yes" {if (isset($general_settings['dev_f']) && $general_settings['dev_f'] ==='yes')}checked{/if} placeholder=""> {l s='Enable' mod='hitups'} <br/><small style="color:green;">{l s="Dont Enable this. Its for find a error." mod='hitups'}</small>
			</fieldset>
			
		</td>
		</tr><tr>
		<td style="width:45%;font-weight:800;">
			<label for="hit_ups_shipping_packing_type">{l s='Enable to See Request and Response in Back Office' mod='hitups'}</label>
		</td>
		<td scope="row" class="titledesc" style="display: block;width:100%;margin-bottom: 20px;margin-top: 3px;">
			<fieldset style="padding:5px;">
				 <input class="input-text regular-input " type="checkbox" name="hit_ups_shipping_dev_b" id="hit_ups_shipping_dev_b" style="" value="yes" {if (isset($general_settings['dev_b']) && $general_settings['dev_b'] ==='yes')}checked{/if} placeholder=""> {l s='Enable' mod='hitups'} <br/><small style="color:green;">{l s="Dont Enable this. Its for find a error." mod='hitups'}</small>
			</fieldset>
			
		</td>
	</tr>
	<tr>
		<td style="width:45%;font-weight:800;">
			<label for="hit_ups_shipping_recrate_carriers">{l s='Recrate Carriers' mod='hitups'}</label>
		</td>
		<td scope="row" class="titledesc" style="display: block;width:100%;margin-bottom: 20px;margin-top: 3px;">
			<fieldset style="padding:5px;">
				 <button class="btn btn-default" name="hit_ups_shipping_recrate_carriers" id="hit_ups_shipping_recrate_carriers" style="width:100%;padding:10px;background:#301506;color:#FAB80A;font-weight:bold;">Recreate</button>
			</fieldset>
			
		</td>
	</tr>
</table>
</div>
</td>
<td style="text-align:top;vertical-align:baseline;padding:2px;">
<div class="panel">
<h3><i class="icon icon-tags"></i> {l s='Shipper Address' mod='hitups'}</h3>
<table style="width:100%;">
<tr valign="top">
{*<td style="width:40%;font-weight:800;">
<label for="hit_ups_shipping_">{l s='Shipper Address' mod='hitups'}</label>
</td>*}
<td scope="row" class="titledesc" style="display: block;margin-bottom: 20px;margin-top: 3px;">
<center>
<table>
<tr>
<td>
<fieldset style="padding-left:3px;">
<label for="hit_ups_shipping_">{l s='Shipper Name' mod='hitups'}<font style="color:red;">*</font></label> <br/>
<input class="input-text regular-input " type="text" name="hit_ups_shipping_shipper_person_name" id="hit_ups_shipping_shipper_person_name" style="" value="{if (isset($general_settings['shipper_person_name']))}{$general_settings['shipper_person_name']|escape:'html':'UTF-8'}{/if}" placeholder=""> 	
</fieldset>
</td>
<td>
<fieldset style="padding-left:3px;">
<label for="hit_ups_shipping_">{l s='Company Name' mod='hitups'}<font style="color:red;">*</font></label><br/>
<input class="input-text regular-input " type="text" name="hit_ups_shipping_shipper_company_name" id="hit_ups_shipping_shipper_company_name" style="" value="{if (isset($general_settings['shipper_company_name']))}{$general_settings['shipper_company_name']|escape:'html':'UTF-8'}{/if}" placeholder=""> 	
</fieldset>

</td>
<td>

<fieldset style="padding-left:3px;">
<label for="hit_ups_shipping_">{l s='Phone Number' mod='hitups'}<font style="color:red;">*</font></label> <span class="woocommerce-help-tip" data-tip="{l s='Phone number of the shipper.' mod='hitups'}"></span>	<br/>
<input class="input-text regular-input " style="display: block;width: 100%;height: 31px;padding: 6px 8px;font-size: 12px;line-height: 1.42857;color: #555;background-color: #F5F8F9;background-image: none;border: 1px solid #C7D6DB;border-radius: 3px;" type="number" name="hit_ups_shipping_shipper_phone_number" id="hit_ups_shipping_shipper_phone_number" style="" value="{if (isset($general_settings['shipper_phone_number']))}{$general_settings['shipper_phone_number']|escape:'html':'UTF-8'}{/if}" placeholder=""> 	
</fieldset>
</td>
</tr>
<tr>

<td>

<fieldset style="padding-left:3px;">
<label for="hit_ups_shipping_">{l s='Email Address' mod='hitups'}</label> <br/>
<input class="input-text regular-input " style="display: block;width: 100%;height: 31px;padding: 6px 8px;font-size: 12px;line-height: 1.42857;color: #555;background-color: #F5F8F9;background-image: none;border: 1px solid #C7D6DB;border-radius: 3px;" type="email" name="hit_ups_shipping_shipper_email" id="hit_ups_shipping_shipper_email" style="" value="{if (isset($general_settings['shipper_email']))}{$general_settings['shipper_email']|escape:'html':'UTF-8'}{/if}" placeholder=""> 	
</fieldset>
</td>
<td>

<fieldset style="padding-left:3px;">
<label for="hit_ups_shipping_">{l s='Address Line 1' mod='hitups'}<font style="color:red;">*</font></label><br> 
<input class="input-text regular-input " type="text" name="hit_ups_shipping_freight_shipper_street" id="hit_ups_shipping_freight_shipper_street" style="" value="{if (isset($general_settings['freight_shipper_street']))}{$general_settings['freight_shipper_street']|escape:'html':'UTF-8'}{/if}" placeholder=""> 	
</fieldset>

</td>
<td>

<fieldset style="padding-left:3px;">
<label for="hit_ups_shipping_">{l s='Address Line 2' mod='hitups'}</label><br/> 
<input class="input-text regular-input " type="text" name="hit_ups_shipping_shipper_street_2" id="hit_ups_shipping_shipper_street_2" style="" value="{if (isset($general_settings['shipper_street_2']))}{$general_settings['shipper_street_2']|escape:'html':'UTF-8'}{/if}" placeholder=""> 	
</fieldset>

</td>
</tr>
<tr>
<td>
<fieldset style="padding-left:3px;">
<label for="hit_ups_shipping_freight_shipper_city">{l s='City' mod='hitups'}<font style="color:red;">*</font></label>  <br/>

<input class="input-text regular-input " type="text" name="hit_ups_shipping_freight_shipper_city" id="hit_ups_shipping_freight_shipper_city" style="" value="{if (isset($general_settings['freight_shipper_city']))}{$general_settings['freight_shipper_city']|escape:'html':'UTF-8'}{/if}" placeholder="">
</fieldset>
</td>
<td>
<fieldset style="padding-left:3px;">

<label for="hit_ups_shipping_freight_shipper_state">{l s='State' mod='hitups'}<font style="color:red;">*</font></label> <span class="woocommerce-help-tip" data-tip="{l s='State of the shipper.' mod='hitups'}"></span>	<br/>
<input class="input-text regular-input " type="text" name="hit_ups_shipping_freight_shipper_state" id="hit_ups_shipping_freight_shipper_state" style="" value="{if (isset($general_settings['freight_shipper_state']))}{$general_settings['freight_shipper_state']|escape:'html':'UTF-8'}{/if}" placeholder="">
</fieldset>
</td>
<td>

<fieldset style="padding-left:3px;">

<label for="hit_ups_shipping_base_country">{l s='Country' mod='hitups'}<font style="color:red;">*</font></label> <span class="woocommerce-help-tip" data-tip="{l s='Country of the shipper(Used for fetching rates and label generation).' mod='hitups'}"></span><br/>
<select name="hit_ups_shipping_base_country" class="chosen">
{foreach $countires as $key => $value}
	{if (isset($general_settings['base_country'])) && $general_settings['base_country'] == $key}
	<option value="{$key}" selected="true">{$value}</option>
	{else}
	<option value="{$key}">{$value}</option>
	{/if}
{/foreach}
</select>

</fieldset>
</td>

</tr>
<tr>
<td>	
<fieldset style="padding-left:3px;">

<label for="hit_ups_shipping_origin">{l s='Postal Code' mod='hitups'}<font style="color:red;">*</font></label> <span class="woocommerce-help-tip" data-tip="{l s='Postal code of the shipper(Used for fetching rates and label generation).' mod='hitups'}"></span><br/>
<input class="input-text regular-input " type="text" name="hit_ups_shipping_origin" id="hit_ups_shipping_origin" style="" value="{if (isset($general_settings['origin']))}{$general_settings['origin']|escape:'html':'UTF-8'}{/if}" placeholder="">
</fieldset>
</td>
</center>
</tr>
</table>
</td>
</tr>
</table>
</div>
<div class="panel">
<h3><i class="icon icon-tags"></i> {l s='Services & Price Adjustment' mod='hitups'}</h3>
<table style="width:100%">
<tr>
<th>{l s='Service Code' mod='hitups'}</th>
<th>{l s='Name' mod='hitups'}</th>
<th>{l s='Enabled' mod='hitups'}</th>
<th>{l s="Price Adjustment" mod='hitups'}</th>
<th>{l s='Price Adjustment (%)' mod='hitups'}</th>
<th>{l s='Free Shipping ( From Amount)' mod='hitups'}</th>
</tr>
<tr>
{foreach $services as $key => $value}
{$code= $key}
{$name = $value}
<tr>
<td style="padding:3px;"><strong>{$code}</strong></td>
<td style="padding:3px;"><strong>{if isset( $services[{$code}]['name'] )}{$services[{$code}]['name']}{else}{$name}{/if}</strong><input type="hidden" name="ups_service[{$code}][name]" value="{if isset( $services[{$code}]['name'] )}{$services[{$code}]['name']}{else}{$name}{/if}"/></td>
<td style="padding:3px;"><input type="checkbox" name="ups_service[{$code}][enabled]" {if ((isset( $services[{$code}]['enabled'] ) && $services[{$code}]['enabled'] == true) || (!isset($services[{$code}]['name'])))}checked{/if} /></td>
<td style="padding:3px;"><input style="display: block;width: 100%;height: 31px;padding: 6px 8px;font-size: 12px;line-height: 1.42857;color: #555;background-color: #F5F8F9;background-image: none;border: 1px solid #C7D6DB;border-radius: 3px;" type="number" name="ups_service[{$code}][adjustment]" placeholder="N/A" value="{if isset( $services[{$code}]['adjustment'] )}{$services[{$code}]['adjustment']|escape:'html':'UTF-8'}{/if}" size="4" /></td>
<td style="padding:3px;"><input style="display: block;width: 100%;height: 31px;padding: 6px 8px;font-size: 12px;line-height: 1.42857;color: #555;background-color: #F5F8F9;background-image: none;border: 1px solid #C7D6DB;border-radius: 3px;" type="number" name="ups_service[{$code}][adjustment_percent]" placeholder="N/A" value="{if isset( $services[{$code}]['adjustment_percent'] )}{$services[{$code}]['adjustment_percent']|escape:'html':'UTF-8'}{/if}" size="4" /></td>
<td style="padding:3px;"><input style="display: block;width: 100%;height: 31px;padding: 6px 8px;font-size: 12px;line-height: 1.42857;color: #555;background-color: #F5F8F9;background-image: none;border: 1px solid #C7D6DB;border-radius: 3px;" type="number" name="ups_service[{$code}][freeshipping]" placeholder="N/A" value="{if isset( $services[{$code}]['freeshipping'] )}{$services[{$code}]['freeshipping']|escape:'html':'UTF-8'}{/if}" size="4" /></td>
</tr>
{/foreach}
</table>

</div>
<div class="panel">
	<h3><i class="icon icon-tags"></i> {l s='Shipping label Spacial Services' mod='hitups'}</h3>
		<table style="width:100%;">
		<tr valign="top">
		<td style="width:45%;font-weight:800;">
			<label for="hit_ups_shipping_sig_req">{l s='Delivery Confirmation' mod='hitups'}</label>
		</td>
		<td scope="row" class="titledesc" style="display: block;width:100%;margin-bottom: 20px;margin-top: 3px;">
			<fieldset style="padding:5px;">
				 <select name="hit_ups_shipping_sig_req">

				 	<option value="0" {if (isset($general_settings['sig_req'])) && $general_settings['sig_req'] == "0"} selected="true" {/if}>No signature Required</option>
				 	<option value="1" {if (isset($general_settings['sig_req'])) && $general_settings['sig_req'] == "1"} selected="true" {/if}>Delivery Confirmation</option>
				 	<option value="2" {if (isset($general_settings['sig_req'])) && $general_settings['sig_req'] == "2"} selected="true" {/if}>Delivery Confirmation Signature Required</option>
				 	<option value="3" {if (isset($general_settings['sig_req'])) && $general_settings['sig_req'] == "3"} selected="true" {/if}>Delivery Confirmation Adult Signature Required</option>
				 </select>
			</fieldset>
			
		</td>
		</tr>
		<tr valign="top">
		<td style="width:45%;font-weight:800;">
			<label for="hit_ups_shipping_label_format">{l s='Shipping label format' mod='hitups'}</label>
		</td>
		<td scope="row" class="titledesc" style="display: block;width:100%;margin-bottom: 20px;margin-top: 3px;">
			<fieldset style="padding:5px;">
				 <select name="hit_ups_shipping_label_format">
				 	<option value="GIF" {if (isset($general_settings['label_format'])) && $general_settings['label_format'] == "GIF"} selected="true" {/if}>GIF</option>
				 	<option value="PNG" {if (isset($general_settings['label_format'])) && $general_settings['label_format'] == "PNG"} selected="true" {/if}>PNG</option>
				 </select>
				 <small style="color:green;">{l s="Only GIF is available on OAuth API" mod='hitups'}</small>
			</fieldset>
		</td>
		</tr>
		<tr>
				<td style="width:45%;font-weight:800;">
					<label for="">{l s='Order Status to Shipped' mod='hitups'}</label>
				</td>
				<td scope="row" class="titledesc" style="display: block;width:100%;margin-bottom: 20px;margin-top: 3px;">
					<fieldset style="padding:5px;">
						 <input class="input-text regular-input " type="checkbox" name="hit_ups_shipping_oss" id="hit_ups_shipping_oss" style="" value="yes" {if (isset($general_settings['oss']) && $general_settings['oss'] ==='yes')}checked{/if} placeholder=""> {l s='Enable' mod='hitups'} <br/><small style="color:green;">{l s="By enabling this option, After creating shipping label the order status automatically changed to Shipped" mod='hitups'}</small>
					</fieldset>
					
				</td>
				</tr>
				<tr>
				<td style="width:45%;font-weight:800;">
					<label for="">{l s='Order Status to Delivered' mod='hitups'}</label>
				</td>
				<td scope="row" class="titledesc" style="display: block;width:100%;margin-bottom: 20px;margin-top: 3px;">
					<fieldset style="padding:5px;">
						 <input class="input-text regular-input " type="checkbox" name="hit_ups_shipping_osd" id="hit_ups_shipping_osd" style="" value="yes" {if (isset($general_settings['osd']) && $general_settings['osd'] ==='yes')}checked{/if} placeholder=""> {l s='Enable' mod='hitups'} <br/><small style="color:green;">{l s="By this Option, You can add Tracking number for automated tracking for change the order status to delivered. For this, You need the" mod='hitups'} <a href="https://hittechmarket.com/downloads/" target="_blank">{l s="UPS Tracking Status" mod='hitups'}</a> {l s="Module" mod='hitups'}</small>
					</fieldset>
					
				</td>
				</tr>
				<tr valign="top">
						<td style="width:45%;font-weight:800;">
						<label for="hit_ups_shipping_admin_fol">{l s='Admin Folder' mod='hitups'}</label>
						</td><td scope="row" class="titledesc" style="display: block;margin-bottom: 20px;margin-top: 3px;">
						<fieldset style="padding:3px;">
						<input class="input-text regular-input " type="text" name="hit_ups_shipping_admin_fol" id="hit_ups_shipping_admin_fol" style="" value="{if (isset($general_settings['admin_fol']))}{$general_settings['admin_fol']|escape:'html':'UTF-8'}{/if}" placeholder=""> 
						</fieldset>
						<small style="color:green;">{l s='Save your admin folder name. It will be used to create link to generated labels. (Eg. If your web address is https://www.example.com/admin123/index.php?controller=AdminDashboard. Save admin123 as Admin folder.)' mod='hitups'}</small>
						</td>
						</tr>
		</table>
</div>
</td>
</tr>
</table>
<tr>
<td>
<button type="submit" class="btn btn-default" name="hit_button_submit" id="hit_button_submit" style="width:100%;padding:10px;background:#301506;color:#FAB80A;font-weight:bold;">Click here to Save All the Settings</button>
</td>
</tr>
</form>

<script type="text/javascript">
jQuery(window).load(function(){
	var api_type = jQuery("input[name='hit_ups_shipping_api_type']:checked").val();
	if (api_type == "REST") {
		jQuery('.SOAP_auth').attr('hidden', 'hidden');
		jQuery('.REST_auth').removeAttr('hidden');
	} else {
		jQuery('.SOAP_auth').removeAttr('hidden');
		jQuery('.REST_auth').attr('hidden', 'hidden');
	}
	jQuery("input[name='hit_ups_shipping_api_type']").change(function() {
		if (this.value == "REST") {
			jQuery('.SOAP_auth').attr('hidden', 'hidden');
			jQuery('.REST_auth').removeAttr('hidden');
		} else {
			jQuery('.SOAP_auth').removeAttr('hidden');
			jQuery('.REST_auth').attr('hidden', 'hidden');
		}
	});
jQuery('#hit_ups_shipping_add_picup').change(function(){
if(jQuery('#hit_ups_shipping_add_picup').is(':checked')) {
jQuery('#hit_pickup_date').show();
jQuery('#hit_pickup_from_to').show();
jQuery('#hit_pickup_details').show();
}else
{
jQuery('#hit_pickup_date').hide();
jQuery('#hit_pickup_from_to').hide();
jQuery('#hit_pickup_details').hide();
}
}).change();

jQuery('#hit_ups_shipping_add_trackingpin_shipmentid').change(function(){
if(jQuery(hit_ups_shipping_add_trackingpin_shipmentid).is(':checked')) {
jQuery('#ups_email_service').show();
}else
{
jQuery('#ups_email_service').hide();
}
}).change();

jQuery('#hit_ups_shipping_return_label_key').change(function(){
if(jQuery('#hit_ups_shipping_return_label_key').is(':checked')) {
jQuery('#hit_return_label_acc_number').show();
}else
{
jQuery('#hit_return_label_acc_number').hide();
}
}).change();

jQuery('#hit_ups_shipping_request_archive_airway_label').change(function(){
if(jQuery('#hit_ups_shipping_request_archive_airway_label').is(':checked')) {
jQuery('#hit_no_of_archive_bills').show();
}else
{
jQuery('#hit_no_of_archive_bills').hide();
}
}).change();
jQuery('#hit_ups_shipping_ups_email_notification_service').change(function(){
if(jQuery('#hit_ups_shipping_ups_email_notification_service').is(':checked')) {
jQuery('#hit_ups_email_notification_message').show();
}else
{
jQuery('#hit_ups_email_notification_message').hide();
}
}).change();
jQuery('#hit_ups_shipping_dutypayment_type').change(function(){
if(jQuery(this).val() == 'T') {
jQuery('#hit_t_acc_number').show();
}else
{
jQuery('#hit_t_acc_number').hide();
}
}).change();

jQuery('.ups_boxes .insert').click( function() {
var $tbody = jQuery('.ups_boxes').find('#rates');
var size = $tbody.find('tr').size();
var code = '<tr class="new">\
<td  style="padding:3px;" class="check-column"><input type="checkbox" /></td>\
<input type="hidden" size="1" name="boxes_id[' + size + ']" />\
<td style="padding:3px;"><input type="text" size="25" name="boxes_name[' + size + ']" /></td>\
<td style="padding:3px;"><input type="text" style="width:100%;" name="boxes_length[' + size + ']" /></td>\
<td style="padding:3px;"><input type="text" style="width:100%;" name="boxes_width[' + size + ']" /></td>\
<td style="padding:3px;"><input type="text" style="width:100%;" name="boxes_height[' + size + ']" /></td>\
<td style="padding:3px;"><input type="text" style="width:100%;" name="boxes_box_weight[' + size + ']" /></td>\
<td style="padding:3px;"><input type="text" style="width:100%;" name="boxes_max_weight[' + size + ']" /></td>\
<td style="padding:3px;"><center><input type="checkbox" name="boxes_enabled[' + size + ']" /></center></td>\
</tr>';
$tbody.append( code );
return false;
});

jQuery('.ups_boxes .remove').click(function() {
var $tbody = jQuery('.ups_boxes').find('#rates');
$tbody.find('.check-column input:checked').each(function() {
jQuery(this).closest('tr').hide().find('input').val('');
});

return false;
});

});

</script>
