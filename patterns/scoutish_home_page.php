<?php
/**
 * Title: Scoutish home page
 * Slug: bootscout-theme/scoutish_home_page
 * Categories: bootscout, page_layouts
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"backgroundColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-primary-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:columns {"verticalAlignment":null} -->
	<div class="wp-block-columns">
		<!-- wp:column {"width":"50%","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}}} -->
		<div class="wp-block-column" style="padding-top:0;padding-right:var(--wp--preset--spacing--40);padding-bottom:0;padding-left:var(--wp--preset--spacing--40);flex-basis:50%">
			<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center"}} -->
			<div class="wp-block-group">
				<!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|scout-pink"}}}},"textColor":"scout-pink","fontSize":"xx-large"} -->
				<h2 class="wp-block-heading has-scout-pink-color has-text-color has-link-color has-xx-large-font-size">Preparing young people with skills for life</h2>
				<!-- /wp:heading -->

				<!-- wp:buttons {"style":{"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"flex","justifyContent":"left"}} -->
				<div class="wp-block-buttons">
					<!-- wp:button {"backgroundColor":"primary","textColor":"white","width":50,"className":"is-style-outline","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}}} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-50 is-style-outline"><a class="wp-block-button__link has-white-color has-primary-background-color has-text-color has-background has-link-color wp-element-button">Volunteer</a></div>
					<!-- /wp:button -->

					<!-- wp:button {"backgroundColor":"primary","textColor":"white","width":50,"className":"is-style-outline","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}}} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-50 is-style-outline"><a class="wp-block-button__link has-white-color has-primary-background-color has-text-color has-background has-link-color wp-element-button">Join Scouts</a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
			<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group">
				<!-- wp:image {"sizeSlug":"medium","linkDestination":"none"} -->
				<figure class="wp-block-image size-medium"><img alt=""/></figure>
				<!-- /wp:image -->

				<!-- wp:image {"sizeSlug":"medium","linkDestination":"none","style":{"spacing":{"margin":{"top":"var:preset|spacing|80"}}}} -->
				<figure class="wp-block-image size-medium" style="margin-top:var(--wp--preset--spacing--80)"><img alt=""/></figure>
				<!-- /wp:image -->

				<!-- wp:image {"sizeSlug":"medium","linkDestination":"none"} -->
				<figure class="wp-block-image size-medium"><img alt=""/></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center">Explore our age groups</h2>
<!-- /wp:heading -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"layout":{"type":"grid","minimumColumnWidth":"14rem"}} -->
<div class="wp-block-group alignwide" style="padding-right:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
	<!-- wp:group {"style":{"border":{"radius":"5px"},"layout":{"columnSpan":1,"rowSpan":1}},"backgroundColor":"scout-red","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between"}} -->
	<div class="wp-block-group has-scout-red-background-color has-background" style="border-radius:5px">
		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:image {"linkDestination":"none","align":"wide"} -->
			<figure class="wp-block-image alignwide"><img src="<?php echo esc_url( get_template_directory_uri()); ?>/theme/images/squirrels-primary-logo-white-png.png" alt="squirrel scouts logo"/></figure>
			<!-- /wp:image -->

			<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
			<p class="has-text-align-center has-white-color has-text-color has-link-color"><strong>4-6 years</strong></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"textAlign":"center","backgroundColor":"scout-red","textColor":"white","width":100,"className":"is-style-outline","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}}} -->
			<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link has-white-color has-scout-red-background-color has-text-color has-background has-link-color has-text-align-center wp-element-button" href="#">Learn more</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"border":{"radius":"5px"},"layout":{"columnSpan":1,"rowSpan":1}},"backgroundColor":"scout-blue","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between"}} -->
	<div class="wp-block-group has-scout-blue-background-color has-background" style="border-radius:5px">
		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:image {"linkDestination":"none","align":"wide"} -->
			<figure class="wp-block-image alignwide"><img src="<?php echo esc_url( get_template_directory_uri()); ?>/theme/images/beavers-logo-white-png.png" alt="beaver scouts logo"/></figure>
			<!-- /wp:image -->

			<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
			<p class="has-text-align-center has-white-color has-text-color has-link-color"><strong>6-8 years</strong></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"textAlign":"center","backgroundColor":"scout-blue","textColor":"white","width":100,"className":"is-style-outline","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}}} -->
			<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link has-white-color has-scout-blue-background-color has-text-color has-background has-link-color has-text-align-center wp-element-button" href="#">Learn more</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"border":{"radius":"5px"}},"backgroundColor":"scout-green","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between"}} -->
	<div class="wp-block-group has-scout-green-background-color has-background" style="border-radius:5px">
		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:image {"linkDestination":"none","align":"wide"} -->
			<figure class="wp-block-image alignwide"><img src="<?php echo esc_url( get_template_directory_uri()); ?>/theme/images/cubs-logo-white-png.png" alt="cub scouts logo"/></figure>
			<!-- /wp:image -->

			<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
			<p class="has-text-align-center has-white-color has-text-color has-link-color"><strong>8-10½ years</strong></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"textAlign":"center","backgroundColor":"scout-green","textColor":"white","width":100,"className":"is-style-outline","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}}} -->
			<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link has-white-color has-scout-green-background-color has-text-color has-background has-link-color has-text-align-center wp-element-button" href="#">Learn more</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"border":{"radius":"5px"}},"backgroundColor":"scout-section-green","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between"}} -->
	<div class="wp-block-group has-scout-section-green-background-color has-background" style="border-radius:5px">
		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:image {"linkDestination":"none","align":"wide"} -->
			<figure class="wp-block-image alignwide"><img src="<?php echo esc_url( get_template_directory_uri()); ?>/theme/images/scouts-logo-white-png.png" alt="scouts logo"/></figure>
			<!-- /wp:image -->

			<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
			<p class="has-text-align-center has-white-color has-text-color has-link-color"><strong>10½-14 years</strong></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"textAlign":"center","backgroundColor":"scout-section-green","textColor":"white","width":100,"className":"is-style-outline","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}}} -->
			<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link has-white-color has-scout-section-green-background-color has-text-color has-background has-link-color has-text-align-center wp-element-button" href="#">Learn more</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"border":{"radius":"5px"}},"backgroundColor":"scout-navy","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between"}} -->
	<div class="wp-block-group has-scout-navy-background-color has-background" style="border-radius:5px">
		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:image {"align":"wide"} -->
			<figure class="wp-block-image alignwide"><img src="<?php echo esc_url( get_template_directory_uri()); ?>/theme/images/explorers-logo-white-png.png" alt="explorer scouts logo"/></figure>
			<!-- /wp:image -->

			<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
			<p class="has-text-align-center has-white-color has-text-color has-link-color"><strong>14-18 years</strong></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"textAlign":"center","backgroundColor":"scout-navy","textColor":"white","width":100,"className":"is-style-outline","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}}} -->
			<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link has-white-color has-scout-navy-background-color has-text-color has-background has-link-color has-text-align-center wp-element-button" href="#">Learn more</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"border":{"radius":"5px"}},"backgroundColor":"black","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between"}} -->
	<div class="wp-block-group has-black-background-color has-background" style="border-radius:5px">
		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:image {"align":"wide"} -->
			<figure class="wp-block-image alignwide"><img src="<?php echo esc_url( get_template_directory_uri()); ?>/theme/images/network-logo-white-png.png" alt="network scouts logo"/></figure>
			<!-- /wp:image -->

			<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
			<p class="has-text-align-center has-white-color has-text-color has-link-color"><strong>18-25 years</strong></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"textAlign":"center","backgroundColor":"black","textColor":"white","width":100,"className":"is-style-outline","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}}} -->
			<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link has-white-color has-black-background-color has-text-color has-background has-link-color has-text-align-center wp-element-button" href="#">Learn more</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","backgroundColor":"grey-5","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-grey-5-background-color has-background">
	<!-- wp:heading {"textAlign":"center"} -->
	<h2 class="wp-block-heading has-text-align-center">Running Scouts</h2>
	<!-- /wp:heading -->

	<!-- wp:group {"layout":{"type":"grid","columnCount":null,"minimumColumnWidth":"18rem"}} -->
	<div class="wp-block-group">
		<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|20","left":"0","right":"0"}},"layout":{"columnSpan":1,"rowSpan":1},"border":{"radius":"5px"}},"backgroundColor":"grey-5","layout":{"type":"flex","orientation":"vertical"}} -->
		<div class="wp-block-group has-grey-5-background-color has-background" style="border-radius:5px;padding-top:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--20);padding-left:0">
			<!-- wp:group {"style":{"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"constrained","justifyContent":"center"}} -->
			<div class="wp-block-group">
				<!-- wp:image {"align":"center","style":{"layout":{"selfStretch":"fit","flexSize":null}}} -->
				<figure class="wp-block-image aligncenter"><img alt=""/></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
				<!-- wp:heading {"level":4,"style":{"spacing":{"margin":{"right":"0","left":"0"}}}} -->
				<h4 class="wp-block-heading" style="margin-right:0;margin-left:0">Activities</h4>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"spacing":{"margin":{"right":"0","left":"0"}}}} -->
				<p style="margin-right:0;margin-left:0">Our activity finder is bursting with programme ideas, and can be searched by section, time, cost, setting, type or learning outcomes.</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph -->
				<p><a href="https://www.scouts.org.uk/activities/" data-type="tribe_events" target="_blank" rel="noreferrer noopener">Discover the activities</a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|20","left":"0","right":"0"}},"layout":{"columnSpan":1,"rowSpan":1},"border":{"radius":"5px"}},"backgroundColor":"grey-5","layout":{"type":"flex","orientation":"vertical"}} -->
		<div class="wp-block-group has-grey-5-background-color has-background" style="border-radius:5px;padding-top:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--20);padding-left:0">
			<!-- wp:group {"style":{"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"constrained","justifyContent":"center"}} -->
			<div class="wp-block-group">
				<!-- wp:image {"align":"center","style":{"layout":{"selfStretch":"fit","flexSize":null}}} -->
				<figure class="wp-block-image aligncenter"><img alt=""/></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
				<!-- wp:heading {"level":4,"style":{"spacing":{"margin":{"right":"0","left":"0"}}}} -->
				<h4 class="wp-block-heading" style="margin-right:0;margin-left:0">Badges</h4>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"spacing":{"margin":{"right":"0","left":"0"}}}} -->
				<p style="margin-right:0;margin-left:0">Master something you love, or try something shiny and new. These badges allow a young person to gain whichever badge is appropriate to the level they have reached.</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph -->
				<p><a href="https://www.scouts.org.uk/activity-badges/" data-type="tribe_events" target="_blank" rel="noreferrer noopener">Explore badges</a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|20","left":"0","right":"0"}},"layout":{"columnSpan":1,"rowSpan":1},"border":{"radius":"5px"}},"backgroundColor":"grey-5","layout":{"type":"flex","orientation":"vertical"}} -->
		<div class="wp-block-group has-grey-5-background-color has-background" style="border-radius:5px;padding-top:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--20);padding-left:0">
			<!-- wp:group {"style":{"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"constrained","justifyContent":"center"}} -->
			<div class="wp-block-group">
				<!-- wp:image {"align":"center","style":{"layout":{"selfStretch":"fit","flexSize":null}}} -->
				<figure class="wp-block-image aligncenter"><img alt=""/></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
				<!-- wp:heading {"level":4,"style":{"spacing":{"margin":{"right":"0","left":"0"}}}} -->
				<h4 class="wp-block-heading" style="margin-right:0;margin-left:0">Nights away</h4>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"spacing":{"margin":{"right":"0","left":"0"}}}} -->
				<p style="margin-right:0;margin-left:0">Whether camping, hostelling, or sleepovers, nights away form an integral part of Scouts, which every young person should have an opportunity to take part in.</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph -->
				<p><a href="https://www.scouts.org.uk/volunteers/running-your-section/planning-your-programme/nights-away-and-camping/" data-type="tribe_events" target="_blank" rel="noreferrer noopener">Find your adventure</a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|20","left":"0","right":"0"}},"layout":{"columnSpan":1,"rowSpan":1},"border":{"radius":"5px"}},"backgroundColor":"grey-5","layout":{"type":"flex","orientation":"vertical"}} -->
		<div class="wp-block-group has-grey-5-background-color has-background" style="border-radius:5px;padding-top:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--20);padding-left:0">
			<!-- wp:group {"style":{"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"constrained","justifyContent":"center"}} -->
			<div class="wp-block-group">
				<!-- wp:image {"align":"center","style":{"layout":{"selfStretch":"fit","flexSize":null}}} -->
				<figure class="wp-block-image aligncenter"><img alt=""/></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
				<!-- wp:heading {"level":4,"style":{"spacing":{"margin":{"right":"0","left":"0"}}}} -->
				<h4 class="wp-block-heading" style="margin-right:0;margin-left:0">POR</h4>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"spacing":{"margin":{"right":"0","left":"0"}}}} -->
				<p style="margin-right:0;margin-left:0">Scouts' Policy Organisation and Rules (POR) provides support and guidance to help us all run Scouts.</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph -->
				<p><a href="https://www.scouts.org.uk/por/" data-type="tribe_events" target="_blank" rel="noreferrer noopener">Check out the guidance</a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|20","left":"0","right":"0"}},"layout":{"columnSpan":1,"rowSpan":1},"border":{"radius":"5px"}},"backgroundColor":"grey-5","layout":{"type":"flex","orientation":"vertical"}} -->
		<div class="wp-block-group has-grey-5-background-color has-background" style="border-radius:5px;padding-top:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--20);padding-left:0">
			<!-- wp:group {"style":{"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"constrained","justifyContent":"center"}} -->
			<div class="wp-block-group">
				<!-- wp:image {"align":"center","style":{"layout":{"selfStretch":"fit","flexSize":null}}} -->
				<figure class="wp-block-image aligncenter"><img alt=""/></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
				<!-- wp:heading {"level":4,"style":{"spacing":{"margin":{"right":"0","left":"0"}}}} -->
				<h4 class="wp-block-heading" style="margin-right:0;margin-left:0">Training</h4>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"spacing":{"margin":{"right":"0","left":"0"}}}} -->
				<p style="margin-right:0;margin-left:0">Learn more about the training for your role and how you can prepare young people with skills for life.</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph -->
				<p><a href="https://www.scouts.org.uk/volunteers/learning-development-and-awards/learning/" data-type="tribe_events" target="_blank" rel="noreferrer noopener">See what you'll learn</a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:media-text {"className":"has-media-on-the-right has-primary-background-color has-background"} -->
<div class="wp-block-media-text is-stacked-on-mobile has-media-on-the-right has-primary-background-color has-background"><figure class="wp-block-media-text__media"></figure>
	<div class="wp-block-media-text__content">
		<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">
			<!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
			<h2 class="wp-block-heading has-white-color has-text-color has-link-color">Volunteer with Scouts</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
			<p class="has-white-color has-text-color has-link-color">Giving back will improve your wellbeing, equip you with skills for the future, and help you make a positive impact on the lives of young people.</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"backgroundColor":"primary","textColor":"white","className":"is-style-outline","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}}} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-white-color has-primary-background-color has-text-color has-background has-link-color wp-element-button">Learn more</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
</div>
<!-- /wp:media-text -->

<!-- wp:group {"align":"full","backgroundColor":"secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-secondary-background-color has-background">
	<!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
	<h2 class="wp-block-heading has-text-align-center has-white-color has-text-color has-link-color">What’s happening</h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
	<p class="has-text-align-center has-white-color has-text-color has-link-color">All the latest news for you and your Scouts</p>
	<!-- /wp:paragraph -->

	<!-- wp:query {"queryId":42,"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"metadata":{"categories":["posts"],"patternName":"core/query-grid-posts","name":"Grid"},"layout":{"type":"default"}} -->
	<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
		<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"layout":{"inherit":false}} -->
		<div class="wp-block-group" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
			<!-- wp:post-featured-image {"height":"200px","style":{"border":{"radius":"0px"}}} /-->

			<!-- wp:post-title {"level":3,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|grey-80"}}},"spacing":{"padding":{"right":"0","left":"0"},"margin":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"textColor":"grey-80"} /-->

			<!-- wp:post-date {"textAlign":"left","metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"style":{"spacing":{"margin":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20"}}}} /-->

			<!-- wp:post-excerpt {"moreText":"Continue reading","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"},"padding":{"top":"0.5rem","bottom":"0rem"}}}} /-->
		</div>
		<!-- /wp:group -->
		<!-- /wp:post-template -->
	</div>
	<!-- /wp:query -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button {"backgroundColor":"secondary","textColor":"white","className":"is-style-outline","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}}} -->
		<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-white-color has-secondary-background-color has-text-color has-background has-link-color wp-element-button">View all</a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"backgroundColor":"scout-yellow"} -->
<div class="wp-block-columns has-scout-yellow-background-color has-background" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:column {"width":"50%"} -->
	<div class="wp-block-column" style="flex-basis:50%">
		<!-- wp:group {"layout":{"type":"default"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"fontSize":"x-large"} -->
			<h2 class="wp-block-heading has-x-large-font-size"><strong>Safeguarding and safety at Scouts</strong></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p>If there is an immediate risk of harm call 999 or 112. Tell us you have done this.</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading">Reporting safety incidents, illness and emergencies </h3>
			<!-- /wp:heading -->

			<!-- wp:list -->
			<ul class="wp-block-list"><!-- wp:list-item {"style":{"elements":{"link":{"color":{"text":"var:preset|color|grey-80"}}}},"textColor":"grey-80"} -->
				<li class="has-grey-80-color has-text-color has-link-color">Report it using our <a href="https://forms.olmapps.com/ewfprod/manage/view/#/form/safetyincidentreporting?header=1&amp;reset=1" target="_blank" rel="noreferrer noopener"><strong>online reporting form</strong></a></li>
				<!-- /wp:list-item -->

				<!-- wp:list-item {"style":{"elements":{"link":{"color":{"text":"var:preset|color|grey-80"}}}},"textColor":"grey-80"} -->
				<li class="has-grey-80-color has-text-color has-link-color">Email <a href="mailto:safety@scouts.org.uk"><strong>safety@scouts.org.uk</strong></a></li>
				<!-- /wp:list-item -->

				<!-- wp:list-item {"style":{"elements":{"link":{"color":{"text":"var:preset|color|grey-80"}}}},"textColor":"grey-80"} -->
				<li class="has-grey-80-color has-text-color has-link-color">Follow <a href="https://www.scouts.org.uk/volunteers/staying-safe-and-safeguarding/safe-scouting-cards/safe-scouting-what-to-do-in-an-emergency/"><strong>the Purple Card</strong></a></li>
				<!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:column -->

	<!-- wp:column {"width":"50%"} -->
	<div class="wp-block-column" style="flex-basis:50%">
		<!-- wp:group {"layout":{"type":"default"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading">Reporting safeguarding concerns</h3>
			<!-- /wp:heading -->

			<!-- wp:list -->
			<ul class="wp-block-list">
				<!-- wp:list-item {"style":{"elements":{"link":{"color":{"text":"var:preset|color|grey-80"}}}},"textColor":"grey-80"} -->
				<li class="has-grey-80-color has-text-color has-link-color">Report it using our <a href="https://www.cognitoforms.com/TheScoutAssociation/SafeguardingReportingForm" target="_blank" rel="noreferrer noopener"><strong>online safeguarding reporting form</strong></a></li>
				<!-- /wp:list-item -->

				<!-- wp:list-item -->
				<li>Call +44 (0)20 8433 7164 (9am – 5pm weekdays)</li>
				<!-- /wp:list-item -->

				<!-- wp:list-item {"style":{"elements":{"link":{"color":{"text":"var:preset|color|grey-80"}}}},"textColor":"grey-80"} -->
				<li class="has-grey-80-color has-text-color has-link-color">Email <a href="mailto:safeguarding@scouts.org.uk"><strong>safeguarding@scouts.org.uk</strong></a></li>
				<!-- /wp:list-item -->

				<!-- wp:list-item {"style":{"elements":{"link":{"color":{"text":"var:preset|color|grey-80"}}}},"textColor":"grey-80"} -->
				<li class="has-grey-80-color has-text-color has-link-color">Follow <a href="https://www.scouts.org.uk/volunteers/staying-safe-and-safeguarding/safe-scouting-cards/safeguarding-code-of-conduct-for-adults-yellow-card/"><strong>the Yellow Card</strong></a></li>
				<!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->

			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading">Out of hours</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p>Call 0345 300 1818 (local rate) or +44 (0)20 8433 7100 to speak to the on duty Critical Incident Manager, Safeguarding Officer or Media Officer.</p>
			<!-- /wp:paragraph -->

			<!-- wp:image {"width":"200px","sizeSlug":"full","linkDestination":"custom","align":"right"} -->
			<figure class="wp-block-image alignright size-full is-resized"><a href="https://www.ceop.police.uk/safety-centre/"><img src="<?php echo esc_url( get_template_directory_uri()); ?>/theme/images/CEOP.png" alt="CEOP logo" style="width:200px"/></a></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->
