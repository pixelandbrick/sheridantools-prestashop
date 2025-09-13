<?php
/* Smarty version 4.5.5, created on 2025-09-12 23:31:34
  from 'module:ps_shoppingcartps_shoppingcart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_68c4e59615f2b5_91656173',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35655e6409b6198f29dd6e732ef9598dec599880' => 
    array (
      0 => 'module:ps_shoppingcartps_shoppingcart.tpl',
      1 => 1757732429,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:ps_shoppingcart/ps_shoppingcart-product-line.tpl' => 1,
  ),
),false)) {
function content_68c4e59615f2b5_91656173 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="_desktop_cart">
  <input type="checkbox" id="toggle-cart" class="no-style">
  <div class="blockcart cart-preview <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count'] > 0) {?>active<?php } else { ?>inactive<?php }?>" data-refresh-url="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['refresh_url']->value), ENT_QUOTES, 'UTF-8');?>
">
    <label class="cart-header" for="toggle-cart">
        <div class="inner-wrapper">
            <i class="font-cart"></i>
            <span class="cart-title hidden-lg-down"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cart','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
            <span class="divider hidden-md-down"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'-','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
            <span class="cart-products-count"><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['cart']->value['products_count']), ENT_QUOTES, 'UTF-8');?>
</span>
            <span class="hidden-md-down"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'item(s)','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
        </div>
    </label>
    <div class="body cart-hover-content">
        <div class="container">
             <ul class="cart-list">
             <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['products'], 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                 <li class="cart-wishlist-item">
                 <?php $_smarty_tpl->_subTemplateRender('module:ps_shoppingcart/ps_shoppingcart-product-line.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
                 </li>
             <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
             </ul>
             <div class="cart-footer">
                 <div class="cart-subtotals">
                     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['subtotals'], 'subtotal');
$_smarty_tpl->tpl_vars['subtotal']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subtotal']->value) {
$_smarty_tpl->tpl_vars['subtotal']->do_else = false;
?>
                        <?php if ($_smarty_tpl->tpl_vars['subtotal']->value['type'] == 'tax') {?>
                            <?php if ($_smarty_tpl->tpl_vars['customer']->value['is_logged']) {?>
                                <div class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['subtotal']->value['type']), ENT_QUOTES, 'UTF-8');?>
">
                                <span class="value"><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['subtotal']->value['value']), ENT_QUOTES, 'UTF-8');?>
</span>
                                <span class="label"><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['subtotal']->value['label']), ENT_QUOTES, 'UTF-8');?>
</span>
                                </div>
                            <?php }?>
                        <?php } else { ?>
                            <div class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['subtotal']->value['type']), ENT_QUOTES, 'UTF-8');?>
">
                            <span class="value"><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['subtotal']->value['value']), ENT_QUOTES, 'UTF-8');?>
</span>
                            <span class="label"><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['subtotal']->value['label']), ENT_QUOTES, 'UTF-8');?>
</span>
                            </div>
                        <?php }?>
                     <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <div class="cart-total">
                         <span class="value"><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['cart']->value['totals']['total']['value']), ENT_QUOTES, 'UTF-8');?>
</span>
                         <span class="label"><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['cart']->value['totals']['total']['label']), ENT_QUOTES, 'UTF-8');?>
</span>
                    </div>
                 </div>
                 <div class="cart-wishlist-action">
                                          <a class="btn fill cart-wishlist-checkout" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['cart_url']->value), ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Checkout','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a>
                 </div>
             </div>
         </div>
     </div>
  </div>
</div>

<?php }
}
