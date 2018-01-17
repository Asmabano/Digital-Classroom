<?php
class query {
    var $con;

    public function __construct() {
    		$this->con = $this->databaseConn ();
    	}

    public function __destruct() {
    		$this->con = $this->databaseConn ();
    		pg_close ( $this->con );
    	}

    public function databaseConn() {
        include 'credentials.php';
        $con = pg_connect ( "host=" . $dbHost . " port=" . $dbPort . " dbname=" . $dbName . " user=" . $dbUser . " password=" . $dbPass );
        if (! $con) {
            die ( "failed to connect to databases" );
        }
        return $con;
    }
}