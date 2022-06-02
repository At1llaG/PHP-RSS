<?php

    include('rss_sources.php');

    $context = stream_context_create(
        array(
            'http' => array(
                'max_redirects' => 3
            )
        )
    );


    foreach ($websites as $key => $value) {
        try {
            $content = file_get_contents($value, false, $context);
            //$content = file_get_contents($value);
    
            // Instantiate XML element
            $a = new SimpleXMLElement($content);
         
            
            foreach($a->channel->item as $entry) {
                //echo "<li><a href='$entry->link' title='$entry->title'>" . $entry->title . "</a></li>";
                
                //echo "$key $entry->link \n";
                echo "$key $entry->guid \n";
                //echo "$key $entry->pubDate \n";
                //echo "$key $entry->title \n";
                //echo "$key $entry->description \n";
                //echo "$key $entry->enclosure \n";
                //echo "$key $entry->media_content \n";
                //echo "$key $entry->media_description \n";
                //echo "$key $entry->media_credit \n";
                //echo "$key $entry->content \n";






                /*
                if($entry->link){
                    echo "$key $entry->link \n";
                }
                else if($entry->atom){
                    echo "$key $entry->atom \n";
                }
                */

                //echo "$key $entry->link \n";
            }

            //var_dump( $a->channel->item->link );

            /*  
            foreach($a->channel->item as $entry) {
                //echo "<li><a href='$entry->link' title='$entry->title'> \n" . $entry->title . "</a></li>";
                echo "$key $entry->title' \n";
            } */

            echo "<ul>";

        } catch (Exception $e) {
            echo "Exception at $key";
        }
        echo PHP_EOL;
    }


    //$content = file_get_contents('http://example.org/', false, $context);

    // foreach ($websites as $key => $value) {
        
    //     $content = file_get_contents($value, false, $context);
    //     //$content = file_get_contents($value);

    //     // Instantiate XML element
    //     $a = new SimpleXMLElement($content);
     
    //     echo "<ul>";
     
    //     foreach($a->channel->item as $entry) {
    //         //echo "<li><a href='$entry->link' title='$entry->title'>" . $entry->title . "</a></li>";
    //         echo "<li><a href='$entry->link' \n</a></li>";
    //     }


    // }




?>