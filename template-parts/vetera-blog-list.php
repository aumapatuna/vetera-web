<?php $vt_show_user_details = get_field('vt_show_user_details', 'option'); ?>

<!-- Blog list -->
<section class="vetera-blog-list pb-36 pb-dt-108">
  <div class="container">

    <!-- Blog list wrapper -->
    <div class="vetera-blog-list__wrapper">
      <?php
      $args = array(
          'post_type' => 'blog',
          'posts_per_page' => 6,
		  'offset' => 1,
          'category_name' => 'blog',
          'paged' => $paged,
      );

      $blog_post_list = null;
      $blog_post_list = new WP_Query($args);

      $totalpost = $blog_post_list->found_posts;

      if( $blog_post_list->have_posts() ) {
        
        while ($blog_post_list->have_posts()) : $blog_post_list->the_post(); ?>
          
            <div class="row vetera-comp-blog-stats-card">
              <a href="<?php the_permalink(); ?>">
                <div class="vetera-comp-blog-stats-card__main-image">
                  <?php
                    if ( has_post_thumbnail() ) {
                      the_post_thumbnail( 'full vetera-comp-blog-stats-card__main-image' );
                    }
                  ?>
                </div>
                <div class="vetera-comp-blog-stats-card__body py-16">
                  <h4 class="h4 mt-0 mb-4 color-oxford-blue list-title"><?php printf( get_the_title() ); ?></h4>
                  <p class="m-0 mt-16 mb-24 color-oxford-blue the-excerpt"><?php echo get_the_excerpt(); ?></p>
                  
                  <?php if($vt_show_user_details == 'Show') : ?>
                    <div class="vetera-comp-blog-stats-card-body__reader-info d-flex">
                      <span class="mr-20"><?php echo get_avatar( get_the_author_meta( 'ID' ) , 44 ); ?></span>
                      <div class="">
                        <p class="txt-sm m-0 mb-4 color-darkergray"><?php echo get_the_author(); ?></p>
                        <?php
                          $vt_read_time = get_field('vt_read_time');
                        ?>
                        <p class="txt-sm m-0 color-lightgray"><?php echo get_the_date('M j'); ?> - <?php echo $vt_read_time; ?></p>
                      </div>
                    </div>
                  <?php endif; ?>

                </div>
              </a>
            </div><!--/.row-->
          <?php 
        endwhile; ?>
      <?php } ?>
    </div>
    <!-- Pagination card component -->
    <?php if($totalpost >= 6) : 
      $next_btn = get_field('vt_next_button_text', 'option');
      $prev_btn = get_field('vt_previous_button_text', 'option');
    ?>
      <div class="vetera-comp-paging mt-36">
          <div class="d-flex justify-content-center">
            <div class="btn-paging prev"> <span class="arrow-left arrows"></span><span class="nav-text txt-sm"><?php echo $prev_btn; ?></span><?php previous_posts_link('<p class="color-darkash txt-sm">'. $prev_btn .'</p>', $blog_post_list->max_num_pages); ?></div>
            <div class="btn-paging next"><?php next_posts_link('<p class="color-darkash txt-sm">'. $next_btn .'</p>', $blog_post_list->max_num_pages); ?><span class="nav-text txt-sm"><?php echo $next_btn; ?></span><span class="arrow-right arrows"></span></div>
          </div>
        <!-- <p class="text-center mt-8">Page 1 of 3</p> -->
      </div>
    <?php endif; ?>
    <!-- ./Pagination card component --> 
    <?php wp_reset_query(); ?> 
  </div>
</section>
<!-- ./Blog list -->