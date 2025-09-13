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



{extends file='page.tpl'}

{block name="page_content"}
    
<script type="text/javascript">
    var base_ajax_url = "{$linkADN|escape:'htmlall':'UTF-8'}";

</script>

{capture name=path}{l s='Payment Information' mod='authorizedotnet'}{/capture}


<h1>{l s='Payment Information' mod='authorizedotnet'}</h1>
{if isset($account_created)}
    <p class="success">
        {l s='Your account has been created.' mod='authorizedotnet'}
    </p>
{/if}


<div id="cards_container_id">


    <div class="right_block">

        <input type="button" value="{l s='Add new payment method' mod='authorizedotnet'}" onclick="getCardForm(0)" class="add_new_card card_button">

        <div style="display:none;" id="card_form_error_id" class="error"> </div>		

        <div id="cim_edit_id"> </div>

        <div id="cards_list_id" class="cards_list">
            {$htmlCardsList nofilter} {* HTML SENT - requires nofilter*}
        </div>
        <div id="card-loader"></div>
    </div>

</div>

{/block}