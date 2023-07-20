//document.addEventListener('touchstart', onTouchStart, {passive: true});
jQuery(document).ready(function(){

    jQuery(".menu a[href='#']").click(function(e) {
        e.preventDefault();
    });

    jQuery(".ui-tab > a[href='#']").click(function(e) {
        e.preventDefault();
    });

    jQuery('.menu-item-has-children').each(function() {
        jQuery(this).children('a').click(function(e) {
            jQuery(this).toggleClass('expand');
            jQuery(this).siblings('.sub-menu').toggleClass('sub-open');

            jQuery(this).siblings('.sub-menu').css('opacity', 0)
            jQuery(this).siblings('.sub-menu.sub-open').css('opacity', 1);
            jQuery(this).parent().siblings().children('.sub-menu').css('opacity', 0);
        });

        var ww = jQuery(window).width();
        if(ww >= 1200) {
            jQuery(document).mouseup(function(e) {
                var container = jQuery('.sub-menu');

                if(!container.is(e.target) && container.has(e.target).length === 0) {
                    container.css('opacity', 0);
                }
            });
        }

        jQuery(document).on('click', function(e) {
            if (jQuery(e.target).is('.menu-item-has-children a') === false) {
                jQuery('.menu-item-has-children, .menu-item-has-children a').removeClass('expand');
                jQuery('.menu-item-has-children a').siblings('.sub-menu').removeClass('sub-open');
            }
        });

        jQuery('.vetera-header__nav__list .menu .menu-item a').each(function(){
            var col_type = jQuery(this).children('.column').data('column');
            if(col_type == 'default') {
                jQuery(this).parent('.menu-item').addClass('default');
            } else if(col_type == 'col_one') {
                jQuery(this).parent('.menu-item').addClass('one-col');
            } else if(col_type == 'col_two') {
                jQuery(this).parent('.menu-item').addClass('two-col iconed');
            } else if(col_type == 'col_three') {
                jQuery(this).parent('.menu-item').addClass('three-col iconed');
            }
        });
        
        jQuery('.iconed .sub-menu').each(function(){
            jQuery(this).children('li').last().addClass('single');
            jQuery(this).children('li:not(:last-child)').addClass('sub-item');
                jQuery('.sub-menu .sub-item').children('a').contents()
                .filter(function() { return this.nodeType == 3; })
                .replaceWith('');
        });
    });

    jQuery('.menu-item-has-children').each(function(){
        jQuery(this).click(function(){
            jQuery(this).siblings().removeClass('expand');
            jQuery(this).siblings().children('a').removeClass('expand');
            jQuery(this).siblings().children('.sub-menu').removeClass('sub-open');
        });
    });

    var ww = jQuery(window).width();
    if(ww <= 700) {
        jQuery('.sub-menu').hide();
        jQuery('.menu-item-has-children a').click(function() {
            //jQuery(this).siblings().children('.sub-menu').hide();
            if(!jQuery(this).parents('.menu-item-has-children').hasClass('expand')) {
                jQuery('.menu-item-has-children').removeClass('expand');
                jQuery('.menu-item-has-children .sub-menu').hide();
            }
            jQuery(this).parent().addClass('expand');
            jQuery(this).siblings('.sub-menu').slideToggle();
        });
    }


    // Scroll page
    if (window.location.hash) {
        var hash = window.location.hash;
    
        if (jQuery(hash).length) {
            jQuery('html, body').animate({
                scrollTop: jQuery(hash).offset().top - 100
            }, 900, 'swing');
        }
    }
    
    jQuery('.vetera-comp-product-detail-card__link').on('click', function() {
        //evt.preventDefault();
        var animateTarget = jQuery(this).attr('href');
        //console.log(animateTarget);
        jQuery('html,body').animate({scrollTop: jQuery(animateTarget).offset().top - 100},'slow');
    });
    
});