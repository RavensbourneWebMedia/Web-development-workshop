<?php
/**
 * The template for displaying 404 pages (not found).
 *
 */

get_header(); ?>

	<div id="primary" class="content-area">

		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">

				<div class="row">

					<div class="large-12 columns">

						<header class="page-header">
							<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'gateway' ); ?></h1>
						</header><!-- .page-header -->

					</div> <!-- .large-12 -->

				</div> <!-- .row -->

				<div class="page-content">

				<div class="row">

					<div class="large-12 columns">

						<p><?php _e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'gateway' ); ?></p>

						<?php get_search_form(); ?>

					</div><!-- .large-12 -->

				</div><!-- .row -->

				<div class="row">

					<div class="large-3 columns">

						<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

					</div><!-- .large-3 -->

					<div class="large-3 columns">

						<?php if ( gateway_categorized_blog() ) : // Only show the widget if site has multiple categories. ?>
						<div class="widget widget_categories">
							<h2 class="widget-title"><?php _e( 'Most Used Categories', 'gateway' ); ?></h2>
							<ul>
							<?php
								wp_list_categories( array(
									'orderby'    => 'count',
									'order'      => 'DESC',
									'show_count' => 1,
									'title_li'   => '',
									'number'     => 10,
								) );
							?>
							</ul>
						</div><!-- .widget -->
						<?php endif; ?>

					</div><!-- .large-3 -->

					<div class="large-3 columns">

						<?php
							/* translators: %1$s: smiley */
							$archive_content = '<p>' . sprintf( __( 'Try looking in the monthly archives. %1$s', 'gateway' ), convert_smilies( ':)' ) ) . '</p>';
							the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );
						?>

					</div><!-- .large-3 -->

					<div class="large-3 columns">

						<?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>

					</div><!-- .large-3 -->

				</div><!-- .row -->

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->

	</div><!-- #primary -->

<?php get_footer(); ?>
