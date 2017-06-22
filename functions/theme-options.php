<?php

add_action( 'admin_init', 'theme_options_init' );
add_action( 'admin_menu', 'theme_options_add_page' );

/**
 * Init plugin options to white list our options
 */
function theme_options_init(){
	register_setting( 'scout_options', 'scout_theme_options', 'theme_options_validate' );
}

/**
 * Load up the menu page
 */
function theme_options_add_page() {
	add_theme_page( __( 'Theme Options', 'scout-theme' ), __( 'Theme Options', 'scout-theme' ), 'edit_theme_options', 'theme_options', 'theme_options_do_page' );
}

/**
 * Create the options page
 */
function theme_options_do_page() {
	global $select_options, $radio_options;

	if ( ! isset( $_REQUEST['settings-updated'] ) )
		$_REQUEST['settings-updated'] = false;

	?>
	<div class="wrap">
		<?php screen_icon(); echo "<h2>" . get_current_theme() . __( ' Theme Options', 'scout-theme' ) . "</h2>"; ?>

		<?php if ( false !== $_REQUEST['settings-updated'] ) : ?>
		<div class="updated fade"><p><strong><?php _e( 'Options saved', 'scout-theme' ); ?></strong></p></div>
		<?php endif; ?>

		<form method="post" action="options.php">
			<?php settings_fields( 'scout_options' ); ?>
			<?php $options = get_option( 'scout_theme_options' ); ?>

			<table class="form-table">
                <tr><th colspan="2"><h2>Theme Setup</h2></th></tr>
                <tr valign="top"><th scope="row">Group Name</th>
                    <td>
                        <input id="scout_theme_options[group_name]" class="regular-text" type="text" name="scout_theme_options[group_name]" value="<?php esc_attr_e( $options['group_name'] ); ?>" />
                        <label class="description" for="scout_theme_options[group_name]"> e.g. "1st Anywhere Scout Group"</label>
                    </td>
                </tr>
				<tr valign="top"><th scope="row">Charity number</th>
                    <td>
                        <input id="scout_theme_options[charity_number]" class="regular-text" type="text" name="scout_theme_options[charity_number]" value="<?php esc_attr_e( $options['charity_number'] ); ?>" />
                        <label class="description" for="scout_theme_options[charity_number]"> leave blank if unknown</label>
                    </td>
                </tr>
				<tr><th colspan="2"><h2>Social media</h2></th></tr>
                <tr valign="top"><th scope="row">Facebook page</th>
                    <td>
                        <input id="scout_theme_options[fb_link]" class="regular-text" type="text" name="scout_theme_options[fb_link]" value="<?php esc_attr_e( $options['fb_link'] ); ?>" />
                        <label class="description" for="scout_theme_options[fb_link]"> Insert the URL for your Facebook page</label>
                    </td>
                </tr>
				<tr valign="top"><th scope="row">Twitter</th>
                    <td>
                        <input id="scout_theme_options[twitter_link]" class="regular-text" type="text" name="scout_theme_options[twitter_link]" value="<?php esc_attr_e( $options['twitter_link'] ); ?>" />
                        <label class="description" for="scout_theme_options[twitter_link]"> Inset your groups Twitter account URL</label>
                    </td>
                </tr>
				<tr><th colspan="2"><h2>Section page links</h2></th></tr>
				<tr valign="top"><th scope="row"></th>
                    <td>
                        <p>These links will be added to the buttons on the "section page" template. If you have 2 or more section on the site fill these out and create a empty page with the template "section page". If you have less than 2 sections you can leave these fields blank and do not make a page with the template "section page".</p>
                    </td>
                </tr>
                <tr valign="top"><th scope="row">Beaver button</th>
                    <td>
                        <input id="scout_theme_options[beaver-page-link]" class="regular-text" type="text" name="scout_theme_options[beaver-page-link]" value="<?php esc_attr_e( $options['beaver-page-link'] ); ?>" />
                        <label class="description" for="scout_theme_options[beaver-page-link]"> enter beaver page URL</label>
                    </td>
                </tr>
				<tr valign="top"><th scope="row">Cub button</th>
                    <td>
                        <input id="scout_theme_options[cub-page-link]" class="regular-text" type="text" name="scout_theme_options[cub-page-link]" value="<?php esc_attr_e( $options['cub-page-link'] ); ?>" />
                        <label class="description" for="scout_theme_options[cub-page-link]"> enter cub page URL</label>
                    </td>
                </tr>
				<tr valign="top"><th scope="row">Scout button</th>
                    <td>
                        <input id="scout_theme_options[scout-page-link]" class="regular-text" type="text" name="scout_theme_options[scout-page-link]" value="<?php esc_attr_e( $options['scout-page-link'] ); ?>" />
                        <label class="description" for="scout_theme_options[scout-page-link]"> enter scout page URL</label>
                    </td>
                </tr>
				<tr valign="top"><th scope="row">Explorer button</th>
                    <td>
                        <input id="scout_theme_options[explorer-page-link]" class="regular-text" type="text" name="scout_theme_options[explorer-page-link]" value="<?php esc_attr_e( $options['explorer-page-link'] ); ?>" />
                        <label class="description" for="scout_theme_options[explorer-page-link]"> enter explorer page URL</label>
                    </td>
                </tr>
				<tr valign="top"><th scope="row">Network button</th>
                    <td>
                        <input id="scout_theme_options[network-page-link]" class="regular-text" type="text" name="scout_theme_options[network-page-link]" value="<?php esc_attr_e( $options['network-page-link'] ); ?>" />
                        <label class="description" for="scout_theme_options[network-page-link]"> enter network page URL</label>
                    </td>
                </tr>


            </table>

			<p class="submit">
				<input type="submit" class="button-primary" value="<?php _e( 'Save Options', 'scout-theme' ); ?>" />
			</p>
		</form>
	</div>
	<?php
}

/**
 * Sanitize and validate input. Accepts an array, return a sanitized array.
 */
function theme_options_validate( $input ) {
	global $select_options, $radio_options;

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
