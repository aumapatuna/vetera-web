jQuery(window).scroll(function(){

  console.log('Sticky header is working');

  if (jQuery(window).scrollTop() >= 10) {
    jQuery('.vetera-header').addClass('vetera-header--fixed');
  }
  else {
    jQuery('.vetera-header').removeClass('vetera-header--fixed');
  }

});