<?php

// Remote Database Connection
$host = 'remotemysql.com';
$server = 'remotemysql.com';
$user = 'U6gIaig4Rt';
$password = 'I997K7I7LT';
$dbname = 'U6gIaig4Rt';

// Development Connection
// $server = 'localhost';
// $user = 'ibsaa';
// $password = '';
// $dbname = 'dogsearch';

// Development Connection
$conn = mysqli_connect($server, $user, $password, $dbname);

if (!$conn){
  echo 'Connection failed';
}