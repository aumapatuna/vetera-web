jQuery(document).ready(function() {
    
    /* Checking window width */
    var ww = jQuery(window).width();

    /* Testimonials slider in Product details page */
    if(ww <= 768) {
        jQuery('.vetera-testimonials__grid').slick({
            centerMode: true,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            centerPadding: '8px',
            variableHeight: false,
            arrows: false,
            dots: true
        });
    }
    
});