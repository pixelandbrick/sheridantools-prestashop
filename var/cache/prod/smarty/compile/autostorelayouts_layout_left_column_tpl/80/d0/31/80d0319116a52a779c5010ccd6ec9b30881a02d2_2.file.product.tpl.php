<?php
/* Smarty version 4.5.5, created on 2025-09-12 23:30:07
  from '/home/sheridantools/public_html/themes/autostore/templates/catalog/_partials/miniatures/product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_68c4e53f661c60_54928267',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80d0319116a52a779c5010ccd6ec9b30881a02d2' => 
    array (
      0 => '/home/sheridantools/public_html/themes/autostore/templates/catalog/_partials/miniatures/product.tpl',
      1 => 1581873832,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/variant-links.tpl' => 1,
    'file:catalog/_partials/custom/add-to-cart-product-list.tpl' => 1,
  ),
),false)) {
function content_68c4e53f661c60_54928267 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_121577168368c4e53f622124_37869102', 'product_miniature_item');
?>

<?php }
/* {block 'product_thumbnail'} */
class Block_19638883068c4e53f624762_74243457 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['canonical_url']), ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['images'], 'image', false, NULL, 'thumbnails', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_thumbnails']->value['iteration']++;
?>
            <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_thumbnails']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_thumbnails']->value['iteration'] : null) == 2) {?>
              <img
                class="thumbnail-alternate"
                src="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['image']->value['bySize']['home_default']['url']), ENT_QUOTES, 'UTF-8');?>
"
                alt="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['name']), ENT_QUOTES, 'UTF-8');?>
"
                title = "<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['name']), ENT_QUOTES, 'UTF-8');?>
"
                itemprop="image"
              >
            <?php }?>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          <?php if ($_smarty_tpl->tpl_vars['product']->value['cover']) {?>
          <img
            class="thumbnail-img"
            src="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url']), ENT_QUOTES, 'UTF-8');?>
"
            alt="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['name']), ENT_QUOTES, 'UTF-8');?>
"
            title = "<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['name']), ENT_QUOTES, 'UTF-8');?>
"
            data-full-size-image-url="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url']), ENT_QUOTES, 'UTF-8');?>
"
          >
          <?php } else { ?>
          <img
              class="thumbnail-img"
              src="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['home_default']['url']), ENT_QUOTES, 'UTF-8');?>
"
              alt="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['name']), ENT_QUOTES, 'UTF-8');?>
"
              title = "<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['name']), ENT_QUOTES, 'UTF-8');?>
"
            >
          <?php }?>
        </a>
      <?php
}
}
/* {/block 'product_thumbnail'} */
/* {block 'product_flags'} */
class Block_44711939868c4e53f631843_81956692 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <ul class="product-flags">
          <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
              <?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'percentage') {?>
                <span class="discount-percentage"><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['discount_percentage']), ENT_QUOTES, 'UTF-8');?>
</span>
              <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'amount') {?>
                <span class="discount-percentage"><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['discount_amount_to_display']), ENT_QUOTES, 'UTF-8');?>
</span>
              <?php }?>
          <?php }?>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
$_smarty_tpl->tpl_vars['flag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->do_else = false;
?>
            <li class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['flag']->value['type']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['flag']->value['label']), ENT_QUOTES, 'UTF-8');?>
</li>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
        <?php
}
}
/* {/block 'product_flags'} */
/* {block 'product_variants'} */
class Block_99494849768c4e53f639699_70394328 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if ($_smarty_tpl->tpl_vars['product']->value['main_variants']) {?>
          <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/variant-links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('variants'=>$_smarty_tpl->tpl_vars['product']->value['main_variants']), 0, false);
?>
        <?php }?>
        <?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_reviews'} */
class Block_58603743168c4e53f63c1f1_60034867 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

          <?php
}
}
/* {/block 'product_reviews'} */
/* {block 'product_name'} */
class Block_50125305768c4e53f63d672_28755463 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <h3 class="h3 product-title" itemprop="name"><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['canonical_url']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],57,'...' ))), ENT_QUOTES, 'UTF-8');?>
</a></h3>
          <?php
}
}
/* {/block 'product_name'} */
/* {block 'product_description'} */
class Block_8785781068c4e53f63fba0_20597802 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <p class="product_desc" itemprop="description"><?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( strip_tags((string) $_smarty_tpl->tpl_vars['product']->value['description']),200,'...' ))), ENT_QUOTES, 'UTF-8');?>
</p>
          <?php
}
}
/* {/block 'product_description'} */
/* {block 'product_price_and_shipping'} */
class Block_155427718368c4e53f649215_36723647 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
              <div class="product-price-and-shipping" itemprop="offers" itemtype="http://schema.org/Offer" itemscope>
                <link itemprop="url" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['canonical_url']), ENT_QUOTES, 'UTF-8');?>
" />
                  <meta itemprop="availability" content="<?php if ($_smarty_tpl->tpl_vars['product']->value['available_for_order'] == 1) {?>https://schema.org/InStock<?php } else { ?>https://schema.org/OutOfStock<?php }?>" />
                  <meta itemprop="priceCurrency" content="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['currency']->value['iso_code']), ENT_QUOTES, 'UTF-8');?>
" />
                                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl ) );?>

                                <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>

                  <span class="regular-price"><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['regular_price']), ENT_QUOTES, 'UTF-8');?>
</span>
                <?php }?>
                <span itemprop="price" content="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['price_amount']), ENT_QUOTES, 'UTF-8');?>
" class="price"><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['price']), ENT_QUOTES, 'UTF-8');?>
</span>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl ) );?>


               <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl ) );?>

                                <?php if ($_smarty_tpl->tpl_vars['configuration']->value['taxes_enabled'] && $_smarty_tpl->tpl_vars['configuration']->value['display_taxes_label']) {?>
                  <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['labels']['tax_long']), ENT_QUOTES, 'UTF-8');?>

                <?php }?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"price"),$_smarty_tpl ) );?>

                <?php if ($_smarty_tpl->tpl_vars['product']->value['delivery_information']) {?>
                    <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['delivery_information']), ENT_QUOTES, 'UTF-8');?>

                <?php }?>
                            </div>
          <?php }?>
          <?php
}
}
/* {/block 'product_price_and_shipping'} */
/* {block 'quick_view'} */
class Block_25596840268c4e53f65c622_85602689 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <a class="quick-view" href="#" data-link-action="quickview" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick view','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
">
                  <i class="font-eye"></i><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick view','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
                </a>
              <?php
}
}
/* {/block 'quick_view'} */
/* {block 'more_info'} */
class Block_18989711868c4e53f65ed28_89060514 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['canonical_url']), ENT_QUOTES, 'UTF-8');?>
" class="link-view" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'More info','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
">
                    <i class="font-more"></i>
                      <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'More info','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
                  </a>
              <?php
}
}
/* {/block 'more_info'} */
/* {block 'product_miniature_item'} */
class Block_121577168368c4e53f622124_37869102 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_miniature_item' => 
  array (
    0 => 'Block_121577168368c4e53f622124_37869102',
  ),
  'product_thumbnail' => 
  array (
    0 => 'Block_19638883068c4e53f624762_74243457',
  ),
  'product_flags' => 
  array (
    0 => 'Block_44711939868c4e53f631843_81956692',
  ),
  'product_variants' => 
  array (
    0 => 'Block_99494849768c4e53f639699_70394328',
  ),
  'product_reviews' => 
  array (
    0 => 'Block_58603743168c4e53f63c1f1_60034867',
  ),
  'product_name' => 
  array (
    0 => 'Block_50125305768c4e53f63d672_28755463',
  ),
  'product_description' => 
  array (
    0 => 'Block_8785781068c4e53f63fba0_20597802',
  ),
  'product_price_and_shipping' => 
  array (
    0 => 'Block_155427718368c4e53f649215_36723647',
  ),
  'quick_view' => 
  array (
    0 => 'Block_25596840268c4e53f65c622_85602689',
  ),
  'more_info' => 
  array (
    0 => 'Block_18989711868c4e53f65ed28_89060514',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <article class="product-miniature js-product-miniature" data-id-product="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['id_product']), ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']), ENT_QUOTES, 'UTF-8');?>
" itemscope itemtype="http://schema.org/Product">
    <div class="thumbnail-container">
      <div class="thumbnail-wrapper">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19638883068c4e53f624762_74243457', 'product_thumbnail', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_44711939868c4e53f631843_81956692', 'product_flags', $this->tplIndex);
?>

      </div>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_99494849768c4e53f639699_70394328', 'product_variants', $this->tplIndex);
?>

      <div class="right-block">
        <div class="product-desc">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_58603743168c4e53f63c1f1_60034867', 'product_reviews', $this->tplIndex);
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_50125305768c4e53f63d672_28755463', 'product_name', $this->tplIndex);
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8785781068c4e53f63fba0_20597802', 'product_description', $this->tplIndex);
?>

          <?php if (Manufacturer::getnamebyid($_smarty_tpl->tpl_vars['product']->value['id_manufacturer'])) {?>
          <meta itemprop="brand" content="<?php echo htmlspecialchars((string) (Manufacturer::getnamebyid($_smarty_tpl->tpl_vars['product']->value['id_manufacturer'])), ENT_QUOTES, 'UTF-8');?>
"/>
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['product']->value['reference']) {?>
          <meta itemprop="sku" content="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['reference']), ENT_QUOTES, 'UTF-8');?>
" />
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['product']->value['ean13']) {?>
            <meta itemprop="gtin13" content="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['ean13']), ENT_QUOTES, 'UTF-8');?>
" />
          <?php }?>
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_155427718368c4e53f649215_36723647', 'product_price_and_shipping', $this->tplIndex);
?>

          </div>
          <div class="highlighted-informations<?php if (!$_smarty_tpl->tpl_vars['product']->value['main_variants']) {?> no-variants<?php }?>">
            <div class="inner">
              <?php if (!$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>
                  <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/custom/add-to-cart-product-list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'name_module'=>'product-list'), 0, false);
?>
              <?php }?>
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListFunctionalButtons','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_25596840268c4e53f65c622_85602689', 'quick_view', $this->tplIndex);
?>

              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18989711868c4e53f65ed28_89060514', 'more_info', $this->tplIndex);
?>

            </div>
          </div>
      </div>
     </div>
  </article>
<?php
}
}
/* {/block 'product_miniature_item'} */
}
