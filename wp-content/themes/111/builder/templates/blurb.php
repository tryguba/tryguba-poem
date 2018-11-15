<?php
/**
 * Template part for Blurb module displaying
 */
?>
<div class="tm_pb_blurb_content">
	<?php echo $this->_var( 'image' ); ?>
	<div class="tm_pb_blurb_container">
		<?php echo $this->_var( 'title' ); ?>
	</div>
	<div class="tm_pb_blurb_description">
		<?php echo $this->shortcode_content;?>
	</div>
	<?php echo $this->get_blurb_button(); ?>
</div> <!-- .tm_pb_blurb_content -->
