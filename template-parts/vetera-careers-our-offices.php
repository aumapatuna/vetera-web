<?php
//Gallery Cards
$our_gallery_card = get_field('our_offices_gallery_cards');

$has_gallery = get_field('our_offices_gallery_has_gallery');
// print_r($has_gallery);
// die();

//Munich Gallery Data
$munich_gallery_data = $our_gallery_card['munich_gallery_card_images'];
$munich_gallery_title = $munich_gallery_data['gallery_title'];
$munich_gallery_full_image = $munich_gallery_data['gallery_images'][0]['image'];
$munich_gallery_full_image_name = $munich_gallery_data['gallery_images'][0]['image_name'];
$munich_gallery_half_left_image = $munich_gallery_data['gallery_images'][1]['image'];
$munich_gallery_half_left_image_name = $munich_gallery_data['gallery_images'][1]['image_name'];
$munich_gallery_half_right_image = $munich_gallery_data['gallery_images'][2]['image'];
$munich_gallery_half_right_image_name = $munich_gallery_data['gallery_images'][2]['image_name'];

//Munich Gallery List
$munich_gallery_image_list = $munich_gallery_data['gallery_images'];

//Eltville Gallery Data
$eltville_gallery_data = $our_gallery_card['eltville_gallery_card_images'];
$eltville_gallery_title = $eltville_gallery_data['gallery_title'];
$eltville_gallery_full_image = $eltville_gallery_data['gallery_images'][0]['image'];
$eltville_gallery_full_image_name = $eltville_gallery_data['gallery_images'][0]['image_name'];
$eltville_gallery_half_left_image = $eltville_gallery_data['gallery_images'][1]['image'];
$eltville_gallery_half_left_image_name = $eltville_gallery_data['gallery_images'][1]['image_name'];
$eltville_gallery_half_right_image = $eltville_gallery_data['gallery_images'][2]['image'];
$eltville_gallery_half_right_image_name = $eltville_gallery_data['gallery_images'][2]['image_name'];

//Eltville Gallery List
$eltville_gallery_image_list = $eltville_gallery_data['gallery_images'];

//Berlin Gallery Data
$berlin_gallery_data = $our_gallery_card['berlin_gallery_card_images'];
$berlin_gallery_title = $berlin_gallery_data['gallery_title'];
$berlin_gallery_full_image = $berlin_gallery_data['gallery_images'][0]['image'];
$berlin_gallery_full_image_name = $berlin_gallery_data['gallery_images'][0]['image_name'];
$berlin_gallery_half_left_image = $berlin_gallery_data['gallery_images'][1]['image'];
$berlin_gallery_half_left_image_name = $berlin_gallery_data['gallery_images'][1]['image_name'];
$berlin_gallery_half_right_image = $berlin_gallery_data['gallery_images'][2]['image'];
$berlin_gallery_half_right_image_name = $berlin_gallery_data['gallery_images'][2]['image_name'];

//Berlin Gallery List
$berlin_gallery_image_list = $berlin_gallery_data['gallery_images'];
?>

<!-- Careers our offices section -->
<section class="vetera-careers-offices pb-32 pb-dt-80 mt-dt-48 mt-0 mb-100">
  <div class="container">
    <div class="vetera-careers-offices__description pl-dt-16 pr-dt-16">
      <h3
        class="color-white text-center pt-48 pt-dt-80 pb-0 mt-0 mb-0"><?php the_field('our_offices_header'); ?></h3>
      <p
        class="color-darkergray2 text-center pt-16 pt-dt-24 pb-0 mb-0 mt-0"><?php the_field('our_offices_description'); ?></p>
    </div>
    <?php if($has_gallery == 'Yes') : ?>
    <div class="vetera-careers-offices__cards">
      <!-- Offices gallery card component -->
      <div class="grid-block blk-1">
        <div class="vetera-comp-office-gallery-card p-20 mb-dt-56">
          <h3 class="color-imperial-blue m-0 pb-12"><?php echo $munich_gallery_title ?></h3>
          <!--  Top full width image-->
          <div class="vetera-comp-office-gallery-card__image-full-width card-image mb-8">
            <img src="<?php echo $munich_gallery_full_image ?>"
                 alt="<?php echo $munich_gallery_full_image_name ?>">
          </div>
          <!--  ./Top full width image-->
          <!--  Bottom half width images-->
          <div class="vetera-comp-office-gallery-card__image-half-width card-image">
            <div class="image-container pr-4">
              <div class="vetera-comp-office-gallery-card__gallery-img"
                   style="background-image: url('<?php echo $munich_gallery_half_left_image ?>')"></div>
            </div>
            <div class="image-container">
              <!--  image with view all link-->
              <a href="<?php echo $munich_gallery_half_right_image ?>"
                 data-lightbox="munich_gallery_images" data-title="<?php echo $munich_gallery_half_right_image_name ?>">
                <!--  View all button-->
                <div class="view-all-button">
                  <span class="link link--secondary d-inline-block color-white">View all</span>
                </div>
                <!--  ./View all button-->
                <div class="vetera-comp-office-gallery-card__gallery-img"
                     style="background-image: url('<?php echo $munich_gallery_half_right_image ?>')"></div>
              </a>
              <!--  ./image with view all link-->
              <!-- Hidden Images list-->
              <?php foreach ($munich_gallery_image_list as $key => $munich_gallery_image) : ?>
                <a href="<?php echo $munich_gallery_image['image'] ?>"
                   data-lightbox="munich_gallery_images"
                   data-title="<?php echo $munich_gallery_image['image_name'] ?>"></a>
              <?php endforeach; ?>
              <!--./ Hidden Images list-->
            </div>
          </div>
          <!--  ./Bottom half width images-->
          <!-- Offices gallery card gradient -->
          <span class="vetera-comp-office-gallery-card__gradient"></span>
          <!-- ./Offices gallery card gradient -->
        </div>
        <div class="vetera-comp-office-gallery-card p-20 mb-dt-56">
          <h3 class="color-imperial-blue m-0 pb-12"><?php echo $eltville_gallery_title ?></h3>
          <!--  Top full width image-->
          <div class="vetera-comp-office-gallery-card__image-full-width card-image mb-8">
            <img src="<?php echo $eltville_gallery_full_image ?>"
                 alt="<?php echo $eltville_gallery_full_image_name ?>">
          </div>
          <!--  ./Top full width image-->

          <!--  Bottom half width images-->
          <div class="vetera-comp-office-gallery-card__image-half-width card-image">
            <div class="image-container pr-4">
              <div class="vetera-comp-office-gallery-card__gallery-img"
                   style="background-image: url('<?php echo $eltville_gallery_half_left_image ?>')"></div>
            </div>
            <div class="image-container">
              <!--  image with view all link-->
              <a href="<?php echo $eltville_gallery_half_right_image ?>"
                 data-lightbox="eltville_gallery_images"
                 data-title="<?php echo $eltville_gallery_half_right_image_name ?>">
                <!--  View all button-->
                <div class="view-all-button">
                  <span class="link link--secondary d-inline-block color-white">View all</span>
                </div>
                <!--  ./View all button-->
                <div class="vetera-comp-office-gallery-card__gallery-img"
                     style="background-image: url('<?php echo $eltville_gallery_half_right_image ?>')"></div>
              </a>
              <!--  ./image with view all link-->
              <!-- Hidden Images list-->
              <?php foreach ($eltville_gallery_image_list as $key => $eltville_gallery_image) : ?>
                <a href="<?php echo $eltville_gallery_image['image'] ?>"
                   data-lightbox="eltville_gallery_images"
                   data-title="<?php echo $eltville_gallery_image['image_name'] ?>"></a>
              <?php endforeach; ?>
              <!--./ Hidden Images list-->
            </div>
          </div>
          <!--  ./Bottom half width images-->
          <!-- Offices gallery card gradient -->
          <span class="vetera-comp-office-gallery-card__gradient"></span>
          <!-- ./Offices gallery card gradient -->
        </div>
        <!-- ./Offices gallery card component -->
      </div>

      <div class="grid-block blk-2">
        <!-- Offices gallery card component -->
        <div class="vetera-comp-office-gallery-card p-20 mb-dt-56">
          <h3 class="color-imperial-blue m-0 pb-12"><?php echo $berlin_gallery_title ?></h3>
          <!--  Top full width image-->
          <div class="vetera-comp-office-gallery-card__image-full-width card-image mb-8">
            <img src="<?php echo $berlin_gallery_full_image ?>"
                 alt="<?php echo $berlin_gallery_full_image_name ?>">
          </div>
          <!--  ./Top full width image-->

          <!--  Bottom half width images-->
          <div class="vetera-comp-office-gallery-card__image-half-width card-image">
            <div class="image-container pr-4">
              <div class="vetera-comp-office-gallery-card__gallery-img"
                   style="background-image: url('<?php echo $berlin_gallery_half_left_image ?>')">
              </div>
            </div>
            <div class="image-container">
              <!--  image with view all link-->
              <a href="<?php echo $berlin_gallery_half_right_image ?>"
                 data-lightbox="berlin_gallery_images" data-title="<?php echo $berlin_gallery_half_right_image_name ?>">
                <!--  View all button-->
                <div class="view-all-button">
                  <span class="link link--secondary d-inline-block color-white">View all</span>
                </div>
                <!--  ./View all button-->
                <div class="vetera-comp-office-gallery-card__gallery-img"
                     style="background-image: url('<?php echo $berlin_gallery_half_right_image ?>')">
                </div>
              </a>
              <!--  ./image with view all link-->
              <!-- Hidden Images list-->
              <?php foreach ($berlin_gallery_image_list as $key => $berlin_gallery_image) : ?>
                <a href="<?php echo $berlin_gallery_image['image'] ?>"
                   data-lightbox="berlin_gallery_images"
                   data-title="<?php echo $berlin_gallery_image['image_name'] ?>"></a>
              <?php endforeach; ?>
              <!--./ Hidden Images list-->
            </div>
          </div>
          <!--  ./Bottom half width images-->
          <!-- Offices gallery card gradient -->
          <span class="vetera-comp-office-gallery-card__gradient"></span>
          <!-- ./Offices gallery card gradient -->
        </div>
        <!-- ./Offices gallery card component -->
      </div>
    </div>
    <?php endif; ?>
  </div>
  <span class="vetera-careers-offices__bg-image"></span>
</section>
<!-- ./Careers our offices section -->
<!-- <script>
    lightbox.option({
        resizeDuration: 200,
        wrapAround: true,
        disableScrolling: true,
        maxHeight: 450,
    })
</script> -->

