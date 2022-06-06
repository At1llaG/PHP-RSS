<?php

    include_once(dirname( dirname(__FILE__) ) . '/sql/connect_mysql.php');
    include_once(dirname( dirname(__FILE__) ) . '/config/sql_conf.php');

    $conf = new SqlConf();

    $query = "";
    $dbname = $conf->getDbName();
    $tableName = $conf->getTableName();
    $conn = connectMysql();
    $conn -> select_db("$dbname");

    $sql = "SELECT id, title, link, media, meta_description, content, pubDate FROM $tableName";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "id: ". $row["id"]. " - Title: ". $row["title"] . " - Link: ". $row["link"] . 
                " - Media: ". $row["media"]. " - Description: ". $row["meta_description"] . 
                " - Content: ". $row["content"]. " - PubDate: " . $row["pubDate"] . "\n<br><br>";
        }
    } else {
        echo "0 results";
    }

    $conn->close();

?>