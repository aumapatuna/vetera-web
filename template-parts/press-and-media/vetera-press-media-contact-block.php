<?php 
  $press_media_options_contact_banner_image = get_sub_field('press_media_options_contact_banner_image');
  $press_media_options_contact_sub_heading = get_sub_field('press_media_options_contact_sub_heading');
  $press_media_options_contact_heading = get_sub_field('press_media_options_contact_heading');
  $press_media_options_contact_description = get_sub_field('press_media_options_contact_description');

  $press_media_options_contact_info_heading = get_sub_field('press_media_options_contact_info_heading');
  $press_media_options_contact_info_sub_heading = get_sub_field('press_media_options_contact_info_sub_heading');
  $press_media_options_contact_info_tel = get_sub_field('press_media_options_contact_info_tel');
  $press_media_options_contact_info_email = get_sub_field('press_media_options_contact_info_email');
?>
<!-- Press and media contact block -->
<section class="vetera-press-media-contact-block">
  <div class="container">
    <!-- Press and media contact block card -->
    <div class="vetera-press-media-contact-block__card">
      <!-- Press and media contact block main grid -->
      <div class="vetera-press-media-contact-block__main-grid">

        <!-- Press and media contact block banner -->
        <div class="vetera-press-media-contact-block__banner">
          <img src="<?php echo $press_media_options_contact_banner_image['url']; ?>" alt="<?php echo $press_media_options_contact_banner_image['alt']; ?>" class="vetera-press-media-contact-block__banner__img">
        </div><!-- ./Press and media contact block banner -->

        <!-- Press and media contact block content -->
        <div class="vetera-press-media-contact-block__content">
          <h5 class="red-caps-5 text-left text-uppercase mt-0 mb-4 "><?php echo $press_media_options_contact_sub_heading; ?></h5>
          <h3 class="mt-0 mb-8 color-white"><?php echo $press_media_options_contact_heading; ?></h3>
          <p class="mt-0 mb-40 color-white"><?php echo $press_media_options_contact_description; ?></p>

          <div class="vetera-press-media-contact-block__content__contact">
            <p class="mt-0 mb-4 color-white txt-lg"><?php echo $press_media_options_contact_info_heading; ?></p>
            <p class="mt-0 mb-20 txt-sm color-darkergray2"><?php echo $press_media_options_contact_info_sub_heading; ?></p>
              <div class="vetera-press-media-contact-block__content__contact-info">
                <ul class="vetera-press-media-contact-block__content__contact-info-list">
                <?php
                    $phone_text = $press_media_options_contact_info_tel;
                    $phone = str_replace(' ', '', $phone_text);
                    $email_text = $press_media_options_contact_info_email;
                    $email = str_replace(' ', '', $email_text);
                ?>
                  <?php if($press_media_options_contact_info_tel) : ?>
                    <li class="vetera-press-media-contact-block__content__contact-info-list-item">
                      <a href="tel:<?php echo $phone; ?>" class="vetera-press-media-contact-block__content__contact-info-list-item-link"><span class="vetera-press-media-contact-block__content__contact-info-list-item-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/press/tel-icon.svg" alt="Phone"></span><?php echo $phone_text; ?></a>
                    </li>
                  <?php endif; ?>
                  <?php if($press_media_options_contact_info_email) : ?>
                    <li class="vetera-press-media-contact-block__content__contact-info-list-item">
                      <a href="mailto:<?php echo $email; ?>" class="vetera-press-media-contact-block__content__contact-info-list-item-link"><span class="vetera-press-media-contact-block__content__contact-info-list-item-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/press/email-icon.svg" alt=""></span><?php echo $email_text; ?></a>
                    </li>
                  <?php endif; ?>
                </ul>
              </div>
          </div>
        </div><!-- ./Press and media contact block content -->
      </div><!-- ./Press and media contact block main grid -->
    </div><!-- ./Press and media contact block card -->
  </div>
</section><!-- ./Press and media contact block -->