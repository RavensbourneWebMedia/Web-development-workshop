<?php
/**
 * The template used for displaying content in index.php
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?>>

	<div class="featured-image">
		<?php // Featured Image
		if ( has_post_thumbnail() ) { 

			echo '<a href="' . esc_url( get_permalink() ) . '">';
			the_post_thumbnail( 'post-image' );
			echo '</a>';

		} // end featured image ?>
	</div><!-- .featured-image -->

	<header class="entry-header">
		<?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-date">
			<?php the_time( get_option( 'date_format' ) ); ?>
		</div><!-- .entry-date -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'more %s <span class="meta-nav">...</span>', 'gateway' ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'gateway' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer clearfix">
		<span class="left">
			<?php 
				if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) { ?>
					<a href="<?php comments_link(); ?>"><i class="fa fa-comment"></i></a>
			<?php } ?>
			<a href="<?php echo esc_url( get_permalink() ) ?>"><i class="fa fa-link"></i></a>
		</span>
		<span class="right"><?php //gateway_entry_footer(); ?></span>
	</footer><!-- .entry-footer -->


</article><!-- #post-## -->