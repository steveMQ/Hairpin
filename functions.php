<?php

add_action('after_setup_theme', 'register_hairpin_nav_menus');
function register_hairpin_nav_menus() {
  register_nav_menus(array(
  	'footer' => 'Footer Menu',
  ));
}
