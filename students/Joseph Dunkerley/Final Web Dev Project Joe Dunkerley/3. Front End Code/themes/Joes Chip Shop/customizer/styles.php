<?php
/**
 * Implements styles set in the theme customizer
 *
 * @package Customizer_Library
 */

if ( ! function_exists( 'customizer_library_gateway_build_styles' ) && class_exists( 'Customizer_Library_Styles' ) ) :
/**
 * Process user options to generate CSS needed to implement the choices.
 *
 * @since  1.0.0.
 *
 * @return void
 */
function customizer_library_gateway_build_styles() {

	// Main Button color
	$setting = 'main_color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'button, .button, .widget_tag_cloud a'
			),
			'declarations' => array(
				'background-color' => $color
			)
		) );
	}

	// Blockquote Border Color
	$setting = 'main_color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'blockquote'
			),
			'declarations' => array(
				'border-left-color' => $color
			)
		) );
	}

	// Main link color
	$setting = 'main_color';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'a, .top-bar-section li.active:not(.has-form) a:not(.button), article .entry-footer .left i:hover, footer .textwidget a:hover i, #infinite-footer .blog-info a:hover'
			),
			'declarations' => array(
				'color' => $color
			)
		) );
	}

	// Main link hover color
	$setting = 'main_color_hover';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'a:hover, .top-bar-section li.active:hover:not(.has-form) a:hover:not(.button), article .entry-footer .left i:hover, footer .textwidget a:hover i, #infinite-footer .blog-info a:hover, .top-bar-section li:not(.has-form) a:hover:not(.button), .top-bar-section .dropdown li:hover:not(.has-form):not(.active) > a:not(.button)'
			),
			'declarations' => array(
				'color' => $color
			)
		) );
	}

	// Main Button Hover color
	$setting = 'main_color_hover';
	$mod = get_theme_mod( $setting, customizer_library_get_default( $setting ) );

	if ( $mod !== customizer_library_get_default( $setting ) ) {

		$color = sanitize_hex_color( $mod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'button:hover, button:focus, .button:hover, .button:focus, .button.radius:hover'
			),
			'declarations' => array(
				'background-color' => $color
			)
		) );
	}


}
endif;

add_action( 'customizer_library_styles', 'customizer_library_gateway_build_styles' );

if ( ! function_exists( 'customizer_library_gateway_styles' ) ) :
/**
 * Generates the style tag and CSS needed for the theme options.
 *
 * By using the "Customizer_Library_Styles" filter, different components can print CSS in the header.
 * It is organized this way to ensure there is only one "style" tag.
 *
 * @since  1.0.0.
 *
 * @return void
 */
function customizer_library_gateway_styles() {

	do_action( 'customizer_library_styles' );

	// Echo the rules
	$css = Customizer_Library_Styles()->build();

	$home_hero_bg = get_theme_mod( 'home_hero_bg', customizer_library_get_default( 'home_hero_bg' ) ); 
	$home_hero_bg_color = get_theme_mod( 'home_hero_bg_color', customizer_library_get_default( 'home_hero_bg_color' ) ); 
	$header_bg = get_theme_mod( 'header_bg' , customizer_library_get_default( 'header_bg' ) );
	$header_color = get_theme_mod( 'header_color' , customizer_library_get_default( 'header_color' ) );
	$bg_attachement = get_theme_mod( 'bg_attachement' , customizer_library_get_default( 'bg_attachement' ) );

	echo "\n<!-- Begin Custom CSS -->\n<style type=\"text/css\" id=\"rescue_custom_css\">\n"; ?>

	.home-header-bg {
		background:url( '<?php echo esc_url( $home_hero_bg ) ?>' ) <?php echo esc_attr( $home_hero_bg_color ) ?> no-repeat center center <?php echo esc_attr( $bg_attachement ) ?>;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
	}
	.header-bg { 
		background:url( '<?php echo esc_url( $header_bg ) ?>' ) <?php echo esc_attr( $header_color ) ?> no-repeat center center <?php echo esc_attr( $bg_attachement ) ?>; 
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
	}

	<?php
	echo "\n</style>\n<!-- End Custom CSS -->\n";

	if ( ! empty( $css ) ) {
		echo "\n<!-- Begin Custom CSS -->\n<style type=\"text/css\" id=\"gateway-custom-css\">\n";
		echo $css;
		echo "\n</style>\n<!-- End Custom CSS -->\n";
	}

}
endif;

add_action( 'wp_head', 'customizer_library_gateway_styles', 11 );
