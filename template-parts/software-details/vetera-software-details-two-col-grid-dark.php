<!-- Vetera is for, two column section -->
<?php
  $pg_name = str_replace(".php","",get_page_template_slug());
?>

<div class="veterta-products-for-section veterta-products-for-section--dark veterta-products-for-section--<?php echo $pg_name; ?>">
  <div class="container">

    <?php
      $sd_grid_dark_block_integrations_heading = get_sub_field('sd_grid_dark_block_integrations_heading');
      $sd_grid_dark_block_integrations_description = get_sub_field('sd_grid_dark_block_integrations_description');
    ?>
      <?php if($sd_grid_dark_block_integrations_heading || $sd_grid_dark_block_integrations_description) : ?>
        <div class="veterta-products-for-section__content mb-48 mb-dt-64">
          <?php if($sd_grid_dark_block_integrations_heading) : ?>
            <h2 class="text-center color-white mt-0 mb-0"><?php echo $sd_grid_dark_block_integrations_heading; ?></h2>
          <?php endif; ?>
          <?php if($sd_grid_dark_block_integrations_description) : ?>
              <p class="text-center color-white mt-16"><?php echo $sd_grid_dark_block_integrations_description; ?></p>
          <?php endif; ?> 
        </div>
      <?php endif; ?>
    
    <?php
      // Check value exists.
      if( have_rows('sd_grid_dark_block_integrations_containers') ):
        // Loop grid rows.
        while ( have_rows('sd_grid_dark_block_integrations_containers') ) : the_row();
          // // Case: Right image grid overflow layout.
          if( get_row_layout() == 'sd_glbc_integration_right' ):
    ?>
    <?php
      $sd_glbc_integration_right_sub_heading = get_sub_field('sd_glbc_integration_right_sub_heading');
      $sd_glbc_integration_right_heading = get_sub_field('sd_glbc_integration_right_heading');
      $sd_glbc_integration_right_description = get_sub_field('sd_glbc_integration_right_description');
      $sd_glbc_integration_right_button_url = get_sub_field('sd_glbc_integration_right_button_url');
      $sd_glbc_integration_right_button_text = get_sub_field('sd_glbc_integration_right_button_text');
      $sd_glbc_integration_right_logos = get_sub_field('sd_glbc_integration_right_logos');
    ?>
      <!--Integration section-->
      <div class="vetera-comp-integration vetera-comp-integration-dark pb-100 pt-dt-44 pb-dt-36">
        <!-- Integration component grid -->
        <div class="vetera-comp-integration__grid">
          <!-- Integration component details -->
          <div class="vetera-comp-integration__details text-center text-dt-left">
            <!-- Integration component topic -->
            <h5 class="h5 text-center color-torch-red mt-4 mb-8 text-dt-left"><?php echo $sd_glbc_integration_right_sub_heading; ?></h5>
            <!-- ./Integration component topic -->
            <!-- Integration component title -->
            <h2 class="text-center color-white mt-0 mb-24 text-dt-left"><?php echo $sd_glbc_integration_right_heading; ?></h2>
            <!-- ./Integration component title -->
            <!-- Integration component description -->
            <p class="text-center color-white mb-0 mt-0 text-dt-left"><?php echo $sd_glbc_integration_right_description; ?></p>
            <!-- ./Integration description -->
            <!--   Integration view button -->
            <?php 
              if(!empty($sd_glbc_integration_right_button_url)) :
            ?>
              <a class="btn mt-36" href="<?php echo $sd_glbc_integration_right_button_url; ?>"><?php echo $sd_glbc_integration_right_button_text; ?></a>
            <?php endif; ?>
            <!-- ./Integration view button -->
          </div>
          <!-- ./Client records component details -->
          <!-- Integration logos -->
          <div class="vetera-comp-integration__logo-blk text-dt-left mt-36 mt-dt-0">
            <!-- Integrations logo card component -->
            <?php 
                if(!empty($sd_glbc_integration_right_logos)) {
            ?>
            <?php foreach ($sd_glbc_integration_right_logos as $key => $sd_glbc_integration_right_logo) : ?>
            <div class="integrations-logo-card p-16 mb-0 mb-dt-20 d-flex justify-content-center align-items-center bg-color-white">
              <div class="integrations-logo-card__img">
                <img src="<?php echo $sd_glbc_integration_right_logo['sd_glbc_integration_right_logos_image']; ?>" alt="<?php echo $sd_glbc_integration_right_logo['sd_glbc_integration_right_logos_image_alter']; ?>">
              </div>
            </div>
            <?php endforeach; 
                } else {
            ?>
              <div class="integrations-logo-card p-16 mb-0 mb-dt-20 d-flex justify-content-center align-items-center bg-color-white">
                <div class="integrations-logo-card__img">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/integration-images/integrations-logo/idexx.svg" alt="Integration images">
                </div>
              </div>
            <?php } ?>
            <!-- ./Integrations logo card component -->
          </div>
          <!-- ./Integration logos -->
        </div>
        <!-- ./Integration grid -->
      </div>
      <!--./Integration section-->

      <?php
        // Case: Left image grid layout.
        elseif( get_row_layout() == 'sd_glbc_integration_left' ):
      ?>

    <?php
      $sd_glbc_integration_left_sub_heading = get_sub_field('sd_glbc_integration_left_sub_heading');
      $sd_glbc_integration_left_heading = get_sub_field('sd_glbc_integration_left_heading');
      $sd_glbc_integration_left_description = get_sub_field('sd_glbc_integration_left_description');
      $sd_glbc_integration_left_button_url = get_sub_field('sd_glbc_integration_left_button_url');
      $sd_glbc_integration_left_button_text = get_sub_field('sd_glbc_integration_left_button_text');
      $sd_glbc_integration_left_logos = get_sub_field('sd_glbc_integration_left_logos');
    ?>
      <!--Integration section-->
      <div class="vetera-comp-integration vetera-comp-integration-dark vetera-comp-integration-dark--inverse pb-100 pt-dt-44 pb-dt-36">
        <!-- Integration component grid -->
        <div class="vetera-comp-integration__grid">
          <!-- Integration component details -->
          <div class="vetera-comp-integration__details text-center text-dt-left">
            <!-- Integration component topic -->
            <h5 class="h5 text-center color-torch-red mt-4 mb-8 text-dt-left"><?php echo $sd_glbc_integration_left_sub_heading; ?></h5>
            <!-- ./Integration component topic -->
            <!-- Integration component title -->
            <h2 class="text-center color-white mt-0 mb-24 text-dt-left"><?php echo $sd_glbc_integration_left_heading; ?></h2>
            <!-- ./Integration component title -->
            <!-- Integration component description -->
            <p class="text-center color-white mb-0 mt-0 text-dt-left"><?php echo $sd_glbc_integration_left_description; ?></p>
            <!-- ./Integration description -->
            <!--   Integration view button -->
            <?php 
              if(!empty($sd_glbc_integration_left_button_url)) :
            ?>
              <a class="btn mt-36" href="<?php echo $sd_glbc_integration_left_button_url; ?>"><?php echo $sd_glbc_integration_left_button_text; ?></a>
            <?php endif; ?>
            <!-- ./Integration view button -->
          </div>
          <!-- Integration logos --> 
          <div class="vetera-comp-integration__logo-blk text-dt-left mt-36 mt-dt-0">
            <!-- Integrations logo card component -->
            <?php 
                if(!empty($sd_glbc_integration_left_logos)) {
            ?>
            <?php foreach ($sd_glbc_integration_left_logos as $key => $sd_glbc_integration_left_logo) : ?>
            <div class="integrations-logo-card p-16 mb-0 mb-dt-20 d-flex justify-content-center align-items-center bg-color-white">
              <div class="integrations-logo-card__img">
                <img src="<?php echo $sd_glbc_integration_left_logo['sd_glbc_integration_left_logos_image']; ?>" alt="<?php echo $sd_glbc_integration_left_logo['sd_glbc_integration_left_logos_image_alter']; ?>">
              </div>
            </div>
            <?php endforeach; 
                } else {
            ?>
              <div class="integrations-logo-card p-16 mb-0 mb-dt-20 d-flex justify-content-center align-items-center bg-color-white">
                <div class="integrations-logo-card__img">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/integration-images/integrations-logo/idexx.svg" alt="Integration images">
                </div>
              </div>
            <?php } ?>
            <!-- ./Integrations logo card component -->
          </div>
          <!-- ./Integration logos -->
        </div>
        <!-- ./Integration grid -->
      </div>
      <!--./Integration section-->
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