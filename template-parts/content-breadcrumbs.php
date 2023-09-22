    <section class="breadcrumbs <? if( is_singular( 'events' ) ): echo 'breadcrumbs--event-page'; endif; ?>
        <? if( is_product() ): echo 'breadcrumbs--cart'; endif;?>">
        <div class="wrapper">
			<?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs('•'); ?>
            <? if( is_product() ):?><img class="breadcrumbs-img-absolute-top" loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/catalog--absolute.png" alt=""><? endif;?>
        </div>
    </section>