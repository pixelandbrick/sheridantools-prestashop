<?php
/* Smarty version 3.1.33, created on 2020-04-07 18:54:33
  from '/home2/sheridantools/public_html/modules/hitups/views/templates/admin/order.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e8d04a93f81c5_07002025',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ccd8fc2f1a3f5119c592166733433bbe01da78e' => 
    array (
      0 => '/home2/sheridantools/public_html/modules/hitups/views/templates/admin/order.tpl',
      1 => 1583640909,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e8d04a93f81c5_07002025 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="post">
<div class="panel">
<h3><i class="icon icon-truck"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'UPS Express Shipment','mod'=>'hitups'),$_smarty_tpl ) );?>
</h3>
<?php if ((!$_smarty_tpl->tpl_vars['label_check']->value)) {?>
<span style="font-weight:bold;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Package(s)','mod'=>'hitups'),$_smarty_tpl ) );?>
:</span>
<table id="hit_ups_package_list" class="hit-shipment-package-table" style="margin-bottom: 5px;margin-top: 5px;box-shadow:.5px .5px 5px lightgrey;">
<tr>
<th style="padding:6px;text-align:left;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'SL No.','mod'=>'hitups'),$_smarty_tpl ) );?>
</th>
<th style="padding:6px;text-align:left;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Weight','mod'=>'hitups'),$_smarty_tpl ) );?>
</th>
<th style="text-align:left;padding:6px;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Length','mod'=>'hitups'),$_smarty_tpl ) );?>
</th>
<th style="text-align:left;padding:6px;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Width','mod'=>'hitups'),$_smarty_tpl ) );?>
 </th>
<th style="text-align:left;padding:6px;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Height','mod'=>'hitups'),$_smarty_tpl ) );?>
 </th>
<th style="text-align:left;padding:6px;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Insurance','mod'=>'hitups'),$_smarty_tpl ) );?>
</th>
</tr>
<?php if (!empty($_smarty_tpl->tpl_vars['dimensions']->value)) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dimensions']->value, 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
<tr>
<td style="width:25%;padding:5px;border-radius:5px;margin-left:4px;"><small><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['key']->value+1,'html','UTF-8' ));?>
</small></td>     
<td><input type="text" id="ups_manual_weight_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" name="ups_manual_weight[]" style="width:60%;padding:5px;border-radius:5px;margin-left:4px;" value="<?php if (isset($_smarty_tpl->tpl_vars['value']->value['Weight']['Value'])) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['Weight']['Value'],'html','UTF-8' ));
} else { ?>0<?php }?>" /></td>     
<td><input type="text" id="ups_manual_length_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" name="ups_manual_length[]" style="width:60%;padding:5px;border-radius:5px;margin-left:4px;" value="<?php if (isset($_smarty_tpl->tpl_vars['value']->value['Dimensions']['Length'])) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['Dimensions']['Length'],'html','UTF-8' ));
} else { ?>0<?php }?>" /> </td>
<td><input type="text" id="ups_manual_width_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" name="ups_manual_width[]" style="width:60%;padding:5px;border-radius:5px;margin-left:4px;" value="<?php if (isset($_smarty_tpl->tpl_vars['value']->value['Dimensions']['Width'])) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['Dimensions']['Width'],'html','UTF-8' ));
} else { ?>0<?php }?>" /> </td>
<td><input type="text" id="ups_manual_height_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" name="ups_manual_height[]" style="width:60%;padding:5px;border-radius:5px;margin-left:4px;" value="<?php if (isset($_smarty_tpl->tpl_vars['value']->value['Dimensions']['Height'])) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['Dimensions']['Height'],'html','UTF-8' ));
} else { ?>0<?php }?>" /> </td>
<td><input type="text" id="ups_manual_insurance_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" name="ups_manual_insurance[]" style="width:60%;padding:5px;border-radius:5px;margin-left:4px;" value="<?php if (($_smarty_tpl->tpl_vars['general_settings']->value['rate_insure'] == 'yes')) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['InsuredValue']['Amount'],'html','UTF-8' ));
} else { ?>0<?php }?>" title="<?php echo $_smarty_tpl->tpl_vars['value']->value['InsuredValue']['Currency'];?>
" /> </td>
</tr>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>
<tr><td><br/></td></tr>
</table>
<span style="font-weight:bold;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select Packing Type','mod'=>'hitups'),$_smarty_tpl ) );?>
:</span>

<select name="hit_ups_packing" class="chosen-single">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['packing_types_ser']->value, 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
<option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">[<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
] <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value,'html','UTF-8' ));?>
</option>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</select>


<span style="font-weight:bold;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select Service','mod'=>'hitups'),$_smarty_tpl ) );?>
:</span>

<select name="hit_ups_services" class="chosen-single">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['services']->value, 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
<option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['carrier_ups_value']->value == $_smarty_tpl->tpl_vars['key']->value) {?>selected="true"<?php }?> >[<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
] <?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</option>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</select>

<span style="font-weight:bold;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Current Shipment Description','mod'=>'hitups'),$_smarty_tpl ) );?>
:</span>

<input type="text" name="hit_ups_ship_desc" value="<?php if (!empty($_smarty_tpl->tpl_vars['general_settings']->value['label_contents_text'])) {
echo $_smarty_tpl->tpl_vars['general_settings']->value['label_contents_text'];
} else { ?>Shipment Number <?php echo $_smarty_tpl->tpl_vars['order_id']->value;
}?>">
</br>
<button class="btn btn-primary" name="hit_create_shipment_ups">Create Shipment</button>
<?php } else { ?>
<b>Shipment Id : #</b><?php echo $_smarty_tpl->tpl_vars['label_check']->value['ShipmentID'];?>
<br/>
<b>Shipment Selected Service :</b> <?php echo $_smarty_tpl->tpl_vars['services']->value[$_smarty_tpl->tpl_vars['label_check']->value['selected_service']];?>
<br/><br/>
<!-- <a href="hit_ups_shipping_label_<?php echo $_smarty_tpl->tpl_vars['order_id']->value;?>
.gif" target="_blank" class="btn btn-primary" name="hit_ups_shipment_label">Shipment Label</a> -->
<button class="btn btn-primary" name="hit_ups_shipment_label">Shipment Label</button>
<button class="btn btn-primary" name="hit_ups_commercial_invoice">Commercial Invoice</button>
<button class="btn btn-primary" name="hit_ups_reset_invoice">Reset Shipment</button>

<?php }?>
</div>
</form><?php }
}
