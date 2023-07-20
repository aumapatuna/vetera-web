<!-- Full content page content -->
<section class="vetera-full-content-page-content pt-60 pt-dt-72 mb-100">
  <div class="container">
    <div class="vetera-full-content-page-content__body">
      <!-- Full content page content -->
        <?php
          // Start the loop.
          while ( have_posts() ) : the_post(); 

            if ( has_post_thumbnail() ) {
              the_post_thumbnail( 'full_page_image' );
            }

            the_content();
          // End the loop.
          endwhile;
        ?>
      <!-- ./Full content page content -->
    </div>
  </div>
</section>
<!-- ./Full content page content -->
