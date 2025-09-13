<?php
/* Smarty version 4.5.5, created on 2025-09-12 23:30:06
  from 'module:ps_bestsellersviewstemplateshookps_bestsellers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_68c4e53e77f311_36537812',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3681aa30d1f85f48e2cf4794b77200e697f706a9' => 
    array (
      0 => 'module:ps_bestsellersviewstemplateshookps_bestsellers.tpl',
      1 => 1580954804,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product.tpl' => 1,
  ),
),false)) {
function content_68c4e53e77f311_36537812 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '157430405268c4e53e779623_64979427';
?>
<section class="featured-products column-block clearfix">
  <p class="h6 text-uppercase">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Best Sellers','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

  </p>
    <div class="toggle-block">
      <div class="products-list">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
          <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </div>
      <a class="all-product-link btn btn-primary btn_skine-two" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['allBestSellers']->value), ENT_QUOTES, 'UTF-8');?>
">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All best sellers','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

      </a>
  </div>
</section>
<?php }
}
