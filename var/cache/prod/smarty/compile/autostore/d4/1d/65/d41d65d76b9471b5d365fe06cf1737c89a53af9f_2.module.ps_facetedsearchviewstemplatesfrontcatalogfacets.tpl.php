<?php
/* Smarty version 4.5.5, created on 2025-09-12 23:30:05
  from 'module:ps_facetedsearchviewstemplatesfrontcatalogfacets.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_68c4e53d7d50b0_06461242',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd41d65d76b9471b5d365fe06cf1737c89a53af9f' => 
    array (
      0 => 'module:ps_facetedsearchviewstemplatesfrontcatalogfacets.tpl',
      1 => 1580954804,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68c4e53d7d50b0_06461242 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/sheridantools/public_html/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if (smarty_modifier_count($_smarty_tpl->tpl_vars['displayedFacets']->value)) {?>
  <div id="search_filters">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_88922353568c4e53d781ee7_78851939', 'facets_title');
?>

    <div class="facets-wrapper">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['displayedFacets']->value, 'facet');
$_smarty_tpl->tpl_vars['facet']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['facet']->value) {
$_smarty_tpl->tpl_vars['facet']->do_else = false;
?>
      <div class="facet clearfix">
      <?php if ($_smarty_tpl->tpl_vars['facet']->value['widgetType'] !== 'dropdown') {?>
        <p class="facet-title hidden-md-down"><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['facet']->value['label']), ENT_QUOTES, 'UTF-8');?>
</p>
      <?php }?>
        <?php $_smarty_tpl->_assignInScope('_expand_id', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'mt_rand' ][ 0 ], array( 10,100000 )));?>
        <?php $_smarty_tpl->_assignInScope('_collapse', true);?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['facet']->value['filters'], 'filter');
$_smarty_tpl->tpl_vars['filter']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->do_else = false;
?>
          <?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {
$_smarty_tpl->_assignInScope('_collapse', false);
}?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php if ($_smarty_tpl->tpl_vars['facet']->value['widgetType'] !== 'dropdown') {?>
        <div class="title hidden-lg-up" data-target="#facet_<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['_expand_id']->value), ENT_QUOTES, 'UTF-8');?>
" data-toggle="collapse"<?php if (!$_smarty_tpl->tpl_vars['_collapse']->value) {?> aria-expanded="true"<?php }?>>
          <p class="h6 facet-title"><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['facet']->value['label']), ENT_QUOTES, 'UTF-8');?>
</p>
          <span class="float-xs-right">
            <span class="navbar-toggler collapse-icons">
              <i class="material-icons add">&#xE313;</i>
              <i class="material-icons remove">&#xE316;</i>
            </span>
          </span>
        </div>
        <?php }?>
        <?php if (in_array($_smarty_tpl->tpl_vars['facet']->value['widgetType'],array('radio','checkbox'))) {?>
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5233581368c4e53d79d3e8_12576025', 'facet_item_other');
?>


        <?php } elseif ($_smarty_tpl->tpl_vars['facet']->value['widgetType'] == 'dropdown') {?>
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_177039526468c4e53d7b5b50_37075179', 'facet_item_dropdown');
?>


        <?php } elseif ($_smarty_tpl->tpl_vars['facet']->value['widgetType'] == 'slider') {?>
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_88409926468c4e53d7c6711_09071035', 'facet_item_slider');
?>

        <?php }?>
      </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_59611227368c4e53d7d0c82_07790225', 'facets_clearall_button');
?>

  </div>
  </div>
<?php }
}
/* {block 'facets_title'} */
class Block_88922353568c4e53d781ee7_78851939 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'facets_title' => 
  array (
    0 => 'Block_88922353568c4e53d781ee7_78851939',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <p class="text-uppercase h6 hidden-md-down"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filter By','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</p>
    <?php
}
}
/* {/block 'facets_title'} */
/* {block 'facet_item_other'} */
class Block_5233581368c4e53d79d3e8_12576025 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'facet_item_other' => 
  array (
    0 => 'Block_5233581368c4e53d79d3e8_12576025',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <ul id="facet_<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['_expand_id']->value), ENT_QUOTES, 'UTF-8');?>
" class="collapse<?php if (!$_smarty_tpl->tpl_vars['_collapse']->value) {?> in<?php }?>">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['facet']->value['filters'], 'filter', false, 'filter_key');
$_smarty_tpl->tpl_vars['filter']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['filter_key']->value => $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->do_else = false;
?>
                <?php if (!$_smarty_tpl->tpl_vars['filter']->value['displayed']) {?>
                  <?php continue 1;?>
                <?php }?>

                <li>
                  <label class="facet-label<?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {?> active <?php }?>" for="facet_input_<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['_expand_id']->value), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['filter_key']->value), ENT_QUOTES, 'UTF-8');?>
">
                    <?php if ($_smarty_tpl->tpl_vars['facet']->value['multipleSelectionAllowed']) {?>
                      <span class="custom-checkbox">
                        <input
                          id="facet_input_<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['_expand_id']->value), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['filter_key']->value), ENT_QUOTES, 'UTF-8');?>
"
                          data-search-url="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL']), ENT_QUOTES, 'UTF-8');?>
"
                          type="checkbox"
                          <?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {?>checked<?php }?>
                        >
                        <?php if ((isset($_smarty_tpl->tpl_vars['filter']->value['properties']['color']))) {?>
                          <span class="color" style="background-color:<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['filter']->value['properties']['color']), ENT_QUOTES, 'UTF-8');?>
"></span>
                        <?php } elseif ((isset($_smarty_tpl->tpl_vars['filter']->value['properties']['texture']))) {?>
                          <span class="color texture" style="background-image:url(<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['filter']->value['properties']['texture']), ENT_QUOTES, 'UTF-8');?>
)"></span>
                        <?php } else { ?>
                          <span <?php if (!$_smarty_tpl->tpl_vars['js_enabled']->value) {?> class="ps-shown-by-js" <?php }?>><i class="material-icons rtl-no-flip checkbox-checked">&#xE5CA;</i></span>
                        <?php }?>
                      </span>
                    <?php } else { ?>
                      <span class="custom-radio">
                        <input
                          id="facet_input_<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['_expand_id']->value), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['filter_key']->value), ENT_QUOTES, 'UTF-8');?>
"
                          data-search-url="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL']), ENT_QUOTES, 'UTF-8');?>
"
                          type="radio"
                          name="filter <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['facet']->value['label']), ENT_QUOTES, 'UTF-8');?>
"
                          <?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {?>checked<?php }?>
                        >
                        <span <?php if (!$_smarty_tpl->tpl_vars['js_enabled']->value) {?> class="ps-shown-by-js" <?php }?>></span>
                      </span>
                    <?php }?>

                    <a
                      href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL']), ENT_QUOTES, 'UTF-8');?>
"
                      class="_gray-darker search-link js-search-link"
                      rel="nofollow"
                    >
                      <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['filter']->value['label']), ENT_QUOTES, 'UTF-8');?>

                      <?php if ($_smarty_tpl->tpl_vars['filter']->value['magnitude'] && $_smarty_tpl->tpl_vars['show_quantities']->value) {?>
                        <span class="magnitude">(<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['filter']->value['magnitude']), ENT_QUOTES, 'UTF-8');?>
)</span>
                      <?php }?>
                    </a>
                  </label>
                </li>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
          <?php
}
}
/* {/block 'facet_item_other'} */
/* {block 'facet_item_dropdown'} */
class Block_177039526468c4e53d7b5b50_37075179 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'facet_item_dropdown' => 
  array (
    0 => 'Block_177039526468c4e53d7b5b50_37075179',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <ul id="facet_<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['_expand_id']->value), ENT_QUOTES, 'UTF-8');?>
" class="collapse<?php if (!$_smarty_tpl->tpl_vars['_collapse']->value) {?> in<?php }?>">
              <li class="select-type">
                <div class="facet-dropdown dropdown">
                  <a class="select-title" rel="nofollow" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php $_smarty_tpl->_assignInScope('active_found', false);?>
                    <span>
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['facet']->value['filters'], 'filter');
$_smarty_tpl->tpl_vars['filter']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->do_else = false;
?>
                        <?php if ($_smarty_tpl->tpl_vars['filter']->value['active']) {?>
                          <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['filter']->value['label']), ENT_QUOTES, 'UTF-8');?>

                          <?php if ($_smarty_tpl->tpl_vars['filter']->value['magnitude'] && $_smarty_tpl->tpl_vars['show_quantities']->value) {?>
                            (<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['filter']->value['magnitude']), ENT_QUOTES, 'UTF-8');?>
)
                          <?php }?>
                          <?php $_smarty_tpl->_assignInScope('active_found', true);?>
                        <?php }?>
                      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                      <?php if (!$_smarty_tpl->tpl_vars['active_found']->value) {?>
                                                <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['facet']->value['label']), ENT_QUOTES, 'UTF-8');?>

                      <?php }?>
                    </span>
                    <i class="material-icons float-xs-right">&#xE5C5;</i>
                  </a>
                  <div class="dropdown-menu">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['facet']->value['filters'], 'filter');
$_smarty_tpl->tpl_vars['filter']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->do_else = false;
?>
                      <?php if (!$_smarty_tpl->tpl_vars['filter']->value['active']) {?>
                        <a
                          rel="nofollow"
                          href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL']), ENT_QUOTES, 'UTF-8');?>
"
                          class="select-list"
                        >
                          <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['filter']->value['label']), ENT_QUOTES, 'UTF-8');?>

                          <?php if ($_smarty_tpl->tpl_vars['filter']->value['magnitude'] && $_smarty_tpl->tpl_vars['show_quantities']->value) {?>
                            (<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['filter']->value['magnitude']), ENT_QUOTES, 'UTF-8');?>
)
                          <?php }?>
                        </a>
                      <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </div>
                </div>
              </li>
            </ul>
          <?php
}
}
/* {/block 'facet_item_dropdown'} */
/* {block 'facet_item_slider'} */
class Block_88409926468c4e53d7c6711_09071035 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'facet_item_slider' => 
  array (
    0 => 'Block_88409926468c4e53d7c6711_09071035',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['facet']->value['filters'], 'filter');
$_smarty_tpl->tpl_vars['filter']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->do_else = false;
?>
              <ul id="facet_<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['_expand_id']->value), ENT_QUOTES, 'UTF-8');?>
"
                class="faceted-slider"
                data-slider-min="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['facet']->value['properties']['min']), ENT_QUOTES, 'UTF-8');?>
"
                data-slider-max="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['facet']->value['properties']['max']), ENT_QUOTES, 'UTF-8');?>
"
                data-slider-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['_expand_id']->value), ENT_QUOTES, 'UTF-8');?>
"
                data-slider-values="<?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['filter']->value['value'] ))), ENT_QUOTES, 'UTF-8');?>
"
                data-slider-unit="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['facet']->value['properties']['unit']), ENT_QUOTES, 'UTF-8');?>
"
                data-slider-label="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['facet']->value['label']), ENT_QUOTES, 'UTF-8');?>
"
                data-slider-specifications="<?php echo htmlspecialchars((string) (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['facet']->value['properties']['specifications'] ))), ENT_QUOTES, 'UTF-8');?>
"
                data-slider-encoded-url="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL']), ENT_QUOTES, 'UTF-8');?>
"
              >
                <li class="slider-type">
                  <p id="facet_label_<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['_expand_id']->value), ENT_QUOTES, 'UTF-8');?>
" class="slider-title">
                    <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['filter']->value['label']), ENT_QUOTES, 'UTF-8');?>

                  </p>

                  <div id="slider-range_<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['_expand_id']->value), ENT_QUOTES, 'UTF-8');?>
"></div>
                </li>
              </ul>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          <?php
}
}
/* {/block 'facet_item_slider'} */
/* {block 'facets_clearall_button'} */
class Block_59611227368c4e53d7d0c82_07790225 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'facets_clearall_button' => 
  array (
    0 => 'Block_59611227368c4e53d7d0c82_07790225',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/sheridantools/public_html/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
?>

      <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['activeFilters']->value)) {?>
        <div id="_desktop_search_filters_clear_all" class="hidden-md-down clear-all-wrapper">
          <button data-search-url="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['clear_all_link']->value), ENT_QUOTES, 'UTF-8');?>
" class="btn btn-tertiary js-search-filters-clear-all">
            <i class="material-icons">&#xE14C;</i>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Clear all','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

          </button>
        </div>
      <?php }?>
    <?php
}
}
/* {/block 'facets_clearall_button'} */
}
