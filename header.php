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
        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
      </nav>
    </div>
  </header>

	<div id="content" class="site-content">
