<?php
/* Smarty version 3.1.33, created on 2020-04-07 20:31:32
  from '/home2/sheridantools/public_html/themes/autostore/modules/homebestsellerstab/views/templates/hook/tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e8d1b640b9414_17074201',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03c0c9e0b152cd5928b2d8cf8e8e5740f44a764d' => 
    array (
      0 => '/home2/sheridantools/public_html/themes/autostore/modules/homebestsellerstab/views/templates/hook/tab.tpl',
      1 => 1580954804,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e8d1b640b9414_17074201 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['carousel_tabs']->value == 'true') {?>
<li class="nav-item">
	<a data-toggle="tab" href="#homebestsellerstab" class="homebestsellerstab nav-link">
		<span class="nav-link-inner">
			<span class="hidden-text"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['homebestsellerstab_category_name']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
			<span class="visible-text"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['homebestsellerstab_category_name']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
		</span>
	</a>
</li>
<?php }
}
}
