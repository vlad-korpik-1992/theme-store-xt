<?
	if ( wc_get_page_id( 'shop' ) > 0 ) : ?>
		<p>Ваша корзина пуста</p>
		<a class="cart-empty__link" href="<?php echo get_page_link(299)?>">Вернуться в интернет-магазин</a>
<?php endif; ?>
