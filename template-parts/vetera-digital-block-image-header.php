<!-- Block image header -->
<section class="vetera-digital-block-image-header mt-80 pb-4 pb-dt-28">
  <div class="vetera-about-us-block-image-header__wrp pt-36 pt-dt-92">
    <!-- Title and description block -->
    <div class="container">
      <div class="vetera-about-us-block-image-header__title-blk">
        <h5 class="red-caps-5 text-center text-uppercase mt-0 mb-0"><?php the_field('vetera_digital_sub_heading'); ?></h5>
        <h1 class="text-center text-center mt-4 mb-0"><?php the_field('vetera_digital_heading'); ?></h1>
        <p class="text-center mt-20"><?php the_field('vetera_digital_description'); ?></p>
      </div>
    </div>
    <!-- ./Title and description block -->
    <!-- Block image -->
    <div class="vetera-about-us-block-image-header__image-blk">
      <img src="<?php the_field('vetera_digital_header_image'); ?>" alt="<?php the_field('vetera_digital_header_image_alt'); ?>" />
    </div>
    <!-- Block image -->
  </div>
</section>
<!-- ./Block image header -->
