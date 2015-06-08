<?php
/**
 * The template for displaying all single posts.
 *
 * @package dallaskoncir
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="wrapper clear">
				<section class="blog-content">

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

				</section>

				<aside class="blog-sidebar">
					<?php get_sidebar(); ?>
				</aside>

			</div><!-- .wrapper -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
