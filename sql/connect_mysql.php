<?php

  include(dirname( dirname(__FILE__) ) . '/config/sql_conf.php');

  function connectMysql() {

    $conf = new SqlConf();

    $username = $conf->getUserName();
    $password = $conf->getPassword();

    $database = $conf->getDatabase();

    $hostname = $conf->getHostname();

    $conn = new mysqli($hostname, $username, $password);
    $conn->set_charset("utf8");

    if ($conn->connect_error) {
      die('Connect Error (' . $conn->connect_errno . ') '. $conn->connect_error);
    }

    return $conn;
  }

?>