<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php bloginfo('title'); ?></title>
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap-grid.min.css">
	<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style-content.css">
</head>
<body>
<!--======================== Block1 ==============================-->
<section class="header">
	<div class="container">
		<div class="row align-items-center justify-content-around">
			<div class="col-md-2">
				<div class="logo">
					<img src="<?php bloginfo('template_url'); ?>/img/logo-white.png" alt="logo">
					<div class="logo-text">Поезія</div>
				</div>
			</div>
			<div class="col-md-6">
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