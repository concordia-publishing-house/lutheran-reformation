<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Reformer
 */

get_header(); ?>
<div class="container">
	<div id="primary" class="content-area">
		<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content', 'page' ); ?>

					<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
					?>

				<?php endwhile; // End of the loop. ?>
			<div class="sub-pages">	
				<?php
					$pages = get_pages('child_of='.$post->ID.'&sort_column=post_date&sort_order=desc&parent='.$post->ID);
					foreach($pages as $page) {
				?>
				<?php //print_r($pages); ?>
					<article id="<?php echo $page->post_name; ?>">
						<div class="featured-image">
							<?php echo get_the_post_thumbnail( $page->ID, 'post-thumbnail', 'medium' ); ?>
						</div>
						<div class="featured-content">
							<h4><a href="<?php echo get_page_link($page->ID) ?>"><?php echo $page->post_title ?></a></h4>
							<?php echo apply_filters('the_content', $page->post_excerpt); ?>
						</div>

					</article>

				<?php } ?>
			</div>
	</div><!-- #primary -->
	<div id="secondary" class="widget-area">
		<?php get_sidebar(); ?>
	</div>
</div><!-- .container -->
<div class="page-extras">
	
</div>
<?php get_footer(); ?>
