<?php

include(dirname( dirname(__FILE__) ) . '/config/errors.php');
//include_once('connect_mysql.php');
//include('connect_mysql.php');

//echo "$conn";

// CREATE DATABASE mydb
//   DEFAULT CHARACTER SET utf8
//   DEFAULT COLLATE utf8_general_ci;

function createDatabase($conn, $dbName) {
  $sql = "CREATE DATABASE $dbName DEFAULT CHARACTER SET utf8 DEFAULT COLLATE utf8_general_ci;";



  if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
  } else {
    echo "Error creating database: " . $conn->error;
  }

  //$conn->close();
}

?>