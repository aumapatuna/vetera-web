<!-- Integration details body -->
<section class="vetera-integration-details-body pb-100">
    <div class="container">
        <!-- Integration details body wrapper -->
        <div class="vetera-integration-details-body__wrp">
            <!-- Integration details body wrapper content -->
            <div class="vetera-integration-details-body__content">
                <?php
                    // Start the loop.
                    while ( have_posts() ) : the_post(); 
                        the_content();
                    // End the loop.
                    endwhile;
                ?>
                <!-- ./Integration body content -->
            </div>
            <!-- ./Integration details body wrapper content -->
        </div>
        <!-- ./Integration details body wrapper -->
    </div>
</section>
<!-- ./Integration details body -->
