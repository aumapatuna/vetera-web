<?php 
    // About section #1 options
    $about_sec3_options = get_field('about_sec3_options');
    
    $about_sec3_heading_top_text = $about_sec3_options['about_sec3_heading_top_text'];
    $about_sec3_heading = $about_sec3_options['about_sec3_heading'];
    $about_sec3_description = $about_sec3_options['about_sec3_description'];
?>
<!-- About Us our mission section -->
<section class="vetera-about-us-our-mission pb-64 pt-64 mb-100 mb-dt-80">
  <div class="container"> 
    <div class="vetera-about-us-our-mission__wrp">
      <div class="vetera-about-us-our-mission__title">
        <h5 class="caps-5 text-center text-uppercase color-torch-red mt-0 mb-4"><?php echo $about_sec3_heading_top_text; ?></h5>
        <h3 class="text-center color-white mt-0 mb-16 mb-dt-8"><?php echo $about_sec3_heading; ?></h3>
        <p class="text-center color-white m-0"><?php echo $about_sec3_description; ?></p>
      </div>
    </div>
  </div>
</section>
<!-- ./About Us our mission section -->