<?php
/* Smarty version 4.5.5, created on 2025-09-12 23:30:05
  from '/home/sheridantools/public_html/themes/autostore/templates/catalog/listing/product-list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_68c4e53d83eae1_12186827',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25c4ac395baa77ed8a9463a6178f0f640dfb44a9' => 
    array (
      0 => '/home/sheridantools/public_html/themes/autostore/templates/catalog/listing/product-list.tpl',
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
function content_68c4e53d83eae1_12186827 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_165117008168c4e53d80c6e5_68766842', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'product_list_brand_description'} */
class Block_66990423068c4e53d81e388_44296446 extends Smarty_Internal_Block
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
class Block_36113362868c4e53d82a7e7_72372299 extends Smarty_Internal_Block
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
class Block_153171857568c4e53d826c29_50157927 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/sheridantools/public_html/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
?>

        <aside class="clearfix">
          <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['subcategories']->value)) {?>
          <p class="subcategory-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Subcategories','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p>
            <nav class="subcategories">
              <ul>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subcategories']->value, 'subcategory');
$_smarty_tpl->tpl_vars['subcategory']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subcategory']->value) {
$_smarty_tpl->tpl_vars['subcategory']->do_else = false;
?>
                  <li>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_36113362868c4e53d82a7e7_72372299', 'category_miniature', $this->tplIndex);
?>

                  </li>
                <?php
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
class Block_116345323468c4e53d833252_90347682 extends Smarty_Internal_Block
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
class Block_6361228568c4e53d834db8_64381889 extends Smarty_Internal_Block
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
class Block_147444652568c4e53d836af2_63090762 extends Smarty_Internal_Block
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
class Block_107681020968c4e53d838723_40661879 extends Smarty_Internal_Block
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
class Block_165117008168c4e53d80c6e5_68766842 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_165117008168c4e53d80c6e5_68766842',
  ),
  'product_list_brand_description' => 
  array (
    0 => 'Block_66990423068c4e53d81e388_44296446',
  ),
  'category_subcategories' => 
  array (
    0 => 'Block_153171857568c4e53d826c29_50157927',
  ),
  'category_miniature' => 
  array (
    0 => 'Block_36113362868c4e53d82a7e7_72372299',
  ),
  'product_list_top' => 
  array (
    0 => 'Block_116345323468c4e53d833252_90347682',
  ),
  'product_list_active_filters' => 
  array (
    0 => 'Block_6361228568c4e53d834db8_64381889',
  ),
  'product_list' => 
  array (
    0 => 'Block_147444652568c4e53d836af2_63090762',
  ),
  'product_list_bottom' => 
  array (
    0 => 'Block_107681020968c4e53d838723_40661879',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/sheridantools/public_html/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
?>

  <section id="main">

         <h2 class="page-heading product-listing catalog-title">
      <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'category') {?>
        <span><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['category']->value['name']), ENT_QUOTES, 'UTF-8');?>
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
         <span><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['manufacturer']->value['name']), ENT_QUOTES, 'UTF-8');?>
</span>
      <?php } elseif ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'supplier') {?>
         <span><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['supplier']->value['name']), ENT_QUOTES, 'UTF-8');?>
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_66990423068c4e53d81e388_44296446', 'product_list_brand_description', $this->tplIndex);
?>

      <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'category') {?>
     <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_153171857568c4e53d826c29_50157927', 'category_subcategories', $this->tplIndex);
?>

      <?php }?>
    <section id="products" class="grid">
      <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['listing']->value['products'])) {?>
        <div>
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_116345323468c4e53d833252_90347682', 'product_list_top', $this->tplIndex);
?>

        </div>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6361228568c4e53d834db8_64381889', 'product_list_active_filters', $this->tplIndex);
?>


        <div>
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_147444652568c4e53d836af2_63090762', 'product_list', $this->tplIndex);
?>

        </div>
                 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_107681020968c4e53d838723_40661879', 'product_list_bottom', $this->tplIndex);
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
