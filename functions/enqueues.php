<?php
/**
 * Bootscout Theme Enqueues
 *
 * Handle registration and enqueueing of theme stylesheets and scripts
 * for both frontend and editor contexts. Fonts are loaded via theme.json.
 *
 * @package Bootscout
 * @subpackage Functions
 * @since 2.2.3
 */

/**
 * Register and enqueue frontend styles and scripts.
 *
 * Enqueues the main theme stylesheet and jQuery library.
 * Also loads the theme's custom JavaScript file in the footer.
 * Font files are loaded via theme.json variable font definitions.
 *
 * @since 2.2.3
 * @return void
 */
function bootscout_theme_scripts() {
	// Styles - fonts are loaded via theme.json
	wp_register_style(
		'theme',
		get_template_directory_uri() . '/theme/css/site.css',
		[],
		wp_get_theme()->get('Version')
	);
	wp_enqueue_style('theme');

	// Scripts
	wp_enqueue_script("jquery");  // use WordPress built in jQuery

	wp_enqueue_script('theme-script', get_template_directory_uri() . '/theme/js/site.js', false, null, true);
}

/**
 * Register and enqueue editor-specific scripts.
 *
 * Loads the theme's JavaScript file for the block editor context.
 * Allows theme JavaScript to enhance the editor experience.
 *
 * @since 2.2.3
 * @return void
 */
function bootscout_theme_editor_scripts() {
	wp_enqueue_script('theme-editor-script', get_template_directory_uri() . '/theme/js/site.js', false, null, true);
}

if ( ! function_exists( 'bootscout_theme_pattern_categories' ) ) :
	/**
	 * Register custom block pattern categories.
	 *
	 * Registers two pattern categories for organizing block patterns:
	 * - bootscout: General block patterns for scout websites
	 * - page_layouts: Full page layout patterns
	 *
	 * @since 2.2.3
	 * @return void
	 */
	function bootscout_theme_pattern_categories() {

		register_block_pattern_category(
			'bootscout',
			array(
				'label'       => _x( 'Bootscout', 'Block pattern category' ),
				'description' => __( 'Block patterns for scout websites' ),
			)
		);

		register_block_pattern_category(
			'page_layouts',
			array(
				'label'       => _x( 'Page layouts', 'Block pattern category' ),
				'description' => __( 'Block patterns for full page layouts' ),
			)
		);
	}
endif;

add_filter( 'wpsl_templates', 'custom_templates' , 10, 2);

/**
 * Register custom WP Store Locator template.
 *
 * Adds a custom Bootscout template to the WP Store Locator plugin's
 * template dropdown on the settings page. The template file allows
 * customization of the store locator map display.
 *
 * @since 2.2.3
 * @param array $templates Array of available templates for the plugin.
 * @return array Modified array of templates with Bootscout template added.
 */
function custom_templates( $templates ) {

	/**
	 * The 'id' is for internal use and must be unique ( since 2.0 ).
	 * The 'name' is used in the template dropdown on the settings page.
	 * The 'path' points to the location of the custom template,
	 * in this case the folder of your active theme.
	 */
	$templates[] = array (
		'id'   => 'bootscout',
		'name' => 'Bootscout',
		'path' => get_stylesheet_directory() . '/' . 'plugins/wpsl-templates/bootscout.php',
	);

	return $templates;
}

/**
 * Register hooks and actions.
 *
 * @since 2.2.3
 */
add_action( 'enqueue_block_assets', 'bootscout_theme_scripts', 20 );
add_action( 'enqueue_block_editor_assets', 'bootscout_theme_editor_scripts');
add_action( 'init', 'bootscout_theme_pattern_categories' );
