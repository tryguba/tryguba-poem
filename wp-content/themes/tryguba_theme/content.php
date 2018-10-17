<?php
/*
Template Name: Зміст
Template Post Type: post
*/
?>
<?php get_header(); ?>


<section class="content" id="content">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-10">
				<div class="content-list-poem">
					<?php
					//откуда будем парсить информацию
					$content = file_get_contents('http://tryguba.vn.ua/index.php/all-in-my-heart.html');
					// Определяем позицию строки, до которой нужно все отрезать
					$pos = strpos($content, '<tr>');
					//Отрезаем все, что идет до нужной нам позиции
					$content = substr($content, $pos);
					// Точно таким же образом находим позицию конечной строки
					$pos = strpos($content, '</tr>');
					// Отрезаем нужное количество символов от нулевого
					$content = substr($content, 0, $pos);
					//если в тексте встречается текст, который нам не нужен, вырезаем его
					$content = str_replace('', '', $content);
					// выводим спарсенный текст.
					echo $content;
					?>
				</div>
			</div>
			<!--<div class="col-md-8">
				<h2 class="title">Зміст</h2>
				<div class="content-list-poem">
					<?php
/*					//откуда будем парсить информацию
					$content = file_get_contents('http://tryguba.vn.ua/index.php/yse-v-shcho-viryu-ya.html');
					// Определяем позицию строки, до которой нужно все отрезать
					$pos = strpos($content, '<em>');
					//Отрезаем все, что идет до нужной нам позиции
					$content = substr($content, $pos);
					// Точно таким же образом находим позицию конечной строки
					$pos = strpos($content, '</em>');
					// Отрезаем нужное количество символов от нулевого
					$content = substr($content, 0, $pos);
					//если в тексте встречается текст, который нам не нужен, вырезаем его
//					$content = str_replace('текст который нужно вырезать', '', $content);
					// выводим спарсенный текст.
					echo $content;
					*/?>
				</div>
			</div>-->
		</div>
	</div>
</section>

<?php get_footer(); ?>