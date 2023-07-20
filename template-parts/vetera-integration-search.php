<!-- Integration search -->
<div class="vetera-integration-search">
    <!-- Integration search input -->
    <div class="vetera-integration-search__input mt-0 mb-40 mb-dt-0">
        <span class="vetera-integration-search__input__icon"></span>
        <input type="text" placeholder="<?php the_field('integration_search_text', 'option'); ?>" class="vetera-integration-search__input__bar" id="keyword" name="keyword" onkeyup="fetch()" data-post-type="integration">
    </div>
    <!-- <div id="datafetch"></div>  -->
    <!-- ./Integration search input -->
    <!-- Integration search title -->
    <div class="vetera-integration-search__title">
        <p class="txt-md-bold color-imperial-blue mt-24 mb-0 pb-12"><?php the_field('integration_list_categories_text', 'option'); ?></p>
    </div>
    <!-- ./Integration search title -->
    <!-- Integration search categories -->
    <div class="vetera-integration-search__categories mt-24">
        <p class="txt-sm cat active cat-all"><a class="txt-sm mt-0 mb-12 cat-opacity" href="<?php echo bloginfo('url') . '/integrations'; ?>"><?php the_field('integration_list_categories_all_text', 'option'); ?></a><p>
        <?php
            //for each category, show all posts
            $cat_args=array(
                'orderby' => 'name',
                'order' => 'ASC'
                );
            $categories=get_categories($cat_args);
            $check_is_cat_available = isset($_GET['cat']) ? $_GET['cat'] : '';

            foreach($categories as $category) {
                $args=array(
                    'post_type' => 'integration',
                    'showposts' => -1,
                    'category__in' => array($category->term_id),
                    'ignore_sticky_posts'=>1 //'caller_get_posts'=>1
                );
            $posts=get_posts($args);
                if ($posts) {
                    echo '<p class="txt-sm cat-'.strtolower($category->slug).' cat" data-cat="'.strtolower($category->slug).'"><a class="txt-sm mt-0 mb-12 cat-opacity" href="?cat=' . strtolower($category->slug) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a> </p> ';
                } // if ($posts)
            } // foreach($categories)
        ?>
        <!-- ./Search category list -->
    </div>
    <!-- ./Integration search categories -->
</div>
<!-- ./Integration search -->