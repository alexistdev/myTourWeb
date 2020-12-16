<?php

class DbHandler
{
    private $conn;
    private $url;

    function __construct()
    {
        require_once 'koneksi.php';
        $db = new DbConnection();
        $this->conn = $db->connect();
        $this->url = $db->url();
    }
    public function tampilUser()
    {
        $sql = "SELECT * FROM user";
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            header('Content-Type: application/json');
            $data = array();
            while ($row = $result->fetch_assoc()) {
                $temp['idUser'] = $row['id_user'];
                $temp['username'] = $row['username'];
                $temp['email'] = $row['email'];
                $data[] = $temp;
            }
            $response['status'] = 'success';
            $response['message'] = 'Berhasil';
            $response['result'] = $data;
        } else {
            $response['status'] = 'failed';
            $response['message'] = 'Data tidak ada!';
            $response['result'] = "0";
        }
        $json = json_encode($response, JSON_PRETTY_PRINT);
        echo $json;
    }
}
