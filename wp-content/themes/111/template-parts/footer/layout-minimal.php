<?php
/**
 * The template for displaying the default footer layout.
 *
 * @package Malcolmy_Lite
 */
?>
<div class="footer-area-wrap invert">
	<div class="container">
		<?php do_action( 'malcolmy_lite_render_widget_area', 'footer-area' ); ?>
	</div>
</div>

<div class="footer-container">
	<div <?php echo malcolmy_lite_get_container_classes( array( 'site-info' ), 'footer' ); ?>>
		<div class="site-info-wrapper container">

			<div class="site-info__bottom">
				<?php
					malcolmy_lite_footer_logo();
					malcolmy_lite_footer_copyright();
					malcolmy_lite_footer_menu();
				?>
			</div>
			
			<div class="site-info__bottom">
				<?php
					malcolmy_lite_social_list( 'footer' );
				?>
			</div>

		</div>
		<!-- .site-info -->
	</div>
</div><!-- .container -->
