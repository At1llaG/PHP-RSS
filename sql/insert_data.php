<?php

  function insertData($conn, $query) {

    if ($conn->query($query) === TRUE) {
      echo "New record created successfully";
      echo PHP_EOL;
    } else {
      echo "Error: " . $query . PHP_EOL . $conn->error;
      echo PHP_EOL;
    }
    
  }

?>