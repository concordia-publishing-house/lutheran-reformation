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
						<a href="/get-involved/" class="button button-secondary"><i class="icon-heart"></i> Get Involved</a>
						<a href="http://cph.org/t-reformation.aspx" target="_blank" class="button button-primary"><i class="icon-cart-fill"></i> Shop</a>
					</div>
					<div class="footer-email-signup">
						<h5>Get the latest on Reformation 2017</h5>
						<?php echo do_shortcode( '[contact-form-7 id="262" title="Email Signup"]' ); ?>
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
	        	<div class="cph-logo-white"><a href="http://lcef.org/" title="Lutheran Church Extension Fund" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/lcef-logo-white.png" alt="LutheranReformation.org Sponsor - Lutheran Church Extension Fund"></a></a></div>
	        </div>
        </div>
				<div class="twelve columns footer-copyright">
				© 2015 The Lutheran Church—Missouri Synod. All rights reserved. 	
				</div>
				
			</div><!-- .row -->
		</div><!-- .container -->
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
<div class="remodal remodal-video" data-remodal-id="modal">
  <button data-remodal-action="close" class="remodal-close"></button>
  <div class="video-wrapper" id="remodal_video">
	</div>
 </div>
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
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/remodal.js"></script>
	<script type="text/javascript">
		jQuery(document).on('closing', '.remodal', function (e) {

		  // Reason: 'confirmation', 'cancellation'
		  //console.log('Modal is closing' + (e.reason ? ', reason: ' + e.reason : ''));
		  jQuery("#remodal_video").html('&nbsp;');
		});
		
		jQuery(document).on('opening', '.remodal', function () {
  		//console.log('Modal is opening');
  		jQuery("#remodal_video").html('<iframe src="http://player.vimeo.com/video/141601711" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>');
		});
	</script>
</body>
</html>


