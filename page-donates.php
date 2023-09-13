<?php
/**
  * Template Name: Донаты
*/
?>
<?php get_header();?>
    <?php get_template_part( 'template-parts/content', 'breadcrumbs' );?>
    <section class="donations">
        <img class="donations__img" loading="lazy" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );?>" alt="<?php single_post_title(); ?>">
        <div class="wrapper">
            <div class="donations__box">
                <div class="page-title">
                    <h1><?php single_post_title(); ?></h1>
                </div>
                <div class="donations__box__content">
                    <?php echo wpautop(the_content());?>
                </div>
            </div>
        </div>
    </section>
	<?php get_template_part( 'template-parts/content', 'feedback' );?>
<?php get_footer();?>
