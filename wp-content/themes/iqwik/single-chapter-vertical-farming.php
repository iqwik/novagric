<?php get_header();?>
<div id="rt-transition" class="rt-visible">
	<div id="rt-main" class="mb12">
		<div class="rt-grid-12">
			<div class="rt-block component-block">
				<div class="component-content"><?php echo $post->post_content;?></div>
				<div class="clear"></div>
			</div>
		</div>
		<div class="clear"></div>
	</div>
	<div id="rt-content-bottom">
		<div class="rt-grid-12 rt-alpha rt-omega">
			<div class="rt-block box4">
				<div class="module-surround">
					<div class="module-content">
						<?php get_template_part(TEMPLATE_PARTS . 'feedback-form');?>
					</div>
				</div>
			</div>

		</div>
		<div class="clear"></div>
	</div>
</div>
<?php get_footer();?>
