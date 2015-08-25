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
						<a href="#" class="button"><i class="icon-heart"></i> Get Involved</a>
						<a href="#" class="button"><i class="icon-cart"></i>Shop</a>
					</div>
					<div class="footer-email-signup">
						<label for="text" class="required">Text Input</label>
						<input id="text" type="email" placeholder="Enter Email">
	          <button type="submit" class="btn btn-primary">Sign Up</button>
	        </div>
	        <div class="footer-social-buttons">
	        	Get Connected <a href=""><i class="icon-twitter"></i></a><a href=""><i class="icon-facebook"></i></a><a href=""><i class="icon-plus"></i></a><a href=""><i class="icon-pinterest"></i></a><a href=""><i class="icon-instagram"></i></a><a href=""><i class="icon-vimeo"></i></a>
	        </div>
	        <div class="footer-logos">
	        	<div class="lcms-logo-white"><a href="http://lcms.org" title="The Lutheran Church—Missouri Synod" target="_blank"></a></div>
	        	<div class="cph-logo-white"><a href="http://cph.org" title="Concordia Publishing House" target="_blank"></a></div>
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
