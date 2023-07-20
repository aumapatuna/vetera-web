<!-- Integration details recommended -->
<section class="vetera-integration-details-recommended pb-100">
    <!-- Integration details recommended wrapper -->
    <div class="vetera-integration-details-recommended__wrp text-center mt-0 mb-60">
        <div class="container">
            <!-- Integration details recommended content -->
            <?php  
                $integration_post_details_recommended_subtitle = get_field('integration_post_details_recommended_subtitle');
                $integration_post_details_recommended_title = get_field('integration_post_details_recommended_title');
                $integration_post_details_recommended_description = get_field('integration_post_details_recommended_description');
            ?>
            <h5 class="text-uppercase color-torch-red mt-0 mb-0"><?php echo $integration_post_details_recommended_subtitle; ?></h5>
            <h3 class="color-lilac mt-4 mb-0"><?php echo $integration_post_details_recommended_title; ?></h3>
            <p class="color-darkash"><?php echo $integration_post_details_recommended_description; ?></p>
            <!-- ./Integration details recommended content -->
        </div>
    </div>
    <!-- ./Integration details recommended wrapper -->
    <!-- Integration details recommended logo cards wrapper -->
    <div class="container">
        <div class="vetera-integration-details-recommended__logo-cards-wrp"> 
        <?php
            $categories = get_the_category();
            $separator = ' + ';
            $output = '';
            if ( ! empty( $categories ) ) {
                foreach( $categories as $category ) {
                    $output .= $category->slug . $separator;
                }
            $cat = trim( $output, $separator );
            }
        ?>
        <?php
            $args = array(
                'post_type'   => 'integration',
                'post_status' => 'publish',
                'posts_per_page' => 3,
                'category_name' => $cat,
            );
            $integration_post_list = new WP_Query( $args );
            if( $integration_post_list->have_posts() ) :  
        ?>
            <?php 
                while( $integration_post_list->have_posts() ) :
                    $integration_post_list->the_post();
            ?>

                <!-- Integration details recommended logo card -->
                <div class="vetera-comp-integrations-stats-card p-24 bg-color-white mt-20 mt-md-0">
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
                        <a class="link link--secondary d-inline-block" href="<?php the_permalink(); ?>"><?php the_field('integration_post_learn_more'); ?></a>
                    </div>
                </div>
                <!-- ./Integration details recommended logo card -->

            <?php 
                endwhile;
                wp_reset_postdata();
            ?>

        <?php else : 
            esc_html_e( 'No FAQ to show!', 'text-domain' );
        endif; ?>
        </div>
    </div>
    <!-- ./Integration details recommended logo cards wrapper -->
</section>
<!-- ./Integration details body -->