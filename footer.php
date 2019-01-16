       
        <footer>
    
            <div class="container">
                <div class="row">
                    <div>
                        <?php wp_nav_menu(array('theme_location' => 'first-footer-menu')); ?>
                    </div>
                    <div>
                        <?php wp_nav_menu(array('theme_location' => 'second-footer-menu')); ?>
                    </div>
                    <div>
                        <div class="row">
                            <div class="col-xs-12 eudomus">
                                <?php /*
                                <a href="<?php echo site_url(); ?>" ><img src="<?php bloginfo('stylesheet_directory'); ?>/resources/img/eudomus-120.png" alt="Logo" /> eudomus</a>
                                
                                <br><br>
                                
                                */ ?>
                                
                                <div class="social">
                                    <a href="https://www.instagram.com/eudomus/" target="_blank"><i class="fa fa-fw fa-instagram"></i></a> &nbsp;
                                    <a href="https://www.facebook.com/eudomus.bioconstruccion.arquitectura/" target="_blank"><i class="fa fa-fw fa-facebook"></i></a> &nbsp;
                                    <a href="https://www.linkedin.com/company/eudomus/" target="_blank"><i class="fa fa-fw fa-linkedin"></i></a> 
                                </div>
                            </div>
                            <?php /*
                            <div class="col-xs-12 paymethods">
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/resources/img/payment-methods.png" alt="Pago Online Seguro" class="paymethods" />
                            </div>
                            */ ?>
                        </div>
                    </div>
                </div>
            </div>
                
        </footer>

        <div id="tpv" class="layover">
            <div class="tpvbox">
                <div class="tpvbox-head">
                    <h3>Comprar artículo:</h3>
                </div>
                
                <div class="tpvbox-body">
                    <p><small><b>Importe:</b></small></p>
                    <h3>12€</h3>
                    
                    <br>
                    
                    <p><small><small><b>Tu e-mail:</b></small></p>
                    
                    <br>
                    
                    <p><small><b>Titular de la tarjeta:</b></small></p>
                    
                    <br>
                    
                    <p><small><b>Número de la tarjeta:</b></small></p>
                    
                    <br>
                    
                    <p><small><b>Fecha de expiración:</b></small></p>
                    
                    <br>
                    
                    <p><small><b>CVV:</b></small></p>
                    
                    
                </div>
            </div>
        </div>
	
        <script src="<?php bloginfo('stylesheet_directory'); ?>/resources/js/vendor/jquery.min.js"></script>
        <script src="<?php bloginfo('stylesheet_directory'); ?>/resources/js/vendor/bootstrap.min.js"></script>
        <script src="<?php bloginfo('stylesheet_directory'); ?>/resources/js/scripts.js"></script>
        <script src="<?php bloginfo('stylesheet_directory'); ?>/resources/js/tracking_ga.js"></script>

        <!-- Go to www.addthis.com/dashboard to customize your tools -->
        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5726a1a2c48b1652"></script>
        <script async src="//platform.twitter.com/widgets.js"></script>
        
        <?php wp_footer(); ?>
        
    </body>
	
</html>