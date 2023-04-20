$(document).ready(function () {

	if ($('#residential').val() == "Residential") {

		if ($("#input_method").val() == "Unit") {
			$("#click").click(function () {
				var unit = $("#unit").val();

				$("#bill").text(unit * 7);
				$("#kw").text((unit / 30 / 4).toFixed(2))
				var amount = $("#kw").text();
				conditions(amount);


				$("#area").text((amount * 100).toFixed())
				$("#generation").text((((amount * 4) * 30) * 12).toFixed(2))

			})
		}

		$("#input_method").change(function () {
			selectedCountry = $(this).children("option:selected").val();
			if (selectedCountry == "Electricity Bill") {
				$("#unit").val("");
				$("#click").click(function () {
					var unitValue = parseFloat($("#unit").val() / 7);
					var vott = (unitValue / 30 / 4).toFixed(2)
					$("#kw").text(vott);
					$("#bill").text($("#unit").val());
					conditions(vott);

					$("#area").text((vott * 100).toFixed())
					$("#generation").text((((vott * 4) * 30) * 12).toFixed(2))
				})

			}

		});


		function conditions(amount) {


			if (amount >= 1 && amount <= 1.50) {

				$("#rupiya").text((amount * 468227).toFixed(2)).prepend("₹ ")
			}
			else if (amount > 0 && amount <= 0.99) {
				$("#rupiya").text("-")
			}

			else if (amount >= 1.51 && amount <= 2.50) {
				$("#rupiya").text(((amount * 46555) - ((amount * 46555) * 40) / 100).toFixed(2)).prepend("₹ ")

			}
			else if (amount >= 2.51 && amount <= 3.2) {
				$("#rupiya").text(((amount * 46337) - ((amount * 46337) * 40) / 100).toFixed(2)).prepend("₹ ")

			}
			else if (amount >= 3.3 && amount <= 3.5) {

				$("#rupiya").text(((amount * 46337) - (((((3 * 46337) * 40) / 100)) + (((((amount - 3) * 46337) * 20) / 100)))).toFixed(2)).prepend("₹ ")
			}
			else if (amount >= 3.51 && amount <= 4.50) {

				$("#rupiya").text(((amount * 45738) - (((((3 * 45738) * 40) / 100)) + (((((amount - 3) * 45738) * 20) / 100)))).toFixed(2)).prepend("₹ ")
			}
			else if (amount >= 4.51 && amount <= 5.50) {

				$("#rupiya").text(((amount * 45030) - (((((3 * 45030) * 40) / 100)) + (((((amount - 3) * 45030) * 20) / 100)))).toFixed(2)).prepend("₹ ")
			}
			else if (amount >= 5.51 && amount <= 6) {
				$("#rupiya").text(((amount * 44006) - (((((3 * 44006) * 40) / 100)) + (((((amount - 3) * 44006) * 20) / 100)))).toFixed(2)).prepend("₹ ")

			}
			else if (amount >= 6.1 && amount <= 10) {
				$("#rupiya").text(((amount * 43005) - (((((3 * 43005) * 40) / 100)) + (((((amount - 3) * 43005) * 20) / 100)))).toFixed(2)).prepend("₹ ")

			}
			else if (amount >= 10.1 && amount <= 25) {
				$("#rupiya").text(((amount * 38006) - (((((3 * 38006) * 40) / 100)) + (((((amount - 3) * 38006) * 20) / 100)))).toFixed(2)).prepend("₹ ")

			}
			else if (amount >= 25.1 && amount <= 50) {
				$("#rupiya").text(((amount * 37505) - (((((3 * 37505) * 40) / 100)) + (((((amount - 3) * 37505) * 20) / 100)))).toFixed(2)).prepend("₹ ")

			}


		}





	}





	$("#select").change(function () {
		selectedCountry = $(this).children("option:selected").val();
		if (selectedCountry == "Commercial" || selectedCountry == "Industrial") {
			$("#unit").val("");
			$("#click").click(function () {
				var unitValue = $("#unit").val() * 8
				var commercial_bill = ($("#unit").val() / 30 / 4).toFixed(2)
				$("#kw").text(commercial_bill);
				$("#bill").text(unitValue);
				// var commercial_bill = $('#kw').text();
				$("#rupiya").text(commercial_bill * 41000).prepend("₹ ")


				$("#area").text((commercial_bill * 100).toFixed())
				$("#generation").text((((commercial_bill * 4) * 30) * 12).toFixed(2))
			})


		}
		$("#input_method").change(function () {
			selectedCountry = $(this).children("option:selected").val();
			if (selectedCountry == "Electricity Bill") {
				$("#unit").val("");
				$("#click").click(function () {
					var unitValue = parseFloat($("#unit").val() / 8);
					var vott = (unitValue / 30 / 4).toFixed(2)
					$("#kw").text(vott);
					$("#bill").text($("#unit").val());
					$("#rupiya").text(vott * 41000).prepend("₹ ")

					$("#area").text((vott * 100).toFixed())
					$("#generation").text((((vott * 4) * 30) * 12).toFixed(2))
				})

			}
			selectedCountry = $(this).children("option:selected").val();
			if (selectedCountry == "Unit") {
				$("#unit").val("");
				$("#click").click(function () {
					var unitValue = $("#unit").val() * 8
					var commercial_bill = ($("#unit").val() / 30 / 4).toFixed(2)
					$("#kw").text(commercial_bill);
					$("#bill").text(unitValue);
					// var commercial_bill = $('#kw').text();
					$("#rupiya").text(commercial_bill * 41000).prepend("₹ ")


					$("#area").text((commercial_bill * 100).toFixed())
					$("#generation").text((((commercial_bill * 4) * 30) * 12).toFixed(2))
				})
			}

		});





	});



})