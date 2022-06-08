<?php

  include('errors.php');
  include('connect_db.php');

  $sql = "SELECT id, title, link, media, meta_description, content, pubDate FROM Entries";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc())
    {
      echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"];
      echo PHP_EOL;
    }

  } 

  else {
    echo "No results";
    echo PHP_EOL;
  }

?>