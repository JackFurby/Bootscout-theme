<?php
/**
 * Enqueue scripts and styles.
 */
function bootscout_theme_preconnect() {
	echo '<link rel="preconnect" href="https://fonts.googleapis.com">' . PHP_EOL;
	echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . PHP_EOL;
}

function bootscout_theme_scripts() {
	// Styles
	wp_register_style(
		'Nunito+Sans',
		'https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,400;0,600;0,700;0,900;1,400;1,600;1,700;1,900&display=swap',
		false,
		null,
		null
	);
	wp_enqueue_style('Nunito+Sans');
	wp_register_style(
		'BootstrapIcons',
		'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css',
		false,
		null,
		null
	);
	wp_enqueue_style('BootstrapIcons');
	wp_register_style(
		'theme',
		get_template_directory_uri() . '/theme/css/site.css',
		['Nunito+Sans', 'BootstrapIcons'],
		wp_get_theme()->get('Version')
	);
	wp_enqueue_style('theme');

	// Scripts
	wp_enqueue_script("jquery");  // use WordPress built in jQuery

	wp_register_script('bootstrap5', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', false, '5.1.3', true);
	wp_enqueue_script('bootstrap5');
	// (The Bootstrap JS bundle contains Popper JS.)
	wp_enqueue_script('theme-script', get_template_directory_uri() . '/theme/js/site.js', false, null, true);
}

function bootscout_theme_editor_scripts() {
	// Styles
	wp_enqueue_script('theme-editor-script', get_template_directory_uri() . '/theme/js/site-editor.js', false, null, true);
}

add_action( 'wp_head', 'bootscout_theme_preconnect', 2 );
add_action( 'enqueue_block_assets', 'bootscout_theme_scripts', 20 );
add_action( 'enqueue_block_editor_assets', 'bootscout_theme_editor_scripts', );
