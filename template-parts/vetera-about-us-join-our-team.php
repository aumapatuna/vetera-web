<?php 
    // About section #7 options
    $about_sec7_options = get_field('about_sec7_options');
    
    $about_sec7_sub_heading = $about_sec7_options['about_sec7_sub_heading'];
    $about_sec7_heading = $about_sec7_options['about_sec7_heading'];
    $about_sec7_description = $about_sec7_options['about_sec7_description'];
    $about_sec7_button_text = $about_sec7_options['about_sec7_button_text'];
    $about_sec7_button_link = $about_sec7_options['about_sec7_button_link'];
    $about_sec7_banner_image = $about_sec7_options['about_sec7_banner_image_group']['about_sec7_banner_image'];
    $about_sec7_banner_image_seo_text = $about_sec7_options['about_sec7_banner_image_group']['about_sec7_banner_image_seo_text'];
?>
<!-- Join our team secton -->
<section class="vetera-about-us-join-our-team pb-100 pb-dt-88">
    <div class="container">
        <!-- Join our team secton grid -->
        <div class="vetera-about-us-join-our-team__grid">
            <!-- Grid description block -->
            <div class="vetera-about-us-join-our-team__description-blk">
                <h5 class="heading-white-5 text-mb-center mt-32 mb-0 mt-dt-40"><?php echo $about_sec7_sub_heading; ?></h5>
                <h3 class="mb-0 mt-0 mt-dt-4"><?php echo $about_sec7_heading; ?></h3>
                <p class="color-white mt-16 mb-0 mt-dt-4"><?php echo $about_sec7_description; ?></p>
                <a class="btn mt-16 mb-32 mb-dt-40" href="<?php echo $about_sec7_button_link; ?>"><?php echo $about_sec7_button_text; ?></a>
                <span class="vetera-about-us-join-our-team__gradient"></span>
            </div>
            <!-- ./Grid description block -->
            <!-- Grid image block -->
            <div class="vetera-about-us-join-our-team__image-blk">
                <img class="vetera-about-us-join-our-team__image-img" src="<?php echo $about_sec7_banner_image; ?>" alt="<?php echo $about_sec7_banner_image_seo_text; ?>" />
            </div>
            <!-- ./Grid image block -->
        </div>
        <!-- ./Join our team secton grid -->
    </div>
</section>
<!-- ./Join our team secton -->