<?php 
    $pg_name = str_replace(".php","",get_page_template_slug());
?>
<!-- Vetera two tab layout for careers -->
<section class="vetera-two-tab vetera-two-tab--<?php echo $pg_name; ?>">
    <!-- Vetera two tab layout -->
    <div id="tabs">
        <div class="container">
            <!-- Vetera two tab headers -->
            <ul class="tabs__headers pt-16">
                <li class="tabs__headers__item tabs__headers__item-<?php echo $pg_name; ?> item-1 text-center">
                    <a class="pb-16" href="#tabs-1"><?php the_field('role_overview_tab_text', 'option'); ?></a>
                </li>
                <li class="tabs__headers__item tabs__headers__item-<?php echo $pg_name; ?> item-2 text-center">
                    <a class="pb-16" href="#tabs-2"><?php the_field('application_tab_text', 'option'); ?></a>
                </li>
            </ul>
            <!-- ./Vetera two tab headers -->
        </div>
        <hr class="tabs-devider mt-0 mb-0" />
        <div class="container">
            <!-- Vetera two tab contents -->
            <div id="tabs-1" class="tab-content tab-content-role">
                <?php echo get_template_part( 'template-parts/vetera-careers-application-full-content-page-content' ); ?>
            </div>
            <div id="tabs-2" class="tab-content tab-content-application">
                <?php echo get_template_part( 'template-parts/vetera-career-details-form' ); ?>
            </div>
            <!-- ./Vetera two tab contents -->
        </div>
    </div>
    <!-- ./Vetera two tab layout -->
</section>
<!-- ./Vetera two tab layout for careers -->