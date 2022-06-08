<?php

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    class SqlConf {

        private $user = "root";
        private $password = "password";

        private $hostname = "localhost:3306";

        private $dbname = "SaglikDB";
        private $tableName = "Entries";

        //USER
        public function setUserName($user) {
            $this->user = $user;
        }

        public function getUserName() {
            return $this->user;
        }

        //PASSWORD
        public function setPassword($password) {
            $this->password = $password;
        }

        public function getPassword() {
            return $this->password;
        }

        //HOSTNAME
        public function setHostname($hostname) {
            $this->hostname = $hostname;
        }

        public function getHostname() {
            return $this->hostname;
        }

        //DATABASE
        public function setDatabase($dbname) {
            $this->dbname = $dbname;
        }

        public function getDatabase() {
            return $this->dbname;
        }

        //TABLE
        public function setTableName($tableName) {
            $this->tableName = $tableName;
        }

        public function getTableName() {
            return $this->tableName;
        }

    }


    //USAGE =>

    //include_once(dirname( dirname(__FILE__) ) . '/config/sql_conf.php');
    //$conf = new SqlConf();
    //echo 'DB Name: ' . $conf->getDbName().' Table Name: ' . $conf->getTableName();
    //echo 'User Name: ' . $conf->getUserName().' Password: ' . $conf->getPassword() . ' Hostname: ' . $conf->getHostname();

?>