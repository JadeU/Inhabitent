<?php
/**
 * The template for displaying the front page.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			
		
	

		<section class = "featured-journal-posts">
			<h2 class= "journal-title">INHABITENT JOURNAL</h2>

			<div class="feature-container">

			<?php
   				$args = array(
					   'numberposts' => 3
					);
   				$featured_posts = get_posts( $args ); 
			?>
			<?php foreach ( $featured_posts as $post ) : setup_postdata( $post ); ?>

			<div class="journal-container"> 

	
				<div class="journal-background" style="background-image: url('<?php echo get_the_post_thumbnail_url();?>')"></div>

				<div class="journal-meta">
				<?php inhabitent_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php inhabitent_starter_posted_by(); ?>

				<h2> <?php the_title();?></h2>
					 
				<a class="read-more-btn" href="">Read Entry</a>

				</div>
			</div>

			<?php endforeach; wp_reset_postdata(); ?>


			</div>
		</section>
	


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

