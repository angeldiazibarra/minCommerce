<?php

if ( function_exists('register_sidebar') )
	register_sidebar(array(
	'before_widget' => '',
	'after_widget' => '',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	));
	
add_custom_background();

add_theme_support( 'automatic-feed-links' );

function register_my_menus() {
  register_nav_menus(
    array( 'header-menu' => __( 'Header Menu' ) )
  );
}
add_action( 'init', 'register_my_menus' );

remove_filter('the_excerpt', 'wpautop');
remove_filter('term_description','wpautop');
remove_filter('category_description','wpautop');
remove_filter('tag_description','wpautop');

?>