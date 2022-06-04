<?php

include(dirname( dirname(__FILE__) ) . '/config/errors.php');
//include_once('connect_mysql.php');
//include('connect_mysql.php');

//echo "$conn";

function createDatabase($conn, $dbName) {
  $sql = "CREATE DATABASE $dbName";
  if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
  } else {
    echo "Error creating database: " . $conn->error;
  }

  //$conn->close();
}

?>