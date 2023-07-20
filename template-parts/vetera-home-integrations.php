<?php 
  // Data array
  $home_integration_section_options = get_field('home_sec7_options');

  // Heading top text
  $home_sec7_heading_top_text = $home_integration_section_options['home_sec7_heading_top_text'];

  // Heading
  $home_sec7_heading = $home_integration_section_options['home_sec7_heading'];

  // Description
  $home_sec7_description = $home_integration_section_options['home_sec7_description'];

  // Button
  $home_sec7_btn_txt = $home_integration_section_options['home_sec7_button_text'];
  $home_sec7_btn_link = $home_integration_section_options['home_sec7_button_link'];

  // Cards
  $home_sec7_image_cards = $home_integration_section_options['home_sec7_image_cards'];
?>

<!--Integration section-->
<section class="vetera-comp-integration pb-100">
  <!-- Integration component -->
  <div class="container">
    <!-- Integration component grid -->
    <div class="vetera-comp-integration__grid">
      <!-- Integration component details -->
      <div class="vetera-comp-integration__details text-center text-dt-left">
        <!-- Integration component topic -->
        <h5 class="h5 text-center text-uppercase mt-4 mb-8 text-dt-left"><?php echo $home_sec7_heading_top_text; ?></h5>
        <!-- ./Integration component topic -->
        <!-- Integration component title -->
        <h2 class="text-center mt-0 mb-24 mb-dt-36 text-dt-left"><?php echo $home_sec7_heading; ?></h2>
        <!-- ./Integration component title -->
        <!-- Integration component description -->
        <p class="text-center mb-32 mb-dt-36  text-dt-left"><?php echo $home_sec7_description; ?></p>
        <!-- ./Integration description -->
        <!--   Integration view button -->
        <a class="btn" href="<?php echo $home_sec7_btn_link; ?>"><?php echo $home_sec7_btn_txt; ?></a>
        <!-- ./Integration view button -->
      </div>
      <!-- ./Client records component details -->
      <!-- Integration logos -->
      <div class="vetera-comp-integration__logo-blk text-dt-left mt-36 mt-dt-0">
        <!-- Integrations logo card component -->
        <?php if(!empty($home_sec7_image_cards)) : ?>
          <?php
            foreach ($home_sec7_image_cards as $home_sec7_image_card) {
                      echo '<div class="integrations-logo-card p-16 mb-0 mb-dt-20 d-flex justify-content-center align-items-center bg-color-white">
                <div class="integrations-logo-card__img">
                  <img height="65" width="123" src="'. $home_sec7_image_card['home_sec7_image_cards_image'] .'"
                      alt="'. $home_sec7_image_card['home_sec7_image_cards_image_name'] .'">
                </div>
              </div>';
            }    
          ?>
        <?php endif; ?>
        <!-- ./Integrations logo card component -->

      </div>
      <!-- ./Integration logos -->
    </div>
    <!-- ./Integration grid -->
  </div>
  <!-- ./Integration component -->
</section>
<!--./Integration section-->
