<?php
  $pg_name = str_replace(".php","",get_page_template_slug());
?>
<!-- Single imge header -->
<section class="vetera-single-image-header vetera-single-image-header--<?php echo $pg_name; ?>">
    <div class="vetera-single-image-header__wrp pt-80">
        <div class="container pt-36 pt-dt-88">
            <!-- Product details page  -->
            <?php
                $single_image_sub_heading = get_field('single_image_sub_heading');
                if($single_image_sub_heading) :
            ?>
                <h5 class="red-caps-5 text-center text-uppercase mt-0 mb-4"><?php echo $single_image_sub_heading; ?></h5>
            <?php endif; ?>
            <h1 class="text-center text-center mt-0 mb-20"><?php the_field('single_image_heading'); ?></h1>
            <?php
                $single_image_description = get_field('single_image_description');
                if($single_image_description) :
            ?>
                <p class="text-center color-darkash mt-20"><?php echo $single_image_description; ?></p>
            <?php endif; ?>
            <!-- ./Product details page -->
            <!-- Product details image  -->
            <div class="vetera-single-image-header__image pt-dt-20 text-center">
                <img src="<?php the_field('single_image'); ?>" alt="<?php the_field('single_image_alter'); ?>" />
            </div>
            <!-- ./Product details image -->
        </div>
    </div>
    <span class="vetera-single-image-header__gradient mt-120"></span>
</section>  
<!-- ./Single imge header -->
