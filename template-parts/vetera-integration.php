<!--Integration section-->
<section class="vetera-comp-integration pb-20 pb-dt-80 pt-100">
  <!-- Integration component -->
  <div class="container">
    <!-- Integration component grid -->
    <div class="vetera-comp-integration__grid">
      <!-- Integration component details -->
      <div class="vetera-comp-integration__details text-center text-dt-left">
        <!-- Integration component topic -->
        <h5 class="h5 text-center text-uppercase mt-4 mb-8 text-dt-left"><?php the_field('integration_sub_heading'); ?></h5>
        <!-- ./Integration component topic -->
        <!-- Integration component title -->
        <h2 class="text-center mt-0 mb-24 mb-dt-36 text-dt-left"><?php the_field('integration_heading'); ?></h2>
        <!-- ./Integration component title -->
        <!-- Integration component description -->
        <p class="text-center mb-32 mb-dt-36  text-dt-left"><?php the_field('integration_description'); ?></p>
        <!-- ./Integration description -->
        <!--   Integration view button -->
        <?php 
          $integration_button_url = get_field('integration_button_url');
          if(!empty($integration_button_url)) :
        ?>
          <a class="btn" href="<?php echo $integration_button_url; ?>"><?php the_field('integration_button_text'); ?></a>
        <?php endif; ?>
        <!-- ./Integration view button -->
      </div>
      <!-- ./Client records component details -->
      <!-- Integration logos -->
      <div class="vetera-comp-integration__logo-blk text-dt-left mt-36 mt-dt-0">
        <!-- Integrations logo card component -->
        <?php 
            $integration_logos = get_field('integration_logos');
            if(!empty($integration_logos)) {
        ?>
        <?php foreach ($integration_logos as $key => $integration_logo) : ?>
        <div class="integrations-logo-card p-16 mb-0 mb-dt-20 d-flex justify-content-center align-items-center bg-color-white">
          <div class="integrations-logo-card__img">
            <img src="<?php echo $integration_logo['integration_logos_image']; ?>" alt="<?php echo $integration_logo['integration_logos_image_alt']; ?>">
          </div>
        </div>
        <?php endforeach; 
             } else {
        ?>
          <div class="integrations-logo-card p-16 mb-0 mb-dt-20 d-flex justify-content-center align-items-center bg-color-white">
            <div class="integrations-logo-card__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/integration-images/integrations-logo/idexx.svg" alt="Integration images">
            </div>
          </div>
        <?php } ?>
        <!-- ./Integrations logo card component -->

      </div>
      <!-- ./Integration logos -->
    </div>
    <!-- ./Integration grid -->
  </div>
  <!-- ./Integration component -->
</section>
<!--./Integration section-->
