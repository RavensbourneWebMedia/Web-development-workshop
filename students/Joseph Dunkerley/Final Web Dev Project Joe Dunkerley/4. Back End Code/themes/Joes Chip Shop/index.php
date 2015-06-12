<?php
/**
 * The main template file. Used for the blog page.
 *
 */

get_header(); ?>

<div class="blog_page_titles">

	<div class="row blog_page_titles">
		
		<div class="large-12 columns">
			
			<?php 
				$blog_title = get_theme_mod( 'blog_title', 'Latest News' ); 
				if ( isset( $blog_title ) ) { 
					echo "<h2>";
					echo esc_attr( $blog_title );
					echo "</h2>";
				}

				$blog_subtitle = get_theme_mod( 'blog_subtitle', 'Change these titles to anything in the customizer.' ); 
				if ( isset( $blog_subtitle ) ) { 
					echo "<h3>";
					echo esc_attr( $blog_subtitle );
					echo "</h3>";
				}
			?>

		</div><!-- .large-12 -->

	</div><!-- .row -->

</div><!-- .blog_page_titles -->

<div class="row">

	<div id="primary" class="content-area">

		<div class="large-8 columns">

			<main id="main" class="site-main" role="main">

			<?php if ( have_posts() ) : ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php
						/* Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', get_post_format() );
					?>

				<?php endwhile; ?>

				<?php gateway_paging_nav(); ?>

			<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>

			</main><!-- #main -->

		</div><!-- .large-8 -->

	</div><!-- #primary -->

	<div class="large-3 large-offset-1 columns">

		<?php get_sidebar(); ?>
		
	</div><!-- .large-3 -->

</div><!-- .row -->

<?php get_footer(); ?>