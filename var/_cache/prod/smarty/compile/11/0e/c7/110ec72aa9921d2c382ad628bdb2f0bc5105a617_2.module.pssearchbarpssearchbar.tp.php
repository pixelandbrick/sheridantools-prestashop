<?php
/* Smarty version 3.1.33, created on 2020-04-07 20:31:31
  from 'module:pssearchbarpssearchbar.tp' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e8d1b63aa80e0_96291699',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '110ec72aa9921d2c382ad628bdb2f0bc5105a617' => 
    array (
      0 => 'module:pssearchbarpssearchbar.tp',
      1 => 1580954804,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e8d1b63aa80e0_96291699 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Block search module TOP -->
<div id="_desktop_search_bar">
	<input id="toggle-search" type="checkbox" class="no-style">
	<div id="search_widget" data-search-controller-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
">
		<div class="search-bar">
			<form class="search-bar__wrap" method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
">
				<input type="hidden" name="controller" value="search">
				<input class="search-bar__text" type="text" name="s" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_string']->value, ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search...','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
">
				<button class="search-bar__btn font-search" type="submit"></button>
				<span class="search-close"></span>
			</form>
		</div>
	</div>
</div>
<!-- /Block search module TOP -->
<?php }
}
