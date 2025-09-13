<?php
/* Smarty version 3.1.33, created on 2020-03-13 21:45:08
  from 'module:authorizedotnetviewstempl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e6c37249c9063_34530003',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1693f41f0164ce417d42865f917fe54a1c3afc2d' => 
    array (
      0 => 'module:authorizedotnetviewstempl',
      1 => 1580954496,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:authorizedotnet/views/templates/front/conditions_to_approve.tpl' => 1,
  ),
),false)) {
function content_5e6c37249c9063_34530003 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /home2/sheridantools/dev.sheridantools.com/modules/authorizedotnet/views/templates/front/aim_embedded_form.tpl -->


<?php if (!$_smarty_tpl->tpl_vars['adn_payment_page']->value) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'path', null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment','mod'=>'authorizedotnet'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>



<h1 class="page-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order summation','mod'=>'authorizedotnet'),$_smarty_tpl ) );?>
</h1>

<?php $_smarty_tpl->_assignInScope('current_step', 'payment');?>


<?php }?>

<?php echo '<script'; ?>
 type="text/javascript">
    <?php if ($_smarty_tpl->tpl_vars['adn_cim']->value == 1) {?>
        <?php if (!empty($_smarty_tpl->tpl_vars['adn_list_cards']->value)) {?>
    var adn_cards = {
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['adn_list_cards']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
    "<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['v']->value['customer_payment_profile_id']), ENT_QUOTES, 'UTF-8');?>
" :
    {
    "card_type":"<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['v']->value['card_type'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",
            "last4digit":"************<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( substr($_smarty_tpl->tpl_vars['v']->value['last4digit'],4,4),'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",
            "exp_date":"<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['v']->value['exp_date'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",
            "title":"<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['v']->value['title'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
    },
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    };
        <?php }?>
    <?php }?>
    

<?php echo '</script'; ?>
>


<div class="row">
    <div class="">
       
        <div id="adn_payment" class="payment_module pc-eidition presto-payment">



            <form name="adn_form" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8');?>
" id="adn_form" method="post" class="std">
                <input type="hidden" name="confirm" value="1" />
                
               
                <?php if ($_smarty_tpl->tpl_vars['adn_cim']->value == 1) {?>		
                    <?php if (!empty($_smarty_tpl->tpl_vars['adn_list_cards']->value)) {?> 
                        <p class="required label_width_field">
                            <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Saved Cards:','mod'=>'authorizedotnet'),$_smarty_tpl ) );?>
</label>
                            <select name="adn_exist_card" id="adn_exist_card" class="selectBox h32 w80" onchange="changeAdnExistCard();">
                                <option value="0" selected><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please select card','mod'=>'authorizedotnet'),$_smarty_tpl ) );?>
</option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['adn_list_cards']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
                                    <option value="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['v']->value['customer_payment_profile_id']), ENT_QUOTES, 'UTF-8');?>
" ><?php if (!empty($_smarty_tpl->tpl_vars['v']->value['title'])) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['v']->value['title'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 <?php }
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['v']->value['card_type'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 xxxx<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( substr($_smarty_tpl->tpl_vars['v']->value['last4digit'],4,4),'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</option>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                        </p>
                    <?php }?>
                    <?php if (!empty($_smarty_tpl->tpl_vars['adn_list_cards']->value)) {?>

                        <div class="title_card form_row"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Or use a new credit or debit card:','mod'=>'authorizedotnet'),$_smarty_tpl ) );?>
</div>
                    <?php }?>
                <?php }?>

                <div class="form_row half-row f-l">
                    <label for="adn_cc_fname"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Firstname','mod'=>'authorizedotnet'),$_smarty_tpl ) );?>
: </label>	
                    <input type="text" name="adn_cc_fname" id="adn_cc_fname" value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['adn_cc_fname']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="form-control"/> 
                </div>

                <div class="form_row half-row f-r">
                    <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Lastname','mod'=>'authorizedotnet'),$_smarty_tpl ) );?>
: </label>	
                    <input type="text" name="adn_cc_lname" id="adn_cc_lname" value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['adn_cc_lname']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="form-control"/> 
                </div>

                <?php if ($_smarty_tpl->tpl_vars['adn_get_address']->value == "1") {?>

                    <div class="form_row">
                        <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Address','mod'=>'authorizedotnet'),$_smarty_tpl ) );?>
: </label>	
                        <input type="text" name="adn_cc_address" value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['adn_cc_address']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="form-control"/>
                    </div>

                    <div class="form_row half-row f-l">
                        <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'City','mod'=>'authorizedotnet'),$_smarty_tpl ) );?>
: </label>
                        <input type="text" name="adn_cc_city" value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['adn_cc_city']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="form-control"/>
                    </div>

                    <div class="form_row half-row f-r">
                        <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Zipcode','mod'=>'authorizedotnet'),$_smarty_tpl ) );?>
: </label>	
                        <input type="text" name="adn_cc_zip" size="5" value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['adn_cc_zip']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="form-control"/>
                    </div>

                    <div class="form_row half-row f-l">
                        <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Country','mod'=>'authorizedotnet'),$_smarty_tpl ) );?>
: </label>
                        <select name="adn_id_country" id="adn_id_country" class="form-control"><?php echo $_smarty_tpl->tpl_vars['countries_list']->value;?>
</select>                    </div>

                    <div class="form_row half-row f-r">
                        <div class="adn_id_state">
                            <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'State','mod'=>'authorizedotnet'),$_smarty_tpl ) );?>
:  </label>
                            <select name="adn_id_state" id="adn_id_state" class="form-control">
                                <option value="">-</option>
                            </select>
                        </div>
                    </div>
                    <div class="clear"></div>

                <?php }?>
                <div class="form_row">
                    <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Card Number','mod'=>'authorizedotnet'),$_smarty_tpl ) );?>
: </label>
                    <input type="text" name="adn_cc_number" value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['adn_cc_number']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="form-control"/>
                </div>

                <div class="form_row half-row f-l">
                    <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Expiration','mod'=>'authorizedotnet'),$_smarty_tpl ) );?>
: </label>
                    <select name="adn_cc_Month" id="adn_exp_month" class="form-control">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['adn_months']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
                            <option value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['k']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" <?php if (!empty($_smarty_tpl->tpl_vars['cardInfo']->value['exp_date']) && $_smarty_tpl->tpl_vars['cardInfo']->value['exp_date'][1] == $_smarty_tpl->tpl_vars['k']->value) {?>selected="selected"<?php }?>><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['v']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</option>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </div>

                <div class="form_row half-row f-r">
                    <label>&nbsp;</label>
                    <select name="adn_cc_Year" id="adn_exp_year" class="form-control">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['adn_years']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
                            <option value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['k']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" <?php if (!empty($_smarty_tpl->tpl_vars['cardInfo']->value['exp_date']) && $_smarty_tpl->tpl_vars['cardInfo']->value['exp_date'][0] == $_smarty_tpl->tpl_vars['k']->value) {?>selected="selected"<?php }?>><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['v']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</option>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </div>

                <?php if ($_smarty_tpl->tpl_vars['adn_get_cvm']->value == "1") {?>
                    <div class="form_row">
                        <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'CVN code','mod'=>'authorizedotnet'),$_smarty_tpl ) );?>
:  </label>
                        <input type="text" name="adn_cc_cvm" size="4" value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['adn_cc_cvm']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="form-control half-row" />
                        <span class="form-caption"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'3-4 digit number from the back of your card.','mod'=>'authorizedotnet'),$_smarty_tpl ) );?>
</span>
                    </div>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['adn_cim']->value == 1) {?>	
                    <div class="form_row">
                        <p class="required full_width_field checkbox em1">
                            <input type="checkbox" name="adn_save_card" id="adn_save_card" size="4" value="1" onclick="adnSaveCard();" /> 
                            <label for="adn_save_card" class="label_adn_save_card"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save this card for future purchases','mod'=>'authorizedotnet'),$_smarty_tpl ) );?>
</label>
                        </p>
                    </div>
                <?php }?>
                <?php if (!$_smarty_tpl->tpl_vars['adn_payment_page']->value) {?>
                    <div class="pcpm-total">
                        <span style="float:left"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The total amount of your order is','mod'=>'authorizedotnet'),$_smarty_tpl ) );?>
&nbsp;</span>
                        <span id="amount_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['currencies']->value[0]['id_currency']), ENT_QUOTES, 'UTF-8');?>
" class="price"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['adn_total']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
                    </div>
                    <div class="pcpm-confirm">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please confirm your order by clicking \'I confirm my order\'','mod'=>'authorizedotnet'),$_smarty_tpl ) );?>
.
                    </div>
                <?php }?>

                <div id="adn_ajax_container" class="pcpm-ajax-container <?php if (!empty($_smarty_tpl->tpl_vars['adn_cc_err']->value)) {?>error<?php }?>">
                    <?php if (!empty($_smarty_tpl->tpl_vars['adn_cc_err']->value)) {?> <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['adn_cc_err']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 <?php }?> 
                </div>
                <div class="clear"></div>

                <p class="cart_navigation">
                    <?php if (!$_smarty_tpl->tpl_vars['adn_payment_page']->value) {?>


                        <a class="button-exclusive btn btn-default" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true,NULL,"step=3"),'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" style="float:left;">
                            <i class="icon-chevron-left"></i>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Other payment methods','mod'=>'authorizedotnet'),$_smarty_tpl ) );?>

                        </a>			


                    



					
						<button class="btn btn-primary center-block" type="button" id="adn_submit">

								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'I confirm my order','mod'=>'authorizedotnet'),$_smarty_tpl ) );?>


						</button>	

					 
                    <?php }?>
                </p>	
          
                
                
                
                
                <?php if (!$_smarty_tpl->tpl_vars['adn_payment_page']->value) {?>
                     <?php $_smarty_tpl->_subTemplateRender("module:authorizedotnet/views/templates/front/conditions_to_approve.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php }?>
                
                
                <div class="clear"></div>				







            </form>
        </div>
    </div>

    <?php echo '<script'; ?>
 type="text/javascript">
                    //<![CDATA[
        if (typeof pc_payment_module == 'undefined') {
            pc_payment_module = [];
            pc_payment_module.push('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pc_payment_module_adn']->value, ENT_QUOTES, 'UTF-8');?>
');
        }else if (pc_payment_module instanceof Array) {
            pc_payment_module.push('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pc_payment_module_adn']->value, ENT_QUOTES, 'UTF-8');?>
');
        }

        adn_idSelectedCountry = <?php if (isset($_smarty_tpl->tpl_vars['id_state']->value)) {
echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['id_state']->value), ENT_QUOTES, 'UTF-8');
} elseif (isset($_smarty_tpl->tpl_vars['address']->value->id_state)) {
echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['address']->value->id_state), ENT_QUOTES, 'UTF-8');
} else { ?>false<?php }?>;
        adn_countries = new Array();
        adn_countriesNeedIDNumber = new Array();
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'country');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['country']->value) {
?>
                <?php if (isset($_smarty_tpl->tpl_vars['country']->value['states']) && $_smarty_tpl->tpl_vars['country']->value['contains_states']) {?>
                        adn_countries[<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['country']->value['id_country']), ENT_QUOTES, 'UTF-8');?>
] = new Array();
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['country']->value['states'], 'state', false, NULL, 'states', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['state']->value) {
?>
                        adn_countries[<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['country']->value['id_country']), ENT_QUOTES, 'UTF-8');?>
].push({'id' : '<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['state']->value['id_state']), ENT_QUOTES, 'UTF-8');?>
', 'name' : '<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['state']->value['name'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
'});
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        var err_fname = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You must enter your','mod'=>'authorizedotnet'),$_smarty_tpl ) );?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'First Name','mod'=>'authorizedotnet'),$_smarty_tpl ) );?>
";
        var err_lname = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You must enter your','mod'=>'authorizedotnet'),$_smarty_tpl ) );?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Last Name','mod'=>'authorizedotnet'),$_smarty_tpl ) );?>
";
        var err_address = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You must enter your','mod'=>'authorizedotnet'),$_smarty_tpl ) );?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Address','mod'=>'authorizedotnet'),$_smarty_tpl ) );?>
";
        var err_city = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You must enter your','mod'=>'authorizedotnet'),$_smarty_tpl ) );?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'City','mod'=>'authorizedotnet'),$_smarty_tpl ) );?>
";
        var err_zip = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You must enter your','mod'=>'authorizedotnet'),$_smarty_tpl ) );?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Zipcode','mod'=>'authorizedotnet'),$_smarty_tpl ) );?>
";
        var err_number = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You must enter a valid','mod'=>'authorizedotnet'),$_smarty_tpl ) );?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Card Number','mod'=>'authorizedotnet'),$_smarty_tpl ) );?>
";
                            // 'err_email'   :"<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You must enter your','mod'=>'authorizedotnet'),$_smarty_tpl ) );?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email','mod'=>'authorizedotnet'),$_smarty_tpl ) );?>
",
        var err_card_num = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You must enter a valid','mod'=>'authorizedotnet'),$_smarty_tpl ) );?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Card Number','mod'=>'authorizedotnet'),$_smarty_tpl ) );?>
";
        var err_cvm = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You must enter your','mod'=>'authorizedotnet'),$_smarty_tpl ) );?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'CVM code','mod'=>'authorizedotnet'),$_smarty_tpl ) );?>
";
       
        var err_terms = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please approve terms and conditions to make the purchase.','mod'=>'authorizedotnet'),$_smarty_tpl ) );?>
";

        var trl_wait = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please Wait ...','mod'=>'authorizedotnet'),$_smarty_tpl ) );?>
";
        var adn_path_file = '<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['this_path']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['adn_filename']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
.php';
    
        var id_state = <?php if (isset($_smarty_tpl->tpl_vars['id_state']->value)) {
echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['id_state']->value), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['address']->value->id_state,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>;
         var adn_dpn = false;
         
         var adn_order_btn_txt = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'I confirm my order','mod'=>'authorizedotnet'),$_smarty_tpl ) );?>
";
    //]]>
    <?php echo '</script'; ?>
>
</div><!-- end /home2/sheridantools/dev.sheridantools.com/modules/authorizedotnet/views/templates/front/aim_embedded_form.tpl --><?php }
}
