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

<<<<<<< HEAD
  <?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
  <div class="off-canvas-wrapper">
    <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
    <?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
  <?php endif; ?>
=======
	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>
>>>>>>> olefredrik/master

  <?php do_action( 'foundationpress_layout_start' ); ?>

<<<<<<< HEAD
  <header id="masthead" class="site-header masthead" role="banner">
    <div class="logo-wrapper">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><figure class="icon service-symbol"><span class="show-for-sr"><?php bloginfo( 'name' ); ?></span></figure></a>
    </div>
    <div class="title-bar" data-responsive-toggle="site-navigation">
      <button class="menu-icon" type="button" data-toggle="mobile-menu"></button>
      <div class="title-bar-title">
        <!-- <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a> -->
      </div>
    </div>

    <nav id="site-navigation" class="main-navigation top-bar" role="navigation">
      <div class="top-bar-left">
        <ul class="menu">
          <!-- <li class="home"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></li> -->
        </ul>
      </div>
      <div class="top-bar-right">
        <?php foundationpress_top_bar_r(); ?>

        <?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
          <?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
        <?php endif; ?>
      </div>
    </nav>
  </header>
=======
	<header class="site-header" role="banner">
		<div class="site-title-bar title-bar" <?php foundationpress_title_bar_responsive_toggle() ?>>
			<div class="title-bar-left">
				<button class="menu-icon" type="button" data-toggle="<?php foundationpress_mobile_menu_id(); ?>"></button>
				<span class="site-mobile-title title-bar-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				</span>
			</div>
		</div>

		<nav class="site-navigation top-bar" role="navigation">
			<div class="top-bar-left">
				<div class="site-desktop-title top-bar-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				</div>
			</div>
			<div class="top-bar-right">
				<?php foundationpress_top_bar_r(); ?>

				<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
					<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
				<?php endif; ?>
			</div>
		</nav>
		
	</header>
>>>>>>> olefredrik/master

  <section class="container">
    <?php do_action( 'foundationpress_after_header' );
