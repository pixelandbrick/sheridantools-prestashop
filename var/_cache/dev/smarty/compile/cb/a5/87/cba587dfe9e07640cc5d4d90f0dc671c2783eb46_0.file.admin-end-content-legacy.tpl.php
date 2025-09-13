<?php
/* Smarty version 3.1.33, created on 2020-03-13 21:06:44
  from '/home2/sheridantools/dev.sheridantools.com/modules/ps_mbo/views/templates/admin/admin-end-content-legacy.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e6c2e24a89453_29472006',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cba587dfe9e07640cc5d4d90f0dc671c2783eb46' => 
    array (
      0 => '/home2/sheridantools/dev.sheridantools.com/modules/ps_mbo/views/templates/admin/admin-end-content-legacy.tpl',
      1 => 1584147297,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e6c2e24a89453_29472006 (Smarty_Internal_Template $_smarty_tpl) {
?> <div id="admin-end-content-footer">

 </div>

<?php echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function(){

        $.ajax({
            type: 'POST',
            headers: { "cache-control": "no-cache" },
            url: '<?php echo $_smarty_tpl->tpl_vars['admin_module_ajax_url_psmbo']->value;?>
',
            async: true,
            cache: false,
            dataType : "html",
            data: {
                ajax: '1',
                action:'fetchModules',
                controller_page: '<?php echo $_smarty_tpl->tpl_vars['controller_page']->value;?>
',
                legacy: '1'
            },
            beforeSend: function() {
                $('#admin-end-content-footer').html('<i class="icon-refresh icon-spin"></i>');
            },
            success: function(data) {
                $('#admin-end-content-footer').html(data);
            }
        });


        $('.controller-quick-view').each(function() {
            $(this).fancybox({
                type: 'ajax',
                autoDimensions: false,
                autoSize: false,
                width: 600,
                height: 'auto',
                helpers: {
                    overlay: {
                        locked: false
                    }
                },
                href: $(this).attr('href') + '&action=GetModuleQuickView&module_name=' + $(this).attr('data-name') + '&ajax=1'
            });
        });
    });
<?php echo '</script'; ?>
>
<?php }
}
