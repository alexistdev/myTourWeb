<?php

class DbConnection
{

    private $conn;
    private $url;

    public function connect()
    {
        $DB_HOST      = "localhost";
        $DB_USERNAME = "root";
        $DB_PASSWORD = "";
        $DB_NAMA      = "mytour";

        $conn = new mysqli($DB_HOST, $DB_USERNAME, $DB_PASSWORD, $DB_NAMA);
        if (mysqli_connect_errno()) {
            echo "Gagal Koneksi ke Database: " . mysqli_connect_error();
        }
        return $conn;
    }

    function url()
    {
        $this->url = "http://localhost/myrepro/";
        return $this->url;
    }
}
