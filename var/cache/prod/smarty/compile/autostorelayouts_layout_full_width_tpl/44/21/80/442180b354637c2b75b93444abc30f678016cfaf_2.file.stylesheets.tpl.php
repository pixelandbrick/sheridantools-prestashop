<?php
/* Smarty version 4.5.5, created on 2025-09-12 23:28:21
  from '/home/sheridantools/public_html/themes/autostore/templates/_partials/stylesheets.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_68c4e4d5b7c5a1_29224879',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '442180b354637c2b75b93444abc30f678016cfaf' => 
    array (
      0 => '/home/sheridantools/public_html/themes/autostore/templates/_partials/stylesheets.tpl',
      1 => 1581172478,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68c4e4d5b7c5a1_29224879 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stylesheets']->value['external'], 'stylesheet');
$_smarty_tpl->tpl_vars['stylesheet']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['stylesheet']->value) {
$_smarty_tpl->tpl_vars['stylesheet']->do_else = false;
?>
  <link rel="stylesheet" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['stylesheet']->value['uri']), ENT_QUOTES, 'UTF-8');?>
" type="text/css" media="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['stylesheet']->value['media']), ENT_QUOTES, 'UTF-8');?>
">
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stylesheets']->value['inline'], 'stylesheet');
$_smarty_tpl->tpl_vars['stylesheet']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['stylesheet']->value) {
$_smarty_tpl->tpl_vars['stylesheet']->do_else = false;
?>
  <style>
    <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['stylesheet']->value['content']), ENT_QUOTES, 'UTF-8');?>

  </style>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
