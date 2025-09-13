<?php
/* Smarty version 3.1.33, created on 2020-04-07 14:55:32
  from '/home2/sheridantools/public_html/themes/autostore/templates/checkout/_partials/cart-summary-totals.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e8ccca4734a24_19771055',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1cf9a5010216630a4d7d9b8460442162449f9868' => 
    array (
      0 => '/home2/sheridantools/public_html/themes/autostore/templates/checkout/_partials/cart-summary-totals.tpl',
      1 => 1581873108,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e8ccca4734a24_19771055 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="card-block cart-summary-totals">

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2408616145e8ccca47283a2_94864756', 'cart_summary_total');
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10634455585e8ccca4730a59_02294332', 'cart_summary_tax');
?>


</div>
<?php }
/* {block 'cart_summary_total'} */
class Block_2408616145e8ccca47283a2_94864756 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_summary_total' => 
  array (
    0 => 'Block_2408616145e8ccca47283a2_94864756',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if (!$_smarty_tpl->tpl_vars['configuration']->value['display_prices_tax_incl'] && $_smarty_tpl->tpl_vars['configuration']->value['taxes_enabled']) {?>
      <div class="cart-summary-line">
        <span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['totals']['total']['label'], ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['labels']['tax_short'], ENT_QUOTES, 'UTF-8');?>
</span>
        <span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['totals']['total']['value'], ENT_QUOTES, 'UTF-8');?>
</span>
      </div>
      <?php if ($_smarty_tpl->tpl_vars['customer']->value['is_logged']) {?>
      <div class="cart-summary-line cart-total">
        <span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['totals']['total_including_tax']['label'], ENT_QUOTES, 'UTF-8');?>
</span>
        <span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['totals']['total_including_tax']['value'], ENT_QUOTES, 'UTF-8');?>
</span>
      </div>
      <?php }?>

    <?php } else { ?>
      <div class="cart-summary-line cart-total">
        <span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['totals']['total']['label'], ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php if ($_smarty_tpl->tpl_vars['configuration']->value['taxes_enabled']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['labels']['tax_short'], ENT_QUOTES, 'UTF-8');
}?></span>
        <span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['totals']['total']['value'], ENT_QUOTES, 'UTF-8');?>
</span>
      </div>
    <?php }?>
  <?php
}
}
/* {/block 'cart_summary_total'} */
/* {block 'cart_summary_tax'} */
class Block_10634455585e8ccca4730a59_02294332 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_summary_tax' => 
  array (
    0 => 'Block_10634455585e8ccca4730a59_02294332',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['customer']->value['is_logged']) {?>
    <?php if ($_smarty_tpl->tpl_vars['cart']->value['subtotals']['tax']) {?>
      <div class="cart-summary-line">
        <span class="label sub"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%label%:','sprintf'=>array('%label%'=>$_smarty_tpl->tpl_vars['cart']->value['subtotals']['tax']['label']),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
        <span class="value sub"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['tax']['value'], ENT_QUOTES, 'UTF-8');?>
</span>
      </div>
    <?php }?>
    <?php }?>
  <?php
}
}
/* {/block 'cart_summary_tax'} */
}
