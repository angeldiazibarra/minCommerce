<?php get_header(); ?>
			
	<section class="main">
            
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
		
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<h1><?php the_title(); ?></h1>
<small class="posthead"><i class="fa fa-clock-o fa-fw lightgrey"></i> <?php the_date('j-n-Y') ?> &nbsp; &nbsp; <i class="fa fa-tags fa-fw lightgrey"></i> <span class="taglist"><?php the_category(', &nbsp;', '') ?></span></small>
<br>
<br>
<?php the_content(); ?>
<small class="taglist"><?php the_tags( '<i class="fa fa-tags fa-fw lightgrey"></i> ', ', &nbsp;', ''); ?></small>
<br>
<?php endwhile; else: ?>
<p><?php _e('<h1>Vaya...</h1><br>Lo siento, no he podido encontrar lo que estabas buscando.'); ?></p>
<?php endif; ?>

                        <br>

                        <h4>¡Compártelo!</h4>

                        <!-- Go to www.addthis.com/dashboard to customize your tools -->
                        <div class="addthis_sharing_toolbox"></div>

                        <br>
                        <hr>
                        <br>
                        <div class="row">
                            <?php if(get_the_author_meta('ID') == 2){ ?>
                            <div class="col-sm-3 author">
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/resources/img/adi.jpg" alt="Angel Diaz" />
                            </div>
                            <div class="col-sm-9">
                                <br><b>Angel Diaz</b>
                                <p>Soy arquitecto, bioconstructor y co-fundador de EUDOMUS. Puedes contactar conmigo en <a href="https://www.instagram.com/eudomus/" title="Sígueme en Instagram">Instagram</a> y <a href="https://www.facebook.com/eudomus.bioconstruccion.arquitectura/" title="Bioconstrucción y Arquitectura Sostenible">Facebook</a>.</p>
                                <a href="https://twitter.com/angeldiazibarra" class="twitter-follow-button author-twt" data-show-count="true" data-lang="es">Seguir a @angeldiazibarra</a>
                            </div>
                            <?php }else if(get_the_author_meta('ID') == 4){ ?>
                            <div class="col-sm-3 author">
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/resources/img/elenadelgado.png" alt="Elena Delgado" />
                            </div>
                            <div class="col-sm-9">
                                <br><b>Elena Delgado</b>
                                <p>Soy graduada en Administración y Dirección de Empresas y trabajo como Content Editor en <a href="https://www.habitissimo.es/" title="Habitissimo">Habitissimo</a>.</p>
                            </div>
                            <?php }else{ ?>
                            <div class="col-sm-3 author">
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/resources/img/awi.jpg" alt="Awilda Suero" />
                            </div>
                            <div class="col-sm-9">
                                <br><b>Awilda Suero</b>
                                <p>Soy diseñadora de interiores, fotógrafa y especialista en <i>home-staging</i>. Puedes conectar conmigo en <a href="https://twitter.com/awisuero" title="Sígueme en Twitter">Twitter</a> y <a href="https://www.pinterest.es/awisuero/" title="Pinterest">Pinterest</a></p>
                                <a href="https://twitter.com/awiwi007" class="twitter-follow-button author-twt" data-show-count="false" data-lang="es">Seguir a Awilda Suero</a>
                            </div>
                            <?php } ?>
                        </div>
                        <br>
                        <br>
                        <br>
                        <br>
                        <?php /* <h4>Deja tu comentario:</h4> */ ?>
                        <?php comments_template(); ?>

                    </div>
                    
                    <div class="col-md-4">

                     <?php
                    dynamic_sidebar( 'sidebarwidget' );
                    ?>
                                                
                    </div>  
                </div>
            </div>
            
	</section>
						
<?php

include_once 'section-contact.php';

get_footer();