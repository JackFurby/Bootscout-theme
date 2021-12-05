<?php
/**
 * Header block patterns
 *
 * @package Bootscout-theme
 * @since 1.7.0
 */

/*
 * Register Block Pattern Category.
 */
if ( function_exists( 'register_block_pattern_category' ) ) {
	register_block_pattern_category(
		'site-header',
		array( 'label' => esc_html__( 'Site headers', 'bootscout-theme' ) )
	);
}

/**
 * Register Block Patterns.
 */
if ( function_exists( 'register_block_pattern' ) ) {

	register_block_pattern(
		'bootscout-theme/header-default',
		array(
			'title'      => esc_html__( 'Default Header with menu.', 'bootscout-theme' ),
			'categories' => array( 'site-header' ),
			'content'    => '
				<!-- wp:columns {"align":"full","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"backgroundColor":"dark-blue"} -->
				<nav id="site-navbar" class="navbar navbar-expand-lg shadow-sm alignfull has-scout-purple-background-color has-background">
				<div class="container-fluid">
				<!-- wp:column {"verticalAlignment":"center"} -->
				<div class="is-vertically-aligned-center">
				<!-- wp:site-title {"className":"navbar-brand", "style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}}} /-->
				</div>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDropdown" aria-controls="navbarDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse flex-wrap flex-row-reverse" id="navbarDropdown">
				<!-- /wp:column -->
				<div id="nav-extras" class="d-none d-lg-flex flex-row-reverse">
				<!-- wp:column {"verticalAlignment":"center"} -->
				<div class="wp-block-column is-vertically-aligned-center has-background">
				<!-- wp:search {"label":"Search","showLabel":false,"width":100,"widthUnit":"%","buttonText":"Search","buttonUseIcon":true,"align":"center"} /-->
				</div>
				<!-- /wp:column -->
				</div>
				<!-- wp:column {"verticalAlignment":"center"} -->
				<div class="is-vertically-aligned-center">
				<!-- wp:navigation {"orientation":"horizontal","isResponsive":true,"textColor":"white","align":"full"} -->
				<!-- wp:navigation-link /-->
				<!-- wp:navigation-link /-->
				<!-- wp:navigation-link /-->
				<!-- /wp:navigation -->
				</div>
				<!-- /wp:column -->
				</div>
				</div>
				</nav>
				<!-- /wp:columns -->
			',
		)
	);
}
