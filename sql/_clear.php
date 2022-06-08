<?php

    include('clear_table.php');
    include('connect_db.php');
    include_once(dirname( dirname(__FILE__) ) . '/config/sql_conf.php');

    $conf = new SqlConf();
    $tableName = $conf->getTableName();

    $conn = connectDatabase();
    clearTable($conn, $tableName);

?>