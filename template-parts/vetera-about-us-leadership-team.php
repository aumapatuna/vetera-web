<?php 
    // About section #5 options
    $about_sec5_options = get_field('about_sec5_options');

    $about_sec5_section_heading = $about_sec5_options['about_sec5_section_heading'];
    $about_sec5_team_cards = $about_sec5_options['about_sec5_team_cards'];
?>
<!-- Our team section in About Us section -->
<section class="vetera-about-us-leadership-team pb-100 pb-dt-80">
    <div class="container">
        <div class="vetera-about-us-leadership-team__wrp">
            <div class="vetera-about-us-leadership-team__title">
                <h3 class="text-center mt-0 mb-40 mb-dt-48"><?php echo $about_sec5_section_heading; ?></h3>
            </div>
            <div class="vetera-about-us-leadership-team__cards">

              <?php 
                foreach ($about_sec5_team_cards as $about_sec5_team_card) {
                  echo '<!-- Leadership team components -->
                  <div class="vetera-comp-leadership-team text-center text-dt-left">
                    <!-- Leadership team component image -->
                    <div class="vetera-comp-leadership-team__image">
                      <img class="vetera-comp-leadership-team__image-img" src="'. $about_sec5_team_card['about_sec5_team_card_profile_img_block']['about_sec5_team_card_profile_img_block_image'] .'" alt="'. $about_sec5_team_card['about_sec5_team_card_profile_img_block']['about_sec5_team_card_profile_img_block_image_name'] .'" />
                    </div>
                    <!-- ./Leadership team component image -->
                    <!-- Leadership team component title -->
                    <p class="text-center name color-darkash mb-0">'. $about_sec5_team_card['about_sec5_team_card_profile_img_block_profile_name'] .'</p>
                    <!-- ./Leadership team component title -->
                    <!-- Leadership team component position -->
                    <p class="txt-sm color-imperial-blue position text-center mt-0 mb-0">'. $about_sec5_team_card['about_sec5_team_card_profile_img_block_profile_position'] .'</p>
                    <!-- ./Leadership team component position -->
                    <!-- Leadership team component linkedin -->';
                    if($about_sec5_team_card['about_sec5_team_card_profile_img_block_profile_liknedin_url']) : 
                      echo '<div class="vetera-comp-leadership-team__linkedin mt-4">
                      <a href="'. $about_sec5_team_card['about_sec5_team_card_profile_img_block_profile_liknedin_url'] .'" target="_blank" class="vetera-comp-leadership-team__linkedin-link">
                        <img class="vetera-comp-leadership-team__linkedin-img" src="' . $about_sec5_team_card['about_sec5_team_card_profile_img_block_profile_liknedin_icon'] . '" alt="Linkedin Icon" />
                      </a>
                    </div>';
                    endif;
                    echo '
                    <!-- ./Leadership team component linkedin -->
                  </div>
                  <!-- ./Leadership team components -->';
                }
              ?>
            </div>
        </div>
    </div>
</section>
<!-- ./Our team section in About Us section -->
