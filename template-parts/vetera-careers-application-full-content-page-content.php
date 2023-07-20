<!-- Full content page content -->
<section class="vetera-full-content-page-content pt-36 pt-dt-64 mb-100">
  <div class="container">
    <div class="vetera-full-content-page-content__body">
      <!-- Full content page content -->
      <p class="txt-lg-bold mb-0 mt-0 color-darkash"><?php the_field('career_details_about_job_title', 'option'); ?></p>
      <!-- Loop of posts -->
      <?php
          while ( have_posts() ) : the_post();
            the_content();
          endwhile;
      ?>
      <!-- ./Loop of posts -->
      <a class="btn apply-btn text-center mt-36" href="#tabs-2"><?php the_field('career_details_apply_button_text', 'option'); ?></a>
      <!-- ./Full content page content -->
    </div>
  </div>
</section>
<!-- ./Full content page content -->
