<?php

$server = 'localhost';
$user = 'ibsaa';
$password = '';
$dbname = 'dogsearch';

// Development Connection
$conn = mysqli_connect($server, $user, $password, $dbname);

if (!$conn){
  echo 'Connection failed';
}