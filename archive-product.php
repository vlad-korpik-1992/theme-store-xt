<?php get_header('catalog');?>
    <?php get_template_part( 'template-parts/content', 'breadcrumbs' );?>
    <section class="catalog">
        <div class="wrapper">
            <div class="page-title">
                <h1>Онлайн-магазин</h1>
            </div>
        </div>
    </section>
    <section class="shop">
        <div class="wrapper">
            <div class="shop__box">
                <?php  
                    $args = array(
                        'post_type'              => array( 'product' ),
                        'post_status'            => array( 'publish' ),
                        'nopaging'               => true,
                    );
                    $query = new WP_Query( $args );
                    $item = 1;
                    if ( $query->have_posts()) :
                        while ( $query->have_posts() ) : $query->the_post();
                        if($item == 5): $item = 1; endif;
                        $product_data = wc_get_product( get_the_ID() );?>
                        <div class="shop__box__items <? if( $item == 2 || $item == 3 ): echo 'shop__box__items--small'; endif; ?>">
                            <? if( $item == 4 ): ?>
                                <img class="shop__box__absolute" loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/shop--absolute.png" alt="">
                            <? endif;?>
                            <a class="shop__box__link" href="<?php echo get_permalink($posts['ID']); ?>">
                                <img class="shop__box__img" loading="lazy" src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' ) ?>" alt="">
                                <div class="shop__box__info">
                                    <h2><?php echo get_the_title()?></h2>
                                    <span>USD $<?php echo $product_data->get_price(); ?></span>
                                </div>
                            </a>
                        </div>
                    <? $item++; endwhile; wp_reset_postdata();
                    else: echo 'В данный момент товар не добавлен.'; endif;?>
            </div>
        </div>
    </section>
<?php get_footer();?>