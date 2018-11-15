<?php
/**
 * Template part for displaying post meta in Blog module
 */
if ( ! $this->is_meta_visible() ) {
	return;
}
?>
<div class="tm_pb_post_meta">
	<?php
	if ( 'on' === $this->_var( 'show_date' ) ) {
		echo tm_get_safe_localization(
			sprintf(
				esc_html__( '%s', 'malcolmy_lite' ),
				'<span class="published">' . esc_html( get_the_date( $this->_var( 'meta_date' ) ) ) . '</span>'
			)
		);
	}
	?>
	<span class="post__comments">
		<?php
		if ( 'on' === $this->_var( 'show_comments' ) ) {
			printf(
				esc_html(
					_nx( '1 Comment', '%s %s Comments', get_comments_number(), 'number of comments', 'malcolmy_lite' )
				),
				'<span>|</span>',
				number_format_i18n( get_comments_number() )
			);
		}
		?>
	</span>

		<?php
			if ( 'on' === $this->_var( 'show_author' ) ) {
				echo tm_get_safe_localization(
					sprintf(
						'<span class="author vcard"><span>|</span>%s ' . tm_pb_get_the_author_posts_link() . '</span>',
						esc_html__( 'by', 'malcolmy_lite' )
					)
				);
			}
		?>

		<span class="post__tags__header">
			<?php
				if ( 'on' === $this->_var( 'show_categories' ) ) {
					echo '<span>|</span>' . esc_html__( 'Tags: ', 'malcolmy_lite' );
					echo get_the_category_list( ', ' );
				}
			?>
		</span>
</div>
