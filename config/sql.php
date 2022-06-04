<?php

include('connect_mysql.php');
include('create_db.php');
include('create_table.php');

$dbname='saglikdb';
$tableName = "tablename2";

if (empty (mysqli_fetch_array(mysqli_query($conn,"SHOW DATABASES LIKE '$dbname'")))) 
{
    echo "DB not exist<br>"; 
    createDatabase($conn, $dbname);
}
else
{
    echo "DB exist<br>";

    $conn -> select_db("$dbname");


    echo "3<br>";

    
    if ($result = $conn->query( "SHOW TABLES LIKE '".$tableName."'" )) {
        echo "4<br>";
        if($result->num_rows == 1) {
            echo "Table exists";
        }
        else {
            echo "Table does not exist";


            
            createTable($conn, $tableName);
        }
    
    }
    
}

?>