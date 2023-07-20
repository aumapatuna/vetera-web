<!-- Request demo form section -->
<?php
    $rd_form_block_subtitle = get_sub_field('rd_form_block_subtitle');
    $rd_form_block_title = get_sub_field('rd_form_block_title');
    $rd_form_block_description = get_sub_field('rd_form_block_description');
    $rd_form_block_short_code = get_sub_field('rd_form_block_short_code');
?>
<section class="vetera-request-demo-form pt-52 mb-100 mb-dt-120">
    <div class="container">
        <div class="vetera-request-demo-form__header">
            <h5 class="red-caps-5 text-center text-uppercase mt-0 mb-0"><?php echo $rd_form_block_subtitle; ?></h5>
            <h3 class="text-center text-center color-lilac mt-4 mb-0"><?php echo $rd_form_block_title; ?></h3>
            <p class="text-center mt-20 mb-0"><?php echo $rd_form_block_description; ?></p>
        </div>
        <div class="vetera-request-demo-form__form-wrp mt-72">
            <?php 
                echo do_shortcode($rd_form_block_short_code); 
            ?>
        </div>
    </div>
</section>
<!-- ./Request demo form section --> 