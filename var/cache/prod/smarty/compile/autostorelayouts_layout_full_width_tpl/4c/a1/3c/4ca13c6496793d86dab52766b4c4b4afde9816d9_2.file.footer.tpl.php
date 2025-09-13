<?php
/* Smarty version 4.5.5, created on 2025-09-12 23:28:21
  from '/home/sheridantools/public_html/themes/autostore/templates/_partials/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_68c4e4d5d84014_96177010',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ca13c6496793d86dab52766b4c4b4afde9816d9' => 
    array (
      0 => '/home/sheridantools/public_html/themes/autostore/templates/_partials/footer.tpl',
      1 => 1580954804,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68c4e4d5d84014_96177010 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_25613473768c4e4d5d7fa03_83119082', 'hook_footer_custom');
?>

<div class="footer-container wow fadeInDown">
    <div class="footer-one">
      <div class="container">
        <div class="row">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_86722569768c4e4d5d80e63_53585623', 'hook_footer');
?>

          <div class="footer-three col-lg-3">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_165670796868c4e4d5d81f55_46652934', 'hook_footer_before');
?>

          </div>
        </div>
      </div>
    </div>
    <div class="footer-two">
      <div class="container">
        <div class="row inner-wrapper">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16901159068c4e4d5d830a3_03512356', 'hook_footer_after');
?>

        </div>
      </div>
    </div>
</div>
<div class="btn-to-top js-btn-to-top"></div><?php }
/* {block 'hook_footer_custom'} */
class Block_25613473768c4e4d5d7fa03_83119082 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_custom' => 
  array (
    0 => 'Block_25613473768c4e4d5d7fa03_83119082',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterCustom'),$_smarty_tpl ) );?>

  <?php
}
}
/* {/block 'hook_footer_custom'} */
/* {block 'hook_footer'} */
class Block_86722569768c4e4d5d80e63_53585623 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_86722569768c4e4d5d80e63_53585623',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter'),$_smarty_tpl ) );?>

          <?php
}
}
/* {/block 'hook_footer'} */
/* {block 'hook_footer_before'} */
class Block_165670796868c4e4d5d81f55_46652934 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_before' => 
  array (
    0 => 'Block_165670796868c4e4d5d81f55_46652934',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterBefore'),$_smarty_tpl ) );?>

            <?php
}
}
/* {/block 'hook_footer_before'} */
/* {block 'hook_footer_after'} */
class Block_16901159068c4e4d5d830a3_03512356 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_after' => 
  array (
    0 => 'Block_16901159068c4e4d5d830a3_03512356',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterAfter'),$_smarty_tpl ) );?>

          <?php
}
}
/* {/block 'hook_footer_after'} */
}
