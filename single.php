<?php get_header(); ?>
			
	<section>
            
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
		
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
<?php /* comments_template(); */ ?>

                    </div>
                </div>
            </div>
            
	</section>
						
<?php get_footer(); ?>