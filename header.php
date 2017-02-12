<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
  <?php do_action( 'foundationpress_after_body' ); ?>

  <?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
  <div class="off-canvas-wrapper">
    <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
    <?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
  <?php endif; ?>

  <?php do_action( 'foundationpress_layout_start' ); ?>

  <header id="masthead" class="site-header masthead" role="banner">
    <div class="title-bar" data-responsive-toggle="site-navigation">
      <div class="title-bar-left">
        <div class="logo-wrapper">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><figure class="icon service-symbol"><span class="show-for-sr"><?php bloginfo( 'name' ); ?></span></figure></a>
        </div>
        <span class="title-bar-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
      </div>
      <div class="title-bar-right">
        <button class="menu-icon" type="button" data-open="mobile-menu"></button>
      </div>
    </div>

    <nav id="site-navigation" class="main-navigation top-bar" role="navigation">
      <div class="logo-wrapper text-center">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><figure class="icon service-symbol"><span class="show-for-sr"><?php bloginfo( 'name' ); ?></span></figure></a>
      </div>
      <div class="top-bar-center text-center">
        <?php foundationpress_top_bar_r(); ?>

        <?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
          <?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
        <?php endif; ?>
      </div>
    </nav>
  </header>

  <section class="container">
    <?php do_action( 'foundationpress_after_header' );
