<?php

//include('errors.php');
//include('connect_db.php');

/* $sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Mary', 'Moe', 'mary@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Julie', 'Dooley', 'julie@example.com')"; */


function insertMultiple($conn, $query) {

  if ($conn->multi_query($query) === TRUE) {
    echo "New records created successfully";
  } else {
    echo "Error: " . $query . "<br>" . $conn->error;
  }
  
}

//$conn->close();
?>