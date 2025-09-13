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


{include file="module:authorizedotnet/views/templates/front/aim_embedded_form.tpl"}
    
<script type="text/javascript">
    var adn_payment_page = {$adn_payment_page|escape:'htmlall':'UTF-8'};    
    var adn_order_btn_txt = "{l s='I confirm my order' mod='authorizedotnet'}";
</script>
        

{/block}

