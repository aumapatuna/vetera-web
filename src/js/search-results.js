jQuery(document).ready(function(){
    jQuery("#keyword").keyup(function(){
        var emptVal = jQuery(this).val().length;
        if(emptVal == "") {
            jQuery('.search-results').fadeOut();
        } else {
            jQuery('.search-results').fadeIn();
        }
    });
});