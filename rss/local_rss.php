<?php

    $xml=simplexml_load_file("saglik.xml") or die("Error: Cannot create object");

    print_r($xml);
    echo $movies->movie[0]->plot;

?>

