<?php
/**
 * The header for our theme.
 *
 * @package Inhabitent_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<div class="site-branding">

					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<p class="site-description"><?php bloginfo( 'description' ); ?></p>
				</div><!-- .site-branding -->

				<div class="header-container">

					<div class="header-logo">
						<a href="http://localhost:3000/Inhabitent/">
							<img src="<?php echo get_template_directory_uri();?>/images/inhabitent-logo-tent.svg"   alt="Inhabitent tent logo">
						</a>
					</div>	
					
					<nav id="site-navigation" class="main-navigation" role="navigation">
						
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php echo esc_html( 'Primary Menu' ); ?></button>

						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
						<?php get_search_form() ?>
					</nav><!-- #site-navigation -->
				</div>


            </header><!-- #masthead -->
            
    
                <div class="banner-logo" style="background-image: url(' <?php echo the_post_thumbnail_url() ?>')">
							
                        <img class= "inhabitent-logo" src="<?php echo get_template_directory_uri().'/images/inhabitent-logo-full.svg' ?>" alt="inhabitent-logo">
                                
                </div><!-- .banner-logo -->

			<div id="content" class="site-content">
