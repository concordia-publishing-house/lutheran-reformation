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
						<a href="/get-involved/stand-with-your-community-grant/" class="button button-secondary"><i class="icon-heart"></i> Get Involved</a>
						<a href="#" class="button button-primary"><i class="icon-cart-fill"></i> Shop</a>
					</div>
					<div class="footer-email-signup">
						<h5>Get the latest on Reformation 2017</h5>
						<form class="button-inset">
							<input id="text" type="email" placeholder="Enter Email">
	            <button type="submit" class="button button-tertiary">Sign Up</button>
          	</form>
	        </div>
	        <div class="footer-social-buttons">
	        	Get Connected <a href=""><i class="icon-twitter"></i></a><a href=""><i class="icon-facebook"></i></a><a href=""><i class="icon-gplus"></i></a><a href=""><i class="icon-pinterest"></i></a><a href=""><i class="icon-instagram"></i></a><a href=""><i class="icon-vimeo"></i></a>
	        </div>
	      </div>
			</div><!-- .row -->
			<div class="row">
				<div class="footer-logos">
					<h4><span>Lutheran Reformation Sponsors</span></h4>
					<div class="sponsors">
	        	<div class="lcms-logo-white"><a href="http://lcms.org" title="The Lutheran Church—Missouri Synod" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/lcms-logo-white.png" alt="LutheranReformation.org Sponsor - The Lutheran Church—Missouri Synod"></a></a></div>
	        	<div class="thrivent-logo-white"><a href="https://www.thrivent.com" title="Thrivent Financial" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/thrivent-logo.png" alt="LutheranReformation.org Sponsor - Thrivent Financial"></a></div>
	        	<div class="cph-logo-white"><a href="http://cph.org" title="Concordia Publishing House" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/cph-logo-white.png" alt="LutheranReformation.org Sponsor - Concordia Publishing House"></a></a></div>
	        </div>
        </div>
				<div class="twelve columns footer-copyright">
				© 2015 The Lutheran Church—Missouri Synod. All Rights Reserved. 	
				</div>
				
			</div><!-- .row -->
		</div><!-- .container -->
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
<?php if(is_front_page()) : ?>
	<script src="http://cph.org/images/topics/images/topicpages/littleluther/js/jquery.plugin.js"></script>
	<script src="http://cph.org/images/topics/images/topicpages/littleluther/js/jquery.countdown.js"></script>
	<script>
	jQuery(function () {

		jQuery('#clock').countdown({until: new Date(2017, 10 - 1, 31)});

	});
	</script>
	<?php endif; ?>
	<script>
  	jQuery("#page_header").fitText(1.2, { minFontSize: '40px', maxFontSize: '80px' });
	</script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/modal.js"></script>
</body>
</html>
