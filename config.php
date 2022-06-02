<?php

require_once 'vendor/autoload.php';

// init configuration
$clientID = '25547381025-0q99rb54b8hlnlvpmu50cmsea3blk2h2.apps.googleusercontent.com';
$clientSecret = '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';
$redirectUri = 'http://localhost/google_Login/Using_google/welcome.php';


// create Client Request to access Google API
$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile");


// Connect to database
$hostname = "localhost";
$username = "root";
$password = "";
$database = "google_login";

$con = mysqli_connect($hostname, $username, $password, $database);