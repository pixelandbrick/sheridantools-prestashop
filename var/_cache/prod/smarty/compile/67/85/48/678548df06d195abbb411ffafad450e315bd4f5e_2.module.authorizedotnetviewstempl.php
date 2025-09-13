<?php
/* Smarty version 3.1.33, created on 2020-04-07 14:06:15
  from 'module:authorizedotnetviewstempl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e8cc11714ea43_26450109',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '678548df06d195abbb411ffafad450e315bd4f5e' => 
    array (
      0 => 'module:authorizedotnetviewstempl',
      1 => 1580954496,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:authorizedotnet/views/templates/front/aim_embedded_form.tpl' => 1,
    'module:authorizedotnet/views/templates/front/dpm_embedded_form.tpl' => 1,
  ),
),false)) {
function content_5e8cc11714ea43_26450109 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['adn_api']->value == 'aim') {?>
    <?php $_smarty_tpl->_subTemplateRender("module:authorizedotnet/views/templates/front/aim_embedded_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<?php if ($_smarty_tpl->tpl_vars['adn_api']->value == 'dpn') {?>    
    <!-- ACCEPT.js -->
    &nbsp;<?php echo '<script'; ?>
 type="text/javascript" src="https://js.authorize.net/v1/Accept.js" charset="utf-8"><?php echo '</script'; ?>
> 
    <?php $_smarty_tpl->_subTemplateRender("module:authorizedotnet/views/templates/front/dpm_embedded_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
echo '<script'; ?>
 type="text/javascript">
   var adn_payment_page = '<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['adn_payment_page']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
';    
<?php echo '</script'; ?>
>



<?php }
}
