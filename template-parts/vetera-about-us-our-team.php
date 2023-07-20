<?php 
    // About section #1 options
    $about_sec1_options = get_field('about_sec2_options');
    
    $about_sec2_heading_top_text = $about_sec1_options['about_sec2_heading_top_text'];
    $about_sec2_heading = $about_sec1_options['about_sec2_heading'];
    $about_sec2_description = $about_sec1_options['about_sec2_description'];
    $about_sec2_stats_cards = $about_sec1_options['about_sec2_stats_cards'];
?>
<!-- Our team section in About Us section -->
<section class="vetera-about-us-our-team pb-100 pb-dt-80">
    <div class="container">
        <div class="vetera-about-us-our-team__wrp">
            <div class="vetera-about-us-our-team__title-blk">
                <h5 class="caps-5 text-center text-uppercase mt-0 mb-0"><?php echo $about_sec2_heading_top_text; ?></h5>
                <h3 class="text-center mt-4 mb-0"><?php echo $about_sec2_heading; ?></h3>
                <p class="text-center mt-16 mb-36 mb-dt-48"><?php echo $about_sec2_description; ?></p>
            </div>
            <div class="vetera-about-us-our-team__cards-blk">
                <?php if($about_sec2_stats_cards) : ?>
                    <?php 
                        foreach ($about_sec2_stats_cards as $about_sec2_stats_card) {
                            echo '<!-- Stats card component -->
                            <div class="vetera-comp-stats-card p-20 pb-20 bg-color-white">
                                <div class="vetera-comp-stats-card__header">
                                    <p class="txt-sm-bold mt-0 mb-12">'. $about_sec2_stats_card['about_sec2_stats_card_heading'] .'</p>
                                </div>
                                <!-- Separator component -->
                                <hr class="vetera-comp-stats-card__separator m-0">
                                <!-- ./Separator card component -->
                                <div class="vetera-comp-stats-card__body">
                                    <h2 class="h2 mt-0 mb-20 pt-16">'. $about_sec2_stats_card['about_sec2_stats_card_number'] .'</h2>
                                    <p class="txt-sm m-0">'. $about_sec2_stats_card['about_sec2_stats_card_description'] .'</p>
                                </div>
                            </div>
                            <!-- ./Stats card component -->';
                        }
                    ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<!-- ./Our team section in About Us section -->
