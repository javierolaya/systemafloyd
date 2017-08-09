<?php if ( 'on' == et_get_option( 'divi_back_to_top', 'false' ) ) : ?>

    <span class="et_pb_scroll_top et-pb-icon"></span>

    <?php endif;

if ( ! is_page_template( 'page-template-blank.php' ) ) : ?>





        <footer id="main-footer">
      
                    <div id="footer-bottom">
                        <div class="container clearfix">
                            <div class="footer-section-logo">
                              <img src="http://systemafloyd.com/wp-content/uploads/2017/08/Logo.png">
                            </div>
                            
                            <div class="footer-section news">
                                <h2>NEWS</h2>
                                <?php
                                $output = '<div id="Home-News">';
                                $args = array(
                                'post_type' => 'post',
                                'posts_per_page' => 1,
                                'order' => 'DES'
                                );
                                $query = new WP_Query( $args );
                                if ( $query->have_posts() ) :
                                    $query->the_post();
                                    $output .= '<div class="news-article">';
                                        $output .= '<div class="article-title"><h3>' . apply_filters('the_title', get_the_title()) . '</h3></div>';
                                        $output .= '<a class="read-more" href="'. get_permalink() .'">Read More</a>';
                                    $output .= '</div>';
                                endif;
                                $output .= '</div>';
                                echo($output);
                            ?>
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