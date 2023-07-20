jQuery(document).ready(function() {
    var current_cat = jQuery('.current-cat').text().trim();
    jQuery('.current-cat').hide();
	
	jQuery('.vetera-faq-details__search-title').appendTo('.vetera-faq-details__view-all-mobile');
    
    jQuery('.vetera-comp-faq-topics p').each(function() {
        jQuery(this).children('a').removeClass('active');
        var cur_cat = jQuery(this).children('a').attr('data-cat');
        if(current_cat == cur_cat){
            jQuery(this).children('a').addClass('active');
        } else if (cur_cat == 'all' && current_cat == '') {
            jQuery(this).children('a').addClass('active');
        }
    });
});