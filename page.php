<?php
/*
// * The template for displaying all pages
// *
// * This is the template that displays all pages by default.
// * Please note that this is the WordPress construct of pages
// * and that other 'pages' on your WordPress site may use a
// * different template.
// *
// * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
// *
// * @package Hekwerken
// */

get_header();
get_template_part('_breadcrumbs&title', '_breadcrumbs&title');
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main container">
            <h1 class="default_title">
                This is the default-page template.
            </h1>
            <p class="default_paragraph">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad animi, at deserunt ea ex facere, in iste maxime neque officiis porro possimus, quaerat quo sint tenetur voluptates voluptatum! Doloremque, expedita! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aut consectetur consequatur dolor, doloribus fugiat, fugit iste iusto maiores, non placeat quam quas quia quidem quod tenetur ut vel vitae? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur culpa deserunt ea eaque esse iusto magnam minima nihil officia omnis? Delectus eveniet excepturi magnam molestias, quae quisquam sed totam vero.
            </p>
		</main>
	</div>

<?php
get_template_part('banner', 'banner', 'option');
get_footer();
