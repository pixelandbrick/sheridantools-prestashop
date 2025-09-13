<?php
/* Smarty version 3.1.33, created on 2020-03-13 21:44:00
  from '/home2/sheridantools/dev.sheridantools.com/themes/autostore/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e6c36e0a70bd2_04031412',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e10379bb2fe873bd379155044fdbbd6fdf8e51f' => 
    array (
      0 => '/home2/sheridantools/dev.sheridantools.com/themes/autostore/templates/index.tpl',
      1 => 1581189729,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e6c36e0a70bd2_04031412 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19928016595e6c36e0a659f8_23488647', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_10544231385e6c36e0a66503_67994563 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_7925901125e6c36e0a67251_49490226 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_assignInScope('HOOK_HOME_TAB_CONTENT', Hook::exec('displayHomeTabContent'));?>
        <?php $_smarty_tpl->_assignInScope('HOOK_HOME_TAB', Hook::exec('displayHomeTab'));?>
        <?php if (isset($_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value) && trim($_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value)) {?>
        <div class=" container home-two-section js-wrap-products-tabs productstabs-section clearfix">
          <div class="productstabs-section__inner">
            <div class="wrapper-tabs">
              <h3 class="headline-section">
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Our Products','d'=>'Modules.Homepage.Shop'),$_smarty_tpl ) );?>

              </h3>
              <?php if (isset($_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value) && trim($_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value)) {?>
              <ul class="js-products-tabs nav nav-tabs">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayHomeTab'),$_smarty_tpl ) );?>

              </ul>
              <?php }?>
            </div>
            <?php if (isset($_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value) && trim($_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value)) {?>
            <div class="tab-content">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayHomeTabContent'),$_smarty_tpl ) );?>

            </div>
            <?php }?>
          </div>
        </div>
        <?php }?>
        <div class="home-section">
          <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

        </div>
        <div class="footer-home-section container">
          <div class="row">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayHomeCustom'),$_smarty_tpl ) );?>

          </div>
        </div>
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_19928016595e6c36e0a659f8_23488647 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_19928016595e6c36e0a659f8_23488647',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_10544231385e6c36e0a66503_67994563',
  ),
  'page_content' => 
  array (
    0 => 'Block_7925901125e6c36e0a67251_49490226',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10544231385e6c36e0a66503_67994563', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7925901125e6c36e0a67251_49490226', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
