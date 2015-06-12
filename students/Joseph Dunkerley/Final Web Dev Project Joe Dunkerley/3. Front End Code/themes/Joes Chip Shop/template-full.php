<?php
/**
 * Template Name: Full Width
 *
 */

get_header(); ?>

<div class="row">

	<div id="primary" class="content-area">

		<div class="large-12 columns">

			<main id="main" class="site-main" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content', 'page' ); ?>

					

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->

		</div><!-- .large-12 -->
		
	</div><!-- #primary -->

</div><!-- .row -->

<?php get_footer(); ?>