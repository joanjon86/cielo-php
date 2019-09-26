
$(document).ready(function() {

	jQuery.validator.addMethod("validDate", function(value, element) {
		return this.optional(element) || moment(value,"DD/MM/YYYY").isValid();
	}, "Please enter a valid date in the format DD/MM/YYYY");

	// Initialize form validation on the registration form.
	// It has the name attribute "registration"
	$("#ciForm").validate({
		// Specify validation rules
		rules: {
			// The key name on the left side is the name attribute
			// of an input field. Validation rules are defined
			// on the right side
			name: "required",
			birthday: "required",
			email: {
				required: true,
				// Specify that email should be validated
				// by the built-in "email" rule
				email: true
			},
			favorite_color: "required"
		},
		// Specify validation error messages
		messages: {
			name: "Please enter the name",
			birthday: "Please enter the birthday",
			email: "Please enter a valid email address",
			favorite_color: "Please enter the favorite color",
		}
	});
});
