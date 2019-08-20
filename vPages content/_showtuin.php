<?php

/**
 * Template Name: Showtuin
 */

get_header();
get_template_part('_breadcrumbs&title', '_breadcrumbs&title');
?>

<main class="showtuin container">

    <section class="page_info">
        <?php the_field('page_info') ?>
    </section>

    <aside class="page_aside">

        <div class="contact_form">
            <?php
            $contact_form = get_field('contact_form');
            echo do_shortcode($contact_form); ?>
        </div>

        <div class="contact_text">
            <?php the_field('contact_text') ?>
        </div>

    </aside>

</main>





<?php
get_template_part('banner', 'banner', 'option');
get_footer();
