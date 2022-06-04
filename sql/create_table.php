<?php

//include('errors.php');
//include('connect_db.php');

// sql to create table

function createTable($conn, $tableName) {

  $sql = "CREATE TABLE $tableName (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname TEXT NOT NULL,
    lastname TEXT NOT NULL,
    email TEXT,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    
    if ($conn->query($sql) === TRUE) {
      echo "Table $tableName created successfully";
    } else {
      echo "Error creating table: " . $conn->error;
    }


}



//$conn->close();

?>