jQuery(document).ready(function(){
    jQuery('.vetera-request-demo-header__video-blk').click(function(){
        playPause();
    });

    // Video play function
    var myVideo = document.getElementById("myVideo"); 

    function playPause() { 
        if (myVideo.paused) {
            myVideo.play();
            jQuery('.vetera-request-demo-header__video-blk__overlay, .video-blk-btn').fadeOut('slow');
        } else {
            myVideo.pause(); 
            jQuery('.vetera-request-demo-header__video-blk__overlay, .video-blk-btn').fadeIn('slow');
        }
    }
}); 