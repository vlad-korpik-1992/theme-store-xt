<?php
  /**
  * Template Name: Видео
  */
  ?>
<?php get_header('team');?>
	<?php get_template_part( 'template-parts/content', 'breadcrumbs' );?>
    <section class="events">
        <div class="wrapper">
            <div class="events__box">
                <div class="events__box__items">
                    <ul class="school__box__list">
                        <li class="school__box__list__items">
                            <a class="school__box__list__link" href="#">Школа</a>
                        </li>
                        <li class="school__box__list__items">
                            <a class="school__box__list__link" href="<?php echo get_page_link(82)?>">Мероприятия</a>
                        </li>
                    </ul>
                </div>
                <div class="events__box__items events__box__items--mt">
                    <div class="page-title">
                        <h1><?php wp_title("", true); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ticker section--full">
        <div class="ticker__title">
            <p>У нас появился свой мерч.</p>
            <p>У нас появился свой мерч.</p>
            <p>У нас появился свой мерч.</p>
            <p>У нас появился свой мерч.</p>
            <p>У нас появился свой мерч.</p>
            <p>У нас появился свой мерч.</p>
            <p>У нас появился свой мерч.</p>
            <p>У нас появился свой мерч.</p>
        </div>
    </section>
    <?  if( have_rows('video') ):
            $col = 1;
    ?>
            <section class="posters posters--video">
                <div class="wrapper">
                    <div class="posters__box posters__box--video">
                        <? while ( have_rows('video') ) : the_row(); 
                            if($col == 4): $col= 1; endif;
                        ?>
                            <div class="posters__box__items <?if($col == 2): echo 'video__link__inner--mt'; endif?>">
                                <a href="#" class="video__link" data-link = '<? the_sub_field('video-youtube'); ?>'>
                                    <div class="video__link__inner">
                                        <img class="video__link__play" loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/video__play.png" alt="<? the_sub_field('video-title'); ?>" data-link = '<? the_sub_field('video-youtube'); ?>'>
                                        <img class="video__link__img" loading="lazy" src="<? the_sub_field('video-img'); ?>" alt="<? the_sub_field('video-title'); ?>" data-link = '<? the_sub_field('video-youtube'); ?>'>
                                    </div>
                                    <div class="video__link__footer">
                                        <? if (get_sub_field('video-logo') != ''):?> 
                                            <img class="video__link__logo" loading="lazy" src="<? the_sub_field('video-logo'); ?>" alt="<? the_sub_field('video-title'); ?>" data-link = '<? the_sub_field('video-youtube'); ?>'> 
                                        <?endif;?>
                                        <span class="video__link__title" data-link = '<? the_sub_field('video-youtube'); ?>'><? the_sub_field('video-title'); ?></span>
                                    </div>
                                </a>
                            </div>
                        <? $col++; endwhile; ?>
                    </div>
                </div>
            </section>
    <? else:?>
        <section class="about">
            <div class="wrapper">
                <div class="single">
                    <p>Раздел на стадии заполнения.</p>
                </div>
            </div>
        </section>
            <?;
                
    endif;?>
    <section class="modal-video">
        <div class="wrapper">
            <a class="modal-video__link" href="" onclick="openModal(event)">
                <svg width="64px" height="64px" xmlns="http://www.w3.org/2000/svg" version="1" viewBox="0 0 24 24"><path d="M13 12l5-5-1-1-5 5-5-5-1 1 5 5-5 5 1 1 5-5 5 5 1-1z"></path></svg>
            </a>
            <div class="modal-video__content">
                <div class="modal-video__content__item" id="video-content"></div>
            </div>
        </div>
    </section>
<?php get_footer();?>