<?php get_header(); ?>
			
	<section class="main">
            
            <div class="container">
                <div class="row">
                    <div class="col-md-8">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <div class="row">
                            <div class="col-xs-12 col-sm-3 thumbnailcontainer">
                                <?php the_post_thumbnail(array(150, 150)); ?>
                            </div>
                            <div class="col-xs-12 col-sm-9">
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><h2><?php the_title(); ?></h2></a>
                                <p><?php the_excerpt(); ?></p>
                                <small class="posthead"><i class="fa fa-clock-o fa-fw lightgrey"></i> <?php the_date('j-n-Y') ?> &nbsp; &nbsp; <i class="fa fa-tags fa-fw lightgrey"></i> <span class="taglist"><?php the_category(', &nbsp;', '') ?></span></small>
                                <br>
                                <br>
                            </div>
                        </div>
<?php endwhile; else: ?>
<p><?php _e('<h2>Vaya...</h2><br>Lo siento, no he podido encontrar lo que estabas buscando.'); ?></p>
<?php endif; ?>
  
                    <div class="row">
                        <div class="col-xs-12 col-sm-9 col-sm-offset-3 navigation">
                            <p><?php posts_nav_link(); ?></p>
                        </div>
                    </div>  

                    </div>
                    
                    <div class="col-md-4">

                    <?php
                    dynamic_sidebar( 'sidebarwidget' );
                    ?>
                        
                    <br><br>
                        
                    <div class="fb-page" data-href="https://www.facebook.com/bioconstruccion.y.permacultura/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/bioconstruccion.y.permacultura/"><a href="https://www.facebook.com/bioconstruccion.y.permacultura/">Bioconstrucción y Permacultura</a></blockquote></div></div>
                        
                    </div>                      
                </div>
            </div>
		
	</section>
						
<?php get_footer();