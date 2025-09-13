<?php
/* Smarty version 3.1.33, created on 2020-04-07 18:54:33
  from '/home2/sheridantools/public_html/modules/mailchimppro/views/templates/admin/entity_list/order/line.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e8d04a93bb856_64081226',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '175e3c2a4821bada7a885676a2a3bde073094046' => 
    array (
      0 => '/home2/sheridantools/public_html/modules/mailchimppro/views/templates/admin/entity_list/order/line.tpl',
      1 => 1585920140,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./../cart/line.tpl' => 1,
  ),
),false)) {
function content_5e8d04a93bb856_64081226 (Smarty_Internal_Template $_smarty_tpl) {
?>
<tr>
    <td><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['order']->value['id'],'htmlall','UTF-8' ));?>
</td>
    <td>
        <?php if (isset($_smarty_tpl->tpl_vars['order']->value['customer'])) {?>
            <b><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['order']->value['customer']['email_address'],'htmlall','UTF-8' ));?>
</b>
            <small>ID: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['order']->value['customer']['id'],'htmlall','UTF-8' ));?>
</small>
        <?php } else { ?>
            <span class="text-danger"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No customer','mod'=>'mailchimppro'),$_smarty_tpl ) );?>
</span>
        <?php }?>
    </td>
    <td>
        <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['order']->value['store_id'],'htmlall','UTF-8' ));?>

    </td>
    <td>
        <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['order']->value['financial_status'],'htmlall','UTF-8' ));?>

    </td>
    <td>
        <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['order']->value['fulfillment_status'],'htmlall','UTF-8' ));?>

    </td>
    <td>
        <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['order']->value['order_total'],'htmlall','UTF-8' ));?>
 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['order']->value['currency_code'],'htmlall','UTF-8' ));?>

    </td>
    <td>
        <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['order']->value['discount_total'],'htmlall','UTF-8' ));?>
 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['order']->value['currency_code'],'htmlall','UTF-8' ));?>

    </td>
    <td>
        <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['order']->value['tax_total'],'htmlall','UTF-8' ));?>
 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['order']->value['currency_code'],'htmlall','UTF-8' ));?>

    </td>
    <td>
        <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['order']->value['shipping_total'],'htmlall','UTF-8' ));?>
 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['order']->value['currency_code'],'htmlall','UTF-8' ));?>

    </td>
    <td>
        <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['order']->value['processed_at_foreign'],'htmlall','UTF-8' ));?>

    </td>
    <td>
        <?php $_smarty_tpl->_subTemplateRender('file:./../cart/line.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('lines'=>$_smarty_tpl->tpl_vars['order']->value['lines'],'currency_code'=>$_smarty_tpl->tpl_vars['order']->value['currency_code']), 0, false);
?>
    </td>
    <td>
        <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminMailchimpProOrders',true,array(),array('action'=>'entitydelete','entity_id'=>$_smarty_tpl->tpl_vars['order']->value['id'])),'htmlall','UTF-8' ));?>
">
            Delete
        </a>
    </td>
</tr>
<?php }
}
