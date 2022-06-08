<?php

    //include_once(dirname( dirname(__FILE__) ) . '/config/sql_conf.php');
    include_once(dirname( dirname(__FILE__) ) . '/sql/connect_mysql.php');
    include_once(dirname( dirname(__FILE__) ) . '/sql/disconnect_mysql.php');
    include_once(dirname( dirname(__FILE__) ) . '/sql/create_db.php');
    include_once(dirname( dirname(__FILE__) ) . '/sql/create_table.php');

    $conf = new SqlConf();

    $dbname = $conf->getDatabase();
    $tableName = $conf->getTableName();

    $conn = connectMysql();

    if (empty (mysqli_fetch_array(mysqli_query($conn,"SHOW DATABASES LIKE '$dbname'")))) 
    {
        echo "DB not exist"; 
        echo PHP_EOL;

        createDatabase($conn, $dbname);
    }

    else {
        echo "DB exist";
        echo PHP_EOL;

        $conn -> select_db("$dbname");

        if ($result = $conn->query( "SHOW TABLES LIKE '".$tableName."'" )) 
        {
            if($result->num_rows == 1) 
            {
                echo "Table exists";
                echo PHP_EOL;
            }

            else {
                echo "Table does not exist";
                echo PHP_EOL;

                createTable($conn, $tableName);
            }
        }
        
    }

    disconnect($conn);

?>