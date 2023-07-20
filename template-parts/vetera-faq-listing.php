<?php
    $current_lang = ICL_LANGUAGE_CODE;

    global $post;
    $post_slug = $post->post_name;

    if($current_lang == 'de') {
        $faq_list_url = '/faq-listing';
    } else {
        $faq_list_url = '/'. $current_lang .'/faq-listing';
    }

    // Get current category
    $current_cat = isset($_GET['cat']) ? $_GET['cat'] : '';

    // Args for get data
    $args = array(
        'post_type'   => 'faq',
        'post_status' => 'publish',
        'order' => 'ASC'
    );

    // Change args for category 
    if($current_cat != '') {
        $args['category_name'] = $current_cat;
    } 

    // Get post list 
    $faq_post_list = new WP_Query( $args );
?>

<!-- FAQ details secton -->
<section class="vetera-faq-details pt-80 pb-80">
    <div class="container">
        <!-- FAQ details secton grid -->
        <div class="vetera-faq-details__grid pt-36 pt-dt-100">
            <!-- FAQ details secton list -->
            <div class="vetera-faq-details__listing searcharea">
                <!-- FAQ details secton search -->
                <div class="vetera-faq-details__search mb-48 mb-dt-40">
                    <h4 class="heading-4 mt-0 mb-12"><?php the_field('faq_listing_page_title', 'option'); ?></h4>

                    <!-- FAQ categories in mobile -->
                    <div class="vetera-faq-details__view-all-mobile">
                            <div class="vetera-faq-details__search-title">
                                <p class="all-cat-mob-rdrop-parent mob-all-cat color-imperial-blue txt-md-bold pt-12 pb-24 mt-0 mb-0">
                                    <span class="all-cat-mob-rdrop all-cat-show-mob-rdrop"><?php the_field('faq_listing_page_category_title', 'option'); ?></span>
                                    <span class="all-cat-mob-rdrop all-cat-hide-mob-rdrop"><?php the_field('faq_listing_page_category_hide_title', 'option'); ?></span>
                                </p>
                            </div>

                            <div class="vetera-faq-details__categories mt-24">
                                <p class="txt-sm cat active cat-all"><a class="txt-sm mt-0 mb-12 cat-opacity" href="<?php echo bloginfo('url') . $faq_list_url; ?>"><?php the_field('faq_listing_page_category_all_text', 'option'); ?></a><p>
                                <?php
                                    //for each category, show all posts
                                    $cat_args=array(
                                        'orderby' => 'name',
                                        'order' => 'ASC'
                                        );
                                    $categories=get_categories($cat_args);
                                    $check_is_cat_available = isset($_GET['cat']) ? $_GET['cat'] : '';

                                    foreach($categories as $category) {
                                        $args=array(
                                            'post_type' => 'faq',
                                            'showposts' => -1,
                                            'category__in' => array($category->term_id),
                                            'ignore_sticky_posts'=>1 //'caller_get_posts'=>1
                                        );
                                    $posts=get_posts($args);
                                        if ($posts) {
                                            echo '<p class="txt-sm cat-'.strtolower($category->slug).' cat" data-cat="'.strtolower($category->slug).'"><a class="txt-sm mt-0 mb-12 cat-opacity color-grayedblue" href="?cat=' . strtolower($category->slug) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a> </p> ';
                                        } // if ($posts)
                                    } // foreach($categories)
                                ?>
                            </div>
                    </div>
                    <!-- ./FAQ categories in mobile -->

                    <input class="vetera-faq-details__searchbox" id="keyword" type="text" name="keyword" onkeyup="fetch()" placeholder="<?php the_field('faq_search_text', 'option'); ?>" data-post-type="faq" />
                    <span class="loading-txt"></span>
                </div>
                <!-- ./FAQ details secton search -->
                <!-- FAQ details secton list -->
                <div class="vetera-faq-details__list">
                        <?php

                            if( $faq_post_list->have_posts() ) :  
                        ?>
                        
                        <?php 
                            while( $faq_post_list->have_posts() ) :
                                $faq_post_list->the_post();
                        ?>
                            <!-- FAQs card component -->
                            <div class="vetera-comp-faqs-card mt-0 mb-24 d-flex">
                                <div class="vetera-comp-faqs-card__icon mr-16 mt-8">
                                    <img src="<?php the_field('faq_question_symbol', 'option'); ?>" alt="FAQ symbol">
                                </div>
                                <div class="vetera-comp-faqs-card__body">
                                    <p class="txt-md mt-0 mb-4 vetera-comp-faqs-card__body-title color-blue1"><a class="color-blue1" href="<?php the_permalink(); ?>"><?php printf( get_the_title() ); ?></a></p>
                                    <p class="m-0 mb-4 txt-sm color-grayedblue the-excerpt"><?php echo get_the_excerpt(); ?></p>
                                    <div class="d-flex">
                                        <?php
                                            $categories = get_the_category();
                                            $separator = ' ';
                                            $output = '';
                                            if ( ! empty( $categories ) ) {
                                                foreach( $categories as $category ) {
                                                    $output .= '<div class="vetera-typography__text-links-blk mr-20">
                                                                    <a class="txt-sm color-darkblue" href="?cat=' . strtolower($category->slug) . '">' . esc_html( $category->name ) . '</a>' . $separator . 
                                                                '</div>';
                                                }
                                                echo trim( $output, $separator );
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <!-- ./FAQs card component -->

                        <?php 
                            endwhile;
                            wp_reset_postdata();
                        ?>

                    <?php else : 
                         the_field('faq_listing_no_faq_text', 'option');
                    endif; ?>
                   
                </div>
                <!-- ./Contact details secton list -->
            </div>
            <!-- ./FAQ details secton list -->
            <!-- FAQ details secton slide bar -->
            <div class="vetera-faq-details__side-bar pt-24 pt-48 pt-dt-0">
                <?php echo get_template_part( 'template-parts/vetera-faq-side-bar' ); ?>
            </div>
            <!-- ./FAQ details secton slide bar -->
        </div>
        <!-- ./FAQ details secton grid -->
    </div>
</section>
<!-- ./FAQ details secton -->
