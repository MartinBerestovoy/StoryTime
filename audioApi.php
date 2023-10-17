<?php

$_ENV = parse_ini_file(".env");

$curl = curl_init();

$text = "Hola, soy tincho."; // CAMBIAR
$lang = "es"; //espaniol

curl_setopt_array($curl, [
	CURLOPT_URL => "https://text-to-speech-api3.p.rapidapi.com/speak?text=$text&lang=$lang",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: text-to-speech-api3.p.rapidapi.com",
		"X-RapidAPI-Key: $_ENV[audio_api_key]"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
    $audioFilePath = 'hello_world_spanish.mp3';
    file_put_contents($audioFilePath, $response);
}
?>