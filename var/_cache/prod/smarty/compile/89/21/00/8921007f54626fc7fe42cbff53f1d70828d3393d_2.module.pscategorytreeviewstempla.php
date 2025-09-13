<?php
/* Smarty version 3.1.33, created on 2020-04-07 20:11:13
  from 'module:pscategorytreeviewstempla' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e8d16a1973aa5_01079040',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8921007f54626fc7fe42cbff53f1d70828d3393d' => 
    array (
      0 => 'module:pscategorytreeviewstempla',
      1 => 1581218791,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e8d16a1973aa5_01079040 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'categories' => 
  array (
    'compiled_filepath' => '/home2/sheridantools/public_html/var/cache/prod/smarty/compile/89/21/00/8921007f54626fc7fe42cbff53f1d70828d3393d_2.module.pscategorytreeviewstempla.php',
    'uid' => '8921007f54626fc7fe42cbff53f1d70828d3393d',
    'call_name' => 'smarty_template_function_categories_13145921305e8d16a1961711_14017686',
  ),
));
?>


<div class="block-categories">
<?php if ($_smarty_tpl->tpl_vars['categories']->value['name'] == 'Shop Tools') {
$_tmp_array = isset($_smarty_tpl->tpl_vars['categories']) ? $_smarty_tpl->tpl_vars['categories']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array['name'] = 'Home';
$_smarty_tpl->_assignInScope('categories', $_tmp_array);
}?>
  <ul class="category-top-menu">
    <li><a class="text-uppercase h6" href="<?php echo $_smarty_tpl->tpl_vars['categories']->value['link'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categories']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a></li>
    <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'categories', array('nodes'=>$_smarty_tpl->tpl_vars['categories']->value['children']), true);?>
</li>
  </ul>
</div>
<?php }
/* smarty_template_function_categories_13145921305e8d16a1961711_14017686 */
if (!function_exists('smarty_template_function_categories_13145921305e8d16a1961711_14017686')) {
function smarty_template_function_categories_13145921305e8d16a1961711_14017686(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('nodes'=>array(),'depth'=>0), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <?php if (count($_smarty_tpl->tpl_vars['nodes']->value)) {?><ul class="category-sub-menu"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nodes']->value, 'node');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['node']->value) {
?><li data-depth="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['depth']->value, ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['depth']->value === 0) {?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['link'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a><?php if ($_smarty_tpl->tpl_vars['node']->value['children']) {?><div class="navbar-toggler collapse-icons" data-toggle="collapse" data-target="#exCollapsingNavbar<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['id'], ENT_QUOTES, 'UTF-8');?>
"><i class="material-icons add">keyboard_arrow_down</i><i class="material-icons remove">keyboard_arrow_up</i></div><div class="collapse" id="exCollapsingNavbar<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['id'], ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'categories', array('nodes'=>$_smarty_tpl->tpl_vars['node']->value['children'],'depth'=>$_smarty_tpl->tpl_vars['depth']->value+1), true);?>
</div><?php }
} else { ?><a class="category-sub-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['link'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a><?php if ($_smarty_tpl->tpl_vars['node']->value['children']) {?><span class="arrows" data-toggle="collapse" data-target="#exCollapsingNavbar<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['id'], ENT_QUOTES, 'UTF-8');?>
"><i class="material-icons arrow-down">keyboard_arrow_down</i><i class="material-icons arrow-up">keyboard_arrow_up</i></span><div class="collapse" id="exCollapsingNavbar<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['id'], ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'categories', array('nodes'=>$_smarty_tpl->tpl_vars['node']->value['children'],'depth'=>$_smarty_tpl->tpl_vars['depth']->value+1), true);?>
</div><?php }
}?></li><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul><?php }
}}
/*/ smarty_template_function_categories_13145921305e8d16a1961711_14017686 */
}
