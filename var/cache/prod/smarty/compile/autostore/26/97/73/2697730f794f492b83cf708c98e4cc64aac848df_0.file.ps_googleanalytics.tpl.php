<?php
/* Smarty version 4.5.5, created on 2025-09-12 23:27:19
  from '/home/sheridantools/public_html/modules/ps_googleanalytics/views/templates/hook/ps_googleanalytics.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_68c4e4971baff8_73285209',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2697730f794f492b83cf708c98e4cc64aac848df' => 
    array (
      0 => '/home/sheridantools/public_html/modules/ps_googleanalytics/views/templates/hook/ps_googleanalytics.tpl',
      1 => 1738072594,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68c4e4971baff8_73285209 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 async src="https://www.googletagmanager.com/gtag/js?id=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['gaAccountId']->value,'htmlall','UTF-8' ));?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag(
    'config',
    '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['gaAccountId']->value,'htmlall','UTF-8' ));?>
',
    {
      'debug_mode':false
      <?php if ($_smarty_tpl->tpl_vars['gaAnonymizeEnabled']->value) {?>, 'anonymize_ip': true<?php }?>
      <?php if ($_smarty_tpl->tpl_vars['userId']->value && !$_smarty_tpl->tpl_vars['backOffice']->value) {?>, 'user_id': '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['userId']->value,'htmlall','UTF-8' ));?>
'<?php }?>
      <?php if ($_smarty_tpl->tpl_vars['backOffice']->value && !$_smarty_tpl->tpl_vars['trackBackOffice']->value) {?>, 'non_interaction': true, 'send_page_view': false<?php }?>
    }
  );
<?php echo '</script'; ?>
>

<?php }
}
