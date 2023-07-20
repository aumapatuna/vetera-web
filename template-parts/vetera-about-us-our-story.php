<?php 
    // About section #6 options
    $about_sec6_options = get_field('about_sec6_options');
    
    $about_sec6_section_heading = $about_sec6_options['about_sec6_section_heading'];
    $about_sec6_section_description = $about_sec6_options['about_sec6_section_description'];
    $about_sec6_timeline = $about_sec6_options['about_sec6_timeline'];
?>
<!-- About us page our story secton -->
<section class="vetera-about-us-our-story mb-100">
    <div class="container">
        <!-- Grid block -->
        <div class="vetera-about-us-our-story__grid">
            <!-- Grid description block -->
            <div class="vetera-about-us-our-story__description mb-32 mb-dt-32">
                <h3 class="mt-0 mb-8"><?php echo $about_sec6_section_heading; ?></h3>
                <p><?php echo $about_sec6_section_description; ?></p>
            </div>
            <!-- ./Grid description block -->
            <!-- Grid timeline block -->
            <div class="vetera-about-us-our-story__timeline">
                <!-- Grid timeline block wrapper -->
                <div class="vetera-about-us-our-story__timeline-wrp">

                    <?php 
                        foreach ($about_sec6_timeline as $about_sec6_timeline_item) {
                            echo '<!-- Grid timeline block wrapper item -->
                            <div class="vetera-about-us-our-story__timeline-wrp__item pb-20">
                                <p class="red-bold mt-0 mb-0">'. $about_sec6_timeline_item['about_sec6_timeline_date'] .'</p>
                                <p class="mt-0 mb-0">'. $about_sec6_timeline_item['about_sec6_timeline_text'] .'</p>
                            </div>
                            <!-- ./Grid timeline block wrapper item -->';
                        }
                    ?>
                </div>
            </div>
            <!-- ./Grid timeline block -->
        </div>
        <!-- ./Grid section -->
    </div>
</section>
<!-- ./About us page our story secton -->
