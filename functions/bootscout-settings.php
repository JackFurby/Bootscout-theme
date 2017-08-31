<?php
// create custom plugin settings menu
add_action('admin_menu', 'bootscout_settings_menu');

function bootscout_settings_menu() {

	//create new top-level menu,'publish_pages' allows editors and admins to access these settings
	add_menu_page('Bootscout Settings', 'Bootscout Settings', 'manage_options', __FILE__, 'bootscout_settings_page' );

}

//call register settings function
add_action( 'admin_init', 'register_bootscout_settings' );


function register_bootscout_settings() {
	register_setting( 'bootscout_options', 'scout_settings', 'bootscout_validate' );
}

function bootscout_settings_page() {
    global $select_options_banner, $radio_options_banner;

    if ( ! isset( $_REQUEST['settings-updated'] ) )
        $_REQUEST['settings-updated'] = false;
?>
<div class="wrap">
<h1>Bootscout Settings</h1>

<?php if ( false !== $_REQUEST['settings-updated'] ) : ?>
<div class="updated fade"><p><strong><?php _e( 'Options saved' ); ?></strong></p></div>
<?php endif; ?>

<form method="post" action="options.php">
    <?php settings_fields( 'bootscout_options' ); ?>
    <?php $bootscout = get_option( 'scout_settings' ); ?>
    <table class="form-table">

    </table>

	<?php submit_button(); ?>

</form>
</div>
<?php }

/**
 * Sanitize and validate input. Accepts an array, return a sanitized array.
 */




function bootscout_validate( $input ) {
	global $select_options_banner, $radio_options_banner;

	// Our checkbox value is either 0 or 1
	if ( ! isset( $input['option1'] ) )
		$input['option1'] = null;
	$input['option1'] = ( $input['option1'] == 1 ? 1 : 0 );

	// Say our text option must be safe text with no HTML tags
	$input['sometext'] = wp_filter_nohtml_kses( $input['sometext'] );

	// Say our textarea option must be safe text with the allowed tags for posts
	$input['sometextarea'] = wp_filter_post_kses( $input['sometextarea'] );

	return $input;
}

?>
