<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php
	if ( ! wp_rig()->is_amp() ) {
		?>
		<script>document.documentElement.classList.remove( 'no-js' );</script>
		<?php
	}
	?>

	<?php wp_head(); ?>
	<!-- AMP Analytics --><script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>
</head>

<body <?php body_class(); ?>>

<!-- Begin "Facebook Pixel for AMP" || Help center -->
<!-- Insert in Settings->HTML/CSS->Body -->
<!-- IN:20200120-09-3 -->
<amp-analytics type="facebookpixel" id="facebook-pixel">
<script type="application/json">
{
    "vars": {
        "pixelId": "230508921340939"
    },
    "triggers": {
        "trackPageview": {
            "on": "visible",
            "request": "pageview"
        },
        "formSubmit": {
            "on": "amp-form-submit-success",
            "request": "event",
            "vars": {
            "eventName": "form-submission"
            }
        },
        "buttonClick1": {
        "selector":".listenLive",
            "on": "click",
            "request": "event",
            "vars": {
            "eventName": "listen live button click"
            }
		},
		"buttonClick2": {
        "selector":".kwvhX",
            "on": "click",
            "request": "event",
            "vars": {
            "eventName": "listen live-merchandise button click"
            }
        },
		"buttonClick3": {
        "selector":".donateNow",
            "on": "click",
            "request": "event",
            "vars": {
            "eventName": "donate button click"
            }
        },
		"buttonClick4": {
        "selector":".gridCardItemLink",
            "on": "click",
            "request": "event",
            "vars": {
            "eventName": "Support or App or Volunteer KWVH click"
            }
        },
		"buttonClick5": {
        "selector":".liveLink",
            "on": "click",
            "request": "event",
            "vars": {
            "eventName": "listen live next to logo menu top button click"
            }
        },
		"buttonClick6": {
        "selector":".pow-button",
            "on": "click",
            "request": "event",
            "vars": {
            "eventName": "pet of the week learn more button click"
            }
        },
		"buttonClick7": {
        "selector":".block-a-button",
            "on": "click",
            "request": "event",
            "vars": {
            "eventName": "block a button click"
            }
        },
		"buttonClick8": {
        "selector":".block-a-image",
            "on": "click",
            "request": "event",
            "vars": {
            "eventName": "block-a-image click"
            }
        },
		"buttonClick9": {
        "selector":".block-2-grid-card-item-link-text-lightbox-open",
            "on": "click",
            "request": "event",
            "vars": {
            "eventName": "block-2-grid-card-item-link-text-lightbox-open click"
            }
        },
		"buttonClick10": {
        "selector":".facebook-icon-link",
            "on": "click",
            "request": "event",
            "vars": {
            "eventName": "facebook-icon-link click"
            }
        },
		"buttonClick11": {
        "selector":".instagram-icon-link",
            "on": "click",
            "request": "event",
            "vars": {
            "eventName": "instagram-icon-link click"
            }
        },
		"buttonClick12": {
        "selector":".twitter-icon-link",
            "on": "click",
            "request": "event",
            "vars": {
            "eventName": "twitter-icon-link click"
            }
        }
    }
}
</script>
</amp-analytics>
<!-- End "Facebook Pixel for AMP" || Help center -->
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'wp-rig' ); ?></a>

	<header id="masthead" class="site-header">
		<?php get_template_part( 'template-parts/header/custom_header' ); ?>

		<?php get_template_part( 'template-parts/header/branding' ); ?>

		<?php get_template_part( 'template-parts/header/navigation' ); ?>
	</header><!-- #masthead -->
