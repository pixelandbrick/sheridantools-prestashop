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

{extends file='checkout/checkout.tpl'}

{block name='content'}
    <section id="content">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                {l s='Credit Card' mod='cardinalcommerce'}
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="col-xs-12">
                                            <label class="form-control-label required">
                                                {l s='Card number*' mod='cardinalcommerce'}
                                            </label>
                                        </div>
                                        <div class="col-md-10">
                                            <input class="form-control"
                                                   id="cc-card-number"
                                                   name="card_number"
                                                   type="text"
                                                   maxlength="16"
                                                   required
                                            >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="col-md-12">
                                            <label class="form-control-label required">
                                                {l s='Expiration date' mod='cardinalcommerce'}
                                            </label>
                                        </div>
                                        <div class="col-xs-6">
                                            <input class="form-control"
                                                   id="cc-expiry-month"
                                                   name="expiry_month"
                                                   type="text"
                                                   placeholder="{l s='MM' mod='cardinalcommerce'}"
                                                   maxlength="2"
                                                   required
                                            >
                                        </div>
                                        <div class="col-xs-6">
                                            <input class="form-control"
                                                   id="cc-expiry-year"
                                                   name="expiry_year"
                                                   type="text"
                                                   placeholder="{l s='YY' mod='cardinalcommerce'}"
                                                   maxlength="2"
                                                   required
                                            >
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="col-md-12">
                                            <label class="form-control-label required">
                                                {l s='Security code (3 on back, Amex: 4 on front)' mod='cardinalcommerce'}
                                            </label>
                                        </div>
                                        <div class="col-md-6">
                                            <input class="form-control"
                                                   id="cc-cvc"
                                                   name="security_code"
                                                   type="text"
                                                   value=""
                                                   maxlength="4"
                                                   required
                                            >
                                        </div>
                                        <div class="col-md-6">
                                            <img src="{$cvc_image|escape:'htmlall':'UTF-8'}" alt="CVC">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 py-2">

                                        <div class="col-md-6">
                                            <form action="{url entity='module' name='cardinalcommerce' controller='authentication' params=['order_id' => $order_id, 'secure_key' => $secure_key] }"
                                                  method="post"
                                                  class="d-none"
                                                  id="cardinalCommerceCardTokenActionForm"
                                            >

                                                <select class="form-control form-control-select" id="card_token_action" name="card_token_action">
                                                    {if $last_four_digits neq false}
                                                        <option value="none" title="{l s='Select saved card' mod='cardinalcommerce'}" selected="selected">{l s='Select saved card' mod='cardinalcommerce'}</option>
                                                        <option value="pay" title="************{$last_four_digits|escape:'htmlall':'UTF-8'}">************{$last_four_digits|escape:'htmlall':'UTF-8'}</option>
                                                        <option value="delete" title="{l s='Delete saved card' mod='cardinalcommerce'}">{l s='Delete saved card' mod='cardinalcommerce'}</option>
                                                    {else}
                                                        <option value="none" title="{l s='Don\'t save card' mod='cardinalcommerce'}" selected="selected">{l s='Don\'t save card' mod='cardinalcommerce'}</option>
                                                        <option value="save" title="{l s='Save card' mod='cardinalcommerce'}">{l s='Save card' mod='cardinalcommerce'}</option>
                                                    {/if}
                                                </select>
                                            </form>
                                        </div>

                                        <div class="col-md-6">
                                            <button type="button"
                                                    class="btn btn-primary float-xs-right"
                                                    id="cardinalCommerceConfirmPaymentBtn"
                                            >
                                                {l s='Confirm my payment' mod='cardinalcommerce'}
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div id='merchant-content-wrapper' style='display: none'>
                                    <div id='actual-merchant-content'></div>
                                </div>

                                <form action="{url entity='module' name='cardinalcommerce' controller='authentication' params=['order_id' => $order_id, 'secure_key' => $secure_key] }"
                                      method="post"
                                      class="d-none"
                                      id="cardinalCommerceResponseForm"
                                >
                                    <input type="hidden" name="cardinal-commerce-response" id="cardinalCommerceResponseInput">
                                    <input type="hidden" name="token" value="{$static_token|escape:'htmlall':'UTF-8'}">
                                    <input type="hidden" name="card_token_action_selected" id="card_token_action_selected" value="">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <section id="js-checkout-summary" class="card js-cart">
                    <div class="card-block">

                        <div class="cart-summary-products">

                            <p>{$cart.summary_string|escape:'htmlall':'UTF-8'}</p>

                            <p>
                                <a href="#" data-toggle="collapse" data-target="#cart-summary-product-list">
                                    {l s='show details' d='Shop.Theme.Actions'}
                                </a>
                            </p>

                            <div class="collapse" id="cart-summary-product-list">
                                <ul class="media-list">
                                    {foreach from=$cart.products item=product}
                                        <li class="media">{include file='checkout/_partials/cart-summary-product-line.tpl' product=$product}</li>
                                    {/foreach}
                                </ul>
                            </div>
                        </div>

                        {foreach from=$cart.subtotals item="subtotal"}
                            {if $subtotal && $subtotal.type !== 'tax'}
                                <div class="cart-summary-line cart-summary-subtotals" id="cart-subtotal-{$subtotal.type|escape:'htmlall':'UTF-8'}">
                                    <span class="label">{$subtotal.label|escape:'htmlall':'UTF-8'}</span>
                                    <span class="value">{$subtotal.value|escape:'htmlall':'UTF-8'}</span>
                                </div>
                            {/if}
                        {/foreach}

                    </div>

                    <div class="card-block cart-summary-totals">

                        <div class="cart-summary-line cart-total">
                            <span class="label">{$cart.totals.total.label|escape:'htmlall':'UTF-8'} {$cart.labels.tax_short|escape:'htmlall':'UTF-8'}</span>
                            <span class="value">{$cart.totals.total.value|escape:'htmlall':'UTF-8'}</span>
                        </div>

                        <div class="cart-summary-line">
                            <span class="label sub">{$cart.subtotals.tax.label|escape:'htmlall':'UTF-8'}</span>
                            <span class="value sub">{$cart.subtotals.tax.value|escape:'htmlall':'UTF-8'}</span>
                        </div>

                    </div>

                </section>
            </div>
        </div>
    </section>
{/block}
