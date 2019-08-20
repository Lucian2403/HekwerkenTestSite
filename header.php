<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Hekwerken
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header">

		<nav id="site-navigation" class="main-navigation">

            <section class="container main">
                <a class="menu_link"  href="#nav-mobile"> <input type="checkbox" id="menu-toggle"></a>
                    <label for="menu-toggle" class="container hamburger-icon top-hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </label>

                <div class="container main__items">
                    <div class="main__items__title">
                        <h1>
                            <?php the_field('main_title', 'option'); ?>
                        </h1>
                    </div>
                        <?php
                        wp_nav_menu( array(
                            'theme_location' => 'menu-1',
                            'menu_id'        => 'primary-menu',
                            'menu_class'     => 'main_navbar'
                        ) );
                        ?>
                </div>
            </section>

            <section class="sub">
                <div class="container sub__items">
                    <div class="site-branding">
                        <?php
                        the_custom_logo();
                        ?>
                    </div>
                    <div class="container main_phone">
                        <?php
                        ?>
                        <a href="tel:+<?php the_field('main_phone', 'option') ?>"><?php echo the_field('main_phone', 'option') ?></a>
                    </div>

                    <div class="container sub_menu">
                        <?php
                        wp_nav_menu( array(
                            'theme_location' => 'menu-2',
                            'menu_id'        => 'sub menu',
                            'menu_class'     => 'sub_navbar'
                        ) );
                        ?>
                    </div>
                </div>
            </section>

		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

<!--MMENU DIV-->
    <div id="nav-mobile"></div>

	<div id="content" class="site-content">
