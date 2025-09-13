<?php
/* Smarty version 3.1.33, created on 2020-04-07 14:03:44
  from '/home2/sheridantools/public_html/themes/autostore/templates/catalog/_partials/product-details.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e8cc080558aa3_49216210',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c50d355e81ac8898d0503c486ed0caa4bae6829' => 
    array (
      0 => '/home2/sheridantools/public_html/themes/autostore/templates/catalog/_partials/product-details.tpl',
      1 => 1581999491,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e8cc080558aa3_49216210 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="product-details" data-product="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['embedded_attributes'] )), ENT_QUOTES, 'UTF-8');?>
">
<div class="product-info">
<?php if (isset($_smarty_tpl->tpl_vars['product']->value['reference_to_display']) && $_smarty_tpl->tpl_vars['product']->value['reference_to_display'] != '') {?>
<div class="product-reference">
<label class="label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'SKU#','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
 </label>
<span itemprop="sku"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['reference_to_display'], ENT_QUOTES, 'UTF-8');?>
</span>
</div>
<?php }?>
</div>
</div>
</div><?php }
}
