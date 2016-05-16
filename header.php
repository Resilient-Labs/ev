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

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php

$defaultMenu = array(
	'theme_location'=> 'primary-menu',
	'menu_class' => 'nav navbar-fixed navbar-right hide-main-nav'
);
echo "<nav class=\"navbar navbar-fixed red\">";
echo "<div class=\"container-fluid\">";
echo "<div class=\"wrapper\">";
echo "<div class=\"navbar-header\">";
echo "<a class=\"navbar-brand\" href=";
echo "\"";
$url = home_url();
echo esc_url( $url );;
echo "\"";
echo ">Edible Ventures</a>";
echo "<a href=\"#\" onclick=\"return false\" id=\"toggle-menu\" class='toggle-menu-icon'>☰</a>";
echo "</div> <!--navbar-header-->";
wp_nav_menu($defaultMenu);

echo "<a class=\"r-nav\" href=\"".get_page_link(26)."\"><div class=\"responsive-navbar hide-nav\">Process</div></a>";
echo "<a class=\"r-nav\" href=\"".get_page_link(30)."\"><div class=\"responsive-navbar hide-nav\">Members</div></a>";
echo "<a class=\"r-nav\" href=\"".get_page_link(34)."\"><div class=\"responsive-navbar hide-nav\">Portfolio</div></a>";
echo "<a class=\"r-nav\" href=\"".get_page_link(32)."\"><div class=\"responsive-navbar hide-nav\">Contact Us</div></a>";

echo "</div> <!--wrapper-->";
echo "</nav> <!--navbar-->";
?>


<!--<div id="page" class="site">-->
<!--<a class="skip-link screen-reader-text" href="#main">--><?php //esc_html_e( 'Skip to content', 'ev' ); ?><!--</a>-->

<!--	<header id="masthead" class="site-header" role="banner">-->
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

<!--		<div id="content" class="site-content">-->
