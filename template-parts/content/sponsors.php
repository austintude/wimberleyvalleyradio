<?php
/**
 * Template part for sponsors
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

$block4_sectioncards	= get_field('block4_sectioncards');


?>

<section class="sponsors" id="introduction">
	<div class="sectionHeader">
					<h2 class="serviceTitle" id="services">KWVH Thanks its Corporate Sponsors</h2>
</div>

                    <div class="sectionCardsBlock">
					<?php $underwriterloop = new \WP_Query( array( 'post_type' => 'underwriters', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

<?php while( $underwriterloop->have_posts() ) : $underwriterloop->the_post();
$underwriter_link			= get_field('underwriter_link');
?>


						<div class="sectionCard" id="<?php echo $sectioncard_id; ?>">
						<h3 class="mb1"><?php the_title(); ?></h3>
						<a
                                    class="ampstart-btn caps text-decoration-none inline-block"
									href="<?php echo $underwriter_link; ?>">
									<?php the_post_thumbnail(); ?>
							</a>
						</div>
						<?php endwhile;  wp_reset_query(); ?>



                    </div>
                </section>
