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
				<p class= "page-title">SHOP STUFF</p>
		
		<ul class="product-category-nav">

			<li><a href="">DO</a></li>
			<li><a href="">EAT</a></li>
			<li><a href="">SLEEP</a></li>
			<li><a href="">WEAR</a></li>
		</ul>


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

					<div class="product-container">
				
						<a href="<?php the_permalink(); ?>">
							<?php if( get_field('product_image') ): ?>
								<div class = "product-image" style="background-image: url(<?php the_field('product_image'); ?>)">
									
									<!-- <img src=" " /> -->
									
								</div>
							<?php endif; ?>
						</a>		

						<div class="product-meta">
	
							<div class="product-name"> 	
								<?php the_title(); ?>
							</div>

							<div class="product-ellipsis">
								
							</div>

							<div class = "price">
								<?php if( get_field('price') ): ?>
									<?php the_field('price'); ?>
								<?php endif; ?>
							</div>

						</div>

					</div>
				
				<?php endwhile; ?>
			</section>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
