<!-- Contact us form secton -->
<section class="vetera-contact-us-form pt-80">
    <div class="container">
        <!-- Contact us form secton headers -->
        <div class="vetera-contact-us-form__headers pt-36 pt-dt-84">
            <h5 class="red-caps-5 text-center text-uppercase mt-0 mb-0">
                <?php the_field('contact_us_sub_heading'); ?>
            </h5>
            <h1 class="text-center mt-4 mb-0">
                <?php the_field('contact_us_main_header'); ?>
            </h1>
            <p class="text-center color-oxford-blue mt-20 mb-0">
                <?php the_field('contact_us_main_content'); ?>
            </p>
        </div>
        <!-- ./Contact us form secton headers -->
        <!-- Customer support block -->
        <div class="vetera-contact-us-form__support mt-36 mt-dt-64">
            <div class="vetera-contact-us-form__support-wrp pt-24 pb-36">
                <h5 class="red-caps-5 text-center text-uppercase mt-0 mb-0">
                    <?php the_field('contact_us_sustomer_support_title'); ?>
                </h5>
                <div class="vetera-contact-us-form__grid pt-24">
                    <div class="vetera-contact-us-form__grid-left">
                        <p class="color-white mt-0 mb-0 pb-4">
                            <?php the_field('contact_us_sustomer_support_phone_text'); ?>
                        </p>
                        <?php
                            $phone_text = get_field('contact_us_sustomer_support_phone_number');
                            $phone = str_replace(' ', '', $phone_text);
                        ?>
                        <a class="phone color-white" href="tel:<?php echo $phone; ?>"><?php echo $phone_text; ?></a>
                    </div>
                    <div class="vetera-contact-us-form__grid-right">
                        <p class="color-white mt-0 mb-0 pb-4"><?php the_field('contact_us_sustomer_support_email_text'); ?></p>
                        <a class="email color-white" href="mailto:<?php the_field('contact_us_sustomer_support_email_address'); ?>"><?php the_field('contact_us_sustomer_support_email_address'); ?></a>
                    </div>
                </div>
            </div>
            <span class="vetera-contact-us-form__gradient"></span>
        </div>
        <!-- ./Customer support block -->
        <!-- Contact us form secton form -->
        <div class="vetera-contact-us-form__form mt-24">
            <?php 
                $contact_form = get_field('contact_form_shortcode', 'option');
                echo do_shortcode($contact_form); 
            ?>
        </div>
        <!-- ./Contact us form secton form -->
    </div>
</section>
<!-- ./Contact us form secton -->