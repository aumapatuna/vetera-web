<?php
// Check value exists.
if( have_rows('fwd_grid_blocks_page_grids') ):
    // Loop grid rows.
    while ( have_rows('fwd_grid_blocks_page_grids') ) : the_row();
        // Case: Header layout.
        if( get_row_layout() == 'fwd_left_image_grid_block' ):
?>

<?php
    $fwd_left_image_grid_block_icon = get_sub_field('fwd_left_image_grid_block_icon');
    $fwd_left_image_grid_block_subtitle = get_sub_field('fwd_left_image_grid_block_subtitle');
    $fwd_left_image_grid_block_title = get_sub_field('fwd_left_image_grid_block_title');
    $fwd_left_image_grid_block_description = get_sub_field('fwd_left_image_grid_block_description');
    $fwd_left_image_grid_block_list_items = get_sub_field('fwd_left_image_grid_block_list_items');
    $fwd_left_image_grid_block_learn_more_button_text = get_sub_field('fwd_left_image_grid_block_learn_more_button_text');
    $fwd_left_image_grid_block_learn_more_button_url = get_sub_field('fwd_left_image_grid_block_learn_more_button_url');
    $fwd_left_image_grid_block_main_image = get_sub_field('fwd_left_image_grid_block_main_image');

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
            <?php if($fwd_left_image_grid_block_icon) : ?>
                <div class="vetera-comp-direct-communication__symbol text-dt-left">
                    <img class="vetera-comp-direct-communication__symbol-img" src="<?php echo $fwd_left_image_grid_block_icon; ?>" alt="Grid symbol" />
                </div>
            <?php endif; ?>
            <!-- ./Direct communication component symbol -->
            <!-- Direct communication component topic -->
            <?php if($fwd_left_image_grid_block_subtitle) : ?>
                <h5 class="h5 text-center mt-4 mb-4 text-dt-left"><?php echo $fwd_left_image_grid_block_subtitle; ?></h5>
            <?php endif; ?>
            <!-- ./Direct communication component topic -->
            <!-- Direct communication component title -->
            <h2 class="text-center mt-0 mb-16 text-dt-left"><?php echo $fwd_left_image_grid_block_title; ?></h2>
            <!-- ./Direct communication component title -->
            <!-- Direct communication component description -->
            <p class="text-center mb-28  text-dt-left"><?php echo $fwd_left_image_grid_block_description; ?></p>
            <!-- ./Direct communication component description -->
            <!-- Direct communication component list -->
            <?php if($fwd_left_image_grid_block_list_items) : 
                foreach ($fwd_left_image_grid_block_list_items as $key => $fwd_left_image_grid_block_list_itm) : ?>
                <ul class="vetera-unordered-list text-left">
                    <li class="vetera-unordered-list__item"><?php echo $fwd_left_image_grid_block_list_itm['fwd_left_image_grid_block_list_item']; ?></li>
                </ul>
            <?php 
                endforeach; 
                endif; ?>
            <!-- ./Direct communication component list -->
            <!-- Learn more button -->
            <?php if($fwd_left_image_grid_block_learn_more_button_url) : ?>
                <a href="<?php echo $fwd_left_image_grid_block_learn_more_button_url; ?>" class="btn btn mt-36"><?php echo $fwd_left_image_grid_block_learn_more_button_text; ?></a>
            <?php endif; ?>
            <!-- ./Learn more button -->
        </div>
        <!-- ./Direct communication component details -->
        <!-- Direct communication component image -->
        <div class="vetera-comp-direct-communication__img-blk text-dt-left mt-36 mt-dt-0">
            <div class="vetera-comp-direct-communication__image text-center">
                <img class="vetera-comp-direct-communication__image-img" src="<?php echo $fwd_left_image_grid_block_main_image; ?>" alt="Main image" />
            </div>
        </div>
        <!-- ./Direct communication component image -->
    </div>
    <!-- ./Direct communication component grid -->
</div>
<!-- ./Direct communication component -->

<?php
    // Case: Left image grid layout.
    elseif( get_row_layout() == 'fwd_right_image_grid_block' ):
?>

<!-- Direct communication component - Left image grid -->
<?php
    $fwd_right_image_grid_block_icon = get_sub_field('fwd_right_image_grid_block_icon');
    $fwd_right_image_grid_block_subtitle = get_sub_field('fwd_right_image_grid_block_subtitle');
    $fwd_right_image_grid_block_title = get_sub_field('fwd_right_image_grid_block_title');
    $fwd_right_image_grid_block_description = get_sub_field('fwd_right_image_grid_block_description');
    $fwd_right_image_grid_block_list_items = get_sub_field('fwd_right_image_grid_block_list_items');
    $fwd_right_image_grid_block_learn_more_button_text = get_sub_field('fwd_right_image_grid_block_learn_more_button_text');
    $fwd_right_image_grid_block_learn_more_button_url = get_sub_field('fwd_right_image_grid_block_learn_more_button_url');
    $fwd_right_image_grid_block_main_image = get_sub_field('fwd_right_image_grid_block_main_image');

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
            <?php if($fwd_right_image_grid_block_icon) : ?>
                <div class="vetera-comp-client-records__symbol text-dt-left">
                    <img class="vetera-comp-client-records__symbol-img" src="<?php echo $fwd_right_image_grid_block_icon; ?>" alt="Grid symbol" />
                </div>
            <?php endif; ?>
            <!-- ./Records component symbol -->
            <!-- Records component topic -->
            <?php if($fwd_right_image_grid_block_subtitle) : ?>
                <h5 class="h5 text-center mt-4 mb-4 text-dt-left"><?php echo $fwd_right_image_grid_block_subtitle; ?></h5>
            <?php endif; ?>
            <!-- ./Records component topic -->
            <!-- Records component title -->
            <h2 class="text-center mt-0 mb-16 text-dt-left"><?php echo $fwd_right_image_grid_block_title; ?></h2>
            <!-- ./Records component title -->
            <!-- Records component description -->
            <p class="text-center mb-28 text-dt-left"><?php echo $fwd_right_image_grid_block_description; ?></p>
            <!-- ./Records component description -->
            <!-- Records component list -->
            <?php if($fwd_right_image_grid_block_list_items) : 
                foreach ($fwd_right_image_grid_block_list_items as $key => $fwd_right_image_grid_block_list_itm) : ?>
                <ul class="vetera-unordered-list text-left">
                    <li class="vetera-unordered-list__item"><?php echo $fwd_right_image_grid_block_list_itm['fwd_right_image_grid_block_list_item']; ?></li>
                </ul>
            <?php 
                endforeach; 
                endif; ?>
            <!-- ./Records component list -->
            <!-- Learn more button -->
            <?php if($fwd_right_image_grid_block_learn_more_button_url) : ?>
                <a href="<?php echo $fwd_right_image_grid_block_learn_more_button_url; ?>" class="btn btn mt-36"><?php echo $fwd_right_image_grid_block_learn_more_button_text; ?></a>
            <?php endif; ?>
            <!-- ./Learn more button -->
        </div>
        <!-- ./Records component details -->
        <!-- Records component image -->
        <div class="vetera-comp-client-records__img-blk text-dt-left mb-0 mt-36 mt-dt-0">
            <div class="vetera-comp-client-records__image text-center mb-dt-72 mb-dt-0">
                <img class="vetera-comp-client-records__image-img" src="<?php echo $fwd_right_image_grid_block_main_image; ?>" alt="Main imge" />
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

    // No value.
    else :
    echo 'No grid added';
    // Do something...
endif;
?>