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
    array( 'header-menu' => __( 'Header Menu' ), 'first-footer-menu' => __( 'First Footer Menu' ), 'second-footer-menu' => __( 'Second Footer Menu' ) )
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

    echo '<a href="'.$cart_url.'"><i class="fa fa-shopping-cart" aria-hidden="true"></i> ';
    // if multiple products in cart
    if($qty>1){
          echo $qty.' items';
    }
    // if single product in cart
    if($qty==1){
          echo '1 item';
    }
    if($qty==0){
          echo '0 items';
    }
    echo  ' - '.$total.'</a>';
}

add_action( 'init', 'register_my_menus' );

remove_filter('the_excerpt', 'wpautop');
remove_filter('term_description','wpautop');
remove_filter('category_description','wpautop');
remove_filter('tag_description','wpautop');