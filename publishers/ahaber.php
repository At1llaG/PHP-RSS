<?php



/*

title
link
description
guid
enclosure url=
media:content url=
category
pubDate

*/


    //include(dirname( dirname(__FILE__) ) . '/rss/rss_to_sql.php');
    include_once(dirname( dirname(__FILE__) ) . '/sql/connect_mysql.php');
    include_once(dirname( dirname(__FILE__) ) . '/sql/insert_multiple.php');

    function ahaber($key, $value) {

        $context = stream_context_create(
            array(
                'http' => array(
                    'max_redirects' => 5
                )
            )
        );

        $query = "";
        $dbname='saglikdb';
        $tableName = "tablename3";
        $conn = connectMysql();
        $conn -> select_db("$dbname");

        try {

            $content = file_get_contents($value, false, $context);
            $a = new SimpleXMLElement($content);

            
            

            foreach($a->channel->item as $entry) {
                
                $title = addslashes($entry->title);
                $link = addslashes($entry->link);
                $meta_description = addslashes($entry->description);
                $guid = addslashes($entry->guid);
                $media = addslashes($entry->enclosure->attributes()->{'url'}); //$enclosure_url
                $media_content_url = addslashes($entry->children('media', true)->content->attributes()->{'url'});
                $pubDate = addslashes($entry->pubDate);

                //echo "$meta_description\n";

/*                 if ($conn->query("SELECT EXISTS(SELECT * from $tableName WHERE link='$link');") === TRUE) {
                    echo "DATA ALREADY EX";
                } else {
                    echo "DATA DONT EXISTS";
                } */

                // "select count(id) from  plus_signup where link='$link'"
                // SELECT EXISTS(SELECT * from $tableName WHERE link='$link');
                // "SELECT * FROM table1 WHERE something"
                $result = $conn->query("SELECT * from $tableName WHERE link='$link'");

                if ($result->num_rows > 0) {
                    echo "DATA exists\n";

                echo "$title\n";
                echo "$link\n";
                //echo "$description\n";
                //echo "$guid\n";
                echo "$meta_description\n";
                echo "$media\n";
                echo "$pubDate\n";

                }
                else {
                    echo "DATA does not exist\n";

                    $query .= "INSERT INTO $tableName
                    (title, link, media, meta_description, content, pubDate) VALUES 
                    ('$title', '$link', '$media', '$meta_description', NULL, '$pubDate'); ";

                }
                
                

                

                //echo "$query";

/* 
                if ($conn->query($query) === TRUE) {
                    echo "New record created successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }  */

                //echo "$title\n";
                //echo "$link\n";
                //echo "$description\n";
                //echo "$guid\n";
                //echo "$enclosure_url\n";
                //echo "$media_content_url\n";
                //echo "$pubDate\n";

                //rssToSql($title, $link, $media, $meta_description, NULL, $pubDate);
                


                //print_r($entry->link);
                //print_r($entry->description);
                //print_r($entry->guid);
                //print_r($entry->children('atom', true)->link->attributes()->{'href'});
                //print_r($entry->children('atom', true)->link->attributes()->{'href'});
                //print_r($entry->pubDate);

                //echo "$title \n$link \n$ \n$ \n$ \n$ \n$";


                //print_r($entry->children('atom', true)->link->attributes()->{'href'});


            }

            /* $conn = connectMysql();*/
            
            
            
            if($query != "")
            {
                insertMultiple($conn, $query);
            }
            
           



            //$result = $conn->multi_query($query);
/* 
            if ($conn->multi_query($query) === TRUE) {
                echo "New records created successfully";
            } else {
                echo "Error: " . $query . "<br>" . $conn->error;
            } */

            echo "<ul>";

        } catch (Exception $e) {
            echo "Exception at $key $e";
        }

    }




?>