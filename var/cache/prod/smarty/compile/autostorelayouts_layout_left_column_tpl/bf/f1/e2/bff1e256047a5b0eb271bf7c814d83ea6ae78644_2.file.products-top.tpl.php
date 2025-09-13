<?php
/* Smarty version 4.5.5, created on 2025-09-12 23:30:07
  from '/home/sheridantools/public_html/themes/autostore/templates/catalog/_partials/products-top.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_68c4e53f5eafe8_05945274',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bff1e256047a5b0eb271bf7c814d83ea6ae78644' => 
    array (
      0 => '/home/sheridantools/public_html/themes/autostore/templates/catalog/_partials/products-top.tpl',
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
function content_68c4e53f5eafe8_05945274 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div id="js-product-list-top" class="products-selection">
    <div class="row sort-by-row">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20821082568c4e53f5e50d1_83840778', 'display_view');
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_201457141868c4e53f5e67f2_46313430', 'sort_by');
?>

      <?php if (!empty($_smarty_tpl->tpl_vars['listing']->value['rendered_facets'])) {?>
        <div class="hidden-lg-up filter-button">
          <button id="search_filter_toggler" class="btn btn_skine-one">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filter','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

          </button>
        </div>
      <?php }?>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_77077399068c4e53f5e9983_38722757', 'pagination');
?>

    </div>
  </div>
<?php }
/* {block 'display_view'} */
class Block_20821082568c4e53f5e50d1_83840778 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'display_view' => 
  array (
    0 => 'Block_20821082568c4e53f5e50d1_83840778',
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
class Block_201457141868c4e53f5e67f2_46313430 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sort_by' => 
  array (
    0 => 'Block_201457141868c4e53f5e67f2_46313430',
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
class Block_77077399068c4e53f5e9983_38722757 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pagination' => 
  array (
    0 => 'Block_77077399068c4e53f5e9983_38722757',
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
