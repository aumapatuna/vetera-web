<?php 
  // Data array
  $home_ch_client_logos = get_field('home_ch_logos_section');

  $home_ch_client_heading = $home_ch_client_logos['heading_ch'];
  $home_ch_client_logo_list = $home_ch_client_logos['logo_list_ch'];

?>

<!-- Home clients -->
<section class="vetera-home-clients pb-80 pt-dt-0 pt-80 pb-dt-100">
  <div class="container">

    <!-- Heading -->
    <h4 class="mt-0 mb-36 color-shade text-center"><?php echo $home_ch_client_heading; ?></h4>
    <!-- ./Heading -->

    <?php if(!empty($home_ch_client_logo_list)) : ?>
      <!-- Clients list -->
      <div class="vetera-home-clients__list">
        <?php 
          foreach ($home_ch_client_logo_list as $logo) {
            echo '<div class="vetera-home-clients__list__item">';     
                if(!empty($logo['image_link_ch']['url'])) : 
                  echo '<a href="'. $logo['image_link_ch']['url'] .'" class="vetera-home-clients__list__item-link">';
                endif;
                  echo '<div class="vetera-home-clients__list__item-wrp">
                          <img height="60" width="221" src="'. $logo['image_ch'] .'" alt="'. $logo['image_name_ch'] .'">
                        </div>';
                if(!empty($logo['image_link_ch']['url'])) : 
                  echo '</a>';
                endif;
            echo '</div>';
          }
        ?>
      </div><!-- ./Clients list -->
    <?php endif ?>
  </div>
</section><!-- ./Home clients -->