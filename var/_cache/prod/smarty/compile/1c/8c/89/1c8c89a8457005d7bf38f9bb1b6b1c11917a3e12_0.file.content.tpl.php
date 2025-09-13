<?php
/* Smarty version 3.1.33, created on 2020-04-07 20:33:21
  from '/home2/sheridantools/public_html/admin143k7mgdz/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e8d1bd1f2a874_93528725',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c8c89a8457005d7bf38f9bb1b6b1c11917a3e12' => 
    array (
      0 => '/home2/sheridantools/public_html/admin143k7mgdz/themes/default/template/content.tpl',
      1 => 1584147140,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e8d1bd1f2a874_93528725 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
