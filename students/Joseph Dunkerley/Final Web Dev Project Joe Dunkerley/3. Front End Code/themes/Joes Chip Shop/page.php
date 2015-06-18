<?php
/**
 * The template for displaying all pages.
 *
 */

get_header(); ?>

<div class="row">

	<div id="primary" class="content-area">

		<div class="large-8 columns">

			<main id="main" class="site-main" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content', 'page' ); ?>


				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->

		</div><!-- .large-8 -->
		
	</div><!-- #primary -->

	<div class="large-3 large-offset-1 columns">
		<?php get_sidebar(); ?>
	</div><!-- .large-3 -->

</div><!-- .row -->
