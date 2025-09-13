<?php
/* Smarty version 3.1.33, created on 2020-04-07 20:31:31
  from '/home2/sheridantools/public_html/themes/autostore/templates/catalog/_partials/miniatures/product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e8d1b63d31365_27925532',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6df62fb40c13bb8f641de543ba6e6ae5185c09a9' => 
    array (
      0 => '/home2/sheridantools/public_html/themes/autostore/templates/catalog/_partials/miniatures/product.tpl',
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
function content_5e8d1b63d31365_27925532 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5895437445e8d1b63cffa61_29027722', 'product_miniature_item');
?>

<?php }
/* {block 'product_thumbnail'} */
class Block_12403489655e8d1b63d013d8_33793735 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['canonical_url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['images'], 'image', false, NULL, 'thumbnails', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_thumbnails']->value['iteration']++;
?>
            <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_thumbnails']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_thumbnails']->value['iteration'] : null) == 2) {?>
              <img
                class="thumbnail-alternate"
                src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
                title = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
                itemprop="image"
              >
            <?php }?>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          <?php if ($_smarty_tpl->tpl_vars['product']->value['cover']) {?>
          <img
            class="thumbnail-img"
            src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
            alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
            title = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
            data-full-size-image-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
          >
          <?php } else { ?>
          <img
              class="thumbnail-img"
              src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
              alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
              title = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
            >
          <?php }?>
        </a>
      <?php
}
}
/* {/block 'product_thumbnail'} */
/* {block 'product_flags'} */
class Block_14358429145e8d1b63d0c272_34582401 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <ul class="product-flags">
          <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
              <?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'percentage') {?>
                <span class="discount-percentage"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discount_percentage'], ENT_QUOTES, 'UTF-8');?>
</span>
              <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'amount') {?>
                <span class="discount-percentage"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discount_amount_to_display'], ENT_QUOTES, 'UTF-8');?>
</span>
              <?php }?>
          <?php }?>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
?>
            <li class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
        <?php
}
}
/* {/block 'product_flags'} */
/* {block 'product_variants'} */
class Block_2399669645e8d1b63d123d4_87081789 extends Smarty_Internal_Block
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
class Block_15679767625e8d1b63d146c7_49871097 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

          <?php
}
}
/* {/block 'product_reviews'} */
/* {block 'product_name'} */
class Block_14239484075e8d1b63d15a24_50846468 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <h3 class="h3 product-title" itemprop="name"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['canonical_url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],57,'...' )), ENT_QUOTES, 'UTF-8');?>
</a></h3>
          <?php
}
}
/* {/block 'product_name'} */
/* {block 'product_description'} */
class Block_16569043855e8d1b63d17cd7_97810761 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <p class="product_desc" itemprop="description"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( strip_tags($_smarty_tpl->tpl_vars['product']->value['description']),200,'...' )), ENT_QUOTES, 'UTF-8');?>
</p>
          <?php
}
}
/* {/block 'product_description'} */
/* {block 'product_price_and_shipping'} */
class Block_3741413025e8d1b63d1eb71_61841877 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
              <div class="product-price-and-shipping" itemprop="offers" itemtype="http://schema.org/Offer" itemscope>
                <link itemprop="url" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['canonical_url'], ENT_QUOTES, 'UTF-8');?>
" />
                  <meta itemprop="availability" content="<?php if ($_smarty_tpl->tpl_vars['product']->value['available_for_order'] == 1) {?>https://schema.org/InStock<?php } else { ?>https://schema.org/OutOfStock<?php }?>" />
                  <meta itemprop="priceCurrency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
" />
                                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl ) );?>

                                <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>

                  <span class="regular-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
                <?php }?>
                <span itemprop="price" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price_amount'], ENT_QUOTES, 'UTF-8');?>
" class="price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl ) );?>


               <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl ) );?>

                                <?php if ($_smarty_tpl->tpl_vars['configuration']->value['taxes_enabled'] && $_smarty_tpl->tpl_vars['configuration']->value['display_taxes_label']) {?>
                  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['labels']['tax_long'], ENT_QUOTES, 'UTF-8');?>

                <?php }?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"price"),$_smarty_tpl ) );?>

                <?php if ($_smarty_tpl->tpl_vars['product']->value['delivery_information']) {?>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['delivery_information'], ENT_QUOTES, 'UTF-8');?>

                <?php }?>
                            </div>
          <?php }?>
          <?php
}
}
/* {/block 'product_price_and_shipping'} */
/* {block 'quick_view'} */
class Block_20094136275e8d1b63d2d3a6_73735328 extends Smarty_Internal_Block
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
class Block_20004557355e8d1b63d2ece6_51531815 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['canonical_url'], ENT_QUOTES, 'UTF-8');?>
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
class Block_5895437445e8d1b63cffa61_29027722 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_miniature_item' => 
  array (
    0 => 'Block_5895437445e8d1b63cffa61_29027722',
  ),
  'product_thumbnail' => 
  array (
    0 => 'Block_12403489655e8d1b63d013d8_33793735',
  ),
  'product_flags' => 
  array (
    0 => 'Block_14358429145e8d1b63d0c272_34582401',
  ),
  'product_variants' => 
  array (
    0 => 'Block_2399669645e8d1b63d123d4_87081789',
  ),
  'product_reviews' => 
  array (
    0 => 'Block_15679767625e8d1b63d146c7_49871097',
  ),
  'product_name' => 
  array (
    0 => 'Block_14239484075e8d1b63d15a24_50846468',
  ),
  'product_description' => 
  array (
    0 => 'Block_16569043855e8d1b63d17cd7_97810761',
  ),
  'product_price_and_shipping' => 
  array (
    0 => 'Block_3741413025e8d1b63d1eb71_61841877',
  ),
  'quick_view' => 
  array (
    0 => 'Block_20094136275e8d1b63d2d3a6_73735328',
  ),
  'more_info' => 
  array (
    0 => 'Block_20004557355e8d1b63d2ece6_51531815',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <article class="product-miniature js-product-miniature" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
" itemscope itemtype="http://schema.org/Product">
    <div class="thumbnail-container">
      <div class="thumbnail-wrapper">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12403489655e8d1b63d013d8_33793735', 'product_thumbnail', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14358429145e8d1b63d0c272_34582401', 'product_flags', $this->tplIndex);
?>

      </div>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2399669645e8d1b63d123d4_87081789', 'product_variants', $this->tplIndex);
?>

      <div class="right-block">
        <div class="product-desc">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15679767625e8d1b63d146c7_49871097', 'product_reviews', $this->tplIndex);
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14239484075e8d1b63d15a24_50846468', 'product_name', $this->tplIndex);
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16569043855e8d1b63d17cd7_97810761', 'product_description', $this->tplIndex);
?>

          <?php if (Manufacturer::getnamebyid($_smarty_tpl->tpl_vars['product']->value['id_manufacturer'])) {?>
          <meta itemprop="brand" content="<?php echo htmlspecialchars(Manufacturer::getnamebyid($_smarty_tpl->tpl_vars['product']->value['id_manufacturer']), ENT_QUOTES, 'UTF-8');?>
"/>
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['product']->value['reference']) {?>
          <meta itemprop="sku" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['reference'], ENT_QUOTES, 'UTF-8');?>
" />
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['product']->value['ean13']) {?>
            <meta itemprop="gtin13" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['ean13'], ENT_QUOTES, 'UTF-8');?>
" />
          <?php }?>
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3741413025e8d1b63d1eb71_61841877', 'product_price_and_shipping', $this->tplIndex);
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20094136275e8d1b63d2d3a6_73735328', 'quick_view', $this->tplIndex);
?>

              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20004557355e8d1b63d2ece6_51531815', 'more_info', $this->tplIndex);
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
