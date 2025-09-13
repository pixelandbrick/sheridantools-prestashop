<?php
/* Smarty version 3.1.33, created on 2020-04-07 20:31:31
  from 'module:htmlbanners6viewstemplate' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e8d1b63af4468_44978275',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2e67fc712058275cacf1a6447ad0e84f03aca83' => 
    array (
      0 => 'module:htmlbanners6viewstemplate',
      1 => 1580954804,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e8d1b63af4468_44978275 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['htmlbanners6']->value['slides']) {?>
  <style>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['htmlbanners6']->value['slides'], 'slide', false, NULL, 'htmlbanners6', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->value) {
?>
    <?php if ($_smarty_tpl->tpl_vars['slide']->value['customclass'] && $_smarty_tpl->tpl_vars['slide']->value['image_url']) {
echo $_smarty_tpl->tpl_vars['slide']->value['customclass'];?>
 {
    background-image: url(<?php echo $_smarty_tpl->tpl_vars['slide']->value['image_url'];?>
);
    background-position: 50% 50%;
    background-repeat: no-repeat;
    -webkit-background-size: cover;
    background-size: cover;
}
    <?php }?>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </style>
<?php }?>


<?php }
}
