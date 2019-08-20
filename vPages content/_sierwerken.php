<?php

/**
 * Template Name: Sierwerken
 */

get_header();
get_template_part('_breadcrumbs&title', '_breadcrumbs&title');
?>
<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <?php $heroImage = get_field('hero_image') ?>
            <section class="hero_image" style="background-image: url(<?php echo $heroImage['url'] ?>" );></section>

        <section class="container item_main_info">
            <?php the_field('item_main_info') ?>
        </section>

        <section class="item_info">

            <div class="item_menu_text">

<!--                OPEN THE REPEATER-->
                <?php
                echo '<ol class="container">';
                if( have_rows('item_section') ): while ( have_rows('item_section') ) : the_row();

//                OPEN THE ID REPEATER
                    $rows = get_sub_field('id');
                    if($rows)
                    {
                        foreach($rows as $row)
                        {
//                            DISPLAY THE LINK AND TEXT OF THE ID
                            echo '<li>';
                             echo '<a href="#' . $row['id_text'] .'">';

                                echo $row['id_text'].'</a>';
                                echo '</li>';
                        }
                    }
//                    CLOSE THE REPEATER
                endwhile;
                else :
                    // no rows found
                endif;
                echo '</ol>';
                ?>
            </div>

<!--         OPEN THE REPEATER-->
            <?php
                if( have_rows('item_section') ): while ( have_rows('item_section') ) : the_row();

//                OPEN THE ID REPEATER
                    if( have_rows('id') ): while ( have_rows('id') ) : the_row();
            ?>

            <div id="<?php the_sub_field('id_text') ?>" class="info_section" >
<!--                    CLOSE THE ID REPEATER-->
                    <?php
                    endwhile;
                    else :
                        // no rows found
                    endif; ?>

                <div class="info_section__image">
                        <?php $itemImage = get_sub_field('image'); ?>
                        <img src="<?php echo $itemImage['url'] ?>" alt="<?php echo $itemImage['alt'] ?>">
                </div>

                <div class="info_section__info">
                        <?php the_sub_field('info');?>


                    <a class="button button_primary" href="<?php the_sub_field('button_url') ?>"><?php the_sub_field('button_text') ?></a>
                </div>
            </div>
                    <?php
                    endwhile;
                    else :
                        // no rows found
                    endif; ?>
        </section>

    </main><!-- #main -->
</div><!-- #primary -->
<?php
get_template_part('banner', 'banner', 'option');
get_footer();
