jQuery.validator.addMethod("usPhoneFormat", function(value, element) {
return this.optional(element) || /\d{1} [\(]\d{3}[\)] \d{3}[\-]\d{2}[\-]\d{2}/.test(value);
}, "Enter a valid phone number.");

$(document).ready(function() {
$("input[name='phone']").mask("+0 (000) 000-00-00");
$("input[name='phone']").on('keypress keyup keydown',function(e){
    if (e.which === 56 || e.which === 104) {
        if($(this).val()==''){
            e.preventDefault();
            $(this).val('+7')
        }
    }else {
        if($(this).val()==''){
            $(this).val('+7')
        }
    }
})
$('a[href^="#"]').click(function( event ) {
    event.preventDefault();
    $("html, body").animate({ scrollTop: $($(this).attr("href")).offset().top }, 500);
});

});