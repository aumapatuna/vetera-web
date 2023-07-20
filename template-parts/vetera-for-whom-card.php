<!-- For whom page cards -->
<section class="vetera-for-whom-card mt-100">
    <div class="container">
        <!-- For whom page section title -->
        <div class="vetera-for-whom-card__content">
            <h2 class="text-center mb-0"><?php the_field('three_grid_cards_heading'); ?></h2>
            <!-- ./For whom page section title -->
            <!-- For whom page section description -->
            <?php
                $three_grid_cards_description = get_field('three_grid_cards_description');
                if($three_grid_cards_description) :
            ?>
                <p class="text-center mt-20"><?php echo $three_grid_cards_description; ?></p>
            <?php
                endif;
            ?>
        </div>
        <!-- ./For whom page section description -->
    </div>
    <?php 
        $three_grid_cards = get_field('three_grid_cards');
        if($three_grid_cards) :
    ?>
        <div class="vetera-for-whom-card__wrp  mt-48 mt-dt-64">
            <div class="container">
                <!-- For whom page cards -->
                <div class="vetera-for-whom-card__grid px-dt-88 px-16 pt-dt-40 pb-dt-20 py-32">
                    <?php foreach ($three_grid_cards as $key => $three_grid_card) : ?>
                        <!-- For whom page card - small animal -->
                        <?php
                            $card_link = $three_grid_card['three_grid_cards_link'];
                        ?> 
                        <?php if($card_link) : ?>
                        <a class="vetera-comp-product-detail-card__link" href="<?php echo $card_link; ?>" target="_self">
                        <?php endif; ?>
                            <div class="vetera-comp-product-detail-card text-center p-24 p-dt-24 pb-32 bg-color-white">
                                <div class="vetera-comp-product-detail-card__icon d-flex justify-content-center align-items-center pb-12 pt-dt-24 pb-dt-24">
                                <img src="<?php echo $three_grid_card['three_grid_cards_heading_image'];?>" alt="<?php echo $three_grid_card['three_grid_cards_heading_image_alt'];?>" >
                                </div>
                                <div class="vetera-comp-product-detail-card__body">
                                    <p class="m-0 color-oxford-blue txt-sm c-title"><?php echo $three_grid_card['three_grid_cards_title'];?></p>
                                </div>
                            </div>
                        <?php if($card_link) : ?>
                        </a>
                        <?php endif; ?>
                        <!-- ./For whom page card - small animal -->
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    <?php
        endif;
    ?>
</section>
<!-- ./For whom page cards -->