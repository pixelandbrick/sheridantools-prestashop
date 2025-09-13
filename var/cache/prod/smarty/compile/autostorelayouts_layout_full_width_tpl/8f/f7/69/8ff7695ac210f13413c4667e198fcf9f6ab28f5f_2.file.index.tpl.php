<?php
/* Smarty version 4.5.5, created on 2025-09-12 23:28:21
  from '/home/sheridantools/public_html/themes/autostore/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_68c4e4d5b20678_69112177',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ff7695ac210f13413c4667e198fcf9f6ab28f5f' => 
    array (
      0 => '/home/sheridantools/public_html/themes/autostore/templates/index.tpl',
      1 => 1581189728,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68c4e4d5b20678_69112177 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_134262265168c4e4d5b14ee4_09057729', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_112904290268c4e4d5b15658_45311640 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_14766396968c4e4d5b16112_11818822 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_assignInScope('HOOK_HOME_TAB_CONTENT', Hook::exec('displayHomeTabContent'));?>
        <?php $_smarty_tpl->_assignInScope('HOOK_HOME_TAB', Hook::exec('displayHomeTab'));?>
        <?php if ((isset($_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value)) && call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'trim' ][ 0 ], array( $_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value ))) {?>
        <div class=" container home-two-section js-wrap-products-tabs productstabs-section clearfix">
          <div class="productstabs-section__inner">
            <div class="wrapper-tabs">
              <h3 class="headline-section">
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Our Products','d'=>'Modules.Homepage.Shop'),$_smarty_tpl ) );?>

              </h3>
              <?php if ((isset($_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value)) && call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'trim' ][ 0 ], array( $_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value ))) {?>
              <ul class="js-products-tabs nav nav-tabs">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayHomeTab'),$_smarty_tpl ) );?>

              </ul>
              <?php }?>
            </div>
            <?php if ((isset($_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value)) && call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'trim' ][ 0 ], array( $_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value ))) {?>
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
class Block_134262265168c4e4d5b14ee4_09057729 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_134262265168c4e4d5b14ee4_09057729',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_112904290268c4e4d5b15658_45311640',
  ),
  'page_content' => 
  array (
    0 => 'Block_14766396968c4e4d5b16112_11818822',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_112904290268c4e4d5b15658_45311640', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14766396968c4e4d5b16112_11818822', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
