<!-- Product detail page cards -->
<section class="vetera-product-detail-card mt-100">
    <div class="container">
        <!-- Product detail page section title -->
        <div class="vetera-product-detail-card__content">
            <h2 class="text-center mb-0"><?php the_field('product_details_page_card_heading'); ?></h2>
            <!-- ./Product detail page section title -->
            <!-- Product detail page section description -->
            <?php
                $product_details_page_card_description = get_field('product_details_page_card_description');
                if($product_details_page_card_description) :
            ?>
                <p class="text-center mt-20"><?php echo $product_details_page_card_description; ?></p>
            <?php
                endif;
            ?>
            <!-- ./Product detail page section description -->
        </div>
        <!-- Product detail page cards -->
        <div class="vetera-product-detail-card__grid mt-48">
            <?php 
                $product_details_page_cards = get_field('product_details_page_cards');
            ?>
            <?php foreach ($product_details_page_cards as $key => $product_details_page_card) : ?>
                <!-- Product detail page card - scheduling -->
                <div class="vetera-comp-product-detail-card text-center p-4 p-dt-24 pb-16 bg-color-white">
                   <?php
                    $card_link = $product_details_page_card['product_details_page_card_link'];
                   ?> 
                    <?php if($card_link) : ?>
                    <a class="vetera-comp-product-detail-card__link" href="<?php echo $product_details_page_card['product_details_page_card_link']; ?>" target="_self">
                    <?php endif; ?>
                        <div class="vetera-comp-product-detail-card__icon d-flex justify-content-center align-items-center pb-12 pt-dt-24 pb-dt-24">
                            <img src="<?php echo $product_details_page_card['product_details_page_card_heading_image'];?>" alt="<?php echo $product_details_page_card['product_details_page_card_heading_image_alt'];?>">
                        </div>
                        <div class="vetera-comp-product-detail-card__body">
                            <p class="txt-sm-bold text-center m-0"><?php echo $product_details_page_card['product_details_page_card_title'];?></p>
                        </div>
                    <?php if($card_link) : ?>
                    </a>
                    <?php endif; ?>
                </div>
                <!-- ./Product detail page card - scheduling -->
            <?php endforeach; ?>
            <!-- Product detail page card - communication -->
        </div>
    </div>
</section>
