/* When document ready */ 
jQuery(document).ready(function(){
    
    var ww = jQuery(window).width();

    /* Home page main image in mobile */ 
    jQuery('.vetera-home-hero__main-grid__col img').clone().appendTo('.vetera-home-hero__main-grid__col h1');

    /* Home page tab image in mobile */
    // jQuery('.vetera-comp-home-tab__image-blk').each(function(){
    //     jQuery(this).clone().appendTo('.vetera-comp-home-tab__details h3');
    // });


    if(ww < 1023) {

        /* Show home page tab content in the mobile */
        jQuery('.tab-home-container .tab-content').each(function(){
            jQuery(this).removeAttr('style');
        });
    }

});