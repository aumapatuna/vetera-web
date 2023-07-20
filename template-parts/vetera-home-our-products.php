<?php 
  // Data array
  $home_product_cards_section_options = get_field('home_sec_4_options');

  // Heading
  $home_product_cards_section_options_heading = $home_product_cards_section_options['home_sec_4_heading'];

  // Left card
  $home_product_left_card = $home_product_cards_section_options['home_sec_4_left_card'];
  $home_product_left_card_logo = $home_product_left_card['home_sec_4_left_card_logo'];
  $home_product_left_card_logo_alter = $home_product_left_card['home_sec_4_left_card_logo_alter'];
  $home_product_left_card_description = $home_product_left_card['home_sec_4_left_card_description'];
  $home_product_left_card_button_text = $home_product_left_card['home_sec_4_left_card_button_text'];
  $home_product_left_card_button_link = $home_product_left_card['home_sec_4_left_card_button_link'];
  $home_product_left_card_image = $home_product_left_card['home_sec_4_left_card_image'];
  $home_product_left_card_image_alter = $home_product_left_card['home_sec_4_left_card_image_alter'];

  // Right card
  $home_product_right_card = $home_product_cards_section_options['home_sec_4_right_card'];
  $home_product_right_card_logo = $home_product_right_card['home_sec_4_right_card_logo'];
  $home_product_right_card_logo_alter = $home_product_right_card['home_sec_4_right_card_logo_alter'];
  $home_product_right_card_description = $home_product_right_card['home_sec_4_right_card_description'];
  $home_product_right_card_button_text = $home_product_right_card['home_sec_4_right_card_button_text'];
  $home_product_right_card_button_link = $home_product_right_card['home_sec_4_right_card_button_link'];
  $home_product_right_card_image = $home_product_right_card['home_sec_4_right_card_image'];
  $home_product_right_card_image_alter = $home_product_right_card['home_sec_4_right_card_image_alter'];

?>

<!-- Home our product -->
<section class="vetera-home-our-product pb-100 pb-dt-120">
  <div class="container">

    <!-- Heading -->
    <h2 class="mt-0 mb-36 mb-dt-72 vetera-home-our-product__heading text-center"><?php echo $home_product_cards_section_options_heading; ?></h2><!-- Heading -->    
    <!-- Main grid -->
    <div class="vetera-home-our-product__main-grid">
      <div class="vetera-home-our-product__main-grid__col">
        <!-- Product components - Default product component -->
        <div class="vetera-component-products mb-dt-36">
          <!-- Product component logo -->
          <div class="vetera-component-products__logo">
              <img class="vetera-component-products__logo-img" src="<?php echo $home_product_left_card_logo; ?>" alt="<?php echo $home_product_left_card_logo_alter; ?>" height="26" width="272" />
          </div>
          <!-- ./Product component logo -->
          <!-- Product component paragraph text - white -->
          <p class="color-white text-center mt-16 mb-24 mb-dt-24 mt-dt-24"><?php echo $home_product_left_card_description; ?></p>
          <!-- ./Product component paragraph text - white -->
          <!-- Product component button -->
          <div class="text-center">
            <a class="btn mt-0 mb-40 mt-dt-0 mb-dt-36" href="<?php echo esc_url($home_product_left_card_button_link); ?>"><?php echo $home_product_left_card_button_text; ?></a>
          </div>
          <!-- ./Product component button -->
          <!-- Product component image -->
          <div class="vetera-component-products__image">
              <img class="vetera-component-products__image-img" src="<?php echo $home_product_left_card_image; ?>" alt="<?php echo $home_product_left_card_image_alter; ?>" width="271" height="136" />
          </div>
          <!-- ./Product component image -->
        </div>
        <!-- ./Product components - Default product component -->
      </div>
    </div>
  </div>
</section><!-- ./Home our product -->