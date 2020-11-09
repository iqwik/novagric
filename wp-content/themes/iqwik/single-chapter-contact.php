<?php get_header();?>
<div id="rt-transition" class="rt-visible">
	<div id="rt-main" class="sa3-mb9">
		<div class="rt-grid-9 rt-push-3">
			<div class="rt-block component-block">
				<div class="component-content">
					<?php get_template_part(TEMPLATE_PARTS . 'feedback-form');?>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<div class="rt-grid-3 sidebar-left rt-pull-9">
			<div id="rt-sidebar-c">
				<div class="rt-block box4 title4">
					<div class="module-surround">
						<div class="module-title">
							<h2 class="title">Контакты</h2>
						</div>
						<div class="module-content">
							<div class="custombox4 title4">
								<?php echo $post->post_content;?>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
		<div class="clear"></div>
	</div>
</div>
<?php get_footer();?>
