<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package blog
 */

get_header(); ?>

		<main class="main-post">
			<?php
			while ( have_posts() ) : the_post();


				the_post_navigation();


			endwhile; // End of the loop.
			?>

		</main><!-- #main -->

<?php
get_footer();
