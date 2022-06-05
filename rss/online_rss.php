<?php

    $content = file_get_contents("https://www.sozcu.com.tr/rss/saglik.xml");

    // Instantiate XML element
    $a = new SimpleXMLElement($content);
        
    echo "<ul>";
        
    foreach($a->channel->item as $entry) {
    //echo "<li><a href='$entry->link' title='$entry->title'>" . $entry->title . "</a></li>";
    echo "<li><a href='$entry->link' \n</a></li>";
    }

    echo "</ul>";

?>
