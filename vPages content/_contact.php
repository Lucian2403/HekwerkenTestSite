<?php

/**
 * Template Name: Contact
 */

get_header();
?>
<?php $contactImage = get_field('contact_image') ?>
    <section class="contact_image" style="background-image: url(<?php echo $contactImage['url'] ?>" );></section>

<section class="container contact_top">

    <div class="contact_form">
        <?php
        $contact_form = get_field('contact_form');
        echo do_shortcode($contact_form); ?>
    </div>

    <div class="contact_text">
        <?php the_field('contact_text') ?>
    </div>

</section>



<?php
get_template_part('banner', 'banner', 'option');
get_footer();
