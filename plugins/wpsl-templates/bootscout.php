<?php
/**
 * Bootscout template for WP Store Locator 3.x.
 *
 * @package Bootscout
 * @since 3.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$output         = $assets_manager->get_custom_css();
$autoload_class = ( ! $wpsl_settings['map']['autoload'] ) ? 'class="wpsl-not-loaded"' : '';

// The search field searches either by location or by store name.
$is_name_search = ( isset( $wpsl_settings['search']['search_method'] ) && 'name' === $wpsl_settings['search']['search_method'] );
$search_label   = $is_name_search
	? $i18n->get_translation( 'search_name_label', __( 'Scout group name', 'wp-store-locator' ) )
	: $i18n->get_translation( 'search_label', __( 'Your location', 'wp-store-locator' ) );
$placeholder    = ! empty( $wpsl_settings['search']['input_placeholder'] ) ? $wpsl_settings['search']['input_placeholder'] : $search_label;

// Custom templates hardcode the #wpsl-wrap classes, so merge in the ones WPSL computes.
$wrap_classes = array_unique( array_merge( array( 'alignfull' ), (array) $assets_manager->get_outer_classes() ) );

$show_dropdowns = ! $template_filters->is_category_filter_only() && ( $template_filters->is_radius_enabled() || $template_filters->is_results_enabled() );
$show_category  = $template_filters->is_category_enabled();

$output .= '<div id="wpsl-wrap" class="' . esc_attr( implode( ' ', $wrap_classes ) ) . '">' . "\r\n";
$output .= $frontend->maybe_show_gdpr_checkpoint();
$output .= "\t" . '<div class="bootscout-wpsl-search wpsl-search wpsl-clearfix has-grey-5-background-color ' . esc_attr( $assets_manager->get_css_classes() ) . '">' . "\r\n";
$output .= "\t\t" . '<div class="wpsl-bootscout-container">' . "\r\n";
$output .= "\t\t\t" . '<p class="wpsl-header h2">' . esc_html__( 'Find your local group', 'bootscout-theme' ) . '</p>' . "\r\n";
$output .= "\t\t\t" . '<div id="wpsl-search-wrap">' . "\r\n";
$output .= "\t\t\t\t" . '<form autocomplete="off">' . "\r\n";
$output .= "\t\t\t\t\t" . '<div class="wpsl-search-input">' . "\r\n";
$output .= "\t\t\t\t\t\t" . '<div class="wpsl-input">' . "\r\n";
$output .= $assets_manager->maybe_output_mapbox_autocomplete();
$output .= "\t\t\t\t\t\t\t" . '<input id="wpsl-search-input" type="text" value="' . esc_attr( apply_filters( 'wpsl_search_input', '' ) ) . '" name="wpsl-search-input" placeholder="' . esc_attr( $placeholder ) . '" aria-label="' . esc_attr( $search_label ) . '" aria-required="true" />' . "\r\n";
$output .= "\t\t\t\t\t\t\t" . '<button id="wpsl-search-btn" type="submit">' . esc_html( $i18n->get_translation( 'search_btn_label', __( 'Search', 'wp-store-locator' ) ) ) . '</button>' . "\r\n";
$output .= "\t\t\t\t\t\t" . '</div>' . "\r\n";
$output .= "\t\t\t\t\t" . '</div>' . "\r\n";

if ( $show_dropdowns || $show_category ) {
	$output .= "\t\t\t\t\t" . '<p class="wpsl-setting-title text-grey-60">' . esc_html__( 'More settings', 'bootscout-theme' ) . '</p>' . "\r\n";
	$output .= "\t\t\t\t\t" . '<div class="wpsl-setting-options">' . "\r\n";

	if ( $show_dropdowns ) {
		$output .= "\t\t\t\t\t\t" . '<div class="wpsl-select-wrap">' . "\r\n";

		if ( $template_filters->is_radius_enabled() ) {
			$output .= "\t\t\t\t\t\t\t" . '<div id="wpsl-radius">' . "\r\n";
			if ( $i18n->is_label_visible( 'radius' ) ) {
				$output .= "\t\t\t\t\t\t\t\t" . '<label for="wpsl-radius-dropdown">' . esc_html( $i18n->get_translation( 'radius_label', __( 'Search radius', 'wp-store-locator' ) ) ) . '</label>' . "\r\n";
			}
			$output .= "\t\t\t\t\t\t\t\t" . '<select id="wpsl-radius-dropdown" class="wpsl-dropdown" name="wpsl-radius">' . "\r\n";
			$output .= "\t\t\t\t\t\t\t\t\t" . $search_filters->get_dropdown_list( 'search_radius' ) . "\r\n";
			$output .= "\t\t\t\t\t\t\t\t" . '</select>' . "\r\n";
			$output .= "\t\t\t\t\t\t\t" . '</div>' . "\r\n";
		}

		if ( $template_filters->is_results_enabled() ) {
			$output .= "\t\t\t\t\t\t\t" . '<div id="wpsl-results">' . "\r\n";
			if ( $i18n->is_label_visible( 'results' ) ) {
				$output .= "\t\t\t\t\t\t\t\t" . '<label for="wpsl-results-dropdown">' . esc_html( $i18n->get_translation( 'results_label', __( 'Results', 'wp-store-locator' ) ) ) . '</label>' . "\r\n";
			}
			$output .= "\t\t\t\t\t\t\t\t" . '<select id="wpsl-results-dropdown" class="wpsl-dropdown" name="wpsl-results">' . "\r\n";
			$output .= "\t\t\t\t\t\t\t\t\t" . $search_filters->get_dropdown_list( 'max_results' ) . "\r\n";
			$output .= "\t\t\t\t\t\t\t\t" . '</select>' . "\r\n";
			$output .= "\t\t\t\t\t\t\t" . '</div>' . "\r\n";
		}

		$output .= "\t\t\t\t\t\t" . '</div>' . "\r\n";
	}

	if ( $show_category ) {
		$output .= $template_filters->category_list();
	}

	$output .= "\t\t\t\t\t" . '</div>' . "\r\n";
}

$output .= "\t\t\t\t" . '</form>' . "\r\n";
$output .= "\t\t\t" . '</div>' . "\r\n";
$output .= "\t\t" . '</div>' . "\r\n";
$output .= "\t" . '</div>' . "\r\n";

$output .= "\t" . '<a href="#wpsl-result-list" class="wpsl-skip-to-results">' . esc_html( $i18n->get_translation( 'skip_to_results_label', __( 'Skip map, jump to search results', 'wp-store-locator' ) ) ) . '</a>' . "\r\n";
$output .= "\t" . '<div id="wpsl-map" class="wpsl-canvas-' . esc_attr( $wpsl_settings['api']['active_map_service'] ) . '"></div>' . "\r\n";

$output .= "\t" . '<div id="wpsl-result-list" tabindex="-1">' . "\r\n";
$output .= "\t\t" . '<div id="wpsl-stores" ' . $autoload_class . '>' . "\r\n";
$output .= "\t\t\t" . '<ul></ul>' . "\r\n";
$output .= "\t\t" . '</div>' . "\r\n";
$output .= "\t\t" . '<div id="wpsl-direction-details">' . "\r\n";
$output .= "\t\t\t" . '<ul></ul>' . "\r\n";
$output .= "\t\t" . '</div>' . "\r\n";
$output .= "\t" . '</div>' . "\r\n";

if ( $wpsl_settings['map']['show_credits'] ) {
	/* translators: 1: opening link tag, 2: closing link tag */
	$output .= "\t" . '<div class="wpsl-provided-by">' . sprintf( esc_html__( 'Search provided by %1$sWP Store Locator%2$s', 'wp-store-locator' ), '<a target="_blank" href="https://wpstorelocator.co">', '</a>' ) . '</div>' . "\r\n";
}

$output .= '</div>' . "\r\n";

echo $output;
