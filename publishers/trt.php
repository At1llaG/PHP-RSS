<?php

    /*
    title
    description
    link
    enclosure url=
    */

    include_once(dirname( dirname(__FILE__) ) . '/sql/connect_mysql.php');
    include_once(dirname( dirname(__FILE__) ) . '/sql/disconnect_mysql.php');
    include_once(dirname( dirname(__FILE__) ) . '/sql/insert_multiple.php');
    include_once(dirname( dirname(__FILE__) ) . '/config/sql_conf.php');

    function trt($key, $value) {

        $context = stream_context_create(
            array(
                'http' => array(
                    'max_redirects' => 5
                )
            )
        );

        $conf = new SqlConf();

        $query = "";
        $dbname = $conf->getDatabase();
        $tableName = $conf->getTableName();
        $conn = connectMysql();
        $conn -> select_db("$dbname");

        try {

            $content = file_get_contents($value.'?'.mt_rand(), false, $context);
            $a = new SimpleXMLElement($content);

            foreach($a->channel->item as $entry) {
                
                $title = $entry->title;
                $link = $entry->link;
                $media = $entry->enclosure->attributes()->{'url'};
                $meta_description = $entry->description;

                $title = addslashes(htmlspecialchars_decode($title, ENT_QUOTES));
                $link = addslashes(htmlspecialchars_decode($link, ENT_QUOTES));
                $media = addslashes(htmlspecialchars_decode($media, ENT_QUOTES));
                $meta_description = addslashes(htmlspecialchars_decode($meta_description, ENT_QUOTES));

                $result = $conn->query("SELECT * from $tableName WHERE link='$link'");

                if ($result->num_rows > 0) {
                    echo "DATA exists";
                    echo PHP_EOL;
                    
                    echo "$key $title";
                    echo PHP_EOL;
                }
                else {
                    echo "DATA does not exist";
                    echo PHP_EOL;

                    $query .= "INSERT INTO $tableName
                        (title, link, media, meta_description, content, pubDate) VALUES 
                        ('$title', '$link', '$media', '$meta_description', NULL, NULL); ";

                }
                
            }

            if($query != "")
            {
                insertMultiple($conn, $query);
            }

            echo PHP_EOL;

        } catch (Exception $e) {
            echo "Exception at $key $e";
            echo PHP_EOL;
        }

        disconnect($conn);

    }


?>