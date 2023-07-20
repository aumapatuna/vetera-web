<!-- Product detail page cards -->
<section class="vetera-product-detail-card mt-100">
    <div class="container">
        <?php
            $fwd_icon_block_title = get_sub_field('fwd_icon_block_title');
            $fwd_icon_block_description = get_sub_field('fwd_icon_block_description');
            $fwd_cards = get_sub_field('fwd_cards');
        ?>
        <!-- Product detail page section title -->
        <div class="vetera-product-detail-card__content">
            <h2 class="text-center mb-0"><?php echo $fwd_icon_block_title; ?></h2>
            <!-- ./Product detail page section title -->
            <!-- Product detail page section description -->
            <p class="text-center mt-20"><?php echo $fwd_icon_block_description; ?></p>
            <!-- ./Product detail page section description -->
        </div>
        <!-- Product detail page cards -->
        <div class="vetera-product-detail-card__grid mt-48">
                <?php foreach ($fwd_cards as $key => $fwd_card) : ?>
                    <?php
                        $card_link = $fwd_card['fwd_card_link'];
                    ?>
                    <?php 
                        if($card_link) :
                            echo
                            '<a class="vetera-comp-product-detail-card__link" href="' . $card_link .'" target="_self">';
                        endif;
                                echo
                                '<div class="vetera-comp-product-detail-card text-center p-4 p-dt-24 pb-16 bg-color-white">
                                    <div class="vetera-comp-product-detail-card__icon d-flex justify-content-center align-items-center pb-12 pt-dt-24 pb-dt-24">
                                        <img src="'. $fwd_card['fwd_card_image'] .'" alt="' . $fwd_card['fwd_card_title'] .'">
                                    </div>
                                    <div class="vetera-comp-product-detail-card__body">
                                        <p class="txt-sm-bold text-center m-0">'. $fwd_card['fwd_card_title'] .'</p>
                                    </div>
                                </div>';
                        if($card_link) :
                            echo
                            '</a>';
                        endif;
                    ?>
                <?php endforeach; ?>
            
            <!-- Product detail page card - communication -->
        </div>
    </div>
</section>
