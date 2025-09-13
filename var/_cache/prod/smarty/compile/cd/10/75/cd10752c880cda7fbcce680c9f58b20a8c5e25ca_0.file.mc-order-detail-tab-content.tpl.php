<?php
/* Smarty version 3.1.33, created on 2020-04-07 18:54:33
  from '/home2/sheridantools/public_html/modules/mailchimppro/views/templates/admin/mc-order-detail-tab-content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e8d04a93a1875_04625874',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd10752c880cda7fbcce680c9f58b20a8c5e25ca' => 
    array (
      0 => '/home2/sheridantools/public_html/modules/mailchimppro/views/templates/admin/mc-order-detail-tab-content.tpl',
      1 => 1585920140,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./entity_list/order/line.tpl' => 1,
  ),
),false)) {
function content_5e8d04a93a1875_04625874 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tab-pane" id="mailchimp-order-detail">
    <h4 class="visible-print"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'MailChimp detail','mod'=>'mailchimppro'),$_smarty_tpl ) );?>
</h4>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'ID','mod'=>'mailchimppro'),$_smarty_tpl ) );?>
</th>
                <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customer','mod'=>'mailchimppro'),$_smarty_tpl ) );?>
</th>
                <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Store ID','mod'=>'mailchimppro'),$_smarty_tpl ) );?>
</th>
                <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Financial status','mod'=>'mailchimppro'),$_smarty_tpl ) );?>
</th>
                <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Fulfillment status','mod'=>'mailchimppro'),$_smarty_tpl ) );?>
</th>
                <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total','mod'=>'mailchimppro'),$_smarty_tpl ) );?>
</th>
                <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Discount','mod'=>'mailchimppro'),$_smarty_tpl ) );?>
</th>
                <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tax','mod'=>'mailchimppro'),$_smarty_tpl ) );?>
</th>
                <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shipping','mod'=>'mailchimppro'),$_smarty_tpl ) );?>
</th>
                <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Processed at','mod'=>'mailchimppro'),$_smarty_tpl ) );?>
</th>
                <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Products','mod'=>'mailchimppro'),$_smarty_tpl ) );?>
</th>
                <th>#</th>
            </tr>
            </thead>
            <tbody>
            <?php $_smarty_tpl->_subTemplateRender('file:./entity_list/order/line.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('order'=>$_smarty_tpl->tpl_vars['order']->value,'currency_code'=>$_smarty_tpl->tpl_vars['order']->value['currency_code']), 0, false);
?>
            </tbody>
        </table>
    </div>
</div><?php }
}
