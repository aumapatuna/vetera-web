jQuery(document).ready(function() {
    /* Tabs function */
    jQuery( "#tabs" ).tabs();

    jQuery('.apply-btn').click(function() {
        jQuery('.tabs__headers__item').removeClass('ui-state-active ui-tabs-active');
        jQuery('#tabs-1').attr('aria-hidden', 'true').fadeOut('slow');
        jQuery('#tabs-2').attr('aria-hidden', 'false').fadeIn('slow');
        jQuery('.tabs__headers__item.item-2').addClass('ui-state-active ui-tabs-active');
    });

    jQuery('.joblisting-template-default .tabs__headers__item.item-1').click(function(){
        window.location.hash ='';
    });

    jQuery('.tabs__headers__item').click(function(){
        jQuery(this).siblings().removeClass('ui-state-active ui-tabs-active');
        jQuery(this).addClass('ui-state-active ui-tabs-active');

        var getTabId = jQuery(this).find('a').attr('href');
        if(getTabId == '#tabs-1') {
            jQuery('#tabs-2').attr('aria-hidden', 'true').fadeOut('slow');
            jQuery('#tabs-1').attr('aria-hidden', 'false').fadeIn('slow');
        } else if(getTabId == '#tabs-2') {
            jQuery('#tabs-1').attr('aria-hidden', 'true').fadeOut('slow');
            jQuery('#tabs-2').attr('aria-hidden', 'false').fadeIn('slow');
        }
    });

});