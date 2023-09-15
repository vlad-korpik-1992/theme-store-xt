<?php get_header();?>
	<?php get_template_part( 'template-parts/content', 'breadcrumbs' );?>
    <section class="about">
        <div class="wrapper">
            <div class="page-title">
                <h1><?php single_post_title(); ?></h1>
            </div>
            <div class="single">
				<?php echo wpautop(the_content());?>
            </div>
        </div>
    </section>
	<?php get_template_part( 'template-parts/content', 'feedback' );?>
<?php get_footer();?>