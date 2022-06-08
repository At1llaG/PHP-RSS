<?php

  function insertMultiple($conn, $query) {

    if ($conn->multi_query($query) === TRUE) {
      echo "New records created successfully";
    } else {
      echo "Error: " . $query . "<br>" . $conn->error;
    }
    
  }

?>