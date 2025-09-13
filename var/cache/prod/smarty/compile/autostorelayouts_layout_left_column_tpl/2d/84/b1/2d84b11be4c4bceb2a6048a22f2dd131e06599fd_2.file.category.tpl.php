<?php
/* Smarty version 4.5.5, created on 2025-09-12 23:30:06
  from '/home/sheridantools/public_html/themes/autostore/templates/catalog/_partials/miniatures/category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_68c4e53e8276c3_52779245',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d84b11be4c4bceb2a6048a22f2dd131e06599fd' => 
    array (
      0 => '/home/sheridantools/public_html/themes/autostore/templates/catalog/_partials/miniatures/category.tpl',
      1 => 1581212642,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68c4e53e8276c3_52779245 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_210276257068c4e53e81f870_21008121', 'category_miniature_item');
}
/* {block 'category_miniature_item'} */
class Block_210276257068c4e53e81f870_21008121 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'category_miniature_item' => 
  array (
    0 => 'Block_210276257068c4e53e81f870_21008121',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="category-miniature<?php if ($_smarty_tpl->tpl_vars['category']->value['image']['medium']['url']) {?> has-image<?php } else { ?> no-image<?php }?>">
    <?php if ($_smarty_tpl->tpl_vars['category']->value['image']['medium']['url']) {?>
    <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['category']->value['url']), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['category']->value['name']), ENT_QUOTES, 'UTF-8');?>
">
      <img src="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['category']->value['image']['medium']['url']), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['category']->value['image']['legend']), ENT_QUOTES, 'UTF-8');?>
">
    </a>
    <?php }?>
      <p class="h2">
        <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['category']->value['url']), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['category']->value['name']), ENT_QUOTES, 'UTF-8');?>
">
          <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['category']->value['name']), ENT_QUOTES, 'UTF-8');?>

        </a>
      </p>
      </div>
<?php
}
}
/* {/block 'category_miniature_item'} */
}
