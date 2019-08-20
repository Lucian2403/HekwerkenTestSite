<?php
/**
 * Template Name: Home Page
 */

get_header();
?>


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



<section class="container home-main-info">
    <div class="home_info">
        <?php the_field('home_info') ?>
    </div>
    <div class="btn_home">
        <a class="button button_primary" href="<?php the_field('button_primary_url') ?>"><?php the_field('button_primary_text') ?></a>
        <a class="button button_secondary" href="<?php the_field('button_secondary_url') ?>"><?php the_field('button_secondary_text') ?></a>
    </div>
</section>



<?php get_template_part('banner', 'banner', 'option') ?>



<section class="countUp">
    <div class="count_title">
        <?php the_field('counting_title') ?>
    </div>

    <div class="owl-carousel owl-countUp count_items">
        <?php
        if( have_rows('counting_item') ): while ( have_rows('counting_item') ) : the_row();
            $countIcon = get_sub_field('count_icon');
            ?>
        <div class="count_item">
            <i class="<?php echo $countIcon ?>"></i>
            <div class="counter" data-count="<?php the_sub_field('count_number'); ?>">0</div>
            <p>
                <?php the_sub_field('count_text'); ?>
            </p>
        </div>
        <?php
            endwhile;
            else :
            // no rows found
        endif; ?>
    </div>
</section>



<section class="checked_info">
    <div class="container info_products">
        <?php
        if( have_rows('checked_info') ): while ( have_rows('checked_info') ) : the_row(); ?>
            <div class="info_product">
                    <?php the_sub_field('info_product'); ?>
                </p>
            </div>
        <?php
        endwhile;
        else :
            // no rows found
        endif; ?>
    </div>
</section>



<section class="testimonial-section">
    <?php $backgroundImage = get_field('testimonial_image'); ?>

    <div class="testimonial_image" style="background-image: linear-gradient(to top, rgba(0,0,0, .5) 0%, rgba(0,0,0, .5) 100%), url(<?php echo $backgroundImage['url'] ?>");>

        <div class="testimonial_title">
            <?php the_field('counting_title') ?>
        </div>

        <div class="owl-carousel container testimonials">
            <?php
            if( have_rows('testimonials') ): while ( have_rows('testimonials') ) : the_row();
                $testimonialText    = get_sub_field('testimonial_text');
                $testimonialPicture = get_sub_field('testimonial_picture');
                $testimonialName    = get_sub_field('testimonial_name');
            ?>
                <div class="user">
                    <div class="user__text">
                        <p>
                            <?php echo $testimonialText ?>
                        </p>
                    </div>
                    <div class="user__picture">
                        <img src="<?php echo $testimonialPicture['url'] ?>" alt="<?php echo $testimonialPicture['alt'] ?>">
                    </div>
                    <div class="user__name">
                        <?php echo $testimonialName ?>
                    </div>
                </div>
            <?php
            endwhile;
            else :
                // no rows found
            endif; ?>
        </div>

    </div>
</section>


<?php
get_footer();
