<?php $vt_show_user_details = get_field('vt_show_user_details', 'option'); ?>

<!-- Blog detail content -->
<section class="vetera-blog-detail-content pt-80 mb-60">
  <div class="container">

    <!-- Blog detail boxed wrapper -->
    <div class="vetera-blog-detail-content__boxed-wrapper pt-36 pt-dt-100">

        <!-- Blog detail heading -->
        <h2 class="text-center color-darkash mt-0 mb-20 mb-dt-12"><?php printf( get_the_title() ); ?></h2><!-- ./Blog detail heading -->
        
        <!-- Blog detail bio info -->
        <div class="vetera-blog-detail-content__info mb-40 mb-dt-52 d-dt-flex">
          <ul class="vetera-blog-detail-content__info__list d-dt-flex">
            <li class="vetera-blog-detail-content__info__list-item">
              <p class="txt-sm m-0"><span class="color-darkash"><?php the_field('vt_blog_details_posted_text', 'option'); ?></span>
                <?php
                  $vt_posted_in = get_field('vt_posted_in');
                ?>
                <span class="color-darkblue pl-8"><?php echo $vt_posted_in; ?></span>
              </p>
            </li>
            <?php if($vt_show_user_details == 'Show') : ?>
              <li class="vetera-blog-detail-content__info__list-item">
                <p class="txt-sm m-0 color-darkash"><span><?php echo get_the_date('F j, Y'); ?></span></p>
              </li>
            <?php endif; ?>
            <?php if($vt_show_user_details == 'Show') : ?>
              <li class="vetera-blog-detail-content__info__list-item">
                <p class="txt-sm m-0"><span class="color-darkash"><?php the_field('vt_blog_post_posted_by', 'option'); ?></span><span class="color-darkblue pl-8"><?php echo get_the_author(); ?></span></p>
              </li>
            <?php endif; ?>
          </ul>
        </div><!-- ./Blog detail bio info -->


        <!-- Blog detail customize content area -->
        <div class="vetera-blog-detail-content__main pb-24 mb-24 pb-dt-0 mb-dt-0 color-darkash">
          <?php
            if ( has_post_thumbnail() ) {
              the_post_thumbnail( 'full vetera-comp-blog-stats-card__main-image mb-24' );
            }
          ?>
          <?php
            // Start the loop.
            while ( have_posts() ) : the_post();    
              the_content();
            // End the loop.
            endwhile;
          ?>
        </div><!-- ./Blog detail customize content area -->

        <!-- Author info block -->
        <div class="vetera-blog-detail-content__author-info pt-24">
          <?php if($vt_show_user_details == 'Show') : ?>
            <p class="txt-sm-bold color-grayedblue m-0"><?php the_field('blog_detail_page_author_info_block_heading', 'option'); ?></p>
          <?php endif; ?>
            <!-- About the author card component -->
            <div class="vetera-comp-about-author-card mt-8 mb-8 align-items-center">
                <div class="vetera-comp-about-author-card__icon mr-tb-24">
                  <?php if($vt_show_user_details == 'Show') : ?>
                    <span class="mr-20"><?php echo get_avatar( get_the_author_meta( 'ID' ) , 80 ); ?></span>
                  <?php endif; ?>
                </div>
                <div class="vetera-comp-about-author-card__body mr-tb-20 mb-24">
                  <?php if($vt_show_user_details == 'Show') : ?>
                    <p class="txt-md mt-0 mb-8 color-grayedblue"><?php echo get_the_author(); ?></p>
                    <p class="m-0 color-darkgray txt-sm"><?php echo the_author_meta('description'); ?></p>
                  <?php endif; ?>
                </div>
              <div class="vetera-comp-about-author-card__media-icons-container">
                <p class="txt-md mt-0 mb-8"><?php the_field('blog_detail_page_share_text', 'option'); ?></p>

                <?php
                  $share_icons = get_field('blog_detail_page_share_icons', 'option');
                  $twitter_icons = $share_icons['vt_blog_post_smo_twitter_icons'];
                  $facebook_icons = $share_icons['vt_blog_post_smo_facebook_icons'];
                  $linkedin_icons = $share_icons['vt_blog_post_smo_linkedin_icons'];
                ?>

                <div class="vetera-comp-about-author-card__media-icons align-items-center">
                  <div class="addthis_toolbox">
                    <div class="custom_images">
                      <a class="addthis_button_twitter">
                        <img class="mr-20" src="<?php echo $twitter_icons; ?>" width="16" height="14" alt="Share to Twitter">
                      </a>
                      <a class="addthis_button_facebook">
                        <img class="mr-20" src="<?php echo $facebook_icons; ?>" width="8" height="16" alt="Share to Facebook">
                      </a>
                      <a class="addthis_button_linkedin">
                        <img class="mr-20" src="<?php echo $linkedin_icons; ?>" width="15" height="15" alt="Share to Facebook">
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- ./About the author card component -->
        </div><!-- ./Author info block -->
    </div><!-- ./Blog detail boxed wrapper -->
  </div>
</section><!-- ./Blog detail content -->