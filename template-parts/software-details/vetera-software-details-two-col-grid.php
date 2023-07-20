<!-- Vetera is for, two column section -->
<?php
  $pg_name = str_replace(".php","",get_page_template_slug());
?>

<div class="veterta-products-for-section mt-100 mb-80 veterta-products-for-section--<?php echo $pg_name; ?>">
  <div class="container">
    <?php
      $sd_grid_light_block_heading = get_sub_field('sd_grid_light_block_heading');
      $sd_grid_light_block_description = get_sub_field('sd_grid_light_block_description');
    ?>
      <?php if($sd_grid_light_block_heading || $sd_grid_light_block_description) : ?>
        <div class="veterta-products-for-section__content mb-48 mb-dt-64">
          <?php if($sd_grid_light_block_heading) : ?>
            <h2 class="text-center mb-0"><?php echo $sd_grid_light_block_heading; ?></h2>
          <?php endif; ?>
          <?php if($sd_grid_light_block_description) : ?>
              <p class="text-center mt-20"><?php echo $sd_grid_light_block_description; ?></p>
          <?php endif; ?>
        </div>
      <?php endif; ?>
    <?php

      // Check value exists.
      if( have_rows('sd_grid_light_block_container') ):
        // Loop grid rows.
        while ( have_rows('sd_grid_light_block_container') ) : the_row();
          // // Case: Right image grid overflow layout.
          if( get_row_layout() == 'sd_glbc_right_image_overflow' ):
    ?>
            <!-- Online Scheduling component - Right image grid overflow -->
            <?php 
              $sd_glbc_right_image_overflow_icon = get_sub_field('sd_glbc_right_image_overflow_icon');
              $sd_glbc_right_image_overflow_icon_alt = get_sub_field('sd_glbc_right_image_overflow_icon_alt');
              $sd_glbc_right_image_overflow_subtitle = get_sub_field('sd_glbc_right_image_overflow_subtitle');
              $sd_glbc_right_image_overflow_title = get_sub_field('sd_glbc_right_image_overflow_title');
              $sd_glbc_right_image_overflow_description = get_sub_field('sd_glbc_right_image_overflow_description');
              $sd_glbc_right_image_overflow_list = get_sub_field('sd_glbc_right_image_overflow_list');
              $sd_glbc_right_image_overflow_image = get_sub_field('sd_glbc_right_image_overflow_image');
              $sd_glbc_right_image_overflow_image_alt = get_sub_field('sd_glbc_right_image_overflow_image_alt');

              $grid_block_name = get_sub_field('grid_block_name');
              $rgo_replace = str_replace(' ', '-', $grid_block_name);
              $blk_id = strtolower($rgo_replace);
            ?>
            <div <?php if($grid_block_name) { ?> id="<?php echo $blk_id; ?>" <?php } ?> class="vetera-comp-client-records online-scheduling-bg-image mt-80 mt-dt-100">
              <!-- Online Scheduling component grid -->
              <div class="vetera-comp-client-records__grid">
                <!-- Online Scheduling component details -->
                <div class="vetera-comp-client-records__details text-center text-dt-left">
                  <!-- Online Scheduling component symbol -->
                  <div class="vetera-comp-client-records__symbol text-dt-left">
                    <img class="vetera-comp-client-records__symbol-img" src="<?php echo $sd_glbc_right_image_overflow_icon; ?>" alt="<?php echo $sd_glbc_right_image_overflow_icon_alt; ?>" />
                  </div>
                  <!-- ./Online Scheduling component symbol -->
                  <!-- Online Scheduling component topic -->
                  <h5 class="h5 text-center mt-4 mb-4 text-dt-left"><?php echo $sd_glbc_right_image_overflow_subtitle; ?></h5>
                  <!-- ./Online Scheduling component topic -->
                  <!-- Online Scheduling component title -->
                  <h2 class="text-center mt-0 mb-16 text-dt-left"><?php echo $sd_glbc_right_image_overflow_title; ?></h2>
                  <!-- ./Online Scheduling component title -->
                  <!-- Online Scheduling component description -->
                  <p class="text-center text-dt-left mb-28"><?php echo $sd_glbc_right_image_overflow_description; ?></p>
                  <!-- ./Online Scheduling component description -->
                  <!-- Online Scheduling component list -->
                  <ul class="vetera-unordered-list text-left">
                    <?php foreach ($sd_glbc_right_image_overflow_list as $key => $sd_glbc_right_image_overflow_li) : ?>
                      <?php echo 
                        '<li class="vetera-unordered-list__item">'. $sd_glbc_right_image_overflow_li['sd_glbc_right_image_overflow_list_item'] .'</li>';
                      ?>
                    <?php endforeach; ?>
                  </ul>
                  <!-- ./Online Scheduling component list -->
                </div>
                <!-- ./Online Scheduling component details -->
                <!-- Online Scheduling component image -->
                <div class="vetera-comp-direct-communication__img-blk text-dt-left mt-36 mt-dt-0">
                  <div class="vetera-comp-client-records__image text-center">
                    <img class="vetera-comp-client-records__image-img" src="<?php echo $sd_glbc_right_image_overflow_image; ?>" alt="<?php echo $sd_glbc_right_image_overflow_image_alt; ?>" />
                  </div>
                </div>
                <!-- ./Online Scheduling component image -->
              </div>
              <!-- ./Online Scheduling component grid -->
            </div>
            <!-- ./Online Scheduling component -->

          <?php
            // Case: Left image grid layout.
            elseif( get_row_layout() == 'sd_glbc_left_image' ):
          ?>

            <!-- Direct communication component - Left image grid -->
            <?php 
              $sd_glbc_left_image_icon = get_sub_field('sd_glbc_left_image_icon');
              $sd_glbc_left_image_icon_alt = get_sub_field('sd_glbc_left_image_icon_alt');
              $sd_glbc_left_image_subtitle = get_sub_field('sd_glbc_left_image_subtitle');
              $sd_glbc_left_image_title = get_sub_field('sd_glbc_left_image_title');
              $sd_glbc_left_image_description = get_sub_field('sd_glbc_left_image_description');
              $sd_glbc_left_image_list = get_sub_field('sd_glbc_left_image_list');
              $sd_glbc_left_image_image = get_sub_field('sd_glbc_left_image_image');
              $sd_glbc_left_image_image_alt = get_sub_field('sd_glbc_left_image_image_alt');

              $grid_block_name = get_sub_field('grid_block_name');
              $rgo_replace = str_replace(' ', '-', $grid_block_name);
              $blk_id = strtolower($rgo_replace);
            ?>
            <div <?php if($grid_block_name) { ?> id="<?php echo $blk_id; ?>" <?php } ?> class="vetera-comp-direct-communication mt-100">
              <!-- Direct communication component grid -->
              <div class="vetera-comp-direct-communication__grid">
                <!-- Direct communication component details -->
                <div class="vetera-comp-direct-communication__details text-center text-dt-left">
                  <!-- Direct communication component symbol -->
                  <div class="vetera-comp-direct-communication__symbol text-dt-left">
                    <img class="vetera-comp-direct-communication__symbol-img" src="<?php echo $sd_glbc_left_image_icon; ?>" alt="<?php echo $sd_glbc_left_image_icon_alt; ?>" />
                  </div>
                  <!-- ./Direct communication component symbol -->
                  <!-- Direct communication component topic -->
                  <h5 class="h5 text-center mt-4 mb-4 text-dt-left"><?php echo $sd_glbc_left_image_subtitle; ?></h5>
                  <!-- ./Direct communication component topic -->
                  <!-- Direct communication component title -->
                  <h2 class="text-center mt-0 mb-16 text-dt-left"><?php echo $sd_glbc_left_image_title; ?></h2>
                  <!-- ./Direct communication component title -->
                  <!-- Direct communication component description -->
                  <p class="text-center mb-28  text-dt-left"><?php echo $sd_glbc_left_image_description; ?></p>
                  <!-- ./Direct communication component description -->
                  <!-- Direct communication component list -->
                  <ul class="vetera-unordered-list text-left">
                    <?php foreach ($sd_glbc_left_image_list as $key => $sd_glbc_left_image_li) : ?>
                      <?php echo 
                        '<li class="vetera-unordered-list__item">'. $sd_glbc_left_image_li['sd_glbc_left_image_list_item'] .'</li>';
                      ?>
                    <?php endforeach; ?>
                  </ul>
                  <!-- ./Direct communication component list -->
                </div>
                <!-- ./Direct communication component details -->
                <!-- Direct communication component image -->
                <div class="vetera-comp-direct-communication__img-blk text-dt-left mt-36 mt-dt-0">
                  <div class="vetera-comp-direct-communication__image text-center">
                    <img class="vetera-comp-direct-communication__image-img" src="<?php echo $sd_glbc_left_image_image; ?>" alt="<?php echo $sd_glbc_left_image_image_alt; ?>" />
                  </div>
                </div>
                <!-- ./Direct communication component image -->
              </div>
              <!-- ./Direct communication component grid -->
            </div>
            <!-- ./Direct communication component -->

          <?php
            // Case: Left image grid layout.
            elseif( get_row_layout() == 'sd_glbc_right_image' ):
          ?>

            <!-- Records component  - Right image grid -->
            <?php 
              $sd_glbc_right_image_icon = get_sub_field('sd_glbc_right_image_icon');
              $sd_glbc_right_image_icon_alt = get_sub_field('sd_glbc_right_image_icon_alt');
              $sd_glbc_right_image_subtitle = get_sub_field('sd_glbc_right_image_subtitle');
              $sd_glbc_right_image_title = get_sub_field('sd_glbc_right_image_title');
              $sd_glbc_right_image_description = get_sub_field('sd_glbc_right_image_description');
              $sd_glbc_right_image_list = get_sub_field('sd_glbc_right_image_list');
              $sd_glbc_right_image_image = get_sub_field('sd_glbc_right_image_image');
              $sd_glbc_right_image_image_alt = get_sub_field('sd_glbc_right_image_image_alt'); 

              $grid_block_name = get_sub_field('grid_block_name');
              $rgo_replace = str_replace(' ', '-', $grid_block_name);
              $blk_id = strtolower($rgo_replace);
            ?>
            <div <?php if($grid_block_name) { ?> id="<?php echo $blk_id; ?>" <?php } ?> class="vetera-comp-client-records mt-100">
              <!-- Records component grid -->
              <div class="vetera-comp-client-records__grid">
                <!-- Records component details -->
                <div class="vetera-comp-client-records__details text-center text-dt-left">
                  <!-- Records component symbol -->
                  <div class="vetera-comp-client-records__symbol text-dt-left">
                    <img class="vetera-comp-client-records__symbol-img" src="<?php echo $sd_glbc_right_image_icon; ?>" alt="<?php echo $sd_glbc_right_image_icon_alt; ?>" />
                  </div>
                  <!-- ./Records component symbol -->
                  <!-- Records component topic -->
                  <h5 class="h5 text-center mt-4 mb-4 text-dt-left"><?php echo $sd_glbc_right_image_subtitle; ?></h5>
                  <!-- ./Records component topic -->
                  <!-- Records component title -->
                  <h2 class="text-center mt-0 mb-16 text-dt-left"><?php echo $sd_glbc_right_image_title; ?></h2>
                  <!-- ./Records component title -->
                  <!-- Records component description -->
                  <p class="text-center mb-28 text-dt-left"><?php echo $sd_glbc_right_image_description; ?></p>
                  <!-- ./Records component description -->
                  <!-- Records component list -->
                  <ul class="vetera-unordered-list text-left">
                    <?php foreach ($sd_glbc_right_image_list as $key => $sd_glbc_right_image_li) : ?>
                      <?php echo 
                        '<li class="vetera-unordered-list__item">'. $sd_glbc_right_image_li['sd_glbc_right_image_list_item'] .'</li>';
                      ?>
                    <?php endforeach; ?>
                  </ul>
                  <!-- ./Records component list -->
                </div>
                <!-- ./Records component details -->
                <!-- Records component image -->
                <div class="vetera-comp-client-records__img-blk text-dt-left mb-0 mt-36 mt-dt-0">
                  <div class="vetera-comp-client-records__image text-center">
                    <img class="vetera-comp-client-records__image-img" src="<?php echo $sd_glbc_right_image_image; ?>" alt="<?php echo $sd_glbc_right_image_image_alt; ?>" />
                  </div>
                </div>
                <!-- ./Records component image -->
              </div>
              <!-- ./Records component grid -->
            </div>
            <!-- ./Records component -->

        <?php
            endif;
          // End loop.
          endwhile;
        ?>
      <?php
        // No value.
        else :
          echo 'No grid added';
      ?>
      <?php
          // Do something...
      endif;
    ?>

  </div>
</div>
<!-- ./Vetera is for, two column section -->