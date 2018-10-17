<?php
/*
Template Name: Головна
*/
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php bloginfo('title'); ?></title>
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap-grid.min.css">
	<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/styles.css">
	<!--=============================================================================-->
</head>
<body>
<!--======================== Block1 ==============================-->
<section class="b1">
	<div class="container">
		<div class="header">
			<div class="row align-items-center">
				<div class="col-md-3">
					<div class="logo">
						<img src="<?php bloginfo('template_url'); ?>/img/favicon.png" alt="logo">
						<div class="logo-text">Поезія</div>
					</div>
				</div>
				<div class="col-md-9">
					
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
		<div class="main">
			<h1 class="title"><?php bloginfo('description'); ?><br>
			</h1>
			<div class="b1-about">
				<p>Це перша поетична збірка В. П. Тригуби. За допомогою своїх віршів автор знайомить читача з власним
					світом, у якому - любов до родини, рідного краю, його людей, гордість за минуле і тривога за
					майбутнє. А ще високі та світлі почуття, які надають збірці ліричного й емоційного забарвлення. </p>
				<br>
				<p>Книга розрахована на прихильників поетичного слова, а також широке коло читачів.</p>
			</div>
		</div>
		<div class="b1-footer">
			<div class="row justify-content-between align-items-center">
				<div class="col-md-2">
					<div class="year"><?php echo date( "Y" ); ?></div>
				</div>
				<div class="col-md-1"><a href="#author"><img src="<?php bloginfo('template_url') ?>/img/mouse.png"
				                                             alt="mouse"></a></div>
				<div class="col-md-3">
					<div class="social-icon">
						<a href="#"><img src="<?php bloginfo('template_url') ?>/img/twitter.png" alt="twitter"></a>
						<a href="<?php the_field('fb_link', 7);?>"><img src="<?php bloginfo('template_url') ?>/img/facebook.png" alt="facebook"></a>
						<a href="#"><img src="<?php bloginfo('template_url') ?>/img/instagram.png" alt="instagram"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!--======================== Block2 ==============================-->
<section class="author" id="author">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-7">
				<h2 class="title">Про автора</h2>
				<div class="about-author">
					<div class="about-author-title">
						СЛОВО ПРО АВТОРА
					</div>
					<br>
					<div class="about-author-poem">
						Слово - як молитва, <br>
						Слово - мов ікона. <br>
						Воно і мир, і битва, <br>
						І вічна оборона. <br><br>

						Усе, в що вірю я, <br>
						Єднає Батьківщина, <br>
						Бо тут душа моя, <br>
						Мов пісня вільна, лине. <br>
					</div>
					<div class="about-author-text">
						Щиро та проникливо звучать поетичні рядки цієї відомої на Мурованокуриловеччині та за її межами
						людини. Василь Тригуба - не лише фахівець своєї справи (працює інженером), але ще й філософ та
						лірик, гуманіст і патріот. А на додаток, як виявилося, обдарований майстер пера.
					</div>
				</div>
			</div>
			<div class="col-md-5">
				<div class="father-img">
					<img src="<?php bloginfo('template_url'); ?>/img/tryguba.png" alt="Тригуба В.П.">
				</div>
			</div>
		</div>
	</div>
</section>

<!--======================== Block3 ==============================-->
<section class="content" id="content">
	<div class="container">
		<h2 class="title">Зміст</h2>
		<div class="row">
			<div class="col-md-4">
				<div class="box">
					<div class="box-img"><img src="<?php bloginfo('template_url'); ?>/img/b3-pero.png" alt="pero"></div>
					<div class="box-text">Усе, в що вірю я</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="box">
					<div class="box-img"><img src="<?php bloginfo('template_url'); ?>/img/b3-pero.png" alt="pero"></div>
					<div class="box-text">Зоря кохання</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="box">
					<div class="box-img"><img src="<?php bloginfo('template_url'); ?>/img/b3-pero.png" alt="pero"></div>
					<div class="box-text">Любов забуть <br>
						не можу ту
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!--======================== Block4 ==============================-->

<section class="contacts" id="contacts">
	<div class="container">
		<h2 class="title">Контакти</h2>
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="address">Вінницька область, <br>
					смт. Муровані Курилівці, вул. Соборна 178, кв. 3
				</div>
				<form action="POST" id="form">
					<input type="text" placeholder="Введіть Ім`я" required="required">
					<input type="email" placeholder="Введіть E-mail" required="required">
					<textarea name="comment" cols="40" rows="15" placeholder="Напишіть повідомлення"></textarea>
					<button class="button" type="submit">ВІДПРАВИТИ</button>
				</form>
			</div>
		</div>
	</div>
</section>

<!--======================== Block5 ==============================-->
<section class="blog" id="blog">
	<div class="container">
		<h2 class="title">Блог</h2>
		<div class="row">
			<?php
			$posts = get_posts(array(
				'numberposts' => 4,
				'orderby' => 'date',
				'order' => 'DESC',
				'post_type' => 'post',
				'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
			));
			
			foreach ($posts as $post) {
				setup_postdata($post);
				?>
				<article class="col-md-3">
					<div class="box">
						<a class="" href="<?php the_permalink(); ?>">
							<div class="box-img"><img src="<?php the_post_thumbnail_url();?>" alt="item"></div>
							<div class="box-text">
								<div class="box-text-title"><?php the_title(); ?></div>
								<div class="box-text-describe"><?php the_content('Перейти к полной статье...'); ?></div>
							</div>
						</a>
					</div>
				</article>            <?php
				
				
			}
			
			wp_reset_postdata(); // сброс
			?>
		</div>
	</div>
</section>

<?php get_footer(); ?>
