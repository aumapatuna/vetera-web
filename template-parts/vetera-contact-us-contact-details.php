<!-- Contact details secton -->
<section class="vetera-contact-us-contact-details pt-60 pt-dt-68 mt-100 mb-80 mb-dt-100">
    <div class="container">
        <!-- Contact details secton grid -->
        <div class="vetera-contact-us-contact-details__grid">
            <!-- Grid description block -->
            <div class="vetera-contact-us-contact-details__description-blk">
                <h5 class="red-caps-5 text-uppercase mt-0 mb-0"><?php the_field('contact_us_detils_sub_heading'); ?></h5>
                <h2 class="heading-white-2 mt-8 mb-0"><?php the_field('contact_us_detils_heading'); ?></h2>
                <!-- Contact support phone text - white -->
                <div class="vetera-component-contact-support__phone mt-32 mt-dt-40 mb-8">
                    <p class="color-white m-0"><?php the_field('contact_us_detils_phone_text'); ?>
                        <?php
                            $phone_text = get_field('contact_us_detils_phone_number_text');
                            $phone = str_replace(' ', '', $phone_text);
                        ?>
                        <a class="color-white txt-md-dark" href="tel:<?php echo $phone; ?>" target="_self"><?php the_field('contact_us_detils_phone_number_text'); ?></a>
                    </p>
                </div>
                <!-- ./Contact support phone text - white -->
                <!-- Contact support email text - white -->
                <div class="vetera-component-contact-support__email mb-8">
                    <p class="color-white m-0"><?php the_field('contact_us_detils_email_text'); ?>
                        <a class="color-white txt-md-dark" href="mailto:<?php the_field('contact_us_detils_email_address'); ?>" target="_self"><?php the_field('contact_us_detils_email_address'); ?></a>
                    </p>
                </div>
                <!-- ./Contact support email text - white -->
                <!-- Contact support address text - white -->
                <p class="color-white txt-sm mb-0"><?php the_field('contact_us_detils_address'); ?></p>
                <!-- ./Contact support address text - white -->
                <!-- Contact support business hours text - white -->
                <p class="color-white txt-sm mt-28"><?php the_field('contact_us_detils_hours'); ?></p>
                <!-- ./Contact support business hours text - white -->
                <div class="vetera-contact-us-contact-details__description-blk__smo mt-36 pb-0 pb-dt-72">
                    <!-- Contact support get in touch text - white -->
                    <p class="color-white txt-sm mb-8"><?php the_field('contact_us_detils_social'); ?></p>
                    <!-- ./Contact support get in touch text - white -->
                    <div class="vetera-footer__info-socials">
                        <ul class="vetera-footer__info-socials__list">
                        <!-- Social media icon -->
                        <?php 
                            $social_media = get_field('social_media_list', 'option');
                        ?>
                        <?php foreach ($social_media as $key => $social_item) : ?>
                            <li class="vetera-footer__info-socials__list-item">
                                <a href="<?php echo $social_item['social_media_url'];?>" class="vetera-footer__info-socials__list-item-link" target="_blank">
                                <span class="vetera-footer__info-socials__list-item-link-icon">
                                    <img src="<?php echo $social_item['social_media_logo'];?>" alt="<?php echo $social_item['social_media_logo_alter'];?>">
                                </span>
                                </a>
                            </li>
                        <?php endforeach; ?>
                        <!-- ./Social media icon -->
                        </ul>
                    </div>
                </div>
            </div>
            <!-- ./Grid description block -->
        </div>
        <!-- ./Contact details secton grid -->
    </div>
    <span class="vetera-contact-us-contact-details__gradient"></span>
</section>
<!-- ./Contact details secton -->
