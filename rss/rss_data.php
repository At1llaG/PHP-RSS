<?php

    include(dirname( dirname(__FILE__) ) . '/config/rss_sources.php');

    foreach ($websites as $key => $value) {
        try {
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
                    milliyet($key, $value);
                    break;
                case "mynet":
                    mynet($key, $value);
                    break;
                case "ntv":
                    ntv($key, $value);
                    break;
                case "sabah":
                    sabah($key, $value);
                    break;
                case "saglikHaberAjansi":
                    saglikHaberAjansi($key, $value);
                    break;
                case "sektorel":
                    sektorel($key, $value);
                    break;
                case "sozcu":
                    sozcu($key, $value);
                    break;
                case "trt":
                    trt($key, $value);
                    break;
                default:
                    echo "There was an error in your request!";
            }
        
            echo PHP_EOL;

        } catch (Exception $e) {
            echo "Exception at $key $e";
            echo PHP_EOL;
        }

        echo PHP_EOL;
    }

?>