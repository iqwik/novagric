<?php get_header();
$tpl_top = [
	'greenhouses-for-sale' => true,
	'greenhouses-growing' => true,
];
$tpl_bottom = [
	'irrigation-supplies' => true,
	'irrigation-systems' => true,
];
$term = get_queried_object();
$content = htmlspecialchars_decode(get_term_meta($term->term_id, 'content', 1));
global $wp_query;
?>
<div id="rt-transition" class="rt-visible">
	<div id="rt-main" class="sa3-mb9">
		<div class="rt-grid-9 rt-push-3">
			<?php isset($tpl_top[$term->slug])
				? get_template_part(TEMPLATE_PARTS . '_mosaic-tabs/' . $term->slug)
				: null;?>
			<div class="rt-block component-block"><div class="component-content"><?php echo $content;?></div></div>
			<?php isset($tpl_bottom[$term->slug])
				? get_template_part(TEMPLATE_PARTS . '_mosaic-tabs/' . $term->slug)
				: null;?>
			<div class="clear"></div>
		</div>
		<div class="rt-grid-3 sidebar-left rt-pull-9"><?php get_template_part(TEMPLATE_PARTS . 'sidebar');?></div>
		<div class="clear"></div>
	</div>
</div>
<?php get_footer();?>
