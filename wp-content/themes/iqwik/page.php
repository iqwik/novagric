<?php get_header();?>
<div id="rt-transition" class="rt-visible">
	<div id="rt-main" class="mb12">
		<div class="rt-grid-12">
			<div class="rt-block component-block">
				<div class="component-content">
					<article class="item-page" itemscope="" itemtype="http://schema.org/Article">
						<meta itemprop="inLanguage" content="ru-RU">
						<h2 itemprop="name"><?php echo $post->post_title;?></h2>
						<div itemprop="articleBody"><?php echo $post->post_content;?></div>
					</article>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<div class="clear"></div>
	</div>
</div>
<?php get_footer();?>
