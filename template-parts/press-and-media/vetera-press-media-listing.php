<?php 
  $vt_show_user_details = get_field('vt_show_user_details', 'option');
  $vt_read_read_more = get_field('vt_read_read_more', 'option');
  $press_media_options_press_listing_sub_heading = get_sub_field('press_media_options_press_listing_sub_heading');
  $press_media_options_press_listing_heading = get_sub_field('press_media_options_press_listing_heading');
  $press_media_options_press_listing_description = get_sub_field('press_media_options_press_listing_description');
  $show__hide_listing_items = get_sub_field('show__hide_listing_items');
?>
<!-- Media and press listing -->
<section class="vetera-press-media-listing pb-100 pb-dt-72">
  <div class="container">
    <!-- Media and press listing heading block -->
    <div class="vetera-press-media-listing__title-blk mb-64 mb-dt-72">
      <h5 class="red-caps-5 text-center text-uppercase mt-0 mb-0"><?php echo $press_media_options_press_listing_sub_heading; ?></h5>
      <h1 class="text-center text-center mt-4 mb-0"><?php echo $press_media_options_press_listing_heading; ?></h1>
      <p class="text-center mt-20"><?php echo $press_media_options_press_listing_description; ?></p>
    </div>
    <!-- ./Media and press listing heading block -->
    <!-- Media and press list -->
    <div class="vetera-press-media-listing__press-listing mb-44">

      <?php
        $args = array(
          'post_type' => 'blog',
          'posts_per_page' => 6,
          'category_name' => 'press',
          'paged' => $paged,
        );

        $press_post_list = null;
        $press_post_list = new WP_Query($args);

        $totalpost = $press_post_list->found_posts;
      ?>

      <?php if( $press_post_list->have_posts() ) : ?>
        <?php while ($press_post_list->have_posts()) : $press_post_list->the_post(); ?>
          <!-- Media card -->
          <div class="vetera-press-media-card">
            <!-- Media card grid -->
            <div class="vetera-press-media-card__grid">
              <!-- Media card banner -->
              <div class="vetera-press-media-card__banner">
                <?php
                  if ( has_post_thumbnail() ) {
                    the_post_thumbnail( 'vetera-press-media-card__main-image' );
                  }
                ?>
              </div>
              <!-- ./Media card banner -->
              <!-- Media card content -->
              <div class="vetera-press-media-card__content">
                <h4 class="mt-0 mb-4 color-oxford-blue"><?php printf( get_the_title() ); ?></h4>
                <?php if($vt_show_user_details == 'Show') : ?>
                  <p class="mt-0 mb-0 txt-sm color-lightgray"><?php echo get_the_date('M j'); ?></p>
                <?php endif; ?>
                <p class="mt-0 mb-16 mt-16 color-oxford-blue"><?php echo get_the_excerpt(); ?></p>
                <div class="vetera-press-media-card__link">
                  <a class="link link--secondary d-inline-block" href="<?php the_permalink(); ?>"><?php echo $vt_read_read_more; ?></a>
                </div>
              </div>
              <!-- ./Media card content -->
            </div>
            <!-- ./Media card grid -->
          </div>
          <!-- ./Media card -->
        <?php endwhile; ?>
      </div>
      <!-- ./Media and press list -->
      <!-- Pagination card component -->
      <?php if($totalpost >= 3) : 
        $next_btn = get_field('vt_next_button_text', 'option');
        $prev_btn = get_field('vt_previous_button_text', 'option');
      ?>
        <div class="vetera-comp-paging mt-36">
            <div class="d-flex justify-content-center">
              <div class="btn-paging prev"> <span class="arrow-left arrows"></span><span class="nav-text txt-sm"><?php echo $prev_btn; ?></span><?php previous_posts_link('<p class="color-darkash txt-sm">'. $prev_btn .'</p>', $press_post_list->max_num_pages); ?></div>
              <div class="btn-paging next"><?php next_posts_link('<p class="color-darkash txt-sm">'. $next_btn .'</p>', $press_post_list->max_num_pages); ?><span class="nav-text txt-sm"><?php echo $next_btn; ?></span><span class="arrow-right arrows"></span></div>
            </div>
          <!-- <p class="text-center mt-8">Page 1 of 3</p> -->
        </div>
      <?php endif; ?>
      <!-- ./Pagination card component -->
    <?php endif; ?>
    <?php wp_reset_query(); ?> 
  </div>
</section>
<!-- ./Media and press listing -->