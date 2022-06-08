<?php

  include_once(dirname( dirname(__FILE__) ) . '/config/errors.php');
  include_once(dirname( dirname(__FILE__) ) . '/sql/connect_db.php');
  include_once(dirname( dirname(__FILE__) ) . '/config/sql_conf.php');

  $conf = new SqlConf();

  $dbname = $conf->getDatabase();
  $tableName = $conf->getTableName();
  $conn = connectDatabase();

  $condition = "id=100";
  $sql = "SELECT id, title, link, media, meta_description, content, pubDate FROM $tableName WHERE $condition";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) 
    {
      echo "id: " . $row["id"]. "<br>" . " - Title: " . $row["title"]. "<br>" . " - Link: " . $row["link"] . "<br><br>";
      echo PHP_EOL;
    }

  }

  else {
    echo "0 results";
    echo PHP_EOL;
  }

?>