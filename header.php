<!DOCTYPE html>
<html lang="es"> 

    <head>

        <meta charset="<?php bloginfo('charset'); ?>" />
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        
        <title><?php if ( is_category() ) { single_cat_title(); ?> | categoría<?php
        } else if ( is_tag() ) { ?><?php single_tag_title(); ?> | etiqueta<?php
        } else { single_post_title(); } ?></title>       

        <?php if (is_category()) { ?>

            <META NAME="ROBOTS" CONTENT="NOINDEX, FOLLOW"><?php } ?>		
        <?php if (is_tag()) { ?>

            <META NAME="ROBOTS" CONTENT="NOINDEX, FOLLOW"><?php } ?>	

        <!--[if lt IE 9]>
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_directory'); ?>/resources/css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_directory'); ?>/resources/css/font-awesome.css" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_directory'); ?>/resources/css/style.css" />

        <link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" type="image/x-icon"/>
        <link rel="apple-touch-icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" /> 

        <meta name="viewport" content="initial-scale=1, width=device-width, maximum-scale=1"/>

        <?php
        if (is_singular() && get_option('thread_comments')) {
            wp_enqueue_script('comment-reply');
        }

        wp_head();
        ?>

    </head>

    <body>

        <header>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        
                        <nav class="head-menu">
                            <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
                        </nav>   
                        
                        <?php
global $woocommerce;

// get cart quantity
$qty = $woocommerce->cart->get_cart_contents_count();

// get cart total
$total = $woocommerce->cart->get_cart_total();

// get cart url
$cart_url = $woocommerce->cart->get_cart_url();

// if multiple products in cart
if($qty>1)
      echo '<a href="'.$cart_url.'">'.$qty.' productos | '.$total.'</a>';

// if single product in cart
if($qty==1)
      echo '<a href="'.$cart_url.'">1 producto | '.$total.'</a>';

?>
                        
                    </div>
                </div>
            </div>
        </header>