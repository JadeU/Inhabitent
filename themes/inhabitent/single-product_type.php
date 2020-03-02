<?php
/**
 * The template for displaying all single posts.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single-product_type' ); ?>

			<?php the_post_navigation(); ?>

			<div class="product-image-wrapper">
				<?php if( get_field('product_image') ): ?>
					<img width= "640" height= "360" src="<?php the_field('product_image'); ?>" />
				<?php endif; ?>
			</div>
					
			
			<div class = "price">
					
			<p>$<?php the_field('price');?></p>
				
			</div>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

		<div class= "social-links">
			<button type="button" class="social-button">
				<i class="fab fa-facebook">Like</i>
			</button> 

			<button type="button" class="social-button">
				<i class="fab fa-twitter">Tweet</i>
			</button> 

			<button type="button" class="social-button">
				<i class="fab fa-pinterest">Pin</i>
			</button> 

		</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
