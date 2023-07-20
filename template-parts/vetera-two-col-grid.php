<!-- Vetera is for, two column section -->
<?php
  //$pg_name = basename(get_permalink());
  //$pg_name = get_page_template();
  $pg_name = str_replace(".php","",get_page_template_slug());
?>

<section class="veterta-products-for-section mt-100 mb-80 veterta-products-for-section--<?php echo $pg_name; ?>">
  <div class="container">
      <div class="veterta-products-for-section__content mb-48 mb-dt-64">
        <h2 class="text-center mb-0"><?php the_field('grid_blocks_template_title'); ?></h2>
        <?php
            $grid_blocks_template_description = get_field('grid_blocks_template_description');
            if($grid_blocks_template_description) :
        ?>
            <p class="text-center mt-20"><?php echo $grid_blocks_template_description; ?></p>
        <?php
            endif;
        ?>
      </div>
    <?php

      // Check value exists.
      if( have_rows('grid_blocks') ):
        // Loop grid rows.
        while ( have_rows('grid_blocks') ) : the_row();
          // // Case: Right image grid overflow layout.
          if( get_row_layout() == 'right_image_grid_overflow' ):
    ?>
            <!-- Online Scheduling component - Right image grid overflow -->
            <?php 
              $right_image_grid_overflow_grid_block_name = get_sub_field('grid_block_name');
              $rgo_replace = str_replace(' ', '-', $right_image_grid_overflow_grid_block_name);
              $blk_id = strtolower($rgo_replace);
            ?>
            <div <?php if($right_image_grid_overflow_grid_block_name) { ?> id="<?php echo $blk_id; ?>" <?php } ?> class="vetera-comp-client-records online-scheduling-bg-image mt-80 mt-dt-100">
              <!-- Online Scheduling component grid -->
              <div class="vetera-comp-client-records__grid">
                <!-- Online Scheduling component details -->
                <div class="vetera-comp-client-records__details text-center text-dt-left">
                  <!-- Online Scheduling component symbol -->
                  <div class="vetera-comp-client-records__symbol text-dt-left">
                    <?php 
                      $right_image_grid_overflow_symbol_image = get_sub_field('right_image_grid_overflow_symbol_image');
                      $right_image_grid_overflow_symbol_image_alt = get_sub_field('right_image_grid_overflow_symbol_image_alt');
                    ?>
                    <?php if($right_image_grid_overflow_symbol_image) : ?>
                      <img class="vetera-comp-client-records__symbol-img" src="<?php echo $right_image_grid_overflow_symbol_image; ?>" alt="<?php echo $right_image_grid_overflow_symbol_image_alt; ?>" />
                    <?php endif; ?>
                  </div>
                  <!-- ./Online Scheduling component symbol -->
                  <!-- Online Scheduling component topic -->
                  <?php
                    $right_image_grid_overflow_sub_title = get_sub_field('right_image_grid_overflow_sub_title');
                  ?>
                  <h5 class="h5 text-center mt-4 mb-4 text-dt-left"><?php echo $right_image_grid_overflow_sub_title; ?></h5>
                  <!-- ./Online Scheduling component topic -->
                  <!-- Online Scheduling component title -->
                  <?php
                    $right_image_grid_overflow_title = get_sub_field('right_image_grid_overflow_title');
                  ?>
                  <h2 class="text-center mt-0 mb-16 text-dt-left"><?php echo $right_image_grid_overflow_title; ?></h2>
                  <!-- ./Online Scheduling component title -->
                  <!-- Online Scheduling component description -->
                  <?php
                    $right_image_grid_overflow_description = get_sub_field('right_image_grid_overflow_description');
                  ?>
                  <p class="text-center text-dt-left mb-28"><?php echo $right_image_grid_overflow_description; ?></p>
                  <!-- ./Online Scheduling component description -->
                  <!-- Online Scheduling component list -->
                  <ul class="vetera-unordered-list text-left">
                    <?php 
                        $right_image_grid_overflow_list = get_sub_field('right_image_grid_overflow_list');
                    ?>
                    <?php foreach ($right_image_grid_overflow_list as $key => $right_image_grid_overflow_li) : ?>
                      <li class="vetera-unordered-list__item"><?php echo $right_image_grid_overflow_li['right_image_grid_overflow_list_item'];?></li>
                    <?php endforeach; ?>
                  </ul>
                  <!-- ./Online Scheduling component list -->
                  <!-- Learn more button -->
                  <?php 
                    $right_image_grid_overflow_learn_more_text = get_sub_field('right_image_grid_overflow_learn_more_text');
                    $right_image_grid_overflow_learn_more_url = get_sub_field('right_image_grid_overflow_learn_more_url');
                    if($right_image_grid_overflow_learn_more_url) :
                  ?>
                    <a href="<?php echo $right_image_grid_overflow_learn_more_url; ?>" class="btn btn mt-36"><?php echo $right_image_grid_overflow_learn_more_text; ?></a>
                    <?php endif; ?>
                  <!-- ./Learn more button -->
                </div>
                <!-- ./Online Scheduling component details -->
                <!-- Online Scheduling component image -->
                <div class="vetera-comp-direct-communication__img-blk text-dt-left mt-36 mt-dt-0">
                  <div class="vetera-comp-client-records__image text-center">
                    <?php 
                      $right_image_grid_overflow_image = get_sub_field('right_image_grid_overflow_image');
                      $right_image_grid_overflow_image_alt = get_sub_field('right_image_grid_overflow_image_alt');
                    ?>
                    <img class="vetera-comp-client-records__image-img" src="<?php echo $right_image_grid_overflow_image; ?>" alt="<?php echo $right_image_grid_overflow_image_alt; ?>" />
                  </div>
                </div>
                <!-- ./Online Scheduling component image -->
              </div>
              <!-- ./Online Scheduling component grid -->
            </div>
            <!-- ./Online Scheduling component -->

          <?php
            // Case: Left image grid layout.
            elseif( get_row_layout() == 'left_image_grid' ):
          ?>

            <!-- Direct communication component - Left image grid -->
            <?php 
              $left_image_grid_grid_block_name = get_sub_field('grid_block_name');
              $rgo_replace = str_replace(' ', '-', $left_image_grid_grid_block_name);
              $blk_id = strtolower($rgo_replace);
            ?>
            <div <?php if($left_image_grid_grid_block_name) { ?> id="<?php echo $blk_id; ?>" <?php } ?> class="vetera-comp-direct-communication mt-100">
              <!-- Direct communication component grid -->
              <div class="vetera-comp-direct-communication__grid">
                <!-- Direct communication component details -->
                <div class="vetera-comp-direct-communication__details text-center text-dt-left">
                  <!-- Direct communication component symbol -->
                  <div class="vetera-comp-direct-communication__symbol text-dt-left">
                    <?php 
                      $left_image_grid_symbol_image = get_sub_field('left_image_grid_symbol_image');
                      $left_image_grid_symbol_image_alt = get_sub_field('left_image_grid_symbol_image_alt');
                    ?>
                    <?php if($left_image_grid_symbol_image) : ?>
                      <img class="vetera-comp-direct-communication__symbol-img" src="<?php echo $left_image_grid_symbol_image; ?>" alt="<?php echo $left_image_grid_symbol_image_alt; ?>" />
                    <?php endif; ?>
                  </div>
                  <!-- ./Direct communication component symbol -->
                  <!-- Direct communication component topic -->
                  <?php
                    $left_image_grid_sub_title = get_sub_field('left_image_grid_sub_title');
                  ?>
                  <h5 class="h5 text-center mt-4 mb-4 text-dt-left"><?php echo $left_image_grid_sub_title; ?></h5>
                  <!-- ./Direct communication component topic -->
                  <!-- Direct communication component title -->
                  <?php
                    $left_image_grid_title = get_sub_field('left_image_grid_title');
                  ?>
                  <h2 class="text-center mt-0 mb-16 text-dt-left"><?php echo $left_image_grid_title; ?></h2>
                  <!-- ./Direct communication component title -->
                  <!-- Direct communication component description -->
                  <?php
                    $left_image_grid_description = get_sub_field('left_image_grid_description');
                  ?>
                  <p class="text-center mb-28  text-dt-left"><?php echo $left_image_grid_description; ?></p>
                  <!-- ./Direct communication component description -->
                  <!-- Direct communication component list -->
                  <ul class="vetera-unordered-list text-left">
                    <?php 
                        $left_image_grid_list = get_sub_field('left_image_grid_list');
                    ?>
                    <?php foreach ($left_image_grid_list as $key => $left_image_grid_li) : ?>
                      <li class="vetera-unordered-list__item"><?php echo $left_image_grid_li['left_image_grid_list_item'];?></li>
                    <?php endforeach; ?>
                  </ul>
                  <!-- ./Direct communication component list -->
                  <!-- Learn more button -->
                  <?php 
                    $left_image_grid_learn_more_text = get_sub_field('left_image_grid_learn_more_text');
                    $left_image_grid_learn_more_url = get_sub_field('left_image_grid_learn_more_url');
                    if($left_image_grid_learn_more_url) :
                  ?>
                    <a href="<?php echo $left_image_grid_learn_more_url; ?>" class="btn btn mt-36"><?php echo $left_image_grid_learn_more_text; ?></a>
                  <?php endif; ?>
                  <!-- ./Learn more button -->
                </div>
                <!-- ./Direct communication component details -->
                <!-- Direct communication component image -->
                <div class="vetera-comp-direct-communication__img-blk text-dt-left mt-36 mt-dt-0">
                  <div class="vetera-comp-direct-communication__image text-center">
                    <?php 
                      $left_image_grid_image = get_sub_field('left_image_grid_image');
                      $left_image_grid_image_alt = get_sub_field('left_image_grid_image_alt');
                    ?>
                    <img class="vetera-comp-direct-communication__image-img" src="<?php echo $left_image_grid_image; ?>" alt="<?php echo $left_image_grid_image_alt; ?>" />
                  </div>
                </div>
                <!-- ./Direct communication component image -->
              </div>
              <!-- ./Direct communication component grid -->
            </div>
            <!-- ./Direct communication component -->

          <?php
            // Case: Left image grid layout.
            elseif( get_row_layout() == 'right_image_grid' ):
          ?>

            <!-- Records component  - Right image grid -->
            <?php 
              $right_image_grid_grid_block_name = get_sub_field('grid_block_name');
              $rgo_replace = str_replace(' ', '-', $right_image_grid_grid_block_name);
              $blk_id = strtolower($rgo_replace);
            ?>
            <div <?php if($right_image_grid_grid_block_name) { ?> id="<?php echo $blk_id; ?>" <?php } ?> class="vetera-comp-client-records mt-100">
              <!-- Records component grid -->
              <div class="vetera-comp-client-records__grid">
                <!-- Records component details -->
                <div class="vetera-comp-client-records__details text-center text-dt-left">
                  <!-- Records component symbol -->
                  <div class="vetera-comp-client-records__symbol text-dt-left">
                    <?php 
                      $right_image_grid_symbol_image = get_sub_field('right_image_grid_symbol_image');
                      $right_image_grid_symbol_image_alt = get_sub_field('right_image_grid_symbol_image_alt');
                    ?>
                    <?php if($right_image_grid_symbol_image) : ?>
                      <img class="vetera-comp-client-records__symbol-img" src="<?php echo $right_image_grid_symbol_image; ?>" alt="<?php echo $right_image_grid_symbol_image_alt; ?>" />
                    <?php endif; ?>
                  </div>
                  <!-- ./Records component symbol -->
                  <!-- Records component topic -->
                  <?php
                    $right_image_grid_sub_title = get_sub_field('right_image_grid_sub_title');
                  ?>
                  <h5 class="h5 text-center mt-4 mb-4 text-dt-left"><?php echo $right_image_grid_sub_title; ?></h5>
                  <!-- ./Records component topic -->
                  <!-- Records component title -->
                  <?php
                    $right_image_grid_title = get_sub_field('right_image_grid_title');
                  ?>
                  <h2 class="text-center mt-0 mb-16 text-dt-left"><?php echo $right_image_grid_title; ?></h2>
                  <!-- ./Records component title -->
                  <!-- Records component description -->
                  <?php
                    $right_image_grid_description = get_sub_field('right_image_grid_description');
                  ?>
                  <p class="text-center mb-28 text-dt-left"><?php echo $right_image_grid_description; ?></p>
                  <!-- ./Records component description -->
                  <!-- Records component list -->
                  <ul class="vetera-unordered-list text-left">
                    <?php 
                        $right_image_grid_list = get_sub_field('right_image_grid_list');
                    ?>
                    <?php foreach ($right_image_grid_list as $key => $right_image_grid_li) : ?>
                      <li class="vetera-unordered-list__item"><?php echo $right_image_grid_li['right_image_grid_list_item'];?></li>
                    <?php endforeach; ?>
                  </ul>
                  <!-- ./Records component list -->
                  <!-- Learn more button -->
                  <?php 
                    $right_image_grid_learn_more_text = get_sub_field('right_image_grid_learn_more_text');
                    $right_image_grid_learn_more_url = get_sub_field('right_image_grid_learn_more_url');
                    if($right_image_grid_learn_more_url) :
                  ?>
                    <a href="<?php echo $right_image_grid_learn_more_url; ?>" class="btn btn mt-36"><?php echo $right_image_grid_learn_more_text; ?></a>
                  <?php endif; ?>
                  <!-- ./Learn more button -->
                </div>
                <!-- ./Records component details -->
                <!-- Records component image -->
                <div class="vetera-comp-client-records__img-blk text-dt-left mb-0 mt-36 mt-dt-0">
                  <div class="vetera-comp-client-records__image text-center">
                    <?php 
                      $right_image_grid_image = get_sub_field('right_image_grid_image');
                      $right_image_grid_image_alt = get_sub_field('right_image_grid_image_alt');
                    ?>
                    <img class="vetera-comp-client-records__image-img" src="<?php echo $right_image_grid_image; ?>" alt="<?php echo $right_image_grid_image_alt; ?>" />
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
</section>
<!-- ./Vetera is for, two column section -->