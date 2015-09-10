<?php
/*
 * Template Name: Sans Sidebar
 * Description: Page template without sidebar
 */

get_header(); ?>

	<div id="primary" class="full-content-area">
			<main id="main" class="site-main" role="main">
				<?php if( $post->post_name == "home" ) { ?>

					<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/"></script>
					or
					<script>
						$(function () {
							$('#clock').countdown({until: new Date(2017, 10 - 1, 31)});
						});
					</script>
					<div class="ll-countdown">
						<h2>Time Until Little Luther&rsquo;s Arrival In the U.S.</h2>
						<div id="clock"></div>
					</div>	
					<?php } ?>
			
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content', 'page' ); ?>

					<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
					?>

				<?php endwhile; // End of the loop. ?>

			</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
