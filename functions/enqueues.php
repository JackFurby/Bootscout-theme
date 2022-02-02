<?php
/**
 * Enqueue scripts and styles.
 */
function bootscout_theme_scripts() {
	// Styles

	wp_register_style('BootstrapIcons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css', false, '1.5.0', null);
	wp_enqueue_style('BootstrapIcons');
	wp_enqueue_style('gutenberg-blocks', get_template_directory_uri() . '/theme/css/blocks.css');
	wp_register_style('theme', get_template_directory_uri() . '/theme/css/site.css', false, null);
	wp_enqueue_style('theme');
	wp_enqueue_script("jquery");  // use WordPress built in jQuery

	// Scripts

	wp_register_script('bootstrap5', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', false, '5.0.2', true);
	wp_enqueue_script('bootstrap5');
	// (The Bootstrap JS bundle contains Popper JS.)
	wp_register_script('theme', get_template_directory_uri() . '/theme/js/site.js', false, null, true);
	wp_enqueue_script('theme');
}

add_action( 'wp_enqueue_scripts', 'bootscout_theme_scripts' );
