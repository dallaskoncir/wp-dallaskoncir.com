<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package dallaskoncir
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" type="image/x-icon" />
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon-180x180.png">
<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon-16x16.png" sizes="16x16">
<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/android-chrome-192x192.png" sizes="192x192">
<meta name="msapplication-square70x70logo" content="<?php echo get_stylesheet_directory_uri(); ?>/smalltile.png" />
<meta name="msapplication-square150x150logo" content="<?php echo get_stylesheet_directory_uri(); ?>/mediumtile.png" />
<meta name="msapplication-wide310x150logo" content="<?php echo get_stylesheet_directory_uri(); ?>/widetile.png" />
<meta name="msapplication-square310x310logo" content="<?php echo get_stylesheet_directory_uri(); ?>/largetile.png" />


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'dallaskoncir' ); ?></a>

	<!-- Header and navigation -->
  <header class="header">
    <div class="wrapper clear">
      <h1 class="logo">
        <a href="<?php bloginfo('url'); ?>"><span>&lt; </span><?php bloginfo('name'); ?><span> &gt;</span></a>
      </h1>
      <button class="navbar-toggle">
        <i class="fa fa-bars"></i>
      </button>
      <nav class="mainNav">
      <?php
        if ( is_page() ) {
          wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) );
        } else {
          wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'blog-menu' ) );
        }
      ?>
      </nav>
    </div>
  </header>

	<div id="content" class="site-content">
