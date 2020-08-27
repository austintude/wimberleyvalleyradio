<?php
function dotiavatar_function() {
	return '<img src="http://wprigkwvh.local/wp-content/uploads/2020/02/cropped-KWVH-circle-logo-2020-min-2.png"
   alt="doti-avatar" width="96" height="96" class="left-align" />';
}
add_shortcode('dotiavatar', 'dotiavatar_function');


function dotirating_function( $atts = array() ) {

	// set up default parameters
	extract(shortcode_atts(array(
	 'rating' => '5'
	), $atts));

	return "<img src=\"//dayoftheindie.com/wp-content/uploads/$rating-star.png\"
	alt=\"doti-rating\" width=\"130\" height=\"188\" class=\"left-align\" />";
  }
  add_shortcode('dotirating', 'dotirating_function');
?>

