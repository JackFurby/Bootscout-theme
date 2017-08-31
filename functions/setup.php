<?php

function b4st_setup() {
	add_editor_style('theme/css/editor-style.css');
	add_theme_support('post-thumbnails');
	update_option('thumbnail_size_w', 170);
	update_option('medium_size_w', 470);
	update_option('large_size_w', 970);
}
add_action('init', 'b4st_setup');

if (! isset($content_width))
	$content_width = 600;

function b4st_excerpt_readmore() {
	return '&nbsp; <a href="'. get_permalink() . '">' . '&hellip; ' . __('Read more', 'b4st') . ' <i class="fa fa-arrow-right"></i>' . '</a></p>';
}
add_filter('excerpt_more', 'b4st_excerpt_readmore');

// Add post formats support. See http://codex.wordpress.org/Post_Formats
add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));

//edit theme-options
include 'theme-options.php';
$options = get_option('scout_theme_options');

//Bootscout settings
include 'bootscout-settings.php';
$bootscout = get_option('scout_settings');

//adds capabilities to editor so they can edit bootscout settings
$role_object = get_role( 'editor' );
//$role_object->add_cap( 'manage_options' );
$role_object->remove_cap('manage_options');


function register_my_menus() {
  register_nav_menus(
    array(
      'navbar' => __( 'Main navbar' ),
      'footer_menu' => __( 'Footer menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

add_theme_support( 'custom-logo', array(
	'height'      => 383,
	'width'       => 500,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
) );
?>
