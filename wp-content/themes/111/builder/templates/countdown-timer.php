<?php
/**
 * Template part for displaying countdown timer
 */
?>
<div class="tm_pb_countdown_timer_container clearfix">
	<?php echo $this->html( $this->_var( 'title' ), '<h3>%s</h3>' ) ?>
	<div class="days section values" data-short="<?php esc_attr_e( 'Day', 'malcolmy_lite' ); ?>" data-full="<?php esc_html_e( 'Day(s)', 'malcolmy_lite' ); ?>">
		<span class="value"></span>
		<span class="label"><?php esc_html_e( 'Day(s)', 'malcolmy_lite' ); ?></span>
	</div>
	<div class="sep section"><span class="countdown-sep"></span></div>
	<div class="hours section values" data-short="<?php esc_attr_e( 'Hrs', 'malcolmy_lite' ); ?>" data-full="<?php esc_html_e( 'Hour(s)', 'malcolmy_lite' ); ?>">
		<span class="value"></span>
		<span class="label"><?php esc_html_e( 'Hour(s)', 'malcolmy_lite' ); ?></span>
	</div>
	<div class="sep section"><span class="countdown-sep"></span></div>
	<div class="minutes section values" data-short="<?php esc_attr_e( 'Min', 'malcolmy_lite' ); ?>" data-full="<?php esc_html_e( 'Minute(s)', 'malcolmy_lite' ); ?>">
		<span class="value"></span>
		<span class="label"><?php esc_html_e( 'Minute(s)', 'malcolmy_lite' ); ?></span>
	</div>
	<div class="sep section"><span class="countdown-sep"></span></div>
	<div class="seconds section values" data-short="<?php esc_attr_e( 'Sec', 'malcolmy_lite' ); ?>" data-full="<?php esc_html_e( 'Second(s)', 'malcolmy_lite' ); ?>">
		<span class="value"></span>
		<span class="label"><?php esc_html_e( 'Second(s)', 'malcolmy_lite' ); ?></span>
	</div>
</div>
