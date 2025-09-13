<?php
/* Smarty version 3.1.33, created on 2020-04-07 20:31:32
  from '/home2/sheridantools/public_html/themes/autostore/modules/homenewtab/views/templates/hook/homenewtab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e8d1b641e7d06_98279806',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a76b89159dd89f5a2cff667f3706f8ec79d66b0' => 
    array (
      0 => '/home2/sheridantools/public_html/themes/autostore/modules/homenewtab/views/templates/hook/homenewtab.tpl',
      1 => 1580954804,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product.tpl' => 1,
  ),
),false)) {
function content_5e8d1b641e7d06_98279806 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="<?php if ($_smarty_tpl->tpl_vars['carousel_tabs']->value == 'true') {?>tab-pane fade<?php } else { ?>none-in-tabs<?php }?>"<?php if ($_smarty_tpl->tpl_vars['carousel_tabs']->value == 'true') {?> id="homenewtab"<?php }?>>
    <div class="container">
        <?php if ($_smarty_tpl->tpl_vars['carousel_tabs']->value != 'true') {?>
            <p class="headline-section products-title"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['homenewtab_category_name']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</p>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
            <div class="products grid row<?php if ($_smarty_tpl->tpl_vars['carousel_active']->value == 'true') {?> view-carousel js-carousel-new<?php } else { ?> view-grid xlarge-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['carousel_col']->value, ENT_QUOTES, 'UTF-8');?>
 large-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['carousel_col_1200']->value, ENT_QUOTES, 'UTF-8');?>
 medium-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['carousel_col_992']->value, ENT_QUOTES, 'UTF-8');?>
 small-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['carousel_col_769']->value, ENT_QUOTES, 'UTF-8');?>
 xsmall-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['carousel_col_576']->value, ENT_QUOTES, 'UTF-8');
}?>"<?php if ($_smarty_tpl->tpl_vars['carousel_active']->value == 'true') {?> data-carousel=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['carousel_active']->value, ENT_QUOTES, 'UTF-8');?>
 data-autoplay="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['carousel_autoplay']->value, ENT_QUOTES, 'UTF-8');?>
" data-speed="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['carousel_speed']->value, ENT_QUOTES, 'UTF-8');?>
" data-pag="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['carousel_pag']->value, ENT_QUOTES, 'UTF-8');?>
" data-arrows="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['carousel_arrows']->value, ENT_QUOTES, 'UTF-8');?>
" data-loop="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['carousel_loop']->value, ENT_QUOTES, 'UTF-8');?>
" data-rows="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['carousel_rows']->value, ENT_QUOTES, 'UTF-8');?>
" data-col="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['carousel_col']->value, ENT_QUOTES, 'UTF-8');?>
" data-col_1200="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['carousel_col_1200']->value, ENT_QUOTES, 'UTF-8');?>
" data-col_992="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['carousel_col_992']->value, ENT_QUOTES, 'UTF-8');?>
" data-col_769="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['carousel_col_769']->value, ENT_QUOTES, 'UTF-8');?>
" data-col_576="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['carousel_col_576']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', false, NULL, 'products', array (
  'first' => true,
  'iteration' => true,
  'last' => true,
  'index' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['index'];
$_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['total'];
?>
                 <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['first'] : null) && ($_smarty_tpl->tpl_vars['carousel_rows']->value > 1) && $_smarty_tpl->tpl_vars['carousel_active']->value == 'true') {?>                     <div class="wrapper-item fist">
                 <?php }?>
                <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
                 <?php if (!((isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration'] : null) % $_smarty_tpl->tpl_vars['carousel_rows']->value) && ($_smarty_tpl->tpl_vars['carousel_rows']->value > 1) && $_smarty_tpl->tpl_vars['carousel_active']->value == 'true') {?>                    <?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['last'] : null) && ($_smarty_tpl->tpl_vars['carousel_rows']->value > 1) && $_smarty_tpl->tpl_vars['carousel_active']->value == 'true') {?>                         </div><div class="wrapper-item">
                    <?php }?>
                <?php }?>
                 <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['last'] : null) && ($_smarty_tpl->tpl_vars['carousel_rows']->value > 1) && $_smarty_tpl->tpl_vars['carousel_active']->value == 'true') {?>                    </div>
                 <?php }?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        <?php } else { ?>
            <div class="col-md-12">
                <div class="alert alert-warning">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No new products found','d'=>'Modules.Homenewtab.Shop'),$_smarty_tpl ) );?>

                </div>
            </div>
        <?php }?>
        <div class="text-center">
            <a class="more-btn btn big" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['allnewProductsLink']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All new products','d'=>'Modules.Homenewtab.Shop'),$_smarty_tpl ) );?>
</a>
        </div>
    </div>
</div>
<?php }
}
