<?php 
  // Data array
  $home_ch_icon_cards_section_options = get_field('home_ch_sec_5_options');

  // Heading
  $home_ch_icon_cards_section_heading = $home_ch_icon_cards_section_options['home_ch_sec_5_heading'];

  // Cards
  $home_ch_icon_cards_section_cards = $home_ch_icon_cards_section_options['home_ch_sec_5_cards'];

?>

<!-- Home icon cards -->
<section class="vetera-home-icon-cards pb-100 pb-dt-100">
  <div class="container">
    
    <!-- Heading -->
    <h2 class="mt-0 mb-48 text-center"><?php echo $home_ch_icon_cards_section_heading; ?></h2><!-- ./Heading -->
    
    <?php if(!empty($home_ch_icon_cards_section_cards)) : ?>
    <!-- Icon cards list -->
    <div class="vetera-home-icon-cards__list">

        <?php 
        
            foreach ($home_ch_icon_cards_section_cards as $home_icon_card) {
                echo '<!-- You grow component -->
                        <div class="vetera-comp-you-grow">
                            <!-- You grow component logo -->
                            <div class="vetera-comp-you-grow__image text-center">
                                <img class="vetera-comp-you-grow__image-img" src="'. $home_icon_card['home_ch_sec_5_card_icon'] .'" alt="Products vetera logo" height="60" width="60" />
                            </div>
                            <!-- ./You grow component logo -->
                            <!-- You grow component heading -->
                            <h5 class="heading-5 text-center mt-28 mb-16">'. $home_icon_card['home_ch_sec_5_card_heading'] .'</h5>
                            <!-- ./You grow component heading -->
                            <!-- You grow component description -->
                            <p class="txt-sm text-center mb-24 mb-dt-20">'. $home_icon_card['home_ch_sec_5_card_description'] .'<p>
                            <!-- ./You grow component description -->
                            <!-- You grow component link -->
                            <div class="vetera-comp-you-grow__link text-center">
                                <a class="link link--secondary d-inline-block" href="'. $home_icon_card['home_ch_sec_5_card_button_link'] .'">'. $home_icon_card['home_ch_sec_5_card_button_text'] .'</a>
                            </div>
                            <!-- ./You grow component link -->
                        </div>
                        <!-- ./You grow component -->';
            }
        
        ?>

    </div><!-- ./Icon cards list -->
    <?php endif ?>
  </div>
</section><!-- ./Home icon cards -->