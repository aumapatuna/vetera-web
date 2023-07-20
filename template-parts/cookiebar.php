<?php
  $cookiebar_title = get_field('cookiebar_title', 'option');
  $cookie_text = get_field('cookie_text', 'option');
  $cookie_accept_button_text = get_field('cookie_accept_button_text', 'option');
  $cookie_disable_button_text = get_field('cookie_disable_button_text', 'option');
?>
<!-- Our team section in About Us section -->
<div class="vetera-cookie">
  <div class="container">
    <div class="vetera-cookie__close"></div>
    <div class="vetera-cookie__wrp">
      <div class="vetera-cookie__text-block">
        <?php if(!empty($cookiebar_title)) : ?>
          <p class="vetera-cookie__title text-bold color-white mt-0 mb-8"><?php echo $cookiebar_title; ?></p>
        <?php endif; ?>
        <?php if(!empty($cookie_text)) : ?>
          <div class="vetera-cookie__description txt-sm color-white mt-0 mb-36 mb-dt-0"><?php echo $cookie_text; ?></div>
        <?php endif; ?>
      </div>
      <div class="vetera-cookie__btn-block">
        <?php if(!empty($cookie_accept_button_text)) : ?>
          <a href="#" class="btn btn accept-cookie text-center d-block d-dt-inline-block mb-16 mb-dt-0"><?php echo $cookie_accept_button_text; ?></a>
        <?php endif; ?>
        <?php if(!empty($cookie_disable_button_text)) : ?>
          <a href="#" class="btn btn--inverse delete-cookie text-center d-block d-dt-inline-block mr-dt-16"><?php echo $cookie_disable_button_text; ?></a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>