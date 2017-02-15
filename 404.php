<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package blog
 */

get_header(); ?>

	<main id="main" class="site-main" role="main">

			<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'blog' ); ?></h1>

			<div class="page-content">
				<p><?php esc_html_e( 'It looks like nothing was found at this location.', 'blog' ); ?></p>

			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
