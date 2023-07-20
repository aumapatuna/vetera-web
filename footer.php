<?php 
    $social_media = get_field('social_media_list', 'option');
    $certificte_logos = get_field('certificte_logos', 'option');
?>

<!-- Footer -->
<footer class="vetera-footer">

    <!-- Footer wrapper -->
    <div class="vetera-footer__wrapper">

    <div class="container">

      <!-- Footer blocks -->
      <div class="vetera-footer__blocks">

        <!-- Footer single block wrapper -->
        <div class="vetera-footer__single-block-wrapper mb-48">
          <!-- Footer block -->
          <div class="vetera-footer__block">
            <div class="vetera-footer__info">
              <ul>
                <?php if(dynamic_sidebar('footer_logo_block')) : else : endif; ?>
              </ul>
              <div class="vetera-footer__info-socials">
                <ul class="vetera-footer__info-socials__list">
                  <!-- Social media icon -->
                  <?php foreach ($social_media as $key => $social_item) : ?>
                    <li class="vetera-footer__info-socials__list-item">
                        <a href="<?php echo $social_item['social_media_url'];?>" class="vetera-footer__info-socials__list-item-link" target="_blank" rel="noreferrer">
                        <span class="vetera-footer__info-socials__list-item-link-icon">
                            <img src="<?php echo $social_item['social_media_logo'];?>" alt="<?php echo $social_item['social_media_logo_alter'];?>" height="24" width="24">
                        </span>
                        </a>
                    </li>
                  <?php endforeach; ?>
                  <!-- ./Social media icon -->
                </ul>
              </div>
            </div>
          </div><!-- ./Footer block -->
        </div><!-- ./Footer single block wrapper -->
        
        <!-- Footer multi block wrapper -->
        <div class="vetera-footer__vetera-multi-block-wrapper">
          <!-- Footer block -->
          <div class="vetera-footer__block">
            <ul>
              <?php if(dynamic_sidebar('footer_navigation_one')) : else : endif; ?>
            </ul>
          </div><!-- ./Footer block -->

          <!-- Footer block -->
          <div class="vetera-footer__block">
            <ul>
              <?php if(dynamic_sidebar('footer_navigation_two')) : else : endif; ?>
            </ul>
          </div><!-- ./Footer block -->

          <!-- Footer block -->
          <div class="vetera-footer__block">
            <ul>
              <?php if(dynamic_sidebar('footer_navigation_three')) : else : endif; ?>
            </ul>
          </div><!-- ./Footer block -->

          <!-- Footer block -->
          <div class="vetera-footer__block">
            <p class="vetera-footer__block__heading txt-md-dark color-white mb-dt-16 mt-dt-0"><?php the_field('certificte_logo_title', 'option'); ?></p>
            <div class="vetera-footer__block__certificates">
              <?php foreach ($certificte_logos as $key => $certificte_logo) : ?>
                  <div class="vetera-footer__block__certificates-item">
                    <img src="<?php echo $certificte_logo['certificte_logo_image'];?>" alt="<?php echo $certificte_logo['certificte_logo_image_alt'];?>" height="68" width="68">
                </div>
              <?php endforeach; ?>
            </div>
          </div><!-- ./Footer block -->

        </div><!-- ./Footer multi block wrapper -->

      </div><!-- ./Footer blocks -->
      </div>
    </div><!-- ./Footer wrapper -->

  <!-- Footer copyright -->
  <div class="vetera-footer__copyright">

      <div class="container">
      
      <!-- Footer copyright wrapper -->
      <div class="vetera-footer__copyright__wrapper">
      <!-- Footer copyright info -->
      <div class="vetera-footer__copyright__block vetera-footer__copyright__block-first">
        <p class="txt-sm color-white m-0">&copy; <?php echo date('Y '); ?> <?php the_field('copyright_text', 'option'); ?></p>
      </div><!-- ./Footer copyright info -->

      <!-- Footer copyright nav -->
      <div class="vetera-footer__copyright__block vetera-footer__copyright__second mb-32 mb-dt-0">
        <ul>
          <?php if(dynamic_sidebar('bottom_navigation')) : else : endif; ?>
        </ul>
      </div><!-- ./Footer copyright nav -->
      </div><!-- ./Footer copyright wrapper -->
      </div>
  </div><!-- ./Footer copyright -->

</footer><!-- ./Footer -->

<!-- Cookie bar -->
  <?php echo get_template_part( 'template-parts/cookiebar' ); ?>
<!-- ./Cookie bar -->

<?php 
wp_footer();
?>
  </div>
</body>
</html> 