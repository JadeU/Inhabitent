<?php
/**
 * The template for displaying products archives.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

		

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>

	  <h2>
		
			<?php 
				$terms = get_terms('product_taxonomy') & get_queried_object()->term_id;
				
 				foreach ( $terms as $term ) {
					echo '<a href="#">';
					echo $term->slug.' ';
					echo '</a>';
				 
				}


 			?>
		</h2>
		
			</header><!-- .page-header -->
			

			<?php /* Start the Loop */ ?>
			<section class="product-grid">
			<?php while ( have_posts() ) : the_post(); ?>


			<a href="<?php the_permalink(); ?>"><?php the_title(); ?>
				
				<div class = "product-image">
					<?php if( get_field('product_image') ): ?>
						<img src="<?php the_field('product_image'); ?> " />
					<?php endif; ?>
				</div>

				<div class = "price">
					<?php if( get_field('price') ): ?>
						<p><?php the_field('price'); ?></p>
					<?php endif; ?>
				</div>
			</a>		
			<?php endwhile; ?>
			</section>
			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
