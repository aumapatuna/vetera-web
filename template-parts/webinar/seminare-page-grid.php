<!-- Seminare page grid -->
<section class="vetera-seminare-page-grid pt-40 pb-64 pt-dt-48 pb-dt-80">
    <div class="container">
        <!-- Seminare page grid column -->
        <div class="vetera-seminare-page-grid__column">
            <!-- Seminare page posts -->
            <div class="vetera-seminare-page-grid__news">
                <!-- Seminare page posts container -->
                <div class="vetera-seminare-page-grid__news-container">
                    <?php
                        $semiare_news_section_title = get_field('semiare_news_section_title');
                        if($semiare_news_section_title) :
                    ?>
                        <!-- Seminare page post section heading -->
                        <h3 class="mt-0 mb-0"><?php echo $semiare_news_section_title; ?></h3>
                        <!-- ./Seminare page post section heading -->
                    <?php
                        endif;
                    ?>
                    <!-- Seminare page post section -->
                    <div class="vetera-seminare-page-grid__posts pt-20 pt-dt-24">
                        <!-- Webinar post list -->
                        <?php
                            $ch = curl_init();
                            $url = "https://api.edudip-next.com/api/webinars";
                            curl_setopt($ch, CURLOPT_URL, $url);
                            $httpHeaders = [
                                'Accept: application/json',
                                'Authorization: Bearer OcmGtefhCUS6NeEdILRtrPOoDGZlpd3j5I4djnVN43uBYt9SaoiIHBb5YaLr'
                                ];
                            curl_setopt($ch, CURLOPT_HTTPHEADER, $httpHeaders);
                            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                            curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
                            $decoded = json_decode(curl_exec($ch),true);

                            $webinars = $decoded['webinars'];
                            foreach($webinars as $webinar) {
                        ?>
                        <div class="row vetera-seminare-page-grid__post pb-20 pb-dt-24 mb-20 mb-dt-24">
                            <!-- Webinar post title wrap -->
                            <div class="row row-title vetera-seminare-page-grid__acc-title pr-24">
                                <!-- Webinar post title -->
                                <p class="txt-lg-bold mt-0 mb-4 color-imperial-blue list-title">
                                    <?php echo $webinar['title']; ?>
                                </p>
                                <!-- Webinar post title -->
                                <!-- Webinar happening date -->
                                    <?php foreach($webinar['dates'] as $date) {
                                    ?>
                                        <p class="txt-sm mt-0 mb-0 color-grayedblue list-happening"><?php echo $date['date']; ?></p>
                                    <?php } ?>
                                <!-- ./Webinar happening date -->
                            </div>
                            <!-- ./Webinar post wrap -->
                            <!-- Webinar post content wrap -->
                            <div class="row row-content vetera-seminare-page-grid__acc-content">
                                <!-- Webinar moderator text -->
                                <?php if(!empty($webinar['moderators'])) { ?>
                                    <p class="txt-md-bold mt-24 mb-0 color-torch-red list-happening"><?php the_field('moderator_text'); ?></p>
                                <!-- ./Webinar moderator text -->
                                    <!-- Webinar moderator section -->
                                    <div class="row vetera-seminare-page-grid__moderators mt-16">
                                        <!-- Webinar moderator image -->
                                        <!-- <div class="row vetera-seminare-page-grid__moderators-img">
                                            <img src="<?php //echo $webinar_moderator['moderator_image'];?>" alt="<?php //echo $webinar_moderator['moderator_image_alter'];?>" height="48" width="48" />
                                        </div> -->
                                        <!-- ./Webinar moderator image -->
                                        <!-- Webinar moderator image -->
                                        <div class="row vetera-seminare-page-grid__moderators-desc">
                                            <?php
                                                foreach($webinar['moderators'] as $moderator) {
                                            ?>
                                                <p class="txt-md color-oxford-blue mt-0 mb-0">
                                                    <?php //echo $moderator['firstname'] .' '. $moderator['lastname']; ?>
                                                </p>
                                                <p class="moderator-name txt-sm color-imperial-blue mt-16 mb-0">
                                                    <?php echo $moderator['firstname'] .' '. $moderator['lastname']; ?>
                                                </p>
                                            <?php } ?>
                                        </div>
                                        <!-- ./Webinar moderator image -->
                                    </div>
                                <?php } ?>
                                    <!-- ./Webinar moderator section -->
                                <!-- Webinar description text -->
                                    <p class="txt-md-bold mt-24 mb-0 color-torch-red list-happening"><?php the_field('webinar_details_text'); ?></p>
                                <!-- ./Webinar description text -->
                                    <!--  -->
                                        <div class="row vetera-seminare-page-grid__post-content mt-16"><?php echo $webinar['landingpage']['description']; ?></div>
                                <!-- ./Webinar post content -->
                            </div>
                            <!-- ./Webinar content wrap -->
                        </div>
                        <!-- ./Webinar post list -->
                        <?php } ?>
                    </div>

                

                    <!-- ./Seminare page post section -->
                </div>
                <!-- ./Seminare page posts container -->
            </div> 
            <!-- ./Seminare page posts -->
            <!-- Seminare page form and share -->
            <div class="vetera-seminare-page-grid__apply">
                <!-- Seminare page form -->
                    <div class="vetera-seminare-page-grid__form">
                        <?php 
                            $webinar_form_shortcode = get_field('webinar_form_shortcode', 'option'); 
                            echo do_shortcode($webinar_form_shortcode); 
                            //echo do_shortcode('[contact-form-7 id="6495" title="Webinar API"]');

                            // Get webinar list
                            $ch = curl_init();
                            $url = "https://api.edudip-next.com/api/webinars";
                            curl_setopt($ch, CURLOPT_URL, $url);
                            $httpHeaders = [
                                'Accept: application/json',
                                'Authorization: Bearer OcmGtefhCUS6NeEdILRtrPOoDGZlpd3j5I4djnVN43uBYt9SaoiIHBb5YaLr'
                                ];
                            curl_setopt($ch, CURLOPT_HTTPHEADER, $httpHeaders);
                            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                            curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
                            $decoded = json_decode(curl_exec($ch),true);

                            $webinars = $decoded['webinars'];
                            ?>
                            <div class="webinar-list d-none">
                                <?php
                                    foreach($webinars as $webinar) {
                                ?>
                                    <?php echo ('<option value="'. $webinar['id'] .'">'. $webinar['title'] .'</option>') ?>
                                <?php
                                    }
                                ?>
                            </div>
                            <?php
                        ?>  
                    </div>
                <!-- Seminare page form -->
                <!-- Seminare page share -->
                <div class="vetera-seminare-page-grid__share">
                    <p class="txt-md mt-dt-24 mt-4 mb-0"><?php the_field('blog_detail_page_share_text', 'option'); ?></p>
                    <?php
                        $share_icons = get_field('blog_detail_page_share_icons', 'option');
                        $twitter_icons = $share_icons['vt_blog_post_smo_twitter_icons'];
                        $facebook_icons = $share_icons['vt_blog_post_smo_facebook_icons'];
                        $linkedin_icons = $share_icons['vt_blog_post_smo_linkedin_icons'];
                    ?>
                    <div class="addthis_toolbox">
                        <div class="custom_images">
                        <a class="addthis_button_twitter">
                            <img class="mr-16" src="<?php echo $twitter_icons; ?>" width="16" height="14" alt="Share to Twitter">
                        </a>
                        <a class="addthis_button_facebook">
                            <img class="mr-16" src="<?php echo $facebook_icons; ?>" width="8" height="16" alt="Share to Facebook">
                        </a>
                        <a class="addthis_button_linkedin">
                            <img class="mr-16" src="<?php echo $linkedin_icons; ?>" width="15" height="15" alt="Share to Facebook">
                        </a>
                        </div>
                    </div>
                </div>
                <!-- ./Seminare page share -->
            </div>
            <!-- ./Seminare page form and share -->
        </div>
        <!-- ./Seminare page grid column -->
        <!-- Buttons -->
        <div class="vetera-seminare-page-grid__btn-wrapper d-dt-none pt-16 pb-16 mt-40">
            <a href="#" class="btn seminare-toggle-btn d-block text-center ml-16 mr-16"><?php echo the_field('seminare_registration_btton_text'); ?></a>
        </div>
        <!-- ./Buttons -->
    </div>

</section>
<!-- ./Seminare page grid -->