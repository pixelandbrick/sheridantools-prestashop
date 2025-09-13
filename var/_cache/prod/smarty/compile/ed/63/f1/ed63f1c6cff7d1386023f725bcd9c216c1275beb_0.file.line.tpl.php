<?php
/* Smarty version 3.1.33, created on 2020-04-07 18:54:33
  from '/home2/sheridantools/public_html/modules/mailchimppro/views/templates/admin/entity_list/cart/line.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e8d04a93cc199_60254659',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed63f1c6cff7d1386023f725bcd9c216c1275beb' => 
    array (
      0 => '/home2/sheridantools/public_html/modules/mailchimppro/views/templates/admin/entity_list/cart/line.tpl',
      1 => 1585920140,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e8d04a93cc199_60254659 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lines']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
    <p>
        <b><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['product_variant_title'],'htmlall','UTF-8' ));?>
</b>
        <small style="color: red">PID: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['product_id'],'htmlall','UTF-8' ));?>
, CID: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['product_variant_id'],'htmlall','UTF-8' ));?>
</small>
        <small style="color: blue">QTY: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['quantity'],'htmlall','UTF-8' ));?>
</small>
        <small style="color: green"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['price'],'htmlall','UTF-8' ));?>
 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currency_code']->value,'htmlall','UTF-8' ));?>
</small>
    </p>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
