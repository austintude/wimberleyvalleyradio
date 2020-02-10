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
		aria-labelledby="tab1">Monday content...
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
			$grid_card_item_ampm = get_sub_field('grid_card_item_ampm');

			?>
			<div class="gridCardLoop" id="<?php echo $grid_card_item_id; ?>">

					<div class="gridCardImg">
						<img src="<?php echo $grid_card_item_img['url']; ?>" alt="<?php echo $grid_card_item_img['alt']; ?>" />
					</div><!-- gridCardImg -->
					<div class="gridContent">
						<div class="gridCardItem">
							<h3>
								<?php echo $grid_card_item; ?>
							</h3>
						</div> <!-- gridCardItem -->
						<div class="gridCardDesc">
							<p>
								<?php echo $grid_card_item_desc; ?>
							</p>
							<h5>
							<?php echo $grid_card_item_time; ?>
							</h5>
							<h6>
							<?php echo $grid_card_item_ampm; ?>
							</h6>
						</div> <!-- gridCardDesc -->
						<?php if ($grid_card_item_link != null) { ?>
						<div class="gridCardItemLink">
							<a href="<?php echo $grid_card_item_link; ?>">
								<?php echo $grid_card_item_link_text; ?>
							</a>
						</div>
						<!-- gridCardItemLink -->
						<?php } ?>
					</div> <!-- gridContent -->

			</div><!-- gridCardLoop -->
		<?php endwhile; ?>
	</section> <!-- end .gridCardWrapper -->
</div>
	<div id="tab2"
		role="tab"
		aria-controls="tabpanel2"
		option>Tuesday</div>
	<div id="tabpanel2"
		role="tabpanel"
		aria-labelledby="tab2">Tuesday content... </div>
	<div id="tab3"
		role="tab"
		aria-controls="tabpanel3"
		option>Wednesday</div>
	<div id="tabpanel3"
		role="tabpanel"
		aria-labelledby="tab3">Wednesday content... </div>
		<div id="tab4"
		role="tab"
		aria-controls="tabpanel4"
		option>Thursday</div>
	<div id="tabpanel4"
		role="tabpanel"
		aria-labelledby="tab4">Thursday content... </div>
	<div id="tab5"
		role="tab"
		aria-controls="tabpanel5"
		option>Friday</div>
	<div id="tabpanel5"
		role="tabpanel"
		aria-labelledby="tab5">Friday content... </div>
	<div id="tab6"
		role="tab"
		aria-controls="tabpanel6"
		option>Saturday</div>
	<div id="tabpanel6"
		role="tabpanel"
		aria-labelledby="tab7">Saturday content... </div>
		<div id="tab7"
		role="tab"
		aria-controls="tabpanel7"
		option>Sunday</div>
	<div id="tabpanel7"
		role="tabpanel"
		aria-labelledby="tab7">Sunday content... </div>
	</amp-selector>
	<?php endwhile;  wp_reset_query(); ?>
</div><!--programTabsWrapper -->

