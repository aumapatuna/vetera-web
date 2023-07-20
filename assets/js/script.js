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
            variableHeight: true,
            arrows: false,
            dots: true
        });
    }

    /* Timeline of the About Us page */
    jQuery('.vetera-about-us-our-story__timeline-wrp__item').last().addClass('timeline-last');

    /* Select upload */
    jQuery('select').change(function() {
        jQuery(this).find(':selected').parent('select').addClass('selected')
        .siblings('option').removeClass('selected');
    });

    /* Checkbox upload */
    jQuery('.checkmark').appendTo('.wpcf7-checkbox label');

    /* File upload */
    var fileId = jQuery('.file-903 input').attr('name');
    jQuery('.file-903 input').attr('id', fileId);

    /* Submit button */
    jQuery('.submit input').addClass('btn');

    /* Submit button */
    jQuery('.wpcf7-select').parent('span').addClass('arrow');

    /* Tabs function */
    jQuery( "#tabs" ).tabs();

    jQuery('.apply-btn').click(function() {
        jQuery('.tabs__headers__item').removeClass('ui-state-active');
        jQuery('#tabs-1').attr('aria-hidden', 'true').fadeOut('slow');
        jQuery('#tabs-2').attr('aria-hidden', 'false').fadeIn('slow');
        jQuery('.tabs__headers__item.item-2').addClass('ui-state-active');
    });

    jQuery('.tabs__headers__item.item-1').click(function(){
        window.location.hash ='';
    });


});