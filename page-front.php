<?php 

/*
Template Name: Front Page
*/

get_header(); ?>
		
	<section class="main">
            
            <div class="container">
                
                <div class="row">
                    <div class="col-xs-12">
                        <img class="banner" src="<?php bloginfo('stylesheet_directory'); ?>/resources/img/banner-ambientes.png" alt="Diseño de Interiores" />
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-xs-12">
                        <img class="banner" src="<?php bloginfo('stylesheet_directory'); ?>/resources/img/banner-cubos.png" alt="Micro-Arquitecturas" />
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-xs-12">
                        <img class="banner" src="<?php bloginfo('stylesheet_directory'); ?>/resources/img/banner-escritorios.png" alt="Espacios de Trabajo" />
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-xs-12">
                        <img class="banner" src="<?php bloginfo('stylesheet_directory'); ?>/resources/img/banner-portavelas.png" alt="Hazlo Tu Mismo" />
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