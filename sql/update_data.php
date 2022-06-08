<?php

  include_once(dirname( dirname(__FILE__) ) . '/config/errors.php');
  include_once(dirname( dirname(__FILE__) ) . '/sql/connect_db.php');
  include_once(dirname( dirname(__FILE__) ) . '/config/sql_conf.php');

  $conf = new SqlConf();

  $dbname = $conf->getDatabase();
  $tableName = $conf->getTableName();
  $conn = connectDatabase();

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