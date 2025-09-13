<?php
/* Smarty version 4.5.5, created on 2025-09-12 23:30:07
  from '/home/sheridantools/public_html/themes/autostore/templates/catalog/_partials/sort-orders.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_68c4e53f5fb628_22811641',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd98d64569a649adeedf0495411c6419463916489' => 
    array (
      0 => '/home/sheridantools/public_html/themes/autostore/templates/catalog/_partials/sort-orders.tpl',
      1 => 1580954804,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68c4e53f5fb628_22811641 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="<?php if (!empty($_smarty_tpl->tpl_vars['listing']->value['rendered_facets'])) {
} else {
}?> products-sort-order dropdown">
  <label class="sort-by"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sort by','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</label>
  <div class="drow-down-wrapper">
      <a class="select-title" rel="nofollow" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <?php if ((isset($_smarty_tpl->tpl_vars['listing']->value['sort_selected']))) {
echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['listing']->value['sort_selected']), ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );
}?>
        <i class="material-icons pull-xs-right">&#xE5C5;</i>
      </a>
      <div class="dropdown-menu">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listing']->value['sort_orders'], 'sort_order');
$_smarty_tpl->tpl_vars['sort_order']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sort_order']->value) {
$_smarty_tpl->tpl_vars['sort_order']->do_else = false;
?>
          <a
            rel="nofollow"
            href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['sort_order']->value['url']), ENT_QUOTES, 'UTF-8');?>
"
            class="select-list <?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( array('current'=>$_smarty_tpl->tpl_vars['sort_order']->value['current'],'js-search-link'=>true) ))), ENT_QUOTES, 'UTF-8');?>
"
          >
            <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['sort_order']->value['label']), ENT_QUOTES, 'UTF-8');?>

          </a>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </div>
  </div>
</div>
<?php }
}
