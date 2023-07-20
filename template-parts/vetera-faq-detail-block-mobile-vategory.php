<div class="vetera-faq-details__search-title">
    <p class="all-cat-mob-rdrop-parent mob-all-cat color-imperial-blue txt-md-bold pt-24 pb-24 mt-0 mb-0">
        <span class="all-cat-mob-rdrop all-cat-show-mob-rdrop"><?php the_field('faq_listing_page_category_title', 'option'); ?></span>
        <span class="all-cat-mob-rdrop all-cat-hide-mob-rdrop"><?php the_field('faq_listing_page_category_hide_title', 'option'); ?></span>
    </p>
</div>

<div class="vetera-faq-details__categories mt-24">
    <p class="txt-sm cat active cat-all">
    <a class="txt-sm mt-0 mb-12 cat-opacity" href="<?php echo bloginfo('url') . '/faq-listing'; ?>">
        <?php the_field('faq_listing_page_category_all_text', 'option'); ?>
    </a>
            </p>
    <?php
        //for each category, show all posts
        $cat_args = array(
        'orderby' => 'name',
        'order' => 'ASC'
        );

        $categories = get_categories($cat_args);
        //print_r($categories); die();
        $check_is_cat_available = isset($_GET['cat']) ? $_GET['cat'] : '';

        foreach($categories as $category) {

        //print_r($category); die();
        $args = array(
            'post_type' => 'faq',
            'showposts' => -1,
            'category__in' => array($category->term_id),
            'ignore_sticky_posts'=> 1 //'caller_get_posts'=>1
        );

        $posts = get_posts($args);

            if ($posts) {
                echo '<p class="txt-sm cat-'.strtolower($category->slug).' cat" data-cat="'.strtolower($category->slug).'"><a class="txt-sm mt-0 mb-12 cat-opacity color-grayedblue" href="' . get_site_url() . '/faq-listing/?cat=' . strtolower($category->slug) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a> </p> ';
            } // if ($posts)
        } // foreach($categories)
    ?>
</div>