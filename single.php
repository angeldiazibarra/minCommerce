<?php get_header(); ?>
			
	<section class="main">
            
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        
                    <?php
                    /**
                    * woocommerce_before_main_content hook.
                    *
                    * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
                    * @hooked woocommerce_breadcrumb - 20
                    */
                    do_action( 'woocommerce_before_main_content' );
                    ?>
		
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

	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>

                        <br>

                        <h4>¡Compártelo!</h4>

                        <!-- Go to www.addthis.com/dashboard to customize your tools -->
                        <div class="addthis_sharing_toolbox"></div>

                        <br>
                        <hr>
                        <br>
                        <div class="row">
                            <div class="col-xs-4 col-sm-2">
                                
                            </div>
                            <div class="col-xs-8 col-sm-10">
                                <b>Angel Diaz Ibarra</b>
                                <br>Soy arquitecto, emprendedor y consultor de bioconstrucción. Puedes conectar conmigo vía <a href="https://twitter.com/angeldiazibarra" title="Sígueme en Twitter">Twitter</a> y <a href="https://www.facebook.com/bioconstruccion.y.permacultura/" title="Bioconstrucción y Permacultura">Facebook</a>.
                            </div>
                        </div>
                        <br>
                        <br>
                        <br>
                        <br>
                        <h4>Deja tu comentario:</h4>
                        <?php comments_template(); ?>

                    </div>
                    
                    <div class="col-md-4">

                     <?php
                    /**
                     * woocommerce_sidebar hook.
                     *
                     * @hooked woocommerce_get_sidebar - 10
                     */
                    do_action( 'woocommerce_sidebar' );
                    ?>
                        
                    <div class="fb-page" data-href="https://www.facebook.com/bioconstruccion.y.permacultura/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/bioconstruccion.y.permacultura/"><a href="https://www.facebook.com/bioconstruccion.y.permacultura/">Bioconstrucción y Permacultura</a></blockquote></div></div>
                    
                    </div>  
                </div>
            </div>
            
	</section>
						
<?php get_footer();