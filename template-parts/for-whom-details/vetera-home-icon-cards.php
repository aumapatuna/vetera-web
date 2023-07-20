<!-- You grow card section -->
<!-- Home icon cards -->
<section class="vetera-home-icon-cards mt-100">
    <div class="container">
    <?php
        $fwd_you_grow_block_title = get_sub_field('fwd_you_grow_block_title');
        $fwd_you_grow_block_cards = get_sub_field('fwd_you_grow_block_cards');
        $fwd_you_grow_block_button_text = get_sub_field('fwd_you_grow_block_button_text');
        $fwd_you_grow_block_button_url = get_sub_field('fwd_you_grow_block_button_url');
        $fwd_you_grow_block_description = get_sub_field('fwd_you_grow_block_description');
    ?>  
    <!-- Heading -->
        <div class="vetera-home-icon-cards__content mt-0 mb-48 mb-dt-64">
            <h2 class="mb-0 text-center"><?php echo $fwd_you_grow_block_title; ?></h2>
            <?php
                if($fwd_you_grow_block_description) :
            ?>
                <p class="text-center mt-20"><?php echo $fwd_you_grow_block_description; ?></p>
            <?php
                endif;
            ?>
        </div>
    <!-- ./Heading -->
    <!-- Icon cards list -->
    <div class="vetera-home-icon-cards__list">
        <!-- You grow component -->
        <?php foreach ($fwd_you_grow_block_cards as $key => $fwd_you_grow_block_card) : ?>
        <?php echo 
            '<div class="vetera-comp-you-grow">
                <!-- You grow component logo -->
                <div class="vetera-comp-you-grow__image text-center">
                    <img class="vetera-comp-you-grow__image-img" src="'. $fwd_you_grow_block_card['fwd_you_grow_block_cards_image'] .'" alt="You grow section image" />
                </div>
                <!-- ./You grow component logo -->
                <!-- You grow component heading -->
                <h5 class="heading-5 text-center mt-28 mb-16">' .$fwd_you_grow_block_card['fwd_you_grow_block_cards_title'] .'</h5>
                <!-- ./You grow component heading -->
                <!-- You grow component description -->
                <p class="txt-sm text-center mb-24 mb-dt-20">' .$fwd_you_grow_block_card['fwd_you_grow_block_cards_description'] .'<p>
                <!-- ./You grow component description -->
            </div>';
        ?>
        <?php endforeach; ?>
        <!-- ./You grow component -->
    </div><!-- ./Icon cards list -->
    <!-- You grow component link -->
    <!-- Request demo button -->
    <div class="text-center pt-16">
        <?php if($fwd_you_grow_block_button_url) : ?>
        <a href="<?php echo $fwd_you_grow_block_button_url['url']; ?>" class="btn btn"><?php echo $fwd_you_grow_block_button_text; ?></a>
        <?php endif; ?>
    </div> 
    <!-- ./Request demo button -->
    <!-- ./You grow component link -->
    </div>
</section>
<!-- ./Home icon cards -->
<!-- ./You grow card section -->