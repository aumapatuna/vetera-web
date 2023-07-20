<!-- Seminare page header -->
<section class="vetera-seminare-page-header pt-80">
  <div class="container">
    <div class="vetera-seminare-page-header__body">
        <!-- Seminare page overline  -->
        <?php
            $seminare_header_overline = get_field('seminare_header_overline');
            if($seminare_header_overline) :
        ?>
          <h5 class="red-caps-5 text-uppercase mt-48 mt-dt-88 mb-0"><?php echo $seminare_header_overline; ?></h5>
        <?php
            endif;
        ?>
        <!-- ./Seminare page overline  -->
        <!-- Seminare page headline  -->
        <?php
            $seminare_header_title = get_field('seminare_header_title');
            if($seminare_header_title) :
        ?>
          <h2 class="color-imperial-blue mt-4 mb-0 pb-40 pb-dt-80"><?php echo $seminare_header_title; ?></h2>
        <?php
            endif;
        ?>
        <!-- ./ Seminare page headline -->
        <!-- Seminare page header background -->
        <span class="vetera-seminare-page-header__body-bg"></span>  
        <!-- Seminare page header background -->
    </div>
  </div>
</section>
<!-- ./Seminare page header -->
