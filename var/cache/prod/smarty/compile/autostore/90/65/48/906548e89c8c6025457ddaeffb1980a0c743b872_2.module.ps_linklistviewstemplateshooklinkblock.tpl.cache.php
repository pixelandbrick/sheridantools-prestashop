<?php
/* Smarty version 4.5.5, created on 2025-09-12 23:31:34
  from 'module:ps_linklistviewstemplateshooklinkblock.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_68c4e596220392_20685064',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '906548e89c8c6025457ddaeffb1980a0c743b872' => 
    array (
      0 => 'module:ps_linklistviewstemplateshooklinkblock.tpl',
      1 => 1757732429,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68c4e596220392_20685064 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '128454444568c4e596212983_07646520';
?>
<div class="col-lg-5 links">
  <div class="row">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['linkBlocks']->value, 'linkBlock');
$_smarty_tpl->tpl_vars['linkBlock']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['linkBlock']->value) {
$_smarty_tpl->tpl_vars['linkBlock']->do_else = false;
?>
    <?php if ($_smarty_tpl->tpl_vars['linkBlock']->value['hook'] == 'displayNav2') {?>
    <div id="_desktop_link_block">
    <?php }?>
    <div class="col-lg-6 wrapper">
      <p class="h3 hidden-md-down"><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['linkBlock']->value['title']), ENT_QUOTES, 'UTF-8');?>
</p>
      <?php $_smarty_tpl->_assignInScope('_expand_id', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'mt_rand' ][ 0 ], array( 10,100000 )));?>
      <div class="title clearfix hidden-lg-up" data-target="#footer_sub_menu_<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['_expand_id']->value), ENT_QUOTES, 'UTF-8');?>
" data-toggle="collapse">
        <span class="h3"><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['linkBlock']->value['title']), ENT_QUOTES, 'UTF-8');?>
</span>
        <span class="pull-xs-right">
          <span class="navbar-toggler collapse-icons">
            <i class="material-icons add">&#xE313;</i>
            <i class="material-icons remove">&#xE316;</i>
          </span>
        </span>
      </div>
      <ul id="footer_sub_menu_<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['_expand_id']->value), ENT_QUOTES, 'UTF-8');?>
" class="collapse">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['linkBlock']->value['links'], 'link');
$_smarty_tpl->tpl_vars['link']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->do_else = false;
?>
          <li>
            <a
                id="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['link']->value['id']), ENT_QUOTES, 'UTF-8');?>
-<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['linkBlock']->value['id']), ENT_QUOTES, 'UTF-8');?>
"
                class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['link']->value['class']), ENT_QUOTES, 'UTF-8');?>
"
                href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['link']->value['url']), ENT_QUOTES, 'UTF-8');?>
"
                title="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['link']->value['description']), ENT_QUOTES, 'UTF-8');?>
"
                <?php if (!empty($_smarty_tpl->tpl_vars['link']->value['target'])) {?> target="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['link']->value['target']), ENT_QUOTES, 'UTF-8');?>
" <?php }?>
                >
                <?php if ($_smarty_tpl->tpl_vars['link']->value['title'] == 'Training') {?>
                <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['link']) ? $_smarty_tpl->tpl_vars['link']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['title'] = 'Training Programs';
$_smarty_tpl->_assignInScope('link', $_tmp_array);?>
                <?php }?>
              <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['link']->value['title']), ENT_QUOTES, 'UTF-8');?>

            </a>
          </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    </div>
  <?php if ($_smarty_tpl->tpl_vars['linkBlock']->value['hook'] == 'displayNav2') {?>
  </div>
  <?php }?>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </div>
</div>

<?php }
}
