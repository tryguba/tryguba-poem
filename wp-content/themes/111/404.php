<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link    https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Malcolmy_Lite
 */
?>

<section class="error-404 not-found">
	<header class="page-header">
		<h3 class="page-title"><?php esc_html_e( 'Error 404.', 'malcolmy_lite' ); ?></h3>
	</header>
	<!-- .page-header -->

	<div class="page-content">
		<h3><?php esc_html_e( 'The page not found.', 'malcolmy_lite' ); ?></h3>

		<p>
			<a class="btn" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Visit home page', 'malcolmy_lite' ); ?></a>
		</p>

		<div class="caption">
			<p><?php esc_html_e( 'We\'ve encountered an error and we\'re working on it!.', 'malcolmy_lite' ); ?></p>
			<p><?php esc_html_e( 'While we\'re checking which brick in the wall was the cause, please try refreshing this page again!.', 'malcolmy_lite' ); ?></p>
			<p><?php esc_html_e( 'Otherwise, we highly encourage you to try these 3 options:', 'malcolmy_lite' ); ?></p>
			<ul>
				<li><?php esc_html_e( 'Try a website search in the top right corner', 'malcolmy_lite' ); ?></li>
				<li><?php esc_html_e( 'Go back to our homepage', 'malcolmy_lite' ); ?></li>
				<li><?php esc_html_e( '...or get in touch with us via our email at ' , 'malcolmy_lite' ); ?><a href="mailto:<?php echo antispambot( get_option( 'admin_email' ) ); ?>"><?php echo antispambot( get_option( 'admin_email' ) ); ?></a></li>
			</ul>
			<?php get_search_form(); ?>
		</div>
	</div>
	<!-- .page-content -->
</section><!-- .error-404 -->
