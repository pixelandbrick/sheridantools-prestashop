<?php
/* Smarty version 3.1.33, created on 2020-04-07 20:31:31
  from 'module:xipblogviewstemplatesfron' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e8d1b639d9913_69071773',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98d3590ba0bcf9f78bd65c6a7e571c4360a29691' => 
    array (
      0 => 'module:xipblogviewstemplatesfron',
      1 => 1581198535,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:xipblog/views/templates/front/post-video.tpl' => 2,
    'module:xipblog/views/templates/front/post-audio.tpl' => 2,
    'module:xipblog/views/templates/front/post-gallery.tpl' => 2,
  ),
),false)) {
function content_5e8d1b639d9913_69071773 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home2/sheridantools/public_html/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div class="home_blog_post_area <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['xipbdp_designlayout']->value, ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hookName']->value, ENT_QUOTES, 'UTF-8');?>
">
	<?php if ($_smarty_tpl->tpl_vars['hookName']->value == 'displayHome') {?>
		<div class="container wow" data-wow-offset="200">
	<?php }?>
		<div class="home_blog_post">
			<div class="page_title_area">
				<?php if (isset($_smarty_tpl->tpl_vars['xipbdp_title']->value)) {?>
					<h3 class="headline-section">
						<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['xipbdp_title']->value, ENT_QUOTES, 'UTF-8');?>

					</h3>
				<?php }?>
				<?php if (isset($_smarty_tpl->tpl_vars['xipbdp_subtext']->value)) {?>
					<p class="description-section"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['xipbdp_subtext']->value, ENT_QUOTES, 'UTF-8');?>
</p>
				<?php }?>
			</div>
			<div class="row home_blog_post_inner carousel" data-items="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['xipbdp_numcolumn']->value, ENT_QUOTES, 'UTF-8');?>
">
			<?php if ((isset($_smarty_tpl->tpl_vars['xipblogposts']->value) && !empty($_smarty_tpl->tpl_vars['xipblogposts']->value))) {?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['xipblogposts']->value, 'xipblgpst');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['xipblgpst']->value) {
?>
					<article class="blog_post col-12 col-sm-6 col-md-4">
						<div class="blog_post_content">
							<div class="blog_post_content_top">
								<?php if ($_smarty_tpl->tpl_vars['xipblgpst']->value['post_format'] != 'video' && $_smarty_tpl->tpl_vars['xipblgpst']->value['post_format'] != 'audio' && $_smarty_tpl->tpl_vars['xipblgpst']->value['post_format'] != 'gallery') {?>
								<a class="post_thumbnail" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['xipblgpst']->value['link'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Read more','d'=>'Modules.Xipblog.Shop'),$_smarty_tpl ) );?>
">
								<?php } else { ?>
								<div class="post_thumbnail">
								<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['xipblgpst']->value['post_format'] == 'video') {?>
										<?php $_smarty_tpl->_assignInScope('postvideos', explode(',',$_smarty_tpl->tpl_vars['xipblgpst']->value['video']));?>
										<?php if (count($_smarty_tpl->tpl_vars['postvideos']->value) > 1) {?>
											<?php $_smarty_tpl->_subTemplateRender("module:xipblog/views/templates/front/post-video.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('videos'=>$_smarty_tpl->tpl_vars['postvideos']->value,'width'=>'570','height'=>"316",'class'=>"carousel"), 0, true);
?>
										<?php } else { ?>
											<?php $_smarty_tpl->_subTemplateRender("module:xipblog/views/templates/front/post-video.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('videos'=>$_smarty_tpl->tpl_vars['postvideos']->value,'width'=>'570','height'=>"316",'class'=>''), 0, true);
?>
										<?php }?>
									<?php } elseif ($_smarty_tpl->tpl_vars['xipblgpst']->value['post_format'] == 'audio') {?>
										<?php $_smarty_tpl->_assignInScope('postaudio', explode(',',$_smarty_tpl->tpl_vars['xipblgpst']->value['audio']));?>
										<?php if (count($_smarty_tpl->tpl_vars['postaudio']->value) > 1) {?>
											<?php $_smarty_tpl->_subTemplateRender("module:xipblog/views/templates/front/post-audio.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('audios'=>$_smarty_tpl->tpl_vars['postaudio']->value,'width'=>'570','height'=>"316",'class'=>"carousel"), 0, true);
?>
										<?php } else { ?>
											<?php $_smarty_tpl->_subTemplateRender("module:xipblog/views/templates/front/post-audio.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('audios'=>$_smarty_tpl->tpl_vars['postaudio']->value,'width'=>'570','height'=>"316",'class'=>''), 0, true);
?>
										<?php }?>
									<?php } elseif ($_smarty_tpl->tpl_vars['xipblgpst']->value['post_format'] == 'gallery') {?>
										<?php if (count($_smarty_tpl->tpl_vars['xipblgpst']->value['gallery_lists']) > 1) {?>
											<?php $_smarty_tpl->_subTemplateRender("module:xipblog/views/templates/front/post-gallery.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('gallery'=>$_smarty_tpl->tpl_vars['xipblgpst']->value['gallery_lists'],'imagesize'=>"home_default",'class'=>"carousel"), 0, true);
?>
										<?php } else { ?>
											<?php $_smarty_tpl->_subTemplateRender("module:xipblog/views/templates/front/post-gallery.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('gallery'=>$_smarty_tpl->tpl_vars['xipblgpst']->value['gallery_lists'],'imagesize'=>"home_default",'class'=>''), 0, true);
?>
										<?php }?>
									<?php } else { ?>
										<img class="xipblog_img img-responsive" src="/modules/xipblog/img/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['xipblgpst']->value['post_img'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['xipblgpst']->value['post_title'], ENT_QUOTES, 'UTF-8');?>
">
									<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['xipblgpst']->value['post_format'] != 'video' && $_smarty_tpl->tpl_vars['xipblgpst']->value['post_format'] != 'audio' && $_smarty_tpl->tpl_vars['xipblgpst']->value['post_format'] != 'gallery') {?>
								</a>
								<?php } else { ?>
								</div>
								<?php }?>
							</div>
							<div class="blog_post_content_bottom">
								<h3 class="post_title"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['xipblgpst']->value['link'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Read more','d'=>'Modules.Xipblog.Shop'),$_smarty_tpl ) );?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['xipblgpst']->value['post_title'], ENT_QUOTES, 'UTF-8');?>
</a></h3>
								<div class="post_content">
									<?php if (isset($_smarty_tpl->tpl_vars['xipblgpst']->value['post_excerpt']) && !empty($_smarty_tpl->tpl_vars['xipblgpst']->value['post_excerpt'])) {?>
										<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['xipblgpst']->value['post_excerpt'],130,' ...' )),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

									<?php } else { ?>
										<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['xipblgpst']->value['post_content'],130,' ...' )),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

									<?php }?>
									<a class="read_more" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['xipblgpst']->value['link'], ENT_QUOTES, 'UTF-8');?>
"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Read more','d'=>'Modules.Xipblog.Shop'),$_smarty_tpl ) );?>
</span></a>
								</div>
							</div>
							<div class="post_meta">
								<span class="meta_author font-user">
									<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['xipblgpst']->value['post_author_arr']['firstname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['xipblgpst']->value['post_author_arr']['lastname'], ENT_QUOTES, 'UTF-8');?>

								</span>
								<span class="meta_date font-calendar">
									<?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['xipblgpst']->value['post_date'],"%b %d, %Y"), ENT_QUOTES, 'UTF-8');?>

								</span>
								<a class="meta_category font-comments" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['xipblgpst']->value['category_default_arr']['link'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['xipblgpst']->value['category_default_arr']['name'], ENT_QUOTES, 'UTF-8');?>
</a>
							</div>
							</div>
					</article>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php } else { ?>
				<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No Blog Post Found','d'=>'Modules.Xipblog.Shop'),$_smarty_tpl ) );?>
</p>
			<?php }?>
			</div>
		</div>
	<?php if ($_smarty_tpl->tpl_vars['hookName']->value == 'displayHome') {?>
		</div>
	<?php }?>
</div><?php }
}
