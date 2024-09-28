<?php
/**
 * Title: Scoutish content page
 * Slug: bootscout-theme/scoutish_content_page
 * Categories: bootscout, page_layouts
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"backgroundColor":"scout-blue","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-scout-blue-background-color has-background" style="margin-bottom:var(--wp--preset--spacing--50)">
	<!-- wp:columns -->
	<div class="wp-block-columns">
		<!-- wp:column {"width":"66%"} -->
		<div class="wp-block-column" style="flex-basis:66%">
			<!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group">
				<!-- wp:post-title {"style":{"layout":{"columnSpan":3,"rowSpan":1},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} /-->
			</div>
			<!-- /wp:group -->

			<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
			<p class="has-white-color has-text-color has-link-color">Enter some text to summarise what is found on this page what is on this page. The background colour of this banner can be changed in the settings sidebar on the right.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"33%"} -->
		<div class="wp-block-column" style="flex-basis:33%">
			<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group has-white-color has-text-color has-link-color">
				<!-- wp:heading {"level":4} -->
				<h4 class="wp-block-heading">Quick links</h4>
				<!-- /wp:heading -->

				<!-- wp:separator {"className":"is-style-wide","style":{"layout":{"selfStretch":"fit","flexSize":null}}} -->
				<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
				<!-- /wp:separator -->

				<!-- wp:paragraph -->
				<p><a href="#">Link 1 &gt;</a></p>
				<!-- /wp:paragraph -->

				<!-- wp:separator {"className":"is-style-wide"} -->
				<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
				<!-- /wp:separator -->

				<!-- wp:paragraph -->
				<p><a href="#">Link 2 &gt;</a></p>
				<!-- /wp:paragraph -->

				<!-- wp:separator {"className":"is-style-wide"} -->
				<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
				<!-- /wp:separator -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:columns -->
<div class="wp-block-columns">
	<!-- wp:column {"width":"66.66%"} -->
	<div class="wp-block-column" style="flex-basis:66.66%">
		<!-- wp:paragraph -->
		<p>This WordPress block pattern is designed as a starter for content pages on your site. You can add, remove and modify blocks to match your page content. The ones provided by default are there to cover the various types found on The Scout website. </p>
		<!-- /wp:paragraph -->

		<!-- wp:heading -->
		<h2 class="wp-block-heading"><strong>Headings should be bold and with a heading 2 (H2) level applied</strong></h2>
		<!-- /wp:heading -->

		<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|30","left":"0","right":"0"}}},"backgroundColor":"grey-5","layout":{"type":"flex","orientation":"vertical"}} -->
		<div class="wp-block-group has-grey-5-background-color has-background" style="padding-top:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--30);padding-left:0">
			<!-- wp:image {sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img alt=""/></figure>
			<!-- /wp:image -->

			<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
				<!-- wp:heading {"level":4} -->
				<h4 class="wp-block-heading"><strong>Main content section with coloured / grey background</strong></h4>
				<!-- /wp:heading -->

				<!-- wp:paragraph -->
				<p>Add some text, set and image, add a link to another page etc.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:column -->

	<!-- wp:column {"width":"33.33%"} -->
	<div class="wp-block-column" style="flex-basis:33.33%">
		<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|30","left":"0","right":"0"}}},"backgroundColor":"primary","layout":{"type":"flex","orientation":"vertical"}} -->
		<div class="wp-block-group has-primary-background-color has-background" style="padding-top:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--30);padding-left:0">
			<!-- wp:image {sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img alt=""/></figure>
			<!-- /wp:image -->

			<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
				<!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
				<h4 class="wp-block-heading has-white-color has-text-color has-link-color"><strong>Coloured background sidebar area</strong></h4>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
				<p class="has-white-color has-text-color has-link-color">Add some text and set an image</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"0","right":"0"}}},"backgroundColor":"grey-5","layout":{"type":"flex","orientation":"vertical"}} -->
		<div class="wp-block-group has-grey-5-background-color has-background" style="padding-top:var(--wp--preset--spacing--30);padding-right:0;padding-bottom:var(--wp--preset--spacing--30);padding-left:0">
			<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
				<!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|grey-80"}}}},"textColor":"grey-80"} -->
				<h4 class="wp-block-heading has-grey-80-color has-text-color has-link-color"><strong>Grey background sidebar area</strong></h4>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|grey-80"}}}},"textColor":"grey-80"} -->
				<p class="has-grey-80-color has-text-color has-link-color">Add some text. A button can also be used to link to another page.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Go to another page</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->
