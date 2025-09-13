<?php
/* Smarty version 3.1.33, created on 2020-04-07 19:42:32
  from '/home2/sheridantools/public_html/themes/autostore/templates/_partials/pagination.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e8d0fe82fa645_21614157',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a4b2f69b063c8724854a6afc1d1b01f22511aa4f' => 
    array (
      0 => '/home2/sheridantools/public_html/themes/autostore/templates/_partials/pagination.tpl',
      1 => 1580954804,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e8d0fe82fa645_21614157 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<nav class="pagination">
      <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Pages','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</label>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13263757685e8d0fe82f06e0_96983678', 'pagination_page_list');
?>


</nav>
<?php }
/* {block 'pagination_page_list'} */
class Block_13263757685e8d0fe82f06e0_96983678 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pagination_page_list' => 
  array (
    0 => 'Block_13263757685e8d0fe82f06e0_96983678',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <ul class="page-list clearfix text-xs-center">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pagination']->value['pages'], 'page');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
?>
          <li <?php if ($_smarty_tpl->tpl_vars['page']->value['current']) {?> class="current" <?php }?>>
            <?php if ($_smarty_tpl->tpl_vars['page']->value['type'] === 'spacer') {?>
              <span class="spacer">&hellip;</span>
            <?php } else { ?>
              <a
                rel="<?php if ($_smarty_tpl->tpl_vars['page']->value['type'] === 'previous') {?>prev<?php } elseif ($_smarty_tpl->tpl_vars['page']->value['type'] === 'next') {?>next<?php } else { ?>nofollow<?php }?>"
                href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['url'], ENT_QUOTES, 'UTF-8');?>
"
                class="<?php if ($_smarty_tpl->tpl_vars['page']->value['type'] === 'previous') {?>previous <?php } elseif ($_smarty_tpl->tpl_vars['page']->value['type'] === 'next') {?>next <?php }
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( array('disabled'=>!$_smarty_tpl->tpl_vars['page']->value['clickable'],'js-search-link'=>true) )), ENT_QUOTES, 'UTF-8');?>
"
              >
                <?php if ($_smarty_tpl->tpl_vars['page']->value['type'] === 'previous') {?>
                  <i class="material-icons">&#xE314;</i>                <?php } elseif ($_smarty_tpl->tpl_vars['page']->value['type'] === 'next') {?>
                  <i class="material-icons">&#xE315;</i>
                <?php } else { ?>
                  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page'], ENT_QUOTES, 'UTF-8');?>

                <?php }?>
              </a>
            <?php }?>
          </li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    <?php
}
}
/* {/block 'pagination_page_list'} */
}
