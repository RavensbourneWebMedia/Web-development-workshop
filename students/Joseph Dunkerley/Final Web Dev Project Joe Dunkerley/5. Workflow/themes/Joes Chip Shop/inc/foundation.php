<?php 

/*----------------------------------------------------*/
/*	Foundation Setup
/*----------------------------------------------------*/
if ( ! function_exists( 'gateway_enqueue_foundation' ) ) :

	function gateway_enqueue_foundation() {
		wp_enqueue_style( 'gateway-foundation-style', get_template_directory_uri() . '/app.css' );
		wp_enqueue_script( 'gateway-foundation-js', get_template_directory_uri() . '/js/foundation.js', array( 'jquery' ), '5.4.5', true );
		wp_enqueue_script( 'gateway-modernizr', get_template_directory_uri() . '/js/modernizr.js', array(), '2.8.3', true );
	}

endif; // gateway_enqueue_foundation
add_action( 'wp_enqueue_scripts', 'gateway_enqueue_foundation', 10 );

if ( ! function_exists( 'gateway_admin_bar_nav' ) ) :

	// Fixes admin bar overlap
	function gateway_admin_bar_nav() {
	  if ( is_admin_bar_showing() ) { ?>
	    <style>
	    .fixed { margin-top: 32px; } 
	    @media screen and (max-width: 600px){
	    	.fixed { margin-top: 46px; } 
	    	#wpadminbar { position: fixed !important; }
	    }
	    </style>
	  <?php }
	}

endif; // gateway_admin_bar_nav
add_action('wp_head', 'gateway_admin_bar_nav');

/*----------------------------------------------------*/
/*  Foundation Navigation - http://goo.gl/mTkWbg
/*----------------------------------------------------*/
class gateway_foundation_walker extends Walker_Nav_Menu {
 
    function display_element($element, &$children_elements, $max_depth, $depth=0, $args, &$output) {
        $element->has_children = !empty($children_elements[$element->ID]);
        $element->classes[] = ($element->current || $element->current_item_ancestor) ? 'active' : '';
        $element->classes[] = ($element->has_children) ? 'has-dropdown' : '';
 
        parent::display_element($element, $children_elements, $max_depth, $depth, $args, $output);
    }
 
    function start_lvl(&$output, $depth = 0, $args = array()) {
        $output .= "\n<ul class=\"sub-menu dropdown\">\n";
    }
 
} // end gateway_foundation_walker