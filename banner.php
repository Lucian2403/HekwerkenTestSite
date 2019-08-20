<section class="banner">

    <div class="banner__left">
        <?php $bannerImageLeft = get_field('banner_image_left', 'option') ?>
        <div class="banner__left__image" style="background-image: url(<?php echo $bannerImageLeft['url'] ?>" );></div>
        <div class="banner__left__color"></div>
        <div class="banner__left__text">
            <?php the_field('text_left', 'option') ?>
            <a class="button button_primary" href="<?php the_field('button_primary_url', 'option') ?>"><?php the_field('button_primary_text', 'option') ?></a>
        </div>
    </div>

    <div class="banner__right">
        <div class="banner__right__text">
            <?php the_field('text_right', 'option') ?>
            <a class="button button_primary" href="<?php the_field('button_primary_url', 'option') ?>"><?php the_field('button_primary_text', 'option') ?></a>
        </div>
        <div class="banner__right__color"></div>
        <?php $bannerImageRight = get_field('banner_image_right', 'option') ?>
        <div class="banner__right__image" style="background-image: url(<?php echo $bannerImageRight['url'] ?>" );></div>
    </div>
</section>