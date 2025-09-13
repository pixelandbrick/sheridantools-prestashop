<div id="_desktop_cart">
  <input type="checkbox" id="toggle-cart" class="no-style">
  <div class="blockcart cart-preview {if $cart.products_count > 0}active{else}inactive{/if}" data-refresh-url="{$refresh_url}">
    <label class="cart-header" for="toggle-cart">
        <div class="inner-wrapper">
            <i class="font-cart"></i>
            <span class="cart-title hidden-lg-down">{l s='Cart' d='Shop.Theme.Checkout'}</span>
            <span class="divider hidden-md-down">{l s='-' d='Shop.Theme.Checkout'}</span>
            <span class="cart-products-count">{$cart.products_count}</span>
            <span class="hidden-md-down">{l s='item(s)' d='Shop.Theme.Checkout'}</span>
        </div>
    </label>
    <div class="body cart-hover-content">
        <div class="container">
             <ul class="cart-list">
             {foreach from=$cart.products item=product}
                 <li class="cart-wishlist-item">
                 {include 'module:ps_shoppingcart/ps_shoppingcart-product-line.tpl' product=$product}
                 </li>
             {/foreach}
             </ul>
             <div class="cart-footer">
                 <div class="cart-subtotals">
                     {foreach from=$cart.subtotals item="subtotal"}
                        {if $subtotal.type == 'tax'}
                            {if $customer.is_logged}
                                <div class="{$subtotal.type}">
                                <span class="value">{$subtotal.value}</span>
                                <span class="label">{$subtotal.label}</span>
                                </div>
                            {/if}
                        {else}
                            <div class="{$subtotal.type}">
                            <span class="value">{$subtotal.value}</span>
                            <span class="label">{$subtotal.label}</span>
                            </div>
                        {/if}
                     {/foreach}
                    <div class="cart-total">
                         <span class="value">{$cart.totals.total.value}</span>
                         <span class="label">{$cart.totals.total.label}</span>
                    </div>
                 </div>
                 <div class="cart-wishlist-action">
                     {*<a class="cart-wishlist-viewcart" href="{$cart_url}">view cart</a>*}
                     <a class="btn fill cart-wishlist-checkout" href="{$cart_url}"{*href="{$urls.pages.order}"*}>{l s='Checkout' d='Shop.Theme.Actions'}</a>
                 </div>
             </div>
         </div>
     </div>
  </div>
</div>

