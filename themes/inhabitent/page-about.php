<?php
/**
 * The template for displaying the front page.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>


			
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<div class="entry-content">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
