<?php
/**
 * Template part for gridCardWrapper
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

$grid_card_loop		= get_field('grid_card_loop');

?>
	<section class="gridCardWrapper">
		<?php while (have_rows('grid_card_loop')) : the_row();

			// vars
			$grid_card_item = get_sub_field('grid_card_item');
			$grid_card_item_id = get_sub_field('grid_card_item_id');
			$grid_card_item_img = get_sub_field('grid_card_item_img');
			$grid_card_item_desc = get_sub_field('grid_card_item_desc');
			$grid_card_item_link = get_sub_field('grid_card_item_link');
			$grid_card_item_link_text = get_sub_field('grid_card_item_link_text');

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
						</div> <!-- gridCardDesc -->
						<div class="gridCardItemLink">
							<a href="<?php echo $grid_card_item_link; ?>">
								<?php echo $grid_card_item_link_text; ?>
							</a>
						</div><!-- gridCardItemLink -->
					</div> <!-- gridContent -->

			</div><!-- gridCardLoop -->
		<?php endwhile; ?>
	</section> <!-- end .gridCardWrapper -->

