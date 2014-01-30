<?php
	$url = 'api.openweathermap.org/data/2.5/weather?q=London,uk&lang=pl&units=metric';
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

	$response = curl_exec($ch);

	curl_close($ch);

	$data = json_decode($response);
	/*echo '<pre>';
	print_r($data); // do wyswietlania zawartosci
	echo date('h:i:s', $data->sys->sunrise);
	echo '</pre>';*/

	//echo '<img src="http://openweathermap.org/img/w/' . $data->weather[0]->icon . '.png" />';
	//echo $data->weather[0]->description;

	die($response);
?>