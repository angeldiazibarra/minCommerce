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

    echo '<a href="'.$cart_url.'"><span class="label label-default"><i class="fa fa-shopping-cart" aria-hidden="true"></i> ';
    // if multiple products in cart
    if($qty>1){
          echo $qty.' items';
    }
    // if single product in cart
    if($qty==1){
          echo '1 item';
    }
    echo  ' - '.$total.'</span></a>';
}

function mincommerce_featured_products() {
    $args = array(  
        'post_type' => 'product',  
        'meta_key' => '_featured',  
        'meta_value' => 'yes',  
        'posts_per_page' => 1  
    );  

    $featured_query = new WP_Query( $args );  

    if ($featured_query->have_posts()) :   

        while ($featured_query->have_posts()) :   

            $featured_query->the_post();  

            $product = get_product( $featured_query->post->ID );  

            // Output product information here  
            var_dump($product);

        endwhile;  

    endif;  

    wp_reset_query(); // Remember to reset  

}

add_action( 'init', 'register_my_menus' );

remove_filter('the_excerpt', 'wpautop');
remove_filter('term_description','wpautop');
remove_filter('category_description','wpautop');
remove_filter('tag_description','wpautop');