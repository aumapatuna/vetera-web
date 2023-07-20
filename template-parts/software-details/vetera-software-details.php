<?php
  $software_details = get_field('software_details');
  //$fwd_grid_blocks = get_sub_field('fwd_grid_blocks');
  // print_r($software_details);
  // die();
?>

<!-- For whom details -->
<div class="vetera-software-details">

  <?php

  // Check value exists.
  if( have_rows('software_details') ):
    // Loop grid rows.
    while ( have_rows('software_details') ) : the_row();
      // Case: Description block layout.
      if( get_row_layout() == 'sd_header_block' ):
  ?>

    <?php echo get_template_part( 'template-parts/software-details/vetera-single-image-header' ); ?>

  <?php
    // Case: Testimonials block layout.
    elseif( get_row_layout() == 'sd_grid_light_block' ):
  ?>

    <!-- Light grid block -->
    <section class="vetera-software-details-light-grid mt-100">
      <div class="container">
        <?php echo get_template_part( 'template-parts/software-details/vetera-software-details-two-col-grid' ); ?> 
      </div>
    </section>
    <!-- ./Light grid block -->

  <?php
    // Case: You Grow block layout.
    elseif( get_row_layout() == 'sd_grid_dark_block_integrations' ):
  ?>

    <!-- Dark grid block -->
    <section class="vetera-software-details-dark-grid mt-100 pb-dt-44 pb-4 pt-80">
      <!-- <div class="container"> -->
        <?php echo get_template_part( 'template-parts/software-details/vetera-software-details-two-col-grid-dark' ); ?> 
      <!-- </div> -->
    </section>
    <!-- ./Dark grid block -->

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

</div><!-- ./For whom details -->