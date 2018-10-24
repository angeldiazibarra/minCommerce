<?php 

/**
 * The default template for displaying all pages.
 *
 * @package minCommerce
 */

include_once 'header_page.php'; ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <header style="height: 450px; background-position: center; background-repeat: no-repeat; background-size: cover; background-image: url('<?php the_post_thumbnail_url('full'); ?>');">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 eudomus">
                        <a href="<?php echo site_url(); ?>" ><img src="<?php bloginfo('stylesheet_directory'); ?>/resources/img/eudomus-120.png" alt="eudomus logo" /></a>
                    </div>

                    <div class="col-md-8 head-menu">
                        <?php /*
                        <div class="cart-container">
                            <?php mincommerce_cart_button(); ?>
                        </div> 
                        */ ?>                                           
                        <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
                    </div>
                </div>
            </div>
        </header>
		
	<section class="main default-page">
            
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
			
<h1><?php the_title(); ?></h1>
<p><?php the_content(); ?></p>
<?php endwhile; else: ?>
<p><?php _e('<h1>Vaya...</h1><br>Lo siento, no he podido encontrar lo que estabas buscando.'); ?></p>
<?php endif; ?>

                    </div>
                    
                    <div class="col-md-4">

                     <?php
                    dynamic_sidebar( 'pageswidgets' );
                    ?>
                                                                        
                    </div>  
                </div>
            </div>
            
	</section>
						
<?php get_footer();