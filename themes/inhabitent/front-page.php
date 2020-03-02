<?php
/**
 * The template for displaying the front page.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

	
		<section class="shop-stuff-container"> 
			<h2 class= "shop-title">SHOP STUFF</h2>

			 <div class="product-categories-container">

				<div class="do"> 

					<div class="do-logo"> 

						<a href="http://localhost:3000/Inhabitent/">
								<img src="<?php echo get_template_directory_uri();?>/images/do.svg" alt="Do category logo"  >
						</a>
					
					</div>

				<div class="do-meta">
					<p>Get back to nature with all the tools and toys you need to enjoy the great outdoors</p>
				</div>
			
				<a class="read-more-btn" href="">Do Stuff</a>
				
			</div>


			<div class="eat"> 

				<div class="eat-logo"> 

					<a href="">
							<img src="<?php echo get_template_directory_uri();?>/images/eat.svg"   alt="Eat category logo">
					</a>

				</div>

				<div class="eat-meta">
				<p>Nothing beats food cooked over a fire. We have all you need for good camping eats.</p>
				</div>

				<a class="read-more-btn" href="http://localhost:3000/Inhabitent/">Eat Stuff</a>

			</div>

		
			<div class="sleep"> 

				<div class="sleep-logo"> 

					<a href="">
							<img src="<?php echo get_template_directory_uri();?>/images/sleep.svg"   alt="Sleep category logo">
					</a>

			</div>

				<div class="sleep-meta">
					<p>Get a good night's rest in the wild in a home away from home that travels well.</p>
				</div>

				<a class="read-more-btn" href="http://localhost:3000/Inhabitent/">Sleep Stuff</a>

			</div>



			<div class="wear"> 

				<div class="wear-logo"> 

					<a href="">
							<img src="<?php echo get_template_directory_uri();?>/images/wear.svg"   alt="Sleep category logo">
					</a>

			</div>

				<div class="wear-meta">
					<p>From flannel shirts to toques, look the part while roughing it in the great outdoors</p>
				</div>

				<a class="read-more-btn" href="http://localhost:3000/Inhabitent/">Wear Stuff</a>

			</div>



		






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

