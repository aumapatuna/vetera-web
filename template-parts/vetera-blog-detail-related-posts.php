<?php $vt_show_user_details = get_field('vt_show_user_details', 'option'); ?>

<!-- Blog detail related posts -->
<section class="vetera-blog-detail-related-posts pb-76 pb-dt-100">
  <div class="container"> 

    <h4 class="mt-0 mb-30 mb-dt-24 color-darkash"><?php the_field('blog_detail_page_related_post_heading', 'option'); ?></h4>

    <!-- Blog detail related posts list -->
    <div class="vetera-blog-detail-related-posts__post-list">

      <?php
        $args = array(
            'post_type'   => 'blog',
            'post_status' => 'publish',
            'orderby'=>'rand',
            'posts_per_page' => '3'
        );
        $blog_post_list = new WP_Query( $args );
        if( $blog_post_list->have_posts() ) :
      ?>
        <?php 
            while( $blog_post_list->have_posts() ) :
                $blog_post_list->the_post();
        ?>

          <!-- Blog item -->
          <div class="vetera-comp-blog-stats-card mb-40 mb-dt-0">
            <a href="<?php the_permalink(); ?>">
              <div class="vetera-comp-blog-stats-card__main-image">
                <?php
                  if ( has_post_thumbnail() ) {
                    the_post_thumbnail( 'full vetera-comp-blog-stats-card__main-image' );
                  }
                ?>
              </div>

              <div class="vetera-comp-blog-stats-card__body py-16">
                <h4 class="h4 color-darkash list-title mt-0 mb-4"><?php printf( get_the_title() ); ?></h4>
                <p class="color-darkash m-0 mt-16 mb-24 mt-dt-4 mb-dt-12 the-excerpt"><?php echo get_the_excerpt(); ?></p>

                <?php if($vt_show_user_details == 'Show') : ?>
                  <div class="vetera-comp-blog-stats-card-body__reader-info d-flex">
                    <span class="mr-20"><?php echo get_avatar( get_the_author_meta( 'ID' ) , 44 ); ?></span>
                    <div class="">
                      <p class="txt-sm color-darkergray m-0 mb-4"><?php echo get_the_author(); ?></p>
                      <?php
                        $vt_read_time = get_field('vt_read_time');
                      ?>
                      <p class="txt-sm m-0 color-lightgray"><?php echo get_the_date('M j'); ?> - <?php echo $vt_read_time; ?></p>
                    </div>
                  </div>
                <?php endif; ?>
              </div>
            </a>
          </div><!-- ./Blog item -->

        <?php 
            endwhile;
            wp_reset_postdata();
        ?>

      <?php else : 
          esc_html_e( 'No blog post to show!', 'text-domain' );
      endif; ?>

    </div>
  </div><!-- ./Blog detail related posts list -->
</section><!-- ./Blog detail related posts -->