<?php
/* Smarty version 3.1.33, created on 2020-04-07 18:54:33
  from '/home2/sheridantools/public_html/modules/mailchimppro/views/templates/admin/mc-order-detail-tab-title.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e8d04a93ff573_67928827',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e73458fb3d9c6afc192ae2f1368959a8c05a9964' => 
    array (
      0 => '/home2/sheridantools/public_html/modules/mailchimppro/views/templates/admin/mc-order-detail-tab-title.tpl',
      1 => 1585920140,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e8d04a93ff573_67928827 (Smarty_Internal_Template $_smarty_tpl) {
?><li class="">
    <!--suppress HtmlUnknownAnchorTarget -->
    <a href="#mailchimp-order-detail">
        <i class="icon-time"></i>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'MailChimp detail','mod'=>'mailchimppro'),$_smarty_tpl ) );?>
 <span class="badge" style="opacity: 0">1</span>
    </a>
</li><?php }
}
