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

<div class="panel po_main_content" id="capture_transaction" {if $adn_type != 'AUTH_ONLY'}style="display:none;"{/if}>
    
    <div class="panel_header">
        <div class="panel_title">{l s='Capture Transaction' mod='authorizedotnet'}</div>
        <div class="panel_info_text">
            <span class="simple_alert"> </span>
            {l s='You must click on Update for a change to take effect' mod='authorizedotnet'}
        </div>
        <div class="clear"></div>
    </div>
     <div class="two_columns">
        <div class="columns">
            <div class="left_column">
                {l s='Order ID' mod='authorizedotnet'}
            </div>
            <div class="right_column">
                <input type="text" size="12" id="capture_order_id" name="capture_order_id" />
                <br/>
                <input type="button" value="{l s='Lookup Order' mod='authorizedotnet'}" name="searchCaptureOrders" class="submit_button" onclick="search_orders(1)"/>
                <input type="button" value="{l s='Reset' mod='authorizedotnet'}" name="resetCaptureOrders" class="submit_button" onclick="clear_orders(1)"/>
            </div>
        </div>
        <div id="capture_order_details">
        </div>
        <div class="clear"></div>
     </div>
    <div class="clear"></div>
</div>