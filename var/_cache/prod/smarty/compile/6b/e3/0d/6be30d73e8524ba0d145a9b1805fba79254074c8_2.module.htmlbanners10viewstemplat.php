<?php
/* Smarty version 3.1.33, created on 2020-04-07 20:31:31
  from 'module:htmlbanners10viewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e8d1b6391a5a2_28448634',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6be30d73e8524ba0d145a9b1805fba79254074c8' => 
    array (
      0 => 'module:htmlbanners10viewstemplat',
      1 => 1580954804,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e8d1b6391a5a2_28448634 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['htmlbanners10']->value['slides']) {?>
  <div id="htmlbanners10" class="features-home">
    <div class="container">
        <div data-wow-offset="150" class="wow fadeInUp htmlbanners10-inner js-htmlbanners10-carousel <?php if ($_smarty_tpl->tpl_vars['htmlbanners10']->value['carousel_active'] == 'true') {?>htmlbanners10-carousel<?php } else { ?>view-grid<?php }?> row" <?php if ($_smarty_tpl->tpl_vars['htmlbanners10']->value['carousel_active'] == 'true') {?> data-carousel=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['htmlbanners10']->value['carousel_active'], ENT_QUOTES, 'UTF-8');?>
 data-autoplay=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['htmlbanners10']->value['autoplay'], ENT_QUOTES, 'UTF-8');?>
 data-timeout="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['htmlbanners10']->value['speed'], ENT_QUOTES, 'UTF-8');?>
" data-pause="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['htmlbanners10']->value['pause'], ENT_QUOTES, 'UTF-8');?>
" data-pagination="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['htmlbanners10']->value['pagination'], ENT_QUOTES, 'UTF-8');?>
" data-navigation="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['htmlbanners10']->value['navigation'], ENT_QUOTES, 'UTF-8');?>
" data-loop="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['htmlbanners10']->value['wrap'], ENT_QUOTES, 'UTF-8');?>
" data-items="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['htmlbanners10']->value['items'], ENT_QUOTES, 'UTF-8');?>
" data-items_1199="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['htmlbanners10']->value['items_1199'], ENT_QUOTES, 'UTF-8');?>
" data-items_991="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['htmlbanners10']->value['items_991'], ENT_QUOTES, 'UTF-8');?>
" data-items_768="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['htmlbanners10']->value['items_768'], ENT_QUOTES, 'UTF-8');?>
" data-items_480="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['htmlbanners10']->value['items_480'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['htmlbanners10']->value['slides'], 'slide', false, NULL, 'htmlbanners10', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->value) {
?>
            <div class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['customclass'], ENT_QUOTES, 'UTF-8');?>
">
              <div class="feature-item-inner">
                <?php if ($_smarty_tpl->tpl_vars['slide']->value['url'] != $_smarty_tpl->tpl_vars['slide']->value['url_base']) {?>
                <a class="banner-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
                <?php } else { ?>
                <div class="banner-link">
                <?php }?>
                  <?php if ($_smarty_tpl->tpl_vars['slide']->value['image_url'] != $_smarty_tpl->tpl_vars['slide']->value['image_base_url']) {?>
                  <img class="img-banner" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['image_url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slide']->value['legend'] )), ENT_QUOTES, 'UTF-8');?>
">
                  <?php }?>
                  <?php if ($_smarty_tpl->tpl_vars['slide']->value['description']) {?>
                      <div class="banner-description">
                          <?php echo $_smarty_tpl->tpl_vars['slide']->value['description'];?>

                      </div>
                  <?php }?>
                  <?php if ($_smarty_tpl->tpl_vars['slide']->value['url'] != $_smarty_tpl->tpl_vars['slide']->value['url_base']) {?>
                  </a>
                  <?php } else { ?>
                  </div>
                  <?php }?>
              </div>
            </div>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
  </div>
<?php }?>

<?php }
}
