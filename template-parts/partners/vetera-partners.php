<?php 
  // Args for get partners items
  $args = array(
      'post_type'   => 'integration',
      'post_status' => 'publish',
      'order' => 'ASC',
      'tag_slug__in' => 'partner',
  );
  
  // Get total post list for partners
  $integration_post_list = new WP_Query( $args );

  // Total post count
  $totalpost = $integration_post_list->found_posts;

  // Partner page blocks
  $partners_page_blocks = get_field('partners_page_blocks');
?>

<!-- Product features header -->
<section class="vetera-partners mt-116">

<?php

// Check value exists.
if( have_rows('partners_page_blocks') ):
  // Loop grid rows.
  while ( have_rows('partners_page_blocks') ) : the_row();
    // Case: Header block layout.
    if( get_row_layout() == 'pp_header_block' ):
?>

    <!-- Header section -->
    <?php
        $pp_header_block_subtitle = get_sub_field('pp_header_block_subtitle');
        $pp_header_block_title = get_sub_field('pp_header_block_title');
        $pp_header_block_description = get_sub_field('pp_header_block_description');
        $pp_header_block_second_heading = get_sub_field('pp_header_block_second_heading');
    ?>
    <div class="vetera-partners-header mb-64">
        <!-- Title and description block -->
        <div class="container">
            <div class="vetera-partners-header__title-blk">
                <h5 class="red-caps-5 text-center text-uppercase mt-0 mb-0"><?php echo $pp_header_block_subtitle; ?></h5>
                <h1 class="text-center text-center mt-4 mb-0"><?php echo $pp_header_block_title; ?></h1>
                <p class="text-center color-darkash mt-20"><?php echo $pp_header_block_description; ?></p>
                <h2 class="text-center pb-0 pt-32 pt-dt-44"><?php echo $pp_header_block_second_heading; ?></h2>
            </div>
        </div>
        <!-- ./Title and description block -->
    </div>
    <!-- ./Header section -->

    <?php
        // Case: Card block layout.
        elseif( get_row_layout() == 'pp_card_block' ):
    ?>

    <!-- Integration cards -->
    <?php
        $pp_card_block_loop = get_sub_field('pp_card_block_loop');
        $pp_card_block_integration_btn_text = get_sub_field('pp_card_block_integration_btn_text');
    ?>
    <div class="vetera-comp-integrations-stats pb-60">
        <div class="container">
            <div class="vetera-comp-integrations-stats__grid">
            <?php
            if( $integration_post_list->have_posts() ) :  
            ?>
            <?php 
            while( $integration_post_list->have_posts() ) :
                $integration_post_list->the_post();
            ?>
            <div class="vetera-comp-integrations-stats-card p-24 bg-color-white mb-20 mb-dt-0">
                <div class="vetera-comp-integrations-stats-card__img mb-20">
                    <?php
                    if ( has_post_thumbnail() ) {
                        $post_thubnail_image = the_post_thumbnail( 'full vetera-comp-integrations-stats-card__img-image' );
                    }
                    ?>
                </div>
                <div class="vetera-comp-integrations-stats-card__body mt-0 mb-0">
                    <p class="text-uppercase m-0 vetera-comp-integrations-stats-card__body-title text-uppercase color-darkash"><?php the_field('integration_post_subtitle'); ?></p>
                    <p class="txt-sm color-darkergray1 m-0 mb-20 the-excerpt"><?php echo get_the_excerpt(); ?></p>
                    <a class="link link--secondary d-inline-block" href="<?php echo (get_field('integration_post_learn_more_link')['url'] != '' && get_field('integration_post_learn_more_use_ex') == True ? get_field('integration_post_learn_more_link')['url'] : the_permalink()); ?>" target="<?php echo (get_field('integration_post_learn_more_link')['target'] != '' ? get_field('integration_post_learn_more_link')['target'] : '_self'); ?>"><?php the_field('integration_post_learn_more'); ?></a>
                </div>
                </div>
                <?php 
                endwhile;
                wp_reset_postdata();
                ?>
                <?php else : 
                esc_html_e( 'No Partners to show!', 'text-domain' );
                endif; ?>
            </div>
        </div>
        <div class="vetera-comp-integrations-stats-card__link text-center pt-40">
            <a class="btn" href="<?php echo bloginfo('url') . '/integrations'; ?>"><?php echo $pp_card_block_integration_btn_text; ?></a>
        </div>
    </div>
    <!-- ./Integration details recommended logo card -->

    <?php
        // Case: Contact block layout.
        elseif( get_row_layout() == 'pp_contact_block' ):
    ?>

    <!-- Partner contact block -->
    <?php
        $pp_contact_block_title = get_sub_field('pp_contact_block_title');
        $pp_contact_block_description = get_sub_field('pp_contact_block_description');
        $pp_contact_block_link_title = get_sub_field('pp_contact_block_link_title');
        $pp_contact_block_link_url = get_sub_field('pp_contact_block_link_url');
    ?>
    <div class="vetera-partner-contact mb-100 pt-80 pb-80">
        <div class="container">
            <div class="vetera-partner-contact__wrp">
                <h3 class="vetera-partner-contact__title color-imperial-blue text-center mt-0 mb-24"><?php echo $pp_contact_block_title; ?></h3>
                <p class="color-darkash text-center mb-36"><?php echo $pp_contact_block_description; ?></p>
                <div class="text-center">
                    <a class="btn" href="<?php echo $pp_contact_block_link_url; ?>"><?php echo $pp_contact_block_link_title; ?></a>
                </div>
            </div>
        </div>
    </div>
    <!-- ./Partner contact block -->

    <?php
        // Case: Contact block layout.
        elseif( get_row_layout() == 'pp_learn_more_block' ):
    ?>

    <!-- Partners page Learn more section -->
    <?php
        $pp_learn_more_block_title = get_sub_field('pp_learn_more_block_title');
        $pp_learn_more_block_cards = get_sub_field('pp_learn_more_block_cards');
    ?>
    <div class="vetera-about-us-learn-more mb-100">
        <div class="container">
            <div class="vetera-about-us-learn-more__wrp">
                <div class="vetera-about-us-our-mission__title">
                    <h3 class="text-center mt-0 mb-dt-32 mb-40 mb-dt-8"><?php echo $pp_learn_more_block_title; ?></h3>
                </div>
                <div class="vetera-about-us-learn-more__body">
                    <!-- Support and FAQ component -->
                    <?php foreach ($pp_learn_more_block_cards as $key => $pp_learn_more_block_card) : ?>
                        <?php echo
                            '<div class="vetera-comp-our-value-card text-center">
                                <div class="vetera-comp-our-value-card__icon mb-16">
                                    <img src="'. $pp_learn_more_block_card['pp_learn_more_block_cards_image'] .'" alt="Lear more icon alter">
                                </div>           
                                <div class="vetera-comp-our-value-card__body">
                                    <h5 class="mt-0 mb-12 mb-dt-16">'. $pp_learn_more_block_card['pp_learn_more_block_cards_title'] .'</h5>
                                    <p class="mt-0 mb-16 mb-dt-20 pl-24 pr-0">'. $pp_learn_more_block_card['pp_learn_more_block_cards_description'] .'</p>
                                    <a class="link link--secondary d-inline-block" href="'. $pp_learn_more_block_card['pp_learn_more_block_cards_link_url'] .'">'. $pp_learn_more_block_card['pp_learn_more_block_cards_link_title'] .'</a>
                                </div>
                            </div>';
                        ?>
                    <?php endforeach; ?>
                    <!-- ./Support and FAQ component -->
                </div>
            </div>
        </div>
    </div>
    <!-- ./Partners page Learn more section -->
    <?php
    endif;
    // End loop.
  endwhile;
  ?>
  <?php
      // No value.
      else :
        echo 'No grid added';
    ?>
    <?php
        // Do something...
    endif;
  ?>

</section>
<!-- ./Product features header -->