<?php get_header(); ?>
			
	<section>
            
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        
                    <?php
                    /**
                    * woocommerce_before_main_content hook.
                    *
                    * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
                    * @hooked woocommerce_breadcrumb - 20
                    */
                    do_action( 'woocommerce_before_main_content' );
                    ?>
                        
<h1><?php single_post_title(); ?></h1>

<p>Este es mi Blog personal. También puedes leer otros artículos que he escrito sobre <a href="http://www.metricspot.com/blog/author/metricspot/">Marketing</a> y <a href="http://www.eudomus.com/">Permacultura</a>.</p>

<br><br>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><h2><?php the_title(); ?></h2></a>
<p><?php the_excerpt(); ?></p>
<br>
<?php endwhile; else: ?>
<p><?php _e('<h2>Vaya...</h2><br>Lo siento, no he podido encontrar lo que estabas buscando.'); ?></p>
<?php endif; ?>
<?php get_comments(); ?>

                    </div>
                </div>
            </div>
		
	</section>
						
<?php get_footer();