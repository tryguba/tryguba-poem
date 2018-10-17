<?php
/*
Template Name: Блог
*/
?>
<?php get_header(); ?>


<section class="blog" id="blog">
	<div class="container">
		<h2 class="title"><?php the_title(); ?></h2>
		<div class="row">
			<?php
			$posts = get_posts(array(
				'numberposts' => 16,
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
<!--								<div class="box-text-post">-->
<!--									<img src="--><?php //bloginfo('template_url'); ?><!--/img/post.png" alt="post">-->
<!--								</div>-->
								<div class="box-text-describe"><?php the_content(); ?></div>
							</div>
						</a>
					</div>
				</article>            <?php
				
				
			}
			
			wp_reset_postdata(); // сброс
			?>


			<!--
			<div class="col-md-3">
				<?php /*if (have_posts()) : while (have_posts()) : the_post(); */ ?>
					<article>
						<div class="box">
							<div class="box-img"><img src="<?php /*bloginfo('template_url'); */ ?>/img/blog-1.png"
							                          alt="item"></div>
							<div class="box-text">
								<div class="box-text-title"><?php /*the_title(); */ ?></div>
								<div class="box-text-post">
									<img src="<?php /*bloginfo('template_url'); */ ?>/img/post.png" alt="post">
									<span class="count">147</span>
								</div>
								<div class="box-text-describe"><?php /*the_content(); */ ?></div>
							</div>
						</div>
					</article>
				
				<?php /*endwhile; */ ?>
				
				<?php /*else: */ ?>
				
				<?php /*endif; */ ?>

				<div class="row justify-content-center">
					<div class="col-md-8">
						<div class="pagination">
							<a href="#">&laquo;</a>
							<a href="#">1</a>
							<a href="#" class="active">2</a>
							<a href="#">3</a>
							<a href="#">4</a>
							<a href="#">5</a>
							<a href="#">6</a>
							<a href="#">&raquo;</a>
						</div>
					</div>
				</div>
			</div>
			-->


</section>

<?php get_footer(); ?>
