<!-- Integrations section -->
<!--Integration section-->
<section class="vetera-comp-integration mt-100">
    <!-- Integration component -->
    <div class="container">
    <?php
        $fwd_integrations_block_subtitle = get_sub_field('fwd_integrations_block_subtitle');
        $fwd_integrations_block_title = get_sub_field('fwd_integrations_block_title');
        $fwd_integrations_block_description = get_sub_field('fwd_integrations_block_description');
        $fwd_integrations_block_button_text = get_sub_field('fwd_integrations_block_button_text');
        $fwd_integrations_block_button_url = get_sub_field('fwd_integrations_block_button_url');
        $fwd_integrations_block_button_logos = get_sub_field('fwd_integrations_block_button_logos');
    ?>
        <!-- Integration component grid -->
        <div class="vetera-comp-integration__grid">
            <!-- Integration component details -->
            <div class="vetera-comp-integration__details text-center text-dt-left">
                <!-- Integration component topic -->
                <h5 class="h5 text-center text-uppercase mt-4 mb-8 text-dt-left"><?php echo $fwd_integrations_block_subtitle; ?></h5>
                <!-- ./Integration component topic -->
                <!-- Integration component title -->
                <h2 class="text-center mt-0 mb-24 mb-dt-36 text-dt-left"><?php echo $fwd_integrations_block_title; ?></h2>
                <!-- ./Integration component title -->
                <!-- Integration component description -->
                <p class="text-center mb-24 mb-dt-36  text-dt-left"><?php echo $fwd_integrations_block_description; ?></p>
                <!-- ./Integration description -->
                <!--   Integration view button -->
                <div class="vetera-comp-integration__button pt-24 pt-dt-0">
                    <?php if($fwd_integrations_block_button_url) : ?>
                    <a href="<?php echo $fwd_integrations_block_button_url; ?>" class="btn btn"><?php echo $fwd_integrations_block_button_text; ?></a>
                    <?php endif; ?>
                </div> 
            <!-- ./Integration view button -->
            </div>
            <!-- ./Client records component details -->
            <!-- Integration logos -->
            <div class="vetera-comp-integration__logo-blk text-dt-left mt-36 mt-dt-0">
            <!-- Integrations logo card component -->
            <?php foreach ($fwd_integrations_block_button_logos as $key => $fwd_integrations_block_button_logo) : ?>
                <?php
                echo 
                '<div class="integrations-logo-card p-16 mb-0 mb-dt-20 d-flex justify-content-center align-items-center bg-color-white">
                    <div class="integrations-logo-card__img">
                    <img src="'. $fwd_integrations_block_button_logo['fwd_integrations_block_button_logos_image'] .'" alt="'. $fwd_integrations_block_button_logo['fwd_integrations_block_button_logos_image_alt'] .'">
                    </div>
                </div>';
                ?>
            <?php endforeach; ?>
            <!-- ./Integrations logo card component -->
            </div>
            <!-- ./Integration logos -->
        </div>
        <!-- ./Integration grid -->
    </div>
    <!-- ./Integration component -->
</section>
<!--./Integration section-->