<?php 

/*
Template Name: Front Page
*/

get_header(); ?>
		
	<section class="main">
            
            <div class="container">
                
                <div class="row">
                    <div class="col-xs-12">
                        <?php mincommerce_featured_products(); ?>
                    </div>
                </div> 
                
                <div class="row">
                    <div class="col-xs-12">
                        <h2>Productos Destacados:</h2>
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <p><?php the_content(); ?></p>
                        <?php endwhile; else: ?>
                        <p><?php _e('<h1>Vaya...</h1><br>Lo siento, no he podido encontrar lo que estabas buscando.'); ?></p>
                        <?php endif; ?>
                    </div>
                    <?php get_sidebar( 'shop' ); ?>
                </div>
            </div>
        </section>

<?php get_footer();