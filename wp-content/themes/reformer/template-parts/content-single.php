<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Reformer
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php // the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php the_reformer_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'the-reformer' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<div class="">
					Share:
					<ul>
						<li>
							<a href="http://www.facebook.com/sharer/sharer.php?u=<?php print(urlencode(the_title())); ?>&title=<?php print(urlencode(get_permalink())); ?>">
								<i class="icon-facebook"></i>
							</a>
						</li>
						<li>
							<a href="http://twitter.com/intent/tweet?status=<?php print(urlencode(the_title())); ?>+<?php print(urlencode(get_permalink())); ?>">
								<i class="icon-twitter"></i>
							</a>
						</li>
						<li>
							<a href="https://plus.google.com/share?url=[URL]">
								<i class="icon-gplus"></i>
							</a>
						</li>
						<li>
							<a href="mailto:?subject=<?php print(urlencode(the_title())); ?>&body=I found this article interesting on <?php print(urlencode(get_permalink())); ?>">
								<i class="icon-email"></i>
							</a>
						</li>
						<li>
							<a href="/blog/feed/">
								<i class="icon-rss">
								</i>
							</a>
					</ul>
				
			<?php the_reformer_entry_footer(); ?>
		</div>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

