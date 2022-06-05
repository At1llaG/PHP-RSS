<?php

//include('errors.php');
//include('connect_db.php');

/* $sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')"; */

function insertData($conn, $query) {

  if ($conn->query($query) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $query . "<br>" . $conn->error;
  }
  
}


//$conn->close();

?>