<?php
  /**
  * Template Name: Мероприятия
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
                            <a class="school__box__list__link" href="<?php echo get_page_link(120)?>">Видео</a>
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
    <section class="posters">
        <div class="wrapper">
            <div class="posters__box">
                <?php  $args = array (
                            'post_type' => 'events',
                            'numberposts' => -1,
                            'order' => 'DESC',
                            'orderby'   => 'meta_value',
                            'suppress_filters' => true,
                            'post_status' => 'publish',
                        );
                  $result = wp_get_recent_posts($args);
                  $countItem = 1;
                  $classItem = '';
                  $classContent = '';
                  foreach ($result as $event) :
                    if($countItem == 7):
                      $countItem = 4;
                    endif;
                    if($countItem == 4 || $countItem == 6):
                      $classItem = 'posters__box__content--mt0';
                    endif;
                    if($countItem == 2 || $countItem == 5):
                      $classContent = 'posters__box__content--mt';
                    endif;
                    if(get_field('event-link', $event['ID']) == null):
                      $link = get_permalink($event['ID']);
                    else: $link = get_field('event-link', $event['ID']);
                          $linkTrue = true;
                    endif;
                ?>
                    <div class="posters__box__items <? echo $classItem; ?>">
                        <div class="posters__box__content <? echo $classContent; ?>">
                            <img class="posters__box__img" loading="lazy" src="<?php the_field('event-img-min', $event['ID']);?>" alt="<?php echo $event['post_title'];?>">
                            <a class="posters__box__link" href="<? echo $link;?>" <? if($linkTrue == true):?>target="_blank"<?endif;?>><?php echo $event['post_title'];?></a>
                            <div class="posters__box__content__footer">
                                <a class="posters__box__content__footer__link" href="<? echo $link;?>" <? if($linkTrue == true):?>target="_blank"<?endif;?>>Подробнее</a>
                                <? if(get_field('event-link-buy', $event['ID']) != null):?>
                                    <a class="posters__box__content__footer__link" href="<?php the_field('event-link-buy' , $event['ID']);?>" target="_blank">Купить билет</a>
                                <? endif;?>
                            </div>
                        </div>
                    </div>
                <?
                  $classItem = '';
                  $classContent = '';
                  $countItem++; 
                  endforeach;?>
            </div>
        </div>
    </section>
<?php get_footer();?>