<?php

  function insertMultiple($conn, $query) {

    if ($conn->multi_query($query) === TRUE) {
      echo "New records created successfully";
      echo PHP_EOL;
    } else {
      echo "Error: " . $query . PHP_EOL . $conn->error;
      echo PHP_EOL;
    }
    
  }

?>