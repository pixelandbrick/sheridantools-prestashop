<?php
/* Smarty version 4.5.5, created on 2025-09-12 23:30:20
  from '/home/sheridantools/public_html/themes/autostore/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_68c4e54cbaa498_13829096',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e380b9715d33143bbe703b0109d81c865ae317c2' => 
    array (
      0 => '/home/sheridantools/public_html/themes/autostore/templates/page.tpl',
      1 => 1580954804,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68c4e54cbaa498_13829096 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_160445917868c4e54cba4215_09431538', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_51420856168c4e54cba5118_53806424 extends Smarty_Internal_Block
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
class Block_79195829268c4e54cba48c9_96440402 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_51420856168c4e54cba5118_53806424', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_51010483268c4e54cba77d8_36638703 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_59016271068c4e54cba8040_13787506 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_201704282468c4e54cba71f8_67771109 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_51010483268c4e54cba77d8_36638703', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_59016271068c4e54cba8040_13787506', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_159093670468c4e54cba9464_50658157 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_151743618968c4e54cba8ec4_47056673 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_159093670468c4e54cba9464_50658157', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_160445917868c4e54cba4215_09431538 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_160445917868c4e54cba4215_09431538',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_79195829268c4e54cba48c9_96440402',
  ),
  'page_title' => 
  array (
    0 => 'Block_51420856168c4e54cba5118_53806424',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_201704282468c4e54cba71f8_67771109',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_51010483268c4e54cba77d8_36638703',
  ),
  'page_content' => 
  array (
    0 => 'Block_59016271068c4e54cba8040_13787506',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_151743618968c4e54cba8ec4_47056673',
  ),
  'page_footer' => 
  array (
    0 => 'Block_159093670468c4e54cba9464_50658157',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_79195829268c4e54cba48c9_96440402', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_201704282468c4e54cba71f8_67771109', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_151743618968c4e54cba8ec4_47056673', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
