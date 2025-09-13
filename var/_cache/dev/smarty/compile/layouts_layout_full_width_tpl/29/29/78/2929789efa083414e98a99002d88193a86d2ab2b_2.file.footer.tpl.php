<?php
/* Smarty version 3.1.33, created on 2020-03-13 21:45:08
  from '/home2/sheridantools/dev.sheridantools.com/themes/autostore/templates/_partials/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e6c3724a49a98_35277813',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2929789efa083414e98a99002d88193a86d2ab2b' => 
    array (
      0 => '/home2/sheridantools/dev.sheridantools.com/themes/autostore/templates/_partials/footer.tpl',
      1 => 1580954804,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e6c3724a49a98_35277813 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13226806085e6c3724a45488_24293962', 'hook_footer_custom');
?>

<div class="footer-container wow fadeInDown">
    <div class="footer-one">
      <div class="container">
        <div class="row">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9824473095e6c3724a466c0_52965349', 'hook_footer');
?>

          <div class="footer-three col-lg-3">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12367529675e6c3724a478b6_86603794', 'hook_footer_before');
?>

          </div>
        </div>
      </div>
    </div>
    <div class="footer-two">
      <div class="container">
        <div class="row inner-wrapper">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6078029895e6c3724a48a66_30266417', 'hook_footer_after');
?>

        </div>
      </div>
    </div>
</div>
<div class="btn-to-top js-btn-to-top"></div><?php }
/* {block 'hook_footer_custom'} */
class Block_13226806085e6c3724a45488_24293962 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_custom' => 
  array (
    0 => 'Block_13226806085e6c3724a45488_24293962',
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
class Block_9824473095e6c3724a466c0_52965349 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_9824473095e6c3724a466c0_52965349',
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
class Block_12367529675e6c3724a478b6_86603794 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_before' => 
  array (
    0 => 'Block_12367529675e6c3724a478b6_86603794',
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
class Block_6078029895e6c3724a48a66_30266417 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_after' => 
  array (
    0 => 'Block_6078029895e6c3724a48a66_30266417',
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
