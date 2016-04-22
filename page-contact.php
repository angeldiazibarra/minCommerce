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
        <a href="https://twitter.com/angeldiazibarra" title="twitter" class="contactlink"><i class="fa fa-fw fa-twitter"></i> twitter</a>
    </div>
</div>
<div class="row">
    <div class="col-xs-12">
        <a href="https://plus.google.com/u/0/+AngelDiazIbarra" title="google plus" class="contactlink"><i class="fa fa-fw fa-google-plus"></i> google+</a>
    </div>
</div>
<div class="row">
    <div class="col-xs-12">
        <a href="http://www.linkedin.com/in/angeldiazibarra" title="linkedin" class="contactlink"><i class="fa fa-fw fa-linkedin"></i> linkedin</a>
    </div>
</div>
<div class="row">
    <div class="col-xs-12">
        <a href="https://github.com/angeldiazibarra" title="github" class="contactlink"><i class="fa fa-fw fa-github"></i> github</a>
    </div>
</div>

                    </div>
                </div>
            </div>

	</section>

<?php get_footer();