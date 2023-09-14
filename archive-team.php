<?php
  /**
  * Template Name: Команда
  */
  ?>
<?php get_header('catalog');?>
	<?php get_template_part( 'template-parts/content', 'breadcrumbs' );?>
    <section class="about">
        <div class="wrapper">
            <div class="page-title">
                <h1><?php wp_title("", true); ?></h1>
            </div>
        </div>
    </section>
    <section class="team">
        <div class="wrapper wrapper--team">
            <?php  $args = array (
                            'post_type' => 'team',
                            'numberposts' => -1,
                            'order' => 'DESC',
                            'orderby'   => 'meta_value',
                            'suppress_filters' => true,
                            'post_status' => 'publish',
                        );
                $result = wp_get_recent_posts($args);
                $arrauCount = count($result);
                $iterationRate = ceil($arrauCount / 4);
                for($i = 0; $i < $iterationRate; $i++):
                    $itemWorker = 1;  
                ?>
                    <div class="team__box">
                        <?foreach ($result as $worker) :
                            if($itemWorker == 5): break; endif;?>
                            <div class="team__box__items <? if($itemWorker % 2 == 0 ): echo 'team__box__items--top'; endif; ?>">
                                <? if($itemWorker == 3 && $i % 2 === 0):?> <img class="team__img__left0-absolute" loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/team__ledt__absolute.png" alt=""> <?endif;?>
                                <? if($itemWorker == 3 && $i % 2 === 1):?> <img class="team__img__right0-seven-absolute" loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/team__right__seven-absolute.png" alt=""> <?endif;?>
                                <a class="team__box__link <? if($itemWorker == 2 ): echo 'team__box__link--first-right--top'; endif; 
                                                            if($itemWorker == 3): echo 'team__box__link--two-left'; endif;
                                                            if($itemWorker == 4): echo 'team__box__link--end'; endif;?>" href="<?php echo get_permalink($worker['ID']); ?>">
                                    <img class="team__box__inner__img" loading="lazy" src="<?php the_field('team-avatar-min', $worker['ID']);?>" alt="">
                                    <p><?php echo $worker['post_title'];?></p>
                                    <span>/ <?php the_field('team-position' , $worker['ID']);?> /</span>
                                </a>
                            </div>
                        <?  array_shift($result);
                            $itemWorker++;
                        endforeach;
                        ?>
                    </div>  
            <?  endfor;
            ?>
        </div>
    </section>
	<?php get_template_part( 'template-parts/content', 'feedback' );?>
<?php get_footer();?>