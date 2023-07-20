jQuery(document).ready(function(){

    var ww = jQuery(window).width();

    // Language switcher
  if(ww <= 1199) {
    jQuery('.vetera-header__nav__language-switcher').addClass('mob-lang');
    jQuery('.wpml-ls-sidebars-language_switcher ul').appendTo('.lang-list');
  }

  if(ww > 1200) {
    jQuery('.wpml-ls-sidebars-language_switcher li').clone().appendTo('.lang-list');
    jQuery('.wpml-ls-sidebars-language_switcher').click(function() {
      jQuery('.lang-wrp').toggle().css('opacity', 1).toggleClass('active');
      jQuery('.wpml-ls-item-toggle').toggleClass('active');

      jQuery(document).mouseup(function(e) {
        var langwrp = jQuery('.lang-wrp');

        if(!langwrp.is(e.target) && langwrp.has(e.target).length === 0) {
          langwrp.toggle().css('opacity', 0);
          langwrp.toggle().removeClass('active');
          jQuery('.wpml-ls-item-toggle').removeClass('active');
        }
      });
    });
  }
});