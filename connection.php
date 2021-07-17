<?php
class Connection {
    public function get_connection()
    {
        $host = "localhost";
        $username = "root";
        $pass = "";
        $db = "crud_mhs";

        $connect = new mysqli($host, $username, $pass,$db);
        return $connect;
    }
}
