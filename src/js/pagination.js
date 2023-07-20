jQuery(document).ready(function(){
    jQuery('.btn-paging').find('a').parents('.vetera-comp-paging').fadeIn('slow');
    jQuery('.btn-paging').find('a').siblings('.nav-text').hide().parent().addClass('active');
});