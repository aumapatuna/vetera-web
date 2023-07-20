/**
 * Mobile menu toggle
 */
function mobileMenu() {

  var $navBar = jQuery('.vetera-header__nav');

  jQuery('.vetera-header__mobile-menu-icon').click(function() {
    jQuery(this).toggleClass('vetera-header__mobile-menu-icon--active');
    jQuery('body').toggleClass('menu-fixed');
    $navBar.slideToggle();
  });

  if(window.matchMedia("(max-width: 700px)").matches) {
    jQuery('.menu-item-has-children').click(function() {
      //console.log('CHILD TOGGLE CLICKED');
      jQuery(this).toggleClass('expand');
		jQuery(this).siblings().children('a').toggleClass('expand');
      jQuery(this).siblings('.sub-menu').slideToggle();
    });
  }

  jQuery('.menu-item-has-children').siblings('.sub-menu').hide();
  jQuery('.menu-item-has-children').click(function() {
    //console.log('CHILD TOGGLE CLICKED');
    jQuery(this).toggleClass('expand');
	  jQuery(this).siblings().children('a').toggleClass('expand');
    
    jQuery(this).siblings('.sub-menu').toggleClass('sub-open');
  });

}