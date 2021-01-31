<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Auth extends RestController
{

	public $api;

	public function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->load->model('m_api', 'api');
	}

	public function daftar_post()
	{
		$namaLengkap = $this->post('nama_lengkap');
		$email = $this->post('email');
		$password = $this->post('password');
		$phone = $this->post('no_telp');
		$inpass = sha1($password);

		$cekEmail = $this->api->cek_email($email)->num_rows();
		if($cekEmail != 0){
			$dataHasil = [
				'status' => 'gagal',
				'message' => 'Email sudah pernah terdaftar sebelumnya!'
			];
			$this->response($dataHasil, 404);
		}else {
			$dataUser = [
				'password' => $inpass,
				'email' => $email,
				'status' => 1
			];
			$idUser = $this->api->simpan_user($dataUser);
			$dataDetail = [
				'id_user' => $idUser,
				'nama_lengkap' => $namaLengkap,
				'no_telp' => $phone
			];
			$this->api->simpan_detail_user($dataDetail);
			$dataHasil = [
				'status' => 'berhasil',
				'message' => 'Data user berhasil disimpan!'
			];
			$this->response($dataHasil, 200);
		}
	}
}
