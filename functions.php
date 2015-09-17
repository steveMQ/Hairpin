<?php

add_action('after_setup_theme', 'register_hairpin_nav_menus');
function register_hairpin_nav_menus() {
  register_nav_menus(array(
  	'footer' => 'Footer Menu',
  ));
}

function new_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

include( 'inc/twitter_gettweets.php' );
include('inc/portfolio-navigation.php');
