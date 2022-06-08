<?php

    function clearTable($conn, $tableName) {

        $sql = "TRUNCATE TABLE $tableName";

        if ($conn->query($sql) === TRUE) {
            echo "Table Cleared.";
            echo PHP_EOL;
        } 
        
        else {
            echo "Error: " . $sql . PHP_EOL . $conn->error;
            echo PHP_EOL;
        }

    }

?>