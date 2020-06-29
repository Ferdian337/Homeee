<!DOCTYPE html>
<html>
<head>
	<title>JSON in PHP and JS</title>
	<script type="text/javascript" src="jquery-3.5.1.min.js "></script>
</head>
<body>
	<!-- <script type="text/javascript">
		var emp1 = {};

		emp1.id = 1;
		emp1.name = 'Durgesh';
		emp1.addr = 'Pune';

		console.log(emp1)
		$.ajax({
			url:"readJson.php",
			method: "post",
			data: emp1,
			success: function(res) {
				console.log(res);
			}
		})
	</script> -->
	<script type="text/javascript">
		// Set new default font family and font color to mimic Bootstrap's default styling
		// Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
		// Chart.defaults.global.defaultFontColor = '#858796';
		
		// Pie Chart Example
		var ctx = {};
		var myPieChart = new Chart(ctx, {
		type: 'doughnut',
		data: {
		labels: ["Pria", "Wanita"],
		datasets: [{
		data: [55, 30],
		backgroundColor: ['#4e73df', '#36b9cc'],
		hoverBackgroundColor: ['#2e59d9', '#2c9faf'],
		hoverBorderColor: "rgba(234, 236, 244, 1)",
		}],
		},
		options: {
		maintainAspectRatio: false,
		tooltips: {
		backgroundColor: "rgb(255,255,255)",
		bodyFontColor: "#858796",
		borderColor: '#dddfeb',
		borderWidth: 1,
		xPadding: 15,
		yPadding: 15,
		displayColors: false,
		caretPadding: 10,
		},
		legend: {
		display: false
		},
		cutoutPercentage: 80,
		},
		});
		console.log(ctx);

	</script>
</body>
</html>