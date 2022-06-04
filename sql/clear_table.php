<?php

//TRUNCATE TABLE tablename


function clearTable($conn, $tableName) {

    $sql = "TRUNCATE TABLE $tableName";

    if ($conn->query($sql) === TRUE) {
        echo "cleared table";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

}



//$conn->close();

?>