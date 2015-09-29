<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Reformer
 */

?>
<div class="content-list">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
		<div class="featured-image">
			<?php echo '<a href="' . get_permalink( $page->ID ) . '" title="' . esc_attr( $page->post_name ) . '">';
			echo get_the_post_thumbnail( $page->ID, 'medium'); 
			echo "</a>";
			?>
		</div>
		<div class="featured-content">
			<header class="entry-header">
				<?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>

				<?php if ( 'post' == get_post_type() ) : ?>
				<div class="entry-meta">
					<?php the_reformer_posted_on(); ?>
				</div><!-- .entry-meta -->
				<?php endif; ?>
			</header><!-- .entry-header -->

			<div class="entry-summary">
				<?php the_excerpt(); ?>
			</div><!-- .entry-summary -->

			<footer class="entry-footer">
				<?php the_reformer_entry_footer(); ?>
			</footer><!-- .entry-footer -->
		</div>
	</article><!-- #post-## -->
</div>
