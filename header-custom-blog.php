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
<!-- Google Tag Manager -->
<amp-analytics config="https://www.googletagmanager.com/amp.json?id=GTM-KVBZPM6&gtm.url=SOURCE_URL" data-credentials="include"></amp-analytics>
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
        "buttonClick": {
        "selector":".listenLive",
            "on": "click",
            "request": "event",
            "vars": {
            "eventName": "listen live button click"
            }
		},
		"buttonClick": {
        "selector":".kwvhX",
            "on": "click",
            "request": "event",
            "vars": {
            "eventName": "listen live-merchandise button click"
            }
        },
		"buttonClick": {
        "selector":".donateNow",
            "on": "click",
            "request": "event",
            "vars": {
            "eventName": "donate button click"
            }
        },
		"buttonClick": {
        "selector":".gridCardItemLink",
            "on": "click",
            "request": "event",
            "vars": {
            "eventName": "Support or App or Volunteer KWVH click"
            }
        },
		"buttonClick": {
        "selector":".liveLink",
            "on": "click",
            "request": "event",
            "vars": {
            "eventName": "listen live next to logo menu top button click"
            }
        },
		"buttonClick": {
        "selector":".wp-block-button__link",
            "on": "click",
            "request": "event",
            "vars": {
            "eventName": "wp-block-button__link donate here click"
            }
        },
		"buttonClick": {
        "selector":".facebook-icon-link",
            "on": "click",
            "request": "event",
            "vars": {
            "eventName": "facebook-icon-link click"
            }
        },
		"buttonClick": {
        "selector":".instagram-icon-link",
            "on": "click",
            "request": "event",
            "vars": {
            "eventName": "instagram-icon-link click"
            }
        },
		"buttonClick": {
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
		<?php get_template_part( 'template-parts/header/custom_header_custom' ); ?>

		<?php get_template_part( 'template-parts/header/custom-blog-branding' ); ?>

		<?php get_template_part( 'template-parts/header/navigation' ); ?>
	</header><!-- #masthead -->
