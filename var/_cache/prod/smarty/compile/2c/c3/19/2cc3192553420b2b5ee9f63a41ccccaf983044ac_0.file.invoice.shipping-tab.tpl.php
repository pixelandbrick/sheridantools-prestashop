<?php
/* Smarty version 3.1.33, created on 2020-04-07 14:19:46
  from '/home2/sheridantools/public_html/pdf/invoice.shipping-tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e8cc442ef85c8_44730439',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2cc3192553420b2b5ee9f63a41ccccaf983044ac' => 
    array (
      0 => '/home2/sheridantools/public_html/pdf/invoice.shipping-tab.tpl',
      1 => 1584147155,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e8cc442ef85c8_44730439 (Smarty_Internal_Template $_smarty_tpl) {
?><table id="shipping-tab" width="100%">
	<tr>
		<td class="shipping center small grey bold" width="44%"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Carrier','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl ) );?>
</td>
		<td class="shipping center small white" width="56%"><?php echo $_smarty_tpl->tpl_vars['carrier']->value->name;?>
</td>
	</tr>
</table>
<?php }
}
