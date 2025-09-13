<?php
/* Smarty version 4.5.5, created on 2025-09-12 23:31:34
  from 'module:ps_emailsubscriptionviewstemplateshookps_emailsubscription.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_68c4e59624afe3_59514276',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '307dc6bd4724d29d1572cc301dd7148e962604ef' => 
    array (
      0 => 'module:ps_emailsubscriptionviewstemplateshookps_emailsubscription.tpl',
      1 => 1757732429,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68c4e59624afe3_59514276 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="block_newsletter links wrapper">
    <?php if ($_smarty_tpl->tpl_vars['msg']->value) {?>
    <p class="alert <?php if ($_smarty_tpl->tpl_vars['nw_error']->value) {?>alert-danger<?php } else { ?>alert-success<?php }?>">
      <?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['msg']->value), ENT_QUOTES, 'UTF-8');?>

    </p>
    <?php }?>
<div class="newsletter-inner">
  <p class="h3 text-uppercase hidden-md-down"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Subscribe','d'=>'Modules.Emailsubscription.Shop'),$_smarty_tpl ) );?>
</p>
  <div class="block_newsletter_list">
    <!-- Begin Mailchimp Signup Form -->
    <form action="https://sheridantools.us4.list-manage.com/subscribe/post?u=066d82b43c99113dd9a798eec&amp;id=9a1391c954" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">

      <div class="mc-field-group">
        <div class="input-wrapper">
          <input name="EMAIL" type="email" class="required email form-control" id="mce-EMAIL" placeholder="Email Address" value="">
        <div id="mce-responses" class="clear">
          <div class="response" id="mce-error-response" style="display:none"></div>
          <div class="response" id="mce-success-response" style="display:none"></div>
        </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_066d82b43c99113dd9a798eec_9a1391c954" tabindex="-1" value=""></div>
        <!--<div class="clear button"><input class="btn fill btn-submit font-arrow-right" type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" ></div>-->
        <button
        class="btn fill btn-submit font-arrow-right"
        name="submitNewsletter"
        type="submit"
        id="mc-embedded-subscribe"
        >
        <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Subscribe','d'=>'Modules.Emailsubscription.Shop'),$_smarty_tpl ) );?>
</span>
        </button>
      </div>
    </div>
  </form>
  </div>

<!--End mc_embed_signup-->


<!--<p class="h3 text-uppercase hidden-md-down"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Subscribe','d'=>'Modules.Emailsubscription.Shop'),$_smarty_tpl ) );?>
</p>
<div class="block_newsletter_list">
<div class="form">
<form action="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['pages']['index']), ENT_QUOTES, 'UTF-8');?>
#footer" method="post">
<?php if ((isset($_smarty_tpl->tpl_vars['id_module']->value))) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayGDPRConsent','id_module'=>$_smarty_tpl->tpl_vars['id_module']->value),$_smarty_tpl ) );?>

<?php }?>
<div class="input-wrapper">
<input
class="form-control"
name="email"
type="email"
value="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['value']->value), ENT_QUOTES, 'UTF-8');?>
"
placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your email address','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
">
<input type="hidden" name="action" value="0">
<button
class="btn fill btn-submit font-arrow-right"
name="submitNewsletter"
type="submit"
>
<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Subscribe','d'=>'Modules.Emailsubscription.Shop'),$_smarty_tpl ) );?>
</span>
</button>
</div>
</form>
</div>
-->

  </div>
  </div>
</div>
<?php }
}
