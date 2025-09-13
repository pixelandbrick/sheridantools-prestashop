<?php
/* Smarty version 4.5.5, created on 2025-09-12 23:30:07
  from '/home/sheridantools/public_html/themes/autostore/templates/catalog/_partials/custom/add-to-cart-product-list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_68c4e53f677df4_24692655',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a85c65fcba124d0073e306e7170a33d025e3d104' => 
    array (
      0 => '/home/sheridantools/public_html/themes/autostore/templates/catalog/_partials/custom/add-to-cart-product-list.tpl',
      1 => 1580954804,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68c4e53f677df4_24692655 (Smarty_Internal_Template $_smarty_tpl) {
?>

<form action="" method="post" id="add-to-cart-or-refresh">
	<div class="product-quantity" style="display:none;">
		<input type="hidden" name="token" id="token-product-list" value="">
            <input type="hidden" name="id_product" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['id_product']), ENT_QUOTES, 'UTF-8');?>
" id="product_page_product_id">
            <input type="hidden" name="id_customization" value="0" id="product_customization_id">
            <input type="hidden" name="qty" id="quantity_wanted" value="1" class="input-group"  min="1"  />
	</div>
     <a href="javascript:void(0);" name-module="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['name_module']->value), ENT_QUOTES, 'UTF-8');?>
" id="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['name_module']->value), ENT_QUOTES, 'UTF-8');?>
-cart-id-product-<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['id_product']), ENT_QUOTES, 'UTF-8');?>
" id_product_atrr="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['id_product']), ENT_QUOTES, 'UTF-8');?>
" class="add-cart <?php if (!$_smarty_tpl->tpl_vars['product']->value['add_to_cart_url']) {?>disabled<?php }?>" data-button-action="add-to-cart" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
">
     	<i class="font-cart"></i>
		<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
	 </a>
</form>

<?php }
}
