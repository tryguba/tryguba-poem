<?php
/**
 * Template part for displaying a message that posts cannot be found.
 *
 * @link    https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Malcolmy_Lite
 */
?>
<section class="no-results not-found">
	<header class="page-header">
		<h3 class="page-title"><?php esc_html_e( 'Nothing Found', 'malcolmy_lite' ); ?></h3>
	</header>
	<!-- .page-header -->

	<div class="page-content">
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p>
				<?php
				printf(
					'%1$s <a href="%3$s">%2$s</a>.',
					esc_html__( 'Ready to publish your first post?', 'malcolmy_lite' ),
					esc_html__( 'Get started here', 'malcolmy_lite' ),
					esc_url( admin_url( 'post-new.php' ) )
				);
				?>
			</p>

		<?php elseif ( is_search() ) : ?>

			<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'malcolmy_lite' ); ?></p>

			<?php get_search_form();

		else : ?>

			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'malcolmy_lite' ); ?></p>

			<?php get_search_form();

		endif; ?>

	</div>
	<!-- .page-content -->
</section><!-- .no-results -->
