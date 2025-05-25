<?php

if ( ! function_exists( 'bootscout_theme_support' ) ) :
	function bootscout_theme_support()  {

		// Gutenberg
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'align-wide' );
		add_theme_support( 'align-full' );

		add_theme_support( 'responsive-embeds' );
		// Theme
		add_theme_support('title-tag');
		add_theme_support('post-thumbnails');

		// Add support for custom units.
		add_theme_support( 'custom-units' );

		// plugins
		add_theme_support( 'woocommerce' );
		remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
		remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

		add_action('woocommerce_before_main_content', 'bootscout_woocommerce_output_content_wrapper', 10);
		add_action('woocommerce_after_main_content', 'bootscout_woocommerce_output_content_wrapper_end', 10);
	}
	add_action( 'after_setup_theme', 'bootscout_theme_support' );
endif;

add_action('init', 'bootscout_theme_support');


function bootscout_woocommerce_output_content_wrapper() {
	echo '<main id="wp-block-group site-main is-layout-constrained" class="wc-main">';
}

function bootscout_woocommerce_output_content_wrapper_end() {
	echo '</main>';
}

# Copy WooCommerce templates to template folder if the plugin is installed
function conditionally_register_woo_templates() {
	if ( ! class_exists( 'WooCommerce' ) ) {
		return;
	}

	$template_dir = get_stylesheet_directory();
	$woo_templates = [
		'single-product.html',
		'page-cart.html',
		'page-checkout.html',
		'archive-product.html',
		'order-confirmation.html',
		'product-search-results.html',
		'taxonomy-product_attribute.html',
		'taxonomy-product_cat.html',
		'taxonomy-product_tag.html'
	];

	foreach ( $woo_templates as $template ) {
		$source = $template_dir . '/plugins/woocommerce/' . $template;
		$destination = $template_dir . '/templates/' . $template;

		if ( file_exists( $source ) && ! file_exists( $destination ) ) {
			copy( $source, $destination );
		}
	}
}

# delete WooCommerce templates from template folder if the plugin is not installed
function remove_woo_templates_if_plugin_missing() {
	if ( class_exists( 'WooCommerce' ) ) {
		return;
	}

	$template_dir = get_stylesheet_directory() . '/templates/';
	$woo_templates = [
		'single-product.html',
		'page-cart.html',
		'page-checkout.html',
		'archive-product.html',
		'order-confirmation.html',
		'product-search-results.html',
		'taxonomy-product_attribute.html',
		'taxonomy-product_cat.html',
		'taxonomy-product_tag.html'
	];

	foreach ( $woo_templates as $template ) {
		$path = $template_dir . $template;
		if ( file_exists( $path ) ) {
			unlink( $path );
		}
	}
}

add_action( 'after_setup_theme', 'conditionally_register_woo_templates' );
add_action( 'after_setup_theme', 'remove_woo_templates_if_plugin_missing' );
