{*
* Prestashop Addons | Module by: <App1Pro>
*
* @author    Chuyen Nguyen [App1Pro].
* @copyright Chuyenim@gmail.com
* @license   http://app1pro.com/license.txt
*}

<!-- Related Products -->
{if (count($products))}
<section id="products" class="page-product-box">
	<h3 class="page-product-heading">{l s='Related Products' mod='relatedproductpro'}</h3>
	<div class="mainList">
		<div  class="products row">
		{foreach from=$products item="product"}
		  {block name='product_miniature'}
			{include file='catalog/_partials/miniatures/product.tpl' product=$product}
		  {/block}
		{/foreach}
		</div>
	</div>
</section>
{/if}
<!--end Related Products -->