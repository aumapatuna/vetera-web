<!-- Testimonials section -->
<section class="vetera-testimonials mt-80 mt-dt-0 mb-80">
    <div class="container pr-dt-0 pl-dt-0 pb-td-100">
        <!-- Testimonials section sub-heading -->
        <h5 class="red-caps-5 text-center text-uppercase mb-0 pt-48 mt-0"><?php the_field('testimonials_sub_header', 'option'); ?></h5>
        <!-- ./Testimonials section sub-heading -->
        <!-- Testimonials section heading -->
        <h2 class="heading-2 text-center mt-8 mb-48"><?php the_field('testimonials_header', 'option'); ?></h2>
        <!-- ./Testimonials section heading -->
        <!-- Testimonials grid -->
        <div class="vetera-testimonials__grid pb-62">

            <?php 
                $testimonial_cards = get_field('testimonial_cards', 'option');
            ?>
            <?php foreach ($testimonial_cards as $key => $testimonial_card) : ?>
                <!-- Testimonials grid card -->
                <div class="vetera-comp-testimonials ml-4 mr-4">
                    <?php if($testimonial_card['testimonial_card_image']) : ?>
                        <!-- Testimonial component image -->
                        <div class="vetera-comp-testimonials__image text-center">
                            <img class="vetera-comp-testimonials__image-img" src="<?php echo $testimonial_card['testimonial_card_image'];?>" alt="<?php echo $testimonial_card['testimonial_card_image_alt'];?>">
                        </div>
                        <!-- ./Testimonial component image -->
                    <?php endif; ?>
                    <!-- Testimonial component paragraph text -->
                    <p class="text-center mt-16 mt-dt-24 description"><?php echo $testimonial_card['testimonial_card_description'];?></p>
                    <!-- ./Testimonial component paragraph text -->
                    <!-- Testimonial component preson info -->
                    <div class="vetera-comp-testimonials__info text-center mt-40">
                        <!-- Testimonial component logo -->
                        <div class="vetera-comp-testimonials__info__logo text-right">
                            <img class="vetera-comp-testimonials__logo-img" src="<?php echo $testimonial_card['testimonial_card_logo'];?>" alt="<?php echo $testimonial_card['testimonial_card_logo_alt'];?>">
                        </div>
                        <!-- ./Testimonial component logo -->
                        <!-- Testimonial component person details -->
                        <div class="vetera-comp-testimonials__info__details text-left">
                            <p class="txt-md-dark mb-0 mt-0 color-dark"><?php echo $testimonial_card['testimonial_card_employee_name'];?></p>
                            <p class="txt-sm mt-0"><?php echo $testimonial_card['testimonial_card_employee_position'];?></p>
                        </div>
                        <!-- ./Testimonial component details -->
                    </div>
                    <!-- ./Testimonial component person info -->
                </div>
                <!-- ./Testimonials grid card -->
            <?php endforeach; ?>
        </div>
        <!-- ./Testimonials grid -->
        <!-- ./Testimonials watermark -->
        <span class="vetera-testimonials__watermark"></span>
        <!-- ./Testimonials watermark -->
    </div>
</section>
<!-- ./Testimonials section -->