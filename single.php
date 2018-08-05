<?php get_header(); ?>
			
	<section class="main">
            
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
		
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<h1><?php the_title(); ?></h1>
<small>Publicado el <?php the_date('j/n/Y') ?>
<br><b>Categorías:</b> <?php the_category(', ') ?></small>
<br>
<br>
<?php the_content(); ?>
<small><br><?php the_tags( '<b>Etiquetas:</b> ', ', ', ''); ?></small>
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
                            <div class="col-sm-3 author">
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/resources/img/adi.jpg" alt="Avatar" />
                            </div>
                            <div class="col-sm-9">
                                <br><b>Angel Diaz</b>
                                <br>Soy arquitecto, emprendedor y consultor de bioconstrucción. Me gustaría conectar contigo en <a href="https://twitter.com/angeldiazibarra" title="Sígueme en Twitter">Twitter</a> y <a href="https://www.facebook.com/bioconstruccion.y.permacultura/" title="Bioconstrucción y Permacultura">Facebook</a>.
                            </div>
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
                    do_action( 'get_sidebar' );
                    ?>
                        
                    <div class="fb-page" data-href="https://www.facebook.com/bioconstruccion.y.permacultura/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/bioconstruccion.y.permacultura/"><a href="https://www.facebook.com/bioconstruccion.y.permacultura/">Bioconstrucción y Permacultura</a></blockquote></div></div>
                    
                    </div>  
                </div>
            </div>
            
	</section>
						
<?php get_footer();