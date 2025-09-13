<?php
/* Smarty version 4.5.5, created on 2025-09-12 23:30:06
  from 'module:ps_brandlistviewstemplates_partialsbrand_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_68c4e53e814cd9_16012293',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e676d7315480f58ef8791428b246d135066c8f6' => 
    array (
      0 => 'module:ps_brandlistviewstemplates_partialsbrand_form.tpl',
      1 => 1580954804,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68c4e53e814cd9_16012293 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '119847528668c4e53e8102a3_97707345';
?>

<form action="#">
  <select onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
    <option value=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All brands','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</option>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['brands']->value, 'brand');
$_smarty_tpl->tpl_vars['brand']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['brand']->value) {
$_smarty_tpl->tpl_vars['brand']->do_else = false;
?>
      <option value="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['brand']->value['link']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['brand']->value['name']), ENT_QUOTES, 'UTF-8');?>
</option>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </select>
</form>
<?php }
}
