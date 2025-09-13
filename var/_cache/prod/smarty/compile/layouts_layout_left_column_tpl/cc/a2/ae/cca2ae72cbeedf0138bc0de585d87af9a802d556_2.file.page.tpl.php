<?php
/* Smarty version 3.1.33, created on 2020-04-07 19:11:24
  from '/home2/sheridantools/public_html/themes/autostore/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e8d089c0d95d1_85441483',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cca2ae72cbeedf0138bc0de585d87af9a802d556' => 
    array (
      0 => '/home2/sheridantools/public_html/themes/autostore/templates/page.tpl',
      1 => 1580954804,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e8d089c0d95d1_85441483 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2136653065e8d089c0ccea2_02021936', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_11599495815e8d089c0cef29_75636589 extends Smarty_Internal_Block
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
class Block_20584677145e8d089c0cdec2_97126324 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11599495815e8d089c0cef29_75636589', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_16697932445e8d089c0d4098_02492233 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_5232767285e8d089c0d5089_04476028 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_8669900855e8d089c0d33b0_70677987 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16697932445e8d089c0d4098_02492233', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5232767285e8d089c0d5089_04476028', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_9176300665e8d089c0d7570_77577957 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_16280175485e8d089c0d6991_11671993 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9176300665e8d089c0d7570_77577957', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_2136653065e8d089c0ccea2_02021936 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2136653065e8d089c0ccea2_02021936',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_20584677145e8d089c0cdec2_97126324',
  ),
  'page_title' => 
  array (
    0 => 'Block_11599495815e8d089c0cef29_75636589',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_8669900855e8d089c0d33b0_70677987',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_16697932445e8d089c0d4098_02492233',
  ),
  'page_content' => 
  array (
    0 => 'Block_5232767285e8d089c0d5089_04476028',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_16280175485e8d089c0d6991_11671993',
  ),
  'page_footer' => 
  array (
    0 => 'Block_9176300665e8d089c0d7570_77577957',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20584677145e8d089c0cdec2_97126324', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8669900855e8d089c0d33b0_70677987', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16280175485e8d089c0d6991_11671993', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
