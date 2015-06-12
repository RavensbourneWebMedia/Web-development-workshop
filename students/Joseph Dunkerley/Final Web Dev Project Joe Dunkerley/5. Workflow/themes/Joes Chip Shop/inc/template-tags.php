<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package gateway
 */

/**
 * Default menu item if no menu is assigned in header
 * Called in header.php
 */
if ( ! function_exists( 'gateway_demo_header_nav' ) ) :
	function gateway_demo_header_nav() { ?>

		<ul class="right">
			<li class="menu-item">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php _e('Home','gateway') ?></a>
			</li>
			<li class="menu-item">
				<a href="#"><?php _e('Blog','gateway') ?></a>
			</li>
			<li class="menu-item has-dropdown">
				<a href="#"><?php _e('Dropdown','gateway') ?></a>
				<ul class="sub-menu dropdown">
					<li class="menu-item"><a href="#"><?php _e('First Level','gateway') ?></a></li>
					<li class="menu-item"><a href="#"><?php _e('Second Level','gateway') ?></a></li>
					<li class="menu-item"><a href="#"><?php _e('Third Level','gateway') ?></a></li>
				</ul>
			</li>
			<li class="menu-item">
				<a href="#"><?php _e('Example Menu','gateway') ?></a>
			</li>
		</ul>

	<?php }
endif;

/**
 * Template for comments and pingbacks.
 */
if ( ! function_exists( 'gateway_comments' ) ) :
    function gateway_comments( $comment, $args, $depth ) {
        $GLOBALS['comment'] = $comment;
        switch ( $comment->comment_type ) :
            case '' :
        ?>

        <li <?php comment_class('clearfix'); ?> id="li-comment-<?php comment_ID() ?>">

            <div id="comment-<?php comment_ID(); ?>" class=" clearfix">    

	            <?php echo get_avatar($comment,$size='60',$default='mm' ); ?>                                      
                <div class="comment-content">

                    <div class="comment-text">                      
                        
                        <p class='comment-meta-header'>

                            <cite class="fn"><?php echo get_comment_author_link() ?></cite>                     
                            <span class="comment-meta commentmetadata"><?php comment_date(get_option('date_format')); ?></span>
                            <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>

                        </p><!-- .comment-meta-header -->
                        
                        <?php if ($comment->comment_approved == '0') : ?><p class="moderated"><?php _e('Your comment is awaiting moderation.','rescue'); ?></p><?php endif; ?>

                        <div class="comment_content">

                        <?php comment_text() ?>

                        </div><!-- .comment_content -->

                    </div><!-- .comment-text-->    

                </div><!-- .comment-content -->

            </div><!-- .comment-<?php comment_ID(); ?> -->
            
        <?php
            break;
            case 'pingback'  :
            case 'trackback' :
        ?>
            <li <?php comment_class('clearfix'); ?> id="li-comment-<?php comment_ID() ?>">
            <div id="comment-<?php comment_ID(); ?>" class="clearfix">
                    <?php echo "<div class='author'><em>" . __('Trackback:','rescue') . "</em> ".get_comment_author_link()."</div>"; ?>
                    <?php echo strip_tags(substr(get_comment_text(),0, 110)) . "..."; ?>
                    <?php comment_author_url_link('', '<small>', '</small>'); ?>
             </div>
            <?php
            break;
        endswitch;
    }
    endif;


if ( ! function_exists( 'gateway_paging_nav' ) ) :
/**
 * Display navigation to next/previous set of posts when applicable.
 */
function gateway_paging_nav() {
	// Don't print empty markup if there's only one page.
	if ( $GLOBALS['wp_query']->max_num_pages < 2 ) {
		return;
	}
	?>
	<nav class="navigation paging-navigation" role="navigation">
		<h1 class="screen-reader-text"><?php _e( 'Posts navigation', 'gateway' ); ?></h1>
		<div class="nav-links">

			<?php if ( get_next_posts_link() ) : ?>
			<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'gateway' ) ); ?></div>
			<?php endif; ?>

			<?php if ( get_previous_posts_link() ) : ?>
			<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'gateway' ) ); ?></div>
			<?php endif; ?>

		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}
endif;

if ( ! function_exists( 'gateway_post_nav' ) ) :
/**
 * Display navigation to next/previous post when applicable.
 */
function gateway_post_nav() {
	// Don't print empty markup if there's nowhere to navigate.
	$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );

	if ( ! $next && ! $previous ) {
		return;
	}
	?>
	<nav class="navigation post-navigation clearfix" role="navigation">
		<h1 class="screen-reader-text"><?php _e( 'Post navigation', 'gateway' ); ?></h1>
		<div class="nav-links clearfix">
			<?php
				previous_post_link( '<div class="nav-previous">%link</div>', _x( '<span class="meta-nav">&larr;</span>&nbsp;%title', 'Previous post link', 'gateway' ) );
				next_post_link(     '<div class="nav-next">%link</div>',     _x( '%title&nbsp;<span class="meta-nav">&rarr;</span>', 'Next post link',     'gateway' ) );
			?>
		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}
endif;

if ( ! function_exists( 'gateway_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function gateway_posted_on() {
	$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
	}

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() )
	);

	$posted_on = sprintf(
		_x( 'Posted on %s', 'post date', 'gateway' ),
		'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
	);

	$byline = sprintf(
		_x( 'by %s', 'post author', 'gateway' ),
		'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
	);

	echo '<span class="posted-on">' . $posted_on . '</span><span class="byline"> ' . $byline . '</span>';

}
endif;

if ( ! function_exists( 'gateway_entry_footer' ) ) :
/**
 * Prints HTML with meta information for the categories and tags
 */
function gateway_entry_footer() {
	// Hide category and tag text for pages.
	if ( 'post' == get_post_type() ) {
		/* translators: used between list items, there is a space after the comma */
		$categories_list = get_the_category_list( __( ', ', 'gateway' ) );
		if ( $categories_list && gateway_categorized_blog() ) {
			printf( '<span class="cat-links">' . __( 'Posted in %1$s', 'gateway' ) . '</span>', $categories_list );
		}

		/* translators: used between list items, there is a space after the comma */
		$tags_list = get_the_tag_list( '', __( ', ', 'gateway' ) );
		if ( $tags_list ) {
			printf( '<span class="tags-links">' . __( 'Tagged %1$s', 'gateway' ) . '</span>', $tags_list );
		}
	}

	// if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
	// 	echo '<span class="comments-link">';
	// 	comments_popup_link( __( 'Leave a comment', 'gateway' ), __( '1 Comment', 'gateway' ), __( '% Comments', 'gateway' ) );
	// 	echo '</span>';
	// }

	edit_post_link( __( 'Edit', 'gateway' ), '<span class="edit-link">', '</span>' );
}
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function gateway_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'gateway_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,

			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'gateway_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so gateway_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so gateway_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in gateway_categorized_blog.
 */
function gateway_category_transient_flusher() {
	// Like, beat it. Dig?
	delete_transient( 'gateway_categories' );
}
add_action( 'edit_category', 'gateway_category_transient_flusher' );
add_action( 'save_post',     'gateway_category_transient_flusher' );
