<?php
  $for_whom_details = get_field('for_whom_details');
  //$fwd_grid_blocks = get_sub_field('fwd_grid_blocks');
  // print_r($for_whom_details);
  // die();
?>

<!-- For whom details -->
<div class="vetera-for-whom-details">

  <?php

  // Check value exists.
  if( have_rows('for_whom_details') ):
    // Loop grid rows.
    while ( have_rows('for_whom_details') ) : the_row();
      // Case: Description block layout.
      if( get_row_layout() == 'fwd_header_block' ):
  ?>

    <?php echo get_template_part( 'template-parts/for-whom-details/vetera-single-image-header' ); ?>

  <?php
    // Case: Testimonials block layout.
    elseif( get_row_layout() == 'fwd_icon_block' ):
  ?>

    <?php echo get_template_part( 'template-parts/for-whom-details/vetera-product-detail-card' ); ?>  

  <?php
    // Case: Testimonials block layout.
    elseif( get_row_layout() == 'fwd_testimonials_block' ):
  ?>

    <!-- Testimonials block -->
    <?php echo get_template_part( 'template-parts/for-whom-details/vetera-for-whom-testimonials' ); ?>
    <!-- ./Testimonials block -->
  
  <?php
    // Case: You Grow block layout.
    elseif( get_row_layout() == 'fwd_you_grow_block' ):
  ?>

    <!-- Icon cards block -->
    <?php echo get_template_part( 'template-parts/for-whom-details/vetera-home-icon-cards' ); ?>
    <!-- ./Icon cards block -->

  <?php
    // Case: Integrations block layout.
    elseif( get_row_layout() == 'fwd_customer_support_block' ):
  ?>

    <!-- Customer support block -->
    <?php echo get_template_part( 'template-parts/for-whom-details/vetera-home-custom-support' ); ?>
    <!-- ./Customer support block -->

  <?php
    // Case: You Grow block layout.
    elseif( get_row_layout() == 'fwd_grid_blocks' ):
  ?>

    <!-- Customer support block -->
    <section class="vetera-for-whom-detailsb mt-100">
      <div class="container">
        <?php echo get_template_part( 'template-parts/for-whom-details/vetera-for-whom-details-grid' ); ?>
      </div>
    </section>
    <!-- ./Customer support block -->

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