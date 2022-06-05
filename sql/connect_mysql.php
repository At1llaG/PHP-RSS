<?php

//include_once('create_db.php');

function connectMysql() {
  $servername = "localhost:3306";
  $username = "root";
  $password = "password";

  // Create connection
  $conn = new mysqli($servername, $username, $password);

  $conn->set_charset("utf8");

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";

  return $conn;
}


?>