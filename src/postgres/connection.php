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

    /**
     * @return resource
     */
    public function databaseConn() {
        include 'credentials.php';
        $con = pg_connect ( "host=" . $dbHost . " port=" . $dbPort . " dbname=" . $dbName . " user=" . $dbUser . " password=" . $dbPass );
        print_r($dbHost);
        if (! $con) {
            die ( "failed to connect to databases" );
        }
        return $con;
    }

    public function getAllForEmailFromUser($email) {
        $sql = "select password,seqno,name from postgres.users where emailid='" . $email . "';";
        $ret = pg_query ( $this->con, $sql );
        if (! $ret) {
            echo pg_last_error ( $this->con );
            exit ();
        }
        if ($row = pg_fetch_row ( $ret )) {
            return $row;
        } else {
            die ( "either username or password incorrect" );
        }
    }
}