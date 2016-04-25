        <footer>
    
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <?php wp_nav_menu(array('theme_location' => 'first-footer-menu')); ?>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <?php wp_nav_menu(array('theme_location' => 'second-footer-menu')); ?>
                    </div>
                    <div class="col-md-3 col-md-offset-3">
                        <div class="row">
                            <div class="col-xs-12 eudomus">
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/resources/img/eudomus-120.png" alt="Logo" /> eudomus
                            </div>
                            <div class="col-xs-12">
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/resources/img/payment-methods.png" alt="Pago Online Seguro" class="paymethods" />
                            </div>
                            <div class="col-xs-12">
                                <span class="fa fa-code"></span> with <span class="fa fa-heart"></span> in Spain
                            </div>
                        </div>
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