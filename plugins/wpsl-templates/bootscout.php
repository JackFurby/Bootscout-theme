<?php

global $wpsl_settings, $wpsl;


$output         = $this->get_custom_css();
$autoload_class = ( !$wpsl_settings['autoload'] ) ? 'class="wpsl-not-loaded"' : '';

$output .= '<div id="wpsl-wrap" class="alignfull">' . "\r\n";
$output .= "\t" . '<div class="wpsl-search wpsl-clearfix p-1 has-grey-5-background-color mb-0 ' . $this->get_css_classes() . '">' . "\r\n";
$output .= "\t" . '<div class="container">' . "\r\n";
$output .= "\t" . '<p class="text-center h2 mt-3">Find your local group</p>' . "\r\n";
$output .= "\t\t" . '<div id="wpsl-search-wrap">' . "\r\n";
$output .= "\t\t\t" . '<form autocomplete="off" class="row justify-content-center">' . "\r\n";
$output .= "\t\t\t\t" . '<div class="row justify-content-start justify-content-md-center col-12 me-0">' . "\r\n";
$output .= "\t\t\t\t\t" . '<div class="wpsl-input col-auto col-md-6 mb-2 me-0 pe-3 g-0">' . "\r\n";
$output .= "\t\t\t\t\t" . '<label for="wpsl-search-input" class="form-label w-100">' . esc_html( $wpsl->i18n->get_translation( 'search_label', __( 'Your location', 'wpsl' ) ) ) . '</label>' . "\r\n";
$output .= "\t\t\t\t\t" . '<input id="wpsl-search-input" class="form-control w-100" type="text" value="' . apply_filters( 'wpsl_search_input', '' ) . '" name="wpsl-search-input" placeholder="" aria-required="true" />' . "\r\n";
$output .= "\t\t\t\t\t" . '</div>' . "\r\n";

$output .= "\t\t\t\t\t" . '<div class="col-auto row align-items-end mb-2 me-0 g-0"><input id="wpsl-search-btn" class="col-12 col-md-2 me-0 mb-0" type="submit" value="' . esc_attr( $wpsl->i18n->get_translation( 'search_btn_label', __( 'Search', 'wpsl' ) ) ) . '"></div>' . "\r\n";
$output .= "\t\t\t\t" . '</div>' . "\r\n";

if ( $wpsl_settings['radius_dropdown'] || $wpsl_settings['results_dropdown'] || $this->use_category_filter() ) {
  $output .= "\t\t\t" . '<p class="text-center text-body-secondary">More settings</p>' . "\r\n";
  $output .= "\t\t\t\t" . '<div class="row justify-content-center col-12 me-0">' . "\r\n";
    $output .= "\t\t\t" . '<div class="wpsl-select-wrap col-12 col-lg-6 mb-2 g-0">' . "\r\n";

    if ( $wpsl_settings['radius_dropdown'] ) {
        $output .= "\t\t\t\t" . '<div id="wpsl-radius" class="w-50">' . "\r\n";
        $output .= "\t\t\t\t\t" . '<label for="wpsl-radius-dropdown" class="form-label w-100">' . esc_html( $wpsl->i18n->get_translation( 'radius_label', __( 'Search radius', 'wpsl' ) ) ) . '</label>' . "\r\n";
        $output .= "\t\t\t\t\t" . '<select id="wpsl-radius-dropdown" class="wpsl-dropdown w-100" name="wpsl-radius">' . "\r\n";
        $output .= "\t\t\t\t\t\t" . $this->get_dropdown_list( 'search_radius' ) . "\r\n";
        $output .= "\t\t\t\t\t" . '</select>' . "\r\n";
        $output .= "\t\t\t\t" . '</div>' . "\r\n";
    }

    if ( $wpsl_settings['results_dropdown'] ) {
        $output .= "\t\t\t\t" . '<div id="wpsl-results" class="w-50">' . "\r\n";
        $output .= "\t\t\t\t\t" . '<label for="wpsl-results-dropdown" class="form-label w-100">' . esc_html( $wpsl->i18n->get_translation( 'results_label', __( 'Results', 'wpsl' ) ) ) . '</label>' . "\r\n";
        $output .= "\t\t\t\t\t" . '<select id="wpsl-results-dropdown" class="wpsl-dropdown w-100" name="wpsl-results">' . "\r\n";
        $output .= "\t\t\t\t\t\t" . $this->get_dropdown_list( 'max_results' ) . "\r\n";
        $output .= "\t\t\t\t\t" . '</select>' . "\r\n";
        $output .= "\t\t\t\t" . '</div>' . "\r\n";
    }

    if ( $this->use_category_filter() ) {
        $output .= $this->create_category_filter();
    }

  $output .= "\t\t\t" . '</div>' . "\r\n";
}
$output .= "\t\t\t\t" . '</div>' . "\r\n";
$output .= "\t\t" . '</form>' . "\r\n";
$output .= "\t\t" . '</div>' . "\r\n";
$output .= "\t" . '</div>' . "\r\n";

$output .= "\t" . '</div>' . "\r\n";

$output .= "\t" . '<div class="container">' . "\r\n";
$output .= "\t\t" . '<div id="wpsl-gmap" class="wpsl-gmap-canvas mt-0"></div>' . "\r\n";

$output .= "\t\t" . '<div id="wpsl-result-list">' . "\r\n";
$output .= "\t\t\t" . '<div id="wpsl-stores" '. $autoload_class .'>' . "\r\n";
$output .= "\t\t\t\t" . '<ul></ul>' . "\r\n";
$output .= "\t\t\t" . '</div>' . "\r\n";
$output .= "\t\t\t" . '<div id="wpsl-direction-details">' . "\r\n";
$output .= "\t\t\t\t" . '<ul></ul>' . "\r\n";
$output .= "\t\t\t" . '</div>' . "\r\n";
$output .= "\t\t" . '</div>' . "\r\n";
$output .= "\t" . '</div>' . "\r\n";

if ( $wpsl_settings['show_credits'] ) {
    $output .= "\t" . '<div class="wpsl-provided-by">'. sprintf( __( "Search provided by %sWP Store Locator%s", "wpsl" ), "<a target='_blank' href='https://wpstorelocator.co'>", "</a>" ) .'</div>' . "\r\n";
}

$output .= '</div>' . "\r\n";

return $output;
