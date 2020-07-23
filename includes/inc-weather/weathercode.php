<?php

error_reporting(0);

$weather = "";
$error = "";

if (isset($_GET['city'])) {

	$urlContents = file_get_contents("https://api.openweathermap.org/data/2.5/weather?q=" . urlencode($_GET['city']) . "&appid=81872b5d16c15b22620fe33fb6c33702");

	$weatherArray = json_decode($urlContents, true);

	if ($weatherArray['cod'] == 200) {

		$weather = "The weather in " . $_GET['city'] . " is currently '" . $weatherArray['weather'][0]['description'] . "'. ";

		$tempInCelcius = intval($weatherArray['main']['temp'] - 273);

		$weather .= " The temperature is " . $tempInCelcius . "&deg;C and the wind speed is " . $weatherArray['wind']['speed'] . "m/s.";
	} else {

		$error = "Could not find city - please try again.";
	}
}
