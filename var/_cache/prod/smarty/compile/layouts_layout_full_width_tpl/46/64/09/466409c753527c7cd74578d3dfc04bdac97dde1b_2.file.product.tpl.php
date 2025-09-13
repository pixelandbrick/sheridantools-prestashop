<?php
/* Smarty version 3.1.33, created on 2020-04-07 20:25:42
  from '/home2/sheridantools/public_html/themes/autostore/templates/catalog/product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e8d1a069b6cb7_57138604',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '466409c753527c7cd74578d3dfc04bdac97dde1b' => 
    array (
      0 => '/home2/sheridantools/public_html/themes/autostore/templates/catalog/product.tpl',
      1 => 1581999519,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/product-cover-thumbnails.tpl' => 1,
    'file:catalog/_partials/product-prices.tpl' => 1,
    'file:catalog/_partials/product-customization.tpl' => 1,
    'file:catalog/_partials/product-variants.tpl' => 1,
    'file:catalog/_partials/miniatures/pack-product.tpl' => 1,
    'file:catalog/_partials/product-discounts.tpl' => 1,
    'file:catalog/_partials/product-add-to-cart.tpl' => 1,
    'file:catalog/_partials/product-additional-info.tpl' => 1,
    'file:catalog/_partials/product-images-modal.tpl' => 1,
  ),
),false)) {
function content_5e8d1a069b6cb7_57138604 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14661465535e8d1a069660a4_19374282', 'head_seo');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6019862995e8d1a0696a250_74973155', 'head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14745045985e8d1a069762c8_91580050', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'head_seo'} */
class Block_14661465535e8d1a069660a4_19374282 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_seo' => 
  array (
    0 => 'Block_14661465535e8d1a069660a4_19374282',
  ),
);
public $prepend = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <link rel="canonical" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['canonical_url'], ENT_QUOTES, 'UTF-8');?>
">
<?php
}
}
/* {/block 'head_seo'} */
/* {block 'head'} */
class Block_6019862995e8d1a0696a250_74973155 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_6019862995e8d1a0696a250_74973155',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <meta property="og:type" content="product">
  <meta property="og:url" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="og:title" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="og:site_name" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="og:description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['description'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="og:image" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
">
  <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
    <meta property="product:pretax_price:amount" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price_tax_exc'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="product:pretax_price:currency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="product:price:amount" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price_amount'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="product:price:currency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>
  <?php if (isset($_smarty_tpl->tpl_vars['product']->value['weight']) && ($_smarty_tpl->tpl_vars['product']->value['weight'] != 0)) {?>
  <meta property="product:weight:value" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['weight'], ENT_QUOTES, 'UTF-8');?>
">
  <meta property="product:weight:units" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['weight_unit'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }
}
}
/* {/block 'head'} */
/* {block 'product_cover_thumbnails'} */
class Block_8625979125e8d1a06977733_63259293 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-cover-thumbnails.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
              <?php
}
}
/* {/block 'product_cover_thumbnails'} */
/* {block 'page_content'} */
class Block_6477107435e8d1a069771c4_91868333 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8625979125e8d1a06977733_63259293', 'product_cover_thumbnails', $this->tplIndex);
?>

            <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_17630964245e8d1a06976942_15582626 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <section class="page-content" id="content">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6477107435e8d1a069771c4_91868333', 'page_content', $this->tplIndex);
?>

          </section>
        <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_title'} */
class Block_14056074035e8d1a0697ddd4_21140592 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
class Block_10393719055e8d1a0697d647_75893948 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <h1 class="h1" itemprop="name"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14056074035e8d1a0697ddd4_21140592', 'page_title', $this->tplIndex);
?>
</h1>
            <?php
}
}
/* {/block 'page_header'} */
/* {block 'page_header_container'} */
class Block_9675532645e8d1a0697cff0_47822700 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10393719055e8d1a0697d647_75893948', 'page_header', $this->tplIndex);
?>

          <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'product_prices'} */
class Block_8455151415e8d1a0698f7f4_30980991 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-prices.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
              <?php
}
}
/* {/block 'product_prices'} */
/* {block 'product_details_info'} */
class Block_4700717615e8d1a069814b2_59525270 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <div id="product-details" data-product="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['embedded_attributes'] )), ENT_QUOTES, 'UTF-8');?>
">
                <div class="product-info">
                <?php if (isset($_smarty_tpl->tpl_vars['product']->value['reference_to_display']) && $_smarty_tpl->tpl_vars['product']->value['reference_to_display'] != '') {?>
                <div class="product-reference">
                <label class="label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'SKU#','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
 </label>
                <span itemprop="sku"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['reference_to_display'], ENT_QUOTES, 'UTF-8');?>
</span>
                </div>
                <?php }?>
                </div>
                </div>

                <?php if (isset($_smarty_tpl->tpl_vars['product_manufacturer']->value->id)) {?>
                  <div class="product-manufacturer">
                    <?php if (isset($_smarty_tpl->tpl_vars['manufacturer_image_url']->value)) {?>
                      <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_brand_url']->value, ENT_QUOTES, 'UTF-8');?>
">
                        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['manufacturer_image_url']->value, ENT_QUOTES, 'UTF-8');?>
" class="img manufacturer-logo" />
                      </a>
                    <?php } else { ?>
                      <label class="label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Brand','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</label>
                      <span>
                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_brand_url']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_manufacturer']->value->name, ENT_QUOTES, 'UTF-8');?>
</a>
                      </span>
                    <?php }?>
                    <meta itemprop="brand" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_manufacturer']->value->name, ENT_QUOTES, 'UTF-8');?>
" />
                  </div>
                <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['product']->value['ean13']) {?>
                <meta itemprop="gtin13" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['ean13'], ENT_QUOTES, 'UTF-8');?>
" />
              <?php }?>
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8455151415e8d1a0698f7f4_30980991', 'product_prices', $this->tplIndex);
?>

          <?php
}
}
/* {/block 'product_details_info'} */
/* {block 'product_customization'} */
class Block_16661046465e8d1a069926c4_40514419 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/product-customization.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('customizations'=>$_smarty_tpl->tpl_vars['product']->value['customizations']), 0, false);
?>
              <?php
}
}
/* {/block 'product_customization'} */
/* {block 'product_variants'} */
class Block_4007207765e8d1a0699a094_86764374 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-variants.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                  <?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_miniature'} */
class Block_5757545345e8d1a069a2634_97724676 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/pack-product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_pack']->value), 0, true);
?>
                          <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'product_pack'} */
class Block_14329312335e8d1a0699b2d0_32024987 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php if ($_smarty_tpl->tpl_vars['packItems']->value) {?>
                      <section class="product-pack">
                        <h3 class="h4"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This pack contains','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h3>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['packItems']->value, 'product_pack');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product_pack']->value) {
?>
                          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5757545345e8d1a069a2634_97724676', 'product_miniature', $this->tplIndex);
?>

                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </section>
                    <?php }?>
                  <?php
}
}
/* {/block 'product_pack'} */
/* {block 'product_discounts'} */
class Block_4059779485e8d1a069a6000_99294398 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-discounts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                  <?php
}
}
/* {/block 'product_discounts'} */
/* {block 'product_add_to_cart'} */
class Block_18407777635e8d1a069a6f44_33675565 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-add-to-cart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                  <?php
}
}
/* {/block 'product_add_to_cart'} */
/* {block 'product_additional_info'} */
class Block_7116527755e8d1a069a8092_75310773 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-additional-info.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                  <?php
}
}
/* {/block 'product_additional_info'} */
/* {block 'product_refresh'} */
class Block_4185807205e8d1a069a8fa5_51894195 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <input class="product-refresh ps-hidden-by-js" name="refresh" type="submit" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Refresh','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
">
                  <?php
}
}
/* {/block 'product_refresh'} */
/* {block 'product_buy'} */
class Block_5740425635e8d1a06997cf6_33118760 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" method="post" id="add-to-cart-or-refresh">
                  <input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
                  <input type="hidden" name="id_product" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" id="product_page_product_id">
                  <input type="hidden" name="id_customization" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
" id="product_customization_id">

                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4007207765e8d1a0699a094_86764374', 'product_variants', $this->tplIndex);
?>


                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14329312335e8d1a0699b2d0_32024987', 'product_pack', $this->tplIndex);
?>


                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4059779485e8d1a069a6000_99294398', 'product_discounts', $this->tplIndex);
?>


                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18407777635e8d1a069a6f44_33675565', 'product_add_to_cart', $this->tplIndex);
?>


                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7116527755e8d1a069a8092_75310773', 'product_additional_info', $this->tplIndex);
?>


                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4185807205e8d1a069a8fa5_51894195', 'product_refresh', $this->tplIndex);
?>

                </form>
              <?php
}
}
/* {/block 'product_buy'} */
/* {block 'product_description_short'} */
class Block_9544764655e8d1a069aa5f4_25738117 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <div id="product-description-short-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" class="product-description-short rte" itemprop="description"><?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
</div>
            <?php
}
}
/* {/block 'product_description_short'} */
/* {block 'hook_display_reassurance'} */
class Block_11251252635e8d1a069ad685_10983280 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>

            <?php
}
}
/* {/block 'hook_display_reassurance'} */
/* {block 'product_description'} */
class Block_8170563005e8d1a069b0ed5_15123827 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <div class="product-description rte tab-pane-inner"><?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>
</div>
              <?php
}
}
/* {/block 'product_description'} */
/* {block 'product_footer'} */
class Block_2638523095e8d1a069b2a15_08283946 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterProduct','product'=>$_smarty_tpl->tpl_vars['product']->value,'category'=>$_smarty_tpl->tpl_vars['category']->value),$_smarty_tpl ) );?>

            <?php
}
}
/* {/block 'product_footer'} */
/* {block 'product_tabs'} */
class Block_5569069375e8d1a069ae8d2_82917945 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

         <div class="more-info">
           <ul class="nav nav-tabs_alternative">
                         <?php if ($_smarty_tpl->tpl_vars['product']->value['description']) {?>
             <li class="nav-item">
               <a class="more-info-tab nav-link" data-toggle="tab" href="#description">
                 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Description','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

               </a>
             </li>
             <?php }?>
                                                                           </ul>

           <div class="tab-content" id="tab-content">
                       <?php if ($_smarty_tpl->tpl_vars['product']->value['description']) {?>
            <div class="tab-pane fade in" id="description">
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8170563005e8d1a069b0ed5_15123827', 'product_description', $this->tplIndex);
?>

            </div>
            <?php }?>
                                                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2638523095e8d1a069b2a15_08283946', 'product_footer', $this->tplIndex);
?>

         </div>
         </div>
    <?php
}
}
/* {/block 'product_tabs'} */
/* {block 'product_images_modal'} */
class Block_595183945e8d1a069b4114_94418386 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-images-modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block 'product_images_modal'} */
/* {block 'page_footer'} */
class Block_1580904555e8d1a069b5ad0_91403580 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_3165295595e8d1a069b5248_37613018 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1580904555e8d1a069b5ad0_91403580', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_14745045985e8d1a069762c8_91580050 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_14745045985e8d1a069762c8_91580050',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_17630964245e8d1a06976942_15582626',
  ),
  'page_content' => 
  array (
    0 => 'Block_6477107435e8d1a069771c4_91868333',
  ),
  'product_cover_thumbnails' => 
  array (
    0 => 'Block_8625979125e8d1a06977733_63259293',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_9675532645e8d1a0697cff0_47822700',
  ),
  'page_header' => 
  array (
    0 => 'Block_10393719055e8d1a0697d647_75893948',
  ),
  'page_title' => 
  array (
    0 => 'Block_14056074035e8d1a0697ddd4_21140592',
  ),
  'product_details_info' => 
  array (
    0 => 'Block_4700717615e8d1a069814b2_59525270',
  ),
  'product_prices' => 
  array (
    0 => 'Block_8455151415e8d1a0698f7f4_30980991',
  ),
  'product_customization' => 
  array (
    0 => 'Block_16661046465e8d1a069926c4_40514419',
  ),
  'product_buy' => 
  array (
    0 => 'Block_5740425635e8d1a06997cf6_33118760',
  ),
  'product_variants' => 
  array (
    0 => 'Block_4007207765e8d1a0699a094_86764374',
  ),
  'product_pack' => 
  array (
    0 => 'Block_14329312335e8d1a0699b2d0_32024987',
  ),
  'product_miniature' => 
  array (
    0 => 'Block_5757545345e8d1a069a2634_97724676',
  ),
  'product_discounts' => 
  array (
    0 => 'Block_4059779485e8d1a069a6000_99294398',
  ),
  'product_add_to_cart' => 
  array (
    0 => 'Block_18407777635e8d1a069a6f44_33675565',
  ),
  'product_additional_info' => 
  array (
    0 => 'Block_7116527755e8d1a069a8092_75310773',
  ),
  'product_refresh' => 
  array (
    0 => 'Block_4185807205e8d1a069a8fa5_51894195',
  ),
  'product_description_short' => 
  array (
    0 => 'Block_9544764655e8d1a069aa5f4_25738117',
  ),
  'hook_display_reassurance' => 
  array (
    0 => 'Block_11251252635e8d1a069ad685_10983280',
  ),
  'product_tabs' => 
  array (
    0 => 'Block_5569069375e8d1a069ae8d2_82917945',
  ),
  'product_description' => 
  array (
    0 => 'Block_8170563005e8d1a069b0ed5_15123827',
  ),
  'product_footer' => 
  array (
    0 => 'Block_2638523095e8d1a069b2a15_08283946',
  ),
  'product_images_modal' => 
  array (
    0 => 'Block_595183945e8d1a069b4114_94418386',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_3165295595e8d1a069b5248_37613018',
  ),
  'page_footer' => 
  array (
    0 => 'Block_1580904555e8d1a069b5ad0_91403580',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main" itemscope itemtype="https://schema.org/Product">

    <div class="row">
      <div class="col-lg-5 l-column p-page">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17630964245e8d1a06976942_15582626', 'page_content_container', $this->tplIndex);
?>

        </div>
        <div class="col-lg-7 r-column">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9675532645e8d1a0697cff0_47822700', 'page_header_container', $this->tplIndex);
?>

          <?php if (Module::isInstalled('productcomments') && Module::isEnabled('productcomments')) {?>
            <div class="js-additional-info-to additional-info-to"></div>
          <?php }?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4700717615e8d1a069814b2_59525270', 'product_details_info', $this->tplIndex);
?>

          <div class="product-information">
            <?php if ($_smarty_tpl->tpl_vars['product']->value['is_customizable'] && count($_smarty_tpl->tpl_vars['product']->value['customizations']['fields'])) {?>
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16661046465e8d1a069926c4_40514419', 'product_customization', $this->tplIndex);
?>

            <?php }?>
            <div class="product-actions">
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5740425635e8d1a06997cf6_33118760', 'product_buy', $this->tplIndex);
?>

              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9544764655e8d1a069aa5f4_25738117', 'product_description_short', $this->tplIndex);
?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayRightColumnProduct','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

            </div>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11251252635e8d1a069ad685_10983280', 'hook_display_reassurance', $this->tplIndex);
?>

          </div>
        </div>
      </div>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5569069375e8d1a069ae8d2_82917945', 'product_tabs', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_595183945e8d1a069b4114_94418386', 'product_images_modal', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3165295595e8d1a069b5248_37613018', 'page_footer_container', $this->tplIndex);
?>

  </section>

<?php
}
}
/* {/block 'content'} */
}
