<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" >

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Foundation 5</title>

	<!-- If you are using CSS version, only link these 2 files, you may add app.css to use for your overrides if you like. -->
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/foundation.css">

	<!-- If you are using the gem version, you need this only -->
	<link rel="stylesheet" href="css/app.css">

	<script src="js/vendor/modernizr.js"></script>

</head>
<body>

	<!-- body content here -->

	<div class="row">

		<div class="medium-6 columns">	
			<ul class="medium-block-grid-2" id="container">
			</ul>
		</div>

		<div class="medium-6 columns">
		</div>
	</div>

	<script src="js/vendor/jquery.js"></script>
	<script src="js/foundation.min.js"></script>
	<script>
	$(document).foundation();
	$(document).ready(function(){
		$.ajax({
			url: 'getdata.php',
			dataType: 'json'
		}).done(function(r){
			$('#container').append('<li class="panel radius">' + formatData(r) + '</li>');
		});
	});

	function formatData(r) {
		var out = '';

		var emptyDate = new Date();
		var date = new Date(r.sys.sunrise * 1000 + emptyDate.getTimezoneOffset() * 60000);

		out += '<p>' + r.name + ', ' + r.sys.country;
		out +=  date.toUTCString()+ '</p>';
		out += '<img src="http://openweathermap.org/img/w/' + r.weather[0].icon + '.png" />';
		out += r.weather[0].description;
		out += '<p> Temperatóra: ' + r.main.temp + ' &deg;C </p>';

		return out;
	}
	</script>
</body>
</html>