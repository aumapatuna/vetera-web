/**
 * Sub menu toggle
 */
jQuery(document).ready(function(){
  
  var $dropdown = jQuery('.vetera-header__nav__item--has-dropdown');
  var $dropsingle = jQuery('.vetera-header__nav__dropdown-list-item--single');
  var $dropitem = jQuery('.vetera-header__nav__dropdown-list-item');

  $dropdown.click(function() {
    //console.log('CHILD TOGGLE CLICKED');
    jQuery(this).toggleClass('expanded');
    
    jQuery(this).children('.sub-menu').toggleClass('sub-open');
    jQuery(this).children('a').addClass('vetera-header__nav__item-link vetera-header__nav__item-link--with-arrow txt-md-dark');
  });

  $dropdown.children('.sub-menu').addClass('vetera-header__nav__dropdown-list');
  $dropdown.children('a').addClass('vetera-header__nav__item-link vetera-header__nav__item-link--with-arrow txt-md-dark');

  jQuery('.vetera-header__nav__item--has-dropdown-three').children('ul').addClass('vetera-header__nav__dropdown-list--three-col');
  $dropitem.addClass('img-nav-lable');
  $dropitem.children('a').addClass('vetera-header__nav__dropdown-list-item-link');
  $dropsingle.removeClass('img-nav-lable');
  $dropsingle.children('a').addClass('link link--secondary d-inline-block');
 

  jQuery('.img-nav-lable').each(function(){
    jQuery(this).children('.vetera-header__nav__dropdown-list-item-link').contents()
    .filter(function() { return this.nodeType == 3; })
    .replaceWith('');
  });

  var ww = jQuery(window).width();
  if(ww <= 700) {
    jQuery('.vetera-header__nav__item-link--with-arrow').click(function() {
      //console.log('CHILD TOGGLE CLICKED');
      jQuery(this).toggleClass('expanded');
      jQuery(this).siblings('.vetera-header__nav__dropdown-list').slideToggle();
    });
  }
  
});