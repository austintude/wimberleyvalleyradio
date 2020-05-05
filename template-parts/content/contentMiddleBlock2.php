<?php
/**
 * Template part for contentMiddleBlock2
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

$nominate_button_text	= get_field('nominate_button_text');
$nomintate_block_title	= get_field('nomintate_block_title');
$nomintate_link_url	= get_field('nomintate_link_url');


?>

	<div class="contentMiddleBlock2">
		<!-- <div class="contentMiddleBlockTitle">
			<?php echo $contentmiddleblock3title; ?>
		</div> -->
		<!-- end .contentMiddleBlockTitle -->
		<!-- <div class="contentMiddleBlockSubTitle">
			<?php echo $contentmiddleblock3subtitle; ?>
		</div> -->
		<!-- end .contentMiddleBlockSubTitle -->
		<div class="contentMiddleBlockcontent">
			<h3>
			<?php echo $nomintate_block_title; ?>

			</h3>
			<amp-lightbox id="my-lightbox" layout="nodisplay">
    <div class="lightbox" on="tap:my-lightbox.close" role="button" tabindex="0">

      <iframe width="600" height="600"
              sandbox="allow-scripts allow-forms allow-same-origin allow-popups" scrolling="auto"
              src="<?php echo $nomintate_link_url; ?>">
  </iframe>
    </div>
  </amp-lightbox>
						<button on="tap:my-lightbox" role="button" tabindex="0" id="freeEstimate" class="btn btn-success btn-lg btn-block" aria-label="<?php echo $nominate_button_text; ?>" >
						<?php echo $nominate_button_text; ?>
						</button>
		<!-- <div class="ctaButton">
			<a href="<?php echo $block3_cta_url; ?>" class="btn btn-lg btn-danger" role="button" tabindex="0"><?php echo $block3_cta_text; ?> »</a>
		</div> -->
		<!-- ctaButton -->
	</div><!-- end .contentMiddleBlockcontent -->

	</div><!-- end .contentMiddleBlock -->

