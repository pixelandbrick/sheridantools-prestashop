<?php
/* Smarty version 3.1.33, created on 2020-04-07 20:11:13
  from '/home2/sheridantools/public_html/themes/autostore/templates/catalog/_partials/products-bottom.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e8d16a1ce8dc2_21680229',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f71ff3bb397cfdd9d52bfe6152496376918a218d' => 
    array (
      0 => '/home2/sheridantools/public_html/themes/autostore/templates/catalog/_partials/products-bottom.tpl',
      1 => 1580954804,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/sort-orders.tpl' => 1,
    'file:_partials/pagination.tpl' => 1,
  ),
),false)) {
function content_5e8d16a1ce8dc2_21680229 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div id="js-product-list-bottom" class="products-selection">
	 <div class="row sort-by-row">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1209581975e8d16a1ce3389_73971427', 'display_view');
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19490480225e8d16a1ce48e9_38743602', 'sort_by');
?>

      <?php if (!empty($_smarty_tpl->tpl_vars['listing']->value['rendered_facets'])) {?>
        <div class="hidden-lg-up filter-button">
          <button id="search_filter_toggler" class="btn btn_skine-one">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filter','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

          </button>
        </div>
      <?php }?>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21474502595e8d16a1ce7a04_30688882', 'pagination');
?>

	</div>
</div>
<?php }
/* {block 'display_view'} */
class Block_1209581975e8d16a1ce3389_73971427 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'display_view' => 
  array (
    0 => 'Block_1209581975e8d16a1ce3389_73971427',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <div class="display-view hidden-sm-down">
                <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</label>
                <span class="material-icons view-item show_grid active">&#xE42A;</span>
                <span class="material-icons view-item show_list">&#xE8EF;</span>
          </div>
      <?php
}
}
/* {/block 'display_view'} */
/* {block 'sort_by'} */
class Block_19490480225e8d16a1ce48e9_38743602 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sort_by' => 
  array (
    0 => 'Block_19490480225e8d16a1ce48e9_38743602',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/sort-orders.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('sort_orders'=>$_smarty_tpl->tpl_vars['listing']->value['sort_orders']), 0, false);
?>
      <?php
}
}
/* {/block 'sort_by'} */
/* {block 'pagination'} */
class Block_21474502595e8d16a1ce7a04_30688882 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pagination' => 
  array (
    0 => 'Block_21474502595e8d16a1ce7a04_30688882',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:_partials/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagination'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']), 0, false);
?>
      <?php
}
}
/* {/block 'pagination'} */
}
