<?php
// create custom plugin settings menu
add_action('admin_menu', 'bootscout_settings_menu');

function bootscout_settings_menu() {

	//create new top-level menu,'publish_pages' allows editors and admins to access these settings
	add_menu_page('Bootscout Settings', 'Bootscout Settings', 'publish_pages', __FILE__, 'bootscout_settings_page' );

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
		<h2>Banner Settings</h2>
        <tr><th colspan="2"><h2>Banner right</h2></th></tr>
        <tr valign="top"><th scope="row">Banner image</th>
            <td>
				<?php
				wp_enqueue_media();
				?>
                <div id='image-preview-banner-1' class="image-preview-bootscout-admin">
                    <?php
                        $imgSrc = wp_get_attachment_image_src( $bootscout['banner_1_image'], 'large');
                        $img = $imgSrc[0];
                        echo "<img src=\"$img\" />";
                    ?>
                </div>
                <input id="upload_banner_1_button" type="button" class="button" value="Select image" />
                <input id="clear_banner_1_button" type="button" class="button-secondary" value="Clear image" onclick="clearImagePrev('image-preview-banner-1', 'scout_settings[banner_1_image]')" />
                <input type="hidden" name="scout_settings[banner_1_image]" id="scout_settings[banner_1_image]" value="<?php esc_attr_e( $bootscout['banner_1_image'] ); ?>" />
            </td>
        </tr>
        <tr><th colspan="2"><h2>Banner left</h2></th></tr>
        <tr valign="top"><th scope="row">Banner image</th>
            <td>
				<?php
				wp_enqueue_media();
				?>
                <div id='image-preview-banner-2' class="image-preview-bootscout-admin">
                    <?php
                        $imgSrc = wp_get_attachment_image_src( $bootscout['banner_2_image'], 'large');
                        $img = $imgSrc[0];
                        echo "<img src=\"$img\" />";
                    ?>
                </div>
                <input id="upload_banner_2_button" type="button" class="button" value="Select image" />
                <input id="clear_banner_2_button" type="button" class="button-secondary" value="Clear image" onclick="clearImagePrev('image-preview-banner-2', 'scout_settings[banner_2_image]')" />
                <input type="hidden" name="scout_settings[banner_2_image]" id="scout_settings[banner_2_image]" value="<?php esc_attr_e( $bootscout['banner_2_image'] ); ?>" />
            </td>
        </tr>
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


<?php //image selector for banner 1
add_action( 'admin_footer', 'media_selector_banner_1' );
	function media_selector_banner_1() {
?>
<script type='text/javascript'>

function clearImagePrev(parentDiv, imgID) {
    var outputID = document.getElementById(imgID);
    outputID.value = "";
    var outputImg = document.getElementById(parentDiv).getElementsByTagName('img')[0];
    outputImg.src = "";
}


jQuery( document ).ready( function( $ ) {
	var media_uploader = null;
	jQuery('#upload_banner_1_button').on('click', function( event ){
		event.preventDefault();

		    media_uploader = wp.media({
				title: 'Select a image to upload',
				button: {
					text: 'Use this image',
				},
		        multiple: false
		    });

		    media_uploader.on("select", function(){
		        var json = media_uploader.state().get("selection").first().toJSON();
		        var image_url = json.url;
				var image_id = json.id;

				var outputArea = document.getElementById('scout_settings[banner_1_image]');
				outputArea.value = image_id;
				var outputImage = document.getElementById('image-preview-banner-1').getElementsByTagName('img')[0];
				outputImage.src = image_url;
		    });

		    media_uploader.open();
	});
});
</script>
<?php
} ?>


<?php //image selector for banner 2
add_action( 'admin_footer', 'media_selector_banner_2' );
	function media_selector_banner_2() {
?>
<script type='text/javascript'>
jQuery( document ).ready( function( $ ) {
	var media_uploader = null;
	jQuery('#upload_banner_2_button').on('click', function( event ){
		event.preventDefault();

		    media_uploader = wp.media({
				title: 'Select a image to upload',
				button: {
					text: 'Use this image',
				},
		        multiple: false
		    });

		    media_uploader.on("select", function(){
		        var json = media_uploader.state().get("selection").first().toJSON();
		        var image_url = json.url;
				var image_id = json.id;

				var outputArea = document.getElementById('scout_settings[banner_2_image]');
				outputArea.value = image_id;
				var outputImage = document.getElementById('image-preview-banner-2').getElementsByTagName('img')[0];
				outputImage.src = image_url;
		    });

		    media_uploader.open();
	});
});
</script>
<?php
} ?>
