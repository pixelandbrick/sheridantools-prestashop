<?php
/* Smarty version 3.1.33, created on 2020-03-13 21:06:21
  from 'module:htmlbanners7viewstemplate' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e6c2e0d32f3c2_09323056',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9645f8603387eaf3e64a383718699cac54c29d1e' => 
    array (
      0 => 'module:htmlbanners7viewstemplate',
      1 => 1580954804,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e6c2e0d32f3c2_09323056 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '14852744955e6c2e0d329e25_72222204';
?>
<!-- begin /home2/sheridantools/dev.sheridantools.com/themes/autostore/modules/htmlbanners7/views/templates/hook/hook.tpl -->
<?php if ($_smarty_tpl->tpl_vars['htmlbanners7']->value['slides']) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['htmlbanners7']->value['slides'], 'slide', false, NULL, 'htmlbanners7', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->value) {
?>
      <div class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['customclass'], ENT_QUOTES, 'UTF-8');?>
">
            <?php if ($_smarty_tpl->tpl_vars['slide']->value['description']) {?>
                <?php echo $_smarty_tpl->tpl_vars['slide']->value['description'];?>

            <?php }?>
      </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>

<!-- end /home2/sheridantools/dev.sheridantools.com/themes/autostore/modules/htmlbanners7/views/templates/hook/hook.tpl --><?php }
}
