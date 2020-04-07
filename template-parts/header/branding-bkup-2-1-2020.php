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
		$site_title	= get_field('site_title');
		$site_title_background_image	= get_field('site_title_background_image');
		$call_letters	= get_field('call_letters');
		$call_number	= get_field('call_number');
		$call_number_plus	= get_field('call_number_plus');
		$call_number_background_image	= get_field('call_number_background_image');
		?>
<div class="titleTagWrapper">
	<div class="heroText">
		<h1 class="site-title">
			<!-- <?php bloginfo( 'name' ); ?> -->
			<svg viewBox="0 0 500 500">
			<path id="desktopCurve" d="M 50 300 A 50 50 0 1 1 400 300" />
			<path id="mobileCurve" d="M 50 300 A 50 50 0 1 1 245 300" />
    <text width="200">
      <textPath xlink:href="#desktopCurve" class="desktop">
	  <?php echo $site_title; ?>
	  </textPath>
	  <!-- <textPath xlink:href="#curve" class="tablet">
        Wimberley Valley Radio
	  </textPath> -->
	  <textPath xlink:href="#mobileCurve" class="mobile">
	  <?php echo $site_title; ?>
      </textPath>
    </text>
  </svg>
		</h1>
		<div class="site-titleBackground">

		<img src="<?php echo $site_title_background_image['url']; ?>" alt="<?php echo $site_title_background_image['alt']; ?>"/>
</div><!-- site-titleBackground -->
		<h1 class="callNumber">
		<?php echo $call_letters; ?>
		</h1>
		<h1 class="callNumberBackground">
		<?php echo $call_letters; ?>
		</h1>

		<h2 class="tagline">
		<?php echo $call_number; ?>
		<span class="fm">
		<?php echo $call_number_plus; ?>
</span>

	</h2>
	<img class="tagline" src="<?php echo $call_number_background_image['url']; ?>" alt="<?php echo $call_number_background_image['alt']; ?>"/>
	</div><!-- heroText -->
	<div class="heroButtons">
		<div class="listenLive">
			<button>
			Listen Live
			</button>

</div><!-- listenLive -->
<div class="donateNow">
	<button>
	Donate Now
	</button>

</div><!-- donateNow -->
</div>
</div>
<?php endwhile;  wp_reset_query(); ?>


</div><!-- .site-branding -->
