<?php
session_start();
require 'vendor/autoload.php';
include "koneksi.php";

$client = new Google_Client();

$client->setClientId('ISI_CLIENT_ID_KAMU');
$client->setClientSecret('ISI_CLIENT_SECRET_KAMU');
$client->setRedirectUri('http://localhost/percobaan/google-callback.php');

$token = $client->fetchAccessTokenWithAuthCode($_GET['code']);

if(isset($token['access_token'])){

  $client->setAccessToken($token['access_token']);

  $google_service = new Google_Service_Oauth2($client);
  $data = $google_service->userinfo->get();

  $email = $data['email'];
  $nama = $data['name'];

  // CEK USER
  $cek = mysqli_query($conn,"SELECT * FROM users WHERE email='$email'");
  $user = mysqli_fetch_assoc($cek);

  if(!$user){
    mysqli_query($conn,"INSERT INTO users (nama,email,password)
    VALUES ('$nama','$email','google')");
  }

  $_SESSION['login'] = true;
  $_SESSION['nama'] = $nama;

  header("Location: admin/admin.php");
  exit;
}