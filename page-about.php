<?php
/**
  * Template Name: О нас
*/
?>
<?php get_header();?>
    <?php get_template_part( 'template-parts/content', 'breadcrumbs' );?>
    <section class="about">
        <div class="wrapper">
            <div class="page-title">
                <h1><?php single_post_title(); ?></h1>
            </div>
            <div class="about__subtitle">
                <?php echo wpautop( the_field('about-subtitle') );?>
            </div>
        </div>
    </section>
    <section class="statistic section--full">
        <div class="statistic__row wrapper--full">
            <img class="statistic__img" loading="lazy" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );?>" alt="<?php single_post_title(); ?>">
            <div class="statistic__box">
                <div class="statistics__items">
                    <div class="statistics__items__inner">
                        <p><?php echo wpautop( the_field('about-stat-number-01') );?></p>
                        <span><?php echo wpautop( the_field('about-stat-title-01') );?></span>
                    </div>
                </div>
                <div class="statistics__items">
                    <div class="statistics__items__inner">
                        <p><?php echo wpautop( the_field('about-stat-number-02') );?></p>
                        <span><?php echo wpautop( the_field('about-stat-title-02') );?></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="direction">
        <div class="wrapper">
            <?php echo wpautop(the_content());?>
        </div>
    </section>
	<?php get_template_part( 'template-parts/content', 'feedback' );?>
<?php get_footer();?>
