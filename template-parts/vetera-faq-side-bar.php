<?php
  $current_lang = ICL_LANGUAGE_CODE;

  global $post;
  $post_slug = $post->post_name;

  if($current_lang == 'de') {
    $faq_list_url = '/faq-listing';
  } else {
    $faq_list_url = '/'. $current_lang .'/faq-listing';
  }
?>
<!-- FAQ side bar -->
<div class="vetera-faq-side-bar">
  <!-- FAQ topics component -->
  <div class="vetera-comp-faq-topics text-center text-dt-left">
    <!-- FAQ topics component title -->
    <span class="current-cat">
      <?php 
        $current_cat = isset($_GET['cat']) ? $_GET['cat'] : '';
        echo $current_cat;
      ?>
    </span>
    <p class="txt-md-blue color-imperial-blue mt-dt-0 mt-20 mb-12"><?php the_field('faq_listing_page_category_title', 'option'); ?></p>
    <p class="txt-sm color-darkblue mt-0 mb-12"><a class="txt-sm color-darkblue mt-0 mb-12 cat-opacity" href="<?php echo bloginfo('url') .$faq_list_url; ?>" data-cat="all" title="View all FAQ"><?php the_field('faq_listing_page_category_all_text', 'option'); ?></a> </p>
    <!-- ./FAQ topics component title -->
    <!-- FAQ topics component list -->
    <?php
      //for each category, show all posts
      $cat_args=array(
        'orderby' => 'name',
        'order' => 'ASC'
        );

      $categories = get_categories($cat_args);

        foreach($categories as $category) {
          $args=array(
            'post_type' => 'faq',
            'showposts' => -1,
            'category__in' => array($category->term_id),
            'ignore_sticky_posts'=> 1 //'caller_get_posts'=>1
          );

          $posts=get_posts($args);
            if ($posts) {
              echo '<p class="txt-sm color-darkblue mt-0 mb-12"><a class="txt-sm color-darkblue mt-0 mb-12 cat-opacity" href="' . get_site_url() .$faq_list_url .'/?cat=' . strtolower($category->slug) . '" data-cat="' . strtolower($category->slug) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a> </p> ';
            } // if ($posts)
          } // foreach($categories)
    ?>
    <!-- ./FAQ topics component list --> 
  </div>
  <!-- ./FAQ topics component -->
  <!-- Contact support component -->
  <div class="vetera-component-contact-support text-center text-dt-left mt-dt-32 mt-0 py-40 px-64 p-dt-20">
    <!-- Contact support component question text - white -->
    <p class="txt-sm-bold color-white mb-20 mt-0"><?php the_field('contact_support_component_title', 'option'); ?></p>
    <!-- ./Contact support component question text - white -->
    <!-- Contact support component button -->
    <a class="btn mb-16" href="<?php the_field('contact_support_component_button_url', 'option'); ?>"><?php the_field('contact_support_component_button_title', 'option'); ?></a>
    <!-- ./Contact support component button -->
    <!-- Contact support component horizontal line -->
    <span class="hr mb-20"></span>
    <!-- ./Contact support component horizontal line -->
    <!-- Contact support component text - white -->
    <p class="txt-sm-bold color-white mb-16 mt-20"><?php the_field('contact_support_component_description', 'option'); ?></p>
    <!-- ./Contact support component text - white -->
    <!-- ./Contact support component phone text - white -->
    <div class="vetera-component-contact-support__phone mb-8">
      <?php
        $phone_text = get_field('contact_support_component_phone_number', 'option');
        $phone = str_replace(' ', '', $phone_text);
      ?>
      <a class="txt-lg color-white" href="tel:<?php echo $phone; ?>" target="_self"><?php the_field('contact_support_component_phone_number', 'option'); ?></a>
    </div>
    <!-- ./Contact support component phone text - white -->
    <!-- ./Contact support component email text - white -->
    <div class="vetera-component-contact-support__email">
      <a class="txt-lg color-white" href="mailto:<?php the_field('contact_support_component_email_address', 'option'); ?>" target="_self"><?php the_field('contact_support_component_email_address', 'option'); ?></a>
    </div>
    <!-- ./Contact support component email text - white -->
  </div>
  <!-- ./Contact support component -->
</div>
<!-- ./FAQ side bar -->
