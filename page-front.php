<?php 

/*
Template Name: Front Page
*/

get_header(); ?>
                
    <section>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <p><?php the_content(); ?></p>
                    <?php endwhile; else: ?>
                    <p><?php _e('<h1>Vaya...</h1><br>Lo siento, no he podido encontrar lo que estabas buscando.'); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

<?php get_footer();