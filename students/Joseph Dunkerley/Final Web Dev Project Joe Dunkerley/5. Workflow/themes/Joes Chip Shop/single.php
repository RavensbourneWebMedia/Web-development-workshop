<?php
/**
 * The template for displaying all single posts.
 *
 */

get_header(); ?>

<div class="row">

	<div id="primary" class="content-area">

		<div class="large-8 columns">

			<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'single' ); ?>

				<?php gateway_post_nav(); ?>

				<hr>


			<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->

		</div><!-- .large-8 -->

	</div><!-- #primary -->

	<div class="large-3 large-offset-1 columns">
		<?php get_sidebar(); ?>
	</div><!-- .large-3 -->

</div><!-- .row -->

<?php get_footer(); ?>