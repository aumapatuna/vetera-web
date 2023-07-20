<?php 
  // Data array
  $home_ch_hero_options = get_field('home_ch_hero_header_section_options');
  // print_r($home_ch_hero_options);
  // die();

  // Content section 
  $home_ch_hero_heading = $home_ch_hero_options['hhh_ch_heading'];
  $home_ch_hero_desc = $home_ch_hero_options['hhh_ch_description'];

  // Button #1
  $home_ch_hero_button_1_txt = $home_ch_hero_options['hhh_ch_buttons']['button_ch_#1']['button_ch_text'];
  $home_ch_hero_button_1_link = $home_ch_hero_options['hhh_ch_buttons']['button_ch_#1']['button_ch_url']['url'];

  // Button #2
  $home_ch_hero_button_2_txt = $home_ch_hero_options['hhh_ch_buttons']['button_ch_#2']['button_ch_text'];
  $home_ch_hero_button_2_link = $home_ch_hero_options['hhh_ch_buttons']['button_ch_#2']['button_ch_url'];

  // Feature list
  $home_ch_hero_feature_list = $home_ch_hero_options['hhh_ch_feature_list'];

  // Banner
  $hhh_ch_banner_image = $home_ch_hero_options['hhh_ch_banner_image'];

?>

<!-- Vetera home hero -->
<section class="vetera-home-hero">
  <div class="container">

    <!-- Vetera home hero main grid -->
    <div class="vetera-home-hero__main-grid">

      <!-- Vetera home hero grid col -->
      <div class="vetera-home-hero__main-grid__col description-col">

        <!-- Heading -->
        <h1 class="mt-0 mb-24"><?php echo $home_ch_hero_heading; ?></h1><!-- ./Heading -->

        <!-- Description -->
        <p class="color-darkash mt-0 mb-32"><?php echo $home_ch_hero_desc; ?></p><!-- ./Description -->

        <!-- Buttons -->
        <div class="vetera-home-hero__btn-wrapper mb-24">
          <a href="<?php echo $home_ch_hero_button_1_link; ?>" class="btn btn--inverse mb-16 mb-dt-0"><?php echo $home_ch_hero_button_1_txt; ?></a>
          <a href="<?php echo $home_ch_hero_button_2_link; ?>" class="btn ml-dt-24"><?php echo $home_ch_hero_button_2_txt; ?></a>
        </div><!-- ./Buttons -->
        
        <!-- Feature list -->
        <?php if(!empty($home_ch_hero_feature_list)) : ?>
          <ul class="vetera-home-hero__listing color-darkgray">
            <?php 
              foreach ($home_ch_hero_feature_list as $list_item) {
                foreach ($list_item as $list_single_item) {
                  echo '<li>'. $list_single_item .'</li>';
                }
              }
            ?>
          </ul>
        <?php endif ?>
        <!-- ./Feature list -->

      </div><!-- ./Vetera home hero grid col -->

      <!-- Vetera home hero grid col -->
      <div class="vetera-home-hero__main-grid__col mobile-move">
        <img height="382" width="498" src="<?php echo $hhh_ch_banner_image; ?>" alt="Vetera" class="vetera-home-hero__banner-img">
      </div><!-- ./Vetera home hero grid col -->
    </div><!-- ./Vetera home hero main grid -->
  </div>
</section><!-- ./Vetera home hero -->