<?php
/* Smarty version 3.1.33, created on 2020-04-07 14:49:13
  from '/home2/sheridantools/public_html/themes/autostore/templates/catalog/_partials/product-add-to-cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e8ccb29bfd068_70907941',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e43f284eefb52a20b340d3406839b11656989c0' => 
    array (
      0 => '/home2/sheridantools/public_html/themes/autostore/templates/catalog/_partials/product-add-to-cart.tpl',
      1 => 1580954804,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e8ccb29bfd068_70907941 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="product-add-to-cart">
  <?php if (!$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>
    <span class="control-label hidden-sm-down"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quantity','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4080972325e8ccb29bf3223_91570208', 'product_quantity');
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14529228215e8ccb29bf8bb4_11794983', 'product_availability');
?>

  <?php }?>
</div>
<?php }
/* {block 'product_quantity'} */
class Block_4080972325e8ccb29bf3223_91570208 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_quantity' => 
  array (
    0 => 'Block_4080972325e8ccb29bf3223_91570208',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div class="product-quantity">
        <div class="qty">
          <input
            type="number"
            name="qty"
            id="quantity_wanted"
            value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity_wanted'], ENT_QUOTES, 'UTF-8');?>
"
            class="input-group"
            min="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['minimal_quantity'], ENT_QUOTES, 'UTF-8');?>
"
          >
        </div>

        <div class="add">
          <button
            class="btn btn-primary add-to-cart"
            data-button-action="add-to-cart"
            type="submit"
            <?php if (!$_smarty_tpl->tpl_vars['product']->value['add_to_cart_url']) {?>
              disabled
            <?php }?>
          >
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

          </button>
        </div>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductActions','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

      </div>
    <?php
}
}
/* {/block 'product_quantity'} */
/* {block 'product_availability'} */
class Block_14529228215e8ccb29bf8bb4_11794983 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_availability' => 
  array (
    0 => 'Block_14529228215e8ccb29bf8bb4_11794983',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

               <span id="product-availability">
                 <?php if ($_smarty_tpl->tpl_vars['product']->value['show_availability'] && $_smarty_tpl->tpl_vars['product']->value['availability_message']) {?>
                   <?php if ($_smarty_tpl->tpl_vars['product']->value['availability'] == 'available') {?>
                     <i class="material-icons product-available">&#xE5CA;</i>
                   <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['availability'] == 'last_remaining_items') {?>
                     <i class="material-icons product-last-items">&#xE002;</i>
                   <?php } else { ?>
                     <i class="material-icons product-unavailable">&#xE14B;</i>
                   <?php }?>
                   <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['availability_message'], ENT_QUOTES, 'UTF-8');?>

                 <?php }?>
               </span>
          <?php
}
}
/* {/block 'product_availability'} */
}
