/**
 * jquery.captec.validate - jQuery form validator for Captec Systems
 *
 *
 * @version 1 (10. Jan 2014)
 * @author Miramar Group - http://wwww.miramar-group.co.uk
 * @requires jQuery
 *
 */
 
 
$(document).ready(function() {

	function isValidEmailAddress(emailAddress) {
    var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
    return pattern.test(emailAddress);
};

	function bindValidation(form_name,fields,thanks_div) {
		$(".captec-button > button").bind( "click", function(event) {
		event.preventDefault();
		var result = true;
		$.each(fields,function(value) { 
			if($("#"+fields[value]).val() == "") {
				$("#"+fields[value]).addClass("contact-form-error");
				result = false;
			} else {
				if(fields[value] == "email") {
					if(isValidEmailAddress($("#email").val()) == false) {
						result = false;
						$("#"+fields[value]).addClass("contact-form-error");
					} else {
						$("#"+fields[value]).removeClass("contact-form-error");
					} 
				} else {
					$("#"+fields[value]).removeClass("contact-form-error");
				}
				
			}
		});
		if(result == true) {
			$("#valid").val("yes");
			//$("#"+form_name).submit();
			//$.post( "submit_form", { name: "", time: "2pm" } );
			$.post( "send_mail", $("#"+form_name).serialize()).done(function(data) {
				if(data == "ok") {
					$("#"+thanks_div).show();
					$("#"+form_name)[0].reset();
				} else {
					
				}
			});
		}
	});
	
	}

	
	bindValidation("contact_form",["name","email","message"],"contact_thanks");

	
});
		
	