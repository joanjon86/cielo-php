
$(document).ready(function () {

	$("div#list").on('click', "a.ciDelete",function (event) {
		event.preventDefault();

		if(confirm('Do you want to Delete this record ?')) {
			// Getting field with record id to update
			var idsele = $(this).attr("href");

			// Making ajax request for update record
			$.ajax(
				{
					type: "POST",
					url: "index.php/cielo/delete/" + idsele,
					data: {
						id: idsele
					},
					success: function (response) {

						$("#message").html(response.message);
						if (response.status == 'success') {
							$("#message").removeClass("alert-danger");
							$("#message").addClass("alert alert-success");
							window.location.reload();
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
	})

});
