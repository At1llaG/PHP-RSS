<?php

    $xml=simplexml_load_file(dirname( dirname(__FILE__) ) . '/xml/sample.xml') or die("Error: Cannot create object");

    print_r($xml);

?>