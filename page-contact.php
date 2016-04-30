<?php 

/*
Template Name: Contact Page
*/

get_header(); ?>
		
	<section class="main">
            
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
			
<h1>contacto</h1>
<div class="row">
    <div class="col-xs-12">
        <p>Conecta conmigo en Facebook y en Twitter</p>
    </div>
</div>
<div class="row">
    <div class="col-xs-12">
        <a href="https://twitter.com/angeldiazibarra" title="twitter" class="contactlink"><i class="fa fa-fw fa-twitter"></i> Twitter</a>
    </div>
</div>
<div class="row">
    <div class="col-xs-12">
        <a href="https://www.facebook.com/bioconstruccion.y.permacultura/" title="Facebook" class="contactlink"><i class="fa fa-fw fa-facebook"></i> Facebook</a>
    </div>
</div>

                    </div>
                </div>
            </div>

	</section>

<?php get_footer();