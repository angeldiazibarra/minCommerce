<?php 

/*
Template Name: Contact Page
 */

get_header(); ?>
		
	<section class="main">
            
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
			
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<!--<h1><?php the_title(); ?></h1>-->
<p><?php the_content(); ?></p>
<?php endwhile; else: ?>
<p><?php _e('<h1>Vaya...</h1><br>Lo siento, no he podido encontrar lo que estabas buscando.'); ?></p>
<?php endif; ?>

                    </div>
                </div>
            </div>
            
	</section>
						
<?php get_footer();