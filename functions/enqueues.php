<?php
/*
 * Enqueues
 */

if ( ! function_exists('b4st_enqueues') ) {
	function b4st_enqueues() {

		// Styles

		#wp_register_style('fontawesome5', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css', false, '5.11.2', null);
		#wp_enqueue_style('fontawesome5');
		wp_register_style('BootstrapIcons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css', false, '1.5.0', null);
		wp_enqueue_style('BootstrapIcons');
		wp_enqueue_style( 'gutenberg-blocks', get_template_directory_uri() . '/theme/css/blocks.css' );
		wp_register_style('theme', get_template_directory_uri() . '/theme/css/b4st.css', false, null);
		wp_enqueue_style('theme');

		// Scripts

		wp_register_script('modernizr', 'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js', false, '2.8.3', true);
		wp_enqueue_script('modernizr');
		wp_register_script('jquery-3.4.1', 'https://code.jquery.com/jquery-3.4.1.min.js', false, '3.4.1', true);
		wp_enqueue_script('jquery-3.4.1');
		wp_register_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.6.0/umd/popper.min.js', false, '2.6.0', true);
		wp_enqueue_script('popper');
		wp_register_script('bootstrap5', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', false, '5.0.1', true);
		wp_enqueue_script('bootstrap5');
		// (The Bootstrap JS bundle contains Popper JS.)
		wp_register_script('theme', get_template_directory_uri() . '/theme/js/b4st.js', false, null, true);
		wp_enqueue_script('theme');

		if (is_singular() && comments_open() && get_option('thread_comments')) {
			wp_enqueue_script('comment-reply');
		}
	}
}
add_action('wp_enqueue_scripts', 'b4st_enqueues', 100);
