/**
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {

	// Site title
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).text( to );
		} );
	} );

	// Site Description
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );

	// Inner pages header background color
	wp.customize( 'header_color', function( value ) {
		value.bind( function( to ) {
			$( '.header-bg' ).css( 'background', to );
		} );
	} );

	// Home Hero background color
	wp.customize( 'home_hero_bg_color', function( value ) {
		value.bind( function( to ) {
			$( '.home-header-bg' ).css( 'background-color', to );
		} );
	} );

	// Home featured posts section title
	wp.customize( 'home_posts_title', function( value ) {
		value.bind( function( to ) {
			$( '.home_posts_titles h2' ).text( to );
		} );
	} );

	// Home featured posts section subtitle
	wp.customize( 'home_posts_subtitle', function( value ) {
		value.bind( function( to ) {
			$( '.home_posts_titles h3' ).text( to );
		} );
	} );

	// Blog page title
	wp.customize( 'blog_title', function( value ) {
		value.bind( function( to ) {
			$( '.blog_page_titles h2' ).text( to );
		} );
	} );

	// Blog page subtitle
	wp.customize( 'blog_subtitle', function( value ) {
		value.bind( function( to ) {
			$( '.blog_page_titles h3' ).text( to );
		} );
	} );

	// Footer Copyright Text
	wp.customize( 'footer_copyright', function( value ) {
		value.bind( function( to ) {
			$( '.site-info p' ).text( to );
		} );
	} );

	// Main sitewide accent color
	wp.customize( 'main_color', function( value ) {
		value.bind( function( to ) {
			$( 'a, .top-bar-section li.active:not(.has-form) a:not(.button), article .entry-footer .left i:hover, footer .textwidget a:hover i, #infinite-footer .blog-info a:hover' ).css( 'color', to );
		} );
	} );

} )( jQuery );
