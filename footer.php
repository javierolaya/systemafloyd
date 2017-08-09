<?php if ( 'on' == et_get_option( 'divi_back_to_top', 'false' ) ) : ?>

    <span class="et_pb_scroll_top et-pb-icon"></span>

    <?php endif;

if ( ! is_page_template( 'page-template-blank.php' ) ) : ?>





        <footer id="main-footer">
      
                    <div id="footer-bottom">
                        <div class="container clearfix">
                            <div class="footer-section logo">
                              <img src="http://systemafloyd.com/wp-content/uploads/2017/08/Logo.png">
                            </div>
                            
                            <div class="footer-section contactus">
                                <h2>Contact Us</h2>
                                <p>t. 561.123.4567</p>
                                <p>e. info@systemafloyd.com</p>
                                <p>a. 123 Street Dr., West Palm Beach, FL 33401</p>
                                
                                
                            </div>
                            
                            <div class="footer-section followus">
                                <h2>Follow Us Us</h2>
                                <i class="fa fa-facebook" aria-hidden="true"><p>Facebook</p></i>
                                <p>e. info@systemafloyd.com</p>
                                <p>a. 123 Street Dr., West Palm Beach, FL 33401</p>
                                
                                
                            </div>
                        </div>
                        <!-- .container -->
                    </div>
        </footer>
        <!-- #main-footer -->
        </div>
        <!-- #et-main-area -->

        <?php endif; // ! is_page_template( 'page-template-blank.php' ) ?>

            </div>
            <!-- #page-container -->

            <?php wp_footer(); ?>
                </body>

                </html>