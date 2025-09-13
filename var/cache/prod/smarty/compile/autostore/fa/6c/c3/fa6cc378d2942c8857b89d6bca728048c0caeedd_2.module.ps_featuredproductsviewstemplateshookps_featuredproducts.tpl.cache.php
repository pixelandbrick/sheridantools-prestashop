<?php
/* Smarty version 4.5.5, created on 2025-09-12 23:31:33
  from 'module:ps_featuredproductsviewstemplateshookps_featuredproducts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_68c4e595f36404_35729163',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa6cc378d2942c8857b89d6bca728048c0caeedd' => 
    array (
      0 => 'module:ps_featuredproductsviewstemplateshookps_featuredproducts.tpl',
      1 => 1757732429,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product.tpl' => 1,
  ),
),false)) {
function content_68c4e595f36404_35729163 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '18376041768c4e595ef4fc9_58481487';
?>
<div class="featured-products none-in-tabs wow fadeInUp" data-wow-offset="150">
  <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {?>
  <div class="container -responsive">
  <?php }?>
  <p class="headline-section products-title">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Featured products','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

  </p>
  <div class="products grid row view-carousel js-carousel-products">
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
    <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {?>
  </div>
  <?php }?>
</div>
<?php }
}
