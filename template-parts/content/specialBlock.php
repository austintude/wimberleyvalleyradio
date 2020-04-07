<?php
/**
 * Template part for Specials Block
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;



?>

<div class="specialsBlock">
<div class="specials">
	<h2>
		Current Specials
	</h2>
<?php $loop = new \WP_Query( array( 'post_type' => 'specials', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

				<?php while( $loop->have_posts() ) : $loop->the_post();
				$special_title	= get_field('special_title');
				$special_img	= get_field('special_img');
				$special_link	= get_field('special_link');
				?>
				<div class="specialsCard" id="">
				<h3 class="mb1"><?php echo $special_title; ?></h3>
						<amp-img lightbox src="<?php echo $special_img['url']; ?>" width="600"
										height="800" layout="responsive" alt="<?php echo $special_img['alt']; ?>" class=""></amp-img>

                            <!-- <div class="ctaButton"><a
                                    class="ampstart-btn caps text-decoration-none inline-block"
                                    href="<?php echo $special_link; ?>">Learn More</a></div> -->
						</div>
				<?php endwhile; wp_reset_query(); ?>

</div>
</div>
