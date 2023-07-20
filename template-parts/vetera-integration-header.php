<!-- Integration header -->
<section class="vetera-integration-header pt-80 pb-0">
    <!-- Integration header wrapper -->
    <div class="vetera-integration-header__wrp text-center pt-dt-88 pt-36 mb-28 mb-dt-60">
        <div class="container">
            <!-- Integration header content -->
            <h5 class="text-uppercase color-torch-red mt-0 mb-0"><?php the_field('integration_list_header_subtitle'); ?></h5>
            <h1 class="mt-4 mb-0"><?php the_field('integration_list_header_title'); ?></h1>
            <p class="color-darkash mt-20 mb-0"><?php the_field('integration_list_header_description'); ?></p>
            <!-- ./Integration header content -->
            <div class="vetera-integration-header__integration-btn pt-40">
              <?php
                $integration_list_btn_link = get_field('integration_list_btn_link');
                if(!empty($integration_list_btn_link)) :
              ?>
                <a class="btn" href="<?php echo  $integration_list_btn_link; ?>"><?php the_field('integration_list_btn_text'); ?></a>
              <?php endif; ?>
            </div>
        </div>
    </div>
    <!-- ./Integration header wrapper -->
</section>
<!-- ./Integration header -->