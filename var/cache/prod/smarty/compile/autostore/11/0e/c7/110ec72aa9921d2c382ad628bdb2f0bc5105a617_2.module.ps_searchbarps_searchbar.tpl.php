<?php
/* Smarty version 4.5.5, created on 2025-09-12 23:31:34
  from 'module:ps_searchbarps_searchbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_68c4e596142191_68933905',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '110ec72aa9921d2c382ad628bdb2f0bc5105a617' => 
    array (
      0 => 'module:ps_searchbarps_searchbar.tpl',
      1 => 1757732429,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68c4e596142191_68933905 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Block search module TOP -->
<div id="_desktop_search_bar">
	<input id="toggle-search" type="checkbox" class="no-style">
	<div id="search_widget" data-search-controller-url="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['search_controller_url']->value), ENT_QUOTES, 'UTF-8');?>
">
		<div class="search-bar">
			<form class="search-bar__wrap" method="get" action="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['search_controller_url']->value), ENT_QUOTES, 'UTF-8');?>
">
				<input type="hidden" name="controller" value="search">
				<input class="search-bar__text" type="text" name="s" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['search_string']->value), ENT_QUOTES, 'UTF-8');?>
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
