<!-- Customer support block -->
<section class="vetera-home-custom-support mt-100">
    <div class="container">
    <?php
        $fwd_customer_support_block_left_content_block = get_sub_field('fwd_customer_support_block_left_content_block');
        $fwd_customer_support_block_left_button_text = get_sub_field('fwd_customer_support_block_left_button_text');
        $fwd_customer_support_block_left_button_link = get_sub_field('fwd_customer_support_block_left_button_link');
        $fwd_customer_support_block_faq_accordion = get_sub_field('fwd_customer_support_block_faq_accordion');
        $fwd_customer_support_block_right_button_text = get_sub_field('fwd_customer_support_block_right_button_text');
        $fwd_customer_support_block_right_button_link = get_sub_field('fwd_customer_support_block_right_button_link');
    ?>
    <!-- Home custom supprot grid -->
    <div class="vetera-home-custom-support__grid">
        <!-- Home custom supprot grid col -->
        <div class="vetera-home-custom-support__grid__col">
            <!-- Home custom supprot content -->
            <div class="vetera-home-custom-support__content">
                <h5 class="mt-0 mb-8 color-imperial-blue text-uppercase"><?php echo $fwd_customer_support_block_left_content_block['fwd_customer_support_block_left_block_subtitle']; ?></h5>
                <h3 class="mt-0 mb-24 mb-dt-16"><?php echo $fwd_customer_support_block_left_content_block['fwd_customer_support_block_left_block_heading']; ?></h3>
                <p class="mt-0 mb-32 mb-dt-16"><?php echo $fwd_customer_support_block_left_content_block['fwd_customer_support_block_left_block_description']; ?></p>
                <p class="mt-0 txt-sm mb-24 mb-dt-32 color-darkgray"><?php echo $fwd_customer_support_block_left_content_block['fwd_customer_support_block_left_block_description_sm']; ?></p>
                <?php if($fwd_customer_support_block_left_button_link) : ?>
                <a href="<?php echo $fwd_customer_support_block_left_button_link; ?>" class="link link--secondary d-inline-block"><?php echo $fwd_customer_support_block_left_button_text; ?></a>
                <?php endif; ?>
            </div><!-- ./Home custom supprot content -->
        </div><!-- ./Home custom supprot grid col -->
        <!-- Home custom supprot grid col -->
        <div class="vetera-home-custom-support__grid__col">
            <!-- Home custom supprot accordion -->
            <div class="vetera-home-custom-support__accordion">
                <!-- Accordion -->
                <?php if(!empty($fwd_customer_support_block_faq_accordion)) : ?>
                <div id="accordion" class="mb-48 mb-dt-20">
                <?php foreach ($fwd_customer_support_block_faq_accordion as $fwd_customer_support_block_faq_acc) : ?>
                <?php
                    echo
                    '<p class="mt-0 mb-0 txt-md-bold color-mirage txt-bold">'. $fwd_customer_support_block_faq_acc->post_title .'</p>
                    <div>
                        <p class="txt-sm mt-0 mb-0">'. $fwd_customer_support_block_faq_acc->post_excerpt .'</p>
                    </div>';
                    ?>
                <?php endforeach; ?>
                </div>
                <?php endif; ?>
                <!-- ./Accordion -->
                <!-- Button wrapper -->
                <div class="vetera-home-custom-support__accordion__btn">
                <?php if($fwd_customer_support_block_right_button_link) : ?>
                    <a href="<?php echo $fwd_customer_support_block_right_button_link; ?>" class="btn"><?php echo $fwd_customer_support_block_right_button_text; ?></a>
                <?php endif; ?>
                </div>
                <!-- ./Button wrapper -->
            </div><!-- ./Home custom supprot accordion -->
        </div><!-- ./Home custom supprot grid col -->
    </div><!-- ./Home custom supprot grid -->
    </div>
</section><!-- ./Home custom supprot -->
<!-- ./Customer support block -->