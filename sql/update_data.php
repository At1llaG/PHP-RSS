<?php

  include('errors.php');
  include('connect_db.php');

  $condition = "title='Haber Basligi'";
  $sql = "UPDATE MyGuests SET $condition WHERE id=2";

  if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
  } 
  
  else {
    echo "Error updating record: " . $conn->error;
  }

?>