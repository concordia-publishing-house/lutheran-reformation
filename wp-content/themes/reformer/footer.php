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
				<div class="footer-primary">
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</div>
				<div class="footer-secondary">
					<div class="footer-buttons">
						<a href="#" class="btn btn-secondary"><i class="icon-heart"></i> Get Involved</a>
						<a href="#" class="btn btn-primary"><i class="icon-cart-fill"></i>Shop</a>
					</div>
					<div class="footer-email-signup">
						<h5>Get the latest on Reformation 2017</h5>
						<form class="btn-inset">
							<input id="text" type="email" placeholder="Enter Email">
	            <button type="submit" class="btn btn-tertiary">Sign Up</button>
          	</form>
	        </div>
	        <div class="footer-social-buttons">
	        	Get Connected <a href=""><i class="icon-twitter"></i></a><a href=""><i class="icon-facebook"></i></a><a href=""><i class="icon-gplus"></i></a><a href=""><i class="icon-pinterest"></i></a><a href=""><i class="icon-instagram"></i></a><a href=""><i class="icon-vimeo"></i></a>
	        </div>
	        <div class="footer-logos">
	        	<div class="one-half column lcms-logo-white"><a href="http://lcms.org" title="The Lutheran Church—Missouri Synod" target="_blank"></a></div>
	        	<div class="one-half column cph-logo-white"><a href="http://cph.org" title="Concordia Publishing House" target="_blank"></a></div>
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
