<?php
/* Smarty version 3.1.33, created on 2020-04-07 20:11:13
  from '/home2/sheridantools/public_html/themes/autostore/templates/catalog/listing/product-list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e8d16a183dbe5_26521679',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f44fc8d19edcf61a88dbc475162a4a801d210d6' => 
    array (
      0 => '/home2/sheridantools/public_html/themes/autostore/templates/catalog/listing/product-list.tpl',
      1 => 1580954804,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/category.tpl' => 1,
    'file:catalog/_partials/products-top.tpl' => 1,
    'file:catalog/_partials/products.tpl' => 1,
    'file:catalog/_partials/products-bottom.tpl' => 1,
    'file:errors/not-found.tpl' => 1,
  ),
),false)) {
function content_5e8d16a183dbe5_26521679 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5943449665e8d16a181bf49_22735969', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'product_list_brand_description'} */
class Block_20383231395e8d16a1826297_48895042 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'manufacturer' && $_smarty_tpl->tpl_vars['manufacturer']->value['description']) {?>
        <div id="manufacturer-short_description" class="rte"><?php echo $_smarty_tpl->tpl_vars['manufacturer']->value['short_description'];?>
</div>
        <div id="manufacturer-description" class="rte"><?php echo $_smarty_tpl->tpl_vars['manufacturer']->value['description'];?>
</div>
      <?php } elseif ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'supplier' && $_smarty_tpl->tpl_vars['supplier']->value['description']) {?>
        <div id="supplier-description" class="rte"><?php echo $_smarty_tpl->tpl_vars['supplier']->value['description'];?>
</div>
      <?php }?>
      <?php
}
}
/* {/block 'product_list_brand_description'} */
/* {block 'category_miniature'} */
class Block_5363846005e8d16a182d4c8_82867230 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                      <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/category.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('category'=>$_smarty_tpl->tpl_vars['subcategory']->value), 0, true);
?>
                    <?php
}
}
/* {/block 'category_miniature'} */
/* {block 'category_subcategories'} */
class Block_13013921315e8d16a182b329_12723672 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <aside class="clearfix">
          <?php if (count($_smarty_tpl->tpl_vars['subcategories']->value)) {?>
          <p class="subcategory-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Subcategories','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p>
            <nav class="subcategories">
              <ul>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subcategories']->value, 'subcategory');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['subcategory']->value) {
?>
                  <li>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5363846005e8d16a182d4c8_82867230', 'category_miniature', $this->tplIndex);
?>

                  </li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </ul>
            </nav>
          <?php }?>
        </aside>
      <?php
}
}
/* {/block 'category_subcategories'} */
/* {block 'product_list_top'} */
class Block_4561660055e8d16a1836330_88382641 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products-top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
?>
          <?php
}
}
/* {/block 'product_list_top'} */
/* {block 'product_list_active_filters'} */
class Block_20164218585e8d16a1837d53_23598646 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <div id="">
            <?php echo $_smarty_tpl->tpl_vars['listing']->value['rendered_active_filters'];?>

          </div>
        <?php
}
}
/* {/block 'product_list_active_filters'} */
/* {block 'product_list'} */
class Block_12293706585e8d16a1838c40_81699649 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
?>
          <?php
}
}
/* {/block 'product_list'} */
/* {block 'product_list_bottom'} */
class Block_669232865e8d16a1839c90_27124884 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products-bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
?>
          <?php
}
}
/* {/block 'product_list_bottom'} */
/* {block 'content'} */
class Block_5943449665e8d16a181bf49_22735969 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_5943449665e8d16a181bf49_22735969',
  ),
  'product_list_brand_description' => 
  array (
    0 => 'Block_20383231395e8d16a1826297_48895042',
  ),
  'category_subcategories' => 
  array (
    0 => 'Block_13013921315e8d16a182b329_12723672',
  ),
  'category_miniature' => 
  array (
    0 => 'Block_5363846005e8d16a182d4c8_82867230',
  ),
  'product_list_top' => 
  array (
    0 => 'Block_4561660055e8d16a1836330_88382641',
  ),
  'product_list_active_filters' => 
  array (
    0 => 'Block_20164218585e8d16a1837d53_23598646',
  ),
  'product_list' => 
  array (
    0 => 'Block_12293706585e8d16a1838c40_81699649',
  ),
  'product_list_bottom' => 
  array (
    0 => 'Block_669232865e8d16a1839c90_27124884',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section id="main">

         <h2 class="page-heading product-listing catalog-title">
      <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'category') {?>
        <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
      <?php } elseif ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'prices-drop') {?>
         <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Prices drop','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
      <?php } elseif ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'new-products') {?>
         <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'New products','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
    <?php } elseif ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'best-sales') {?>
         <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Best sellers','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
      <?php } elseif ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'manufacturer') {?>
         <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['manufacturer']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
      <?php } elseif ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'supplier') {?>
         <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['supplier']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
      <?php } elseif ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'search') {?>
         <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
      <?php }?>
      <span class="heading-counter">
        <?php if ($_smarty_tpl->tpl_vars['listing']->value['pagination']['total_items'] > 1) {?>
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There are %product_count% products.','d'=>'Shop.Theme.Catalog','sprintf'=>array('%product_count%'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']['total_items'])),$_smarty_tpl ) );?>

        <?php } elseif ($_smarty_tpl->tpl_vars['listing']->value['pagination']['total_items'] > 0) {?>
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There is 1 product.','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

        <?php }?>
      </span>
    </h2>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20383231395e8d16a1826297_48895042', 'product_list_brand_description', $this->tplIndex);
?>

      <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'category') {?>
     <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13013921315e8d16a182b329_12723672', 'category_subcategories', $this->tplIndex);
?>

      <?php }?>
    <section id="products" class="grid">
      <?php if (count($_smarty_tpl->tpl_vars['listing']->value['products'])) {?>
        <div>
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4561660055e8d16a1836330_88382641', 'product_list_top', $this->tplIndex);
?>

        </div>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20164218585e8d16a1837d53_23598646', 'product_list_active_filters', $this->tplIndex);
?>


        <div>
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12293706585e8d16a1838c40_81699649', 'product_list', $this->tplIndex);
?>

        </div>
                 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_669232865e8d16a1839c90_27124884', 'product_list_bottom', $this->tplIndex);
?>

              <?php } else { ?>

        <?php $_smarty_tpl->_subTemplateRender('file:errors/not-found.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      <?php }?>
    </section>
    <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'category') {?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayHtmlContent4','category'=>$_smarty_tpl->tpl_vars['category']->value),$_smarty_tpl ) );?>

    <?php }?>
  </section>
<?php
}
}
/* {/block 'content'} */
}
