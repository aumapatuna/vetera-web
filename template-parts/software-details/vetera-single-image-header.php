<?php
  $pg_name = str_replace(".php","",get_page_template_slug());
?>
<?php
    $sd_header_block_subheading = get_sub_field('sd_header_block_subheading');
    $sd_header_block_heading = get_sub_field('sd_header_block_heading');
    $sd_header_block_description = get_sub_field('sd_header_block_description');
    $sd_header_block_image = get_sub_field('sd_header_block_image');
    $sd_header_block_image_alt = get_sub_field('sd_header_block_image_alt');
?>
<!-- Single imge header -->
<section class="vetera-single-image-header vetera-single-image-header--<?php echo $pg_name; ?>">
    <div class="vetera-single-image-header__wrp pt-80">
        <div class="container pt-36 pt-dt-88">
            <!-- Product details page  -->
            <?php
                if($sd_header_block_subheading) :
            ?>
                <h5 class="red-caps-5 text-center text-uppercase mt-0 mb-4"><?php echo $sd_header_block_subheading; ?></h5>
            <?php endif; ?>
            <h1 class="text-center text-center mt-0 mb-20"><?php echo $sd_header_block_heading; ?></h1>
            <?php
                if($sd_header_block_description) :
            ?>
                <p class="text-center color-darkash mt-20"><?php echo $sd_header_block_description; ?></p>
            <?php endif; ?>
            <!-- ./Product details page -->
            <!-- Product details image  -->
            <div class="vetera-single-image-header__image text-center mt-24">
                <img src="<?php echo $sd_header_block_image; ?>" alt="<?php echo $sd_header_block_image_alt; ?>" />
            </div>
            <!-- ./Product details image -->
        </div>
    </div>
    <span class="vetera-single-image-header__gradient mt-120"></span>
</section>  
<!-- ./Single imge header -->
