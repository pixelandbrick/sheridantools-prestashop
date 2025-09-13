<?php
/* Smarty version 3.1.33, created on 2020-04-07 20:25:42
  from '/home2/sheridantools/public_html/themes/autostore/modules/blockfacebook/views/templates/hook/blockfacebook.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e8d1a06c62f55_44030623',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b33c49c8ac841fcf9ef50424577b6c2e87e605c6' => 
    array (
      0 => '/home2/sheridantools/public_html/themes/autostore/modules/blockfacebook/views/templates/hook/blockfacebook.tpl',
      1 => 1581215595,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e8d1a06c62f55_44030623 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="fb-root"></div>
<div id="facebook_block" class="col-lg-4 links wrapper">
	<p class="h3 block-contact-title hidden-md-down"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quality Tools. Expert Training.','d'=>'Modules.Blockfacebook.Shop'),$_smarty_tpl ) );?>
</p>
	<a href="/"><img class="logo" src="/img/sheridan-tools-logo-1581129457.jpg"></a>
	<!--
	<div class="title clearfix hidden-lg-up" data-target="#facebook-fanbox" data-toggle="collapse">
	  <span class="h3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Follow us on Facebook','d'=>'Modules.Blockfacebook.Shop'),$_smarty_tpl ) );?>
</span>
	  <span class="pull-xs-right">
	    <span class="navbar-toggler collapse-icons">
	      <i class="material-icons add">&#xE313;</i>
	      <i class="material-icons remove">&#xE316;</i>
	    </span>
	  </span>
	</div>
	<div id="facebook-fanbox" class="facebook-fanbox collapse">
		<div class="fb-like-box" data-href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['facebookurl']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false">
		</div>
	</div>
	-->
</div>

<?php }
}
