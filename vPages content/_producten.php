<?php

/**
 * Template Name: Producten
 */

get_header();
get_template_part('_breadcrumbs&title', '_breadcrumbs&title');
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">


<!--LIST OF PRODUCTS-->
        <section class="container products">
            <?php
            // check if the repeater field has rows of data
            if( have_rows('product_item') ):

                // loop through the rows of data
                while ( have_rows('product_item') ) : the_row();

                    // display a sub field value
                    $productImage = get_sub_field('product_image');
                    $productName  = get_sub_field('product_name');
                    $productLink  = get_sub_field('product_link');
                    ?>

                    <div class="item">
                        <a href="<?php echo $productLink; ?>">
                            <div class="item__image">
                                <img src="<?php echo $productImage['url']; ?>" alt="<?php echo $productImage['alt']; ?>">
                            </div>
                            <div class="item__name">
                                <h3>
                                    <?php echo $productName; ?>
                                </h3>
                                <i class="fas fa-angle-double-right"></i>
                            </div>
                        </a>
                    </div>
                <?php endwhile; else :
                // no rows found
            endif; ?>
        </section>


<!--MAIN INFO-->
        <section class="producten_info">
            <div class="container text">
                <?php the_field('producten_info') ?>
            </div>
        </section>
    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_template_part('banner', 'banner', 'option');
get_footer();