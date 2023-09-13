<?php get_header(); ?>

	<?php get_template_part( 'template-parts/content', 'breadcrumbs' );?>
		<section class="about">
			<div class="wrapper">
				<div class="page-title">
					<h1>Страница не найдена</h1>
				</div>
				<div class="about__subtitle">
					<p>Упс... Данная ошибка означает, что вы пытаетесь перейти по адресу, которого не существует.</p>
					<a class="hero__box__content__link hero__box__content__link--mt" href="/">На главную</a>
				</div>
			</div>
		</section>
	<?php get_template_part( 'template-parts/content', 'feedback' );?>

<?php
get_footer();
