<?php
/* Smarty version 4.5.5, created on 2025-09-12 23:26:33
  from '/home/sheridantools/public_html/admin143k7mgdz/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_68c4e469e6f2e7_07684996',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a143b838cb78cfc897c610361b469eb2c2410bd6' => 
    array (
      0 => '/home/sheridantools/public_html/admin143k7mgdz/themes/default/template/content.tpl',
      1 => 1757733719,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68c4e469e6f2e7_07684996 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
