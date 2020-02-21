<?php
/**
 * Template part for blocka
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;


?>
<section class="blocka miscBlock">
<?php $miscblockloop = new \WP_Query( array( 'post_type' => 'miscblockloop', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

<?php while( $miscblockloop->have_posts() ) : $miscblockloop->the_post();
			$blocka			= get_field('blocka');
if( have_rows('blocka') ):
    while( have_rows('blocka') ): the_row();
	$misc_block_1			= get_field('misc_block_1');
        // Layout 1.
        if( get_row_layout() == 'misc_block_1' ):

            // Layout 1 value.
			$block_img				= get_sub_field('block_img');
			$block_title			= get_sub_field('block_title');
			$block_subtitle			= get_sub_field('block_subtitle');
			$block_content			= get_sub_field('block_content');
			$block_cta_text			= get_sub_field('block_cta_text');
			$block_cta_link			= get_sub_field('block_cta_link');

?>
<a href="<?php echo $block_cta_link; ?>" rel="noreferrer" target="_blank">
<img src="<?php echo $block_img['url']; ?>"
			alt="<?php echo $block_img['alt']; ?>">
</a>
<?php
        endif;
    endwhile;
endif;
endwhile; ?>

</section> <!-- end .blocka -->
