<?php
/**
 * Template part for displaying the footer info
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;



?>



<div class="site-info">


<?php $footerloop = new \WP_Query( array( 'post_type' => 'footer_info', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

<?php while( $footerloop->have_posts() ) : $footerloop->the_post();
$contact_us_phone			= get_field('contact_us_phone');
			$contact_us_phone_link			= get_field('contact_us_phone_link');
			$contact_us_street			= get_field('contact_us_street');
			$contact_us_street_suite			= get_field('contact_us_street_suite');
			$contact_us_city			= get_field('contact_us_city');
			$contact_us_state			= get_field('contact_us_state');
			$contact_us_zip			= get_field('contact_us_zip');
			$contact_us_open_datetime			= get_field('contact_us_open_datetime');
			$contact_us_open_datetime_extra			= get_field('contact_us_open_datetime_extra');
			$contact_us_open_days_times			= get_field('contact_us_open_days_times');
			$contact_us_open_days_times_extra			= get_field('contact_us_open_days_times_extra');
			$contact_us_closed			= get_field('contact_us_closed');
			$contact_us_form			= get_field('contact_us_form');
			$cta_loading_image			= get_field('cta_loading_image');
			$middle_images			= get_field('middle_images');
			$right_images			= get_field('right_images');
			$facebook_link			= get_field('facebook_link');
			$instagram_link			= get_field('instagram_link');
			$linkedin_link			= get_field('linkedin_link');
			$google_map			= get_field('google_map');
			?>


	<div class="topBlock">
		<div class="leftBlock" vocab="http://schema.org/" typeof="LocalBusiness">
			<div class="softBlock">
		<div class="blockTitle">
		<h4>Contact Information</h4>
</div>
		<section id="physical">

        <div id="address">
            <address property="address" typeof="PostalAddress">
			<h5><?php bloginfo( 'name' ); ?></h5>
			<h5><span property="streetAddress"><?php echo $contact_us_street; ?>
		<br>
		<?php echo $contact_us_street_suite; ?></span>
            <br>
            <span property="addressLocality"><?php echo $contact_us_city; ?></span>,

			<span property="addressRegion"><?php echo $contact_us_state; ?></span> <?php echo $contact_us_zip; ?></h5>
</address>
        </div>
</section>
<div id="phone">
			<span property="telephone"><a href="tel:<?php echo $contact_us_phone_link; ?>"><?php echo $contact_us_phone; ?></a></span>
		</div>
<div id="hours">
	<h4>Hours of Operation</h4>
			<ul>
				<li>
				<time itemprop="openingHours" datetime="<?php echo $contact_us_open_datetime; ?>"><?php echo $contact_us_open_days_times; ?></time>
				</li>
				<?php if ($contact_us_open_datetime_extra != null) { ?>
				<li>
				<time itemprop="openingHours" datetime="<?php echo $contact_us_open_datetime_extra; ?>"><?php echo $contact_us_open_days_times_extra; ?></time>
				</li>
				<?php } ?>

				<li>
				 <?php echo $contact_us_closed; ?> - Closed
				</li>
			</ul>

        </div>
        <div id="googleMap">
        <amp-iframe width="600" height="450" layout="responsive"
			  sandbox="allow-scripts allow-same-origin allow-popups"
			  frameborder="0"
              src="<?php echo $google_map; ?>">
    <amp-img layout="fill"
             src="<?php echo get_template_directory_uri() ?>/assets/images/Google-Map-Supreme.jpg"
			 placeholder>
			</amp-img>
  </amp-iframe>
</div>
</div>
<div class="softBlock">
<div class="blockTitle">
		<h4>Join Us On Social Media</h4>
</div>

	<div id="supremeSocial">
		<div id="socialIcon1">
			<a href="<?php echo $facebook_link; ?>">
			<amp-img
				src="<?php echo get_template_directory_uri() ?>/assets/images/facebook-icon.png"
				width="1"
				height="1"
				layout="responsive"
				alt="facebook icon">
			</amp-img>
</a>
		</div>
		<div id="socialIcon2">
		<a href="<?php echo $instagram_link; ?>" rel="noopener" target="_blank">
			<amp-img
				src="<?php echo get_template_directory_uri() ?>/assets/images/instagram-icon.png"
				width="1"
				height="1"
				layout="responsive"
				alt="instagram icon">
			</amp-img>
</a>
		</div>
		<div id="socialIcon3">
		<a href="<?php echo $linkedin_link; ?>" rel="noopener" target="_blank">
			<amp-img
				src="<?php echo get_template_directory_uri() ?>/assets/images/Yelp-icon.png"
				width="1"
				height="1"
				layout="responsive"
				alt="linkedin icon">
			</amp-img>
</a>
		</div>
</div>
</div>
</div>
<div class="middleBlock">
	<div class="blockTitle">
		<h4><?php bloginfo( 'name' ); ?></h4>
</div>

<div class="blockImages">
<?php while (have_rows('middle_images')) : the_row();
$middle_image_1	= get_sub_field('middle_image_1');
$middle_image_2	= get_sub_field('middle_image_2');
?>

		<amp-img
		src="<?php echo $middle_image_1['url']; ?>"
  width="640"
			height="640"
			layout="responsive"
			alt="<?php echo $middle_image_1['alt']; ?>">
		</amp-img>
		<amp-img
		src="<?php echo $middle_image_2['url']; ?>"
  width="640"
			height="640"
			layout="responsive"
			alt="<?php echo $middle_image_2['alt']; ?>">
		</amp-img>
		<?php endwhile; ?>
</div>
</div>
<div class="rightBlock">
<div class="blockTitle">
		<h4>Sharing Your Passion!</h4>
</div>
<div class="blockImages">
<?php while (have_rows('right_images')) : the_row();
$right_image_1	= get_sub_field('right_image_1');
$right_image_2	= get_sub_field('right_image_2');
?>
		<amp-img
		src="<?php echo $right_image_1['url']; ?>"
  width="640"
			height="640"
			layout="responsive"
			alt="<?php echo $right_image_1['alt']; ?>">
		</amp-img>
		<amp-img
		src="<?php echo $right_image_2['url']; ?>"
  width="640"
			height="640"
			layout="responsive"
			alt="<?php echo $right_image_2['alt']; ?>">
		</amp-img>
		<?php endwhile; ?>
</div>
</div>

</div>
<?php endwhile;  wp_reset_query(); ?>
<div class="baseBlock">

<div id="themeLogo" aria-label="custom logo link">
<?php the_custom_logo(); ?>
</div>

<div class="builtBy">

	<a href="<?php echo esc_url( __( 'https://austintatiousdesign.co/', 'wp-rig' ) ); ?>">
		<?php
		/* translators: %s: CMS name, i.e. WordPress. */
		printf( esc_html__( 'Proudly built and maintained by %s', 'wp-rig' ), 'Austintatious Design' );
		?>
	</a>
</div>
</div>

</div><!-- .site-info -->

