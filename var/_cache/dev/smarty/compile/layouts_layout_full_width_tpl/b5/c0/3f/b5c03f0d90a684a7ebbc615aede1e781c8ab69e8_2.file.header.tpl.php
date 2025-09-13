<?php
/* Smarty version 3.1.33, created on 2020-03-13 21:45:08
  from '/home2/sheridantools/dev.sheridantools.com/themes/autostore/templates/_partials/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e6c37241cb454_71175748',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5c03f0d90a684a7ebbc615aede1e781c8ab69e8' => 
    array (
      0 => '/home2/sheridantools/dev.sheridantools.com/themes/autostore/templates/_partials/header.tpl',
      1 => 1581128806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e6c37241cb454_71175748 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8526487285e6c37241baef1_71447219', 'header_banner');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5492035815e6c37241bc314_06694551', 'header_nav');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18652989645e6c37241c1bc7_86059823', 'header_top');
?>

<?php }
/* {block 'header_banner'} */
class Block_8526487285e6c37241baef1_71447219 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_banner' => 
  array (
    0 => 'Block_8526487285e6c37241baef1_71447219',
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
class Block_5492035815e6c37241bc314_06694551 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_nav' => 
  array (
    0 => 'Block_5492035815e6c37241bc314_06694551',
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
            <?php if (Module::isInstalled('ps_contactinfo') && Module::isEnabled('ps_contactinfo')) {?>
            <div id="_mobile_contact_link"></div>
            <?php }?>
            <?php if (Module::isInstalled('ps_customersignin') && Module::isEnabled('ps_customersignin')) {?>
            <div id="_mobile_user_info"></div>
            <?php }?>
            <?php if (Module::isInstalled('ps_shoppingcart') && Module::isEnabled('ps_shoppingcart')) {?>
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
class Block_18652989645e6c37241c1bc7_86059823 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_top' => 
  array (
    0 => 'Block_18652989645e6c37241c1bc7_86059823',
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
                  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
                    <img class="logo img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
                  </a>
                </h1>
              <?php } else { ?>
                  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
                    <img class="logo img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
                  </a>
              <?php }?>
          </div>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTop'),$_smarty_tpl ) );?>

      </div>
      <div id="mobile_top_menu_wrapper" class="row hidden-lg-up">
        <div class="wrapper-nav">
            <?php if (Module::isInstalled('ps_currencyselector') && Module::isEnabled('ps_currencyselector')) {?>
            <div id="_mobile_currency_selector"></div>
            <?php }?>
            <?php if (Module::isInstalled('ps_languageselector') && Module::isEnabled('ps_languageselector')) {?>
            <div id="_mobile_language_selector"></div>
            <?php }?>
            <div id="_mobile_link_block"></div>
        </div>
        <?php if (Module::isInstalled('ps_searchbar') && Module::isEnabled('ps_searchbar')) {?>
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
