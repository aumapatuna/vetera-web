<!-- Integration body -->
<section class="vetera-integration-body pb-100">
    <!-- Integration body view all mobile -->
    <div class="vetera-integration-body__view-all">       
        <div class="container">
            <p class="all-cat-mob-rdrop-parent mob-all-cat color-imperial-blue txt-md-bold pt-24 pb-24 mt-0 mb-0">
                <span class="all-cat-mob-rdrop all-cat-show-mob-rdrop"><?php the_field('integrations_listing_view_all_category_text', 'option'); ?></span>
                <span class="all-cat-mob-rdrop all-cat-hide-mob-rdrop"><?php the_field('integrations_listing_view_all_category_hide_text', 'option'); ?></span>
            </p>
        </div>
    </div>
    <!-- ./Integration body view all mobile -->
    <div class="container">
        <!-- Integration body wrapper -->
        <div class="vetera-integration-body__wrp searcharea">
            <!-- Integration body search -->
            <div class="vetera-integration-body__search">
                <?php echo get_template_part( 'template-parts/vetera-integration-search' ); ?>
            </div>
            <!-- ./Integration body search -->
            <!-- Integration body cards wrapper -->
            <span class="loading-txt"></span>
            <div class="vetera-integration-body__cards">
                <?php echo get_template_part( 'template-parts/vetera-integration-cards' ); ?>
            </div>
            <!-- ./Integration body cards wrapper -->
        </div>
        <!-- ./Integration body wrapper -->
    </div>
</section>
<!-- ./Integration body -->