<!-- Request demo grid section -->
<?php
// Check value exists.
if( have_rows('rd_grid_blocks') ):
    // Loop grid rows.
    while ( have_rows('rd_grid_blocks') ) : the_row();
        // Case: Header layout.
        if( get_row_layout() == 'grid_right_image_block' ):
?>
<!-- Records component - Right image grid -->
<?php
    $rd_grid_right_image_block_subtitle = get_sub_field('rd_grid_right_image_block_subtitle');
    $rd_grid_right_image_block_title = get_sub_field('rd_grid_right_image_block_title');
    $rd_grid_right_image_block_description = get_sub_field('rd_grid_right_image_block_description');
    $rd_grid_right_image_block_image = get_sub_field('rd_grid_right_image_block_image');
?>
<div class="vetera-comp-client-records mt-80 mt-dt-100">
    <!-- Records component grid --> 
    <div class="vetera-comp-client-records__grid">
        <!-- Records component details -->
        <div class="vetera-comp-client-records__details text-center text-dt-left">
            <!-- Records component topic -->
            <h5 class="h5 text-center mt-4 mb-4 text-dt-left"><?php echo $rd_grid_right_image_block_subtitle; ?></h5>
            <!-- ./Records component topic -->
            <!-- Records component title -->
            <h2 class="text-center mt-0 mb-16 text-dt-left"><?php echo $rd_grid_right_image_block_title; ?></h2>
            <!-- ./Records component title -->
            <!-- Records component description -->
            <p class="text-center mb-0 text-dt-left"><?php echo $rd_grid_right_image_block_description; ?></p>
            <!-- ./Records component description -->
        </div>
        <!-- ./Records component details -->
        <!-- Records component image -->
        <div class="vetera-comp-client-records__img-blk text-dt-left mb-0 mt-36 mt-dt-0">
            <div class="vetera-comp-client-records__image text-center mb-dt-0">
                <img class="vetera-comp-client-records__image-img" src="<?php echo $rd_grid_right_image_block_image; ?>" alt="Right block image" />
            </div>
        </div>
        <!-- ./Records component image -->
    </div>
    <!-- ./Records component grid -->
</div>
<!-- ./Records component - Right image grid -->

<?php
    // Case: Left image grid layout.
    elseif( get_row_layout() == 'grid_left_image_block' ):
?>

<!-- Direct communication component - Left image grid -->
<?php
    $rd_grid_left_image_block_subtitle = get_sub_field('rd_grid_left_image_block_subtitle');
    $rd_grid_left_image_block_title = get_sub_field('rd_grid_left_image_block_title');
    $rd_grid_left_image_block_description = get_sub_field('rd_grid_left_image_block_description');
    $rd_grid_left_image_block_image = get_sub_field('rd_grid_left_image_block_image');
?>
<div class="vetera-comp-direct-communication mt-80 mt-dt-100">
    <!-- Direct communication component grid -->
    <div class="vetera-comp-direct-communication__grid">
        <!-- Direct communication component details -->
        <div class="vetera-comp-direct-communication__details text-center text-dt-left">
            <!-- Direct communication component topic -->
            <h5 class="h5 text-center mt-4 mb-4 text-dt-left"><?php echo $rd_grid_left_image_block_subtitle; ?></h5>
            <!-- ./Direct communication component topic -->
            <!-- Direct communication component title -->
            <h2 class="text-center mt-0 mb-16 text-dt-left"><?php echo $rd_grid_left_image_block_title; ?></h2>
            <!-- ./Direct communication component title -->
            <!-- Direct communication component description -->
            <p class="text-center mb-0  text-dt-left"><?php echo $rd_grid_left_image_block_description; ?></p>
            <!-- ./Direct communication component description -->
        </div>
        <!-- ./Direct communication component details -->
        <!-- Direct communication component image -->
        <div class="vetera-comp-direct-communication__img-blk text-dt-left mt-36 mt-dt-0">
            <div class="vetera-comp-direct-communication__image text-center mb-dt-0">
                <img class="vetera-comp-direct-communication__image-img" src="<?php echo $rd_grid_left_image_block_image; ?>" alt="Main image">
            </div>
        </div>
        <!-- ./Direct communication component image -->
    <!-- ./Direct communication component grid -->
    </div>
    <!-- ./Direct communication component - Left image grid -->
</div>
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
<!-- ./Request demo grid section -->