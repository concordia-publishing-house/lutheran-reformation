<?php
/*
 * Template Name: Sans Sidebar
 * Description: Page template without sidebar
 */

get_header(); ?>

	<div id="primary" class="full-content-area">
			<main id="main" class="site-main" role="main">

				<?php if(is_front_page()) : ?>
					<div class="countdown">
						<div class="container">
							<h5>Reformation Day 2017 is in</h5>
							<div id="clock"></div>
							<div class="countdown-buttons">
								<a class="button" href="/events"><i class="icon-calendar"></i> View Events</a>
								<a class="button" href="#"><i class="icon-mail"></i> Get Updates</a>
							</div>
						</div>
					</div>							

				<?php endif; ?>
				<div class="sub-pages">	
				<?php
					$pages = get_pages('child_of='.$post->ID.'&sort_column=post_date&sort_order=desc&parent='.$post->ID);
					foreach($pages as $page) {
				?>
				<?php //print_r($pages); ?>
					<article id="<?php echo $page->post_name; ?>">
						<div class="featured-image">
							<?php echo '<a href="' . get_permalink( $page->ID ) . '" title="' . esc_attr( $page->post_name ) . '">';
							echo get_the_post_thumbnail( $page->ID, 'medium'); 
							echo "</a>";
							?>
						</div>
						<div class="featured-content">
							<h4><a href="<?php echo get_page_link($page->ID) ?>"><?php echo $page->post_title ?></a></h4>
							<?php echo apply_filters('the_content', $page->post_excerpt); ?>
						</div>

					</article>

				<?php } ?>
			</div>
				
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
