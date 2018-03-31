<?php
function add_featured_image_caption_settings( $content, $post_id ) {
	$field_id    = 'featured_image_caption';
	$field_value = esc_attr( get_post_meta( $post_id, $field_id, true ) );
	$field_text  = esc_html__( 'Image caption', 'generatewp' );
	$field_state = checked( $field_value, 1, false);

	$field_label = sprintf(
		'<p><input type="text" name="%1$s" id="%1$s" value="%2$s" %3$s> %4$s</p>',
		$field_id, $field_value, $field_state, $field_text
	);

	return $content .= $field_label;
}
add_filter( 'admin_post_thumbnail_html', 'add_featured_image_caption_settings', 10, 2 );

function save_featured_image_caption_settings( $post_ID, $post, $update ) {
	$field_id    = 'featured_image_caption';
	$field_value = $_REQUEST[ $field_id ];

	update_post_meta( $post_ID, $field_id, $field_value );
}
add_action( 'save_post', 'save_featured_image_caption_settings', 10, 3 );
