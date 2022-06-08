<?php

  function insertData($conn, $query) {

    if ($conn->query($query) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $query . "<br>" . $conn->error;
    }
    
  }

?>