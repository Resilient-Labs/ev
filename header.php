<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<meta property="og:image" content="http://cityawake.is/wp-content/themes/cityawake/images/cityawakebanner.png" />

	<title>
		City Awake<?php /* wp_title( '|', true, 'right' ); */ ?>


		</title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="shortcut icon" href="/wp-content/themes/cityawake/images/favicon.png" />
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
	<link href="/wp-content/themes/cityawake/style_cityawake.css" rel="stylesheet" />
	<link href="/wp-content/themes/cityawake/festival.css" rel="stylesheet" />
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		var figcaptionWidth = $("figure.gallery-item").width();
		$("figure.gallery-item").height(figcaptionWidth + "px");
	});
	</script>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site <?php
			if (is_page('front-page') ||
					is_page('blog') ||
					is_page('single') ||
					is_page('accelerate')):
					echo "accelerate";
				else:
					/*
					if (is_page('celebrate') ||
					is_page('team')):
					*/
					echo "celebrate";
				endif;
					?>">


		<header id="masthead" class="site-header" role="banner">


<!--
			<div id="navcolors">
				<div class="accelerate"></div>
				<div class="celebrate"></div>
			</div>
-->

			<div id="navbar" class="navbar">
				<nav id="site-navigation" class="navigation main-navigation" role="navigation">
						<a href="/" id="logo" >
							<img src="/wp-content/themes/cityawake/images/cityawake.png" />
						</a>
					<ul>
						<li><a href="/programs" class="nav" id="accelerate">Programs</a></li>
						<li id="festival-nav">
						<a href="/the-festival" class="nav" >Festival<div class="nav-arrow"></div></a>
						<div id="dropdown">
							<ul>
								<li><a href="#about">About</a></li>
								<li><a href="#become_partners">Get Involved</a></li>
								<li><a href="#calendar">Calendar</a></li>
								<li><a href="#faqs">FAQs</a></li>
								<li><a href="#for-partners">For Partners </a></li>
							</ul>
						</div>
						</li>
						<li><a href="/blog" class="nav" >Blog</a></li>
						<li><a href="/team" class="nav" >Team</a></li>
						<li><a href="http://ourconvention.com/" class="nav" target="_blank">Our Convention</a></li>

					</ul>
				</nav>
			</div>


			<h1>
				<?php the_title(); ?>
				<?php /* bloginfo( 'name' ); */ ?>
			</h1>
			<h2 class="site-description"><?php /* bloginfo( 'description' ); */ ?></h2>


		</header><!-- #masthead -->

		<div id="main" class="site-main">
