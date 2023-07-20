<!-- Testimonials block -->
<section class="vetera-for-whom-testimonials mt-100">
    <div class="container">
        <?php
        $fwd_testimonials_block_img = get_sub_field('fwd_testimonials_block_img');
        $fwd_testimonials_block_img_alt = get_sub_field('fwd_testimonials_block_img_alt');
        $fwd_testimonials_block_description = get_sub_field('fwd_testimonials_block_description');
        $fwd_testimonials_block_logo = get_sub_field('fwd_testimonials_block_logo');
        $fwd_testimonials_block_logo_alt = get_sub_field('fwd_testimonials_block_logo_alt');
        $fwd_testimonials_block_user = get_sub_field('fwd_testimonials_block_user');
        $fwd_testimonials_block_profession = get_sub_field('fwd_testimonials_block_profession');
        ?>
        <div class="vetera-for-whom-testimonials__card <?php if(!$fwd_testimonials_block_img) { echo 'vetera-for-whom-testimonials__card--one-col'; } ?>">
            <?php if($fwd_testimonials_block_img) : ?>
                <div class="vetera-for-whom-testimonials__image text-center">
                    <img class="vetera-for-whom-testimonials__image__img" src="<?php echo $fwd_testimonials_block_img; ?>" alt="<?php echo $fwd_testimonials_block_img_alt; ?>" />
                </div>
            <?php endif; ?>
            <div class="vetera-for-whom-testimonials__description">
            <p class="mt-24 mb-40 mt-dt-0 mb-dt-16"><?php echo $fwd_testimonials_block_description; ?></p>
            <div class="vetera-for-whom-testimonials__signature <?php if(!$fwd_testimonials_block_img) { echo 'vetera-for-whom-testimonials__signature--one-col'; } ?>">
                <div class="vetera-for-whom-testimonials__logo">
                <img class="vetera-for-whom-testimonials__image__img" src="<?php echo $fwd_testimonials_block_logo; ?>" alt="<?php echo $fwd_testimonials_block_logo_alt; ?>" />
                </div>
                <div class="vetera-for-whom-testimonials__person">
                <p class="txt-md-dark mb-0 mt-0 color-dark"><?php echo $fwd_testimonials_block_user; ?></p>
                <p class="txt-sm mt-0"><?php echo $fwd_testimonials_block_profession; ?></p>
                </div>
            </div>
            </div>
        </div>
    </div>
    <span class="vetera-for-whom-testimonials__bg">
        <img class="vetera-for-whom-testimonials__bg__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonials_bg.png" alt="Testimonials background" />
    </span>
</section>
<!-- ./Testimonials block -->