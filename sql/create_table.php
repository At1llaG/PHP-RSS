<?php

//include('errors.php');
//include('connect_db.php');

// sql to create table

//CREATE TABLE deneme (`x` INT) CHARACTER SET latin5 COLLATE latin5_turkish_ci

function createTable($conn, $tableName) {

  $sql = "CREATE TABLE $tableName (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title TEXT,
    link TEXT,
    media TEXT,
    meta_description TEXT, /* description is a reserved word */
    content TEXT,
    pubDate TEXT /*, reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP */
    ) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci"; 
    
    if ($conn->query($sql) === TRUE) {
      echo "Table $tableName created successfully";
    } else {
      echo "Error creating table: " . $conn->error;
    }


}



//$conn->close();

?>