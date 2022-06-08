<?php

  include('errors.php');
  include('connect_db.php');

  $sql = "DELETE FROM Entries WHERE id=3";

  if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
  } else {
    echo "Error deleting record: " . $conn->error;
  }

  $conn->close();
  
?>