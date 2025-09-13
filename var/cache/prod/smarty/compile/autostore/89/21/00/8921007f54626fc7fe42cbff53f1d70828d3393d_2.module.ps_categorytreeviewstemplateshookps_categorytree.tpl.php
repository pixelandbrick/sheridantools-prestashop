<?php
/* Smarty version 4.5.5, created on 2025-09-12 23:30:05
  from 'module:ps_categorytreeviewstemplateshookps_categorytree.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_68c4e53dcbd947_65984555',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8921007f54626fc7fe42cbff53f1d70828d3393d' => 
    array (
      0 => 'module:ps_categorytreeviewstemplateshookps_categorytree.tpl',
      1 => 1581218790,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68c4e53dcbd947_65984555 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'categories' => 
  array (
    'compiled_filepath' => '/home/sheridantools/public_html/var/cache/prod/smarty/compile/autostore/89/21/00/8921007f54626fc7fe42cbff53f1d70828d3393d_2.module.ps_categorytreeviewstemplateshookps_categorytree.tpl.php',
    'uid' => '8921007f54626fc7fe42cbff53f1d70828d3393d',
    'call_name' => 'smarty_template_function_categories_6674773268c4e53dc9fca7_56288678',
  ),
));
?>


<div class="block-categories">
<?php if ($_smarty_tpl->tpl_vars['categories']->value['name'] == 'Shop Tools') {
$_tmp_array = isset($_smarty_tpl->tpl_vars['categories']) ? $_smarty_tpl->tpl_vars['categories']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['name'] = 'Home';
$_smarty_tpl->_assignInScope('categories', $_tmp_array);
}?>
  <ul class="category-top-menu">
    <li><a class="text-uppercase h6" href="<?php echo $_smarty_tpl->tpl_vars['categories']->value['link'];?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['categories']->value['name']), ENT_QUOTES, 'UTF-8');?>
</a></li>
    <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'categories', array('nodes'=>$_smarty_tpl->tpl_vars['categories']->value['children']), true);?>
</li>
  </ul>
</div>
<?php }
/* smarty_template_function_categories_6674773268c4e53dc9fca7_56288678 */
if (!function_exists('smarty_template_function_categories_6674773268c4e53dc9fca7_56288678')) {
function smarty_template_function_categories_6674773268c4e53dc9fca7_56288678(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('nodes'=>array(),'depth'=>0), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/sheridantools/public_html/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
?>

  <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['nodes']->value)) {?><ul class="category-sub-menu"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nodes']->value, 'node');
$_smarty_tpl->tpl_vars['node']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['node']->value) {
$_smarty_tpl->tpl_vars['node']->do_else = false;
?><li data-depth="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['depth']->value), ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['depth']->value === 0) {?><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['node']->value['link']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['node']->value['name']), ENT_QUOTES, 'UTF-8');?>
</a><?php if ($_smarty_tpl->tpl_vars['node']->value['children']) {?><div class="navbar-toggler collapse-icons" data-toggle="collapse" data-target="#exCollapsingNavbar<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['node']->value['id']), ENT_QUOTES, 'UTF-8');?>
"><i class="material-icons add">keyboard_arrow_down</i><i class="material-icons remove">keyboard_arrow_up</i></div><div class="collapse" id="exCollapsingNavbar<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['node']->value['id']), ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'categories', array('nodes'=>$_smarty_tpl->tpl_vars['node']->value['children'],'depth'=>$_smarty_tpl->tpl_vars['depth']->value+1), true);?>
</div><?php }
} else { ?><a class="category-sub-link" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['node']->value['link']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['node']->value['name']), ENT_QUOTES, 'UTF-8');?>
</a><?php if ($_smarty_tpl->tpl_vars['node']->value['children']) {?><span class="arrows" data-toggle="collapse" data-target="#exCollapsingNavbar<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['node']->value['id']), ENT_QUOTES, 'UTF-8');?>
"><i class="material-icons arrow-down">keyboard_arrow_down</i><i class="material-icons arrow-up">keyboard_arrow_up</i></span><div class="collapse" id="exCollapsingNavbar<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['node']->value['id']), ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'categories', array('nodes'=>$_smarty_tpl->tpl_vars['node']->value['children'],'depth'=>$_smarty_tpl->tpl_vars['depth']->value+1), true);?>
</div><?php }
}?></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul><?php }
}}
/*/ smarty_template_function_categories_6674773268c4e53dc9fca7_56288678 */
}
