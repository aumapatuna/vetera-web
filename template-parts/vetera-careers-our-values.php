<!-- Careers our value section -->
<section class="vetera-about-us-our-value pb-52 pb-dt-8">
  <div class="container">
    <div class="vetera-about-us-our-value__wrp">
      <div class="vetera-about-us-our-value__title">
        <h5
          class="red-caps-5 text-center text-uppercase mt-0 mb-4"><?php the_field('careers_values_sub_header'); ?></h5>
        <h3 class="text-center mt-0 mb-16 mb-dt-8"><?php the_field('careers_values_header'); ?></h3>
        <p class="text-center mt-0 mb-dt-64 mb-48"><?php the_field('careers_values_description'); ?></p>
      </div>
      <div class="vetera-about-us-our-value__cards">
        <?php if (have_rows('careers_values_cards')): ?>
          <?php while (have_rows('careers_values_cards')): the_row(); ?>
            <!-- Execution & Trust component -->
            <div class="vetera-comp-our-value-card d-dt-flex text-center text-dt-left mb-48 mb-dt-52">
              <div class="vetera-comp-our-value-card__icon mr-dt-60 mb-12">
                <img src="<?php echo the_sub_field('careers_values_card_image'); ?>"
                     alt="<?php echo the_sub_field('careers_values_card_image_alt'); ?>">
              </div>
              <div class="vetera-comp-our-value-card__body">
                <h4 class="heading-4 mt-0 mb-16 mb-dt-12"><?php echo the_sub_field('careers_values_card_title'); ?></h4>
                <p class="m-0"><?php echo the_sub_field('careers_values_card_description'); ?></p>
              </div>
            </div>
            <!-- ./Execution & Trust component -->
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
<!-- ./Careers our value section -->
