<?php $vt_show_user_details = get_field('vt_show_user_details', 'option'); ?>

<!-- Blog featured item -->
<section class="vetera-blog-featured-item pt-116 pt-dt-100 pb-60 pt-dt-160">
  <div class="container">

    <?php
      $args = array(
          'post_type'   => 'blog',
          'post_status' => 'publish',
		  'category_name' => 'blog',
          'orderby' => 'date',
          'order' => 'DESC'
      );

      $blog_post_list = new WP_Query( $args );
      if( $blog_post_list->have_posts() ) :  
    ?>
      <?php 
        $blog_post_list->the_post();
      ?>
      
      <!-- Blog main card component -->
      <div class="vetera-comp-blog-main-card mt-20">
        <a class="vetera-comp-blog-main-card__grid" href="<?php the_permalink(); ?>">
          <div class="vetera-comp-blog-main-card__main-image vetera-comp-blog-main-card__main-image--featured">
            <?php
              if ( has_post_thumbnail() ) {
                the_post_thumbnail( 'full vetera-comp-blog-stats-card__main-image' );
              }
            ?>
          </div>
 
          <div class="vetera-comp-blog-main-card__body">
            <h3 class="txt-md mt-24 mt-dt-0 mb-4 color-oxford-blue"><?php printf( get_the_title() ); ?></h3>
            <p class="m-0 mt-16 mb-24 color-oxford-blue"><?php echo get_the_excerpt(); ?></p>
            
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
      </div>
    <!-- ./Blog main card component -->
      
    <?php
      endif;
    ?>

  </div>
</section><!-- ./Blog featured item -->