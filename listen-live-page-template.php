<?php
/**
 * Template Name: Listen Live Page Template
 *
 * When active, by adding the heading above and providing a custom name
 * this template becomes available in a drop-down panel in the editor.
 *
 * Filename can be anything.
 *
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/#creating-custom-page-templates-for-global-use
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

get_header('listen-live');

wp_rig()->print_styles( 'wp-rig-content' );

?>

	<main id="primary" class="site-main">
	<div class="iFrame">
		<?php

		while ( have_posts() ) {
			the_post();

			the_content();
		}

		?>
		</div>
		<div class="adsFrame">
		<amp-auto-ads type="adsense" data-ad-client="ca-pub-8461421627823918">
</amp-auto-ads>
	</div><!-- adsFrame -->
	</main><!-- #primary -->

<?php
get_footer('listen-live');
