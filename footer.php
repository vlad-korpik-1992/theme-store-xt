	<footer class="footer">
        <div class="wrapper wrapper--footer">
            <div class="footer__box">
                <div class="footer__box__items">
                    <a class="logo" href="#">
                        <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/logo.svg" alt="">
                    </a>
                    <p>© 2023 Все права защищены.</p>
                </div>
                <div class="footer__box__items">
                    <ul class="footer__menu__list">
                        <li class="footer__menu__list__items">
                            <a class="footer__link" href="<?php echo get_page_link(12)?>">О нас</a>
                        </li>
                        <li class="footer__menu__list__items">
                            <a class="footer__link" href="#">Команда</a>
                        </li>
                        <li class="footer__menu__list__items">
                            <a class="footer__link" href="<?php echo get_page_link(44)?>">Вакансии</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <section class="menu-modal menu-modal--one section--full">
        <a href="https://yandex.by/" class="menu-modal__link">Наши проекты</a>
        <img class="menu-modal__img" loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/modal__menu__one.png" alt="">
    </section>
    <section class="menu-modal menu-modal--shop section--full">
        <a href="https://yandex.by/" class="menu-modal__link menu-modal__link--shop">Онлайн-магазин</a>
        <img class="menu-modal__img--shop" loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/modal__menu__basket.png" alt="">
    </section>
    <section class="menu-modal menu-modal--donat section--full">
        <a href="<?php echo get_page_link(24)?>" loading="lazy" class="menu-modal__link menu-modal__link--donat">Донаты</a>
        <img class="menu-modal__img--shop" src="<?php bloginfo('template_url'); ?>/assets/img/modal__menu__donat.png" alt="">
    </section>
	<?php wp_footer(); ?>
</body>
</html>