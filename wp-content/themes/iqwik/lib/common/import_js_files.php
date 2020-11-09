<?php
add_action('wp_enqueue_scripts', function() {
	// отменяем зарегистрированный jQuery
	wp_deregister_script('jquery-core');
	wp_deregister_script('jquery');
	// добавляем свои js-скрипты
	wp_enqueue_script('site-jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', [], BUNDLE_VERSION, true);
	wp_enqueue_script('site-core', get_template_directory_uri() . '/assets/js/core.min.js', [], BUNDLE_VERSION, true);
});
// подключение на определенных страницах
add_action('wp', function()
{
    add_action('wp_enqueue_scripts', function()
    {
    	$tax_name = 'chapter_category';
    	$tooltip = false;
		$slider = false;
    	$mosaic = false;

    	if (is_tax($tax_name, 'company') || (is_tax($tax_name, 'greenhouses')) || (is_tax($tax_name, 'r-d-i'))) {
    		$tooltip = true;
		}

		if (
			is_tax($tax_name, 'greenhouses-for-sale')
			|| is_tax($tax_name, 'greenhouses-growing')
			|| is_single('greenhouses-construction')
		) {
			$tooltip = true;
			$mosaic = true;
		}

		if (is_single()) {
			global $post, $tpl_top;
			$slider = true;
		}

    	if (is_home() || $slider) {
			wp_enqueue_script('site-slideshow', get_template_directory_uri() . '/assets/js/slideshow.min.js', [], BUNDLE_VERSION, true);
		}
    	if (is_home()) {
			wp_enqueue_script('site-home', get_template_directory_uri() . '/assets/js/home.min.js', [], BUNDLE_VERSION, true);
		}
    	if ($slider && isset($tpl_top[$post->post_name])) {
			wp_enqueue_script('site-greenhouses-fabric', get_template_directory_uri() . '/assets/js/' . $post->post_name . '.min.js', [], BUNDLE_VERSION, true);
		}
    	if ($tooltip) {
			wp_enqueue_script('site-tooltip', get_template_directory_uri() . '/assets/js/tooltip.min.js', [], BUNDLE_VERSION, true);
		}
//    	if ($mosaic) {
//			wp_enqueue_script('site-mosaic-lib', get_template_directory_uri() . '/assets/js/mosaic-lib.min.js', [], BUNDLE_VERSION, true);
//		}
		wp_enqueue_script('site-app', get_template_directory_uri() . '/assets/js/app.min.js', [], BUNDLE_VERSION, true);
    	if ($mosaic) {
			wp_enqueue_script('site-mosaic', get_template_directory_uri() . '/assets/js/mosaic.min.js', [], BUNDLE_VERSION, true);
		}

//        elseif (is_category() || is_search() || is_page('cabinet') || is_single())
//            wp_enqueue_script('site-home', get_template_directory_uri() . '/assets/js/home.min.js', [], BUNDLE_VERSION, true);
//        elseif (is_page('cabinet'))
//            wp_enqueue_script('site-home', get_template_directory_uri() . '/assets/js/home.min.js', [], BUNDLE_VERSION, true);
    });
});
add_action('after_setup_theme', function() {
	remove_action('wp_head','wp_print_scripts');
	remove_action('wp_head','wp_print_head_scripts',9);
	remove_action('wp_head','wp_enqueue_scripts',1);
	add_action('wp_footer','wp_print_scripts',5);
	add_action('wp_footer','wp_print_head_scripts',5);
	add_action('wp_footer','wp_enqueue_scripts',5);
});
# удаляет версию WP из преданного URL у скриптов и стилей
add_filter( 'script_loader_src', 'remove_wp_version_from_src' );
add_filter( 'style_loader_src', 'remove_wp_version_from_src' );
function remove_wp_version_from_src($src) {
	global $wp_version;
	parse_str(parse_url($src, PHP_URL_QUERY), $query);
	if (! empty($query['ver']) && $query['ver'] === $wp_version) {
		$src = remove_query_arg('ver', $src);
	}
	return $src;
}
