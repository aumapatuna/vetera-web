<?php 
  $press_media_options_downloads_sub_heading = get_sub_field('press_media_options_downloads_sub_heading');
  $press_media_options_downloads_heading = get_sub_field('press_media_options_downloads_heading');
  $press_media_options_downloads_description = get_sub_field('press_media_options_downloads_description');
  $press_media_options_downloads_download_cards = get_sub_field('press_media_options_downloads_download_cards');
?>
<!-- Press and media downloads -->
<section class="vetera-press-media-downloads pb-100">
  <div class="container">

    <!-- Press and media downloads heading contents -->
    <div class="vetera-press-media-downloads__content mb-60 mb-dt-64">
      <h5 class="color-imperial-blue text-center text-uppercase mt-0 mb-4"><?php echo $press_media_options_downloads_sub_heading; ?></h5>
      <h3 class="mt-0 mb-8 color-mirage text-center"><?php echo $press_media_options_downloads_heading; ?></h3>
      <p class="mt-0 mb-0 text-center"><?php echo $press_media_options_downloads_description; ?></p>
    </div><!-- ./Press and media downloads heading contents -->

    <!-- Press and media downloads cards -->
    <div class="vetera-press-media-downloads__download-cards">
      <!-- Download card -->
      <?php foreach ($press_media_options_downloads_download_cards as $key => $press_media_options_downloads_download_card) : ?>
        <div class="vetera-comp-downloads-card">
          <p class="mt-0 mb-16 color-oxford-blue"><?php echo  $press_media_options_downloads_download_card['press_media_options_download_card_heading']; ?></p>
          <div class="vetera-comp-downloads-card__image">
            <img src="<?php echo  $press_media_options_downloads_download_card['press_media_options_download_card_image']['url']; ?>" alt="<?php echo  $press_media_options_downloads_download_card['press_media_options_download_card_image']['alt']; ?>">
          </div>
          <div class="vetera-comp-downloads-card__link">
            <a class="link link--secondary d-inline-block" href="<?php echo  $press_media_options_downloads_download_card['press_media_options_download_card_link_url']; ?>"><?php echo  $press_media_options_downloads_download_card['press_media_options_download_card_link_text']; ?></a>
          </div>
        </div>
        <!-- ./Download card -->
      <?php endforeach; ?>
    </div><!-- ./Press and media downloads cards -->
  </div>
</section><!-- ./Press and media downloads -->