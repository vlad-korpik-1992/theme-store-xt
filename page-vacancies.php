<?php
/**
  * Template Name: Вакансии
*/
?>
<?php get_header();?>
	<?php get_template_part( 'template-parts/content', 'breadcrumbs' );?>
    <section class="jobs">
        <div class="wrapper">
            <div class="jobs__head">
                <div class="page-title">
                    <h1><?php single_post_title(); ?></h1>
                </div>
            </div>
            <div class="jobs__box">
                <?  if( have_rows('vacancies') ):
                        $col = 1;
                        while ( have_rows('vacancies') ) : the_row();?>
                            <div class="jobs__box__items">
                                <a class="jobs__box__items__link" href="#" id="jobs<?echo $col;?>">
                                    <div class="jobs__box__items__link__head" id="jobs<?echo $col;?>">
                                        <h2 id="jobs<?echo $col;?>"><? the_sub_field('title_vacancies'); ?></h2>
                                        <svg id="jobs<?echo $col;?>" xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44" fill="none">
                                            <g clip-path="url(#clip0_1182_8249)">
                                            <path d="M22 9.16666V34.8333" stroke="black" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M9.16797 22H34.8346" stroke="black" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round"/>
                                            </g>
                                            <defs>
                                            <clipPath id="clip0_1182_8249">
                                            <rect width="44" height="44" fill="white"/>
                                            </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                </a>
                                <div class="jobs__box__items__link__desc" id="1jobs<?echo $col;?>">
                                    <p><? the_sub_field('desc_vacancies'); ?></p>
                                </div>
                                <div class="jobs__box__items__content" id="2jobs<?echo $col;?>">
                                    <? echo wpautop (the_sub_field('content_vacancies'));?>
                                </div>
                            </div>
                        <? $col++; endwhile;
                    else: echo 'В данный момент вакансий нет.';
                
                endif;
                
                ?>
            </div>
        </div>
    </section>
	<?php get_template_part( 'template-parts/content', 'feedback' );?>
<?php get_footer();?>