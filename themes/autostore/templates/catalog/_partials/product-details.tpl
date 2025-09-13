<div id="product-details" data-product="{$product.embedded_attributes|json_encode}">
<div class="product-info">
{if isset($product.reference_to_display) && $product.reference_to_display neq ''}
<div class="product-reference">
<label class="label">{l s='SKU#' d='Shop.Theme.Catalog'} </label>
<span itemprop="sku">{$product.reference_to_display}</span>
</div>
{/if}
</div>
</div>
</div>