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
  <header>
    <div class="wrapper cf">
      <div class="logo">
        <a href="#" class="to-top"><span>&lt; </span>dallas.koncir<span> &gt;</span></a>
      </div>
      <button class="navbar-toggle">
        <i class="fa fa-bars"></i>
      </button>
      <nav>
        <ul class="cf">
          <li><a href="#bio">About Me</a></li>
          <li><a href="#work">Portfolio</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="https://medium.com/@dallaskoncir" target="_blank">Blog</a></li>
        </ul>
      </nav>
    </div>
  </header>

	<div id="content" class="site-content">
