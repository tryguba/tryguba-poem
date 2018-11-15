<?php
/**
 * Template part for top panel in header.
 *
 * @link    https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Malcolmy_Lite
 */

$top_message_enebled = get_theme_mod( 'top_panel_text', malcolmy_lite_theme()->customizer->get_default( 'top_panel_text' ) );
$top_social_enabled = get_theme_mod( 'header_social_links', malcolmy_lite_theme()->customizer->get_default( 'header_social_links' ) );
$top_menu_enebled = has_nav_menu( 'top' );

// Don't show top panel if all elements are disabled.
if ( ! malcolmy_lite_is_top_panel_visible() ) {
	return;
} ?>

<div class="top-panel">
	<div <?php echo malcolmy_lite_get_container_classes( array( 'top-panel__wrap container' ), 'header' ); ?>>
		<?php if ( $top_message_enebled || $top_menu_enebled) { ?>
			<div class="top-panel__info">
				<?php
				malcolmy_lite_top_menu();
				malcolmy_lite_top_message( '<div class="top-panel__message">%s</div>' );
				?>
			</div>
		<?php } ?>

		<?php if ( $top_social_enabled ) { ?>
			<div class="top-panel__social">
				<?php malcolmy_lite_social_list( 'header' ); ?>
			</div>
		<?php } ?>
	</div>
</div><!-- .top-panel -->
