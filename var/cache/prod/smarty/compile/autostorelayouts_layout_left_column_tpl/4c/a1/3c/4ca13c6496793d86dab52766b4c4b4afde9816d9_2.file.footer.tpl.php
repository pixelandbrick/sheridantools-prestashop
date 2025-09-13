<?php
/* Smarty version 4.5.5, created on 2025-09-12 23:30:07
  from '/home/sheridantools/public_html/themes/autostore/templates/_partials/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_68c4e53f6eff37_29054688',
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
function content_68c4e53f6eff37_29054688 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_99609789068c4e53f6ea614_74932447', 'hook_footer_custom');
?>

<div class="footer-container wow fadeInDown">
    <div class="footer-one">
      <div class="container">
        <div class="row">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_206075182668c4e53f6ebcf4_58259432', 'hook_footer');
?>

          <div class="footer-three col-lg-3">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_192976218568c4e53f6ed0a9_16696198', 'hook_footer_before');
?>

          </div>
        </div>
      </div>
    </div>
    <div class="footer-two">
      <div class="container">
        <div class="row inner-wrapper">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_177474822068c4e53f6eebf1_58293253', 'hook_footer_after');
?>

        </div>
      </div>
    </div>
</div>
<div class="btn-to-top js-btn-to-top"></div><?php }
/* {block 'hook_footer_custom'} */
class Block_99609789068c4e53f6ea614_74932447 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_custom' => 
  array (
    0 => 'Block_99609789068c4e53f6ea614_74932447',
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
class Block_206075182668c4e53f6ebcf4_58259432 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_206075182668c4e53f6ebcf4_58259432',
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
class Block_192976218568c4e53f6ed0a9_16696198 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_before' => 
  array (
    0 => 'Block_192976218568c4e53f6ed0a9_16696198',
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
class Block_177474822068c4e53f6eebf1_58293253 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_after' => 
  array (
    0 => 'Block_177474822068c4e53f6eebf1_58293253',
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
