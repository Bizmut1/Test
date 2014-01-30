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
    		$('#container').html('<img src="http://openweathermap.org/img/w/' + r.weather[0].icon + '.png" />');
    	});
    });
  </script>
</body>
</html>