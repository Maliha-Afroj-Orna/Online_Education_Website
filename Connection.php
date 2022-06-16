<?php

class Connection
{
    var $servername = "localhost";
    var $username = "root";
    var $password = "";
    var $dbname = "maliha";

    public function Connect()
    {
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        return $conn;
    }

}
