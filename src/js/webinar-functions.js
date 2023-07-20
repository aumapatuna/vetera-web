jQuery(document).ready(function() {

	/* Accordion function */ 
	var postgrid = jQuery('.vetera-seminare-page-grid__post');
	postgrid.first().addClass('active first');
	postgrid.first().children('.vetera-seminare-page-grid__acc-title').addClass('open');
	postgrid.first().children('.vetera-seminare-page-grid__acc-content').css('display', 'block');

	postgrid.each(function(){
			var acc_title = jQuery(this).children('.vetera-seminare-page-grid__acc-title');
			acc_title.click(function() {
					jQuery(this).parent().siblings().removeClass('active');
					//postgrid.removeClass('active');
					//postgrid.first().children('.vetera-seminare-page-grid__acc-title').removeClass('open');
					jQuery(this).parent().siblings().children('.vetera-seminare-page-grid__acc-title').removeClass('open');

					jQuery(this).parent().toggleClass('active');
					jQuery(this).parent().siblings().removeClass('active');
					jQuery(this).toggleClass('open');
					jQuery(this).parent().siblings().children().removeClass('open');
					jQuery(this).siblings('.vetera-seminare-page-grid__acc-content').slideToggle();
					jQuery(this).parent().siblings('.vetera-seminare-page-grid__post').children('.vetera-seminare-page-grid__acc-content').slideUp();

					jQuery(this).animate({ scrollTop: "300" });
			});
	});

	/* Mobile button function */ 
	jQuery('.seminare-toggle-btn').click(function(){
			jQuery('.vetera-seminare-page-grid__form').slideToggle();
	});
});