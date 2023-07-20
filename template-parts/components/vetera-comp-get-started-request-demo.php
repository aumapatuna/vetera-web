<?php
  $pg_name = str_replace(".php","",get_page_template_slug());
?>
<!-- Get started component -->
<section class="vetera-comp-get-started vetera-comp-get-started--<?php echo $pg_name; ?> mb-80 mt-0">
    <div class="container">
        <!-- Get stsrted component title -->
        <h2 class="comp-title text-center mt-0 mb-dt-16 mb-8"><?php the_field('get_started_rd_title', 'option'); ?></h2>
        <!-- ./Get stsrted component title-->
        <p class="text-center color-darkergray mb-32 mb-dt-36 mt-0"><?php the_field('get_started_rd_descriptions', 'option'); ?><p>
        <?php 
            $get_started_rd_request_demo_url = get_field('get_started_rd_request_demo_url', 'option');
            if($get_started_rd_request_demo_url) :
        ?>
            <div class="vetera-comp-get-started__newsletter text-center">
                <!-- Request demo button -->
                <a href="<?php echo $get_started_rd_request_demo_url; ?>" class="btn btn"><?php the_field('get_started_rd_request_demo_text', 'option'); ?></a>
                <!-- ./Request demo button -->
            </div>
        <?php endif; ?>
        <p class="txt-sm text-center color-darkergray1 mt-36"><?php the_field('get_started_rd_bottom_text', 'option'); ?><p>
        <!-- Bubble image block -->
        <div class="vetera-comp-get-started__bubbles mt-36">
            <?php 
                $get_started_rd_bubbles = get_field('get_started_rd_bubbles', 'option');
                $i= 1;
            ?>
            <?php foreach ($get_started_rd_bubbles as $key => $get_started_rd_bubble) : ?>
                <span class="<?php echo 'bubble'.$i;?> bubble">
                    <img class="bubble-img" src="<?php echo $get_started_rd_bubble['get_started_rd_bubble_images'];?>" alt="<?php echo $get_started_rd_bubble['get_started_rd_bubble_alt'];?>">
                </span>
            <?php $i++;
            endforeach; ?>
        </div>
        <!-- ./Bubble image block -->
    </div>
</section>
<!-- ./Get startred component -->
