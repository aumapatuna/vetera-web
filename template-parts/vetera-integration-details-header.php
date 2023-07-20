<!-- Integration details header -->
<section class="vetera-integration-details-header pt-80 pb-60">
    <div class="container">
        <!-- Integration details header wrapper -->
        <div class="vetera-integration-details-header__wrp text-center mt-36 mt-dt-88">
            <!-- Integration details header wrapper image -->
            <div class="vetera-integration-details-header__wrp__img mt-0 mb-0">
                <?php
                    if ( has_post_thumbnail() ) {
                    the_post_thumbnail( 'vetera-integration-details-header__wrp__img-img' );
                    }
                ?>
            </div>
            <!-- ./Integration details header wrapper image -->
            <!-- Integration details header content -->
            <h1 class="mt-16 mb-0"><?php printf( get_the_title() ); ?>
            </h1>
            <p class="color-darkash mt-20 mb-0"><?php the_field('integration_post_details_header_main_content'); ?></p>
            <a href="<?php the_field('integration_post_details_header_button_url'); ?>" class="btn mt-36 mb-0"><?php the_field('integration_post_details_header_button_text'); ?></a>
            <!-- ./Integration details header content -->
        </div>
        <!-- ./Integration details header wrapper -->
    </div>
</section>
<!-- ./Integration details header -->
