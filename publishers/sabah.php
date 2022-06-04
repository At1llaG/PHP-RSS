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


    function sabah($key, $value) {

        $context = stream_context_create(
            array(
                'http' => array(
                    'max_redirects' => 5
                )
            )
        );

        try {

            $content = file_get_contents($value, false, $context);
            $a = new SimpleXMLElement($content);
            
            foreach($a->channel->item as $entry) {
                
                $title = $entry->title;
                $link = $entry->link;
                $description = $entry->description;
                $guid = $entry->guid;
                $enclosure_url = $entry->enclosure->attributes()->{'url'};
                $media_content_url = $entry->children('media', true)->content->attributes()->{'url'};
                $pubDate = $entry->pubDate;


                echo "$title\n";
                echo "$link\n";
                echo "$description\n";
                echo "$guid\n";
                echo "$enclosure_url\n";
                echo "$media_content_url\n";
                echo "$pubDate\n";
                


                //print_r($entry->link);
                //print_r($entry->description);
                //print_r($entry->guid);
                //print_r($entry->children('atom', true)->link->attributes()->{'href'});
                //print_r($entry->children('atom', true)->link->attributes()->{'href'});
                //print_r($entry->pubDate);

                //echo "$title \n$link \n$ \n$ \n$ \n$ \n$";


                //print_r($entry->children('atom', true)->link->attributes()->{'href'});


            }

            echo "<ul>";

        } catch (Exception $e) {
            echo "Exception at $key";
        }

    }



?>