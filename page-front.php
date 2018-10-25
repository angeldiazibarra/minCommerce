<?php 

/*
Template Name: Front Page
 */

include_once 'header_page.php'; ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <header class="pageheader" style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('<?php the_post_thumbnail_url('full'); ?>');background-position: center;background-repeat: no-repeat;background-size:cover;">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 eudomus">
                        <a href="<?php echo site_url(); ?>" ><img src="<?php bloginfo('stylesheet_directory'); ?>/resources/img/eudomus-120-white.png" alt="eudomus logo" /></a>
                    </div>

                    <div class="col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-0 head-menu">
                        <?php /*
                        <div class="cart-container">
                            <?php mincommerce_cart_button(); ?>
                        </div> 
                        */ ?>                                           
                        <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
                    </div>
                </div>
                
                <div class="row titbox front">
                    <div class="col-xs-12">
                        <h1><?php the_title(); ?></h1>
                        <h3>Nosotros te ayudamos a hacerlos realidad</h3>
                    </div>
                </div>
            </div>
        </header>
		
	<section class="main default-page">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <p><h3 class="center">¿Por qué trabajar con nosotros?</h3>
                        <p class="center mbot-20"><strong>Porque tu casa lo es todo para ti</strong>.</p>
                        <p>Es donde llegas después de un duro día de trabajo a relajarte y desconectar. Es donde tienes la oportunidad de compartir momentos con tu familia. Es donde comes, donde duermes y donde te sientes seguro.</p>
                        <p>Y es por eso que <strong>tu casa merece ser única</strong>, un hogar de verdad. Una vivienda bien diseñada y construida podría marcar la diferencia entre ser la casa de tus sueños o una mala inversión.</p>
                    </div>
                </div>
            </div>
        </section>
                        
        <section class="main default-page">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <p>Con <a href="https://eudomus.com/quienes-somos/">un equipo</a> que cuenta con más de 20 años de experiencia combinada en el mundo de la arquitectura, el diseño de interiores y la construcción, en EUDOMUS sabemos que <strong>hasta el más mínimo detalle influye</strong> en la experiencia de sentirte "como en casa". Aquí es donde vas a vivir tu vida y todo tiene que estar pensado a la perfección.</p>
                        <p>Imagina la casa de tus sueños. <a href="https://eudomus.com/servicios/">Nuestro trabajo</a> es ayudarte a diseñarla y construirla. Y nuestra satisfacción es saber que hemos ayudado a <strong>más de 150 clientes a conseguirlo</strong>.</p>
                    </div>
                </div>
            </div>
	</section>

<?php endwhile; else: ?>
<p><?php _e('<h1>Vaya...</h1><br>Lo siento, no he podido encontrar lo que estabas buscando.'); ?></p>
<?php endif; ?>       
						
<?php

include_once 'section-contact.php';

get_footer();