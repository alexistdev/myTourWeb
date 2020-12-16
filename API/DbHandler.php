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
    public function daftarSiswa($nis, $nama)
    {
        if (
            $nis == NULL || $nama == NULL
        ) {
            header('Content-Type: application/json');
            //echo '{"message" : "Semua Field Harus Terisi"}';
            $response['status'] = 'failed';
            $response['message'] = 'Silahkan lengkapi datanya';
        } else {
            $cekQuery = "SELECT nis FROM user WHERE nis ='$nis'";
            $result = $this->conn->query($cekQuery)->num_rows;
            //mengecek apakah nis sudah terdaftar
            $response = [];
            $data = "";
            if ($result > 0) {
                header('Content-Type: application/json');
                $response['status'] = 'failed';
                $response['message'] = 'NIS Sudah terdaftar sebelumnya!';
            } else {
                $sql = "INSERT INTO user (nis,nama)VALUES ('$nis','$nama')";
                if ($this->conn->query($sql) == TRUE) {
                    $last_id = $this->conn->insert_id;
                    $getIdUser = "SELECT id_user FROM user WHERE nis ='$nis'";
                    $hasil = $this->conn->query($getIdUser);
                    $row = $hasil->fetch_assoc();
                    $data = $row['id_user'];
                    header('Content-Type: application/json');
                    $response['status'] = 'success';
                    $response['message'] = 'Berhasil Mendaftar';
                    $response['idUser'] = $data;
                } else {
                    header('Content-Type: application/json');
                    $response['status'] = 'failed';
                    $response['message'] = 'Gagal Menyimpan';
                    $response['idUser'] = "";
                }
            }
        }
        $json = json_encode($response, JSON_PRETTY_PRINT);
        echo $json;
    }


    p
}
