{*
 * 2008 - 2017 Presto-Changeo
 *
 * MODULE Authorize.net (AIM / DPM)
 *
 * @author    Presto-Changeo <info@presto-changeo.com>
 * @copyright Copyright (c) permanent, Presto-Changeo
 * @license   Addons PrestaShop license limitation
 * @version   2.0.0
 * @link      http://www.presto-changeo.com
 *
 * NOTICE OF LICENSE
 *
 * Don't use this module on several shops. The license provided by PrestaShop Addons
 * for all its modules is valid only once for a single shop.
*}

{if !$adn_payment_page}
	{capture name=path}{l s='Payment' mod='authorizedotnet'}{/capture}

	

	<h1 class="page-heading">{l s='Order summation' mod='authorizedotnet'}</h1>

	{assign var='current_step' value='payment'}
	

{/if}

<!-- ACCEPT.js -->
<script type="text/javascript" src="https://js.authorize.net/v1/Accept.js" charset="utf-8"></script> 

   
<script type="text/javascript">
    var clientKey = "{$adn_public_client_key|escape:'htmlall':'UTF-8'}";
    var apiLoginID = "{$adn_id|escape:'htmlall':'UTF-8'}";
    var adn_path_file = '{$this_path|escape:'htmlall':'UTF-8'}{$adn_filename|escape:'htmlall':'UTF-8'}.php';
    
</script>

<style>
body
{ldelim}
	overflow-x: hidden;
{rdelim}
</style>


<div class="row">
	<div class="">
		<div id="adn_payment" class="payment_module pc-eidition">

			<form name="adn_form" id="adn_form" method="post" class="std" action="{$post_url|escape:'htmlall':'UTF-8'}">
				<input type="hidden" name="confirm" value="1" />
				<h2 class="title_accept">
					{l s='Billing Information - We Accept:' mod='authorizedotnet'}
				</h2>
				<div class="accept_cards">
						{if $adn_visa}
							<img src="{$this_path_ssl|escape:'htmlall':'UTF-8'}views/img/visa_big.gif" alt="{l s='Visa' mod='authorizedotnet'}" />
						{/if}
						{if $adn_mc}
							<img src="{$this_path_ssl|escape:'htmlall':'UTF-8'}views/img/mc_big.gif" alt="{l s='Mastercard' mod='authorizedotnet'}" />
						{/if}
						{if $adn_amex}
							<img src="{$this_path_ssl|escape:'htmlall':'UTF-8'}views/img/amex_big.gif" alt="{l s='American Express' mod='authorizedotnet'}" />
						{/if}
						{if $adn_discover}
							<img src="{$this_path_ssl|escape:'htmlall':'UTF-8'}views/img/discover_big.gif" alt="{l s='Discover' mod='authorizedotnet'}" />
						{/if}
						{if $adn_jcb}
							<img src="{$this_path_ssl|escape:'htmlall':'UTF-8'}views/img/jcb.gif" alt="{l s='JCB' mod='authorizedotnet'}" />
						{/if}
						{if $adn_diners}
							<img src="{$this_path_ssl|escape:'htmlall':'UTF-8'}views/img/diners.gif" alt="{l s='Diners' mod='authorizedotnet'}" />
						{/if}
				</div>
		

				<div class="form_row half-row f-l">
					<label for="adn_cc_fname">{l s='Firstname' mod='authorizedotnet'}: </label>	
					<input type="text" name="adn_cc_fname" id="adn_cc_fname" value="{$adn_cc_fname|escape:'htmlall':'UTF-8'}" class="form-control"/> 
				</div>

				<div class="form_row half-row f-r">
					<label>{l s='Lastname' mod='authorizedotnet'}: </label>	
					<input type="text" name="adn_cc_lname" id="adn_cc_lname" value="{$adn_cc_lname|escape:'htmlall':'UTF-8'}" class="form-control"/> 
				</div>

				{if $adn_get_address == "1"}

					<div class="form_row">
						<label>{l s='Address' mod='authorizedotnet'}: </label>	
						<input type="text" id="adn_cc_address" name="adn_cc_address" value="{$adn_cc_address|escape:'htmlall':'UTF-8'}" class="form-control"/>
					</div>

					<div class="form_row half-row f-l">
						<label>{l s='City' mod='authorizedotnet'}: </label>
						<input type="text" id="adn_cc_city" name="adn_cc_city" value="{$adn_cc_city|escape:'htmlall':'UTF-8'}" class="form-control"/>
					</div>

					<div class="form_row half-row f-r">
						<label>{l s='Zipcode' mod='authorizedotnet'}: </label>	
						<input type="text" id="adn_cc_zip" name="adn_cc_zip" size="5" value="{$adn_cc_zip|escape:'htmlall':'UTF-8'}" class="form-control"/>
					</div>

					<div class="form_row half-row f-l">
						<label>{l s='Country' mod='authorizedotnet'}: </label>
						<select name="adn_id_country" id="adn_id_country" class="form-control">{$countries_list nofilter}</select> {*Cannot espace it - Countries_list is coming as HTML*}
					</div>

					<div class="form_row half-row f-r">
						<div class="adn_id_state">
							<label>{l s='State' mod='authorizedotnet'}:  </label>
							<select name="adn_id_state" id="adn_id_state" class="form-control">
								<option value="">-</option>
							</select>
						</div>
					</div>
					<div class="clear"> </div>

				{/if}
				<div class="form_row">
					<label>{l s='Card Number' mod='authorizedotnet'}: </label>
					<input type="text" name="adn_cc_number" value="{if !empty($adn_cc_number)}{$adn_cc_number|escape:'htmlall':'UTF-8'}{/if}" class="form-control"/>
				</div>

				<div class="form_row half-row f-l">
					<label>{l s='Expiration' mod='authorizedotnet'}: </label>
					<select name="adn_cc_Month" id="adn_exp_month" class="form-control">
						{foreach from=$adn_months  key=k item=v}
							<option value="{$k|escape:'htmlall':'UTF-8'}" {if !empty($cardInfo.exp_date) && $cardInfo.exp_date.1 ==$k}selected="selected"{/if}>{$v|escape:'htmlall':'UTF-8'}</option>
						{/foreach}
					</select>
				</div>

				<div class="form_row half-row f-r">
					<label>&nbsp;</label>
					<select name="adn_cc_Year" id="adn_exp_year" class="form-control">
						{foreach from=$adn_years  key=k item=v}
							<option value="{$k|escape:'htmlall':'UTF-8'}" {if !empty($cardInfo.exp_date) && $cardInfo.exp_date.0 ==$k}selected="selected"{/if}>{$v|escape:'htmlall':'UTF-8'}</option>
						{/foreach}
					</select>
				</div>

				{if $adn_get_cvm == "1"}
				<div class="form_row">
					<label>{l s='CVN code' mod='authorizedotnet'}:  </label>
					<input type="text" name="adn_cc_cvm" size="4" value="{if !empty($adn_cc_cvm)}{$adn_cc_cvm|escape:'htmlall':'UTF-8'}{/if}" class="form-control half-row" />
					<span class="form-caption">{l s='3-4 digit number from the back of your card.' mod='authorizedotnet'}</span>
				</div>
				{/if}

				
				{if !$adn_payment_page}
					<div class="pcpm-total">
						<span style="float:left">{l s='The total amount of your order is' mod='authorizedotnet'}&nbsp;</span>
						<span id="amount_{$currencies.0.id_currency|intval}" class="price">{$adn_total|escape:'htmlall':'UTF-8'}</span>
					</div>
					<div class="pcpm-confirm">
						{l s='Please confirm your order by clicking \'I confirm my order\'' mod='authorizedotnet'}.
					</div>
				{/if}
			
				<div id="adn_ajax_container" class="pcpm-ajax-container {if !empty($adn_cc_err)}error{/if}">
					{if !empty($adn_cc_err)} {$adn_cc_err|escape:'htmlall':'UTF-8'} {/if} 
				</div>
				<div class="clear"></div>
				
				<p class="cart_navigation">
					{if !$adn_payment_page}
						
								<a class="button-exclusive btn btn-default" href="{$link->getPageLink('order', true, NULL, "step=3")}" style="float:left;">
									<i class="icon-chevron-left"></i>
									{l s='Other payment methods' mod='authorizedotnet'}
								</a>			
							
						
					
	
				
				
					
						<button class="btn btn-primary center-block" type="button" id="adn_submit">
						
								{l s='I confirm my order' mod='authorizedotnet'}
						
						</button>	
                                                                
                                        {/if}
					
				 			
				</p>	
                                {if !$adn_payment_page}
                                 {include file="module:authorizedotnet/views/templates/front/conditions_to_approve.tpl"}
                                {/if}
                                 
				<div class="clear"></div>	

                                 
    
                                <input type="hidden" name="clientKey" value="{$adn_public_client_key|escape:'htmlall':'UTF-8'}" />
				<input type="hidden" name="apiLoginID" value="{$adn_id|escape:'htmlall':'UTF-8'}" />
                                <input type="hidden" id="id_cart" name="id_cart" value="{$id_cart|intval}" />
				
				
				
				</form>
			</div>
		</div>

		<script type="text/javascript">
			//<![CDATA[
			if (typeof pc_payment_module == 'undefined') {
                            pc_payment_module = [];
                            pc_payment_module.push('{$pc_payment_module_adn}');
                        }else if (pc_payment_module instanceof Array) {
                            pc_payment_module.push('{$pc_payment_module_adn}');
                        }
                         
			adn_idSelectedCountry = {if isset($address->id_state)}{$address->id_state|intval}{else}false{/if};
			adn_countries = new Array();
			adn_countriesNeedIDNumber = new Array();
			adn_countriesIdToName = new Array()
			{foreach from=$countries item='country'}
				adn_countriesIdToName[{$country.id_country|intval}] = '{$country.iso_code|escape:'htmlall':'UTF-8'}';
				{if isset($country.states) && $country.contains_states}
					adn_countries[{$country.id_country|intval}] = new Array();
					{foreach from=$country.states item='state' name='states'}
						adn_countries[{$country.id_country|intval}].push({ldelim}'id' : '{$state.iso_code|escape:'htmlall':'UTF-8'}', 'name' : '{$state.name|escape:'htmlall':'UTF-8'}'{rdelim});
					{/foreach}
				{/if}
			{/foreach}
			
			 var err_fname = "{l s='You must enter your' mod='authorizedotnet'} {l s='First Name' mod='authorizedotnet'}";
                        var err_lname = "{l s='You must enter your' mod='authorizedotnet'} {l s='Last Name' mod='authorizedotnet'}";
                        var err_address = "{l s='You must enter your' mod='authorizedotnet'} {l s='Address' mod='authorizedotnet'}";
                        var err_city = "{l s='You must enter your' mod='authorizedotnet'} {l s='City' mod='authorizedotnet'}";
                        var err_zip = "{l s='You must enter your' mod='authorizedotnet'} {l s='Zipcode' mod='authorizedotnet'}";
                        var err_number = "{l s='You must enter a valid' mod='authorizedotnet'} {l s='Card Number' mod='authorizedotnet'}";
                                            // 'err_email'   :"{l s='You must enter your' mod='authorizedotnet'} {l s='Email' mod='authorizedotnet'}",
                        var err_card_num = "{l s='You must enter a valid' mod='authorizedotnet'} {l s='Card Number' mod='authorizedotnet'}";
                        var err_cvm = "{l s='You must enter your' mod='authorizedotnet'} {l s='CVM code' mod='authorizedotnet'}";
                        
    var err_terms = "{l s='Please approve terms and conditions to make the purchase.' mod='authorizedotnet'}";
                        
    var trl_wait = "{l s='Please Wait ...' mod='authorizedotnet'}";
    var adn_order_btn_txt = "{l s='I confirm my order' mod='authorizedotnet'}";
                        var adn_payment_page = false;
                        var adn_path_file = {if !empty($adn_filename)} 
					'{$this_path|escape:'htmlall':'UTF-8'}{$adn_filename|escape:'htmlall':'UTF-8'}.php'
				{else}
					''
				{/if};

                        var id_state = {if isset($id_state)}{$id_state|intval}{else}{$address->id_state|escape:'htmlall':'UTF-8'}{/if};

                        var adn_dpn = true;
			
			//]]>
		</script>
</div>