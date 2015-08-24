<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Reformer
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			<div class="row">
				<div class="one-half column footer-navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</div>
				<div class="one-half column footer-navigation">
					<div class="footer-buttons">
						<a href="#" class="button">Get Involved</a>
						<a href="#" class="button">Shop</a>
					</div>
					<div class="footer-email-signup">
						<label for="text" class="required">Text Input</label>
						<input id="text" type="email" placeholder="Enter Email">
	          <button type="submit" class="btn btn-primary">Sign Up</button>
	        </div>
	        <div class="footer-social-buttons">
	        	Get Connected <a href="">Twitter</a><a href="">Facebook</a><a href="">Google+</a><a href="">Pinterest</a><a href="">Instagram</a><a href="">Vimeo</a>
	        </div>
	        <div class="footer-logos">
	        	<span>LCMS Logo</span>
	        	<span>CPH Logo</span>
        	</div>
        </div>
			</div><!-- .row -->
			<div class="row">
				<div class="twelve columns footer-copyright">
				© 2015 The Lutheran Church—Missouri Synod. All Rights Reserved. 	
				</div>
				
			</div><!-- .row -->
		</div><!-- .container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
