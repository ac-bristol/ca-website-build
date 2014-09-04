<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package base
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.ico" />
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
<link href='http://fonts.googleapis.com/css?family=Lato:300,400,600,700,900,400italic,700italic' rel='stylesheet' type='text/css'>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
  <?php if (is_front_page()) { ?>
    
  <div id="home-intro">
    <div class="intro-text">
      <p>CSS & stuff<br /><span><a href="#masthead"><img src="/content/themes/base/images/down-arrow.png" alt="down to content" /></a></span></p>
    </div>
  </div>
  
  <?php } ?>
	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
      <h2 class="site-description"><a href="mailto:me@andrew-cocker.co.uk">me@andrew-cocker.co.uk</a></h2>
		</div>

		<!-- <nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle"><?php //_e( 'Primary Menu', 'base' ); ?></button>
			<?php //wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav>#site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
