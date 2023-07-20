jQuery(document).ready(function() {

     /* Checking window width */
     var ww = jQuery(window).width();

     /* Testimonials slider in Product details page */
    if(ww > 1023) {
        jQuery('.vetera-home-clients__list').slick({
            centerMode: true,
            infinite: true,
            speed: 300,
            slidesToShow: 4,
            variableHeight: true,
            arrows: true,
            dots: false,
            nextArrow: '<span class="clients-list-next"></span>',
            prevArrow: '<span class="clients-list-prev"></span>'
        });
    }
});