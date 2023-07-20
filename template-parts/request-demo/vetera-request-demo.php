<!-- Request demo page -->
<?php
  $rd_grid_blocks = get_sub_field('rd_grid_blocks');
//   print_r($rd_grid_blocks);
//   die();
?>

<div class="vetera-request-demo mt-116 mt-dt-160">

    <?php
    // Check value exists.
    if( have_rows('request_demo_page_blocks') ):
        // Loop grid rows.
        while ( have_rows('request_demo_page_blocks') ) : the_row();
            // Case: Header layout.
            if( get_row_layout() == 'rd_header_block' ):
    ?>

        <!-- Header -->
        <?php echo get_template_part( 'template-parts/request-demo/vetera-request-demo-header' ); ?> 
        <!-- ./Header -->

    <?php
        // Case: Right image grid layout.
        elseif( get_row_layout() == 'grid_block_layout'):
    ?>
        <section class="vetera-request-demo-grid mb-100">
            <div class="container">
                <!-- Grid blocks -->
                <?php echo get_template_part( 'template-parts/request-demo/vetera-request-demo-grid' ); ?>
                <!-- ./Grid block -->
            </div>
        </section>

    <?php
        // Case: Left image grid layout.
        elseif( get_row_layout() == 'rd_form_block' ):
    ?>

        <!-- Form blocks -->
        <?php echo get_template_part( 'template-parts/request-demo/vetera-request-demo-form' ); ?>
        <!-- ./Form block -->

    <?php
            endif;
        // End loop.
        endwhile;

        // No value.
        else :
          echo 'No grid added';
          // Do something...
      endif;
    ?>

</div>
<!-- ./Request demo page -->