jQuery(document).ready(function() {
  var $integrationListWrap = jQuery('.vetera-integration-body');

  if($integrationListWrap.length) {
    if(window.location.search || window.location.pathname == '/integrations/') {
      jQuery('html, body').animate({ scrollTop: $integrationListWrap.offset().top - 120}, 600);
    }
  }
});