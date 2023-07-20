<?php 
    // About section #1 options
    $about_sec4_options = get_field('about_sec4_options');
    
    $about_sec4_heading_top_text = $about_sec4_options['about_sec4_heading_top_text'];
    $about_sec4_heading = $about_sec4_options['about_sec4_heading'];
    $about_sec4_description = $about_sec4_options['about_sec4_description'];
    $about_sec4_icon_cards = $about_sec4_options['about_sec4_icon_cards'];
?>
<!-- About Us our value section -->
<section class="vetera-about-us-our-value pb-52 pb-dt-28">
  <div class="container">
    <div class="vetera-about-us-our-value__wrp">
      <div class="vetera-about-us-our-value__title">
        <h5 class="red-caps-5 text-center text-uppercase mt-0 mb-4"><?php echo $about_sec4_heading_top_text; ?></h5>
        <h3 class="text-center mt-0 mb-16 mb-dt-8"><?php echo $about_sec4_heading; ?></h3>
        <p class="text-center mt-0 mb-48"><?php echo $about_sec4_description; ?></p>
      </div>
      <div class="vetera-about-us-our-value__cards">
        <?php if(!empty($about_sec4_icon_cards)) : ?>
          <?php 
            foreach ($about_sec4_icon_cards as $about_sec4_icon_card) {
              echo '<!-- Execution & Trust component -->
                    <div class="vetera-comp-our-value-card d-dt-flex text-center text-dt-left mb-48 mb-dt-52">
                      <div class="vetera-comp-our-value-card__icon mr-dt-60 mb-12">
                        <img src="'. $about_sec4_icon_card['about_sec4_icon_cards_icon_block']['about_sec4_icon_cards_icon_block_icon_file'] .'"
                            alt="'. $about_sec4_icon_card['about_sec4_icon_cards_icon_block']['about_sec4_icon_cards_icon_block_icon_name'] .'">
                      </div>
            
                      <div class="vetera-comp-our-value-card__body">
                        <h4 class="heading-4 mt-0 mb-16 mb-dt-12">'. $about_sec4_icon_card['about_sec4_icon_cards_icon_block_heading'] .'</h4>
                        <p class="m-0">'. $about_sec4_icon_card['about_sec4_icon_cards_icon_block_description'] .'</p>
                      </div>
                    </div>
                    <!-- ./Execution & Trust component -->';
            }  
          ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
<!-- ./About Us our value section -->
