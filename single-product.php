<? get_header('team')?>
    <?php get_template_part( 'template-parts/content', 'breadcrumbs' );
        $product = wc_get_product(get_the_ID());;
    ?>
    <section class="cart section--full">
        <div class="wrapper wrapper--full">
            <div class="cart__box">
                <div class="cart__box__items">
                    <?php $gallery = $product->get_gallery_attachment_ids();?>
                    <div class="cart__slider">
                        <?php foreach( $gallery as $image ) : 
                           $imageLink = wp_get_attachment_url( $image ); 
                        ?>
                            <img class="cart__slider__img" src="<? echo $imageLink?>" alt="">
                        <? endforeach ?>
                    </div>
                    <div class="cart__sliderprev">
                        <?php foreach( $gallery as $image ) :
                            $imageLink = wp_get_attachment_url( $image );
                        ?>
                            <img class="cart__sliderprev__img" src="<? echo $imageLink?>" alt="">
                        <? endforeach ?>
                    </div>
                </div>
                <div class="cart__box__items">
                    <div class="cart__box__content">
                        <div class="cart__box__title">
                            <h1><? the_title(); ?></h1>
                        </div>
                        <?  if ($product->is_type( 'variable' )) :?>
                            <div class="card__box__size">
                            <?
                                $variations = $product->get_available_variations(); 
                                if(empty($variations)): echo 'Размеры одежды не указаны'; 
                                else:
                                    $item = 1;
                                    foreach($variations as $variationProduct): 
                                        if($item == 1): $buyCartProductID = $variationProduct['variation_id'];  endif;
                                        $attributes = $variationProduct['attributes'];
                                        $attributSize = $attributes['attribute_pa_dress-size'];
                                        $attributSize = preg_replace("~-~", "/", $attributSize, 1);
                                        $attributSize = preg_replace("~-~", "<br/>", $attributSize, 1);
                                ?>
                                        <a class="card__box__size__link select-size <? if($item == 1): echo 'card__box__size__link--active'; endif; ?>" href="#" data-cart="<? echo $variationProduct['variation_id']; ?>"><? echo $attributSize; ?></a>
                                <?
                                    $item++;
                                    endforeach;
                                endif;    
                            ?>
                            </div>
                        <?
                            else:
                                echo '<p>Размеры одежды не указаны</p>';
                            endif;
                        ?>
                        <div class="card__box__desc">
                            <?php echo wpautop(the_content());?>
                        </div>
                        <?  if ($product->is_type( 'variable' )) :?>
                            <div class="card__box__buy">
                                <span class="card__box__price"><?php echo $product->get_price(); ?> $</span>
                                <a class="card__box__btn product_type_simple add_to_cart_button ajax_add_to_cart" href="?add-to-cart=<?php echo $buyCartProductID ?>" data-product_id="<?php echo $buyCartProductID; ?>" rel="nofollow">Добавить в корзину</a>
                            </div>
                        <?  endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php if(get_field('product-specifications-left-block') != '' || get_field('product-specifications-right-block') != ''):?>
        <section class="features section--full">
            <div class="wrapper wrapper--full">
                <div class="features__box">
                    <div class="featues__box__items">
                        <div class="featues__box__content">
                            <? echo wpautop( get_field('product-specifications-left-block') )?>
                        </div>
                    </div>
                    <div class="featues__box__items">
                        <div class="featues__box__content">
                            <? echo wpautop( get_field('product-specifications-right-block') )?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <? endif;?>
    <section class="alike section--full">
        <div class="wrapper wrapper--full">
            <div class="section__title section__title--black">
                <h2>Другие товары</h2>
            </div>
            <?
                $args = array(
                    'post_type' => 'product',
                    'post__not_in' => array( $post->ID ),
                    'posts_per_page' => 8,
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
<? get_footer()?>