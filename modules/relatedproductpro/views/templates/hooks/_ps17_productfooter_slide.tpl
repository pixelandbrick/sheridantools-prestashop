{*
* Prestashop Addons | Module by: <App1Pro>
*
* @author    Chuyen Nguyen [App1Pro].
* @copyright Chuyenim@gmail.com
* @license   http://app1pro.com/license.txt
*}

{if (count($products))}
<!-- Related Products -->
<section id="products" class="page-product-box">
	<h3 class="page-product-heading">{l s='Related Products' mod='relatedproductpro'}</h3>

    <div id="related-product-pro" class="block_content related-product-pro">
		<div  class="products product_list row">
		{foreach from=$products item="product"}
		  {block name='product_miniature'}
			{include file='catalog/_partials/miniatures/product.tpl' product=$product}
		  {/block}
		{/foreach}
		</div>
	</div>

</section>

<script type="text/javascript">
	var slide_pager = {if (isset($slide_pager) && $slide_pager)}true{else}false{/if},
	slide_infiniteLoop = {if (isset($slide_infiniteLoop) && $slide_infiniteLoop)}true{else}false{/if},
	slide_auto = {if (isset($slide_auto) && $slide_auto)}true{else}false{/if},
	slide_hideControlOnEnd = {if (isset($slide_hideControlOnEnd) && $slide_hideControlOnEnd)}true{else}false{/if},
	slide_slideWidth = {if (isset($slide_slideWidth) && $slide_slideWidth)}{$slide_slideWidth|escape:'htmlall':'UTF-8'}{else}{$homeSize.width|escape:'htmlall':'UTF-8'} + 20{/if},
	slide_slideMargin = {if (isset($slide_slideMargin) && $slide_slideMargin != null)}{$slide_slideMargin|escape:'htmlall':'UTF-8'}{else}30{/if};
</script>
<!--end Related Products -->
{/if}