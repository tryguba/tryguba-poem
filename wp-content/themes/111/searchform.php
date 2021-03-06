<?php
/**
 * The template for displaying search form.
 *
 * @package Malcolmy_Lite
 */
?>
<div class="search-form__toggle"></div>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label', 'malcolmy_lite' ) ?></span>
		<input type="search" class="search-form__field"
			placeholder="<?php echo esc_attr_x( 'Enter keyword', 'placeholder', 'malcolmy_lite' ) ?>"
			value="<?php echo get_search_query() ?>" name="s"
			title="<?php echo esc_attr_x( 'Search for:', 'label', 'malcolmy_lite' ) ?>"/>
	</label>
	<button type="submit" class="search-form__submit btn">
		<i class="material-icons">search</i>
	</button>
</form>
