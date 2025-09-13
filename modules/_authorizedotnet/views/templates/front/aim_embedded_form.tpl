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

<script type="text/javascript">
    {if $adn_cim == 1}
        {if !empty($adn_list_cards)}
    var adn_cards = {
                {foreach from=$adn_list_cards key=k item=v}
    "{$v.customer_payment_profile_id|intval}" :
    {
    "card_type":"{$v.card_type|escape:'htmlall':'UTF-8'}",
            "last4digit":"************{$v.last4digit|substr:4:4|escape:'htmlall':'UTF-8'}",
            "exp_date":"{$v.exp_date|escape:'htmlall':'UTF-8'}",
            "title":"{$v.title|escape:'htmlall':'UTF-8'}"
    },
            {/foreach}
    };
        {/if}
    {/if}
    

</script>


<div class="row">
    <div class="">
       
        <div id="adn_payment" class="payment_module pc-eidition presto-payment">



            <form name="adn_form" action="{$action}" id="adn_form" method="post" class="std">
                <input type="hidden" name="confirm" value="1" />
                
               
                {if $adn_cim == 1}		
                    {if !empty($adn_list_cards)} 
                        <p class="required label_width_field">
                            <label>{l s='Saved Cards:' mod='authorizedotnet'}</label>
                            <select name="adn_exist_card" id="adn_exist_card" class="selectBox h32 w80" onchange="changeAdnExistCard();">
                                <option value="0" selected>{l s='Please select card' mod='authorizedotnet'}</option>
                                {foreach from=$adn_list_cards key=k item=v}
                                    <option value="{$v.customer_payment_profile_id|intval}" >{if !empty($v.title)}{$v.title|escape:'htmlall':'UTF-8'} {/if}{$v.card_type|escape:'htmlall':'UTF-8'} xxxx{$v.last4digit|substr:4:4|escape:'htmlall':'UTF-8'}</option>
                                {/foreach}
                            </select>
                        </p>
                    {/if}
                    {if !empty($adn_list_cards)}

                        <div class="title_card form_row">{l s='Or use a new credit or debit card:' mod='authorizedotnet'}</div>
                    {/if}
                {/if}

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
                        <input type="text" name="adn_cc_address" value="{$adn_cc_address|escape:'htmlall':'UTF-8'}" class="form-control"/>
                    </div>

                    <div class="form_row half-row f-l">
                        <label>{l s='City' mod='authorizedotnet'}: </label>
                        <input type="text" name="adn_cc_city" value="{$adn_cc_city|escape:'htmlall':'UTF-8'}" class="form-control"/>
                    </div>

                    <div class="form_row half-row f-r">
                        <label>{l s='Zipcode' mod='authorizedotnet'}: </label>	
                        <input type="text" name="adn_cc_zip" size="5" value="{$adn_cc_zip|escape:'htmlall':'UTF-8'}" class="form-control"/>
                    </div>

                    <div class="form_row half-row f-l">
                        <label>{l s='Country' mod='authorizedotnet'}: </label>
                        <select name="adn_id_country" id="adn_id_country" class="form-control">{$countries_list nofilter}</select>{*cannot be escaped - HTML returned*}
                    </div>

                    <div class="form_row half-row f-r">
                        <div class="adn_id_state">
                            <label>{l s='State' mod='authorizedotnet'}:  </label>
                            <select name="adn_id_state" id="adn_id_state" class="form-control">
                                <option value="">-</option>
                            </select>
                        </div>
                    </div>
                    <div class="clear"></div>

                {/if}
                <div class="form_row">
                    <label>{l s='Card Number' mod='authorizedotnet'}: </label>
                    <input type="text" name="adn_cc_number" value="{$adn_cc_number|escape:'htmlall':'UTF-8'}" class="form-control"/>
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
                        <input type="text" name="adn_cc_cvm" size="4" value="{$adn_cc_cvm|escape:'htmlall':'UTF-8'}" class="form-control half-row" />
                        <span class="form-caption">{l s='3-4 digit number from the back of your card.' mod='authorizedotnet'}</span>
                    </div>
                {/if}

                {if $adn_cim == 1}	
                    <div class="form_row">
                        <p class="required full_width_field checkbox em1">
                            <input type="checkbox" name="adn_save_card" id="adn_save_card" size="4" value="1" onclick="adnSaveCard();" /> 
                            <label for="adn_save_card" class="label_adn_save_card">{l s='Save this card for future purchases' mod='authorizedotnet'}</label>
                        </p>
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


                        <a class="button-exclusive btn btn-default" href="{$link->getPageLink('order', true, NULL, "step=3")|escape:'htmlall':'UTF-8'}" style="float:left;">
                            <i class="icon-chevron-left"></i>
                            {l s='Other payment methods' mod='authorizedotnet'}
                        </a>			


                    



					
						<button class="btn btn-primary center-block" type="button" id="adn_submit">

								{l s='I confirm my order' mod='authorizedotnet'}

						</button>	

					 
                    {/if}
                </p>	
          
                
                
                
                {* CONDITION TO APPROVE FOR NON-MINIFIED VERSION *}

                {if !$adn_payment_page}
                     {include file="module:authorizedotnet/views/templates/front/conditions_to_approve.tpl"}
                {/if}
                
                
                <div class="clear"></div>				







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

        adn_idSelectedCountry = {if isset($id_state)}{$id_state|intval}{elseif isset($address->id_state)}{$address->id_state|intval}{else}false{/if};
        adn_countries = new Array();
        adn_countriesNeedIDNumber = new Array();
        {foreach from=$countries item='country'}
                {if isset($country.states) && $country.contains_states}
                        adn_countries[{$country.id_country|intval}] = new Array();
                    {foreach from=$country.states item='state' name='states'}
                        adn_countries[{$country.id_country|intval}].push({ldelim}'id' : '{$state.id_state|intval}', 'name' : '{$state.name|escape:'htmlall':'UTF-8'}'{rdelim});
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
        var adn_path_file = '{$this_path|escape:'htmlall':'UTF-8'}{$adn_filename|escape:'htmlall':'UTF-8'}.php';
    
        var id_state = {if isset($id_state)}{$id_state|intval}{else}{$address->id_state|escape:'htmlall':'UTF-8'}{/if};
         var adn_dpn = false;
         
         var adn_order_btn_txt = "{l s='I confirm my order' mod='authorizedotnet'}";
    //]]>
    </script>
</div>