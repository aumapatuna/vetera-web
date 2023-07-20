<!-- 404 page body -->
<?php
    $p404 = get_field('404_text', 'option');
    $main_heading = get_field('404_main_heading', 'option');
    $description = get_field('404_description', 'option');
    $back_to_home = get_field('404_back_to_home_text', 'option');
?>
<section class="vetera-404-body pt-80 pb-88">
    <div class="container">
        <div class="vetera-404-body__wrp pt-80">
            <div class="vetera-404-body__p404 text-center"><?php echo $p404; ?></div>
            <div class="vetera-404-body__main-head color-darkergray mb-24 mt-4 text-center"><?php echo $main_heading; ?></div>
            <div class="vetera-404-body__description pb-40 txt-lg color-darkergray1 text-center"><?php echo $description; ?></div>
            <div class="vetera-404-body__link text-center">
                <a class="btn" href="<?php echo bloginfo('url'); ?>"><?php echo $back_to_home; ?></a>
            </div>
        </div>
    </div>
</section>
<!-- ./404 page body -->