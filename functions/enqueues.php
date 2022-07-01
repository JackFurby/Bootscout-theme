<?php
/**
 * Enqueue scripts and styles.
 */
function bootscout_theme_scripts() {
	// Styles

	wp_register_style('BootstrapIcons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css', false, '1.7.0', null);
	wp_enqueue_style('BootstrapIcons');
	wp_register_style('theme', get_template_directory_uri() . '/theme/css/site.css', false, null);
	wp_enqueue_style('theme');
	wp_enqueue_script("jquery");  // use WordPress built in jQuery

	// Scripts

	wp_register_script('bootstrap5', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', false, '5.1.3', true);
	wp_enqueue_script('bootstrap5');
	// (The Bootstrap JS bundle contains Popper JS.)
	wp_enqueue_script('theme-script', get_template_directory_uri() . '/theme/js/site.js', false, null, true);
}

function bootscout_theme_editor_scripts() {
	// Styles
	wp_enqueue_script('theme-editor-script', get_template_directory_uri() . '/theme/js/site-editor.js', false, null, true);
}

add_action( 'enqueue_block_assets', 'bootscout_theme_scripts' );
add_action( 'enqueue_block_editor_assets', 'bootscout_theme_editor_scripts' );
