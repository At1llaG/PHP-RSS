<?php

    include(dirname( dirname(__FILE__) ) . '/config/errors.php');
    include(dirname( dirname(__FILE__) ) . '/sql/connect_mysql.php');
    include(dirname( dirname(__FILE__) ) . '/sql/insert_multiple.php');

    function rssToSql($title, $link, $media, $meta_description, $content, $pubDate) {
        $conn = connectMysql();
        
        $query = "INSERT INTO $tableName
            (title, link, media, meta_description, content, pubDate) VALUES 
            ($title, $link, $media, $meta_description, $content, $pubDate);";

        insertMultiple($conn, $query);

    }


?>