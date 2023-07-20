<?php
  $current_lang = ICL_LANGUAGE_CODE;

  global $post;
  $post_slug = $post->post_name;

  if($current_lang == 'de') {
    $faq_list_url = '/faq-listing';
  } else {
    $faq_list_url = '/'. $current_lang .'/faq-listing';
  }
?>
<!-- FAQ details secton -->
<section class="vetera-faq-details-block pt-80 pb-80">
  <div class="container">
    <!-- FAQ details secton grid -->
    <div class="vetera-faq-details-block__grid pt-36 pt-dt-76">
      <!-- FAQ details secton basic details -->
      <div class="vetera-faq-details-block__list">
      
        <!-- FAQs card component -->
        <div class="vetera-comp-faqs-card d-flex">
          <div class="vetera-comp-faqs-card__body">
            <div class="vetera-comp-faqs-card__back">
              <?php
                $faq_back = get_field('faq_details_page_back_text', 'option');
                if(!empty($faq_back)) :
              ?>
                <a class="vetera-comp-faqs-card__back-link txt-sm color-imperial-blue" href="<?php echo get_site_url(). $faq_list_url; ?>"><?php echo $faq_back; ?></a>
              <?php endif; ?>
            </div>

            <!-- Mobile categories dropdown -->
            <div class="vetera-faq-details__view-all-mobile"></div>
            <!-- ./Mobile categories dropdown -->  

            <div class="d-flex">
              <?php
                $categories = get_the_category();
                $separator = ' ';
                $output = '';
                if ( ! empty( $categories ) ) {
                    foreach( $categories as $category ) {
                        $output .= '<div class="vetera-typography__text-links-blk js-filter-item mr-20">
                                        <a class="txt-sm color-darkblue" href="' . get_site_url() . $faq_list_url .'?cat='. $category->slug . '">' . esc_html( $category->name ) . '</a>' . $separator . 
                                    '</div>';
                    }
                    echo trim( $output, $separator );
                }
              ?>
            </div>
            <!-- FAQs body content -->
            <h4 class="heading-4 color-oxford-blue mt-4 mb-0"><?php printf( get_the_title() ); ?></h4>
            <?php
              // Start the loop.
              while ( have_posts() ) : the_post(); 

                if ( has_post_thumbnail() ) {
                  the_post_thumbnail( 'vetera-comp-faqs-card__main-image mt-24' );
                }

                the_content();
              // End the loop.
              endwhile;
			        wp_reset_postdata();
            ?>
            <!-- ./FAQs body content -->
          </div>
        </div>
        <!-- ./FAQs card component -->

        <!-- FAQ details secton basic details -->
        <div class="vetera-faq-details-block__related-cards pt-32 pb-0 mt-32">
          <h5 class="heading-darkash-5 mt-0 mb-20"><?php the_field('faq_details_page_related_question_title', 'option'); ?></h5>
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
                  'post_type'   => 'faq',
                  'post_status' => 'publish',
                  'order' => 'ASC',
                  'category_name' => $cat,
              );
                $faq_post_list = new WP_Query($args);

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
                      <p class="txt-md mt-0 mb-4 vetera-comp-faqs-card__body-title color-blue1"><a class=" color-blue1" href="<?php the_permalink(); ?>"><?php printf( get_the_title() ); ?></a></p>
                      <p class="m-0 mb-4 txt-sm color-grayedblue the-excerpt"><?php echo get_the_excerpt(); ?></p>
                      <div class="d-flex">
                          <?php
                              $categories = get_the_category();
                              $separator = ' ';
                              $output = '';
                              if ( ! empty( $categories ) ) {
                                  foreach( $categories as $category ) {
                                      $output .= '<div class="vetera-typography__text-links-blk js-filter-item mr-20">
                                                      <a class="txt-sm color-darkblue" href="' . get_site_url() . $faq_list_url .'?cat='. $category->slug . '">' . esc_html( $category->name ) . '</a>' . $separator . 
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
                esc_html_e( 'No FAQ to show!', 'text-domain' );
            endif; ?>
        </div>
      </div>
      <!-- ./FAQ details secton basic details -->
      <!-- FAQ details secton slide bar -->
      <div class="vetera-faq-details__side-bar pt-48 pt-dt-0">
        <?php echo get_template_part('template-parts/vetera-faq-side-bar'); ?>
      </div>
      <!-- ./FAQ details secton slide bar -->
      <!-- Mobile category dropdown script -->
      <div class="faq-cat-in-mob">
        <?php echo get_template_part('template-parts/vetera-faq-detail-block-mobile-vategory'); ?>
      </div>
      <!-- ./Mobile category dropdown script -->
    </div>
    <!-- ./FAQ details secton grid -->
  </div>
</section>
<!-- ./FAQ details secton -->
