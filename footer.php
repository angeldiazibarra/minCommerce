        <footer>
    
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <?php wp_nav_menu(array('theme_location' => 'footer-menu')); ?>
                    </div>
                    <div class="col-md-6">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/resources/img/eudomus-120.png" alt="Logo" />
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