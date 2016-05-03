<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package EdibleVentures
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
<!--	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">-->
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<nav class="ev-navbar ev-red">
	<div class="col-2"></div>
<!-- Nav bar styling	-->
	<div class="ev-nav-container col-8">
		<ul class="ev-nav-title left">
			<li id="home" class="ev-nav-home"><a href="index.php">Edible Ventures</a></li>
		</ul>
		<ul class="ev-nav-links right">
			<li id="process" class="ev-nav-link"><a href="process.php">Process</a></li>
			<li id="members" class="ev-nav-link"><a href="members.php">Members</a></li>
			<li id="portfolio" class="ev-nav-link"><a href="portfolio.php">Portfolio</a></li>
			<li id="contact" class="ev-nav-link"><a href="contact.php">Contact Us</a></li>
		</ul>
	</div>
	<!-- Nav bar styling ends	-->
	<div class="col-2"></div>
</nav>



<div id="page" class="site">
<!--<a class="skip-link screen-reader-text" href="#main">--><?php //esc_html_e( 'Skip to content', 'ev' ); ?><!--</a>-->

	<header id="masthead" class="site-header" role="banner">
		<!--<div class="site-branding">
			<?php
		if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
		endif;

		$description = get_bloginfo( 'description', 'display' );
		if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
		endif; ?>
		</div>-->
		<!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'ev' ); ?></button>
<!--			--><?php //wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
<!--	</header>-->
<!-- #masthead -->

	<div id="content" class="site-content">
