<?php
require 'vendor/autoload.php';

$client = new Google_Client();

$client->setClientId('ISI_CLIENT_ID_KAMU');
$client->setClientSecret('ISI_CLIENT_SECRET_KAMU');
$client->setRedirectUri('http://localhost/percobaan/google-callback.php');

$client->addScope("email");
$client->addScope("profile");

header('Location: ' . $client->createAuthUrl());
exit;