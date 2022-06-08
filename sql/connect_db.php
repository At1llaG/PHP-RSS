<?php

	include(dirname( dirname(__FILE__) ) . '/config/sql_conf.php');

	function connectDatabase() {

		$conf = new SqlConf();

		$user = $conf->getUserName();
		$password = $conf->getPassword();

		$database = $conf->getDatabase();

		$servername = $conf->getHostname();

		$conn = new mysqli($servername, $user, $password, $database);
		$conn->set_charset("utf8");

		if ($conn->connect_error) {
			die('Connect Error (' . $conn->connect_errno . ') '. $conn->connect_error);
		}

		return $conn;
	}

?>