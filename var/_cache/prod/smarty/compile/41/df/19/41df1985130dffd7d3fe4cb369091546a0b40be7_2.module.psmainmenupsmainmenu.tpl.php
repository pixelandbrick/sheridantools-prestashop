<?php
/* Smarty version 3.1.33, created on 2020-04-07 20:31:31
  from 'module:psmainmenupsmainmenu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e8d1b63b20467_73279899',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41df1985130dffd7d3fe4cb369091546a0b40be7' => 
    array (
      0 => 'module:psmainmenupsmainmenu.tpl',
      1 => 1582034555,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e8d1b63b20467_73279899 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'menu' => 
  array (
    'compiled_filepath' => '/home2/sheridantools/public_html/var/cache/prod/smarty/compile/41/df/19/41df1985130dffd7d3fe4cb369091546a0b40be7_2.module.psmainmenupsmainmenu.tpl.php',
    'uid' => '41df1985130dffd7d3fe4cb369091546a0b40be7',
    'call_name' => 'smarty_template_function_menu_3389405645e8d1b63b03871_15498660',
  ),
));
$_smarty_tpl->_assignInScope('_counter', 0);?>


<div class="main-menu col-md-9 js-top-menu position-static hidden-md-down" id="_desktop_top_menu">
    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'menu', array('nodes'=>$_smarty_tpl->tpl_vars['menu']->value['children']), true);?>

</div>
<?php }
/* smarty_template_function_menu_3389405645e8d1b63b03871_15498660 */
if (!function_exists('smarty_template_function_menu_3389405645e8d1b63b03871_15498660')) {
function smarty_template_function_menu_3389405645e8d1b63b03871_15498660(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('nodes'=>array(),'depth'=>0,'parent'=>null), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

    <?php if (count($_smarty_tpl->tpl_vars['nodes']->value)) {?>
      <ul class="top-menu<?php if ($_smarty_tpl->tpl_vars['depth']->value == 1 && $_smarty_tpl->tpl_vars['node']->value['image_urls']) {?> has-thumbnails<?php }?>" <?php if ($_smarty_tpl->tpl_vars['depth']->value == 0) {?>id="top-menu"<?php }?> data-depth="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['depth']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nodes']->value, 'node');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['node']->value) {
?>
            <li class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['type'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['node']->value['current']) {?> current <?php }?>" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['page_identifier'], ENT_QUOTES, 'UTF-8');?>
">
            <?php $_smarty_tpl->_assignInScope('_counter', $_smarty_tpl->tpl_vars['_counter']->value+1);?>
              <a
                class="<?php if ($_smarty_tpl->tpl_vars['depth']->value >= 0) {?>dropdown-item<?php }
if ($_smarty_tpl->tpl_vars['depth']->value === 1) {?> dropdown-submenu<?php }?> <?php if (count($_smarty_tpl->tpl_vars['node']->value['children'])) {?>with-ul<?php }?>"
                href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['url'], ENT_QUOTES, 'UTF-8');?>
" data-depth="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['depth']->value, ENT_QUOTES, 'UTF-8');?>
"
                <?php if ($_smarty_tpl->tpl_vars['node']->value['open_in_new_window']) {?> target="_blank" <?php }?>
              >
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['label'], ENT_QUOTES, 'UTF-8');?>

                <?php if (count($_smarty_tpl->tpl_vars['node']->value['children'])) {?>
                                    <?php $_smarty_tpl->_assignInScope('_expand_id', mt_rand(10,100000));?>
                    <span data-target="#top_sub_menu_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-toggle="collapse" class="hidden-lg-up navbar-toggler collapse-icons">
                      <i class="material-icons add">&#xE313;</i>
                      <i class="material-icons remove">&#xE316;</i>
                    </span>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['depth']->value == 0 && $_smarty_tpl->tpl_vars['node']->value['current']) {?>
                <span class="menu-line"></span>
                <?php }?>
              </a>
              <?php if ($_smarty_tpl->tpl_vars['depth']->value == 0) {?>
              <span class="sep">&bull;</span>
              <?php }?>
              <?php if (count($_smarty_tpl->tpl_vars['node']->value['children'])) {?>
              <div <?php if ($_smarty_tpl->tpl_vars['depth']->value === 0) {?> class="popover sub-menu js-sub-menu submenu collapse"<?php } else { ?> class="collapse submenu"<?php }?> id="top_sub_menu_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_expand_id']->value, ENT_QUOTES, 'UTF-8');?>
">
              <?php if ($_smarty_tpl->tpl_vars['depth']->value === 0) {?>
              	<div class="inner-wrapper">
              <?php }?>
                <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'menu', array('nodes'=>$_smarty_tpl->tpl_vars['node']->value['children'],'depth'=>$_smarty_tpl->tpl_vars['node']->value['depth'],'parent'=>$_smarty_tpl->tpl_vars['node']->value), true);?>

                <?php if ($_smarty_tpl->tpl_vars['node']->value['image_urls'] && $_smarty_tpl->tpl_vars['depth']->value === 0) {?>
                <div class="menu-thumbnails">
                  <div class="thumbnail">
<div class="thumbnail-img">
<div class="top-banner">
<a class="banner-link" href="/6-cutting-tools">
<figure>
<img class="img-banner" alt="Cutting Tools" src="/modules/htmlbanners1/views/img/upload/e723e06f13f3898715c31c4195d86852acac1afd_top_banner_cutting_tools.jpg">
<figcaption class="banner-description">
<div class="description">
<p class="title-one">Cutting Tools</p>
<p>Even &amp; accurate dissections…</p>
</div>
</figcaption>
</figure>
</a>
</div>
</div>
</div>

<div class="thumbnail">
<div class="thumbnail-img">
<div class="top-banner">
<a class="banner-link" href="/9-bending-tools">
<figure>
<img class="img-banner" alt="Bending Tools" style="max-width:none;" src="/modules/htmlbanners1/views/img/upload/b2cbb589b0d73730453d8c9be2334ee48c33855f_top_banner_bending_tools.jpg">
<figcaption class="banner-description">
<div class="description">
<p class="title-one">Bending Tools</p>
<p>Immaculate &amp; meticulous shaping…</p>
</div>
</figcaption>
</figure>
</a>
</div>
</div>
</div>

<div class="thumbnail">
<div class="thumbnail-img">
<div class="top-banner">
<a class="banner-link" href="/3-seaming-tools">
<figure>
<img class="img-banner" alt="Seaming Tools" style="max-width:215px;" src="/modules/htmlbanners1/views/img/upload/56b070131b94f62c0ba08690ef257a725113c8c3_top_banner_seaming_tools.jpg">
<figcaption class="banner-description">
<div class="description">
<p class="title-one">Seaming Tools</p>
<p>Clean &amp; impervious joining…</p>
</div>
</figcaption>
</figure>
</a>
</div>
</div>
</div>

                                  </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['depth']->value === 0) {?>
                </div>
                <?php }?>
              </div>
              <?php }?>
            </li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    <?php }
}}
/*/ smarty_template_function_menu_3389405645e8d1b63b03871_15498660 */
}
