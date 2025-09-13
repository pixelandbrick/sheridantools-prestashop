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
<div class="card_form" id="card_form_id" >
    <h3>{if $id > 0}{l s='Edit payment method' mod='authorizedotnet'}{else}{l s='New payment method' mod='authorizedotnet'}{/if} </h3>
    <div style="padding:0 0 15px 0">
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

    <form id="cim_card_form_id">
        <p>
            <label>{l s='Payment Method Name' mod='authorizedotnet'}</label>
            <input type="text" name="card_description" id="card_description_id" value="{if !empty($cardInfo.title)}{$cardInfo.title|escape:'htmlall':'UTF-8'}{/if}">
        </p>
        <p>
            <label>{l s='Card Number' mod='authorizedotnet'}</label>
            <input type="text" name="card_number" id="card_number_id" value="{if !empty($cardInfo.last4digit)}{$cardInfo.last4digit|escape:'htmlall':'UTF-8'}{/if}">
        </p>
        <p>
            <label>{l s='Expiration Date' mod='authorizedotnet'}</label>

            <select name="card_exp_month" id="card_exp_month_id" class="h32 card no_margin">
                {foreach from=$months  key=k item=v}
                    <option value="{$k|escape:'htmlall':'UTF-8'}" {if !empty($cardInfo.exp_date) && $cardInfo.exp_date.1 ==$k}selected="selected"{/if}>{$v|escape:'htmlall':'UTF-8'}</option>
                {/foreach}
            </select>

            <select name="card_exp_year" id="card_exp_year_id" class="h32 card">
                {foreach from=$years  key=k item=v}
                    <option value="{$k|escape:'htmlall':'UTF-8'}" {if !empty($cardInfo.exp_date) && $cardInfo.exp_date.0 ==$k}selected="selected"{/if}>{$v|escape:'htmlall':'UTF-8'}</option>
                {/foreach}
            </select>
        </p>
        <p>	
            <label>{l s='First / Last Name' mod='authorizedotnet'}</label>
            <input type="text" name="card_name" id="card_name" value="{if (!empty($cardInfo.bill_firstname))}{$cardInfo.bill_firstname|escape:'htmlall':'UTF-8'} {$cardInfo.bill_lastname|escape:'htmlall':'UTF-8'}{/if}">
        </p>
        <p>
            <label>{l s='Select address' mod='authorizedotnet'}</label>
            <select name="card_address" id="card_address_id" class="h32 card_address">
                <option value="0"></option>
                {foreach from=$addresses  key=k item=v}
                    <option value="{$v.id_address|intval}" {if !empty($cardInfo.id_address) && $cardInfo.id_address == $v.id_address}selected="selected"{/if}>{$v.alias|escape:'htmlall':'UTF-8'} - {$v.city|escape:'htmlall':'UTF-8'}, {$v.postcode|escape:'htmlall':'UTF-8'}, {$v.address1|escape:'htmlall':'UTF-8'}</option>
                {/foreach}
            </select>		
        </p>
        <p>	
            <input type="button" name="card_save"   value="{l s='SAVE' mod='authorizedotnet'}"   id="card_save"  class="card_button"  onclick="saveCardForm({$id|intval});">
            <input type="button" name="card_cancel" value="{l s='CANCEL' mod='authorizedotnet'}" id="card_cancel" class="card_button" onclick="hideCardForm({$id|intval});">
        </p>		
    </form>
</div>