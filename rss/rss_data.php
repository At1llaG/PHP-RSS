<?php

    include(dirname( dirname(__FILE__) ) . '/config/rss_sources.php');
    //include(dirname( dirname(__FILE__) ) . '/publishers/sabah.php');



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
            
            switch ($key) {
                case "ahaber":
                    ahaber($key, $value);
                    break;
                case "cnnturk":
                    cnnturk($key, $value);
                    break;
                case "enSonHaber":
                    enSonHaber($key, $value);
                    break;
                case "hastanePlus":
                    hastanePlus($key, $value);
                    break;
                case "hastanePlusGoz":
                    hastanePlus($key, $value);
                    break;
                case "milliyet":
                    //sabah($key, $value);
                    break;
                case "mynet":
                    //sabah($key, $value);
                    break;
                case "sabah":
                    //sabah($key, $value);
                    break;
                case "saglikHaberAjansi":
                    //sabah($key, $value);
                    break;
                case "sektorel":
                    //sabah($key, $value);
                    break;
                case "sozcu":
                    //sabah($key, $value);
                    break;
                case "trt":
                    //sabah($key, $value);
                    break;
                default:
                    echo "Your favorite color is neither red, blue, nor green!";
            }


            foreach($a->channel->item as $entry) {
                //echo "<li><a href='$entry->link' title='$entry->title'>" . $entry->title . "</a></li>";
                
                //echo "$key $entry->link \n";
                //echo "$key $entry->guid \n";
                //echo "$key $entry->pubDate \n";
                //echo "$key $entry->title \n";
                //echo "$key $entry->description \n";
                //echo "$key $entry->enclosure \n";
                //////var_dump( $entry->children('atom', true)->link->getAttribute('href'));
                //children('xhtml', true)
                ////////////////////////////////////////print_r($entry->children('atom', true)->link->attributes()->{'href'});
                //echo "$key $entry->media_description \n";
                //echo "$key $entry->media_credit \n";
                //echo "$key $entry->content \n";

                //foreach($a->channel[0]->attributes() as $a => $b) {
                //    echo $a,'="',$b,"\"\n";
                //}

                //$att = $entry->children('atom', true)->link->attributes()->{'href'};
                //echo $att['href'];




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