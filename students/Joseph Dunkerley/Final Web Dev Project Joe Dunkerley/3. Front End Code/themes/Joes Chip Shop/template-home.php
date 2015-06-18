<?php
/**
 *
 * Template Name: Home
 *
 */

get_header( 'home' ); ?>

<div class="home_posts_titles">
	<div class="row">
		
		<div class="large-12 columns">
			
			<?php if ( get_theme_mod( 'home_posts_title' ) ) { 
				$home_posts_title = get_theme_mod( 'home_posts_title' ); ?>

				<h2><?php echo esc_attr( $home_posts_title ); ?></h2>

			<?php } // end home_posts_title

				if ( get_theme_mod( 'home_posts_subtitle' ) ) { 
				$home_posts_subtitle = get_theme_mod( 'home_posts_subtitle' ); ?>

				<h3><?php echo esc_attr( $home_posts_subtitle ); ?></h3>

			<?php } // end home_posts_subtitle ?>

		</div><!-- .large-12 -->

	</div><!-- .row -->
</div><!-- .home_posts_titles -->

<div class="featured-posts">

	<div class="row">
		
		<?php

			// Get chosen category
			$home_posts_cat = esc_attr( get_theme_mod( 'home_posts_cat' ) );

			// WP_Query arguments
			$args = array (
				'post_type'         => 'post',
				'cat'         	    => $home_posts_cat,
				'posts_per_page'    => '3',
				'post__not_in'	    => get_option('sticky_posts'),
			);

			// The Query
			$query = new WP_Query( $args );

			// The Loop
			if ( $query->have_posts() ) {
				while ( $query->have_posts() ) {
					$query->the_post(); 

					get_template_part( 'template-parts/content', 'home' ); 
				}

			} else { 

				get_template_part( 'template-parts/content', 'none' ); 

			} 
			// Restore original Post Data
			wp_reset_postdata(); 

		?>

	</div><!-- .row -->
	
</div><!-- .featured-posts -->

<hr>

<div class="row home-content">
	
	<div class="large-12 columns">
		
		<?php the_content(); ?>

	</div><!-- .large-12 -->

</div><!-- .home-content -->

<?php get_footer(); ?>
