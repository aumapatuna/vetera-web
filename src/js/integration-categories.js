jQuery(document).ready(function() {

    /* Checking window width */
    var ww = jQuery(window).width();

    jQuery('.vetera-integration-search__categories, .vetera-faq-details__categories').each(function(){
        var a = window.location.href;
        var splitted = a.split('=')[1];
        if (splitted) {
            jQuery(this).children('p').removeClass('active');
            jQuery('.cat-'+splitted).addClass('active');
            jQuery('.active a').addClass('color-imperial-blue').removeClass('color-grayedblue');
        } else {
            jQuery('.active a').addClass('color-imperial-blue')
        }
    });
    
    /* Integration and FAQ pages view all categories */
    if(ww <= 768) {

        /* Integration page */ 
        jQuery('.vetera-integration-search__categories, .vetera-faq-details__categories').insertAfter('.mob-all-cat');
        jQuery('.vetera-faq-details__categories').hide();
        //jQuery('.all-cat-mob-rdrop').parent().addClass();
        jQuery('.mob-all-cat').click(function () {
            jQuery(this).parents('.vetera-integration-body__view-all, .container, .vetera-faq-details__view-all-mobile').toggleClass('opened');
            jQuery('.vetera-integration-search__categories, .vetera-faq-details__categories').slideToggle(400);
            return false;
        });
    }



    /* Show more function */
    var itmlen = jQuery('.vetera-comp-integrations-stats-card').length;
    jQuery('.vetera-comp-integrations-stats-card:lt(10)').addClass('show').fadeIn();

    x=10;
    jQuery('.vetera-comp-integrations-stats-card').slice(0, 10).show();
    jQuery('.integration-loadmore').on('click', function (e) {
        e.preventDefault();
        x = x+10;
        jQuery('.vetera-comp-integrations-stats-card').slice(0, x).slideDown().addClass('show');

        var showlen = jQuery('.show').length;
        if(showlen == itmlen) {
            jQuery('.integration-loadmore').fadeOut();
        }
    });
});