<?php
/* Smarty version 3.1.33, created on 2020-04-07 20:11:13
  from '/home2/sheridantools/public_html/themes/autostore/templates/catalog/_partials/miniatures/category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e8d16a1c448d4_36415131',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7cbfe2cdb8b0224e3f26d6c75567e6661d77cdd0' => 
    array (
      0 => '/home2/sheridantools/public_html/themes/autostore/templates/catalog/_partials/miniatures/category.tpl',
      1 => 1581212642,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e8d16a1c448d4_36415131 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17472979765e8d16a1c3f5c8_03263813', 'category_miniature_item');
}
/* {block 'category_miniature_item'} */
class Block_17472979765e8d16a1c3f5c8_03263813 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'category_miniature_item' => 
  array (
    0 => 'Block_17472979765e8d16a1c3f5c8_03263813',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="category-miniature<?php if ($_smarty_tpl->tpl_vars['category']->value['image']['medium']['url']) {?> has-image<?php } else { ?> no-image<?php }?>">
    <?php if ($_smarty_tpl->tpl_vars['category']->value['image']['medium']['url']) {?>
    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
      <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['medium']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['legend'], ENT_QUOTES, 'UTF-8');?>
">
    </a>
    <?php }?>
      <p class="h2">
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
          <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');?>

        </a>
      </p>
      </div>
<?php
}
}
/* {/block 'category_miniature_item'} */
}
