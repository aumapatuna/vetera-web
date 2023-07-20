<!-- Grid layout -->
<section class="vetera-for-whom-details-client-records">
    <div class="container">
        <?php
        $fwd_description_block_icon = get_sub_field('fwd_description_block_icon');
        $fwd_description_block_icon_alt = get_sub_field('fwd_description_block_icon_alt');
        $fwd_description_block_subtitle = get_sub_field('fwd_description_block_subtitle');
        $fwd_description_block_title = get_sub_field('fwd_description_block_title');
        $fwd_description_block_description = get_sub_field('fwd_description_block_description');
        $fwd_description_block_button_text = get_sub_field('fwd_description_block_button_text');
        $fwd_description_block_button_url = get_sub_field('fwd_description_block_button_url');
        $fwd_description_block_image = get_sub_field('fwd_description_block_image');
        $fwd_description_block_image_alt = get_sub_field('fwd_description_block_image_alt');
        ?>
        <div class="vetera-comp-client-records mt-80">
        <div class="container">
            <!-- Records component grid -->
            <div class="vetera-comp-client-records__grid pt-36 pt-dt-100">
                <!-- Records component details -->
                <div class="vetera-comp-client-records__details text-center text-dt-left">
                    <!-- Records component symbol -->
                    <div class="vetera-comp-client-records__symbol text-dt-left">
                        <img class="vetera-comp-client-records__symbol-img" src="<?php echo $fwd_description_block_icon; ?>" alt="<?php echo $fwd_description_block_icon_alt; ?>" />
                    </div>
                    <!-- ./Records component symbol -->
                    <!-- Records component topic -->
                    <h5 class="h5 text-center mt-4 mb-4 text-dt-left"><?php echo $fwd_description_block_subtitle; ?></h5>
                    <!-- ./Records component topic -->
                    <!-- Records component title -->
                    <h2 class="text-center mt-0 mb-16 mb-dt-24 text-dt-left"><?php echo $fwd_description_block_title; ?></h2>
                    <!-- ./Records component title -->
                    <!-- Records component description -->
                    <p class="text-center mb-36 text-dt-left"><?php echo $fwd_description_block_description; ?></p>
                    <!-- ./Records component description -->
                    <!-- Request demo button -->
                    <?php if($fwd_description_block_button_url) : ?>
                    <a href="<?php echo $fwd_description_block_button_url; ?>" class="btn btn"><?php echo $fwd_description_block_button_text; ?></a>
                    <?php endif; ?>
                    <!-- ./Request demo button -->
                </div>
                <!-- ./Records component details -->
                <!-- Records component image -->
                <div class="vetera-comp-client-records__img-blk text-dt-left mb-0 mt-36 mt-dt-0">
                    <div class="vetera-comp-client-records__image text-center mb-dt-72 mb-dt-0">
                    <img class="vetera-comp-client-records__image-img" src="<?php echo $fwd_description_block_image; ?>" alt="<?php echo $fwd_description_block_image_alt; ?>" />
                    </div>
                </div>
                <!-- ./Records component image -->
                </div>
                <!-- ./Records component grid -->
            </div>
        <!-- ./Records component -->
        </div>
        <!-- ./Grid layout -->
    </div>
</section>