<?php
/**
 * The template for displaying search results pages.
 *
 */

get_header(); ?>

<div class="row">

	<section id="primary" class="content-area">

		<div class="large-8 columns">

			<main id="main" class="site-main" role="main">

			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<h2 class="page-title"><?php printf( __( 'Search Results for: %s', 'gateway' ), '<span>' . get_search_query() . '</span>' ); ?></h2>
				</header><!-- .page-header -->

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php
					/**
					 * Run the loop for the search to output the results.
					 * If you want to overload this in a child theme then include a file
					 * called content-search.php and that will be used instead.
					 */
					get_template_part( 'template-parts/content', 'search' );
					?>

				<?php endwhile; ?>

				<?php gateway_paging_nav(); ?>

			<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>

			</main><!-- #main -->
		
		</div><!-- .large-8 -->

	</section><!-- #primary -->

	<div class="large-3 large-offset-1 columns">
		<?php get_sidebar(); ?>
	</div><!-- .large-3 -->

</div><!-- .row -->

<?php get_footer(); ?>