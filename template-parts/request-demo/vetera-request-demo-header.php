<!-- Request demo header section --> 
<?php
    $rd_header_block_subtitle = get_sub_field('rd_header_block_subtitle');
    $rd_header_block_title = get_sub_field('rd_header_block_title');
    $rd_header_block_description = get_sub_field('rd_header_block_description');
    $rd_header_block_video = get_sub_field('rd_header_block_video');
    $rd_header_block_video_overlay_image = get_sub_field('rd_header_block_video_overlay_image');
?>
<section class="vetera-request-demo-header mb-80">
    <!-- Title and description block -->
    <div class="container">
        <div class="vetera-request-demo-header__title-blk">
            <h5 class="red-caps-5 text-center text-uppercase mt-0 mb-0"><?php echo $rd_header_block_subtitle; ?></h5>
            <h1 class="text-center text-center mt-4 mb-0"><?php echo $rd_header_block_title; ?></h1>
            <p class="text-center description color-darkash mt-20 mb-0"><?php echo $rd_header_block_description; ?></p>
        </div>
        <?php if($rd_header_block_video) : ?> 
        <div class="vetera-request-demo-header__video-blk mt-60"> 
            <span class="video-blk-btn" onclick="playPause()"></span>
            <span class="vetera-request-demo-header__video-blk__overlay">
                <img class="vetera-request-demo-header__video-blk__img" src="<?php echo $rd_header_block_video_overlay_image; ?>" style="width:100%;height:100%;" alt="Video block overlay" />
            </span>
            <video style="width:100%;height:100%;" id="myVideo">
                <source src="<?php echo $rd_header_block_video; ?>" type="video/mp4">
                <source src="mov_bbb.ogg" type="video/ogg">
                Your browser does not support HTML video.   
            </video>
        </div>
        <?php endif; ?>
    </div>
    <!-- ./Title and description block -->  
</section>