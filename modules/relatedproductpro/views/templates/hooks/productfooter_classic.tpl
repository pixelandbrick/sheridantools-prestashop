{**
* Prestashop Addons | Module by: <App1Pro>
*
* @author    Chuyen Nguyen [App1Pro].
* @copyright Chuyenim@gmail.com
* @license   http://app1pro.com/license.txt
*}

<!-- Related Products -->
<section class="page-product-box">
	<h3 class="page-product-heading">{l s='Related Products' mod='relatedproductpro'}</h3>

    <div id="related-product-pro" class="block_content related-product-pro">
		<ul class="products-block">
            {assign var=i value=0}
			{foreach from=$products item=product name=products}
				<li class="item-products-block{if (($i % 2) == 0)} even-products-block{/if}">
					<a class="products-block-image" href="{$product.link|escape:'htmlall':'UTF-8'}" title="{$product.legend|escape:'htmlall':'UTF-8'}"><img class="replace-2x img-responsive" src="{$link->getImageLink($product.link_rewrite, $product.id_image, $image_size)|escape:'htmlall':'UTF-8'}" alt="{$product.name|escape:'htmlall':'UTF-8'}" /></a>
					<div class="product-content product-container" itemscope itemtype="http://schema.org/Product">
						<h5>
                            <a class="product-name" href="{$product.link|escape:'htmlall':'UTF-8'}" title="{$product.name|escape:'htmlall':'UTF-8'}" itemprop="url">
                                <span class="item-name" itemprop="name">{$product.name|strip_tags|escape:'htmlall':'UTF-8'}</span>
                            </a>
						</h5>
                       	<p class="product-description">{$product.description_short|strip_tags:'UTF-8'|escape:'htmlall':'UTF-8'|truncate:95:'...'}</p>
						{if (!$PS_CATALOG_MODE AND ((isset($product.show_price) && $product.show_price) || (isset($product.available_for_order) && $product.available_for_order)))}
							{if isset($product.show_price) && $product.show_price && !isset($restricted_country_mode)}
								<p class="price-box">
									<span class="price">
									{if !$priceDisplay}
										{displayWtPrice p=$product.price}{else}{displayWtPrice p=$product.price_tax_exc}
									{/if}
									</span>
									{if $product.specific_prices}
										{assign var='specific_prices' value=$product.specific_prices}
										{if $specific_prices.reduction_type == 'percentage' && ($specific_prices.from == $specific_prices.to OR ($smarty.now|date_format:'%Y-%m-%d %H:%M:%S' <= $specific_prices.to && $smarty.now|date_format:'%Y-%m-%d %H:%M:%S' >= $specific_prices.from))}
										<span class="price-percent-reduction">-{$specific_prices.reduction*100|floatval}%</span>
										{/if}
										<span class="old-price">
											{if !$priceDisplay}
												{displayWtPrice p=$product.price_without_reduction}
                                            {else}
                                                {displayWtPrice p=$product.price_without_reduction_without_tax}
											{/if}
										</span>
									{/if}
								</p>
							{/if}
						{/if}
						
						<div class="button-container">
							{if ($product.id_product_attribute == 0 || (isset($add_prod_display) && ($add_prod_display == 1))) && $product.available_for_order && !isset($restricted_country_mode) && $product.customizable != 2 && !$PS_CATALOG_MODE}
								{if (!isset($product.customization_required) || !$product.customization_required) && ($product.allow_oosp || $product.quantity > 0)}
                                {capture}add=1&amp;id_product={$product.id_product|intval}{if isset($product.id_product_attribute) && $product.id_product_attribute}&amp;ipa={$product.id_product_attribute|intval}{/if}{if isset($static_token)}&amp;token={$static_token|escape:'htmlall':'UTF-8'}{/if}{/capture}
                                    <a class="ajax_add_to_cart_button btn btn-xs btn-primary" href="{$link->getPageLink('cart', true, NULL, $smarty.capture.default, false)|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Add to cart' mod='relatedproductpro'}" data-id-product-attribute="{$product.id_product_attribute|intval}" data-id-product="{$product.id_product|intval}" data-minimal_quantity="{if isset($product.product_attribute_minimal_quantity) && $product.product_attribute_minimal_quantity >= 1}{$product.product_attribute_minimal_quantity|intval}{else}{$product.minimal_quantity|intval}{/if}">
                                        <span>{l s='Add to cart' mod='relatedproductpro'}</span>
									</a>
								{else}
									<span class="ajax_add_to_cart_button btn btn-xs btn-primary disabled">
                                        <span>{l s='Add to cart' mod='relatedproductpro'}</span>
									</span>
								{/if}
							{/if}
						</div>
					</div>
				</li>
                {assign var=i value=$i+1}
			{/foreach}
			<div class="clearfix"></div>
		</ul>
	</div>

</section>
<!--end Related Products -->