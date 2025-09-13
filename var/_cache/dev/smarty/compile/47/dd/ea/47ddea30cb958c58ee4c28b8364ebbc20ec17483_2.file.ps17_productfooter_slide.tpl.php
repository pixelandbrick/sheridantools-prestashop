<?php
/* Smarty version 3.1.33, created on 2020-03-13 21:44:25
  from '/home2/sheridantools/dev.sheridantools.com/modules/relatedproductpro/views/templates/hooks/ps17_productfooter_slide.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e6c36f980e130_07097934',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47ddea30cb958c58ee4c28b8364ebbc20ec17483' => 
    array (
      0 => '/home2/sheridantools/dev.sheridantools.com/modules/relatedproductpro/views/templates/hooks/ps17_productfooter_slide.tpl',
      1 => 1581213816,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product.tpl' => 1,
  ),
),false)) {
function content_5e6c36f980e130_07097934 (Smarty_Internal_Template $_smarty_tpl) {
if ((count($_smarty_tpl->tpl_vars['products']->value))) {?>
<!-- Related Products -->
<div class="category-products none-in-tabs">
  <p class="headline-section products-title">
      <?php if (count($_smarty_tpl->tpl_vars['products']->value) == 1) {?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Related Products','sprintf'=>array(count($_smarty_tpl->tpl_vars['products']->value)),'d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

      <?php } else { ?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Related Products','sprintf'=>array(count($_smarty_tpl->tpl_vars['products']->value)),'d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

      <?php }?>
  </p>
  <div class="products grid row view-carousel js-carousel-products">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
          <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </div>
</div>
<?php }
}
}
