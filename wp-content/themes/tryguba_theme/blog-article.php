<?php

/*
Template Name: Блог
Template Post Type: post
*/

?>
<?php get_header(); ?>

<section class="topic-blog" >
	<div class="container">
		<h2 class="title"><?php the_title();?></h2>
		<div class="row">
			<div class="col-10 offset-1">
				<div class="topic-blog-item-img"><img src="<?php the_post_thumbnail_url();?>" alt="item"></div>
				<h2 class="topic-blog-title"><?php the_title();?></h2>
				<div class="topic-blog-text"><p><?php the_content();?></p></div>
				
				<div class="comments-form">Залишити коментар</div>
<!--				=======================FORM========================-->
				<form action="POST" id="form">
					<div class="input">
						<input type="text" placeholder="Введіть Ім`я" required="required">
						<input type="email" placeholder="Введіть E-mail" required="required">
					</div>
					<textarea name="comment" cols="40" rows="15" placeholder="Напишіть повідомлення"></textarea>
					<button class="button" type="submit">ВІДПРАВИТИ</button>
				</form>
<!--				======================= END FORM========================-->
				
				<!--
				<div class="comments">
					<div class="comments-title">Коментарі</div>
					<div class="row">
						<div class="col-md-11">
							<div class="comments-box">
								<div class="comments-box-img"><img src="img/avatar.png" alt="avatar"></div>
								<div class="comments-box-text">
									<div class="comments-box-text-name">Anna</div>
									<div class="comments-box-text-data">Вересень 13, 2018 в 13:19</div>
									<div class="comments-box-text-com">Lorem ipsum dolor sit amet, consectetur
										adipisicing elit. Assumenda at autem cum delectus dicta ducimus eaque error ex
										expedita facere impedit ipsum mollitia Lorem ipsum dolor sit amet, consectetur
										adipisicing elit. Aliquam explicabo officia quia repudiandae voluptate!
										Accusamus alias aliquam asperiores assumenda consectetur dicta eaque esse
										eveniet excepturi explicabo facilis incidunt ipsum itaque laborum mollitia
										nostrum numquam odit officia pariatur perspiciatis, praesentium provident quia
										ratione recusandae rem repudiandae sunt tempora vitae voluptate voluptatibus.
										Accusantium architecto commodi dicta eaque exercitationem, iure quaerat quis
										velit veniam vitae! Ducimus eius exercitationem fuga incidunt labore magni
										neque, perferendis quibusdam sed vel! Impedit itaque nihil nobis nulla? Itaque.
										nihil, pariatur perferendis, possimus
										quod, quos recusandae rerum suscipit vitae voluptatibus voluptatum?
									</div>
								</div>
							</div>
							<div class="comments-box dabble">
								<div class="comments-box-img"><img src="img/avatar1.png" alt="avatar"></div>
								<div class="comments-box-text">
									<div class="comments-box-text-name">Anton</div>
									<div class="comments-box-text-data">Вересень 13, 2018 в 13:19</div>
									<div class="comments-box-text-com">Lorem ipsum dolor sit amet, consectetur
										adipisicing elit. Assumenda at autem cum delectus dicta ducimus eaque error ex
										expedita facere impedit ipsum mollitia nihil, pariatur perferendis, possimus
										quod, quos recusandae rerum suscipit vitae voluptatibus voluptatum?
									</div>
								</div>
							</div>
							<div class="comments-box ">
								<div class="comments-box-img"><img src="img/avatar2.png" alt="avatar"></div>
								<div class="comments-box-text">
									<div class="comments-box-text-name">Veronica</div>
									<div class="comments-box-text-data">Вересень 13, 2018 в 13:19</div>
									<div class="comments-box-text-com">Lorem ipsum dolor sit amet, consectetur
										adipisicing elit. Assumenda at autem cum delectus dicta ducimus eaque error ex
										expedita facere impedit ipsum mollitia nihil, pariatur perferendis, possimus
										quod, quos recusandae rerum suscipit vitae voluptatibus voluptatum?
									</div>
								</div>
							</div>
							<div class="comments-box ">
								<div class="comments-box-img"><img src="img/avatar.png" alt="avatar"></div>
								<div class="comments-box-text">
									<div class="comments-box-text-name">Anna</div>
									<div class="comments-box-text-data">Вересень 13, 2018 в 13:19</div>
									<div class="comments-box-text-com">Lorem ipsum dolor sit amet, consectetur
										adipisicing elit. Assumenda at autem cum delectus dicta ducimus eaque error ex
										expedita facere impedit ipsum mollitia nihil, pariatur perferendis, possimus
										quod, quos recusandae rerum suscipit vitae Lorem ipsum dolor sit amet,
										consectetur adipisicing elit. A adipisci aut dicta distinctio et explicabo ipsum
										molestias voluptates? Accusamus adipisci blanditiis consequatur consequuntur
										dignissimos error facilis, minima modi neque nihil numquam odio perspiciatis
										quasi reprehenderit repudiandae sint tempore ullam vero.voluptatibus voluptatum?
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			-->
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
