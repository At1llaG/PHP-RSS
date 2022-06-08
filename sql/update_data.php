<?php

  include('errors.php');
  include('connect_db.php');

  $condition = "title='Haber Basligi'";
  $sql = "UPDATE Entries SET $condition WHERE id=2";

  if ($conn->query($sql) === TRUE) {
    echo "Record updated";
    echo PHP_EOL;
  } 
  
  else {
    echo "Error updating record: " . $conn->error;
    echo PHP_EOL;
  }

?>