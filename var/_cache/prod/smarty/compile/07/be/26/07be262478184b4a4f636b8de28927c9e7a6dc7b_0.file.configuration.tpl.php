<?php
/* Smarty version 3.1.33, created on 2020-04-07 11:24:36
  from '/home2/sheridantools/public_html/modules/ganalytics/views/templates/admin/configuration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e8c9b347fb526_01140038',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '07be262478184b4a4f636b8de28927c9e7a6dc7b' => 
    array (
      0 => '/home2/sheridantools/public_html/modules/ganalytics/views/templates/admin/configuration.tpl',
      1 => 1580954739,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e8c9b347fb526_01140038 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="panel">
	<div class="row" id="google_analytics_top">
		<div class="col-lg-6">
			<img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'html','UTF-8' ));?>
views/img/ga_logo.png" alt="Google Analytics" />
		</div>
		<div class="col-lg-6 text-right">
			<a href="https://support.google.com/analytics/answer/1008015" rel="external"><img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'html','UTF-8' ));?>
views/img/create_account_btn.png" alt="" /></a>
		</div>
	</div>
	<hr/>
	<div id="google_analytics_content">
		<div class="row">
			<div class="col-lg-6">
				<p>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your customers go everywhere; shouldn\'t your analytics.','mod'=>'ganalytics'),$_smarty_tpl ) );?>

				</p><p>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Google Analytics shows you the full customer picture across ads and videos, websites and social tools, tables and smartphones. That makes it easier to serve your current customers and win new ones.','mod'=>'ganalytics'),$_smarty_tpl ) );?>

				</p>
				<p><b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'With ecommerce functionality in Google Analytics you can gain clear insight into important metrics about shopper behavior and conversion, including:','mod'=>'ganalytics'),$_smarty_tpl ) );?>
</b></p>
				<div id="advantages_list">
					<div class="col-xs-6"><img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'html','UTF-8' ));?>
views/img/product_detail_icon.png" alt="" /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product detail views','mod'=>'ganalytics'),$_smarty_tpl ) );?>
</div>
					<div class="col-xs-6"><img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'html','UTF-8' ));?>
views/img/merchandising_tools_icon.png" alt="" /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Internal merchandising Success','mod'=>'ganalytics'),$_smarty_tpl ) );?>
</div>
					<div class="col-xs-6"><img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'html','UTF-8' ));?>
views/img/add_to_cart_icon.png" alt="" /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'"Add to cart" actions','mod'=>'ganalytics'),$_smarty_tpl ) );?>
</div>
					<div class="col-xs-6"><img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'html','UTF-8' ));?>
views/img/checkout_icon.png" alt="" /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The checkout process','mod'=>'ganalytics'),$_smarty_tpl ) );?>
</div>
					<div class="col-xs-6"><img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'html','UTF-8' ));?>
views/img/campaign_clicks_icon.png" alt="" /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Internal campaign clicks','mod'=>'ganalytics'),$_smarty_tpl ) );?>
</div>
					<div class="col-xs-6"><img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'html','UTF-8' ));?>
views/img/purchase_icon.png" alt="" /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'And purchase','mod'=>'ganalytics'),$_smarty_tpl ) );?>
</div>
				</div>
			</div>
			<div class="col-lg-6 text-center">
				<p>
					<img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'html','UTF-8' ));?>
views/img/stats.png" alt="" /><br />
					<span class="small"><em><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Merchants are able to understand how far along users get in the buying process and where they are dropping off.','mod'=>'ganalytics'),$_smarty_tpl ) );?>
</em></span>
				</p>
				<p class="text-right">
					<b><a href="https://support.google.com/analytics/answer/1008015" rel="external"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create your account to get started.','mod'=>'ganalytics'),$_smarty_tpl ) );?>
</a></b>
				</p>
			</div>
		</div>
	</div>
</div>
<?php }
}
