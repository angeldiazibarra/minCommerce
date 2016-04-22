<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

	<section>
            
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
	
			<h1 class="subhead">La página que buscas no existe...</h1>
                        <p>No existe ninguna página con esta dirección. Verifica que la dirección está bien escrita y refresca el navegador.</p>
                        <p>Si el problema persiste, es posible que se haya movido a otro sitio. Prueba comenzar tu navegación desde la página de <a href="<?php bloginfo('url'); ?>">inicio</a>.</p>

                    </div>
                </div>
            </div>
            
	</section>
		
<?php get_footer(); ?>