{**
* NOTICE OF LICENSE
*
* This source file is subject to the Open Software License (OSL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
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
* @author INVERTUS UAB www.invertus.eu  <support@invertus.eu>
* @copyright CardinalCommerce
* @license   Addons PrestaShop license limitation
*}

<div class="panel">
    <div class="panel-heading">
        <i class="icon-money"></i>
        {l s='CARDINALCOMMERCE 3DS/GATEWAY' mod='cardinalcommerce'}
    </div>
    <div class="well">
        <h3>{l s='Order Information' mod='cardinalcommerce'}</h3>
        <p>{l s='PrestaShop Order ID' mod='cardinalcommerce'}: {$cc_centinel_order->id_order|escape:'htmlall':'UTF-8'}</p>
        <p>{l s='Processor Order Number' mod='cardinalcommerce'}: {$cc_centinel_order->processor_order_number|escape:'htmlall':'UTF-8'}</p>
        <br>
        <p>{l s='Authorization Status' mod='cardinalcommerce'}: {$cc_centinel_order->authorization_status|escape:'htmlall':'UTF-8'}</p>
        <p>{l s='Authorization Code' mod='cardinalcommerce'}: {$cc_centinel_order->authorization_code|escape:'htmlall':'UTF-8'}</p>
        <p>{l s='AVS Result' mod='cardinalcommerce'}: {$cc_centinel_order->avs_result|escape:'htmlall':'UTF-8'}</p>
        <p>{l s='Card Code Result' mod='cardinalcommerce'}: {$cc_centinel_order->card_code_result|escape:'htmlall':'UTF-8'}</p>
        <br>
        <p>{l s='Capture Status' mod='cardinalcommerce'}: {$cc_centinel_order->capture_status|escape:'htmlall':'UTF-8'}</p>
        <p>{l s='Void Status' mod='cardinalcommerce'}: {$cc_centinel_order->void_status|escape:'htmlall':'UTF-8'}</p>
        <p>{l s='Refund Status' mod='cardinalcommerce'}: {$cc_centinel_order->refund_status|escape:'htmlall':'UTF-8'}</p>
        <br>
        <p>{l s='Action Code' mod='cardinalcommerce'}: {$cc_centinel_order->action_code|escape:'htmlall':'UTF-8'}</p>
    </div>

    <div class="well">
        <h3>{l s='Available actions' mod='cardinalcommerce'}</h3>
        {if !empty($cc_actions)}
            <form action="{$cc_order_action_url|escape:'htmlall':'UTF-8'}" method="post">
                <input type="hidden" name="id_order" value="{$cc_centinel_order->id_order|escape:'htmlall':'UTF-8'}">

                {if $cc_is_refund_applicable}
                    <p>{l s='Reason for refund' mod='cardinalcommerce'} ({l s='Optional' mod='cardinalcommerce'}):</p>
                    <textarea name="refund_message" class="textarea-autosize"></textarea>
                    <br>
                {/if}

                <div class="row">
                    <div class="col-xs-12 text-left">

                        {foreach from=$cc_actions item=cc_action}
                            <button
                                    class="btn btn-primary js-cc-confirmation"
                                    type="submit"
                                    name="{$cc_action.id|escape:'htmlall':'UTF-8'}"
                                    data-confirmation-message="{$cc_action.confirmation|escape:'htmlall':'UTF-8'}"
                            >
                                {$cc_action.name|escape:'htmlall':'UTF-8'}
                            </button>
                        {/foreach}

                    </div>
                </div>
            </form>
        {else}
            <p><strong>{l s='No actions are available.' mod='cardinalcommerce'}</strong></p>
        {/if}
    </div>
</div>
