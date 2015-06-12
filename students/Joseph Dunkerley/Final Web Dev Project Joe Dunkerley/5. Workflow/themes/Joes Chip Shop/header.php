<?php
/**
 * The header for template-home.php
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="hfeed site">
  <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'gateway' ); ?></a>

<div class="header-bg">

  <div class="site-branding">

    <?php 
      $header_logo = get_theme_mod( 'header_logo', customizer_library_get_default( 'header_logo' ) ); if ( ! $header_logo ) { ?>

      <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" alt="<?php bloginfo( 'name' ); ?>"><?php bloginfo( 'name' ); ?></a></h1>

      <h2><?php bloginfo( 'description' ); ?></h2>

    <?php } else { ?>

      <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="logo" src="<?php echo esc_url( $header_logo ); ?>" alt=""></a>

    <?php } ?>

  </div><!-- .site-branding -->

</div><!-- .header-bg -->

  <header id="masthead" class="site-header" role="banner">

    <div class="stick">

      <nav class="top-bar" data-topbar data-options="mobile_show_parent_link: true">

        <ul class="title-area">
          <li class="name"></li>
          <li class="toggle-topbar menu-icon"><a href="#"><span><?php _e('Menu','gateway'); ?></span></a></li>
        </ul>

        <section class="top-bar-section">

          <?php

            $defaults = array(
                  'theme_location' =>  'primary',
                  'container'      =>  false,
                  'menu_class'     =>  'right',
                  'depth'          =>  5,
                  'fallback_cb'    => 'gateway_demo_header_nav', // located at 'inc/template-tags.php'
                  'items_wrap'     =>  '<ul id="%1$s" class="%2$s">%3$s</ul>',
                  'walker'         =>  new gateway_foundation_walker()
            );

            wp_nav_menu( $defaults ); 
          ?>

        </section>

      </nav>

      <hr>

    </div><!-- .sticky -->

  </header><!-- .row #masthead -->

  <div id="content" class="site-content">
