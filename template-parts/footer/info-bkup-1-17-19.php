<?php
/**
 * Template part for displaying the footer info
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>

<div class="site-info">
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
	<span class="sep"> | </span>
	<?php
	/* translators: Theme name. */
	printf( esc_html__( 'Theme: %s by Daniel Bisett.', 'wp-rig' ), '<a href="' . esc_url( 'https://github.com/austintude/wflag.git' ) . '">WFLAG Org</a>' );

	if ( function_exists( 'the_privacy_policy_link' ) ) {
		the_privacy_policy_link( '<span class="sep"> | </span>' );
	}
	?>
</div>
</div>

</div><!-- .site-info -->
