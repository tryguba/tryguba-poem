<?php
/*
Template Name: Контакти
*/
?>
<?php get_header(); ?>

<section class="contacts" id="contacts">
	<div class="container">
		<h2 class="title"><?php the_title(); ?></h2>
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="address">Вінницька область, <br>
					смт. Муровані Курилівці, вул. Соборна 178, кв. 3
				</div>
				<div class="phone">Тел.: (04356) 2 - 15 - 76 <br>
					Моб.: (096)818 65 53, (067)657 05 14
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

<?php get_footer(); ?>
