<?php
  $press_media_options = get_field('press_media_options');
//   print_r($press_media_options);
//   die();
?>

<!-- For whom details -->

  <?php

  // Check value exists.
  if( have_rows('press_media_options') ):
    // Loop grid rows.
    while ( have_rows('press_media_options') ) : the_row();
      // Case: Description block layout.
      if( get_row_layout() == 'press_media_options_press_listing' ):
  ?>

    <?php get_template_part( 'template-parts/press-and-media/vetera-press-media-listing' );?>

  <?php
    // Case: Testimonials block layout.
    elseif( get_row_layout() == 'press_media_options_downloads' ):
  ?>

    <!-- Light grid block -->
    <?php get_template_part( 'template-parts/press-and-media/vetera-press-media-downloads' ); ?>
    <!-- ./Light grid block -->

  <?php
    // Case: You Grow block layout.
    elseif( get_row_layout() == 'press_media_options_contact_info_block' ):
  ?>

    <!-- Dark grid block -->
    <?php get_template_part( 'template-parts/press-and-media/vetera-press-media-contact-block' ); ?>
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
  <!-- ./For whom details -->

  <?php get_template_part( 'template-parts/components/vetera-comp-get-started' ); ?>
