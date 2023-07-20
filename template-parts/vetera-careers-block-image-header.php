<!-- Block image header -->
<section class="vetera-careers-image-header mt-80">
    <div class="vetera-careers-block-image-header__wrp pt-36 pt-dt-92">
        <!-- Title and description block -->
        <div class="container">
            <div class="vetera-careers-block-image-header__title-blk">
                <h5 class="red-caps-5 text-center text-uppercase mt-0 mb-0"><?php the_field('careers_sub_header'); ?></h5>
                <h1 class="text-center text-center mt-4 mb-0"><?php the_field('careers_main_header'); ?></h1>
                <p class="text-center color-darkash mt-20"><?php the_field('careers_main_content'); ?></p>
            </div>
        </div>
        <!-- ./Title and description block -->
        <!-- Block image -->
        <div class="vetera-careers-block-image-header__image-blk mt-dt-64">
          <img src="<?php the_field('careers_hero_banner'); ?>" alt="<?php the_field('careers_hero_banner_alt_text'); ?>" />
        </div>
        <!-- Block image -->
    </div>
</section>
<!-- ./Block image header -->
