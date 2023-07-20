jQuery(document).ready(function() {
    /* Select upload */
    jQuery('select').change(function() {
        jQuery(this).find(':selected').parent('select').addClass('selected')
        .siblings('option').removeClass('selected');
    });

    /* File upload */
    var fileId = jQuery('.file-903 input').attr('name');
    jQuery('.file-903 input').attr('id', fileId);

    /* Submit button */
    jQuery('.submit input').addClass('btn');

    /* Submit button */
    jQuery('.wpcf7-select').parent('span').addClass('arrow');

    /* Checkbox */
    jQuery('.checkmark').appendTo('.wpcf7-checkbox label');
    jQuery('.wpcf7-checkbox input').addClass('checkbox');

    /* Form calendar function */ 
    jQuery("#datepicker").datepicker({
        showOn: "button",
        buttonImageOnly: true,
        dateFormat: "dd/mm/yy",
        onSelect: function (date) {
            jQuery(this).addClass('filled');
            jQuery(this).siblings('.wpcf7-not-valid-tip').hide();
        }
    });

    jQuery("#datepicker").parent().addClass("datepicker-wrp");

    /* File upload button function */ 
    jQuery('.file label').insertAfter('.file input');
    jQuery('input[type="file"]').change(function () {
        if (jQuery(this).val() != "") {
            jQuery(this).addClass('uploaded');
            jQuery(this).parent().addClass('fill');
            jQuery('.max-file-size').fadeOut();
            jQuery(this).siblings('.wpcf7-not-valid-tip').hide();
        } else {
            jQuery(this).removeClass('uploaded');
            jQuery(this).parent().removeClass('fill');
            jQuery('.max-file-size').fadeIn();
            jQuery(this).siblings('.wpcf7-not-valid-tip').show();
        }
    });

    /* Text and text area validate function */ 
    jQuery('.wpcf7-text,.wpcf7-textarea, .wpcf7-select').focus(function(){
        if(jQuery(this).val() != '') {
            jQuery(this).addClass('filled');
            jQuery(this).siblings('.wpcf7-not-valid-tip').hide();
        } else {
            jQuery(this).removeClass('filled');
            jQuery(this).siblings('.wpcf7-not-valid-tip').show();
        }
    }).blur(function(){
        if(jQuery(this).val() != '') {
            jQuery(this).addClass('filled');
            jQuery(this).siblings('.wpcf7-not-valid-tip').hide();
        } else {
            jQuery(this).removeClass('filled');
            jQuery(this).siblings('.wpcf7-not-valid-tip').show();
        }
    });

    /* Telephone field validation function */ 
    jQuery('.wpcf7-tel').on('keyup', function(e) {
        e.target.value = e.target.value.replace(/[^\d]/, '');
        if (e.target.value.length === 10) {
        }
    });

    /* Email field validation function */ 
    jQuery('input[type="email"]').blur(function() {
        var valid = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/.test(this.value);
        jQuery(this).removeClass('filled');
        if(valid && (jQuery(this).val() != '')) {
            jQuery(this).addClass('filled');
            jQuery(this).siblings('.wpcf7-not-valid-tip').hide();
        } else {
            jQuery(this).removeClass('filled');
            jQuery(this).siblings('.wpcf7-not-valid-tip').show();
        }
    });

    /* Select box validation function */ 
    jQuery('.wpcf7-select').each(function(){
        jQuery(this).children('option:first').val('');
    });

    /* Check box validation function */ 
    jQuery( 'input[type="checkbox"]' ).click(function() {
        if(this.checked){
            jQuery(this).parents('.wpcf7-checkbox').parent().addClass('filled c_box');
            jQuery('.filled .wpcf7-not-valid-tip').hide();
        }
        if(!this.checked){
            jQuery(this).parents('.wpcf7-list-item').parent().removeClass('filled c_box');
            jQuery('.filled .wpcf7-not-valid-tip').show();
        }
    });
});