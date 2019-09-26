
$(document).ready(function () {

	$("#ciForm").on('submit', function(event)
	{
		if ($('#ciForm').valid()) {
			event.preventDefault();

			var ciForm = $(this);

			// Getting fields
			var name = $("#name").val();
			var birthday = $("#birthday").val();
			var email = $("#email").val();
			var favorite_color = $("#favorite_color").val();

			// Making ajax request for create record
			$.ajax(
				{
					type: "post",
					url: ciForm.attr('action'),
					data: {
						name: name,
						birthday: birthday,
						email: email,
						favorite_color: favorite_color
					},
					success: function (response) {

						$("#message").html(response.message);
						if (response.status == 'success') {
							$("#message").removeClass("alert-danger");
							$("#message").addClass("alert alert-success");
							if (response.action == 'create') {
								$('input').val("");
							}
						} else {
							$("#message").removeClass("alert-success");
							$("#message").addClass("alert alert-danger");

						}
					},
					error: function () {
						$("#message").html("Invalide!");
						$("#message").removeClass("alert-success");
						$("#message").addClass("alert alert-danger");
					}
				}
			);
		}
	});

});
