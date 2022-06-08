<?php

    include_once(dirname( dirname(__FILE__) ) . '/sql/connect_mysql.php');
    include_once(dirname( dirname(__FILE__) ) . '/config/sql_conf.php');

    function getRssFromDatabase() {
        $conf = new SqlConf();

        $query = "";
        $dbname = $conf->getDatabase();
        $tableName = $conf->getTableName();
        $conn = connectMysql();
        $conn -> select_db("$dbname");
    
        $sql = "SELECT id, title, link, media, meta_description, content, pubDate FROM $tableName";
        $result = $conn->query($sql);
    
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<br><br><b>id:</b> ". $row["id"]. "<br><br> - <b>Title:</b> ". $row["title"] . "<br><br> - <b>Link:</b> ". $row["link"] . 
                    "<br><br> - <b>Media:</b> ". $row["media"]. "<br><br> - <b>Description:</b> <br><br>" . $row["meta_description"] . 
                    "<br><br> - <b>Content:</b> ". $row["content"]. "<br><br> - <b>PubDate:</b> " . $row["pubDate"] . "<br><br>";
            }
        } else {
            echo "0 results";
        }
    
        $conn->close();
    }

    getRssFromDatabase();

?>