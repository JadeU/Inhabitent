<?php
/**
 * The template for displaying the front page.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>



	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?> 

			
			<?php
   				$args = array(
					   'numberposts' => 3
					);
   				$featured_posts = get_posts( $args ); 
			?>
			
			<?php foreach ( $featured_posts as $post ) : setup_postdata( $post ); ?>

				<h2> <?php the_title();?></h2>
				
			<?php endforeach; wp_reset_postdata(); ?>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
