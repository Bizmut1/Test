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
  	<div class="medium-6 columns panel radius" id="container">
  		
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
    		var emptyDate = new Date();
    		var date = new Date(r.sys.sunrise * 1000 + emptyDate.getTimezoneOffset() * 60000);
    		$('#container').html('<p>' + r.name + ', ' + r.sys.country );
    		$('#container').append( date.toUTCString()+ '</p>');
    		$('#container').append('<img src="http://openweathermap.org/img/w/' + r.weather[0].icon + '.png" />');
    		$('#container').append(r.weather[0].description);
    		$('#container').append('<p> Temperatóra: ' + r.main.temp + ' &deg;C </p>');
    		$('#container').append('<p> Wilgotność powietrza: ' + r.main.humidity + '% </p>');
    		$('#container').append('<p> Ciśnienie powietrza: ' + r.main.pressure + ' hPa </p>');
    		$('#container').append('<p> Temperatóra min. dnia: ' + r.main.temp_min + ' &deg;C </p>');
    		$('#container').append('<p> Temperatóra max. dnia: ' + r.main.temp_max + ' &deg;C </p>');
    		$('#container').append('<p> Wiatr: </p>' + 
    								'<p> Prędkość: ' + r.wind.speed + ' m/s </p>');
    	});
    });
  </script>
</body>
</html>