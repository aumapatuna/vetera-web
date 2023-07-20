<?php 
    // About section #8 options
    $about_sec8_options = get_field('about_sec8_options');

    $about_sec8_heading = $about_sec8_options['about_sec8_heading'];
    $about_sec8_icon_cards = $about_sec8_options['about_sec8_icon_cards'];
    
?>
<!-- About Us Learn more section -->
<section class="vetera-about-us-learn-more pb-100">
  <div class="container">
    <div class="vetera-about-us-learn-more__wrp">
      <div class="vetera-about-us-our-mission__title">
        <h3 class="text-center mt-0 mb-dt-32 mb-40 mb-dt-8"><?php echo $about_sec8_heading; ?></h3>
      </div>
      <div class="vetera-about-us-learn-more__body">
        <?php 
          foreach ($about_sec8_icon_cards as $about_sec8_icon_card) {
            echo '<!-- Support and FAQ component -->
                  <div class="vetera-comp-our-value-card text-center">
                    <div class="vetera-comp-our-value-card__icon mb-16">
                      <img src="'. $about_sec8_icon_card['about_sec_8icon_card_icon']['about_sec8_icon_card_icon_file'] .'"
                          alt="'. $about_sec8_icon_card['about_sec_8icon_card_icon']['about_sec8_icon_card_icon_seo_text'] .'">
                    </div>
          
                    <div class="vetera-comp-our-value-card__body">
                      <h5 class="mt-0 mb-12 mb-dt-16">'. $about_sec8_icon_card['about_sec8_icon_card_heading'] .'</h5>
                      <p class="mt-0 mb-16 mb-dt-20">'. $about_sec8_icon_card['about_sec8_icon_card_description'] .'</p>
                      <a class="link link--secondary d-inline-block" href="'. $about_sec8_icon_card['about_sec8_icon_card_button_link'] .'">'. $about_sec8_icon_card['about_sec8_icon_card_button_text'] .'</a>
                    </div>
                  </div>
                  <!-- ./Support and FAQ component -->';
          }
        ?>
      </div>
    </div>
  </div>
</section>
<!-- ./About Us our mission section -->
