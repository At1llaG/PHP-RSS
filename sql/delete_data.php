<?php

  include('errors.php');
  include('connect_db.php');
  include_once(dirname( dirname(__FILE__) ) . '/sql/disconnect_mysql.php');

  //$condition = "id=3";
  function deleteData($conn, $tableNme, $condition) 
  {
    $sql = "DELETE FROM $tableNme WHERE $condition";

    if ($conn->query($sql) === TRUE) {
      echo "Record deleted successfully";
    } 
    
    else {
      echo "Error deleting record: " . $conn->error;
    }
  
    disconnect($conn);
  }

?>