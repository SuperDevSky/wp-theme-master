<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package xDevlabs
 */

?>
<!doctype html>
	<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="https://gmpg.org/xfn/11">

		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<?php wp_body_open(); ?>
		<div id="page" class="site">
			<header id="header" class="header">
				<div class="container">
					<div class="header__inner">
						<div class="header__branding">
							<?php if ( has_custom_logo() ) {
								the_custom_logo();
							}
							else { ?>
								<a class="custom-logo-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
							<?php } ?>
							<a href="#" class="header__toogle"><span></span></a>
						</div><!-- .site-branding -->

						<nav id="site-navigation" class="main-navigation">
							<?php wp_nav_menu(
								array(
									'theme_location' => 'main-menu',
									'menu_id'        => 'primary-menu',
								)
							); ?>
							<a href="#" class="header__toogle"><span></span></a>
						</nav><!-- #site-navigation -->
					</div>
				</div>
			</header><!-- #header -->
