<?php
/**
 * The template for displaying the footer.
 *
 * @package Inhabitent_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">

				<div class="footer-container">
				
					<div class="footer-contents">
						
						<div class="footer-social">
							<h3 class="contact-info">Contact Info</h3>
							<ul class="footer-list">
								<li class="list-item">
									<i class="fas fa-envelope"></i>
									<a href="mailto:info@inhabitent.com">
									info@inhabitent.com
									</a>
								</li>
								<li class="list-item">
									<i class="fas fa-phone-alt"></i>
									<a href="tel:778-456-7891">778-456-7891</a>
								</li>
								<li class="list-item">
									<i class="fab fa-facebook-square"></i>
									<i class="fab fa-twitter-square"></i>
									<i class="fab fa-google-plus-square"></i>
								</li>
							</ul>
						</div>
						<!--  end of footer-social-->
						<div class="footer-logo">
							<a  href="http://localhost:3000/Inhabitent/">
								<img src="<?php echo get_template_directory_uri();?>/images/inhabitent-logo-text.svg"   alt="Inhabitent logo">
							</a>
						</div>	

						

					</div>
					<!-- end of footer-content -->

					
				</div>
				
				<div class="site-info">
					<p class= "footer-copyright-text">&copy; Copyright Inhabitent 2020 </p>
				</div>
			</footer>

		<?php wp_footer(); ?>

	</body>
</html>
