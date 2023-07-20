<!-- Get started component -->
<section class="vetera-comp-get-started mb-80">
    <div class="container">
        <!-- Get stsrted component title -->
        <h2 class="comp-title text-center mt-0 mb-dt-16 mb-8"><?php the_field('get_started_title', 'option'); ?></h2>
        <!-- ./Get stsrted component title-->
        <p class="text-center color-darkergray mb-32 mb-dt-36 mt-0"><?php the_field('get_started_descriptions', 'option'); ?><p>
        <div class="vetera-comp-get-started__newsletter">
            <!-- Newsletter form -->
            <?php 
                $newsletter_form = get_field('newsletter_form_shortcode', 'option');
                echo do_shortcode($newsletter_form); 
            ?>
            <!-- ./Newsletter form -->
        </div>
        <p class="txt-sm text-center color-darkergray1 mt-36"><?php the_field('get_started_bottom_text', 'option'); ?><p>
        <!-- Bubble image block -->
        <div class="vetera-comp-get-started__bubbles mt-36">
            <?php 
                $get_started_bubbles = get_field('get_started_bubbles', 'option');
                $i= 1;
            ?>
            <?php foreach ($get_started_bubbles as $key => $get_started_bubble) : ?>
                <span class="<?php echo 'bubble'.$i;?> bubble">
                    <img class="bubble-img" src="<?php echo $get_started_bubble['get_started_bubble_images'];?>" alt="<?php echo $get_started_bubble['get_started_bubble_alt'];?>">
                </span>
            <?php $i++;
            endforeach; ?>
        </div>
        <!-- ./Bubble image block -->
    </div>
</section>
<!-- ./Get startred component -->
