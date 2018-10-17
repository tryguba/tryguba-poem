<!--======================== footer ==============================-->
<section class="footer" id="footer">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-10">
				
				
				<?php
				
				$args = array(
					'menu' => 'top_menu',
					'container' => 'ul',
					'container_id' => '',
					'container_class' => '',
					'menu_class' => 'menu',
					'echo' => true,
					'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'depth' => 10,
					'walker' => ''
				);
				?>
				<?php wp_nav_menu($args); ?>
			</div>
		</div>
	</div>
</section>


<!--============================================ scroll up ======================================================================-->
<a href="#" class="scrollup"></a>
<!--=============================================================================================================================-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
</body>
</html>