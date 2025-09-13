<?php
/* Smarty version 4.5.5, created on 2025-09-12 23:30:06
  from 'module:ps_brandlistviewstemplateshookps_brandlist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_68c4e53e80c1f3_71761732',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad7605d3e1afaa968ac113b0444601df2cff1153' => 
    array (
      0 => 'module:ps_brandlistviewstemplateshookps_brandlist.tpl',
      1 => 1580954804,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:ps_brandlist/views/templates/_partials/".((string)$_smarty_tpl->tpl_vars[\'brand_display_type\']->value).".tpl' => 1,
  ),
),false)) {
function content_68c4e53e80c1f3_71761732 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '205915914468c4e53e8036d3_07426611';
?>

<div id="search_filters_brands">
  <section class="facet">
    <h1 class="h6 text-uppercase facet-label">
      <?php if ($_smarty_tpl->tpl_vars['display_link_brand']->value) {?><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['page_link']->value), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Brands','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
"><?php }?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Brands','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

      <?php if ($_smarty_tpl->tpl_vars['display_link_brand']->value) {?></a><?php }?>
    </h1>
    <div>
      <?php if ($_smarty_tpl->tpl_vars['brands']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender("module:ps_brandlist/views/templates/_partials/".((string)$_smarty_tpl->tpl_vars['brand_display_type']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('brands'=>$_smarty_tpl->tpl_vars['brands']->value), 0, true);
?>
      <?php } else { ?>
        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No brand','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p>
      <?php }?>
    </div>
  </section>
</div>
<?php }
}
