<?php
/* Smarty version 3.1.33, created on 2020-04-07 12:43:22
  from '/home2/sheridantools/public_html/modules/hitups/views/templates/admin/configure.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e8cadaa9b8cc3_25583483',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b80ae6aef9e1eba7a0c08405555e960ef962e6f' => 
    array (
      0 => '/home2/sheridantools/public_html/modules/hitups/views/templates/admin/configure.tpl',
      1 => 1583640909,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e8cadaa9b8cc3_25583483 (Smarty_Internal_Template $_smarty_tpl) {
?>
<table style="width:100%">
<tr>
<td  style="width:45%;text-align:top;vertical-align:baseline;padding:5px;">
<form method="post">
<div class="panel">
<h3><i class="icon icon-tags"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'UPS Account Information','mod'=>'hitups'),$_smarty_tpl ) );?>
</h3>
<table style="width:100%;">
<tr valign="top">
<td scope="row" class="titledesc" style="width:100%;text-align:center;display: block;margin-bottom: 20px;margin-top: 3px;">
<center>
<fieldset style="padding:3px;">
<?php if ((isset($_smarty_tpl->tpl_vars['general_settings']->value['production']) && $_smarty_tpl->tpl_vars['general_settings']->value['production'] === 'yes')) {?>
<input class="input-text regular-input " type="radio" name="hit_ups_shipping_production"  id="hit_ups_shipping_production_test" value="no" placeholder=""> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Test Mode','mod'=>'hitups'),$_smarty_tpl ) );?>

<input class="input-text regular-input " type="radio"  name="hit_ups_shipping_production" checked="true" id="hit_ups_shipping_production" value="yes" placeholder=""> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Live Mode','mod'=>'hitups'),$_smarty_tpl ) );?>

<?php } else { ?>
<input class="input-text regular-input " type="radio" name="hit_ups_shipping_production" checked="true" id="hit_ups_shipping_production_test" value="no" placeholder=""> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Test Mode','mod'=>'hitups'),$_smarty_tpl ) );?>

<input class="input-text regular-input " type="radio" name="hit_ups_shipping_production" id="hit_ups_shipping_production" value="yes" placeholder=""> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Live Mode','mod'=>'hitups'),$_smarty_tpl ) );?>

<?php }?>
<br>
</fieldset>
<fieldset style="padding:3px;width:50%">
<label for="hit_ups_shipping_ac_num"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Account Number','mod'=>'hitups'),$_smarty_tpl ) );?>
</label> <br/><input class="input-text regular-input " style="    display: block;
width: 100%;height: 31px;padding: 6px 8px;font-size: 12px;line-height: 1.42857;color: #555;background-color: #F5F8F9;background-image: none;border: 1px solid #C7D6DB;border-radius: 3px;" type="text" name="hit_ups_shipping_ac_num" id="hit_ups_shipping_ac_num"  value="<?php if ((isset($_smarty_tpl->tpl_vars['general_settings']->value['account_number']))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['general_settings']->value['account_number'],'html','UTF-8' ));
} else { ?>130000279<?php }?>" placeholder="130000279"> 
</fieldset>
<fieldset style="padding:3px;width:50%">
<label for="hit_ups_shipping_site_id"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'User ID','mod'=>'hitups'),$_smarty_tpl ) );?>
</label> <input class="input-text regular-input " type="text" name="hit_ups_shipping_site_id" id="hit_ups_shipping_site_id"  value="<?php if ((isset($_smarty_tpl->tpl_vars['general_settings']->value['site_id']))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['general_settings']->value['site_id'],'html','UTF-8' ));
} else { ?>130000279<?php }?>" placeholder="Enter UPS Site ID"> 
</fieldset>
<fieldset style="padding:3px;width:50%">
<label for="hit_ups_shipping_site_pwd"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'User Password','mod'=>'hitups'),$_smarty_tpl ) );?>
</label> <input class="input-text regular-input " type="password" name="hit_ups_shipping_site_pwd" id="hit_ups_shipping_site_pwd"  value="<?php if ((isset($_smarty_tpl->tpl_vars['general_settings']->value['site_pwd']))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['general_settings']->value['site_pwd'],'html','UTF-8' ));
} else { ?>130000279<?php }?>" placeholder="130000279"> 
</fieldset>
<fieldset style="padding:3px;width:50%">
<label for="hit_ups_shipping_site_acess"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Access Key','mod'=>'hitups'),$_smarty_tpl ) );?>
</label> <input class="input-text regular-input " type="text" name="hit_ups_shipping_site_acess" id="hit_ups_shipping_site_acess"  value="<?php if ((isset($_smarty_tpl->tpl_vars['general_settings']->value['site_acess']))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['general_settings']->value['site_acess'],'html','UTF-8' ));
} else { ?>130000279<?php }?>" placeholder="130000279"> 
</fieldset>
<br/><small style="color:green;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enter your UPS online account number, UPS Site ID and UPS site password as obtained from UPS. You can contact your UPS sales representative for this.','mod'=>'hitups'),$_smarty_tpl ) );?>
</small>
</center>
</td>
</tr>
</table>
</div>
<div class="panel">
<h3><i class="icon icon-tags"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Rates Section (Front Office)','mod'=>'hitups'),$_smarty_tpl ) );?>
</h3>
<table style="width:100%;">
<tr valign="top" ">
<td style="width:45%;font-weight:800;">
<label for="hit_ups_shipping_delivery_time"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enable/Disable','mod'=>'hitups'),$_smarty_tpl ) );?>
</label>
</td>
<td scope="row" class="titledesc" style="display: block;margin-bottom: 20px;margin-top: 3px;">
<fieldset style="padding:3px;">
	<input class="input-text regular-input " type="radio" name="hit_ups_shipping_rate_live" style="" value="live" <?php if (((isset($_smarty_tpl->tpl_vars['general_settings']->value['rate_live']) && $_smarty_tpl->tpl_vars['general_settings']->value['rate_live'] === 'live') || (isset($_smarty_tpl->tpl_vars['general_settings']->value['rate_live']) && $_smarty_tpl->tpl_vars['general_settings']->value['rate_live'] === 'yes') || (empty($_smarty_tpl->tpl_vars['general_settings']->value['rate_live'])))) {?>checked<?php }?> placeholder="">  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enable Real-time Rates','mod'=>'hitups'),$_smarty_tpl ) );?>
 <br/><small style="color:green;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'On enabling this, the Live rates will be shown in the cart/checkout page.','mod'=>'hitups'),$_smarty_tpl ) );?>
</small>
</fieldset>
<fieldset style="padding:3px;">
	<input class="input-text regular-input " type="radio" name="hit_ups_shipping_rate_live" style="" value="local" <?php if ((isset($_smarty_tpl->tpl_vars['general_settings']->value['rate_live']) && $_smarty_tpl->tpl_vars['general_settings']->value['rate_live'] === 'local')) {?>checked<?php }?> placeholder="">  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enable Local Rates','mod'=>'hitups'),$_smarty_tpl ) );?>
 <br/><small style="color:green;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'On enabling this, the Prestashop configured rates will be shown in the cart/checkout page.','mod'=>'hitups'),$_smarty_tpl ) );?>
</small>
</fieldset>
<fieldset style="padding:3px;">
	<input class="input-text regular-input " type="radio" name="hit_ups_shipping_rate_live" style="" value="disable" <?php if ((isset($_smarty_tpl->tpl_vars['general_settings']->value['rate_live']) && $_smarty_tpl->tpl_vars['general_settings']->value['rate_live'] === 'disable')) {?>checked<?php }?> placeholder="">  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Disable Rates','mod'=>'hitups'),$_smarty_tpl ) );?>
 <br/><small style="color:green;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'On enabling this, Rates are get disabled.','mod'=>'hitups'),$_smarty_tpl ) );?>
</small>
</fieldset>
<fieldset style="padding:3px;">
<input class="input-text regular-input " type="checkbox" name="hit_ups_shipping_rate_insure" id="hit_ups_shipping_rate_insure" style="" value="yes" <?php if ((isset($_smarty_tpl->tpl_vars['general_settings']->value['rate_insure']) && $_smarty_tpl->tpl_vars['general_settings']->value['rate_insure'] === 'yes')) {?>checked<?php }?> placeholder="">  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enable Insurance','mod'=>'hitups'),$_smarty_tpl ) );?>
 <br/><small style="color:green;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enable this to insure your products. The insured value will be the total cart value.','mod'=>'hitups'),$_smarty_tpl ) );?>
</small>
</fieldset>
</td>
</tr>
<tr valign="top" ">
<td style="width:45%;font-weight:800;">
<label for="hit_ups_shipping_delivery_time"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show/Hide','mod'=>'hitups'),$_smarty_tpl ) );?>
</label>
</td>
<td scope="row" class="titledesc" style="display: block;margin-bottom: 20px;margin-top: 3px;">
<fieldset style="padding:3px;">
<input class="input-text regular-input " type="checkbox" name="hit_ups_shipping_request_type" id="hit_ups_shipping_request_type" style="" value="yes" <?php if ((isset($_smarty_tpl->tpl_vars['general_settings']->value['request_type']) && $_smarty_tpl->tpl_vars['general_settings']->value['request_type'] === 'yes')) {?>checked<?php }?> placeholder="">  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show UPS Negotiated Rates','mod'=>'hitups'),$_smarty_tpl ) );?>
 <br/><small style="color:green;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'On enabling this, the plugin will fetch the account specific rates of the shipper.','mod'=>'hitups'),$_smarty_tpl ) );?>
</small>

</fieldset>


</td>
</tr>
<tr valign="top" ">
<td style="width:45%;font-weight:800;">
<label for="hit_ups_shipping_exclude"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Exclude Countries','mod'=>'hitups'),$_smarty_tpl ) );?>
</label>
</td>
<td scope="row" class="titledesc" style="display: block;margin-bottom: 20px;margin-top: 3px;">
<fieldset style="padding:3px;">
<select name="hit_ups_shipping_exclude[]" class="chosen" multiple="true">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countires']->value, 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
	<?php if ((isset($_smarty_tpl->tpl_vars['selected_excountrys']->value)) && in_array($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['selected_excountrys']->value)) {?>
	<option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" selected="true"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</option>
	<?php } else { ?>
	<option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</option>
	<?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</select>

</fieldset>


</td>
</tr>
<tr valign="top" ">
<td style="width:45%;font-weight:800;">
<label for="hit_ups_shipping_excus"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'WhiteList Customer from Selected Countires','mod'=>'hitups'),$_smarty_tpl ) );?>
</label>
</td>
<td scope="row" class="titledesc" style="display: block;margin-bottom: 20px;margin-top: 3px;">
<fieldset style="padding:3px;">
<select name="hit_ups_shipping_excus[]" class="chosen" multiple="true">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_cus']->value, 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
	<?php if ((isset($_smarty_tpl->tpl_vars['selected_excus']->value)) && in_array($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['selected_excus']->value)) {?>
	<option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" selected="true"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</option>
	<?php } else { ?>
	<option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</option>
	<?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</select>
</fieldset>


</td>
</tr>
</table>
</div>
<div class="panel">
<h3><i class="icon icon-tags"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose Packaging','mod'=>'hitups'),$_smarty_tpl ) );?>
</h3>
<table style="width:100%;">
<tr valign="top" ">
<td style="width:45%;font-weight:800;">
<label for="hit_ups_shipping_packing_type"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose Weight/Dimension Unit','mod'=>'hitups'),$_smarty_tpl ) );?>
</label><span style="color:red;"></span>
</td>
<td scope="row" class="titledesc" style="display: block;margin-bottom: 20px;margin-top: 3px;">
<fieldset style="padding:3px;">
<?php if ((isset($_smarty_tpl->tpl_vars['general_settings']->value['weg_dim']) && $_smarty_tpl->tpl_vars['general_settings']->value['weg_dim'] === 'yes')) {?>
<input class="input-text regular-input " type="radio" name="hit_ups_shipping_weg_dim"  id="hit_ups_shipping_weg_dim_lb" value="no" placeholder=""> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'LBS - IN','mod'=>'hitups'),$_smarty_tpl ) );?>

<input class="input-text regular-input " type="radio"  name="hit_ups_shipping_weg_dim" checked="true" id="hit_ups_shipping_weg_dim" value="yes" placeholder=""> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'KG - CM','mod'=>'hitups'),$_smarty_tpl ) );?>

<?php } else { ?>
<input class="input-text regular-input " type="radio" name="hit_ups_shipping_weg_dim" checked="true" id="hit_ups_shipping_weg_dim_lb" value="no" placeholder=""> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'LBS - IN','mod'=>'hitups'),$_smarty_tpl ) );?>

<input class="input-text regular-input " type="radio" name="hit_ups_shipping_weg_dim" id="hit_ups_shipping_weg_dim" value="yes" placeholder=""> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'KG - CM','mod'=>'hitups'),$_smarty_tpl ) );?>

<?php }?>
<br>
</fieldset>
</td>
</tr>
<tr valign="top" ">
<td style="width:45%;font-weight:800;">
<label for="hit_ups_shipping_packing_type"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose your packing type','mod'=>'hitups'),$_smarty_tpl ) );?>
</label><span style="color:red;">*</span>
</td>
<td scope="row" class="titledesc" style="display: block;margin-bottom: 20px;margin-top: 3px;">
<fieldset style="padding:3px;">
<input class="input-text regular-input " type="radio" name="hit_ups_shipping_packing_type" id="hit_ups_shipping_packing_type_per" style="" value="per_item" <?php if ((isset($_smarty_tpl->tpl_vars['general_settings']->value['packing_type']) && $_smarty_tpl->tpl_vars['general_settings']->value['packing_type'] === 'per_item')) {?>checked<?php }?> placeholder="">  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Default: Pack items individually','mod'=>'hitups'),$_smarty_tpl ) );?>
 <br/><small style="color:green;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'UPS Box: There are the most commonly used boxes for packing. These are the boxes which get populated when you install the plugin. Flyer: This option is suitable for Binded documents and Flat materials. Your Box: With this option, your item gets packed into customized box. For example, the shipping cost of Item X is £10. If the customer adds two quantities of Item X to the Cart, then the total shipping cost is £10 x 2, which is £20.','mod'=>'hitups'),$_smarty_tpl ) );?>
</small>
</fieldset>
<fieldset style="padding:3px;">
<input class="input-text regular-input " type="radio" name="hit_ups_shipping_packing_type" id="hit_ups_shipping_packing_type_box" style="" value="box" <?php if ((isset($_smarty_tpl->tpl_vars['general_settings']->value['packing_type']) && $_smarty_tpl->tpl_vars['general_settings']->value['packing_type'] === 'box')) {?>checked<?php }?> placeholder="">  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Recommended: Pack into boxes with weights and dimensions','mod'=>'hitups'),$_smarty_tpl ) );?>
 <br/><small style="color:green;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Box Sizes - This section allows you to create your own box size(dimensions) and provide the box weight.','mod'=>'hitups'),$_smarty_tpl ) );?>
</small>
</fieldset>
<fieldset style="padding:3px;">
<input class="input-text regular-input " type="radio" name="hit_ups_shipping_packing_type" id="hit_ups_shipping_packing_type" style="" value="weight_based" <?php if ((isset($_smarty_tpl->tpl_vars['general_settings']->value['packing_type']) && $_smarty_tpl->tpl_vars['general_settings']->value['packing_type'] === 'weight_based')) {?>checked<?php }?> placeholder="">  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Weight based: Calculate shipping on the basis of order total weight','mod'=>'hitups'),$_smarty_tpl ) );?>
 <br/><small style="color:green;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This option will allow each box to hold the maximum value provided in the field.','mod'=>'hitups'),$_smarty_tpl ) );?>
</small>
</fieldset>
</td>
</tr>
</table>
</div>
</div>
<div class="panel">
<h3><i class="icon icon-tags"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Box Packing','mod'=>'hitups'),$_smarty_tpl ) );?>
</h3>
<table style="width:100%;" class="ups_boxes">
<tr>
<th style="padding:3px;"><input type="checkbox" /></th>
<th style="padding:3px;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name','mod'=>'hitups'),$_smarty_tpl ) );?>
</th>
<th style="padding:3px;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Length','mod'=>'hitups'),$_smarty_tpl ) );?>
</th>
<th style="padding:3px;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Width','mod'=>'hitups'),$_smarty_tpl ) );?>
</th>
<th style="padding:3px;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Height','mod'=>'hitups'),$_smarty_tpl ) );?>
</th>
<th style="padding:3px;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Box Weight','mod'=>'hitups'),$_smarty_tpl ) );?>
</th>
<th style="padding:3px;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Max Weight','mod'=>'hitups'),$_smarty_tpl ) );?>
</th>
<th style="padding:3px;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enabled','mod'=>'hitups'),$_smarty_tpl ) );?>
</th>
</tr>
<tfoot>
<tr>
<th colspan="3">
<a href="#" class="plus insert btn" style="vertical-align: center;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add Box','mod'=>'hitups'),$_smarty_tpl ) );?>
</a>
<a href="#" class="minus remove btn"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove selected box(es)','mod'=>'hitups'),$_smarty_tpl ) );?>
</a>
</th>
<th colspan="6">
<small class="description"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Preloaded the Dimension and Weight in unit Inches and Pound. If you have selected unit as Centimetre and Kilogram please convert it accordingly.','mod'=>'hitups'),$_smarty_tpl ) );?>
</small>
</th>
</tr>
</tfoot>
<tbody id="rates">
<?php if ($_smarty_tpl->tpl_vars['boxes']->value) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['boxes']->value, 'box', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['box']->value) {
?>
<tr>
<td class="check-column" style="padding:3px;"><input type="checkbox" /></td>
<input type="hidden" size="1" name="boxes_id[<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
]" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['box']->value['id'],'html','UTF-8' ));?>
" />
<td style="padding:3px;"><input type="text" size="25" name="boxes_name[<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
]" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['box']->value['name'],'html','UTF-8' ));?>
" /></td>

<td style="padding:3px;"><input type="text" style="width:100%;" name="boxes_length[<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
]" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['box']->value['length'],'html','UTF-8' ));?>
" /></td>
<td style="padding:3px;"><input type="text" style="width:100%;" name="boxes_width[<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
]" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['box']->value['width'],'html','UTF-8' ));?>
" /></td>
<td style="padding:3px;"><input type="text" style="width:100%;" name="boxes_height[<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
]" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['box']->value['height'],'html','UTF-8' ));?>
" /></td>

<td style="padding:3px;"><input type="text" style="width:100%;" name="boxes_box_weight[<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
]" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['box']->value['box_weight'],'html','UTF-8' ));?>
" /></td>
<td style="padding:3px;"><input type="text" style="width:100%;" name="boxes_max_weight[<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
]" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['box']->value['max_weight'],'html','UTF-8' ));?>
" /></td>
<td style="padding:3px;"><center><input type="checkbox" name="boxes_enabled[<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
]" <?php if ($_smarty_tpl->tpl_vars['box']->value['enabled'] == true) {?>checked<?php }?> /></center></td>
</tr>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>
</table>

</div>
<div class="panel">
<h3><i class="icon icon-tags"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Weight Based packing','mod'=>'hitups'),$_smarty_tpl ) );?>
</h3>
<table style="width:100%;">
<tr valign="top">
<td style="width:45%;font-weight:800;">
<label for="hit_ups_shipping_packing_type"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Maximum Weight / Packing','mod'=>'hitups'),$_smarty_tpl ) );?>
</label><span style="color:red;">*</span>
</td>
<td scope="row" class="titledesc" style="display: block;width:100%;margin-bottom: 20px;margin-top: 3px;">
<fieldset style="padding:5px;">
<input class="input-text regular-input " type="text" name="hit_ups_shipping_box_max_weight" id="hit_ups_shipping_box_max_weight" style="" value="<?php if ((isset($_smarty_tpl->tpl_vars['general_settings']->value['box_max_weight']))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['general_settings']->value['box_max_weight'],'html','UTF-8' ));
}?>" placeholder="">
</fieldset>
<fieldset style="padding:5px;">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['weight_type']->value, 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
if ($_smarty_tpl->tpl_vars['key']->value === $_smarty_tpl->tpl_vars['slected_weight_type']->value) {?>
<input class="input-text regular-input " type="radio" name="hit_ups_shipping_weight_packing_process" id="hit_ups_shipping_weight_packing_process_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" style="" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" checked="true" placeholder=""> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value,'html','UTF-8' ));?>
<br/>
<?php } else { ?>
<input class="input-text regular-input " type="radio" name="hit_ups_shipping_weight_packing_process" id="hit_ups_shipping_weight_packing_process_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" style="" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"  placeholder=""> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value,'html','UTF-8' ));?>
<br/>
<?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</td>
</tr>
<tr valign="top">
<td style="width:45%;font-weight:800;">
<label for="hit_ups_shipping_dimension_send"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Send Dimension to UPS','mod'=>'hitups'),$_smarty_tpl ) );?>
</label>
</td>
<td scope="row" class="titledesc" style="display: block;width:100%;margin-bottom: 20px;margin-top: 3px;">
			<fieldset style="padding:5px;">
				 <input class="input-text regular-input " type="checkbox" name="hit_ups_shipping_dimension_send" id="hit_ups_shipping_dimension_send" style="" value="yes" <?php if ((isset($_smarty_tpl->tpl_vars['general_settings']->value['dimension_send']) && $_smarty_tpl->tpl_vars['general_settings']->value['dimension_send'] === 'yes')) {?>checked<?php }?> placeholder=""> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enable','mod'=>'hitups'),$_smarty_tpl ) );?>

			</fieldset>
			
		</td>
</tr>
</table>
</div>
<div class="panel">
	<h3><i class="icon icon-tags"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Developer Use Only','mod'=>'hitups'),$_smarty_tpl ) );?>
</h3>
		<table style="width:100%;">
		<tr valign="top" ">
		<td style="width:45%;font-weight:800;">
			<label for="hit_ups_shipping_packing_type"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enable to See Request and Response in Front Office','mod'=>'hitups'),$_smarty_tpl ) );?>
</label>
		</td>
		<td scope="row" class="titledesc" style="display: block;width:100%;margin-bottom: 20px;margin-top: 3px;">
			<fieldset style="padding:5px;">
				 <input class="input-text regular-input " type="checkbox" name="hit_ups_shipping_dev_f" id="hit_ups_shipping_dev_f" style="" value="yes" <?php if ((isset($_smarty_tpl->tpl_vars['general_settings']->value['dev_f']) && $_smarty_tpl->tpl_vars['general_settings']->value['dev_f'] === 'yes')) {?>checked<?php }?> placeholder=""> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enable','mod'=>'hitups'),$_smarty_tpl ) );?>
 <br/><small style="color:green;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Dont Enable this. Its for find a error.",'mod'=>'hitups'),$_smarty_tpl ) );?>
</small>
			</fieldset>
			
		</td>
		</tr><tr>
		<td style="width:45%;font-weight:800;">
			<label for="hit_ups_shipping_packing_type"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enable to See Request and Response in Back Office','mod'=>'hitups'),$_smarty_tpl ) );?>
</label>
		</td>
		<td scope="row" class="titledesc" style="display: block;width:100%;margin-bottom: 20px;margin-top: 3px;">
			<fieldset style="padding:5px;">
				 <input class="input-text regular-input " type="checkbox" name="hit_ups_shipping_dev_b" id="hit_ups_shipping_dev_b" style="" value="yes" <?php if ((isset($_smarty_tpl->tpl_vars['general_settings']->value['dev_b']) && $_smarty_tpl->tpl_vars['general_settings']->value['dev_b'] === 'yes')) {?>checked<?php }?> placeholder=""> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enable','mod'=>'hitups'),$_smarty_tpl ) );?>
 <br/><small style="color:green;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Dont Enable this. Its for find a error.",'mod'=>'hitups'),$_smarty_tpl ) );?>
</small>
			</fieldset>
			
		</td>
	</tr>
</table>
</div>
</td>
<td style="text-align:top;vertical-align:baseline;padding:2px;">
<div class="panel">
<h3><i class="icon icon-tags"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shipper Address','mod'=>'hitups'),$_smarty_tpl ) );?>
</h3>
<table style="width:100%;">
<tr valign="top">
<td scope="row" class="titledesc" style="display: block;margin-bottom: 20px;margin-top: 3px;">
<center>
<table>
<tr>
<td>
<fieldset style="padding-left:3px;">
<label for="hit_ups_shipping_"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shipper Name','mod'=>'hitups'),$_smarty_tpl ) );?>
<font style="color:red;">*</font></label> <br/>
<input class="input-text regular-input " type="text" name="hit_ups_shipping_shipper_person_name" id="hit_ups_shipping_shipper_person_name" style="" value="<?php if ((isset($_smarty_tpl->tpl_vars['general_settings']->value['shipper_person_name']))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['general_settings']->value['shipper_person_name'],'html','UTF-8' ));
}?>" placeholder=""> 	
</fieldset>
</td>
<td>
<fieldset style="padding-left:3px;">
<label for="hit_ups_shipping_"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Company Name','mod'=>'hitups'),$_smarty_tpl ) );?>
<font style="color:red;">*</font></label><br/>
<input class="input-text regular-input " type="text" name="hit_ups_shipping_shipper_company_name" id="hit_ups_shipping_shipper_company_name" style="" value="<?php if ((isset($_smarty_tpl->tpl_vars['general_settings']->value['shipper_company_name']))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['general_settings']->value['shipper_company_name'],'html','UTF-8' ));
}?>" placeholder=""> 	
</fieldset>

</td>
<td>

<fieldset style="padding-left:3px;">
<label for="hit_ups_shipping_"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Phone Number','mod'=>'hitups'),$_smarty_tpl ) );?>
<font style="color:red;">*</font></label> <span class="woocommerce-help-tip" data-tip="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Phone number of the shipper.','mod'=>'hitups'),$_smarty_tpl ) );?>
"></span>	<br/>
<input class="input-text regular-input " style="display: block;width: 100%;height: 31px;padding: 6px 8px;font-size: 12px;line-height: 1.42857;color: #555;background-color: #F5F8F9;background-image: none;border: 1px solid #C7D6DB;border-radius: 3px;" type="number" name="hit_ups_shipping_shipper_phone_number" id="hit_ups_shipping_shipper_phone_number" style="" value="<?php if ((isset($_smarty_tpl->tpl_vars['general_settings']->value['shipper_phone_number']))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['general_settings']->value['shipper_phone_number'],'html','UTF-8' ));
}?>" placeholder=""> 	
</fieldset>
</td>
</tr>
<tr>

<td>

<fieldset style="padding-left:3px;">
<label for="hit_ups_shipping_"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email Address','mod'=>'hitups'),$_smarty_tpl ) );?>
</label> <br/>
<input class="input-text regular-input " style="display: block;width: 100%;height: 31px;padding: 6px 8px;font-size: 12px;line-height: 1.42857;color: #555;background-color: #F5F8F9;background-image: none;border: 1px solid #C7D6DB;border-radius: 3px;" type="email" name="hit_ups_shipping_shipper_email" id="hit_ups_shipping_shipper_email" style="" value="<?php if ((isset($_smarty_tpl->tpl_vars['general_settings']->value['shipper_email']))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['general_settings']->value['shipper_email'],'html','UTF-8' ));
}?>" placeholder=""> 	
</fieldset>
</td>
<td>

<fieldset style="padding-left:3px;">
<label for="hit_ups_shipping_"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Address Line 1','mod'=>'hitups'),$_smarty_tpl ) );?>
<font style="color:red;">*</font></label><br> 
<input class="input-text regular-input " type="text" name="hit_ups_shipping_freight_shipper_street" id="hit_ups_shipping_freight_shipper_street" style="" value="<?php if ((isset($_smarty_tpl->tpl_vars['general_settings']->value['freight_shipper_street']))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['general_settings']->value['freight_shipper_street'],'html','UTF-8' ));
}?>" placeholder=""> 	
</fieldset>

</td>
<td>

<fieldset style="padding-left:3px;">
<label for="hit_ups_shipping_"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Address Line 2','mod'=>'hitups'),$_smarty_tpl ) );?>
</label><br/> 
<input class="input-text regular-input " type="text" name="hit_ups_shipping_shipper_street_2" id="hit_ups_shipping_shipper_street_2" style="" value="<?php if ((isset($_smarty_tpl->tpl_vars['general_settings']->value['shipper_street_2']))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['general_settings']->value['shipper_street_2'],'html','UTF-8' ));
}?>" placeholder=""> 	
</fieldset>

</td>
</tr>
<tr>
<td>
<fieldset style="padding-left:3px;">
<label for="hit_ups_shipping_freight_shipper_city"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'City','mod'=>'hitups'),$_smarty_tpl ) );?>
<font style="color:red;">*</font></label>  <br/>

<input class="input-text regular-input " type="text" name="hit_ups_shipping_freight_shipper_city" id="hit_ups_shipping_freight_shipper_city" style="" value="<?php if ((isset($_smarty_tpl->tpl_vars['general_settings']->value['freight_shipper_city']))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['general_settings']->value['freight_shipper_city'],'html','UTF-8' ));
}?>" placeholder="">
</fieldset>
</td>
<td>
<fieldset style="padding-left:3px;">

<label for="hit_ups_shipping_freight_shipper_state"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'State','mod'=>'hitups'),$_smarty_tpl ) );?>
<font style="color:red;">*</font></label> <span class="woocommerce-help-tip" data-tip="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'State of the shipper.','mod'=>'hitups'),$_smarty_tpl ) );?>
"></span>	<br/>
<input class="input-text regular-input " type="text" name="hit_ups_shipping_freight_shipper_state" id="hit_ups_shipping_freight_shipper_state" style="" value="<?php if ((isset($_smarty_tpl->tpl_vars['general_settings']->value['freight_shipper_state']))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['general_settings']->value['freight_shipper_state'],'html','UTF-8' ));
}?>" placeholder="">
</fieldset>
</td>
<td>

<fieldset style="padding-left:3px;">

<label for="hit_ups_shipping_base_country"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Country','mod'=>'hitups'),$_smarty_tpl ) );?>
<font style="color:red;">*</font></label> <span class="woocommerce-help-tip" data-tip="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Country of the shipper(Used for fetching rates and label generation).','mod'=>'hitups'),$_smarty_tpl ) );?>
"></span><br/>
<select name="hit_ups_shipping_base_country" class="chosen">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countires']->value, 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
	<?php if ((isset($_smarty_tpl->tpl_vars['general_settings']->value['base_country'])) && $_smarty_tpl->tpl_vars['general_settings']->value['base_country'] == $_smarty_tpl->tpl_vars['key']->value) {?>
	<option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" selected="true"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</option>
	<?php } else { ?>
	<option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</option>
	<?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</select>

</fieldset>
</td>

</tr>
<tr>
<td>	
<fieldset style="padding-left:3px;">

<label for="hit_ups_shipping_origin"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Postal Code','mod'=>'hitups'),$_smarty_tpl ) );?>
<font style="color:red;">*</font></label> <span class="woocommerce-help-tip" data-tip="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Postal code of the shipper(Used for fetching rates and label generation).','mod'=>'hitups'),$_smarty_tpl ) );?>
"></span><br/>
<input class="input-text regular-input " type="text" name="hit_ups_shipping_origin" id="hit_ups_shipping_origin" style="" value="<?php if ((isset($_smarty_tpl->tpl_vars['general_settings']->value['origin']))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['general_settings']->value['origin'],'html','UTF-8' ));
}?>" placeholder="">
</fieldset>
</td>
</center>
</tr>
</table>
</td>
</tr>
</table>
</div>
<div class="panel">
<h3><i class="icon icon-tags"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Services & Price Adjustment','mod'=>'hitups'),$_smarty_tpl ) );?>
</h3>
<table style="width:100%">
<tr>
<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Service Code','mod'=>'hitups'),$_smarty_tpl ) );?>
</th>
<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name','mod'=>'hitups'),$_smarty_tpl ) );?>
</th>
<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enabled','mod'=>'hitups'),$_smarty_tpl ) );?>
</th>
<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Price Adjustment",'mod'=>'hitups'),$_smarty_tpl ) );?>
</th>
<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Price Adjustment (%)','mod'=>'hitups'),$_smarty_tpl ) );?>
</th>
<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Free Shipping ( From Amount)','mod'=>'hitups'),$_smarty_tpl ) );?>
</th>
</tr>
<tr>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['services']->value, 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->_assignInScope('code', $_smarty_tpl->tpl_vars['key']->value);
$_smarty_tpl->_assignInScope('name', $_smarty_tpl->tpl_vars['value']->value);?>
<tr>
<td style="padding:3px;"><strong><?php echo $_smarty_tpl->tpl_vars['code']->value;?>
</strong></td>
<td style="padding:3px;"><strong><?php ob_start();
echo $_smarty_tpl->tpl_vars['code']->value;
$_prefixVariable1 = ob_get_clean();
if (isset($_smarty_tpl->tpl_vars['services']->value[$_prefixVariable1]['name'])) {
ob_start();
echo $_smarty_tpl->tpl_vars['code']->value;
$_prefixVariable2 = ob_get_clean();
echo $_smarty_tpl->tpl_vars['services']->value[$_prefixVariable2]['name'];
} else {
echo $_smarty_tpl->tpl_vars['name']->value;
}?></strong><input type="hidden" name="ups_service[<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
][name]" value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['code']->value;
$_prefixVariable3 = ob_get_clean();
if (isset($_smarty_tpl->tpl_vars['services']->value[$_prefixVariable3]['name'])) {
ob_start();
echo $_smarty_tpl->tpl_vars['code']->value;
$_prefixVariable4 = ob_get_clean();
echo $_smarty_tpl->tpl_vars['services']->value[$_prefixVariable4]['name'];
} else {
echo $_smarty_tpl->tpl_vars['name']->value;
}?>"/></td>
<td style="padding:3px;"><input type="checkbox" name="ups_service[<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
][enabled]" <?php ob_start();
echo $_smarty_tpl->tpl_vars['code']->value;
$_prefixVariable5 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['code']->value;
$_prefixVariable6 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['code']->value;
$_prefixVariable7 = ob_get_clean();
if (((isset($_smarty_tpl->tpl_vars['services']->value[$_prefixVariable5]['enabled']) && $_smarty_tpl->tpl_vars['services']->value[$_prefixVariable6]['enabled'] == true) || (!isset($_smarty_tpl->tpl_vars['services']->value[$_prefixVariable7]['name'])))) {?>checked<?php }?> /></td>
<td style="padding:3px;"><input style="display: block;width: 100%;height: 31px;padding: 6px 8px;font-size: 12px;line-height: 1.42857;color: #555;background-color: #F5F8F9;background-image: none;border: 1px solid #C7D6DB;border-radius: 3px;" type="number" name="ups_service[<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
][adjustment]" placeholder="N/A" value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['code']->value;
$_prefixVariable8 = ob_get_clean();
if (isset($_smarty_tpl->tpl_vars['services']->value[$_prefixVariable8]['adjustment'])) {
ob_start();
echo $_smarty_tpl->tpl_vars['code']->value;
$_prefixVariable9 = ob_get_clean();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['services']->value[$_prefixVariable9]['adjustment'],'html','UTF-8' ));
}?>" size="4" /></td>
<td style="padding:3px;"><input style="display: block;width: 100%;height: 31px;padding: 6px 8px;font-size: 12px;line-height: 1.42857;color: #555;background-color: #F5F8F9;background-image: none;border: 1px solid #C7D6DB;border-radius: 3px;" type="number" name="ups_service[<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
][adjustment_percent]" placeholder="N/A" value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['code']->value;
$_prefixVariable10 = ob_get_clean();
if (isset($_smarty_tpl->tpl_vars['services']->value[$_prefixVariable10]['adjustment_percent'])) {
ob_start();
echo $_smarty_tpl->tpl_vars['code']->value;
$_prefixVariable11 = ob_get_clean();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['services']->value[$_prefixVariable11]['adjustment_percent'],'html','UTF-8' ));
}?>" size="4" /></td>
<td style="padding:3px;"><input style="display: block;width: 100%;height: 31px;padding: 6px 8px;font-size: 12px;line-height: 1.42857;color: #555;background-color: #F5F8F9;background-image: none;border: 1px solid #C7D6DB;border-radius: 3px;" type="number" name="ups_service[<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
][freeshipping]" placeholder="N/A" value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['code']->value;
$_prefixVariable12 = ob_get_clean();
if (isset($_smarty_tpl->tpl_vars['services']->value[$_prefixVariable12]['freeshipping'])) {
ob_start();
echo $_smarty_tpl->tpl_vars['code']->value;
$_prefixVariable13 = ob_get_clean();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['services']->value[$_prefixVariable13]['freeshipping'],'html','UTF-8' ));
}?>" size="4" /></td>
</tr>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>

</div>
<div class="panel">
	<h3><i class="icon icon-tags"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shipping label Spacial Services','mod'=>'hitups'),$_smarty_tpl ) );?>
</h3>
		<table style="width:100%;">
		<tr valign="top" ">
		<td style="width:45%;font-weight:800;">
			<label for="hit_ups_shipping_sig_req"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delivery Confirmation','mod'=>'hitups'),$_smarty_tpl ) );?>
</label>
		</td>
		<td scope="row" class="titledesc" style="display: block;width:100%;margin-bottom: 20px;margin-top: 3px;">
			<fieldset style="padding:5px;">
				 <select name="hit_ups_shipping_sig_req">

				 	<option value="0" <?php if ((isset($_smarty_tpl->tpl_vars['general_settings']->value['sig_req'])) && $_smarty_tpl->tpl_vars['general_settings']->value['sig_req'] == "0") {?> selected="true" <?php }?>>No signature Required</option>
				 	<option value="1" <?php if ((isset($_smarty_tpl->tpl_vars['general_settings']->value['sig_req'])) && $_smarty_tpl->tpl_vars['general_settings']->value['sig_req'] == "1") {?> selected="true" <?php }?>>Delivery Confirmation</option>
				 	<option value="2" <?php if ((isset($_smarty_tpl->tpl_vars['general_settings']->value['sig_req'])) && $_smarty_tpl->tpl_vars['general_settings']->value['sig_req'] == "2") {?> selected="true" <?php }?>>Delivery Confirmation Signature Required</option>
				 	<option value="3" <?php if ((isset($_smarty_tpl->tpl_vars['general_settings']->value['sig_req'])) && $_smarty_tpl->tpl_vars['general_settings']->value['sig_req'] == "3") {?> selected="true" <?php }?>>Delivery Confirmation Adult Signature Required</option>
				 </select>
			</fieldset>
			
		</td>
		</tr>
		<tr valign="top" ">
		<td style="width:45%;font-weight:800;">
			<label for="hit_ups_shipping_label_format"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shipping label format','mod'=>'hitups'),$_smarty_tpl ) );?>
</label>
		</td>
		<td scope="row" class="titledesc" style="display: block;width:100%;margin-bottom: 20px;margin-top: 3px;">
			<fieldset style="padding:5px;">
				 <select name="hit_ups_shipping_label_format">
				 	<option value="GIF" <?php if ((isset($_smarty_tpl->tpl_vars['general_settings']->value['label_format'])) && $_smarty_tpl->tpl_vars['general_settings']->value['label_format'] == "GIF") {?> selected="true" <?php }?>>GIF</option>
				 	<option value="PNG" <?php if ((isset($_smarty_tpl->tpl_vars['general_settings']->value['label_format'])) && $_smarty_tpl->tpl_vars['general_settings']->value['label_format'] == "PNG") {?> selected="true" <?php }?>>PNG</option>
				 </select>
			</fieldset>
		</td>
		</tr>
		</table>
</div>
</td>
</tr>
</table>
<tr>
<td>
<button type="submit" class="btn btn-default" name="hit_button_submit" id="hit_button_submit" style="width:100%;padding:10px;background:#301506;color:#FAB80A;font-weight:bold;">Click here to Save All the Settings</button>
</td>
</tr>
</form>

<?php echo '<script'; ?>
 type="text/javascript">
jQuery(window).load(function(){
jQuery('#hit_ups_shipping_add_picup').change(function(){
if(jQuery('#hit_ups_shipping_add_picup').is(':checked')) {
jQuery('#hit_pickup_date').show();
jQuery('#hit_pickup_from_to').show();
jQuery('#hit_pickup_details').show();
}else
{
jQuery('#hit_pickup_date').hide();
jQuery('#hit_pickup_from_to').hide();
jQuery('#hit_pickup_details').hide();
}
}).change();

jQuery('#hit_ups_shipping_add_trackingpin_shipmentid').change(function(){
if(jQuery(hit_ups_shipping_add_trackingpin_shipmentid).is(':checked')) {
jQuery('#ups_email_service').show();
}else
{
jQuery('#ups_email_service').hide();
}
}).change();

jQuery('#hit_ups_shipping_return_label_key').change(function(){
if(jQuery('#hit_ups_shipping_return_label_key').is(':checked')) {
jQuery('#hit_return_label_acc_number').show();
}else
{
jQuery('#hit_return_label_acc_number').hide();
}
}).change();

jQuery('#hit_ups_shipping_request_archive_airway_label').change(function(){
if(jQuery('#hit_ups_shipping_request_archive_airway_label').is(':checked')) {
jQuery('#hit_no_of_archive_bills').show();
}else
{
jQuery('#hit_no_of_archive_bills').hide();
}
}).change();
jQuery('#hit_ups_shipping_ups_email_notification_service').change(function(){
if(jQuery('#hit_ups_shipping_ups_email_notification_service').is(':checked')) {
jQuery('#hit_ups_email_notification_message').show();
}else
{
jQuery('#hit_ups_email_notification_message').hide();
}
}).change();
jQuery('#hit_ups_shipping_dutypayment_type').change(function(){
if(jQuery(this).val() == 'T') {
jQuery('#hit_t_acc_number').show();
}else
{
jQuery('#hit_t_acc_number').hide();
}
}).change();

jQuery('.ups_boxes .insert').click( function() {
var $tbody = jQuery('.ups_boxes').find('#rates');
var size = $tbody.find('tr').size();
var code = '<tr class="new">\
<td  style="padding:3px;" class="check-column"><input type="checkbox" /></td>\
<input type="hidden" size="1" name="boxes_id[' + size + ']" />\
<td style="padding:3px;"><input type="text" size="25" name="boxes_name[' + size + ']" /></td>\
<td style="padding:3px;"><input type="text" style="width:100%;" name="boxes_length[' + size + ']" /></td>\
<td style="padding:3px;"><input type="text" style="width:100%;" name="boxes_width[' + size + ']" /></td>\
<td style="padding:3px;"><input type="text" style="width:100%;" name="boxes_height[' + size + ']" /></td>\
<td style="padding:3px;"><input type="text" style="width:100%;" name="boxes_box_weight[' + size + ']" /></td>\
<td style="padding:3px;"><input type="text" style="width:100%;" name="boxes_max_weight[' + size + ']" /></td>\
<td style="padding:3px;"><center><input type="checkbox" name="boxes_enabled[' + size + ']" /></center></td>\
</tr>';
$tbody.append( code );
return false;
});

jQuery('.ups_boxes .remove').click(function() {
var $tbody = jQuery('.ups_boxes').find('#rates');
$tbody.find('.check-column input:checked').each(function() {
jQuery(this).closest('tr').hide().find('input').val('');
});

return false;
});

});

<?php echo '</script'; ?>
>
<?php }
}
