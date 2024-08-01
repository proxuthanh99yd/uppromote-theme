<?php

// ============================== start wp_enqueue lib =====================//
function  wp_enqueue_lib()
{
	wp_enqueue_style('font-poppins', get_theme_file_uri('/assets/fonts/Poppins/stylesheet.css'));
	// wp_enqueue_script("link-tag-id", "url", [], false, true);
}
add_action('wp_enqueue_scripts', 'wp_enqueue_lib', 1000);

// ============================== end wp_enqueue lib =====================//

// ============================== wp_enqueue lib =====================//
function  wp_enqueue_local()
{
	wp_enqueue_style('reset', get_theme_file_uri('/assets/css/reset.css'));
	wp_enqueue_style('global', get_theme_file_uri('/assets/css/global.css'));
	wp_enqueue_style('header', get_theme_file_uri('/template-parts/compound/header/assets/styles.css'));
	wp_enqueue_style('footer', get_theme_file_uri('/template-parts/compound/footer/assets/styles.css'));

	if (is_page('affiliate-marketing-2')) {
		wp_enqueue_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
		wp_enqueue_script("swiper", 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', [], false, true);
		wp_enqueue_script("collapse", get_theme_file_uri('/assets/bootstrap/js/src/collapse.js'), [], false, true);
		wp_enqueue_style('faqs', get_theme_file_uri('/template-parts/compound/faqs/assets/styles.css'));
		wp_enqueue_style('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/styles.css'));
		wp_enqueue_style('affiliate-marketing', get_theme_file_uri('/template-parts/page-affiliate-marketing/assets/styles-pc.css'));
		wp_enqueue_script('affiliate-marketing', get_theme_file_uri('/template-parts/page-affiliate-marketing/assets/scripts.js'), [], false, true);
	}

	if (is_page('contact')) {
		// wp_enqueue_script('page-contact', get_theme_file_uri('/template-parts/page-contact/assets/scripts.js'), [], false, true);

		wp_enqueue_script('jquery');
		wp_enqueue_style('page-contact', get_theme_file_uri('/template-parts/page-contact/assets/styles.css'));
	}
}
add_action('wp_enqueue_scripts', 'wp_enqueue_local', 1001);

// ============================== wp_enqueue lib =====================//
add_filter('script_loader_tag', 'add_type_attribute', 10, 3);
function add_type_attribute($tag, $handle, $src)
{
	// if not your script, do nothing and return original $tag
	if ('collapse' !== $handle) {
		return $tag;
	}
	// change the script tag by adding type="module" and return it.
	$tag = '<script type="module" src="' . esc_url($src) . '"></script>';
	return $tag;
}
