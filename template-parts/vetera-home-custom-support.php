<?php 
  // Data array
  $home_sec8_options = get_field('home_sec8_options');

  // Left content block
  $home_sec8_left_content_block = $home_sec8_options['home_sec8_left_content_block'];
  $home_sec8_heading_top_text = $home_sec8_left_content_block['home_sec8_heading_top_text'];
  $home_sec8_heading = $home_sec8_left_content_block['home_sec8_heading'];
  $home_sec8_description = $home_sec8_left_content_block['home_sec8_description'];

  // Accordion
  //$home_sec8_accordion = $home_sec8_options['home_sec8_accordion'];
  $home_sec8_faq_accordion = $home_sec8_options['home_sec8_faq_accordion'];

  // Left button
  $home_sec8_accordion_button_text = $home_sec8_options['home_sec8_accordion_button_text'];
  $home_sec8_accordion_button_link = $home_sec8_options['home_sec8_accordion_button_link'];

  // Right button
  $home_sec8_accordion_right_button_text = $home_sec8_options['home_sec8_accordion_right_button_text'];
  $home_sec8_accordion_right_button_link = $home_sec8_options['home_sec8_accordion_right_button_link'];
?>

<?php if($home_sec8_heading) : ?>
<!-- Home custom supprot -->
<section class="vetera-home-custom-support pb-100">
  <div class="container">

    <!-- Home custom supprot grid -->
    <div class="vetera-home-custom-support__grid">

      <!-- Home custom supprot grid col -->
      <div class="vetera-home-custom-support__grid__col">

        <!-- Home custom supprot content -->
        <div class="vetera-home-custom-support__content">
          <h5 class="mt-0 mb-8 color-imperial-blue"><?php echo $home_sec8_heading_top_text; ?></h5>
          <h3 class="mt-0 mb-24"><?php echo $home_sec8_heading; ?></h3>
          <p class="mt-0 mb-32"><?php echo $home_sec8_description; ?></p>

          <?php if($home_sec8_accordion_button_link) : ?>
            <a href="<?php echo $home_sec8_accordion_button_link; ?>" class="link link--secondary d-inline-block"><?php echo $home_sec8_accordion_button_text; ?></a>
          <?php endif; ?>
        </div><!-- ./Home custom supprot content -->

      </div><!-- ./Home custom supprot grid col -->

      <!-- Home custom supprot grid col -->
      <div class="vetera-home-custom-support__grid__col">

        <!-- Home custom supprot accordion -->
        <div class="vetera-home-custom-support__accordion">

        <?php if(!empty($home_sec8_faq_accordion)) : ?>
          <!-- Accordion -->
          <div id="accordion" class="mb-48">
            <?php 
              foreach ($home_sec8_faq_accordion as $home_sec8_accordions_item) {
                echo '<p class="mt-0 mb-0 txt-md-bold color-mirage txt-bold">'. $home_sec8_accordions_item->post_title .'</p>
                <div>
                  <p class="txt-sm mt-0 mb-0">'. $home_sec8_accordions_item->post_excerpt .'</p>
                </div>';
              }
            ?>

          </div><!-- ./Accordion -->
        <?php endif; ?>

        <!-- Button wrapper -->
        <?php if($home_sec8_accordion_right_button_link) : ?>
          <div class="vetera-home-custom-support__accordion__btn">
            <a href="<?php echo $home_sec8_accordion_right_button_link; ?>" class="btn"><?php echo $home_sec8_accordion_right_button_text; ?></a>
          </div>
        <?php endif; ?>
        <!-- ./Button wrapper -->

        </div><!-- ./Home custom supprot accordion -->

      </div><!-- ./Home custom supprot grid col -->

    </div><!-- ./Home custom supprot grid -->
  </div>
</section>
<!-- ./Home custom supprot -->
<?php endif; ?>