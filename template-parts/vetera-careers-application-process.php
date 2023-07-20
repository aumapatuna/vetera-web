<!-- Careers our application section -->
<section class="vetera-careers-application-process pb-100 pb-dt-100">
  <div class="container">
    <!-- Careers our application wrapper section -->
    <div class="vetera-careers-application-process__wrp">
      <!-- Careers our application title section -->
      <div class="vetera-careers-application-process__title">
        <h3 class="text-center mt-0 mb-16 mb-dt-8"><?php the_field('our_application_process_header'); ?></h3>
        <p class="text-center color-dark mt-0 mb-36 mb-dt-64"><?php the_field('our_application_process_description') ?></p>
      </div>
      <!-- ./Careers our application title section -->
      <!-- Careers our application cards section -->
      <div class="vetera-careers-application-process__cards">
        <?php echo get_template_part('template-parts/vetera-careers-process-cards'); ?>
      </div>
      <!-- ./Careers our application cards section -->
    </div>
    <!-- ./Careers our application wrapper section -->
  </div>
</section>
<!-- ./About Us our value section -->
