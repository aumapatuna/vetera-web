jQuery(function(){
    var mainContent = jQuery('.vetera-faq-details__list'),
        cat_links = jQuery('.js-filter-item a');

        cat_links.on('click', function(){

            //e.preventDefault();
            var el = jQuery(this);
            var value = el.attr("href");
            mainContent.animate({opacity:"0.5"});
            mainContent.load(value + "#inside", function(){
                mainContent.animate({opacity:"1"});
            });
            jQuery( "li" ).removeClass( "current-cat" );
             jQuery(this).closest('li').addClass("current-cat");
        });
});