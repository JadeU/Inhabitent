<?php
/**
 * The template for displaying the front page.
 *
 * @package Inhabitent_Theme
 */

get_header('front-page'); ?>

		
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<section class="shop-stuff-container"> 
			<h2 class= "shop-title">SHOP STUFF</h2>

			<?php 
			
			$product_taxonomy = array ( 
				'taxonomy' => 'product_taxonomy',
				'hide_empty' => true,
			);

			$terms = get_terms($product_taxonomy);

			?>

			

			<div class="product-categories-container">
			
			<?php 
				foreach( $terms as $term ) :
					$name = $term-> name;
					$description = $term-> description;
					$slug = $term -> slug; 
					$taxonomy_id = $term -> term_id; 

					$img_path = get_template_directory_uri(). '/images/' . $slug . '.svg';
					
			?>

				<div class="product-category-box">
					<div class ="product-category-logo">
						<a href="<?php echo get_term_link($taxonomy_id)?>">
							<img class="product-category-logo" src="<?php echo $img_path ?>"
							alt="<?php echo $name ?> category logo">
						</a>
					</div>

					
					<div class="product-category-meta">
						<?php echo $description ?>
					</div>
					
					<a class= "category-more-btn" href= "<?php echo get_term_link($taxonomy_id)?>">
						<?php echo $name ?>	Stuff
				</a>
					
	
				</div>
				
			<?php endforeach ?>


		


				
			</div>
	</section>



		<section class = "featured-journal-posts">
			<h2 class= "journal-title">INHABITENT JOURNAL</h2>

			<div class="feature-container">

			<?php
   				$args = array(
					   'numberposts' => 3
					);
   				$featured_posts = get_posts( $args ); 
			?>
			<?php foreach ( $featured_posts as $post ) : 
				
				setup_postdata( $post ); 
				
				$post_id = $post -> ID;


				?>

				
			<div class="journal-container"> 

				<div class="journal-background" style="background-image: url('<?php echo get_the_post_thumbnail_url();?>')"></div>

				<div class="journal-meta">
				<?php inhabitent_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php inhabitent_starter_posted_by(); ?>

				<h2> <?php the_title();?></h2>
					 
				<a class="read-more-btn" href="<?php echo get_post_permalink($post_id)?>">Read Entry</a>

				</div>
			</div>

			<?php endforeach; wp_reset_postdata(); ?>


			</div>
		</section>
	


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

