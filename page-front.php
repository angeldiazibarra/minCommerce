<?php 

/*
Template Name: Front Page
*/

get_header(); ?>
		
	<section class="main">
            
            <div class="container">
                
                <div class="row">
                    <div class="col-xs-12">
                        <div class="banner">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/resources/img/interior-madera.png" alt="Diseño de Interiores en Madera" />
                            <?php /* <i class="fa fa-camera fa-3x" aria-hidden="true"></i> */ ?>
                        </div>
                    </div>
                </div>
                
            </div>   
        </section>    
                
	<section class="spiralbg">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <blockquote class="center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut id elementum eros. Nam eu arcu mauris. Sed aliquet in sapien.</blockquote>
                    </div>
                </div>
            </div>    
        </section>    
                
	<section class="highlighted">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h2><i class="fa fa-arrow-right" aria-hidden="true"></i> SEGURO QUE TE INTERESA...</h2>
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