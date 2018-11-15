<?php
/**
 * Template part for minimal Header layout.
 *
 * @link    https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Malcolmy_Lite
 */
?>

<div class="header-container__flex">
	<div class="site-branding">
		<?php malcolmy_lite_header_logo() ?>
		<?php malcolmy_lite_site_description(); ?>
	</div>
	<div class="header_caption">
		<?php malcolmy_lite_main_menu(); ?>
		<?php malcolmy_lite_top_search( '<div class="header__search">%s</div>' ); ?>
	</div>
</div>
