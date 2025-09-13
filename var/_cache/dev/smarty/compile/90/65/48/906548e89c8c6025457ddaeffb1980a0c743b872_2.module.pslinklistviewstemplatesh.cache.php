<?php
/* Smarty version 3.1.33, created on 2020-03-13 21:06:21
  from 'module:pslinklistviewstemplatesh' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e6c2e0d2ab395_53434234',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '906548e89c8c6025457ddaeffb1980a0c743b872' => 
    array (
      0 => 'module:pslinklistviewstemplatesh',
      1 => 1581214907,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e6c2e0d2ab395_53434234 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '17282874995e6c2e0d29a2f6_87847967';
?>
<!-- begin /home2/sheridantools/dev.sheridantools.com/themes/autostore/modules/ps_linklist/views/templates/hook/linkblock.tpl --><div class="col-lg-5 links">
  <div class="row">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['linkBlocks']->value, 'linkBlock');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['linkBlock']->value) {
?>
    <?php if ($_smarty_tpl->tpl_vars['linkBlock']->value['hook'] == 'displayNav2') {?>
    <div id="_desktop_link_block">
    <?php }?>
    <div class="col-lg-6 wrapper">
      <p class="h3 hidden-md-down"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['linkBlock']->value['title'], ENT_QUOTES, 'UTF-8');?>
</p>
      <?php $_smarty_tpl->_assignInScope('_expand_id', mt_rand(10,100000));?>
      <div class="title clearfix hidden-lg-up" data-target="#footer_sub_menu_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-toggle="collapse">
        <span class="h3"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['linkBlock']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span>
        <span class="pull-xs-right">
          <span class="navbar-toggler collapse-icons">
            <i class="material-icons add">&#xE313;</i>
            <i class="material-icons remove">&#xE316;</i>
          </span>
        </span>
      </div>
      <ul id="footer_sub_menu_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="collapse">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['linkBlock']->value['links'], 'link');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
?>
          <li>
            <a
                id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['id'], ENT_QUOTES, 'UTF-8');?>
-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['linkBlock']->value['id'], ENT_QUOTES, 'UTF-8');?>
"
                class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['class'], ENT_QUOTES, 'UTF-8');?>
"
                href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['url'], ENT_QUOTES, 'UTF-8');?>
"
                title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['description'], ENT_QUOTES, 'UTF-8');?>
"
                <?php if (!empty($_smarty_tpl->tpl_vars['link']->value['target'])) {?> target="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['target'], ENT_QUOTES, 'UTF-8');?>
" <?php }?>
                >
                <?php if ($_smarty_tpl->tpl_vars['link']->value['title'] == 'Training') {?>
                <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['link']) ? $_smarty_tpl->tpl_vars['link']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array['title'] = 'Training Programs';
$_smarty_tpl->_assignInScope('link', $_tmp_array);?>
                <?php }?>
              <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['title'], ENT_QUOTES, 'UTF-8');?>

            </a>
          </li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    </div>
  <?php if ($_smarty_tpl->tpl_vars['linkBlock']->value['hook'] == 'displayNav2') {?>
  </div>
  <?php }?>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </div>
</div>

<!-- end /home2/sheridantools/dev.sheridantools.com/themes/autostore/modules/ps_linklist/views/templates/hook/linkblock.tpl --><?php }
}
