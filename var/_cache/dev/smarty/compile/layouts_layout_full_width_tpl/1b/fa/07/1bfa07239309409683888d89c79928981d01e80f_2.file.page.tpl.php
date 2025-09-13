<?php
/* Smarty version 3.1.33, created on 2020-03-13 21:44:00
  from '/home2/sheridantools/dev.sheridantools.com/themes/autostore/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e6c36e0a80847_54658601',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1bfa07239309409683888d89c79928981d01e80f' => 
    array (
      0 => '/home2/sheridantools/dev.sheridantools.com/themes/autostore/templates/page.tpl',
      1 => 1580954804,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e6c36e0a80847_54658601 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15156528125e6c36e0a789c4_27034554', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_19672338575e6c36e0a79a46_08618128 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_3442837645e6c36e0a79100_80201478 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19672338575e6c36e0a79a46_08618128', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_8000637575e6c36e0a7d8c6_26119548 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_7822844265e6c36e0a7e158_13948154 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_14149623315e6c36e0a7d153_77171076 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8000637575e6c36e0a7d8c6_26119548', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7822844265e6c36e0a7e158_13948154', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_6623617885e6c36e0a7f7d2_55307245 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_19486024695e6c36e0a7f0e2_37568429 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6623617885e6c36e0a7f7d2_55307245', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_15156528125e6c36e0a789c4_27034554 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_15156528125e6c36e0a789c4_27034554',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_3442837645e6c36e0a79100_80201478',
  ),
  'page_title' => 
  array (
    0 => 'Block_19672338575e6c36e0a79a46_08618128',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_14149623315e6c36e0a7d153_77171076',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_8000637575e6c36e0a7d8c6_26119548',
  ),
  'page_content' => 
  array (
    0 => 'Block_7822844265e6c36e0a7e158_13948154',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_19486024695e6c36e0a7f0e2_37568429',
  ),
  'page_footer' => 
  array (
    0 => 'Block_6623617885e6c36e0a7f7d2_55307245',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3442837645e6c36e0a79100_80201478', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14149623315e6c36e0a7d153_77171076', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19486024695e6c36e0a7f0e2_37568429', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
