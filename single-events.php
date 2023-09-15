<?php get_header('team');?>
	<?php get_template_part( 'template-parts/content', 'breadcrumbs' );?>
	<section class="recital section--full">
        <img class="recital__img" id="recitalImg" src="<?php the_field('event-img-max')?>" alt="<?php single_post_title(); ?>">
        <div class="wrapper">
            <div class="recital__box">
                <div class="recital__box__inner" id="recital__box__inner">
                    <h1><?php single_post_title(); ?></h1>
                    <div class="recital__box__info">
                        <div class="recital__box__info__date">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <g clip-path="url(#clip0_1154_501)">
                                  <path d="M4 7C4 6.46957 4.21071 5.96086 4.58579 5.58579C4.96086 5.21071 5.46957 5 6 5H18C18.5304 5 19.0391 5.21071 19.4142 5.58579C19.7893 5.96086 20 6.46957 20 7V19C20 19.5304 19.7893 20.0391 19.4142 20.4142C19.0391 20.7893 18.5304 21 18 21H6C5.46957 21 4.96086 20.7893 4.58579 20.4142C4.21071 20.0391 4 19.5304 4 19V7Z" stroke="black" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M16 3V7" stroke="black" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M8 3V7" stroke="black" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M4 11H20" stroke="black" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M8 15H10V17H8V15Z" stroke="black" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round"/>
                                </g>
                                <defs>
                                  <clipPath id="clip0_1154_501">
                                    <rect width="24" height="24" fill="white"/>
                                  </clipPath>
                                </defs>
                            </svg>
                            <span><?php echo the_field('event-data');?></span>
                        </div>
                        <div class="recital__box__info__date">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                                <g clip-path="url(#clip0_1154_509)">
                                  <path d="M3.5 12C3.5 13.1819 3.73279 14.3522 4.18508 15.4442C4.63738 16.5361 5.30031 17.5282 6.13604 18.364C6.97177 19.1997 7.96392 19.8626 9.05585 20.3149C10.1478 20.7672 11.3181 21 12.5 21C13.6819 21 14.8522 20.7672 15.9442 20.3149C17.0361 19.8626 18.0282 19.1997 18.864 18.364C19.6997 17.5282 20.3626 16.5361 20.8149 15.4442C21.2672 14.3522 21.5 13.1819 21.5 12C21.5 10.8181 21.2672 9.64778 20.8149 8.55585C20.3626 7.46392 19.6997 6.47177 18.864 5.63604C18.0282 4.80031 17.0361 4.13738 15.9442 3.68508C14.8522 3.23279 13.6819 3 12.5 3C11.3181 3 10.1478 3.23279 9.05585 3.68508C7.96392 4.13738 6.97177 4.80031 6.13604 5.63604C5.30031 6.47177 4.63738 7.46392 4.18508 8.55585C3.73279 9.64778 3.5 10.8181 3.5 12Z" stroke="black" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M12.5 12L9.5 10" stroke="black" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M12.5 7V12" stroke="black" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round"/>
                                </g>
                                <defs>
                                  <clipPath id="clip0_1154_509">
                                    <rect width="24" height="24" fill="white" transform="translate(0.5)"/>
                                  </clipPath>
                                </defs>
                            </svg>
                            <span><?php echo the_field('event-clock');?></span>
                        </div>
                        <div class="recital__box__info__date recital__box__info__date--end">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <g clip-path="url(#clip0_1154_523)">
                                  <path d="M9 11C9 11.7956 9.31607 12.5587 9.87868 13.1213C10.4413 13.6839 11.2044 14 12 14C12.7956 14 13.5587 13.6839 14.1213 13.1213C14.6839 12.5587 15 11.7956 15 11C15 10.2044 14.6839 9.44129 14.1213 8.87868C13.5587 8.31607 12.7956 8 12 8C11.2044 8 10.4413 8.31607 9.87868 8.87868C9.31607 9.44129 9 10.2044 9 11Z" stroke="black" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M17.657 16.657L13.414 20.9C13.039 21.2746 12.5306 21.485 12.0005 21.485C11.4704 21.485 10.962 21.2746 10.587 20.9L6.343 16.657C5.22422 15.5381 4.46234 14.1127 4.15369 12.5608C3.84504 11.009 4.00349 9.40047 4.60901 7.93868C5.21452 6.4769 6.2399 5.22749 7.55548 4.34846C8.87107 3.46943 10.4178 3.00024 12 3.00024C13.5822 3.00024 15.1289 3.46943 16.4445 4.34846C17.7601 5.22749 18.7855 6.4769 19.391 7.93868C19.9965 9.40047 20.155 11.009 19.8463 12.5608C19.5377 14.1127 18.7758 15.5381 17.657 16.657Z" stroke="black" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round"/>
                                </g>
                                <defs>
                                  <clipPath id="clip0_1154_523">
                                    <rect width="24" height="24" fill="white"/>
                                  </clipPath>
                                </defs>
                            </svg>
                            <span><?php echo the_field('event-address');?></span>
                        </div>
                    </div>
                    <div class="recital__box__content">
						<?php echo wpautop(the_content());?>
                    </div>
					<?	if( get_field('event-link-buy') != null ):?>
                    	<a class="hero__box__content__link" href="<?php echo the_field('event-link-buy');?>" target="_blank">Купить билет</a>
					<? endif;?>
                </div>
            </div>
        </div>
    </section>
<?php get_footer();?>