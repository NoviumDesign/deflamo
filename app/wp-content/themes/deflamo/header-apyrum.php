<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package _s
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site ">

	<header id="masthead" class="site-header" role="banner">

		<div class="headerinner">
			<div class="site-branding">
				<a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/apyrum-logo-white.svg"></a>
			</div>
		</div>

		<div class="navcontainer">
			<div class="navinner">
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle"><?php _e( 'Primary Menu', '_s' ); ?></button>
					<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', '_s' ); ?></a>

					<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
					<ul class="language">
						<li class=""><a href="#">Engelska</a></li>
						<li class="active"><a href="#">Svenska</a></li>
					</ul>
				</nav><!-- #site-navigation -->
			</div>
			<?php do_action('icl_language_selector'); ?><!-- WPML Selector -->
		</div>

	</header><!-- #masthead -->

	<div id="content" class="site-content">
