<?php
/* Smarty version 4.5.5, created on 2025-09-12 23:31:34
  from 'module:ps_currencyselectorps_currencyselector.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_68c4e5961332c9_72998473',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b97756c07f8c7dd53da6530f78f67ddd242f77c9' => 
    array (
      0 => 'module:ps_currencyselectorps_currencyselector.tpl',
      1 => 1757732429,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68c4e5961332c9_72998473 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="_desktop_currency_selector">
  <div class="currency-selector dropdown js-dropdown">
    <span class="hidden-lg-up"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Currency:','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
    <span class="expand-more _gray-darker hidden-md-down" data-toggle="dropdown">
      <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['current_currency']->value['iso_code']), ENT_QUOTES, 'UTF-8');?>
     </span>
    <a data-target="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="hidden-md-down">
      <i class="font-down-open-big"></i>
    </a>
    <ul class="dropdown-menu hidden-md-down" aria-labelledby="dLabel">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies']->value, 'currency');
$_smarty_tpl->tpl_vars['currency']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->do_else = false;
?>
        <li <?php if ($_smarty_tpl->tpl_vars['currency']->value['current']) {?> class="current" <?php }?>>
          <a title="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['currency']->value['name']), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['currency']->value['url']), ENT_QUOTES, 'UTF-8');?>
" class="dropdown-item">
          <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['currency']->value['iso_code']), ENT_QUOTES, 'UTF-8');?>

                    </a>
        </li>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
    <select class="link hidden-lg-up">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies']->value, 'currency');
$_smarty_tpl->tpl_vars['currency']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->do_else = false;
?>
        <option value="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['currency']->value['url']), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['currency']->value['current']) {?> selected="selected"<?php }?>>
                <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['currency']->value['sign']), ENT_QUOTES, 'UTF-8');?>

        </option>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
  </div>
</div>
<?php }
}
