<?php
/* Smarty version 4.5.5, created on 2025-09-12 23:30:05
  from '/home/sheridantools/public_html/themes/autostore/templates/catalog/listing/category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_68c4e53d806649_27880477',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f94343778c5000a63d1147826d969b07d9a3c63' => 
    array (
      0 => '/home/sheridantools/public_html/themes/autostore/templates/catalog/listing/category.tpl',
      1 => 1580954804,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68c4e53d806649_27880477 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_138338913568c4e53d7fd039_89795074', 'product_list_header');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'catalog/listing/product-list.tpl');
}
/* {block 'product_list_header'} */
class Block_138338913568c4e53d7fd039_89795074 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_list_header' => 
  array (
    0 => 'Block_138338913568c4e53d7fd039_89795074',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="block-category">
      <h1 class="h1"><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['category']->value['name']), ENT_QUOTES, 'UTF-8');?>
</h1>
      <?php if ($_smarty_tpl->tpl_vars['category']->value['description']) {?>
        <div id="category-description" class="rte text-muted"><?php echo $_smarty_tpl->tpl_vars['category']->value['description'];?>
</div>
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['category']->value['image']['large']['url']) {?>
        <div class="category-cover">
          <img src="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['category']->value['image']['large']['url']), ENT_QUOTES, 'UTF-8');?>
" alt="<?php if (!empty($_smarty_tpl->tpl_vars['category']->value['image']['legend'])) {
echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['category']->value['image']['legend']), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['category']->value['name']), ENT_QUOTES, 'UTF-8');
}?>">
        </div>
       <?php }?>
    </div>
<?php
}
}
/* {/block 'product_list_header'} */
}
