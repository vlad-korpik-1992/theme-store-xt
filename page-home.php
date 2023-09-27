<?php
  /**
  * Template Name: Главная
  */
?>
<?php get_header('team');?>
    <section class="hero">
        <div class="wrapper">
            <div class="hero__box">
                <?php  $args = array (
                            'post_type' => 'events',
                            'numberposts' => -1,
                            'order' => 'DESC',
                            'orderby'   => 'meta_value',
                            'suppress_filters' => true,
                            'post_status' => 'publish',
                            'meta_query' => array(
                                'relation' => 'AND',
                                array(
                                    'key' => 'event-display-home',
                                    'value' => '1',
                                ),
                            ),
                        );
                    $result = wp_get_recent_posts($args);
                    foreach ($result as $event) : 
                        $short_title = wp_trim_words( $event['post_title'], 3, '...' );
                        if(get_field('event-link', $event['ID']) == null):
                            $link = get_permalink($event['ID']);
                        else: $link = get_field('event-link', $event['ID']);
                            $linkTrue = true;
                        endif;
                    ?>
                        <div class="hero__box__items">
                            <div class="hero__box__content">
                                <h1><?php echo $short_title; ?></h1>
                                <span><?php the_field('event-data-home', $event['ID']);?></span>
                                <p><?php the_field('event-address', $event['ID']);?></p>
                                <a class="hero__box__content__link" href="<? echo $link;?>" <? if($linkTrue == true):?>target="_blank"<?endif;?>>Узнать больше</a>
                            </div>
                        </div>
                        <div class="hero__box__items hero__box__items--center">
                            <img class="hero__img__absolute--left" loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/hero--img--abs--left.png" alt="<? echo $event['post_title']; ?>">
                            <img class="hero__box__img" loading="lazy" src="<?php the_field('event-img-home', $event['ID']);?>" alt="<? echo $event['post_title']; ?>">
                            <img class="hero__img__absolute--right" loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/hero--img--abs--right.png" alt="<? echo $event['post_title']; ?>">
                        </div>
                    <?
                        break;
                        endforeach;
                        wp_reset_query();
                ?>
                <div class="hero__box__items">
                    <div class="hero__box__content video video--hero--row">
                        <? if (get_field('home-hero-screen-video-title') != '' && get_field('home-hero-screen-video-link') != ''):
                            $title = get_field('home-hero-screen-video-title');
                            $short_title = wp_trim_words( $title, 4, '...' );
                        ?>
                            <div class="video__items video__items--hero">
                                <a class="video__items__link video__link--open" href="#" data-link = '<? echo the_field('home-hero-screen-video-link'); ?>'>
                                    <div class="video__items__img video__items__img--maxw">
                                        <img class="play" loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/play.png" alt="" data-link = '<? echo the_field('home-hero-screen-video-link');?>'>
                                        <img loading="lazy" src="<? echo the_field('home-hero-screen-video-img'); ?>" alt="" data-link = '<? echo the_field('home-hero-screen-video-link');?>'>
                                    </div>
                                    <p class="video__items__title" data-link = '<? echo the_field('home-hero-screen-video-link');?>'><? echo $short_title ?></p>
                                </a>
                            </div>
                        <? endif; ?>
                        <? if (get_field('home-hero-screen-video-title-2') != '' && get_field('home-hero-screen-video-link-2') != ''):
                            $title = get_field('home-hero-screen-video-title-2');
                            $short_title = wp_trim_words( $title, 4, '...' );
                        ?>
                            <div class="video__items video__items--hero">
                                <a class="video__items__link video__link--open" href="#" data-link = '<? echo the_field('home-hero-screen-video-link-2'); ?>'>
                                    <div class="video__items__img video__items__img--maxw">
                                        <img class="play" loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/play.png" alt="" data-link = '<? echo the_field('home-hero-screen-video-link-2');?>'>
                                        <img loading="lazy" src="<? echo the_field('home-hero-screen-video-img-2'); ?>" alt="" data-link = '<? echo the_field('home-hero-screen-video-link-2');?>'>
                                    </div>
                                    <p class="video__items__title" data-link = '<? echo the_field('home-hero-screen-video-link-2');?>'><? echo $short_title ?></p>
                                </a>
                            </div>
                        <? endif; ?>
                        <? if (get_field('home-hero-screen-video-title-3') != '' && get_field('home-hero-screen-video-link-3') != ''):
                            $title = get_field('home-hero-screen-video-title-3');
                            $short_title = wp_trim_words( $title, 4, '...' );
                        ?>
                            <div class="video__items video__items--hero">
                                <a class="video__items__link video__link--open" href="#" data-link = '<? echo the_field('home-hero-screen-video-link-3'); ?>'>
                                    <div class="video__items__img video__items__img--maxw">
                                        <img class="play" loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/play.png" alt="" data-link = '<? echo the_field('home-hero-screen-video-link-3');?>'>
                                        <img loading="lazy" src="<? echo the_field('home-hero-screen-video-img-3'); ?>" alt="" data-link = '<? echo the_field('home-hero-screen-video-link-3');?>'>
                                    </div>
                                    <p class="video__items__title" data-link = '<? echo the_field('home-hero-screen-video-link-3');?>'><? echo $short_title ?></p>
                                </a>
                            </div>
                        <? endif; ?>
                        <? if (get_field('home-hero-screen-video-title-4') != '' && get_field('home-hero-screen-video-link-4') != ''):
                            $title = get_field('home-hero-screen-video-title-4');
                            $short_title = wp_trim_words( $title, 4, '...' );
                        ?>
                            <div class="video__items video__items--hero">
                                <a class="video__items__link video__link--open" href="#" data-link = '<? echo the_field('home-hero-screen-video-link-4'); ?>'>
                                    <div class="video__items__img video__items__img--maxw">
                                        <img class="play" loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/play.png" alt="" data-link = '<? echo the_field('home-hero-screen-video-link-4');?>'>
                                        <img loading="lazy" src="<? echo the_field('home-hero-screen-video-img-4'); ?>" alt="" data-link = '<? echo the_field('home-hero-screen-video-link-4');?>'>
                                    </div>
                                    <p class="video__items__title" data-link = '<? echo the_field('home-hero-screen-video-link-4');?>'><? echo $short_title ?></p>
                                </a>
                            </div>
                        <? endif; ?> 
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="project">
        <div class="wrapper">
            <div class="project__box">
                <div class="project__box__items">
                    <div class="project__content video--hero--row">
                        <? if (get_field('home-second-screen-video-title') != '' && get_field('home-second-screen-video-link') != ''):
                            $title = get_field('home-second-screen-video-title');
                            $short_title = wp_trim_words( $title, 4, '...' );
                        ?>
                            <div class="video__items video__items--hero">
                                <a class="video__items__link video__link--open" href="#" data-link='<? echo the_field('home-second-screen-video-link'); ?>'>
                                    <div class="video__items__img video__items__img--maxw">
                                        <img class="play" loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/play.png" alt="" data-link='<? echo the_field('home-second-screen-video-link'); ?>'>
                                        <img loading="lazy" src="<? echo the_field('home-second-screen-video-img'); ?>" alt="<? echo get_field('home-second-screen-video-title')?>" data-link='<? echo the_field('home-second-screen-video-link'); ?>'>
                                    </div>
                                    <p class="video__items__title" data-link='<? echo the_field('home-second-screen-video-link'); ?>'><? echo $short_title; ?></p>
                                </a>
                            </div>
                        <? endif; ?>
                        <? if (get_field('home-second-screen-video-title-2') != '' && get_field('home-second-screen-video-link-2') != ''):
                            $title = get_field('home-second-screen-video-title-2');
                            $short_title = wp_trim_words( $title, 4, '...' );
                        ?>
                            <div class="video__items video__items--hero">
                                <a class="video__items__link video__link--open" href="#" data-link='<? echo the_field('home-second-screen-video-link-2'); ?>'>
                                    <div class="video__items__img video__items__img--maxw">
                                        <img class="play" loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/play.png" alt="" data-link='<? echo the_field('home-second-screen-video-link-2'); ?>'>
                                        <img loading="lazy" src="<? echo the_field('home-second-screen-video-img-2'); ?>" alt="<? echo get_field('home-second-screen-video-title-2')?>" data-link='<? echo the_field('home-second-screen-video-link-2'); ?>'>
                                    </div>
                                    <p class="video__items__title" data-link='<? echo the_field('home-second-screen-video-link-2'); ?>'><? echo $short_title; ?></p>
                                </a>
                            </div>
                        <? endif; ?>
                        <? if (get_field('home-second-screen-video-title-3') != '' && get_field('home-second-screen-video-link-3') != ''):
                            $title = get_field('home-second-screen-video-title-3');
                            $short_title = wp_trim_words( $title, 4, '...' );
                        ?>
                            <div class="video__items video__items--hero">
                                <a class="video__items__link video__link--open" href="#" data-link='<? echo the_field('home-second-screen-video-link-3'); ?>'>
                                    <div class="video__items__img video__items__img--maxw">
                                        <img class="play" loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/play.png" alt="" data-link='<? echo the_field('home-second-screen-video-link-3'); ?>'>
                                        <img loading="lazy" src="<? echo the_field('home-second-screen-video-img-3'); ?>" alt="<? echo get_field('home-second-screen-video-title-3')?>" data-link='<? echo the_field('home-second-screen-video-link-3'); ?>'>
                                    </div>
                                    <p class="video__items__title" data-link='<? echo the_field('home-second-screen-video-link-3'); ?>'><? echo $short_title; ?></p>
                                </a>
                            </div>
                        <? endif; ?>
                    </div>
                </div>
                <div class="project__box__items">
                    <? if (get_field('home-second-screen-video-img-4') != '' && get_field('home-second-screen-video-link-4') != ''):?>
                        <a class="video__items__link video__link--open" href="#" data-link='<? echo the_field('home-second-screen-video-link-4'); ?>'>
                            <div class="video__items__img">
                                <img class="play" loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/play.png" alt="" data-link='<? echo the_field('home-second-screen-video-link-4'); ?>'>
                                <img loading="lazy" src="<? echo the_field('home-second-screen-video-img-4'); ?>" alt="" data-link='<? echo the_field('home-second-screen-video-link-4'); ?>'>
                            </div>
                        </a>
                    <? endif; ?>
                </div>
            </div>
        </div>
    </section>
    <section class="project">
        <div class="wrapper">
            <div class="project__box project__box--revers">
                <div class="project__box__items">
                    <? if (get_field('home-third-screen-video-img-4') != '' && get_field('home-third-screen-video-link-4') != ''):?>
                        <a class="video__items__link video__link--open" href="#" data-link='<? echo the_field('home-third-screen-video-link-4'); ?>'>
                            <div class="video__items__img">
                                <img class="play" loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/play.png" alt="" data-link='<? echo the_field('home-third-screen-video-link-4'); ?>'>
                                <img loading="lazy" src="<? echo the_field('home-third-screen-video-img-4'); ?>" alt="" data-link='<? echo the_field('home-third-screen-video-link-4'); ?>'>
                            </div>
                        </a>
                    <? endif; ?>
                </div>
                <div class="project__box__items">
                    <div class="project__content video--hero--row">
                        <? if (get_field('home-third-screen-video-title') != '' && get_field('home-third-screen-video-link') != ''):
                            $title = get_field('home-third-screen-video-title');
                            $short_title = wp_trim_words( $title, 4, '...' );
                        ?>
                            <div class="video__items video__items--hero">
                                <a class="video__items__link video__link--open" href="#" data-link='<? echo the_field('home-third-screen-video-link'); ?>'>
                                    <div class="video__items__img video__items__img--maxw">
                                        <img class="play" loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/play.png" alt="" data-link='<? echo the_field('home-third-screen-video-link'); ?>'>
                                        <img loading="lazy" src="<? echo the_field('home-third-screen-video-img'); ?>" alt="<? echo get_field('home-third-screen-video-title')?>" data-link='<? echo the_field('home-third-screen-video-link'); ?>'>
                                    </div>
                                    <p class="video__items__title" data-link='<? echo the_field('home-third-screen-video-link'); ?>'><? echo $short_title; ?></p>
                                </a>
                            </div>
                        <? endif; ?>
                        <? if (get_field('home-third-screen-video-title-2') != '' && get_field('home-third-screen-video-link-2') != ''):
                            $title = get_field('home-third-screen-video-title-2');
                            $short_title = wp_trim_words( $title, 4, '...' );
                        ?>
                            <div class="video__items video__items--hero">
                                <a class="video__items__link video__link--open" href="#" data-link='<? echo the_field('home-third-screen-video-link-2'); ?>'>
                                    <div class="video__items__img video__items__img--maxw">
                                        <img class="play" loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/play.png" alt="" data-link='<? echo the_field('home-third-screen-video-link-2'); ?>'>
                                        <img loading="lazy" src="<? echo the_field('home-third-screen-video-img-2'); ?>" alt="<? echo get_field('home-third-screen-video-title-2')?>" data-link='<? echo the_field('home-third-screen-video-link-2'); ?>'>
                                    </div>
                                    <p class="video__items__title" data-link='<? echo the_field('home-third-screen-video-link-2'); ?>'><? echo $short_title; ?></p>
                                </a>
                            </div>
                        <? endif; ?>
                        <? if (get_field('home-third-screen-video-title-3') != '' && get_field('home-third-screen-video-link-3') != ''):
                            $title = get_field('home-third-screen-video-title-3');
                            $short_title = wp_trim_words( $title, 4, '...' );
                        ?>
                            <div class="video__items video__items--hero">
                                <a class="video__items__link video__link--open" href="#" data-link='<? echo the_field('home-third-screen-video-link-3'); ?>'>
                                    <div class="video__items__img video__items__img--maxw">
                                        <img class="play" loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/play.png" alt="" data-link='<? echo the_field('home-third-screen-video-link-3'); ?>'>
                                        <img loading="lazy" src="<? echo the_field('home-third-screen-video-img-3'); ?>" alt="<? echo get_field('home-third-screen-video-title-3')?>" data-link='<? echo the_field('home-third-screen-video-link-3'); ?>'>
                                    </div>
                                    <p class="video__items__title" data-link='<? echo the_field('home-third-screen-video-link-3'); ?>'><? echo $short_title; ?></p>
                                </a>
                            </div>
                        <? endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="project">
        <div class="wrapper">
            <div class="project__box">
                <div class="project__box__items">
                    <div class="project__content video--hero--row">
                        <? if (get_field('home-fourth-screen-video-title') != '' && get_field('home-fourth-screen-video-link') != ''):
                            $title = get_field('home-fourth-screen-video-title');
                            $short_title = wp_trim_words( $title, 4, '...' );
                        ?>
                            <div class="video__items video__items--hero">
                                <a class="video__items__link video__link--open" href="#" data-link='<? echo the_field('home-fourth-screen-video-link'); ?>'>
                                    <div class="video__items__img video__items__img--maxw">
                                        <img class="play" loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/play.png" alt="" data-link='<? echo the_field('home-fourth-screen-video-link'); ?>'>
                                        <img loading="lazy" src="<? echo the_field('home-fourth-screen-video-img'); ?>" alt="<? echo get_field('home-fourth-screen-video-title')?>" data-link='<? echo the_field('home-fourth-screen-video-link'); ?>'>
                                    </div>
                                    <p class="video__items__title" data-link='<? echo the_field('home-fourth-screen-video-link'); ?>'><? echo $short_title; ?></p>
                                </a>
                            </div>
                        <? endif; ?>
                        <? if (get_field('home-fourth-screen-video-title-2') != '' && get_field('home-fourth-screen-video-link-2') != ''):
                            $title = get_field('home-fourth-screen-video-title-2');
                            $short_title = wp_trim_words( $title, 4, '...' );
                        ?>
                            <div class="video__items video__items--hero">
                                <a class="video__items__link video__link--open" href="#" data-link='<? echo the_field('home-fourth-screen-video-link-2'); ?>'>
                                    <div class="video__items__img video__items__img--maxw">
                                        <img class="play" loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/play.png" alt="" data-link='<? echo the_field('home-fourth-screen-video-link-2'); ?>'>
                                        <img loading="lazy" src="<? echo the_field('home-fourth-screen-video-img-2'); ?>" alt="<? echo get_field('home-fourth-screen-video-title-2')?>" data-link='<? echo the_field('home-fourth-screen-video-link-2'); ?>'>
                                    </div>
                                    <p class="video__items__title" data-link='<? echo the_field('home-fourth-screen-video-link-2'); ?>'><? echo $short_title; ?></p>
                                </a>
                            </div>
                        <? endif; ?>
                        <? if (get_field('home-fourth-screen-video-title-3') != '' && get_field('home-fourth-screen-video-link-3') != ''):
                            $title = get_field('home-fourth-screen-video-title-3');
                            $short_title = wp_trim_words( $title, 4, '...' );
                        ?>
                            <div class="video__items video__items--hero">
                                <a class="video__items__link video__link--open" href="#" data-link='<? echo the_field('home-fourth-screen-video-link-3'); ?>'>
                                    <div class="video__items__img video__items__img--maxw">
                                        <img class="play" loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/play.png" alt="" data-link='<? echo the_field('home-fourth-screen-video-link-3'); ?>'>
                                        <img loading="lazy" src="<? echo the_field('home-fourth-screen-video-img-3'); ?>" alt="<? echo get_field('home-fourth-screen-video-title-3')?>" data-link='<? echo the_field('home-fourth-screen-video-link-3'); ?>'>
                                    </div>
                                    <p class="video__items__title" data-link='<? echo the_field('home-fourth-screen-video-link-3'); ?>'><? echo $short_title; ?></p>
                                </a>
                            </div>
                        <? endif; ?>
                    </div>
                </div>
                <div class="project__box__items">
                    <? if (get_field('home-fourth-screen-video-img-4') != '' && get_field('home-fourth-screen-video-link-4') != ''):?>
                        <a class="video__items__link video__link--open" href="#" data-link='<? echo the_field('home-fourth-screen-video-link-4'); ?>'>
                            <div class="video__items__img">
                                <img class="play" loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/play.png" alt="" data-link='<? echo the_field('home-fourth-screen-video-link-4'); ?>'>
                                <img loading="lazy" src="<? echo the_field('home-fourth-screen-video-img-4'); ?>" alt="" data-link='<? echo the_field('home-fourth-screen-video-link-4'); ?>'>
                            </div>
                        </a>
                    <? endif; ?>
                </div>
            </div>
        </div>
    </section>
    <section class="top section--full">
        <div class="wrapper wrapper--full">
            <div class="section__title">
                <h2><? echo the_field('home-our-products'); ?></h2>
            </div>
            <?
                $args = array(
                    'post_type' => 'product',
                    'numberposts' => -1,
                    'order' => 'DESC',
                    'orderby'   => 'meta_value',
                    'suppress_filters' => true,
                    'post_status' => 'publish',
                    'meta_query' => array(
                        'relation' => 'AND',
                            array(
                                'key' => 'product-display-home',
                                'value' => '1',
                        ),
                    ),
                );
                $query = new WP_Query( $args );
            ?>
            <? if ( $query->have_posts() ) : ?>
                <div class="top__slider">
                    <?while ( $query->have_posts() ) : $query->the_post();?>
                        <div class="top__slider__items">
                            <a class="top__slider__content" href="<?php echo get_permalink($posts['ID']); ?>">
                                <img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' )?>" alt="">
                                <h3 class="top__slider__title"><?php echo get_the_title()?></h3>
                                <p class="top__slider__price">$<?php echo $product->get_price(); ?></p>
                            </a>
                        </div>
                    <?php endwhile;  wp_reset_postdata(); ?>
                </div>
            <?else : ?>
                    <p class="top--message"><?php esc_html_e( 'Товары отсутствуют' ); ?></p>
            <?php endif; ?>
        </div>
    </section>
    <? if (get_field('home-top-video-img') != '' && get_field('home-top-video-link') != ''):?>
        <section class="present">
            <img class="present--abs--left" loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/present--img--abs--left.png" alt="">
            <div class="wrapper">
                <div class="section__title section__title--black">
                    <h2><? echo the_field('home-top-title'); ?></h2>
                </div>
                <div class="present__box">
                    <a class="present__box__link video__link--open" href="#" data-link='<? echo the_field('home-top-video-link') ?>'>
                        <img class="play" loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/play.png" alt="Топ 1" data-link='<? echo the_field('home-top-video-link') ?>'>
                        <img loading="lazy" src="<? echo the_field('home-top-video-img') ?>" alt="Топ 1" data-link='<? echo the_field('home-top-video-link') ?>'>
                    </a>
                </div>
            </div>
        </section>
    <? endif; ?>
    <section class="work section--full">
        <img class="work__img--absolute" loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/work-section--full-absolute-left.png" alt="<? echo the_field('home-school-title');?>">
        <div class="wrapper wrapper--full">
            <div class="section__title">
                <h2><? echo the_field('home-school-title');?></h2>
            </div>
            <div class="work__box">
                <div class="work__box__items">
                    <div class="word__box__content">
                        <? if(get_field('home-school-img-01')):?>
                            <a href="#" class="video__link--open" data-link='<? echo the_field('home-school-link-video-01')?>'>
                                <img loading="lazy" class="work__box__img work__box__img--minh--onerow" data-link='<? echo the_field('home-school-link-video-01')?>' src="<? echo the_field('home-school-img-01');?>" alt="">
                            </a>
                        <? endif; ?>
                        <? if(get_field('home-school-img-02')):?>
                            <a href="#" class="video__link--open" data-link='<? echo the_field('home-school-link-video-02')?>'>
                                <img loading="lazy" class="work__box__img" data-link='<? echo the_field('home-school-link-video-02')?>' src="<? echo the_field('home-school-img-02');?>" alt="">
                            </a>
                        <? endif; ?>
                        <? if(get_field('home-school-img-03')):?>
                            <a href="#" class="video__link--open" data-link='<? echo the_field('home-school-link-video-03')?>'>
                                <img loading="lazy" class="work__box__img" data-link='<? echo the_field('home-school-link-video-03')?>' src="<? echo the_field('home-school-img-03');?>" alt="">
                            </a>
                        <? endif; ?>
                    </div>
                </div>
                <div class="work__box__items">
                    <div class="word__box__content">
                        <? if(get_field('home-school-img-04')):?>
                            <a href="#" class="video__link--open" data-link='<? echo the_field('home-school-link-video-04')?>'>
                                <img loading="lazy" class="work__box__img work__box__img--minh" data-link='<? echo the_field('home-school-link-video-04')?>' src="<? echo the_field('home-school-img-04');?>" alt="">
                            </a>
                        <? endif; ?>
                        <? if(get_field('home-school-img-05')):?>
                            <a href="#" class="video__link--open" data-link='<? echo the_field('home-school-link-video-05')?>'>
                                <img loading="lazy" class="work__box__img" data-link='<? echo the_field('home-school-link-video-05')?>' src="<? echo the_field('home-school-img-05');?>" alt="">
                            </a>
                        <? endif; ?>
                    </div>
                </div>
                <div class="work__box__items">
                    <div class="word__box__content">
                        <? if(get_field('home-school-img-06')):?>
                            <a href="#" class="video__link--open" data-link='<? echo the_field('home-school-link-video-06')?>'>
                                <img loading="lazy" class="work__box__img work__box__img--minh--onerow" data-link='<? echo the_field('home-school-link-video-06')?>' src="<? echo the_field('home-school-img-06');?>" alt="">
                            </a>
                        <? endif; ?>
                        <? if(get_field('home-school-img-07')):?>
                            <a href="#" class="video__link--open" data-link='<? echo the_field('home-school-link-video-07')?>'>
                                <img loading="lazy" class="work__box__img" data-link='<? echo the_field('home-school-link-video-07')?>' src="<? echo the_field('home-school-img-07');?>" alt="">
                            </a>
                        <? endif; ?>
                        <? if(get_field('home-school-img-08')):?>
                            <a href="#" class="video__link--open" data-link='<? echo the_field('home-school-link-video-08')?>'>
                                <img loading="lazy" class="work__box__img" data-link='<? echo the_field('home-school-link-video-08')?>' src="<? echo the_field('home-school-img-08');?>" alt="">
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