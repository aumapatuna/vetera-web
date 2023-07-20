<?php 
    // Get current category
    $current_cat = isset($_GET['cat']) ? $_GET['cat'] : '';

    // Args for get data
    $args = array(
        'post_type'   => 'integration',
        'post_status' => 'publish',
        'order' => 'ASC',
        'tag_slug__in' => 'integration',
    );

    // Change args for category 
    if($current_cat != '') {
        $args['category_name'] = $current_cat;
    } 

    // Get post list 
    $integration_post_list = new WP_Query( $args );
    $totalpost = $integration_post_list->found_posts;
?>

<!-- Integration cards -->
<div class="vetera-integration-cards">
    <div class="container">
        <!-- <p class="search-results txt-md-bold color-imperial-blue mt-0 mb-0 pb-24"><?php //the_field('search_results_text', 'option'); ?></p> -->
        <!-- Integration cards wrapper -->
        <div class="vetera-integration-cards__wrp">

        <?php
            if( $integration_post_list->have_posts() ) :  
        ?>
            <?php 
                while( $integration_post_list->have_posts() ) :
                    $integration_post_list->the_post();
            ?>
        
               <!-- Integration details recommended logo card -->
                <div class="vetera-comp-integrations-stats-card p-24 bg-color-white mb-20 mb-dt-0">
                    <div class="vetera-comp-integrations-stats-card__img mb-20">
                    <?php
                        if ( has_post_thumbnail() ) {
                            the_post_thumbnail( 'full vetera-comp-integrations-stats-card__main-image' );
                        }
                    ?>
                    </div>
                    <div class="vetera-comp-integrations-stats-card__body mt-0 mb-0">
                        <p class="text-uppercase m-0 vetera-comp-integrations-stats-card__body-title text-uppercase color-darkash"><?php the_field('integration_post_subtitle'); ?></p>
                        <p class="txt-sm color-darkergray1 m-0 mb-20 the-excerpt"><?php echo get_the_excerpt(); ?></p>
                        <a class="link link--secondary d-inline-block" href="<?php echo (get_field('integration_post_learn_more_link')['url'] != '' ? get_field('integration_post_learn_more_link')['url'] : the_permalink()); ?>" target="<?php echo (get_field('integration_post_learn_more_link')['target'] != '' ? get_field('integration_post_learn_more_link')['target'] : '_self'); ?>"><?php the_field('integration_post_learn_more'); ?></a>
                    </div>
                </div>
                <!-- ./Integration details recommended logo card --> 
            <?php 
                endwhile;
                wp_reset_postdata();
            ?>

        <?php else : 
            the_field('integrations_listing_no_integrations_text', 'option');
        endif; ?>

        </div>
        <!-- ./Integration cards wrapper -->

        <?php
            if ($totalpost > 10) {
            echo '<div class="integration-loadmore-wrp text-center mt-36">
                    <span class="integration-loadmore btn">';
                        the_field('integration_show_more', 'option');
                echo '</span>
                </div>'; // you can use <a> as well
            }
        ?>

    </div>
</div>
<!-- ./Integration cards -->