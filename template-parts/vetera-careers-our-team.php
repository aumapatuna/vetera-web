<!-- Our team section in About Us section -->
<section class="vetera-about-us-our-team pb-100 pb-dt-80 pt-80 pt-dt-100">
  <div class="container">
    <div class="vetera-about-us-our-team__wrp">
      <div class="vetera-about-us-our-team__title-blk">
        <h5 class="caps-5 text-center text-uppercase mt-0 mb-0"><?php the_field('careers_team_sub_header'); ?></h5>
        <h3 class="text-center mt-4 mb-0"><?php the_field('careers_team_header'); ?></h3>
        <p class="text-center mt-16 mt-dt-8 mb-36 mb-dt-64"><?php the_field('careers_team_details'); ?></p>
      </div>
      <div class="vetera-about-us-our-team__cards-blk">
        <?php if (have_rows('careers_team_stat_cards')): ?>
          <?php while (have_rows('careers_team_stat_cards')): the_row(); ?>
            <!-- Stats card component -->
            <div class="vetera-comp-stats-card p-20 pb-20 bg-color-white">
              <div class="vetera-comp-stats-card__header">
                <p class="txt-sm-bold mt-0 mb-12"><?php echo the_sub_field('teams_stat_header'); ?></p>
              </div>
              <!-- Separator component -->
              <hr class="vetera-comp-stats-card__separator m-0">
              <!-- ./Separator card component -->
              <div class="vetera-comp-stats-card__body">
                <h2 class="h2 mt-0 mb-20 pt-16"><?php echo the_sub_field('teams_stat_number'); ?></h2>
                <p class="txt-sm m-0"><?php echo the_sub_field('teams_stat_description'); ?></p>
              </div>
            </div>
            <!-- ./Stats card component -->
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
<!-- ./Our team section in About Us section -->
