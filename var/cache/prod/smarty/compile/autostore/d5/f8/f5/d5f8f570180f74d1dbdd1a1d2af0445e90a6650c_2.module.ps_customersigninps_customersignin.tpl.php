<?php
/* Smarty version 4.5.5, created on 2025-09-12 23:31:34
  from 'module:ps_customersigninps_customersignin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_68c4e596198178_79937407',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5f8f570180f74d1dbdd1a1d2af0445e90a6650c' => 
    array (
      0 => 'module:ps_customersigninps_customersignin.tpl',
      1 => 1757732429,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68c4e596198178_79937407 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="_desktop_user_info">
    <div class="header_user_info dropdown-mobile">
      <span class="js-toggle btn-toggle-mobile font-user hidden-lg-up"></span>
      <div class="js-toggle-list header_user_info__list dropdown-toggle-mobile">
        <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
          <a
            class="logout "
            href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['logout_url']->value), ENT_QUOTES, 'UTF-8');?>
"
            rel="nofollow"
            title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign out','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"
          >
            <i class="material-icons hidden-md-down">lock_open</i>
            <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign out','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
          </a>
          <a
            class="account"
            href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['my_account_url']->value), ENT_QUOTES, 'UTF-8');?>
"
            title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View my customer account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
"
            rel="nofollow"
          >
            <i class="font-user hidden-md-down"></i>
            <span><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['customerName']->value), ENT_QUOTES, 'UTF-8');?>
</span>
          </a>
        <?php } else { ?>
          <a
            href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['my_account_url']->value), ENT_QUOTES, 'UTF-8');?>
"
            title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log in to your customer account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
"
            rel="nofollow"
          >
            <i class="font-sign-in hidden-md-down"></i>
            <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
          </a>
                  <?php }?>
      </div>
  </div>
</div>
<?php }
}
