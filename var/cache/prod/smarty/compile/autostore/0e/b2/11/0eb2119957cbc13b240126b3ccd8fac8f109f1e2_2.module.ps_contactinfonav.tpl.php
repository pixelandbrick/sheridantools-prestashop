<?php
/* Smarty version 4.5.5, created on 2025-09-12 23:31:34
  from 'module:ps_contactinfonav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_68c4e596185434_63817072',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0eb2119957cbc13b240126b3ccd8fac8f109f1e2' => 
    array (
      0 => 'module:ps_contactinfonav.tpl',
      1 => 1757732429,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68c4e596185434_63817072 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="_desktop_contact_link">
    <div class="header__contact dropdown-mobile">
        <span class="js-toggle btn-toggle-mobile font-phone hidden-lg-up"></span>
        <div class="js-toggle-list header__contact__list dropdown-toggle-mobile">

            <a class="header__contact__item" href="tel:<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['contact_infos']->value['phone']), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Contact us','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
">
                <i class="font-phone hidden-md-down"></i>
                <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['contact_infos']->value['phone']), ENT_QUOTES, 'UTF-8');?>

            </a>

            <?php if ((isset($_smarty_tpl->tpl_vars['display_email']->value))) {?>
                <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['email'] && $_smarty_tpl->tpl_vars['display_email']->value) {?>
                    <a class="header__contact__item" href="mailto:<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['contact_infos']->value['email']), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Contact us','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
" target="_blank">
                        <i class="font-envelope hidden-md-down"></i>
                        <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['contact_infos']->value['email']), ENT_QUOTES, 'UTF-8');?>

                    </a>
                <?php }?>
            <?php } else { ?>
                <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['email']) {?>
                    <a class="header__contact__item" href="mailto:<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['contact_infos']->value['email']), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Contact us','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
" target="_blank">
                        <i class="font-envelope hidden-md-down"></i>
                        <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['contact_infos']->value['email']), ENT_QUOTES, 'UTF-8');?>

                    </a>
                <?php }?>
            <?php }?>
                    </div>
    </div>
</div>
<?php }
}
