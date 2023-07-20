<!-- Careers our jobs section -->
<section class="vetera-careers-our-jobs pb-48 pb-dt-68 mb-100">
    <div class="container">
        <!-- Careers our jobs title block -->
        <div class="vetera-careers-our-jobs__title-blk">
            <h5 class="caps-5 text-center color-torch-red text-uppercase pt-48 pt-dt-60 mt-0 mb-0"><?php the_field('careers_page_jobs_sub_header'); ?></h5>
            <h3 class="text-center mt-4 mb-0"><?php the_field('careers_page_jobs_header'); ?></h3>
            <p class="text-center mt-16 mb-36 mb-dt-64"><?php the_field('careers_page_jobs_description'); ?></p>
        </div>
        <!-- ./Careers our jobs title block -->
        <!-- Careers our jobs wrapper -->
        <div class="vetera-careers-our-jobs__wrp">

            <?php
                $args = array(
                    'post_type'   => 'joblisting',
                    'post_status' => 'publish',
                    'order' => 'ASC' 
                );
                $joblisting_post_list = new WP_Query( $args );
                $totalpost = $joblisting_post_list->found_posts;

                if( $joblisting_post_list->have_posts() ) :  
            ?>
                <?php 
                    while( $joblisting_post_list->have_posts() ) :
                        $joblisting_post_list->the_post();
                ?>

                <!-- Careers our jobs item -->
                <div class="vetera-careers-our-jobs__item mb-16">
                    <!-- Careers our jobs item department -->
                    <div class="vetera-careers-our-jobs__item__department mb-16 mb-dt-0">
                        <p class="txt-lg pos color-darkash mt-0 mb-0"><?php printf( get_the_title() ); ?></p>
                        <p class="color-lightgray pod mt-4 mb-0"><?php the_field('job_listing_job_department'); ?></p>
                    </div>
                    <!-- ./Careers our jobs item department -->
                    <!-- Careers our jobs item location -->
                    <div class="vetera-careers-our-jobs__item__location mob-inline">
                        <p class="color-blue1 mt-0 mt-dt-4 mb-0 mb-dt-4"><?php the_field('job_listing_location_title'); ?></p>
                        <p class="color-lightgray mt-0 mb-0"><?php the_field('job_listing_location'); ?></p>
                    </div>
                    <!-- ./Careers our jobs item location -->
                    <!-- Careers our jobs item career -->
                    <div class="vetera-careers-our-jobs__item__career mob-inline">
                        <p class="color-blue1 mt-0 mt-dt-4 mb-0 mb-dt-4"><?php the_field('job_listing_career_title'); ?></p>
                        <p class="color-lightgray mt-0 mb-0"><?php the_field('job_listing_career_short_description'); ?></p>
                    </div>
                    <a class="btn mob text-center mt-16 mt-dt-0 mb-0" href="<?php the_permalink(); ?>"  onclick="window.open(this.href, '_blank', 'left=20,top=20,toolbar=1,resizable=0'); return false;"><?php the_field('job_listing_discover_button_text'); ?></a>
                    <!-- ./Careers our jobs item career -->
                </div>
                <!-- Careers our jobs item -->

                <?php 
                    endwhile;
                    wp_reset_postdata();
                ?>

                <?php if($totalpost >= 5) : ?>
                    <div class="vetera-careers-our-jobs__view-all text-center">
                        <a class='pushme' href="#"><?php the_field('careers_page_job_view_all_button_text'); ?></a>
                    </div>
                <?php endif; ?>

                <?php else : 
                    esc_html_e( 'No jobs to show!', 'text-domain' );
                endif; ?>

            <!-- Careers our jobs item -->
        </div>
        <!-- ./Careers our jobs wrapper -->
    </div>  
</section>
<!-- ./Careers our jobs section -->
