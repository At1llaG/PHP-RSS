<?php

    function disconnect($conn) {
        $conn->close();
        echo "Disconnected.";
        echo PHP_EOL;
    }

?>