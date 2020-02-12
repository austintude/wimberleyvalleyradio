<?php
/**
 * Template part for block2
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;


?>

<div class="programTabsWrapper">
	<h2>Weekly Programing at KWVH</h2>
	<?php $programs = new \WP_Query( array( 'post_type' => 'programs', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

<?php while( $programs->have_posts() ) : $programs->the_post();
$grid_card_loop_monday		= get_field('grid_card_loop_monday');
$grid_card_loop_tuesday		= get_field('grid_card_loop_tuesday');
$grid_card_loop_wednesday		= get_field('grid_card_loop_wednesday');
$grid_card_loop_thursday		= get_field('grid_card_loop_thursday');
$grid_card_loop_friday		= get_field('grid_card_loop_friday');
$grid_card_loop_saturday		= get_field('grid_card_loop_saturday');
$grid_card_loop_sunday		= get_field('grid_card_loop_sunday');
?>
	<amp-selector class="tabs-with-flex"
	role="tablist">
	<div id="tab1"
		role="tab"
		aria-controls="tabpanel1"
		option
		selected>Monday
	</div>
	<div id="tabpanel1"
		role="tabpanel"
		aria-labelledby="tab1">
		<section class="gridCardWrapper">
		<?php while (have_rows('grid_card_loop_monday')) : the_row();

			// vars
			$grid_card_item = get_sub_field('grid_card_item');
			$grid_card_item_id = get_sub_field('grid_card_item_id');
			$grid_card_item_img = get_sub_field('grid_card_item_img');
			$grid_card_item_desc = get_sub_field('grid_card_item_desc');
			$grid_card_item_link = get_sub_field('grid_card_item_link');
			$grid_card_item_link_text = get_sub_field('grid_card_item_link_text');
			$grid_card_item_time = get_sub_field('grid_card_item_time');
			$grid_card_item_host = get_sub_field('grid_card_item_host');
			$grid_card_item_prod = get_sub_field('grid_card_item_prod');
			$grid_card_item_ampm = get_sub_field('grid_card_item_ampm');

			?>
			<div class="gridCardLoop" >

					<div class="gridCardImg">

						<img src="<?php echo $grid_card_item_img['url']; ?>" alt="<?php echo $grid_card_item_img['alt']; ?>" />
					</div><!-- gridCardImg -->
					<div class="gridContent">
						<div class="gridCardItem">
							<h3>
								<?php echo $grid_card_item; ?>
							</h3>
							<h5>
							<?php echo $grid_card_item_time; ?>
							<span>
							<?php echo $grid_card_item_ampm; ?>
</span>
							</h5>



						</div> <!-- gridCardItem -->

						<div class="gridCardItemLink">
							<a role="button" on="tap:AMP.setState({showLightbox<?php echo $grid_card_item_id; ?>: true})">
								<?php echo $grid_card_item_link_text; ?>
</a>
						</div>
						<!-- gridCardItemLink -->

					</div> <!-- gridContent -->
					<amp-lightbox id="<?php echo $grid_card_item_id; ?>" [open]="showLightbox<?php echo $grid_card_item_id; ?>" layout="nodisplay" on="lightboxClose:AMP.setState({showLightbox<?php echo $grid_card_item_id; ?>: false})">
							<div class="gridCardDesc lightbox" role="button" tabindex="0" on="tap:<?php echo $grid_card_item_id; ?>.close">
								<a class="closeX" role="button" on="tap:<?php echo $grid_card_item_id; ?>.close">X</a>
							<div class="gridCardImgLightbox">

						<img src="<?php echo $grid_card_item_img['url']; ?>" alt="<?php echo $grid_card_item_img['alt']; ?>" />
					</div><!-- gridCardImgLightbox -->
							<div class="showContent">
								<h4>Hosted by: <?php echo $grid_card_item_host; ?></h4>
							<h5>Produced by: <?php echo $grid_card_item_prod; ?> </h5>
								<p>
									<?php echo $grid_card_item_desc; ?>
								</p>
							</div>
							<!-- <div class="ctaShow">
								<button>
									More Info
								</button>
							</div> -->
							<!-- ctaShow -->


							</div> <!-- gridCardDesc -->
						</amp-lightbox><!-- id="$grid_card_item_id;" -->

			</div><!-- gridCardLoop -->
		<?php endwhile; ?>
	</section> <!-- end .gridCardWrapper -->
</div><!-- tabpanel1 -->
	<div id="tab2"
		role="tab"
		aria-controls="tabpanel2"
		option>Tuesday</div>
	<div id="tabpanel2"
		role="tabpanel"
		aria-labelledby="tab2">
		<section class="gridCardWrapper">
		<?php while (have_rows('grid_card_loop_tuesday')) : the_row();

			// vars
			$grid_card_item = get_sub_field('grid_card_item');
			$grid_card_item_id = get_sub_field('grid_card_item_id');
			$grid_card_item_img = get_sub_field('grid_card_item_img');
			$grid_card_item_desc = get_sub_field('grid_card_item_desc');
			$grid_card_item_link = get_sub_field('grid_card_item_link');
			$grid_card_item_link_text = get_sub_field('grid_card_item_link_text');
			$grid_card_item_time = get_sub_field('grid_card_item_time');
			$grid_card_item_host = get_sub_field('grid_card_item_host');
			$grid_card_item_prod = get_sub_field('grid_card_item_prod');
			$grid_card_item_ampm = get_sub_field('grid_card_item_ampm');

			?>
			<div class="gridCardLoop" >

					<div class="gridCardImg">

						<img src="<?php echo $grid_card_item_img['url']; ?>" alt="<?php echo $grid_card_item_img['alt']; ?>" />
					</div><!-- gridCardImg -->
					<div class="gridContent">
						<div class="gridCardItem">
							<h3>
								<?php echo $grid_card_item; ?>
							</h3>
							<h5>
							<?php echo $grid_card_item_time; ?>
							<span>
							<?php echo $grid_card_item_ampm; ?>
</span>
							</h5>



						</div> <!-- gridCardItem -->

						<div class="gridCardItemLink">
							<a role="button" on="tap:AMP.setState({showLightbox<?php echo $grid_card_item_id; ?>: true})">
								<?php echo $grid_card_item_link_text; ?>
</a>
						</div>
						<!-- gridCardItemLink -->

					</div> <!-- gridContent -->
					<amp-lightbox id="<?php echo $grid_card_item_id; ?>" [open]="showLightbox<?php echo $grid_card_item_id; ?>" layout="nodisplay" on="lightboxClose:AMP.setState({showLightbox<?php echo $grid_card_item_id; ?>: false})">
							<div class="gridCardDesc lightbox" role="button" tabindex="0" on="tap:<?php echo $grid_card_item_id; ?>.close">
								<a class="closeX" role="button" on="tap:<?php echo $grid_card_item_id; ?>.close">X</a>
							<div class="gridCardImgLightbox">

						<img src="<?php echo $grid_card_item_img['url']; ?>" alt="<?php echo $grid_card_item_img['alt']; ?>" />
					</div><!-- gridCardImgLightbox -->
							<div class="showContent">
								<h4>Hosted by: <?php echo $grid_card_item_host; ?></h4>
							<h5>Produced by: <?php echo $grid_card_item_prod; ?> </h5>
								<p>
									<?php echo $grid_card_item_desc; ?>
								</p>
							</div>
							<!-- <div class="ctaShow">
								<button>
									More Info
								</button>
							</div> -->
							<!-- ctaShow -->


							</div> <!-- gridCardDesc -->
						</amp-lightbox><!-- id="$grid_card_item_id;" -->

			</div><!-- gridCardLoop -->
		<?php endwhile; ?>
	</section> <!-- end .gridCardWrapper -->
	</div><!-- tabpanel2 -->
	<div id="tab3"
		role="tab"
		aria-controls="tabpanel3"
		option>Wednesday</div>
	<div id="tabpanel3"
		role="tabpanel"
		aria-labelledby="tab3">
		<section class="gridCardWrapper">
		<?php while (have_rows('grid_card_loop_wednesday')) : the_row();

			// vars
			$grid_card_item = get_sub_field('grid_card_item');
			$grid_card_item_id = get_sub_field('grid_card_item_id');
			$grid_card_item_img = get_sub_field('grid_card_item_img');
			$grid_card_item_desc = get_sub_field('grid_card_item_desc');
			$grid_card_item_link = get_sub_field('grid_card_item_link');
			$grid_card_item_link_text = get_sub_field('grid_card_item_link_text');
			$grid_card_item_time = get_sub_field('grid_card_item_time');
			$grid_card_item_host = get_sub_field('grid_card_item_host');
			$grid_card_item_prod = get_sub_field('grid_card_item_prod');
			$grid_card_item_ampm = get_sub_field('grid_card_item_ampm');

			?>
			<div class="gridCardLoop" >

					<div class="gridCardImg">

						<img src="<?php echo $grid_card_item_img['url']; ?>" alt="<?php echo $grid_card_item_img['alt']; ?>" />
					</div><!-- gridCardImg -->
					<div class="gridContent">
						<div class="gridCardItem">
							<h3>
								<?php echo $grid_card_item; ?>
							</h3>
							<h5>
							<?php echo $grid_card_item_time; ?>
							<span>
							<?php echo $grid_card_item_ampm; ?>
</span>
							</h5>



						</div> <!-- gridCardItem -->

						<div class="gridCardItemLink">
							<a role="button" on="tap:AMP.setState({showLightbox<?php echo $grid_card_item_id; ?>: true})">
								<?php echo $grid_card_item_link_text; ?>
</a>
						</div>
						<!-- gridCardItemLink -->

					</div> <!-- gridContent -->
					<amp-lightbox id="<?php echo $grid_card_item_id; ?>" [open]="showLightbox<?php echo $grid_card_item_id; ?>" layout="nodisplay" on="lightboxClose:AMP.setState({showLightbox<?php echo $grid_card_item_id; ?>: false})">
							<div class="gridCardDesc lightbox" role="button" tabindex="0" on="tap:<?php echo $grid_card_item_id; ?>.close">
								<a class="closeX" role="button" on="tap:<?php echo $grid_card_item_id; ?>.close">X</a>
							<div class="gridCardImgLightbox">

						<img src="<?php echo $grid_card_item_img['url']; ?>" alt="<?php echo $grid_card_item_img['alt']; ?>" />
					</div><!-- gridCardImgLightbox -->
							<div class="showContent">
								<h4>Hosted by: <?php echo $grid_card_item_host; ?></h4>
							<h5>Produced by: <?php echo $grid_card_item_prod; ?> </h5>
								<p>
									<?php echo $grid_card_item_desc; ?>
								</p>
							</div>
							<!-- <div class="ctaShow">
								<button>
									More Info
								</button>
							</div> -->
							<!-- ctaShow -->


							</div> <!-- gridCardDesc -->
						</amp-lightbox><!-- id="$grid_card_item_id;" -->

			</div><!-- gridCardLoop -->
		<?php endwhile; ?>
	</section> <!-- end .gridCardWrapper -->
	</div><!-- tabpanel3 -->
		<div id="tab4"
		role="tab"
		aria-controls="tabpanel4"
		option>Thursday</div>
	<div id="tabpanel4"
		role="tabpanel"
		aria-labelledby="tab4">
		<section class="gridCardWrapper">
		<?php while (have_rows('grid_card_loop_thursday')) : the_row();

			// vars
			$grid_card_item = get_sub_field('grid_card_item');
			$grid_card_item_id = get_sub_field('grid_card_item_id');
			$grid_card_item_img = get_sub_field('grid_card_item_img');
			$grid_card_item_desc = get_sub_field('grid_card_item_desc');
			$grid_card_item_link = get_sub_field('grid_card_item_link');
			$grid_card_item_link_text = get_sub_field('grid_card_item_link_text');
			$grid_card_item_time = get_sub_field('grid_card_item_time');
			$grid_card_item_host = get_sub_field('grid_card_item_host');
			$grid_card_item_prod = get_sub_field('grid_card_item_prod');
			$grid_card_item_ampm = get_sub_field('grid_card_item_ampm');

			?>
			<div class="gridCardLoop" >

					<div class="gridCardImg">

						<img src="<?php echo $grid_card_item_img['url']; ?>" alt="<?php echo $grid_card_item_img['alt']; ?>" />
					</div><!-- gridCardImg -->
					<div class="gridContent">
						<div class="gridCardItem">
							<h3>
								<?php echo $grid_card_item; ?>
							</h3>
							<h5>
							<?php echo $grid_card_item_time; ?>
							<span>
							<?php echo $grid_card_item_ampm; ?>
</span>
							</h5>



						</div> <!-- gridCardItem -->

						<div class="gridCardItemLink">
							<a role="button" on="tap:AMP.setState({showLightbox<?php echo $grid_card_item_id; ?>: true})">
								<?php echo $grid_card_item_link_text; ?>
</a>
						</div>
						<!-- gridCardItemLink -->

					</div> <!-- gridContent -->
					<amp-lightbox id="<?php echo $grid_card_item_id; ?>" [open]="showLightbox<?php echo $grid_card_item_id; ?>" layout="nodisplay" on="lightboxClose:AMP.setState({showLightbox<?php echo $grid_card_item_id; ?>: false})">
							<div class="gridCardDesc lightbox" role="button" tabindex="0" on="tap:<?php echo $grid_card_item_id; ?>.close">
								<a class="closeX" role="button" on="tap:<?php echo $grid_card_item_id; ?>.close">X</a>
							<div class="gridCardImgLightbox">

						<img src="<?php echo $grid_card_item_img['url']; ?>" alt="<?php echo $grid_card_item_img['alt']; ?>" />
					</div><!-- gridCardImgLightbox -->
							<div class="showContent">
								<h4>Hosted by: <?php echo $grid_card_item_host; ?></h4>
							<h5>Produced by: <?php echo $grid_card_item_prod; ?> </h5>
								<p>
									<?php echo $grid_card_item_desc; ?>
								</p>
							</div>
							<!-- <div class="ctaShow">
								<button>
									More Info
								</button>
							</div> -->
							<!-- ctaShow -->


							</div> <!-- gridCardDesc -->
						</amp-lightbox><!-- id="$grid_card_item_id;" -->

			</div><!-- gridCardLoop -->
		<?php endwhile; ?>
	</section> <!-- end .gridCardWrapper -->
	 </div><!-- tabpanel4 -->
	<div id="tab5"
		role="tab"
		aria-controls="tabpanel5"
		option>Friday</div>
	<div id="tabpanel5"
		role="tabpanel"
		aria-labelledby="tab5">
		<section class="gridCardWrapper">
		<?php while (have_rows('grid_card_loop_friday')) : the_row();

			// vars
			$grid_card_item = get_sub_field('grid_card_item');
			$grid_card_item_id = get_sub_field('grid_card_item_id');
			$grid_card_item_img = get_sub_field('grid_card_item_img');
			$grid_card_item_desc = get_sub_field('grid_card_item_desc');
			$grid_card_item_link = get_sub_field('grid_card_item_link');
			$grid_card_item_link_text = get_sub_field('grid_card_item_link_text');
			$grid_card_item_time = get_sub_field('grid_card_item_time');
			$grid_card_item_host = get_sub_field('grid_card_item_host');
			$grid_card_item_prod = get_sub_field('grid_card_item_prod');
			$grid_card_item_ampm = get_sub_field('grid_card_item_ampm');

			?>
			<div class="gridCardLoop" >

					<div class="gridCardImg">

						<img src="<?php echo $grid_card_item_img['url']; ?>" alt="<?php echo $grid_card_item_img['alt']; ?>" />
					</div><!-- gridCardImg -->
					<div class="gridContent">
						<div class="gridCardItem">
							<h3>
								<?php echo $grid_card_item; ?>
							</h3>
							<h5>
							<?php echo $grid_card_item_time; ?>
							<span>
							<?php echo $grid_card_item_ampm; ?>
</span>
							</h5>



						</div> <!-- gridCardItem -->

						<div class="gridCardItemLink">
							<a role="button" on="tap:AMP.setState({showLightbox<?php echo $grid_card_item_id; ?>: true})">
								<?php echo $grid_card_item_link_text; ?>
</a>
						</div>
						<!-- gridCardItemLink -->

					</div> <!-- gridContent -->
					<amp-lightbox id="<?php echo $grid_card_item_id; ?>" [open]="showLightbox<?php echo $grid_card_item_id; ?>" layout="nodisplay" on="lightboxClose:AMP.setState({showLightbox<?php echo $grid_card_item_id; ?>: false})">
							<div class="gridCardDesc lightbox" role="button" tabindex="0" on="tap:<?php echo $grid_card_item_id; ?>.close">
								<a class="closeX" role="button" on="tap:<?php echo $grid_card_item_id; ?>.close">X</a>
							<div class="gridCardImgLightbox">

						<img src="<?php echo $grid_card_item_img['url']; ?>" alt="<?php echo $grid_card_item_img['alt']; ?>" />
					</div><!-- gridCardImgLightbox -->
							<div class="showContent">
								<h4>Hosted by: <?php echo $grid_card_item_host; ?></h4>
							<h5>Produced by: <?php echo $grid_card_item_prod; ?> </h5>
								<p>
									<?php echo $grid_card_item_desc; ?>
								</p>
							</div>
							<!-- <div class="ctaShow">
								<button>
									More Info
								</button>
							</div> -->
							<!-- ctaShow -->


							</div> <!-- gridCardDesc -->
						</amp-lightbox><!-- id="$grid_card_item_id;" -->

			</div><!-- gridCardLoop -->
		<?php endwhile; ?>
	</section> <!-- end .gridCardWrapper -->
	</div><!-- tabpanel5 -->
	<div id="tab6"
		role="tab"
		aria-controls="tabpanel6"
		option>Saturday</div>
	<div id="tabpanel6"
		role="tabpanel"
		aria-labelledby="tab6">
		<section class="gridCardWrapper">
		<?php while (have_rows('grid_card_loop_saturday')) : the_row();

			// vars
			$grid_card_item = get_sub_field('grid_card_item');
			$grid_card_item_id = get_sub_field('grid_card_item_id');
			$grid_card_item_img = get_sub_field('grid_card_item_img');
			$grid_card_item_desc = get_sub_field('grid_card_item_desc');
			$grid_card_item_link = get_sub_field('grid_card_item_link');
			$grid_card_item_link_text = get_sub_field('grid_card_item_link_text');
			$grid_card_item_time = get_sub_field('grid_card_item_time');
			$grid_card_item_host = get_sub_field('grid_card_item_host');
			$grid_card_item_prod = get_sub_field('grid_card_item_prod');
			$grid_card_item_ampm = get_sub_field('grid_card_item_ampm');

			?>
			<div class="gridCardLoop" >

					<div class="gridCardImg">

						<img src="<?php echo $grid_card_item_img['url']; ?>" alt="<?php echo $grid_card_item_img['alt']; ?>" />
					</div><!-- gridCardImg -->
					<div class="gridContent">
						<div class="gridCardItem">
							<h3>
								<?php echo $grid_card_item; ?>
							</h3>
							<h5>
							<?php echo $grid_card_item_time; ?>
							<span>
							<?php echo $grid_card_item_ampm; ?>
</span>
							</h5>



						</div> <!-- gridCardItem -->

						<div class="gridCardItemLink">
							<a role="button" on="tap:AMP.setState({showLightbox<?php echo $grid_card_item_id; ?>: true})">
								<?php echo $grid_card_item_link_text; ?>
</a>
						</div>
						<!-- gridCardItemLink -->

					</div> <!-- gridContent -->
					<amp-lightbox id="<?php echo $grid_card_item_id; ?>" [open]="showLightbox<?php echo $grid_card_item_id; ?>" layout="nodisplay" on="lightboxClose:AMP.setState({showLightbox<?php echo $grid_card_item_id; ?>: false})">
							<div class="gridCardDesc lightbox" role="button" tabindex="0" on="tap:<?php echo $grid_card_item_id; ?>.close">
								<a class="closeX" role="button" on="tap:<?php echo $grid_card_item_id; ?>.close">X</a>
							<div class="gridCardImgLightbox">

						<img src="<?php echo $grid_card_item_img['url']; ?>" alt="<?php echo $grid_card_item_img['alt']; ?>" />
					</div><!-- gridCardImgLightbox -->
							<div class="showContent">
								<h4>Hosted by: <?php echo $grid_card_item_host; ?></h4>
							<h5>Produced by: <?php echo $grid_card_item_prod; ?> </h5>
								<p>
									<?php echo $grid_card_item_desc; ?>
								</p>
							</div>
							<!-- <div class="ctaShow">
								<button>
									More Info
								</button>
							</div> -->
							<!-- ctaShow -->


							</div> <!-- gridCardDesc -->
						</amp-lightbox><!-- id="$grid_card_item_id;" -->

			</div><!-- gridCardLoop -->
		<?php endwhile; ?>
	</section> <!-- end .gridCardWrapper -->
	</div><!-- tabpanel6 -->
		<div id="tab7"
		role="tab"
		aria-controls="tabpanel7"
		option>Sunday</div>
	<div id="tabpanel7"
		role="tabpanel"
		aria-labelledby="tab7">
		<section class="gridCardWrapper">
		<?php while (have_rows('grid_card_loop_sunday')) : the_row();

			// vars
			$grid_card_item = get_sub_field('grid_card_item');
			$grid_card_item_id = get_sub_field('grid_card_item_id');
			$grid_card_item_img = get_sub_field('grid_card_item_img');
			$grid_card_item_desc = get_sub_field('grid_card_item_desc');
			$grid_card_item_link = get_sub_field('grid_card_item_link');
			$grid_card_item_link_text = get_sub_field('grid_card_item_link_text');
			$grid_card_item_time = get_sub_field('grid_card_item_time');
			$grid_card_item_host = get_sub_field('grid_card_item_host');
			$grid_card_item_prod = get_sub_field('grid_card_item_prod');
			$grid_card_item_ampm = get_sub_field('grid_card_item_ampm');

			?>
			<div class="gridCardLoop" >

					<div class="gridCardImg">

						<img src="<?php echo $grid_card_item_img['url']; ?>" alt="<?php echo $grid_card_item_img['alt']; ?>" />
					</div><!-- gridCardImg -->
					<div class="gridContent">
						<div class="gridCardItem">
							<h3>
								<?php echo $grid_card_item; ?>
							</h3>
							<h5>
							<?php echo $grid_card_item_time; ?>
							<span>
							<?php echo $grid_card_item_ampm; ?>
</span>
							</h5>



						</div> <!-- gridCardItem -->

						<div class="gridCardItemLink">
							<a role="button" on="tap:AMP.setState({showLightbox<?php echo $grid_card_item_id; ?>: true})">
								<?php echo $grid_card_item_link_text; ?>
</a>
						</div>
						<!-- gridCardItemLink -->

					</div> <!-- gridContent -->
					<amp-lightbox id="<?php echo $grid_card_item_id; ?>" [open]="showLightbox<?php echo $grid_card_item_id; ?>" layout="nodisplay" on="lightboxClose:AMP.setState({showLightbox<?php echo $grid_card_item_id; ?>: false})">
							<div class="gridCardDesc lightbox" role="button" tabindex="0" on="tap:<?php echo $grid_card_item_id; ?>.close">
								<a class="closeX" role="button" on="tap:<?php echo $grid_card_item_id; ?>.close">X</a>
							<div class="gridCardImgLightbox">

						<img src="<?php echo $grid_card_item_img['url']; ?>" alt="<?php echo $grid_card_item_img['alt']; ?>" />
					</div><!-- gridCardImgLightbox -->
							<div class="showContent">
								<h4>Hosted by: <?php echo $grid_card_item_host; ?></h4>
							<h5>Produced by: <?php echo $grid_card_item_prod; ?> </h5>
								<p>
									<?php echo $grid_card_item_desc; ?>
								</p>
							</div>
							<!-- <div class="ctaShow">
								<button>
									More Info
								</button>
							</div> -->
							<!-- ctaShow -->


							</div> <!-- gridCardDesc -->
						</amp-lightbox><!-- id="$grid_card_item_id;" -->

			</div><!-- gridCardLoop -->
		<?php endwhile; ?>
	</section> <!-- end .gridCardWrapper -->
	</div><!-- tabpanel7 -->
	</amp-selector>
	<?php endwhile;  wp_reset_query(); ?>
</div><!--programTabsWrapper -->

