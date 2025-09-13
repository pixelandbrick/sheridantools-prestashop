<?php
/* Smarty version 4.5.5, created on 2025-09-12 23:28:21
  from '/home/sheridantools/public_html/modules/ps_googleanalytics/views/templates/hook/ga_tag.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_68c4e4d5e73a84_18508158',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ff05ddd24d413864929004f466098a88af9c876' => 
    array (
      0 => '/home/sheridantools/public_html/modules/ps_googleanalytics/views/templates/hook/ga_tag.tpl',
      1 => 1738072594,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68c4e4d5e73a84_18508158 (Smarty_Internal_Template $_smarty_tpl) {
if ((!empty($_smarty_tpl->tpl_vars['jsCode']->value))) {
echo '<script'; ?>
 type="text/javascript">
      document.addEventListener('DOMContentLoaded', function() {
        <?php echo $_smarty_tpl->tpl_vars['jsCode']->value;?>

      });
<?php echo '</script'; ?>
>
<?php }
}
}
