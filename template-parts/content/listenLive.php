<?php
/**
 * Template part for Listen Live Block
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;



?>

<div class="listenLiveBlock">
<h2>
		Listen Here Live
	</h2>
	<!-- <iframe class="desktop" frameborder="0" width="1240" height="830" scrolling="no" style="text-align:center; vertical-align:middle;" src="https://radio.securenetsystems.net/radio_player_large.cfm?stationCallSign=KWVH"></iframe> -->
		<?php $listenliveloop = new \WP_Query( array( 'post_type' => 'listen_live', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>
		<!-- <div class="mobile"> -->
<?php while( $listenliveloop->have_posts() ) : $listenliveloop->the_post();
$listen_live_icon			= get_field('listen_live_icon');

			?>



		<a href="https://streamdb7web.securenetsystems.net/cirrusencore/KWVH"  rel="noopener">

		<h4>Click to Listen:</h4>
		<img src="<?php echo $listen_live_icon['url']; ?>" alt="<?php echo $listen_live_icon['alt']; ?>"/>
	</a>
	<?php endwhile;  wp_reset_query(); ?>
	<!-- ## Show different tabs -->
    <!-- Render the `timeline` and `events` tab for a particular Facebook page by specifying  `data-tabs="timeline, events"`. -->
    <amp-facebook-page width="552" height="310" layout="responsive" data-tabs="timeline, events, live streaming" data-href="https://www.facebook.com/wimberleyvalleyradio/">
    </amp-facebook-page>
	<!-- </div>  -->
	<!-- mobile --></div>
