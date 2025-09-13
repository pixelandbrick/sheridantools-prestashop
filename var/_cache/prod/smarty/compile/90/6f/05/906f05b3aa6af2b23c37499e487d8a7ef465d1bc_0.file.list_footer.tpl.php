<?php
/* Smarty version 3.1.33, created on 2020-04-07 13:21:15
  from '/home2/sheridantools/public_html/admin143k7mgdz/themes/default/template/controllers/carriers/helpers/list/list_footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e8cb68b8f2d16_56250113',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '906f05b3aa6af2b23c37499e487d8a7ef465d1bc' => 
    array (
      0 => '/home2/sheridantools/public_html/admin143k7mgdz/themes/default/template/controllers/carriers/helpers/list/list_footer.tpl',
      1 => 1584147140,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e8cb68b8f2d16_56250113 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1156878205e8cb68b8ef085_51281049', "after");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_footer.tpl");
}
/* {block "after"} */
class Block_1156878205e8cb68b8ef085_51281049 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'after' => 
  array (
    0 => 'Block_1156878205e8cb68b8ef085_51281049',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<?php if (is_null($_smarty_tpl->tpl_vars['modules_list']->value)) {?>
			<div class="panel">
				<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Use one of our recommended carrier modules",'d'=>'Admin.Shipping.Feature'),$_smarty_tpl ) );?>
</h3>
				<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"It seems there are no recommended carriers for your country.",'d'=>'Admin.Shipping.Feature'),$_smarty_tpl ) );?>
</p>
				<p><a href="https://www.prestashop.com/en/contact-us"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Do you think there should be one? Let us know!",'d'=>'Admin.Shipping.Feature'),$_smarty_tpl ) );?>
</a></p>
			</div>
		<?php } else { ?>
			<?php echo $_smarty_tpl->tpl_vars['modules_list']->value;?>

		<?php }?>
	<?php
}
}
/* {/block "after"} */
}
