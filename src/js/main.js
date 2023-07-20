/* Passive events listener */ 
jQuery.event.special.touchstart = {
  setup: function( _, ns, handle ){
      this.addEventListener("touchstart", handle, { passive: true });
  }
};

/* Main scripts */
jQuery(document).ready(function() {
  console.log('jQuery is working');

  mobileMenu();

  /* Initializing accordions */ 
  jQuery( function() {
    jQuery( "#accordion" ).accordion();
  } );

  /* Initializing tabs */ 
  jQuery( "#tabs2" ).tabs();

  /* Title attribute for all images */ 
  jQuery('img').each(function(){
  var imageTitle = jQuery(this).attr('alt');
    if(imageTitle != "") {
      jQuery(this).attr('title', imageTitle)
    }
  });

});