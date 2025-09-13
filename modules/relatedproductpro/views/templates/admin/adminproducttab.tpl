{**
* Prestashop Addons | Module by: <App1Pro>
*
* @author    Chuyen Nguyen [App1Pro].
* @copyright Chuyenim@gmail.com
* @license   http://app1pro.com/license.txt
*}

{if isset($id_product)}
<div id="product_related" class="panel product-tab" ajax-remote_url="{$remote_url|escape:'html':'UTF-8'}" ajax-link="{$module_ajax_url|escape:'html':'UTF-8'}" id-product="{$id_product|escape:'html':'UTF-8'}">
    <input type="hidden" name="submitted_tabs[]" value="Related Product Pro" />
	<input type="hidden" name="id_shop" value="{$id_shop|escape:'htmlall':'UTF-8'}" />
	<div class="panel-heading tab" >
		<i class="icon-link"></i> {l s='Related Products (autosave)' mod='relatedproductpro'}
		<span class="link_setting" ><a href="{$link_to_setting|escape:'htmlall':'UTF-8'}">{l s='Settings' mod='relatedproductpro'}</a></span>
	</div>

	<div class="content">
    <div class="mt-3">
        <label>
            <input type="checkbox" name="is_custom" value="1" {if !empty($custom_setting) && $custom_setting['is_custom']}checked{/if} />
            {l s='Override Settings' mod='relatedproductpro'}
        </label>
    </div>
    <div id="collapseOverrideSettings" class="card collapse mt-3 {if !empty($custom_setting) && $custom_setting['is_custom']}show{else}hide{/if}">
        <div class="card-body">
            <div class="form-group row">
                <label class="control-label col-md-3">
                    {l s='Type to display?' mod='relatedproductpro'}
                </label>
                <div class="col-md-9">
                    {foreach from=$types_list item=row key=index }
                    <div class="radio t">
                        <label><input type="radio" name="id_type" id="level_{$index}" value="{$index}" {if !empty($custom_setting) && $custom_setting['id_type'] == {$index}}checked{/if}> {$row}</label>
                    </div>
                    {/foreach}
                </div>
            </div>
        </div>
    </div>

	<br/>
		<fieldset class="form-group">
			<label class="control-label col-lg-3" for="product_autocomplete_input">
				<span class="" >
					{l s='Search a product' mod='relatedproductpro'}
				</span>
			</label>
			<div class="col-lg-6">
					<div class="input-group">
						<input type="text" id="product_autocomplete_input" name="product_autocomplete_input" class="form-control" />
						<span class="input-group-addon"><i class="icon icon-search"></i></span>
					</div>
					<div class="ajax_result" style="display:none"></div>
			</div>
		</fieldset>
	</div>

    <table class="table table-striped related_product" cellpadding="0" cellspacing="0" style="width: 100%; margin-bottom:10px;">
		<thead>
			<tr class="nodrag nodrop" style="height: 40px">
				<th class="center">
				</th>
				<th class="left">
					<span class="title_box">
						{l s='Product ID' mod='relatedproductpro'}
					</span>
				</th>
				<th class="left">
					<span class="title_box">
						{l s='Product Name' mod='relatedproductpro'}
					</span>
				</th>
				<th class="right">{l s='Actions' mod='relatedproductpro'}</th>
			</tr>
		</thead>
		<tbody>
            <tr id="row_template" class="alt_row row_hover">
                <td class="center">
                    <i class="icon icon-arrows-v"></i>
                </td>
                <td class="left">
                </td>
                <td class="left name">

                </td>
                <td class="right">
                    <input type="hidden" name="related_product_input[]" value="" />
                    <a href="javascript:void(0)" class="delete_product_related pull-right btn btn-default">
                        {if version_compare($smarty.const._PS_VERSION_, '1.6.0.0', '>')}
                        <i class="icon-trash"></i> {l s='Delete this product' mod='relatedproductpro'}
                        {else}
                        <img src="../img/admin/disabled.gif">
                        {/if}
                    </a>
                </td>
            </tr>
            {foreach from=$related_products item=product}
				<tr class="alt_row row_hover{if !$product.active} disabled{/if}">
					<td class="center">
                        <i class="icon icon-arrows-v"></i>
					</td>
					<td class="left">
						{$product.id_product|escape:'htmlall':'UTF-8'}
					</td>
					<td class="left name">
                        {$product.name|escape:'htmlall':'UTF-8'}
						({l s='ref' mod='relatedproductpro'}: {$product.reference|escape:'htmlall':'UTF-8'})
						{if !$product.active}<span class="label color_field" style="background-color:#8f0621;color:white;">{l s='Disabled' mod='relatedproductpro'}</span>{/if}
					</td>
					<td class="right">
                        <input type="hidden" name="related_product_input[]" value="{$product.id_product|escape:'htmlall':'UTF-8'}" />
                        <a href="javascript:void(0)" class="delete_product_related pull-right btn btn-default">
                            {if version_compare($smarty.const._PS_VERSION_, '1.6.0.0', '>')}
                            <i class="icon-trash"></i> {l s='Delete this product' mod='relatedproductpro'}
                            {else}
                            <img src="../img/admin/disabled.gif">
                            {/if}
						</a>
					</td>
				</tr>
			{foreachelse}
				<tr>
					<td colspan="6" class="center">
						<b>{l s='No products' mod='relatedproductpro'}</b>
					</td>
				</tr>
			{/foreach}
		</tbody>
	</table>
    <p class="text-right">{l s='(Drag & Drop to re-arrange the products)' mod='relatedproductpro'}</p>
</div>
{/if}

<script type="text/javascript">
var confirm_delete_related = "{l s='Are you sure to delete this item?' mod='relatedproductpro' js=1}";
{if version_compare($smarty.const._PS_VERSION_, '1.7.0.0', '<')}
$(document).ready(function() {
    $('#product_related').relatedProductPro();
});
{/if}
</script>