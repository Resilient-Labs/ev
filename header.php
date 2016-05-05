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
	<!--	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">-->
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php
$defaultMenu = array(
//		'container'=>'div',
//		'container_class'=>'wrapper',
	'theme_location'=> 'primary-menu',
	'menu_class' => 'nav navbar-fixed navbar-right'
);
echo "<nav class=\"navbar navbar-fixed red\">";
echo "<div class=\"container-fluid\">";
echo "<div class=\"wrapper\">";
echo "<div class=\"navbar-header\">";
echo "<a class=\"navbar-brand\" href=\"index.php\">Edible Ventures</a>"; // TODO: Ask tyler about this problem
echo "</div> <!--navbar-header-->";
	wp_nav_menu($defaultMenu);
echo "</div> <!--wrapper-->";
echo "</nav> <!--navbar-->";
?>

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
