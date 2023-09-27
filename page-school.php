<?php
  /**
  * Template Name: Школа
  */
  ?>
<?php get_header('team');?>
	<?php get_template_part( 'template-parts/content', 'breadcrumbs' );?>
    <section class="school">
        <div class="wrapper">
            <div class="school__box">
                <div class="school__box__items">
                    <ul class="school__box__list">
                        <li class="school__box__list__items">
                            <a class="school__box__list__link" href="<?php echo get_page_link(120)?>">Видео</a>
                        </li>
                        <li class="school__box__list__items">
                            <a class="school__box__list__link" href="<?php echo get_page_link(82)?>">Мероприятия</a>
                        </li>
                    </ul>
                    <div class="page-title">
                        <h1><?php wp_title("", true); ?></h1>
                    </div>
                    <div class="school__content">
                        <?php echo wpautop(the_content());?>
                    </div>
                    <form class="school__form" id="school__form" action="#" enctype="multipart/form-data">
                        <div class="school__form__box">
                            <input class="school__form__file" type="file" name="files[]" id="files" multiple="">
                            <label class="school__form__btn" for="files">
                                <div class="field__file-fake">Прикрепить документ</div>
                            </label>
                        <p class="school__form__status school__form__error" id="school__form__status">*Файл не должен превышать 1 MB.</p>
                        </div>
                        <input class="school__form__submit" id="school__form__submit" type="submit" value="Отправить">
                    </form>
                </div>
                <div class="school__box__items school__box__items--last">
                    <h2 class="section--school"><? echo the_field('diary-title');?></h2>
                    <div class="school__box__video">
                        <? if (get_field('diary-video-link') != '' && get_field('diary-video-img') != ''):
                                $title = get_field('diary-video-title');
                                $short_title = wp_trim_words( $title, 4, '...' );
                            ?> 
                            <div class="video__items video__items--school">
                                <a class="video__items__link video__link--open" href="#" data-link = '<? echo the_field('diary-video-link'); ?>'>
                                    <div class="video__items__img video__items__img--maxw">
                                        <img class="play" loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/play.png" alt="" data-link = '<? echo the_field('diary-video-link'); ?>'>
                                        <img loading="lazy" src="<? echo the_field('diary-video-img'); ?>" alt="" data-link = '<? echo the_field('diary-video-link'); ?>'>
                                    </div>
                                    <p class="video__items__title" data-link = '<? echo the_field('diary-video-link'); ?>'><? echo $short_title ?></p>
                                </a>
                            </div>
                        <? endif;?>  
                        <? if (get_field('diary-video-link-2') != '' && get_field('diary-video-img-2') != ''):
                                $title = get_field('diary-video-title-2');
                                $short_title = wp_trim_words( $title, 4, '...' );
                            ?> 
                            <div class="video__items video__items--school">
                                <a class="video__items__link video__link--open" href="#" data-link = '<? echo the_field('diary-video-link-2'); ?>'>
                                    <div class="video__items__img video__items__img--maxw">
                                        <img class="play" loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/play.png" alt="" data-link = '<? echo the_field('diary-video-link-2'); ?>'>
                                        <img loading="lazy" src="<? echo the_field('diary-video-img-2'); ?>" alt="" data-link = '<? echo the_field('diary-video-link-2'); ?>'>
                                    </div>
                                    <p class="video__items__title" data-link = '<? echo the_field('diary-video-link-2'); ?>'><? echo $short_title ?></p>
                                </a>
                            </div>
                        <? endif;?>  
                        <? if (get_field('diary-video-link-3') != '' && get_field('diary-video-img-3') != ''):
                                $title = get_field('diary-video-title-3');
                                $short_title = wp_trim_words( $title, 4, '...' );
                            ?> 
                            <div class="video__items video__items--school">
                                <a class="video__items__link video__link--open" href="#" data-link = '<? echo the_field('diary-video-link-3'); ?>'>
                                    <div class="video__items__img video__items__img--maxw">
                                        <img class="play" loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/play.png" alt="" data-link = '<? echo the_field('diary-video-link-3'); ?>'>
                                        <img loading="lazy" src="<? echo the_field('diary-video-img-3'); ?>" alt="" data-link = '<? echo the_field('diary-video-link-3'); ?>'>
                                    </div>
                                    <p class="video__items__title" data-link = '<? echo the_field('diary-video-link-3'); ?>'><? echo $short_title ?></p>
                                </a>
                            </div>
                        <? endif;?>
                        <? if (get_field('diary-video-link-4') != '' && get_field('diary-video-img-4') != ''):
                                $title = get_field('diary-video-title-4');
                                $short_title = wp_trim_words( $title, 4, '...' );
                            ?>
                            <div class="video__items video__items--school">
                                <a class="video__items__link video__link--open" href="#" data-link = '<? echo the_field('diary-video-link-4'); ?>'>
                                    <div class="video__items__img video__items__img--maxw">
                                        <img class="play" loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/play.png" alt="" data-link = '<? echo the_field('diary-video-link-4'); ?>'>
                                        <img loading="lazy" src="<? echo the_field('diary-video-img-4'); ?>" alt="" data-link = '<? echo the_field('diary-video-link-4'); ?>'>
                                    </div>
                                    <p class="video__items__title" data-link = '<? echo the_field('diary-video-link-4'); ?>'><? echo $short_title ?></p>
                                </a>
                            </div>
                        <? endif;?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="work section--full">
        <img class="work__img--absolute" loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/work-section--full-absolute-left.png" alt="<? echo the_field('school-title');?>">
        <div class="wrapper wrapper--full">
            <div class="section__title">
                <h2><? echo the_field('school-title');?></h2>
            </div>
            <div class="work__box">
                <div class="work__box__items">
                    <div class="word__box__content">
                        <? if(get_field('school-img-01')):?>
                            <a href="#" class="video__link--open" data-link='<? echo the_field('school-link-video-01')?>'>
                                <img loading="lazy" class="work__box__img work__box__img--minh--onerow" data-link='<? echo the_field('school-link-video-01')?>' src="<? echo the_field('school-img-01');?>" alt="">
                            </a>
                        <? endif; ?>
                        <? if(get_field('school-img-02')):?>
                            <a href="#" class="video__link--open" data-link='<? echo the_field('school-link-video-02')?>'>
                                <img loading="lazy" class="work__box__img" data-link='<? echo the_field('school-link-video-02')?>' src="<? echo the_field('school-img-02');?>" alt="">
                            </a>
                        <? endif; ?>
                        <? if(get_field('school-img-03')):?>
                            <a href="#" class="video__link--open" data-link='<? echo the_field('school-link-video-03')?>'>
                                <img loading="lazy" class="work__box__img" data-link='<? echo the_field('school-link-video-03')?>' src="<? echo the_field('school-img-03');?>" alt="">
                            </a>
                        <? endif; ?>
                    </div>
                </div>
                <div class="work__box__items">
                    <div class="word__box__content">
                        <? if(get_field('school-img-04')):?>
                            <a href="#" class="video__link--open" data-link='<? echo the_field('school-link-video-04')?>'>
                                <img loading="lazy" class="work__box__img work__box__img--minh" data-link='<? echo the_field('school-link-video-04')?>' src="<? echo the_field('school-img-04');?>" alt="">
                            </a>
                        <? endif; ?>
                        <? if(get_field('school-img-05')):?>
                            <a href="#" class="video__link--open" data-link='<? echo the_field('school-link-video-05')?>'>
                                <img loading="lazy" class="work__box__img" data-link='<? echo the_field('school-link-video-05')?>' src="<? echo the_field('school-img-05');?>" alt="">
                            </a>
                        <? endif; ?>
                    </div>
                </div>
                <div class="work__box__items">
                    <div class="word__box__content">
                        <? if(get_field('school-img-06')):?>
                            <a href="#" class="video__link--open" data-link='<? echo the_field('school-link-video-06')?>'>
                                <img loading="lazy" class="work__box__img work__box__img--minh--onerow" data-link='<? echo the_field('school-link-video-06')?>' src="<? echo the_field('school-img-06');?>" alt="">
                            </a>
                        <? endif; ?>
                        <? if(get_field('school-img-07')):?>
                            <a href="#" class="video__link--open" data-link='<? echo the_field('school-link-video-07')?>'>
                                <img loading="lazy" class="work__box__img" data-link='<? echo the_field('school-link-video-07')?>' src="<? echo the_field('school-img-07');?>" alt="">
                            </a>
                        <? endif; ?>
                        <? if(get_field('school-img-08')):?>
                            <a href="#" class="video__link--open" data-link='<? echo the_field('school-link-video-08')?>'>
                                <img loading="lazy" class="work__box__img" data-link='<? echo the_field('school-link-video-08')?>' src="<? echo the_field('school-img-08');?>" alt="">
                            </a>
                        <? endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
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