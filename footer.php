        <footer>
    
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <hr>
                        <p>
                            <a href="<?php echo site_url(); ?>" title="inicio">home</a> | 
                            <a href="<?php echo site_url(); ?>/bio/" title="biografía">bio</a> | 
                            <a href="<?php echo site_url(); ?>/articulos/" title="artículos">artículos</a> | 
                            <a href="<?php echo site_url(); ?>/contacto/" title="contacto">contacto</a>
                        </p>
                    </div>
                </div>
            </div>
    
        </footer>
	
    <?php wp_footer(); ?>

        <script src="<?php bloginfo('stylesheet_directory'); ?>/resources/js/vendor/jquery.min.js"></script>
        <script src="<?php bloginfo('stylesheet_directory'); ?>/resources/js/vendor/bootstrap.min.js"></script>
        <script src="<?php bloginfo('stylesheet_directory'); ?>/resources/js/scripts.js"></script>
        <script src="<?php bloginfo('stylesheet_directory'); ?>/resources/js/tracking_ga.js"></script>

    </body>
	
</html>