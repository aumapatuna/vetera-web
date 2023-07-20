<?php 
  // Data array
  $home_ch_stats_cards_section_options = get_field('home_ch_sec5_options');

  // Heading top text 
  $home_ch_stats_cards_section_header_top_text = $home_ch_stats_cards_section_options['home_ch_sec5_heading_top_text'];
  $home_ch_stats_cards_section_heading = $home_ch_stats_cards_section_options['home_ch_sec5_heading'];
  $home_ch_stats_cards_section_btn_txt = $home_ch_stats_cards_section_options['home_ch_sec5_button_text'];
  $home_ch_stats_cards_section_btn_link = $home_ch_stats_cards_section_options['home_ch_sec5_button_link'];

  // Cards 
  $home_ch_stats_cards_section_cards = $home_ch_stats_cards_section_options['home_ch_sec5_stat_cards'];

  // Card #1 
  $home_ch_stats_cards_1 = $home_ch_stats_cards_section_cards['home_ch_sec5_stat_card_1'];
  $home_ch_stats_cards_1_heading = $home_ch_stats_cards_1['heading_ch'];
  $home_ch_stats_cards_1_number = $home_ch_stats_cards_1['number_ch'];
  $home_ch_stats_cards_1_description = $home_ch_stats_cards_1['description_ch'];

  // Card #2
  $home_ch_stats_cards_2 = $home_ch_stats_cards_section_cards['home_ch_sec5_stat_card_2'];
  $home_ch_stats_cards_2_heading = $home_ch_stats_cards_2['heading_ch'];
  $home_ch_stats_cards_2_number = $home_ch_stats_cards_2['number_ch'];
  $home_ch_stats_cards_2_description = $home_ch_stats_cards_2['description_ch'];

  // Card #3
  $home_ch_stats_cards_3 = $home_ch_stats_cards_section_cards['home_ch_sec5_stat_card_3'];
  $home_ch_stats_cards_3_heading = $home_ch_stats_cards_3['heading_ch'];
  $home_ch_stats_cards_3_number = $home_ch_stats_cards_3['number_ch'];
  $home_ch_stats_cards_3_description = $home_ch_stats_cards_3['description_ch'];

  // Card #4
  $home_ch_stats_cards_4 = $home_ch_stats_cards_section_cards['home_ch_sec5_stat_card_4'];
  $home_ch_stats_cards_4_heading = $home_ch_stats_cards_4['heading_ch'];
  $home_ch_stats_cards_4_number = $home_ch_stats_cards_4['number_ch'];
  $home_ch_stats_cards_4_description = $home_ch_stats_cards_4['description_ch'];

  // BG image
  $home_ch_sec5_background_image = $home_ch_stats_cards_section_options['home_ch_sec5_background_image'];
?>

<!-- Home stats -->
<section class="vetera-home-stats pb-80 pt-dt-104 pb-dt-100">
  <div class="container">

    <!-- Home stats content -->
    <div class="vetera-home-stats__content mb-36 mb-dt-72">

      <!-- Home stats content heading -->
      <h5 class="mt-0 mb-8 color-imperial-blue"><?php echo $home_ch_stats_cards_section_header_top_text; ?></h5><!-- ./Home stats content heading -->

      <!-- Home stats content desc -->
      <h2 class="mt-0 mb-24"><?php echo $home_ch_stats_cards_section_heading; ?></h2><!-- ./Home stats content desc -->

      <!-- Home stats content btn -->
      <a href="<?php echo $home_ch_stats_cards_section_btn_link; ?>" class="btn"><?php echo $home_ch_stats_cards_section_btn_txt; ?></a><!-- ./Home stats content btn -->
    </div><!-- ./Home stats content -->

    <!-- Home stats wrapper -->
    <div class="vetera-home-stats__stats">

      <!-- Home stats list -->
      <div class="vetera-home-stats__stats__list">

        <!-- Stats card component -->
        <div class="vetera-comp-stats-card p-20 mb-20 mb-dt-0 bg-color-white">
          <div class="vetera-comp-stats-card__header">
            <p class="txt-sm-bold mt-0 mb-12 color-dark"><?php echo $home_ch_stats_cards_1_heading; ?></p>
          </div>
          <!-- Separator component -->
          <hr class="vetera-comp-stats-card__separator">
          <!-- ./Separator card component -->
          <div class="vetera-comp-stats-card__body">
            <h2 class="h2 mt-0 mb-20 pt-16 color-darkblack"><?php echo $home_ch_stats_cards_1_number; ?></h2>
            <p class="txt-sm m-0 color-grayedblue"><?php echo $home_ch_stats_cards_1_description; ?></p>
          </div>
        </div>
        <!-- ./Stats card component -->

        <!-- Stats card component -->
        <div class="vetera-comp-stats-card p-20 mb-20 mb-dt-0 bg-color-white">
          <div class="vetera-comp-stats-card__header">
            <p class="txt-sm-bold mt-0 mb-12 color-dark"><?php echo $home_ch_stats_cards_2_heading; ?></p>
          </div>
          <!-- Separator component -->
          <hr class="vetera-comp-stats-card__separator">
          <!-- ./Separator card component -->
          <div class="vetera-comp-stats-card__body">
            <h2 class="h2 mt-0 mb-20 pt-16 color-darkblack"><?php echo $home_ch_stats_cards_2_number; ?></h2>
            <p class="txt-sm m-0 color-grayedblue"><?php echo $home_ch_stats_cards_2_description; ?></p>
          </div>
        </div>
        <!-- ./Stats card component -->

        <!-- Stats card component -->
        <div class="vetera-comp-stats-card p-20 mb-20 mb-dt-0 bg-color-white">
          <div class="vetera-comp-stats-card__header">
            <p class="txt-sm-bold mt-0 mb-12 color-dark"><?php echo $home_ch_stats_cards_3_heading; ?></p>
          </div>
          <!-- Separator component -->
          <hr class="vetera-comp-stats-card__separator">
          <!-- ./Separator card component -->
          <div class="vetera-comp-stats-card__body">
            <h2 class="h2 mt-0 mb-20 pt-16 color-darkblack"><?php echo $home_ch_stats_cards_3_number; ?></h2>
            <p class="txt-sm m-0 color-grayedblue"><?php echo $home_ch_stats_cards_3_description; ?></p>
          </div>
        </div>
        <!-- ./Stats card component -->

        <!-- Stats card component -->
        <div class="vetera-comp-stats-card p-20 mb-20 mb-dt-0 bg-color-white">
          <div class="vetera-comp-stats-card__header">
            <p class="txt-sm-bold mt-0 mb-12 color-dark"><?php echo $home_ch_stats_cards_4_heading; ?></p>
          </div>
          <!-- Separator component -->
          <hr class="vetera-comp-stats-card__separator">
          <!-- ./Separator card component -->
          <div class="vetera-comp-stats-card__body">
            <h2 class="h2 mt-0 mb-20 pt-16 color-darkblack"><?php echo $home_ch_stats_cards_4_number; ?></h2>
            <p class="txt-sm m-0 color-grayedblue"><?php echo $home_ch_stats_cards_4_description; ?></p>
          </div>
        </div>
        <!-- ./Stats card component -->
      </div><!-- ./Home stats list -->
    </div><!-- Home stats wrapper -->
  </div>

  <!-- Background image -->
  <span class="vetera-home-stats__bg mt-dt-100" style="background-image: url('<?php echo $home_ch_sec5_background_image; ?>');"></span><!-- ./Background image -->
</section><!-- ./Home stats -->