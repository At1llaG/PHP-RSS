<?php

    $content = file_get_contents("https://www.ntv.com.tr/saglik.rss");
    $a = new SimpleXMLElement($content);
    
    foreach($a->entry as $entry) {
        echo "$entry->title";
        echo PHP_EOL;
    }

?>
