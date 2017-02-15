<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package blog
 */

get_header(); ?>

	<main class="main-page">

		<?php
		while ( have_posts() ) : the_post();

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();
