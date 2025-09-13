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
<script type="text/javascript">
    var baseDir = '{$module_dir}/';
    var id_lang = '{$id_lang|intval}';
    var id_employee = '{$id_employee|intval}';
    var adn_secure_key = '{$adn_secure_key|escape:'htmlall':'UTF-8'}';
</script>



<div class="panel po_main_content" id="basic_settings">
    <form action="{$request_uri}" method="post">
        <div class="panel_header">
            <div class="panel_title">{l s='Basic Settings' mod='authorizedotnet'}</div>
            <div class="panel_info_text">
                <span class="simple_alert"> </span>
                {l s='You must click on Update for a change to take effect' mod='authorizedotnet'}
            </div>
            <div class="clear"></div>
        </div>
        <div class="two_columns">
            <div class="columns">
                <div class="left_column">
                    {l s='API Login ID' mod='authorizedotnet'}
                </div>
                <div class="right_column">
                    <input type="text" style="width:200px;" id="adn_id" name="adn_id" value="{$adn_id|escape:'htmlall':'UTF-8'}" />
                </div>
            </div>
            <div class="columns">
                <div class="left_column">
                    {l s='Transaction Key' mod='authorizedotnet'}
                </div>
                <div class="right_column">
                    <input type="text" style="width:200px;" id="adn_key" name="adn_key" value="{$adn_key|escape:'htmlall':'UTF-8'}" />
                </div>
            </div>
            <div class="columns">
                <div class="left_column">
                    {l s='Mode' mod='authorizedotnet'}
                </div>
                <div class="right_column">
                    <input type="radio" style="margin:-5px 0 0 0;padding:0;border:none" name="adn_demo_mode" value="0" style="vertical-align: middle;" {if $adn_demo_mode == 0 || $adn_api == 'dpm'} checked="checked"{/if} />
                    <span style="color: {if $adn_demo_mode == 0} #080 {else} purple{/if}">{l s='Production (Live Mode)' mod='authorizedotnet'}</span>&nbsp;&nbsp;&nbsp;
                    <br/><br/>
                    <input {if $adn_api == 'dpm'}disabled="disabled"{/if} type="radio" style="margin:-5px 0 0 0;paddin:0;border:none" name="adn_demo_mode" value="1" style="vertical-align: middle;" {if $adn_demo_mode == 1} {if $adn_api == 'aim'}checked="checked"{/if}{/if} />
                    <span style="{if $adn_api == 'dpm'}opacity:0.5;{/if}color: {if $adn_demo_mode == 1} red {else} purple{/if}">{l s='Production (Test Mode)' mod='authorizedotnet'}</span>&nbsp;&nbsp;&nbsp;
                    {*
					<input type="radio" style="margin:-5px 0 0 0;paddin:0;border:none" name="adn_demo_mode" value="2" style="vertical-align: middle;" {if $adn_demo_mode == 2} checked="checked"{/if} />
                    <span style="color: {if $adn_demo_mode == 2} red {else} purple{/if}">{l s='Test Account (Test Mode)' mod='authorizedotnet'}</span>
					*}
                </div>
            </div>
            <div class="columns">
                <div class="left_column">
                    {l s='API Method' mod='authorizedotnet'}
                </div>
                <div class="right_column">
                     <input type="radio" style="margin:-5px 0 0 0;paddin:0;border:none" name="adn_api" id="adn_api" onchange="changeAPI();" value="dpm" {if $adn_api != 'aim'}checked{/if} />&nbsp; Accept.js (Formaly DPM)
                     <a class="info_alert" href="#dpm_info"></a>
                    <div id="dpm_info" class="hideADN info_popup">
                        <div class="panel">
                            <h3>
                                {l s='DPM Information' mod='authorizedotnet'}
                                <span class="info_icon"> </span>
                            </h3>
                            <div class="upgrade_check_content">
                                {l s='DPM option is not available with Production (Test Mode)' mod='authorizedotnet'}
                                <br/><br/>
                                <li>{l s='DPM can be tested by logging to your Authorize.net account and setting it to test mode.' mod='authorizedotnet'}</li>
                                <br/>
                                
                               
                            </div>
                        </div>
                    </div>
                                
                    <br/><br/>
                    <input type="radio" style="margin:-5px 0 0 0;paddin:0;border:none" name="adn_api" id="adn_api" onchange="changeAPI();" value="aim" {if $adn_api == 'aim'}checked{/if} />&nbsp; AIM
                   <br/><br/>
                    {l s='MD5 Hash' mod='authorizedotnet'}: <input type="text" style="width:200px;display:inline;" id="adn_md_hash" name="adn_md_hash" value="{$adn_md_hash|escape:'htmlall':'UTF-8'}" />
                    <br/><br/>
                    {l s='Only if entered it on the Authorize.net site, otherwise leave blank!' mod='authorizedotnet'}
                    <br />
                    <b>{l s='More information about each API can be found at' mod='authorizedotnet'} <a href="https://developer.authorize.net/api/compare/" target="_index">https://developer.authorize.net/api/compare/</a></b>

                </div>
            </div>  
                    
             <div class="columns">
                <div class="left_column">
                    {l s='Public Client Key' mod='authorizedotnet'}
                </div>
                <div class="right_column">
                    <input type="text" style="width:200px;" id="adn_public_client_key" name="adn_public_client_key" value="{$adn_public_client_key|escape:'htmlall':'UTF-8'}" />
                </div>
            </div>        
            <div class="columns">
                <div class="left_column">
                    {l s='Payment page' mod='authorizedotnet'}
                </div>
                <div class="right_column">
                       <input type="radio" style="margin:-5px 0 0 0;paddin:0;border:none" name="adn_payment_page" id="adn_payment_page" value="0" {if $adn_payment_page == 0}checked{/if}/>
                        &nbsp; {l s='New page' mod='authorizedotnet'} &nbsp;&nbsp;&nbsp;
                        <br/><br/>
                        <input type="radio" style="margin:-5px 0 0 0;paddin:0;border:none" name="adn_payment_page" id="adn_payment_page" value="1" {if $adn_payment_page == 1}checked{/if}/>
                        &nbsp; {l s='Embedded in Checkout' mod='authorizedotnet'}  &nbsp;&nbsp;&nbsp;
                </div>
            </div>   
            <div class="columns adn_cim_enable" {if $adn_api != 'aim'} style="display:none;" {/if} >
                <div class="left_column">
                    {l s='CIM' mod='authorizedotnet'} 
                    
                    <a class="info_alert" href="#cim_info"></a>
                    <div id="cim_info" class="hideADN info_popup">
                        <div class="panel">
                            <h3>
                                {l s='Customer Information Manager' mod='authorizedotnet'}
                                <span class="info_icon"> </span>
                            </h3>
                            <div class="upgrade_check_content">
                                {l s='By providing quick access to stored customer information, Customer Information Manager (CIM) is ideal for businesses that:' mod='authorizedotnet'}
                                <br/><br/>
                                <li>{l s='Process recurring transactions in which the date or amount or both are different each month; for example, utility companies.' mod='authorizedotnet'}</li>
                                <br/>
                                <li>{l s='Process usage charges that you bill only when the service is used; for example, pay-as-you-go cell phones.' mod='authorizedotnet'}</li>
                                <br/>
                                <li>{l s='Are concerned with PCI compliance.' mod='authorizedotnet'}</li>
                                <br/>
                                <li>{l s='Want to provide returning customers with the convenience of not having to re-enter personal data.' mod='authorizedotnet'}</li>
                                <br/>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right_column">
                    <input type="radio" style="margin:-5px 0 0 0;paddin:0;border:none" name="adn_cim" id="adn_cim" value="0" {if $adn_cim == 0}checked{/if} onchange="changeCIM();" />
                    &nbsp; {l s='Disable' mod='authorizedotnet'} &nbsp;&nbsp;&nbsp;
                    <br/><br/>
                    <input type="radio" style="margin:-5px 0 0 0;paddin:0;border:none" name="adn_cim" id="adn_cim" value="1" {if $adn_cim == 1}checked{/if} onchange="changeCIM();" />
                    &nbsp; {l s='Enable' mod='authorizedotnet'}  &nbsp;&nbsp;&nbsp; 
                    <br/><br/>
                    
                </div>
            </div>     
            <div class="columns">
                <div class="left_column">
                    {l s='Transaction Type' mod='authorizedotnet'}
                    
                </div>
                <div class="right_column">
                    <select style="width: 200px;display:inline;" id="adn_type" name="adn_type" onchange="javascript:type_change()">
                    <option value="AUTH_CAPTURE" {if $adn_type == 'AUTH_CAPTURE'} selected {/if}>{l s='Authorize and Capture' mod='authorizedotnet'}</option>
                    <option value="AUTH_ONLY" {if $adn_type == 'AUTH_ONLY'} selected{/if}>{l s='Authorize Only' mod='authorizedotnet'}</option>
                    </select>
                    
                </div>
            </div>   
            <div id="cap_stat" class="columns" style="{if $adn_type != 'AUTH_ONLY'} display:none;{/if}">
                <div class="left_column">
                    {l s='Authorize Order Status' mod='authorizedotnet'}
                    <a class="info_alert" href="#authorize_status_info"></a>
                    <div id="authorize_status_info" class="hideADN info_popup">
                        <div class="panel">
                            <h3>
                                {l s='Authorize Order Status' mod='authorizedotnet'}
                                <span class="info_icon"> </span>
                            </h3>
                            <div class="upgrade_check_content">
                                <li>{l s='You can create a new Order Status to use for Authorization only in Orders->Statuses' mod='authorizedotnet'}</li>
                                <br/><br/>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right_column">
                    <select name="adn_auth_status" id="adn_auth_status" style="width:200px;display:inline">
                    
                    {foreach from=$states key=k item=state}
                        <option value="{$state['id_order_state']|intval}" {if $adn_auth_status == $state['id_order_state']} selected="selected"{/if}>{$state['name']|escape:'htmlall':'UTF-8'}</option>
                    {/foreach}
                    </select>
                    <br/><br/>
                </div>
            </div>   
            <div class="columns adn_ac_status" style="display:none;">
                <div class="left_column">
                    {l s='Auto Capture' mod='authorizedotnet'}
                </div>
                <div class="right_column">
                    <select name="adn_ac_status" id="adn_ac_status" style="width:200px;display:inline">';
                    <option value="0">{l s='Not selected' mod='authorizedotnet'}</option>
                    {foreach from=$states key=k item=state}
                        <option value="{$state['id_order_state']|intval}" {if $adn_ac_status == $state['id_order_state']} selected="selected"{/if}>{$state['name']|escape:'htmlall':'UTF-8'}</option>
                    {/foreach}
                    </select>
                    
                </div>
            </div>  
            <div class="columns">
                <div class="left_column">
                    {l s='Customer Email' mod='authorizedotnet'}
                     <a class="info_alert" href="#customer_email_info"></a>
                    <div id="customer_email_info" class="hideADN info_popup">
                        <div class="panel">
                            <h3>
                                {l s='Customer Email' mod='authorizedotnet'}
                                <span class="info_icon"> </span>
                            </h3>
                            <div class="upgrade_check_content">
                                <li>{l s='Authorize.net will email the customer a receipt (Required for UK)' mod='authorizedotnet'}.</li>
                                <br/><br/>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right_column">
                    <select style="width: 200px;display:inline;" id="adn_customer_email" name="adn_customer_email">
                            <option value="1" {if $adn_customer_email == 1}selected{/if}>{l s='Do not send to Authorize.net' mod='authorizedotnet'}</option>
                            <option value="2" {if $adn_customer_email == 2}selected{/if}>{l s='Send to Authorize.net' mod='authorizedotnet'}</option>
                    </select>                    
                </div>
            </div>  
            <div class="columns">
                <div class="left_column">
                    {l s='Failed Transaction' mod='authorizedotnet'}
                </div>
                <div class="right_column">
                    <input type="checkbox" value="1" id="adn_ft" name="adn_ft" {if $adn_ft == 1}checked{/if} onchange="update_ft()"/> 
                    <span style="line-height:20px;">{l s='Send an email to' mod='authorizedotnet'}</span>
                    <br/><br/>
                    <input type="text" id="adn_ft_email" style="width:200px;display:inline;" name="adn_ft_email" value="{$adn_ft_email|escape:'htmlall':'UTF-8'}" /> 
                    <span style="line-height:20px;">{l s='whenever a transaction fails' mod='authorizedotnet'}</span>

                </div>
            </div>   
            <div class="columns">
                <div class="left_column">
                    {l s='Currency' mod='authorizedotnet'}
                </div>
                <div class="right_column">
                    {l s='Shop Default' mod='authorizedotnet'} <input type="radio" id="adn_currency" onclick="$('#user_cur').fadeOut(1000);$('#def_cur').fadeIn(1000);" name="adn_currency" value="1" {if $adn_currency == 1}checked{/if}/>&nbsp;
                    <br/><br/>
                    {l s='User Selected' mod='authorizedotnet'} <input type="radio" onclick="$('#user_cur').fadeIn(1000);$('#def_cur').fadeOut(1000);" id="adn_currency" name="adn_currency" value="0" {if $adn_currency == 0}checked{/if}/>&nbsp;
                    <br/><br/>
                    <b id="user_cur" style="color:purple;display: {if $adn_currency != 1}block{else}none{/if}">{l s='You must have all the currencies from prestashop available in Authorize.net' mod='authorizedotnet'}.</b>
                         
                </div>
            </div>
            <div class="columns">
                <div class="left_column">
                    {l s='Accepted Cards' mod='authorizedotnet'}
                </div>
                <div class="right_column">
                    <input type="checkbox" value="1" id="adn_visa" name="adn_visa" {if $adn_visa == 1}checked{/if}/>
                    <img src="{$path|escape:'htmlall':'UTF-8'}views/img/visa.gif" />
                    &nbsp;&nbsp;
                    <input type="checkbox" value="1" id="adn_mc" name="adn_mc" {if $adn_mc == 1}checked{/if}/>
                    <img src="{$path|escape:'htmlall':'UTF-8'}views/img/mc.gif" />
                    &nbsp;&nbsp;
                    <input type="checkbox" value="1" id="adn_amex" name="adn_amex" {if $adn_amex == 1}checked{/if}/>
                    <img src="{$path|escape:'htmlall':'UTF-8'}views/img/amex.gif" />
                    <br/><br/>
                    <input type="checkbox" value="1" id="adn_discover" name="adn_discover" {if $adn_discover == 1}checked{/if}/>
                    <img src="{$path|escape:'htmlall':'UTF-8'}views/img/discover.gif" />
                    &nbsp;&nbsp;
                    <input type="checkbox" value="1" id="adn_diners" name="adn_diners" {if $adn_diners == 1}checked{/if}/>
                    <img src="{$path|escape:'htmlall':'UTF-8'}views/img/diners.gif" />
                    &nbsp;&nbsp;
                    <input type="checkbox" value="1" id="adn_jcb" name="adn_jcb" {if $adn_jcb == 1}checked{/if}/>
                    <img src="{$path|escape:'htmlall':'UTF-8'}views/img/jcb.gif" />
                    <br/><br/>
                    <input type="checkbox" value="1" id="adn_enroute" name="adn_enroute" {if $adn_enroute == 1}checked{/if}/>
                    Enroute
                    &nbsp;&nbsp;
                </div>
            </div> 
            <div class="columns">
                <div class="left_column">
                    {l s='Currency Conversion' mod='authorizedotnet'}
                </div>
                <div class="right_column">
                    <input type="checkbox" value="1" id="adn_update_currency" name="adn_update_currency" {if $adn_update_currency == 1}checked{/if}/>&nbsp;
                    {l s='Currency rate will be updated before every transaction using Prestashop\'s built in tool' mod='authorizedotnet'}.
                </div>
            </div> 
            <div class="columns">
                <div class="left_column">
                    {l s='Require Address' mod='authorizedotnet'}
                </div>
                <div class="right_column">
                    <input type="checkbox" value="1" id="adn_get_address" name="adn_get_address" {if $adn_get_address == 1}checked{/if}/>&nbsp;
                    {l s='User must enter an address (Their billing info will be entered by default)' mod='authorizedotnet'}
                </div>
            </div> 
            <div class="columns">
                <div class="left_column">
                    {l s='Require CVN' mod='authorizedotnet'}
                </div>
                <div class="right_column">
                     <input type="checkbox" value="1" id="adn_get_cvm" name="adn_get_cvm" {if $adn_get_cvm == 1}checked{/if}/>&nbsp;
                    {l s='User must enter the 3-4 digit code from the back of the card.' mod='authorizedotnet'}
                </div>
            </div>
            {*<div class="columns">
                <div class="left_column">
                    {l s='Show Left Sidebar Column ' mod='authorizedotnet'}
                </div>
                <div class="right_column">
                     <input type="checkbox" value="1" id="adn_show_left" name="adn_show_left" {if $adn_show_left == 1}checked{/if}/>&nbsp;
                    {l s='Check if you want to see the left sidebar column in the checkout page.' mod='authorizedotnet'}
                </div>
            </div> *}
            <div class="columns">
                <div class="left_column">
                     <input type="submit" value="{l s='Update' mod='authorizedotnet'}" name="submitChanges" class="submit_button" />
                </div>
                <div class="right_column">
                    
                </div>
            </div>
                
                
        </div>
        
        <div class="clear"></div>
    </form>
</div>