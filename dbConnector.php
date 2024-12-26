<?php

class DbConnector {
    var $theQuery;
    var $link;

    public function __construct() {
        ob_start();
        // Database connection settings
        $host = 'localhost';
        $db = 'LMS_DB';
        $user = 'root';
        $pass = '';

        // Connect to the database
        $this->link = mysqli_connect($host, $user, $pass, $db);

        // Check connection
        if (mysqli_connect_errno()) {
            die("Database connection failed: " . mysqli_connect_error());
        }
    }

    function __destruct() {
        mysqli_close($this->link);
        ob_end_flush();
    }

    // Execute a database query
    function query($query) {
        $this->theQuery = $query;
        return mysqli_query($this->link, $query);
    }

    // Get array of query results
    function fetchArray($result) {
        return mysqli_fetch_array($result);
    }

    // Close the connection
    function close() {
        mysqli_close($this->link);
    }
}
?>