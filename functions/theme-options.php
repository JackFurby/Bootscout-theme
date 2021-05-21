<?php

add_action( 'admin_menu', 'theme_options_add_page' );
add_action( 'admin_init', 'theme_options_init' );

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
		<?php echo "<h2>" . wp_get_theme() . __( ' Theme Options', 'scout-theme' ) . "</h2>"; ?>

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

				<tr valign="top"><th scope="row">Privacy statement</th>
					<td>
						<input id="scout_theme_options[privacy_link]" class="regular-text" type="text" name="scout_theme_options[privacy_link]" value="<?php esc_attr_e( $options['privacy_link'] ); ?>" />
						<label class="description" for="scout_theme_options[privacy_link]"> Inset page link for your Privacy statement</label>
					</td>
				</tr>
				<tr valign="top"><th scope="row">Terms and Disclaimer</th>
					<td>
						<input id="scout_theme_options[terms_link]" class="regular-text" type="text" name="scout_theme_options[terms_link]" value="<?php esc_attr_e( $options['terms_link'] ); ?>" />
						<label class="description" for="scout_theme_options[terms_link]"> Inset page link for your Terms and Disclaimer</label>
					</td>
				</tr>
				<tr valign="top"><th scope="row">District / County link</th>
					<td>
						<input id="scout_theme_options[parent_link]" class="regular-text" type="text" name="scout_theme_options[parent_link]" value="<?php esc_attr_e( $options['parent_link'] ); ?>" />
						<label class="description" for="scout_theme_options[parent_link]"> Inset link for your district or county site</label>
					</td>
				</tr>
				<tr valign="top"><th scope="row">District / County link text</th>
					<td>
						<input id="scout_theme_options[parent_text]" class="regular-text" type="text" name="scout_theme_options[parent_text]" value="<?php esc_attr_e( $options['parent_text'] ); ?>" />
						<label class="description" for="scout_theme_options[parent_text]"> Inset text to be displayed</label>
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

				<tr><th colspan="2"><h2>Extra</h2></th></tr>
				<tr valign="top"><th scope="row">Show sidebar</th>
					<td>
						<input id="scout_theme_options[sidebar]" type="checkbox" name="scout_theme_options[sidebar]" value="1"<?php checked( 1 == (isset($options['sidebar']) ? $options['sidebar'] : '') ) ?>>Check to enable<br>
					</td>
				</tr>
				<tr valign="top"><th scope="row">Show quick links in navbar</th>
					<td>
						<input id="scout_theme_options[navbarQuickLinks]" type="checkbox" name="scout_theme_options[navbarQuickLinks]" value="1"<?php checked( 1 == (isset($options['navbarQuickLinks']) ? $options['navbarQuickLinks'] : '') ) ?>>Check to enable<br>
					</td>
				</tr>
				<tr valign="top"><th scope="row">Navbar colour</th>
					<td>
						<select id="scout_theme_options[navColour]" name='scout_theme_options[navColour]'>
							<option selected value>Choose...</option>
							<option value='purple' <?php isset($options['navColour']) ? selected( $options['navColour'], 'purple' ) : '' ?>>Purple</option>
							<option value='teal' <?php isset($options['navColour']) ? selected( $options['navColour'], 'teal' ) : '' ?>>Teal</option>
							<option value='red' <?php isset($options['navColour']) ? selected( $options['navColour'], 'red' ) : '' ?>>Red</option>
							<option value='pink' <?php isset($options['navColour']) ? selected( $options['navColour'], 'pink' ) : '' ?>>Pink</option>
							<option value='green' <?php isset($options['navColour']) ? selected( $options['navColour'], 'green' ) : '' ?>>Green</option>
							<option value='navy' <?php isset($options['navColour']) ? selected( $options['navColour'], 'navy' ) : '' ?>>Navy</option>
							<option value='blue' <?php isset($options['navColour']) ? selected( $options['navColour'], 'blue' ) : '' ?>>Blue</option>
							<option value='yellow' <?php isset($options['navColour']) ? selected( $options['navColour'], 'yellow' ) : '' ?>>Yellow</option>
							<option value='white' <?php isset($options['navColour']) ? selected( $options['navColour'], 'white' ) : '' ?>>White</option>
							<option value='black' <?php isset($options['navColour']) ? selected( $options['navColour'], 'black' ) : '' ?>>Black</option>
						</select>
					</td>
				</tr>
				<tr valign="top"><th scope="row">Footer colour</th>
					<td>
						<select id="scout_theme_options[footerColour]" name='scout_theme_options[footerColour]'>
							<option selected value>Choose...</option>
							<option value='purple' <?php isset($options['footerColour']) ? selected( $options['footerColour'], 'purple' ) : '' ?>>Purple</option>
							<option value='teal' <?php isset($options['footerColour']) ? selected( $options['footerColour'], 'teal' ) : '' ?>>Teal</option>
							<option value='red' <?php isset($options['footerColour']) ? selected( $options['footerColour'], 'red' ) : '' ?>>Red</option>
							<option value='pink' <?php isset($options['footerColour']) ? selected( $options['footerColour'], 'pink' ) : '' ?>>Pink</option>
							<option value='green' <?php isset($options['footerColour']) ? selected( $options['footerColour'], 'green' ) : '' ?>>Green</option>
							<option value='navy' <?php isset($options['footerColour']) ? selected( $options['footerColour'], 'navy' ) : '' ?>>Navy</option>
							<option value='blue' <?php isset($options['footerColour']) ? selected( $options['footerColour'], 'blue' ) : '' ?>>Blue</option>
							<option value='yellow' <?php isset($options['footerColour']) ? selected( $options['footerColour'], 'yellow' ) : '' ?>>Yellow</option>
							<option value='white' <?php isset($options['footerColour']) ? selected( $options['footerColour'], 'white' ) : '' ?>>White</option>
							<option value='black' <?php isset($options['footerColour']) ? selected( $options['footerColour'], 'black' ) : '' ?>>Black</option>
						</select>
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
