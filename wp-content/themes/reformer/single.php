<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Reformer
 */

get_header(); ?>
<div class="container">
	<div id="primary" class="blog-post-area">
		
			<main id="main" class="site-main" role="main">
				<?php the_title( '<h1 id="page_header" class="entry-title">', '</h1>' ); ?>
				<?php if ( function_exists('yoast_breadcrumb') ) 
				{yoast_breadcrumb('<p class="header-breadcrumbs" id="breadcrumbs">','</p>');} ?>	
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'single' ); ?>
				
				<?php the_post_navigation(); ?>
				
				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // End of the loop. ?>

			</main><!-- #main -->
		</div><!-- #primary -->
<?php get_sidebar(); ?>
</div><!-- .container -->
<?php get_footer(); ?>
