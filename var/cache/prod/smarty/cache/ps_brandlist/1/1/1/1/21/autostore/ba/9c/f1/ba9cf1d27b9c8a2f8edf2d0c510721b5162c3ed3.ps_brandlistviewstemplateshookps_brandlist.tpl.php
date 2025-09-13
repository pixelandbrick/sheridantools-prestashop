<?php
/* Smarty version 4.5.5, created on 2025-09-12 23:30:06
  from 'module:ps_brandlistviewstemplateshookps_brandlist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_68c4e53e8189c4_84814359',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad7605d3e1afaa968ac113b0444601df2cff1153' => 
    array (
      0 => 'module:ps_brandlistviewstemplateshookps_brandlist.tpl',
      1 => 1580954804,
      2 => 'module',
    ),
    '5e676d7315480f58ef8791428b246d135066c8f6' => 
    array (
      0 => 'module:ps_brandlistviewstemplates_partialsbrand_form.tpl',
      1 => 1580954804,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_68c4e53e8189c4_84814359 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
));
?>
<div id="search_filters_brands">
  <section class="facet">
    <h1 class="h6 text-uppercase facet-label">
      <a href="https://sheridantools.com/brands" title="Brands">        Brands
      </a>    </h1>
    <div>
              
<form action="#">
  <select onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
    <option value="">All brands</option>
          <option value="https://sheridantools.com/brand/5-erdi-bessey">Erdi / BESSEY</option>
          <option value="https://sheridantools.com/brand/4-ese-tools">ESE Tools</option>
          <option value="https://sheridantools.com/brand/8-freund">Freund</option>
          <option value="https://sheridantools.com/brand/6-system-rau">System RAU</option>
      </select>
</form>
          </div>
  </section>
</div>
<?php }
}
