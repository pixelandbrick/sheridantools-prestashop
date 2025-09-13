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
 {block name="content"}
  <section>

<script type="text/javascript" src="https://js.authorize.net/v1/Accept.js" charset="utf-8"></script>
<div class="row">
	<div class="">
		{if $adn_payment_page == 0}
			<p class="payment_module presto-payment" id="adn_container">
				<a href="{if $active}{$this_validation_link|escape:'htmlall':'UTF-8'}{else}javascript:alert('{l s='The Merchant has not configures this payment method yet, Order will not be valid' mod='authorizedotnet'}');location.href='{$this_path_ssl|escape:'htmlall':'UTF-8'}validation.php'{/if}" title="{l s='Pay with' mod='authorizedotnet'} {$adn_cards|escape:'htmlall':'UTF-8'}">
					<img src="{$this_path|escape:'htmlall':'UTF-8'}views/img/combo.jpg" alt="{$adn_cards|escape:'htmlall':'UTF-8'}" />
					{l s='Pay with' mod='authorizedotnet'} {$adn_cards|escape:'htmlall':'UTF-8'}
					<br style="clear:both;" />
				</a>
			</p>
		{else}
                    
			<p class="payment_module presto-payment" id="adn_payment">
				<iframe src='{$this_validation_link|escape:'htmlall':'UTF-8'}?content_only=1' seamless border="0" style = "border:0; overflow-x: hidden;"
					class="pc-iframe-dpn{if $adn_get_address} get_address{/if}{if $adn_get_cvm} adn_get_cvm{/if} " width="100%" name="pc-iframe-dpn" id="pc-iframe-dpn"></iframe>
			
		
				
			</p>
		{/if}
    </div>
</div>
<script type="text/javascript">
			//<![CDATA[
                                                    
                        
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
                
     </section>
{/block}