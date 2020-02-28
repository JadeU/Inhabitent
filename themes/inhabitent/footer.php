<?php
/**
 * The template for displaying the footer.
 *
 * @package Inhabitent_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">

			<div class="footer-logo">
				<a  href="http://localhost:3000/Inhabitent/">
					<img src="<?php echo get_template_directory_uri();?>/images/inhabitent-logo-text.svg"   alt="Inhabitent logo">
				</a>
			</div>	

			<div class="flex-footer">
					<div class="footer-contents">
						<div class="footer-social">
							<h3>Contact Info</h3>
							<ul>
								<li>
									<i class="fas fa-envelope"></i>
									<a href="mailto:info@inhabitent.com">
									info@inhabitent.com
									</a>
								</li>
								<li>
									<i class="fas fa-phone-alt"></i>
									<a href="tel:778-456-7891">778-456-7891</a>
								</li>
								<li>
									<i class="fab fa-facebook-square"></i>
									<i class="fab fa-twitter-square"></i>
									<i class="fab fa-google-plus-square"></i>
								</li>
							</ul>
						</div>

				<div class="site-info">
					<p class= "footer-copyright-text">&copy; Copyright Inhabitent 2020 </p>
				</div>

			</footer>
		</div>

		<?php wp_footer(); ?>

	</body>
</html>
