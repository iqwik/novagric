<div id="rt-sidebar-a">
	<div class="rt-block title2 icon-th hidden-phone">
		<div class="module-surround">
			<div class="module-content"><ul class="nav menu mod-list"><?php get_category_tree_by_level();?></ul></div>
		</div>
	</div>
	<div class="rt-block">
		<div class="module-surround">
			<div class="module-content">
				<div class="custom m-minus15">
					<div id="accordion-999-emailing" class="wk-accordion clearfix" data-widgetkit="accordion" data-options='{"style":"default","collapseall":0,"matchheight":1,"index":0,"duration":500,"width":"auto","order":"default"}'>
						<div class="toggler active" style="overflow: hidden; height: 0px; display: none;"></div>
						<a href="javascript:void(0);" target="_self" id="feedbackAccordionButton" class="readon toggler" style="text-align: center; min-width: 100%; box-sizing: border-box;">
							<img src="<?php echo TEMPLATE_URL?>/assets/img/icons/contacto2.png" alt="contacto2" style="display: inline;">&nbsp;
							СВЯЗАТЬСЯ С НАМИ
						</a>
						<div class="content-wrapper box5 rt-block" style="overflow: hidden; height: 0px; display: none; margin:0;">
							<div class="content wk-content clearfix">
								<?php get_template_part(TEMPLATE_PARTS . 'feedback-form');?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
