<?php
$client = new http\Client;
$request = new http\Client\Request;

$body = new http\Message\Body;
$body->append(new http\QueryString([
	'q' => 'Hello, world!',
	'target' => 'es',
	'source' => 'en'
]));

$request->setRequestUrl('https://google-translate1.p.rapidapi.com/language/translate/v2');
$request->setRequestMethod('POST');
$request->setBody($body);

$request->setHeaders([
	'content-type' => 'application/x-www-form-urlencoded',
	'Accept-Encoding' => 'application/gzip',
	'X-RapidAPI-Host' => 'google-translate1.p.rapidapi.com',
	'X-RapidAPI-Key' => 'null'
]);

$client->enqueue($request)->send();
$response = $client->getResponse();

echo $response->getBody();

?>
https://api.openweathermap.org/data/2.5/weather?q=jaipur&appid=858f5b58335f171693fce050bc3a39ef


58a3f4c68a6a8436ca5cfb7c53e24080
