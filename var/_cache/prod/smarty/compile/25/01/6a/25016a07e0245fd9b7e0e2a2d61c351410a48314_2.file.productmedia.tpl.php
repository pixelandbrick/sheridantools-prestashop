<?php
/* Smarty version 3.1.33, created on 2020-04-07 20:25:42
  from '/home2/sheridantools/public_html/modules/productmedia/views/templates/front/productmedia.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e8d1a06b7bc44_12761238',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25016a07e0245fd9b7e0e2a2d61c351410a48314' => 
    array (
      0 => '/home2/sheridantools/public_html/modules/productmedia/views/templates/front/productmedia.tpl',
      1 => 1580954707,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e8d1a06b7bc44_12761238 (Smarty_Internal_Template $_smarty_tpl) {
?><div style="text-align: center">
    <?php if (is_array($_smarty_tpl->tpl_vars['medias']->value)) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['medias']->value, 'media', false, NULL, 'medias', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['media']->value) {
?>
            <?php if ($_smarty_tpl->tpl_vars['media']->value['type'] == 'vid') {?>
                <h3><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['media']->value['label'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</h3>
                <video src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['media']->value['url_media'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" controls width="100%" height="100%"></video>
            <?php } else { ?>
                <h3><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['media']->value['label'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</h3>
                <audio src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['media']->value['url_media'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" controls style="width:100%;display:block;"></audio>
            <?php }?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>
</div>

<style>
video::-internal-media-controls-download-button {
    display:none;
}

video::-webkit-media-controls-enclosure {
    overflow:hidden;
}

video::-webkit-media-controls-panel {
    width: calc(100% + 30px); /* Adjust as needed */
}
</style>
<?php }
}
