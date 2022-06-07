<?php

    include(dirname( dirname(__FILE__) ) . '/config/sql_conf.php');
    include('clear_table.php');
    include('connect_db.php');

    $conf = new SqlConf();

    $dbname = $conf->getDbName();
    $tableName = $conf->getTableName();

?>