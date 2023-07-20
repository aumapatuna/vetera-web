<?php 
    // About section #1 options
    $about_sec1_options = get_field('about_sec1_options');

    // Option
    $about_sec1_options_heading_top_text = $about_sec1_options['about_sec1_options_heading_top_text'];
    $about_sec1_options_heading = $about_sec1_options['about_sec1_options_heading'];
    $about_sec1_options_description = $about_sec1_options['about_sec1_options_description'];
    $about_sec1_options_banner_image_img = $about_sec1_options['about_sec1_options_banner_image']['about_sec1_options_banner_image_img'];
    $about_sec1_options_banner_image_name = $about_sec1_options['about_sec1_options_banner_image']['about_sec1_options_banner_image_name'];
?>

<!-- Block image header -->
<section class="vetera-about-us-block-image-header mt-80 pb-100 pb-dt-68">
    <div class="vetera-about-us-block-image-header__wrp pt-36 pt-dt-92">
        <!-- Title and description block -->
        <div class="container">
            <div class="vetera-about-us-block-image-header__title-blk">
                <h5 class="red-caps-5 text-center text-uppercase mt-0 mb-0"><?php echo $about_sec1_options_heading_top_text; ?></h5>
                <h1 class="text-center text-center mt-4 mb-0"><?php echo $about_sec1_options_heading; ?></h1>
                <p class="text-center color-darkash mt-20"><?php echo $about_sec1_options_description; ?></p>
            </div>
        </div>
        <!-- ./Title and description block -->
        <!-- Block image -->
        <div class="vetera-about-us-block-image-header__image-blk">
            <img src="<?php echo $about_sec1_options_banner_image_img; ?>" alt="<?php echo $about_sec1_options_banner_image_name; ?>" />
        </div> 
        <!-- Block image -->
    </div>
</section>
<!-- ./Block image header -->
