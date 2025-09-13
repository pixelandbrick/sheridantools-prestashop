<?php
/* Smarty version 3.1.33, created on 2020-04-07 20:31:32
  from '/home2/sheridantools/public_html/themes/autostore/templates/_partials/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e8d1b6422f781_41278411',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45d420ba2ef7e7e7f54150690782d7864581a83d' => 
    array (
      0 => '/home2/sheridantools/public_html/themes/autostore/templates/_partials/footer.tpl',
      1 => 1580954804,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e8d1b6422f781_41278411 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18130711165e8d1b6422add8_80652241', 'hook_footer_custom');
?>

<div class="footer-container wow fadeInDown">
    <div class="footer-one">
      <div class="container">
        <div class="row">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6077550265e8d1b6422c2d2_93489602', 'hook_footer');
?>

          <div class="footer-three col-lg-3">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17960026575e8d1b6422d3d9_25801037', 'hook_footer_before');
?>

          </div>
        </div>
      </div>
    </div>
    <div class="footer-two">
      <div class="container">
        <div class="row inner-wrapper">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4090322155e8d1b6422e721_03293335', 'hook_footer_after');
?>

        </div>
      </div>
    </div>
</div>
<div class="btn-to-top js-btn-to-top"></div><?php }
/* {block 'hook_footer_custom'} */
class Block_18130711165e8d1b6422add8_80652241 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_custom' => 
  array (
    0 => 'Block_18130711165e8d1b6422add8_80652241',
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
class Block_6077550265e8d1b6422c2d2_93489602 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_6077550265e8d1b6422c2d2_93489602',
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
class Block_17960026575e8d1b6422d3d9_25801037 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_before' => 
  array (
    0 => 'Block_17960026575e8d1b6422d3d9_25801037',
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
class Block_4090322155e8d1b6422e721_03293335 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_after' => 
  array (
    0 => 'Block_4090322155e8d1b6422e721_03293335',
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
