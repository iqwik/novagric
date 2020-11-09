<?php
get_header();
global $tpl_top;
?>
<div id="rt-transition" class="rt-visible">
	<div id="rt-main" class="sa3-mb9">
		<div class="rt-grid-9 rt-push-3">
			<?php isset($tpl_top[$post->post_name])
				? get_template_part(TEMPLATE_PARTS . '_slider/' . $post->post_name)
				: null;?>
			<div class="rt-block component-block">
				<div class="component-content"><?php echo $post->post_content;?></div>
				<div class="clear"></div>
			</div>
		</div>
		<div class="rt-grid-3 sidebar-left rt-pull-9"><?php get_template_part(TEMPLATE_PARTS . 'sidebar');?></div>
		<div class="clear"></div>
	</div>
</div>
<?php get_footer();?>
