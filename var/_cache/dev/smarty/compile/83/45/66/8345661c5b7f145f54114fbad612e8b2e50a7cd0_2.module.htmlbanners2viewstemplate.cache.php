<?php
/* Smarty version 3.1.33, created on 2020-03-13 21:06:20
  from 'module:htmlbanners2viewstemplate' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e6c2e0cb5d078_34839422',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8345661c5b7f145f54114fbad612e8b2e50a7cd0' => 
    array (
      0 => 'module:htmlbanners2viewstemplate',
      1 => 1580954804,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e6c2e0cb5d078_34839422 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '11948961345e6c2e0cb0efa0_60260148';
?>
<!-- begin /home2/sheridantools/dev.sheridantools.com/themes/autostore/modules/htmlbanners2/views/templates/hook/hook.tpl -->
<?php if ($_smarty_tpl->tpl_vars['htmlbanners2']->value['slides']) {?>
  <div id="htmlbanners2" class="home-banners wow fadeInUp" data-wow-offset="200">
    <div class="htmlbanners2-inner js-htmlbanners2-carousel <?php if ($_smarty_tpl->tpl_vars['htmlbanners2']->value['carousel_active'] == 'true') {?>carousel--arrows-skine-one htmlbanners2-carousel <?php }?>row clearfix" <?php if ($_smarty_tpl->tpl_vars['htmlbanners2']->value['carousel_active'] == 'true') {?> data-carousel=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['htmlbanners2']->value['carousel_active'], ENT_QUOTES, 'UTF-8');?>
 data-autoplay=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['htmlbanners2']->value['autoplay'], ENT_QUOTES, 'UTF-8');?>
 data-timeout="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['htmlbanners2']->value['speed'], ENT_QUOTES, 'UTF-8');?>
" data-pause="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['htmlbanners2']->value['pause'], ENT_QUOTES, 'UTF-8');?>
" data-pagination="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['htmlbanners2']->value['pagination'], ENT_QUOTES, 'UTF-8');?>
" data-navigation="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['htmlbanners2']->value['navigation'], ENT_QUOTES, 'UTF-8');?>
" data-loop="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['htmlbanners2']->value['wrap'], ENT_QUOTES, 'UTF-8');?>
" data-items="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['htmlbanners2']->value['items'], ENT_QUOTES, 'UTF-8');?>
" data-items_1199="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['htmlbanners2']->value['items_1199'], ENT_QUOTES, 'UTF-8');?>
" data-items_991="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['htmlbanners2']->value['items_991'], ENT_QUOTES, 'UTF-8');?>
" data-items_768="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['htmlbanners2']->value['items_768'], ENT_QUOTES, 'UTF-8');?>
" data-items_480="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['htmlbanners2']->value['items_480'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['htmlbanners2']->value['slides'], 'slide', false, NULL, 'htmlbanners2', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->value) {
?>
        <div class="home-banner <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['customclass'], ENT_QUOTES, 'UTF-8');?>
">
          <?php if ($_smarty_tpl->tpl_vars['slide']->value['url'] != $_smarty_tpl->tpl_vars['slide']->value['url_base']) {?>
          <a class="banner-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
          <?php } else { ?>
          <div class="banner-link">
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['slide']->value['image_url'] != $_smarty_tpl->tpl_vars['slide']->value['image_base_url']) {?>
          <div class="banner-img"<?php if ($_smarty_tpl->tpl_vars['slide']->value['image_url'] != $_smarty_tpl->tpl_vars['slide']->value['image_base_url']) {?> style="background-image: url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['image_url'], ENT_QUOTES, 'UTF-8');?>
)"<?php }?>></div>
                    <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['slide']->value['description']) {?>
                <figcaption class="banner-description">
                    <?php echo $_smarty_tpl->tpl_vars['slide']->value['description'];?>

                </figcaption>
              <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['slide']->value['url'] != $_smarty_tpl->tpl_vars['slide']->value['url_base']) {?>
          </a>
          <?php } else { ?>
          </div>
          <?php }?>
        </div>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
<?php }?>

<!-- end /home2/sheridantools/dev.sheridantools.com/themes/autostore/modules/htmlbanners2/views/templates/hook/hook.tpl --><?php }
}
