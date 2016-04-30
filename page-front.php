<?php 

/*
Template Name: Front Page
*/

get_header(); ?>
		
	<section class="main banner">
            
            <div class="container">
                
                <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/resources/img/banner-ambientes-1.png" alt="Diseño de Interiores" />
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/resources/img/banner-ambientes-2.png" alt="Diseño de Interiores" />
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/resources/img/banner-ambientes-3.png" alt="Diseño de Interiores" />
                    </div>
                </div>
                
                <div class="row">
                    <div class="hidden-xs col-sm-6">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/resources/img/banner-escritorios-1.png" alt="Espacios de Trabajo" />
                    </div>
                    <div class="hidden-xs col-sm-6">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/resources/img/banner-escritorios-2.png" alt="Espacios de Trabajo" />
                    </div>
                </div>
                
<?php /*                
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/resources/img/banner-portavelas-1.png" alt="Hazlo Tu Mismo" />
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/resources/img/banner-portavelas-2.png" alt="Hazlo Tu Mismo" />
                    </div>
                    <div class="hidden-xs hidden-sm col-md-4">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/resources/img/banner-portavelas-3.png" alt="Hazlo Tu Mismo" />
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/resources/img/banner-cubos.png" alt="Micro-Arquitecturas" />
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-xs-12">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/resources/img/banner-esculturas.png" alt="Micro-Arquitecturas" />
                    </div>
                </div>
*/ ?>                
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