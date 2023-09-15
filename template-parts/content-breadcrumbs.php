    <section class="breadcrumbs <? if( is_singular( 'events' ) ): echo 'breadcrumbs--event-page'; endif; ?>">
        <div class="wrapper">
			<?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs('•'); ?>
        </div>
    </section>