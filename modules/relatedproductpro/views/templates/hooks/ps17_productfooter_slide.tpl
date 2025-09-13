{*
* Prestashop Addons | Module by: <App1Pro>
*
* @author    Chuyen Nguyen [App1Pro].
* @copyright Chuyenim@gmail.com
* @license   http://app1pro.com/license.txt
*}

{if (count($products))}
<!-- Related Products -->
<div class="category-products none-in-tabs">
  <p class="headline-section products-title">
      {if $products|@count == 1}
        {l s='Related Products' sprintf=[$products|@count] d='Shop.Theme.Catalog'}
      {else}
        {l s='Related Products' sprintf=[$products|@count] d='Shop.Theme.Catalog'}
      {/if}
  </p>
  <div class="products grid row view-carousel js-carousel-products">
      {foreach from=$products item="product"}
          {include file="catalog/_partials/miniatures/product.tpl" product=$product}
      {/foreach}
  </div>
</div>
{/if}