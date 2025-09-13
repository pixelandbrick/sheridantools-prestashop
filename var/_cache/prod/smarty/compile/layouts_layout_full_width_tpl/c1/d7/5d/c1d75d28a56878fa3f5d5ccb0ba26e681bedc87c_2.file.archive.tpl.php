<?php
/* Smarty version 3.1.33, created on 2020-04-07 14:55:39
  from '/home2/sheridantools/public_html/themes/autostore/modules/xipblog/views/templates/front/default/archive.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e8cccab4ce8e4_63758808',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c1d75d28a56878fa3f5d5ccb0ba26e681bedc87c' => 
    array (
      0 => '/home2/sheridantools/public_html/themes/autostore/modules/xipblog/views/templates/front/default/archive.tpl',
      1 => 1581215730,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'module:xipblog/views/templates/front/default/post-video.tpl' => 1,
    'module:xipblog/views/templates/front/default/post-audio.tpl' => 1,
    'module:xipblog/views/templates/front/default/post-gallery.tpl' => 1,
    'module:xipblog/views/templates/front/default/pagination.tpl' => 1,
  ),
),false)) {
function content_5e8cccab4ce8e4_63758808 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_243917535e8cccab4815a2_99897855', 'page_header_container');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19752080015e8cccab4853c8_10351611', "page_content_container");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18045364405e8cccab4c32e8_65074901', "left_column");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_438859505e8cccab4c99b0_42765547', "right_column");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_header_container'} */
class Block_243917535e8cccab4815a2_99897855 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_header_container' => 
  array (
    0 => 'Block_243917535e8cccab4815a2_99897855',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_header_container'} */
/* {block "xipblog_post_thumbnail"} */
class Block_5867572615e8cccab49a099_95798726 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								<?php if ($_smarty_tpl->tpl_vars['xpblgpst']->value['post_format'] == 'video') {?>
									<?php $_smarty_tpl->_assignInScope('postvideos', explode(',',$_smarty_tpl->tpl_vars['xpblgpst']->value['video']));?>
									<?php if (count($_smarty_tpl->tpl_vars['postvideos']->value) > 1) {?>
										<?php $_smarty_tpl->_assignInScope('class', 'carousel');?>
									<?php } else { ?>
										<?php $_smarty_tpl->_assignInScope('class', '');?>
									<?php }?>
									<?php $_smarty_tpl->_subTemplateRender("module:xipblog/views/templates/front/default/post-video.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('postvideos'=>$_smarty_tpl->tpl_vars['postvideos']->value,'width'=>'870','height'=>"482",'class'=>$_smarty_tpl->tpl_vars['class']->value), 0, true);
?>
								<?php } elseif ($_smarty_tpl->tpl_vars['xpblgpst']->value['post_format'] == 'audio') {?>
									<?php $_smarty_tpl->_assignInScope('postaudio', explode(',',$_smarty_tpl->tpl_vars['xpblgpst']->value['audio']));?>
									<?php if (count($_smarty_tpl->tpl_vars['postaudio']->value) > 1) {?>
										<?php $_smarty_tpl->_assignInScope('class', 'carousel');?>
									<?php } else { ?>
										<?php $_smarty_tpl->_assignInScope('class', '');?>
									<?php }?>
									<?php $_smarty_tpl->_subTemplateRender("module:xipblog/views/templates/front/default/post-audio.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('postaudio'=>$_smarty_tpl->tpl_vars['postaudio']->value,'class'=>$_smarty_tpl->tpl_vars['class']->value), 0, true);
?>
								<?php } elseif ($_smarty_tpl->tpl_vars['xpblgpst']->value['post_format'] == 'gallery') {?>
									<?php if (count($_smarty_tpl->tpl_vars['xpblgpst']->value['gallery_lists']) > 1) {?>
										<?php $_smarty_tpl->_assignInScope('class', 'carousel');?>
									<?php } else { ?>
										<?php $_smarty_tpl->_assignInScope('class', '');?>
									<?php }?>
									<?php $_smarty_tpl->_subTemplateRender("module:xipblog/views/templates/front/default/post-gallery.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('gallery_lists'=>$_smarty_tpl->tpl_vars['xpblgpst']->value['gallery_lists'],'imagesize'=>"large",'class'=>$_smarty_tpl->tpl_vars['class']->value), 0, true);
?>
								<?php } else { ?>
									<img class="img-responsive" src="/modules/xipblog/img/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['xpblgpst']->value['post_img'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['xpblgpst']->value['post_title'], ENT_QUOTES, 'UTF-8');?>
">
								<?php }?>
							<?php
}
}
/* {/block "xipblog_post_thumbnail"} */
/* {block "page_content_container"} */
class Block_19752080015e8cccab4853c8_10351611 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_19752080015e8cccab4853c8_10351611',
  ),
  'xipblog_post_thumbnail' => 
  array (
    0 => 'Block_5867572615e8cccab49a099_95798726',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home2/sheridantools/public_html/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

	<section id="content" class="page-content ">
	<?php if (isset($_smarty_tpl->tpl_vars['xipblogpost']->value) && !empty($_smarty_tpl->tpl_vars['xipblogpost']->value)) {?>
	<div class="kr_blog_post_area post-category">
		<div class="kr_blog_post_inner row blog_style_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['xipblogsettings']->value['blog_style'], ENT_QUOTES, 'UTF-8');?>
 column_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['xipblogsettings']->value['blog_no_of_col'], ENT_QUOTES, 'UTF-8');?>
">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['xipblogpost']->value, 'xpblgpst');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['xpblgpst']->value) {
?>
				<article id="blog_post" class="blog_post blog_post_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['xpblgpst']->value['post_format'], ENT_QUOTES, 'UTF-8');?>
 clearfix">
					<div class="blog_post_content">
						<div class="blog_post_content_top">
							<?php if ($_smarty_tpl->tpl_vars['xpblgpst']->value['post_format'] != 'video' && $_smarty_tpl->tpl_vars['xpblgpst']->value['post_format'] != 'audio' && $_smarty_tpl->tpl_vars['xpblgpst']->value['post_format'] != 'gallery') {?>
							<a class="post_thumbnail" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['xpblgpst']->value['link'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Read more','d'=>'Modules.Xipblog.Shop'),$_smarty_tpl ) );?>
">
							<?php } else { ?>
							<div class="post_thumbnail">
							<?php }?>
							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5867572615e8cccab49a099_95798726', "xipblog_post_thumbnail", $this->tplIndex);
?>

							<?php if ($_smarty_tpl->tpl_vars['xpblgpst']->value['post_format'] != 'video' && $_smarty_tpl->tpl_vars['xpblgpst']->value['post_format'] != 'audio' && $_smarty_tpl->tpl_vars['xpblgpst']->value['post_format'] != 'gallery') {?>
							</a>
							<?php } else { ?>
							</div>
							<?php }?>
						</div>
						<div class="blog_post_content_bottom">
							<h3 class="post_title"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['xpblgpst']->value['link'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Read more','d'=>'Modules.Xipblog.Shop'),$_smarty_tpl ) );?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['xpblgpst']->value['post_title'], ENT_QUOTES, 'UTF-8');?>
</a></h3>
							<div class="post_content">
								<?php if (isset($_smarty_tpl->tpl_vars['xpblgpst']->value['post_excerpt']) && !empty($_smarty_tpl->tpl_vars['xpblgpst']->value['post_excerpt'])) {?>
									<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['xpblgpst']->value['post_excerpt'],500,'...' )),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

								<?php } else { ?>
									<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['xpblgpst']->value['post_content'],400,'...' )),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

								<?php }?>
								<a class="read_more" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['xpblgpst']->value['link'], ENT_QUOTES, 'UTF-8');?>
"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Read more','d'=>'Modules.Xipblog.Shop'),$_smarty_tpl ) );?>
</span></a>
							</div>
						</div>
						<div class="post_meta">
							<span class="meta_author font-user">
								<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['xpblgpst']->value['post_author_arr']['firstname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['xpblgpst']->value['post_author_arr']['lastname'], ENT_QUOTES, 'UTF-8');?>
</span>
							</span>
							<span class="meta_date font-calendar">
							     <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['xpblgpst']->value['post_date'],"%b %d, %Y"), ENT_QUOTES, 'UTF-8');?>

							</span>
														<span class="meta_comment font-eye">
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Views','d'=>'Modules.Xipblog.Shop'),$_smarty_tpl ) );?>
 (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['xpblgpst']->value['comment_count'], ENT_QUOTES, 'UTF-8');?>
)
							</span>
						</div>
					</div>
				</article>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
	</div>
	<?php }?>
	</section>
<?php $_smarty_tpl->_subTemplateRender("module:xipblog/views/templates/front/default/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "page_content_container"} */
/* {block "left_column"} */
class Block_18045364405e8cccab4c32e8_65074901 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_18045364405e8cccab4c32e8_65074901',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home2/sheridantools/public_html/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

	<?php $_smarty_tpl->_assignInScope('layout_column', strval(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['layout']->value,'layouts/',''),'.tpl','')));?>
	<?php if (($_smarty_tpl->tpl_vars['layout_column']->value == 'layout-left-column')) {?>
		<div id="left-column" class="sidebar col-xs-12 col-sm-12 col-md-3 pull-md-9">
			<?php if (($_smarty_tpl->tpl_vars['xipblog_column_use']->value == 'own_ps')) {?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayxipblogleft"),$_smarty_tpl ) );?>

			<?php } else { ?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayLeftColumn"),$_smarty_tpl ) );?>

			<?php }?>
		</div>
	<?php }
}
}
/* {/block "left_column"} */
/* {block "right_column"} */
class Block_438859505e8cccab4c99b0_42765547 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_438859505e8cccab4c99b0_42765547',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home2/sheridantools/public_html/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

	<?php $_smarty_tpl->_assignInScope('layout_column', strval(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['layout']->value,'layouts/',''),'.tpl','')));?>
	<?php if (($_smarty_tpl->tpl_vars['layout_column']->value == 'layout-right-column')) {?>
		<div id="right-column" class="sidebar col-xs-12 col-sm-4 col-md-3">
			<?php if (($_smarty_tpl->tpl_vars['xipblog_column_use']->value == 'own_ps')) {?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayxipblogright"),$_smarty_tpl ) );?>

			<?php } else { ?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayRightColumn"),$_smarty_tpl ) );?>

			<?php }?>
		</div>
	<?php }
}
}
/* {/block "right_column"} */
}
