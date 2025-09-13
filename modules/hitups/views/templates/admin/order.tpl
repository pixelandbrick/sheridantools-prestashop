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
<form method="post">
<div class="panel"><br/>
<h3><i class="icon icon-truck"></i> {l s='UPS Express Shipment' mod='hitups'}</h3>
{if (!$label_check)}
<span style="font-weight:bold;">{l s='Package(s)' mod='hitups'}:</span>
<table id="hit_ups_package_list" class="hit-shipment-package-table" style="margin-bottom: 5px;margin-top: 5px;box-shadow:.5px .5px 5px lightgrey;">
<tr>
<th style="padding:6px;text-align:left;">{l s='SL No.' mod='hitups'}</th>
<th style="padding:6px;text-align:left;">{l s='Weight' mod='hitups'}</th>
<th style="text-align:left;padding:6px;">{l s='Length' mod='hitups'}</th>
<th style="text-align:left;padding:6px;">{l s='Width' mod='hitups'} </th>
<th style="text-align:left;padding:6px;">{l s='Height' mod='hitups'} </th>
<th style="text-align:left;padding:6px;">{l s='Insurance' mod='hitups'}</th>
</tr>
{if !empty($dimensions)}
{foreach $dimensions as $key => $value}
<tr>
<td style="width:25%;padding:5px;border-radius:5px;margin-left:4px;"><small>{$key+1|escape:'html':'UTF-8'}</small></td>     
<td><input type="text" id="ups_manual_weight_{$key}" name="ups_manual_weight[]" style="width:60%;padding:5px;border-radius:5px;margin-left:4px;" value="{if isset($value['Weight']['Value'])}{$value['Weight']['Value']|escape:'html':'UTF-8'}{else}0{/if}" /></td>     
<td><input type="text" id="ups_manual_length_{$key}" name="ups_manual_length[]" style="width:60%;padding:5px;border-radius:5px;margin-left:4px;" value="{if isset($value['Dimensions']['Length'])}{$value['Dimensions']['Length']|escape:'html':'UTF-8'}{else}0{/if}" /> </td>
<td><input type="text" id="ups_manual_width_{$key}" name="ups_manual_width[]" style="width:60%;padding:5px;border-radius:5px;margin-left:4px;" value="{if isset($value['Dimensions']['Width'])}{$value['Dimensions']['Width']|escape:'html':'UTF-8'}{else}0{/if}" /> </td>
<td><input type="text" id="ups_manual_height_{$key}" name="ups_manual_height[]" style="width:60%;padding:5px;border-radius:5px;margin-left:4px;" value="{if isset($value['Dimensions']['Height'])}{$value['Dimensions']['Height']|escape:'html':'UTF-8'}{else}0{/if}" /> </td>
<td><input type="text" id="ups_manual_insurance_{$key}" name="ups_manual_insurance[]" style="width:60%;padding:5px;border-radius:5px;margin-left:4px;" value="{if ($general_settings['rate_insure'] == 'yes')}{$value['InsuredValue']['Amount']|escape:'html':'UTF-8'}{else}0{/if}" title="{$value['InsuredValue']['Currency']}" /> </td>
</tr>
{/foreach}
{/if}
<tr><td><br/></td></tr>
</table>
<span style="font-weight:bold;">{l s='Select Packing Type' mod='hitups'}:</span>

<select name="hit_ups_packing" class="chosen-single form-control">
{foreach $packing_types_ser as $key => $value}
<option value="{$key}">[{$key}] {$value|escape:'html':'UTF-8'}</option>
{/foreach}
</select>


<span style="font-weight:bold;">{l s='Select Service' mod='hitups'}:</span>

<select name="hit_ups_services" id="hit_ups_services" class="chosen-single form-control">
{foreach $services as $key => $value}
<option value="{$key}" {if $carrier_ups_value == $key}selected="true"{/if} >[{$key}] {$value}</option>
{/foreach}
</select>

<span style="font-weight:bold;">{l s='Current Shipment Description' mod='hitups'}:</span>

<input type="text" name="hit_ups_ship_desc" class="form-control" value="{if !empty($general_settings['label_contents_text'])}{$general_settings['label_contents_text']}{else}Shipment Number {$order_id}{/if}">
<br/>

<span style="font-weight:bold;">{l s='Cash On Delivery' mod='hitups'}:</span>
<input type="checkbox" name="hit_ups_cod" value="yes" >
<br/>
<br>
<span class="pick" style="font-weight:bold;">{l s='Pickup Open Time' mod='hitups'}:</span>
<input type="time" id="pick_time" name="hit_ups_open_time" class="form-control pick" style="max-width: 100px;" >
<br class="pick">
<span class="pick" style="font-weight:bold;">{l s='Pickup Close Time' mod='hitups'}:</span>
<input type="time" id="pick_time" name="hit_ups_close_time" class="form-control pick" style="max-width: 100px;" >
<br class ="pick">
<span class="pick" style="font-weight:bold;">{l s='Pickup Date' mod='hitups'}:</span>
<input type="date" id="pick_time" name="hit_ups_pick_date" class="form-control pick" style="max-width: 150px;" >
<br class="pick">
<button class="btn btn-primary" name="hit_create_shipment_ups">Create Shipment</button>
{else}

<b>Shipment Id : #</b>{$label_check['ShipmentID']}<br/>
<b>Shipment Selected Service :</b> {$services[$label_check['selected_service']]}<br/><br/>
{* {$label_check|@print_r} *}
{if $label_check['selected_service'] == '308' || $label_check['selected_service'] == '309' || $label_check['selected_service'] == '334' || $label_check['selected_service'] == '349'}
    <a href="{$admin_url}/hit_ups_shipping_label_{$order_id}.pdf?_token={$token}" target="_blank" class="btn btn-primary" name="hit_ups_shipment_label">Shipment Label</a>
    {else}
        {if isset($label_check['labels']) && $label_check['labels'] != 0}
            {for $i=0 to $label_check['labels']}
                <a href="{$admin_url}/hit_ups_shipping_label_{$order_id}_{$i}.{$format_type}?_token={$token}" target="_blank" class="btn btn-primary" name="hit_ups_shipment_label_{$i}">Shipment Label {$i}</a>
            {/for}
        {else}
            <a href="{$admin_url}/hit_ups_shipping_label_{$order_id}_0.{$format_type}?_token={$token}" target="_blank" class="btn btn-primary" name="hit_ups_shipment_label">Shipment Label</a>
        {/if}
{/if}
<!-- <button class="btn btn-primary" name="hit_ups_shipment_label">Shipment Label</button> -->
{* <button class="btn btn-primary" name="hit_ups_commercial_invoice">Commercial Invoice</button> *}
<a href="{$admin_url}/commercial-invoice-{$order_id}.pdf?_token={$token}" target="_blank" class="btn btn-primary" name="hit_ups_commercial_invoice">Commercial Invoice</a>
<button class="btn btn-primary" name="hit_ups_reset_invoice">Reset Shipment</button>

{/if}
</div>
</form>
<script type="text/javascript">
    
    jQuery( document ).ready(function($) {
        $('.pick').hide();
       
        var serv;
        serv = $(this).val();
        if(serv == '308' || serv == '309' || serv == '334' || serv == '349' ){
            $('.pick').show();
            
        }
        $('#hit_ups_services').on('change',function(){
            var serv;
            serv = $(this).val();
            if(serv == '308' || serv == '309' || serv == '334' || serv == '349' ){
            $('.pick').show();
            
            }else{
                $('.pick').hide();
               
            }
        });
    
});
</script>