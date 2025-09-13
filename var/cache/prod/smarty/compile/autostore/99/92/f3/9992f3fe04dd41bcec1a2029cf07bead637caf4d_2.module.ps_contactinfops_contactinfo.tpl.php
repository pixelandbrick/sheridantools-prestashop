<?php
/* Smarty version 4.5.5, created on 2025-09-12 23:31:34
  from 'module:ps_contactinfops_contactinfo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_68c4e596231fe6_63113570',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9992f3fe04dd41bcec1a2029cf07bead637caf4d' => 
    array (
      0 => 'module:ps_contactinfops_contactinfo.tpl',
      1 => 1757732429,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68c4e596231fe6_63113570 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="block-contact links wrapper">
  <p class="h3 text-uppercase block-contact-title hidden-md-down"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Contact Info','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</p>
  <div class="title clearfix hidden-lg-up" data-target="#footer_contact" data-toggle="collapse">
    <span class="h3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Contact information','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
    <span class="pull-xs-right">
      <span class="navbar-toggler collapse-icons">
        <i class="material-icons add">&#xE313;</i>
        <i class="material-icons remove">&#xE316;</i>
      </span>
    </span>
  </div>
  <ul id="footer_contact" class="collapse">
    <li class="item-address"><?php echo $_smarty_tpl->tpl_vars['contact_infos']->value['address']['formatted'];?>
</li>

        <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['email']) {?>
          <li class="e-mail">
            <a href="mailto:<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['contact_infos']->value['email']), ENT_QUOTES, 'UTF-8');?>
" target="_blank" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Contact us','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
">
               <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['contact_infos']->value['email']), ENT_QUOTES, 'UTF-8');?>

            </a>
          </li>
        <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['phone']) {?>
    <li class="phone">
        <a href="tel:<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['contact_infos']->value['phone']), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Contact us','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
">
            <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['contact_infos']->value['phone']), ENT_QUOTES, 'UTF-8');?>

        </a>
    </li>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['fax']) {?>
    <li class="fax">
      <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['contact_infos']->value['fax']), ENT_QUOTES, 'UTF-8');?>

    </li>
    <?php }?>
  </ul>
</div><?php }
}
