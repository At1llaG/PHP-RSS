<?php

  include(dirname( dirname(__FILE__) ) . '/config/errors.php');

  function createDatabase($conn, $dbName) {
    //$sql = "CREATE DATABASE $dbName DEFAULT CHARACTER SET utf8 DEFAULT COLLATE utf8_general_ci;"; 
    $sql = "CREATE DATABASE $dbName DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;"; 

    if ($conn->query($sql) === TRUE) {
      echo "Database created successfully";
    } else {
      echo "Error creating database: " . $conn->error;
    }

    //$conn->close();
  }

?>