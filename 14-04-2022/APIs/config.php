<?php

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('632538849204-kturqibg4ijtfm5c84qc92c7ug3gt4tv.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/addweb/14-04-2022/APIs/index12.php');

//
$google_client->addScope('email');

$google_client->addScope('profile');

//start session on web page
session_start();

?>