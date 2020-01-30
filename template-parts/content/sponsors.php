<?php
/**
 * Template part for sponsors
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

$block4_sectioncards	= get_field('block4_sectioncards');


?>

<section class="block4" id="introduction">
	<div class="sectionHeader">
					<h2 class="serviceTitle" id="services">WFLAG Thanks its Corporate Sponsors</h2>
</div>

                    <div class="sectionCardsBlock">

					<?php while (have_rows('block4_sectioncards')) : the_row();
						//vars
						$sectioncard_id	= get_sub_field('sectioncard_id');
						$sectioncard_title	= get_sub_field('sectioncard_title');
						$sectioncard_img	= get_sub_field('sectioncard_img');
						$sectioncard_link	= get_sub_field('sectioncard_link');
					?>
						<div class="sectionCard" id="<?php echo $sectioncard_id; ?>">
						<h3 class="mb1"><?php echo $sectioncard_title; ?></h3>
						<a
                                    class="ampstart-btn caps text-decoration-none inline-block"
									href="<?php echo $sectioncard_link; ?>">
									<img src="<?php echo $sectioncard_img['url']; ?>" alt="<?php echo $sectioncard_img['alt']; ?>" class=""/>
							</a>
						</div>
						<?php endwhile; ?>




                    </div>
                </section>
