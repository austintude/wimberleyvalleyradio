<?php
/**
 * Template part for displaying the header branding
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;
// $hero_images	= get_field('hero_images');

?>

<div class="site-branding">
	<div id="mobileTopBar">
	&nbsp;
</div>
<?php the_custom_logo(); ?>
<?php $hero_information = new \WP_Query( array( 'post_type' => 'hero_information', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

<?php while( $hero_information->have_posts() ) : $hero_information->the_post();
		$kwvh_logo	= get_field('kwvh_logo');
		// $site_title	= get_field('site_title');
		// $site_title_background_image	= get_field('site_title_background_image');
		// $call_letters	= get_field('call_letters');
		// $call_number	= get_field('call_number');
		// $call_number_plus	= get_field('call_number_plus');
		// $call_number_background_image	= get_field('call_number_background_image');
		?>
<div class="titleTagWrapper">
	<div class="heroText">
	<img src="<?php echo $kwvh_logo['url']; ?>" alt="<?php echo $kwvh_logo['alt']; ?>"/>
</div><!-- heroText -->
	<div class="heroButtons">
	<?php $listenliveloop = new \WP_Query( array( 'post_type' => 'listen_live', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

<?php while( $listenliveloop->have_posts() ) : $listenliveloop->the_post();
$listen_live_icon			= get_field('listen_live_icon');

			?>
		<div class="listenLive">
			<button>
			Listen Live
			<!-- <img src="<?php echo $listen_live_icon['url']; ?>" alt="<?php echo $listen_live_icon['alt']; ?>"/> -->
			</button>

</div><!-- listenLive -->
<?php endwhile;  wp_reset_query(); ?>

<div class="donateNow">
	<button>
	Donate Now
	</button>

</div><!-- donateNow -->
</div>
</div>
<?php endwhile;  wp_reset_query(); ?>


</div><!-- .site-branding -->
