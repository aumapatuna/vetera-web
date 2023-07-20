<!-- Application process cards at careers page -->
<div class="vetera-careers-process-cards">
    <!-- Application process cards wrap -->
    <div class="vetera-careers-process-cards__wrp">
        <!-- Application process cards component wrap -->
      <?php if (have_rows('our_application_process_stat_cards')): ?>
      <?php while (have_rows('our_application_process_stat_cards')): the_row(); ?>
        <div class="vetera-careers-process-cards__blk mb-16 mb-dt-0">
          <?php if (have_rows('remote_stat_card_content')): ?>
          <?php while (have_rows('remote_stat_card_content')): the_row(); ?>
            <div class="vetera-careers-process-cards__item pb-0 pb-dt-40">
                <p class="txt-md-dark mb-32 mb-dt-40 mt-0"><?php echo the_sub_field('stat_card_subtitle'); ?></p>
                <div class="vetera-careers-process-cards__item__icon mt-0 mb-24">
                    <img src="<?php echo the_sub_field('stat_card_icon'); ?>"
                        alt="<?php echo the_sub_field('stat_card_icon_alt'); ?>">
                </div>
                <h5 class="color-dark mb-16 mt-0"><?php echo the_sub_field('stat_cards_main_title'); ?></h5>
                <p class="txt-md color-dark mt-0 mb-0"><?php echo the_sub_field('stat_card_description'); ?></p>
            </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
        <!-- ./Application process cards component wrap -->
        <!-- Application process cards component wrap -->
        <div class="vetera-careers-process-cards__blk mb-16 mb-dt-0">
          <?php if (have_rows('single_on_site_stat_card_content')): ?>
            <?php while (have_rows('single_on_site_stat_card_content')): the_row(); ?>
              <div class="vetera-careers-process-cards__item pb-0 pb-dt-40">
                <p class="txt-md-dark mb-32 mb-dt-40 mt-0"><?php echo the_sub_field('stat_card_subtitle'); ?></p>
                <div class="vetera-careers-process-cards__item__icon mt-0 mb-24">
                  <img src="<?php echo the_sub_field('stat_card_icon'); ?>"
                       alt="<?php echo the_sub_field('stat_card_icon_alt'); ?>">
                </div>
                <h5 class="color-dark mb-16 mt-0"><?php echo the_sub_field('stat_cards_main_title'); ?></h5>
                <p class="txt-md color-dark mt-0 mb-0"><?php echo the_sub_field('stat_card_description'); ?></p>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
        <!-- ./Application process cards component wrap -->
        <!-- Application process cards component wrap -->
        <div class="vetera-careers-process-cards__blk vetera-careers-process-cards__blk--blocks">
            <?php if (have_rows('multiple_on_site_stat_card_content')): ?>
              <?php while (have_rows('multiple_on_site_stat_card_content')): the_row(); ?>
                <div class="vetera-careers-process-cards__item pb-0 pb-dt-40">
                  <p class="txt-md-dark mb-32 mb-dt-40 mt-0"><?php echo the_sub_field('stat_card_subtitle'); ?>&nbsp;</p>
                  <div class="vetera-careers-process-cards__item__icon mt-0 mb-24">
                    <img src="<?php echo the_sub_field('stat_card_icon'); ?>"
                         alt="<?php echo the_sub_field('stat_card_icon_alt'); ?>">
                  </div>
                  <h5 class="color-dark mb-16 mt-0"><?php echo the_sub_field('stat_cards_main_title'); ?></h5>
                  <p class="txt-md color-dark mt-0 mb-0"><?php echo the_sub_field('stat_card_description'); ?></p>
                </div>
              <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <!-- ./Application process cards component wrap -->
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
    <!-- ./Application process cards wrap -->
</div>
<!-- ./Application process cards at careers page -->

