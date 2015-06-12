<?php

if ( ! function_exists( 'gateway_fonts' ) ) :
/**
 * Register Google fonts for Merch.
 *
 */
    function gateway_fonts() {
        $fonts_url = '';
        $fonts     = array();
        $subsets   = 'latin,latin-ext';
        /* translators: If there are characters in your language that are not supported by Quattrocento, translate this to 'off'. Do not translate into your own language. */
        if ( 'off' !== _x( 'on', 'Quattrocento font: on or off', 'gateway' ) ) {
            $fonts[] = 'Quattrocento:400,700';
        }
        /* translators: If there are characters in your language that are not supported by Fanwood Text, translate this to 'off'. Do not translate into your own language. */
        if ( 'off' !== _x( 'on', 'Fanwood Text font: on or off', 'gateway' ) ) {
            $fonts[] = 'Fanwood Text:400,400italic';
        }
        /* translators: To add an additional character subset specific to your language, translate this to 'greek', 'cyrillic', 'devanagari' or 'vietnamese'. Do not translate into your own language. */
        $subset = _x( 'no-subset', 'Add new subset (greek, cyrillic, devanagari, vietnamese)', 'gateway' );
        if ( 'cyrillic' == $subset ) {
            $subsets .= ',cyrillic,cyrillic-ext';
        } elseif ( 'greek' == $subset ) {
            $subsets .= ',greek,greek-ext';
        } elseif ( 'devanagari' == $subset ) {
            $subsets .= ',devanagari';
        } elseif ( 'vietnamese' == $subset ) {
            $subsets .= ',vietnamese';
        }
        if ( $fonts ) {
            $fonts_url = add_query_arg( array(
                'family' => urlencode( implode( '|', $fonts ) ),
                'subset' => urlencode( $subsets ),
            ), '//fonts.googleapis.com/css' );
        }
        return $fonts_url;
    }

endif;