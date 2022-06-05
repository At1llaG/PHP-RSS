<?php

    class SqlConf {

        private $dbname = "saglikdb";
        private $tableName = "tablename3";

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

    //$conf = new MyClass();
    //echo 'DB Name: ' . $conf->getDbName().' Table Name: ' . $conf->getTableName();

?>