<?php
/* Smarty version 4.5.5, created on 2025-09-12 23:30:05
  from '/home/sheridantools/public_html/themes/autostore/templates/_partials/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_68c4e53d8f18d4_90697329',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '969c22485eadb76fc0e4ca83960e3ac97e4ad630' => 
    array (
      0 => '/home/sheridantools/public_html/themes/autostore/templates/_partials/header.tpl',
      1 => 1586273238,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68c4e53d8f18d4_90697329 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_22722406668c4e53d8da2a5_32272177', 'header_banner');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_64116678168c4e53d8dba03_10735373', 'header_nav');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_38521396668c4e53d8e3732_20754457', 'header_top');
?>

<?php }
/* {block 'header_banner'} */
class Block_22722406668c4e53d8da2a5_32272177 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_banner' => 
  array (
    0 => 'Block_22722406668c4e53d8da2a5_32272177',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="header-banner">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBanner'),$_smarty_tpl ) );?>

  </div>
<?php
}
}
/* {/block 'header_banner'} */
/* {block 'header_nav'} */
class Block_64116678168c4e53d8dba03_10735373 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_nav' => 
  array (
    0 => 'Block_64116678168c4e53d8dba03_10735373',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <nav class="header-nav">
    <div class="container">
        <div class="row inner-wrapper">
          <div class="left-nav">
              <span class="tagline">Quality Tools. Expert Training.</span>
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav1'),$_smarty_tpl ) );?>

          </div>
          <div class="right-nav">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav2'),$_smarty_tpl ) );?>

          </div>
          <div class="hidden-lg-up mobile">
            <div id="menu-icon">
                <span class="sw-topper"></span>
                <span class="sw-bottom"></span>
                <span class="sw-footer"></span>
            </div>
            <div class="top-logo" id="_mobile_logo"></div>
            <?php if (\Module::isInstalled('ps_contactinfo') && \Module::isEnabled('ps_contactinfo')) {?>
            <div id="_mobile_contact_link"></div>
            <?php }?>
            <?php if (\Module::isInstalled('ps_customersignin') && \Module::isEnabled('ps_customersignin')) {?>
            <div id="_mobile_user_info"></div>
            <?php }?>
            <?php if (\Module::isInstalled('ps_shoppingcart') && \Module::isEnabled('ps_shoppingcart')) {?>
            <div id="_mobile_cart"></div>
            <?php }?>
          </div>
        </div>
    </div>
  </nav>
<?php
}
}
/* {/block 'header_nav'} */
/* {block 'header_top'} */
class Block_38521396668c4e53d8e3732_20754457 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_top' => 
  array (
    0 => 'Block_38521396668c4e53d8e3732_20754457',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="header-top">
    <div class="container">
       <div class="row inner-wrapper hidden-md-down">
          <div id="_desktop_logo" class="col-md-3">
              <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {?>
                <h1>
                  <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['base_url']), ENT_QUOTES, 'UTF-8');?>
">
                    <img class="logo img-responsive" src="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['shop']->value['logo']), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['shop']->value['name']), ENT_QUOTES, 'UTF-8');?>
">
                    <span><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['shop']->value['name']), ENT_QUOTES, 'UTF-8');?>
</span>
                  </a>
                </h1>
              <?php } else { ?>
                  <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['base_url']), ENT_QUOTES, 'UTF-8');?>
">
                    <img class="logo img-responsive" src="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['shop']->value['logo']), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['shop']->value['name']), ENT_QUOTES, 'UTF-8');?>
">
                  </a>
              <?php }?>
          </div>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTop'),$_smarty_tpl ) );?>

      </div>
      <div id="mobile_top_menu_wrapper" class="row hidden-lg-up">
        <div class="wrapper-nav">
            <?php if (\Module::isInstalled('ps_currencyselector') && \Module::isEnabled('ps_currencyselector')) {?>
            <div id="_mobile_currency_selector"></div>
            <?php }?>
            <?php if (\Module::isInstalled('ps_languageselector') && \Module::isEnabled('ps_languageselector')) {?>
            <div id="_mobile_language_selector"></div>
            <?php }?>
            <div id="_mobile_link_block"></div>
        </div>
        <?php if (\Module::isInstalled('ps_searchbar') && \Module::isEnabled('ps_searchbar')) {?>
        <div class="wrapper-modules">
          <div id="_mobile_search_bar"></div>
        </div>
        <?php }?>
        <div class="js-top-menu mobile" id="_mobile_top_menu"></div>
      </div>
    </div>
  </div>
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavFullWidth'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'header_top'} */
}
