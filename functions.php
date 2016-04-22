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

function mincommerce_cart_button() {
    global $woocommerce;

    // get cart quantity
    $qty = $woocommerce->cart->get_cart_contents_count();

    // get cart total
    $total = $woocommerce->cart->get_cart_total();

    // get cart url
    $cart_url = $woocommerce->cart->get_cart_url();

    // if multiple products in cart
    if($qty>1){
          echo '<a href="'.$cart_url.'">'.$qty.' productos | '.$total.'</a>';
    }
    // if single product in cart
    if($qty==1){
          echo '<a href="'.$cart_url.'">1 producto | '.$total.'</a>';
    }
}

add_action( 'init', 'register_my_menus' );

remove_filter('the_excerpt', 'wpautop');
remove_filter('term_description','wpautop');
remove_filter('category_description','wpautop');
remove_filter('tag_description','wpautop');