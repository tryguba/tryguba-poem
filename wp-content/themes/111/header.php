<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Malcolmy_Lite
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php malcolmy_lite_get_page_preloader(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'malcolmy_lite' ); ?></a>
	<header id="masthead" <?php malcolmy_lite_header_class(); ?> role="banner">
		<?php malcolmy_lite_ads_header() ?>
		<?php get_template_part( 'template-parts/header/top-panel' ); ?>
			<div class="header-container">
				<div <?php echo malcolmy_lite_get_container_classes( array( 'header-container_wrap container' ), 'header' ); ?>>
					<?php get_template_part( 'template-parts/header/layout', get_theme_mod( 'header_layout_type' ) ); ?>
				</div>
			</div>
	</header>
	<!-- #masthead -->

	<?php echo malcolmy_lite_site_breadcrumbs( array( 'container' )); ?>

    <div id="content" <?php malcolmy_lite_content_class(); ?>>
