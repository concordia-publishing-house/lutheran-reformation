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
			<div class="content-list">	
				<?php
									$args = array(
				    'cat' => $current,
				    'post_type' => array( 'page', 'post' )
				);
				query_posts( $args );
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
							<h3><a href="<?php echo get_page_link($page->ID) ?>"><?php echo $page->post_title ?></a></h3>
							<?php echo apply_filters('the_content', $page->post_excerpt); ?>
						</div>

					</article>

				<?php?>
			</div>
	</div><!-- #primary -->
		<?php get_sidebar(); ?>
</div><!-- .container -->
<div class="page-extras">
	<?php if( dynamic_sidebar('footer-widget-area-1') ) : else : endif; ?>
</div>
<?php get_footer(); ?>
