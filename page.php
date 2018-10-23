<?php 

/**
 * The default template for displaying all pages.
 *
 * @package minCommerce
 */

get_header(); ?>
		
	<section class="main default-page">
            
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
			
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<h1><?php the_title(); ?></h1>
<p><?php the_content(); ?></p>
<?php endwhile; else: ?>
<p><?php _e('<h1>Vaya...</h1><br>Lo siento, no he podido encontrar lo que estabas buscando.'); ?></p>
<?php endif; ?>

                    </div>
                    
                    <div class="col-md-4">
                        
<div class="row contactform">
<div class="col-xs-12">
[contact-form-7 id="934" title="Formulario de Contacto"]
</div>
</div>
                        
&nbsp;

<strong>Oficina de Jaca</strong>
C/ Infanta Doña Sancha 14
22700 Jaca (Huesca) - <a href="https://goo.gl/maps/TtLZAxitG6K2" rel="noopener" target="_blank">ver mapa</a>

<i class="fa fa-fw fa-phone"></i> <a href="tel:+34646948958">646 948 958</a> (Angel)

<i class="fa fa-fw fa-at"></i> <a href="mailto:info@eudomus.com">info@eudomus.com</a>

<i class="fa fa-fw fa-whatsapp"></i> <a href="https://api.whatsapp.com/send?phone=+34646948958">WhatsApp</a>

                    </div>  
                </div>
            </div>
            
	</section>
						
<?php get_footer();