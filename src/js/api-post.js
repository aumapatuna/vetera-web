jQuery(document).ready(function(){
	var webinarlist = jQuery('.webinar-list').html();
	jQuery(webinarlist).appendTo('#menu-641');

	jQuery('.vetera-seminare-page-grid__form form').attr('action', '#');

	jQuery(".vetera-seminare-page-grid__form .wpcf7-form").on('submit', function(event){
		jQuery.ajax({
			async: true,
    	crossDomain: true,
			type: "POST",
			headers: {
        "Accept": "application/json",
        "Authorization": "Bearer OcmGtefhCUS6NeEdILRtrPOoDGZlpd3j5I4djnVN43uBYt9SaoiIHBb5YaLr"
    },
			url: 'https://api.edudip-next.com/api/webinars/'+jQuery('.webinar select').val()+'/register-participant/',
			dataType: 'application/json',
			//data: {"firstname":firstname, "lastname":lastname, "email":email},
			data: jQuery('.firstname input').val() + jQuery('.lastname input').val() + jQuery('.email input').val(),
			success: function(data) {
				console.log('https://api.edudip-next.com/api/webinars/'+jQuery('.webinar select').val()+'/register-participant/');
			}
		});
	});
});