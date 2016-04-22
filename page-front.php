<?php 

/*
Template Name: Front Page
*/

get_header(); ?>
		
	<section class="main">
            
            <div class="container panel">
                <div class="row">
                    <div class="col-xs-12">
			
<h1>angel diaz ibarra</h1>
<div class="row">
    <div class="col-xs-5 col-sm-3">mis proyectos:</div>
    <div class="col-xs-7 col-sm-9">
        <a href="<?php echo site_url(); ?>/proyectos/" title="mis proyectos">portfolio</a>
    </div>
</div>
<div class="row">
    <div class="col-xs-5 col-sm-3">localización:</div>
    <div class="col-xs-7 col-sm-9">MAD | ZGZ | BCN</div>
</div>
<div class="row">
    <div class="col-xs-5 col-sm-3">redes sociales:</div>
    <div class="col-xs-7 col-sm-9">
        <a href="https://twitter.com/angeldiazibarra" title="twitter">twitter</a> |
        <a href="https://plus.google.com/u/0/+AngelDiazIbarra" title="google plus" rel="author">google+</a>
    </div>
</div>
<div class="row">
    <div class="col-xs-5 col-sm-3">lecturas:</div>
    <div class="col-xs-7 col-sm-9">
        <a href="<?php echo site_url(); ?>/lecturas/" title="libros favoritos">libros favoritos</a>
    </div>
</div>

                    </div>
                </div>
            </div>
            
            
            <div class="container">
                <?php /* 
                <div class="row">
                    <div class="col-xs-12">
                        <?php mincommerce_featured_products(); ?>
                    </div>
                </div> 
                */ ?>
                
                <div class="row">
                    <div class="col-xs-12">
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