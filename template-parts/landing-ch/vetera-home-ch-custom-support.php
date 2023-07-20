<?php 
  // Data array
  $home_ch_sec8_options = get_field('home_ch_sec8_options');

  // Left content block
  $home_ch_sec8_left_content_block = $home_ch_sec8_options['home_ch_sec8_left_content_block'];
  $home_ch_sec8_heading_top_text = $home_ch_sec8_left_content_block['home_ch_sec8_heading_top_text'];
  $home_ch_sec8_heading = $home_ch_sec8_left_content_block['home_ch_sec8_heading'];
  $home_ch_sec8_description = $home_ch_sec8_left_content_block['home_ch_sec8_description'];

  // Accordion toggle
  $faq_option_toggle = $home_ch_sec8_options['faq_option_toggle'];
  $options = get_field('options');
  var_dump($options);

  // Accordion
  //$home_sec8_accordion = $home_ch_sec8_options['home_sec8_accordion'];
  $home_ch_sec8_faq_accordion = $home_ch_sec8_options['home_ch_sec8_faq_accordion'];

  $home_ch_sec8_inpage_faq_repeater = $home_ch_sec8_options['home_ch_sec8_inpage_faq_repeater'];

  // Left button
  $home_ch_sec8_accordion_button_text = $home_ch_sec8_options['home_ch_sec8_accordion_button_text'];
  $home_ch_sec8_accordion_button_link = $home_ch_sec8_options['home_ch_sec8_accordion_button_link'];

  // Right button
  $home_ch_sec8_accordion_right_button_text = $home_ch_sec8_options['home_ch_sec8_accordion_right_button_text'];
  $home_ch_sec8_accordion_right_button_link = $home_ch_sec8_options['home_ch_sec8_accordion_right_button_link'];
?>

<?php //if($home_ch_sec8_heading) : ?>
<!-- Home custom supprot -->
<section class="vetera-home-custom-support pb-100">
  <div class="container">

    <!-- Home custom supprot grid -->
    <div class="vetera-home-custom-support__grid">

      <!-- Home custom supprot grid col -->
      <div class="vetera-home-custom-support__grid__col">

        <!-- Home custom supprot content -->
        <div class="vetera-home-custom-support__content">
          <h5 class="mt-0 mb-8 color-imperial-blue"><?php echo $home_ch_sec8_heading_top_text; ?></h5>
          <h3 class="mt-0 mb-24"><?php echo $home_ch_sec8_heading; ?></h3>
          <p class="mt-0 mb-32"><?php echo $home_ch_sec8_description; ?></p>

          <?php if($home_ch_sec8_accordion_button_link) : ?>
            <a href="<?php echo $home_ch_sec8_accordion_button_link; ?>" class="link link--secondary d-inline-block"><?php echo $home_ch_sec8_accordion_button_text; ?></a>
          <?php endif; ?>
        </div><!-- ./Home custom supprot content -->

      </div><!-- ./Home custom supprot grid col -->

      <!-- Home custom supprot grid col -->
      <div class="vetera-home-custom-support__grid__col">

        <!-- Home custom supprot accordion -->
        <div class="vetera-home-custom-support__accordion">

        
        <?php var_dump($options); ?>

        <?php
          if($faq_option_toggle != '') { ?>
            <div id="accordion" class="mb-48">
            <?php 
              foreach ($home_ch_sec8_inpage_faq_repeater as $home_sec8__inpage_accordions_item) {
                $acc_title = $home_sec8__inpage_accordions_item['home_ch_sec8_inpage_faq_repeater_title'];
                $acc_dec = $home_sec8__inpage_accordions_item['home_ch_sec8_inpage_faq_repeater_description'];
                echo '<p class="mt-0 mb-0 txt-md-bold color-mirage txt-bold">'. $acc_title .'</p>
                <div class="vetera-home-custom-support__accordion__ch">
                  <p class="txt-sm mt-0 mb-0">'. $acc_dec .'</p>
                </div>';
              }
            ?> 
          </div><!-- ./Accordion -->
        <?php } else { ?>
          <!-- Accordion -->
          <div id="accordion" class="mb-48">
            <?php 
              foreach ($home_ch_sec8_faq_accordion as $home_sec8_accordions_item) {
                echo '<p class="mt-0 mb-0 txt-md-bold color-mirage txt-bold">'. $home_sec8_accordions_item->post_title .'</p>
                <div>
                  <p class="txt-sm mt-0 mb-0">'. $home_sec8_accordions_item->post_excerpt .'</p>
                </div>';
              }
            ?>

          </div><!-- ./Accordion -->
        <?php } ?>

        <!-- Button wrapper -->
        <?php if($home_ch_sec8_accordion_right_button_link) : ?>
          <div class="vetera-home-custom-support__accordion__btn">
            <a href="<?php echo $home_ch_sec8_accordion_right_button_link; ?>" class="btn"><?php echo $home_ch_sec8_accordion_right_button_text; ?></a>
          </div>
        <?php endif; ?>
        <!-- ./Button wrapper -->

        </div><!-- ./Home custom supprot accordion -->

      </div><!-- ./Home custom supprot grid col -->

    </div><!-- ./Home custom supprot grid -->
  </div>
</section>
<!-- ./Home custom supprot -->
<?php //endif; ?>