<?php

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    class SqlConf {

        private $dbname = "SaglikDB";
        private $tableName = "Entries";

        public function setDbName($dbname) {
            $this->dbname = $dbname;
        }

        public function getDbName() {
            return $this->dbname;
        }


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

?>