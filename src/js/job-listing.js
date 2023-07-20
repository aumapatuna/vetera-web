jQuery(document).ready(function() {

/* Checking window width */
var ww = jQuery(window).width();

/* Career page job listing */
    if(ww <= 768) {
        jQuery('.pushme').addClass('link--secondary').removeClass('.btn');
    } else {
        jQuery('.pushme').addClass('btn').removeClass('link--secondary');
    }
    
    var list = jQuery('.vetera-careers-our-jobs__item:gt(4)');
    list.hide();
    jQuery(".pushme").click(function () {
        jQuery(this).fadeOut();
        list.slideToggle(100);
        return false;
    });

    jQuery('.vetera-careers-our-jobs__item').each(function(){
        var eleH = jQuery(this).innerHeight();
        jQuery(this).css('height', eleH)
    });
    
});