<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Hekwerken
 */

?>
	<footer id="colophon" class="site-footer">
		<div class="container site-info">


                <div class="contact_info">
                    <?php the_field('contact_information', 'option') ?>
                </div>


            <div class="footer_second">
                <div class="footer_products">
                    <?php
                    if( have_rows('product_list', 'option') ): while ( have_rows('product_list', 'option') ) : the_row();
                        $productName = get_sub_field('product_name', 'option');
                        $productUrl  = get_sub_field('product_url', 'option');
                        ?>
                        <ul class="product_item">
                            <a href="<?php echo $productUrl ?>">
                                <h4>
                                    <?php echo $productName ?>
                                </h4>
                            </a>
                        </ul>
                    <?php
                    endwhile;
                    else :
                        // no rows found
                    endif; ?>
                </div>

                <div class="footer_menu">
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'menu-3',
                        'menu_id'        => 'footer-menu',
                        'menu_class'     => 'main_navbar'
                    ) );
                    ?>
                </div>
            </div>


                <div class="social_media">
                    <p>Follow us</p>
                    <?php
                    if( have_rows('social_media', 'option') ): while ( have_rows('social_media', 'option') ) : the_row();
                        $socialMediaIcon = get_sub_field('social_media_icon', 'option');
                        $socialMediaUrl  = get_sub_field('social_media_url', 'option');
                        $socialMediaName = get_sub_field('social_media_name', 'option');
                        ?>
                        <ul class="social_media__item">
                            <a href="<?php echo $socialMediaUrl ?>">
                                <?php      echo $socialMediaIcon ?>
                                <h4><?php  echo $socialMediaName ?></h4>
                            </a>
                        </ul>
                    <?php
                    endwhile;
                    else :
                        // no rows found
                    endif; ?>
                </div>

                <div class="schedule">
                    <?php the_field('schedule', 'option') ?>
                </div>


		</div><!-- .site-info -->

        <section class="copyright">
            <?php
            the_field('footer_copyright','option');
            ?>
        </section>
	</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>
