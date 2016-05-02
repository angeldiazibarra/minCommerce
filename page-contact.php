<?php 

/*
Template Name: Contact Page
 */

get_header(); ?>
		
	<section class="main">
            
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        
                    <?php
                    /**
                    * woocommerce_before_main_content hook.
                    *
                    * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
                    * @hooked woocommerce_breadcrumb - 20
                    */
                    do_action( 'woocommerce_before_main_content' );
                    ?>
			
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<h1><?php the_title(); ?></h1>
<p><?php the_content(); ?></p>
<?php endwhile; else: ?>
<p><?php _e('<h1>Vaya...</h1><br>Lo siento, no he podido encontrar lo que estabas buscando.'); ?></p>
<?php endif; ?>

	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>

                    </div>
                    
                    <div class="col-md-4">

                     <?php
                    /**
                     * woocommerce_sidebar hook.
                     *
                     * @hooked woocommerce_get_sidebar - 10
                     */
                    do_action( 'woocommerce_sidebar' );
                    ?>
                        
                    <div class="fb-page" data-href="https://www.facebook.com/bioconstruccion.y.permacultura/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/bioconstruccion.y.permacultura/"><a href="https://www.facebook.com/bioconstruccion.y.permacultura/">Bioconstrucción y Permacultura</a></blockquote></div></div>
                        
                    </div>  
                </div>
            </div>
            
	</section>
						
<?php get_footer();