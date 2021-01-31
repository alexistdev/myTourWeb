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

	public function login_post()
	{
		$email = $this->post('email');
		$password = sha1($this->post('password'));
		$cekUser = $this->api->cek_login($email, $password)->num_rows();
		if ($cekUser != 0) {
			$dataUser = $this->api->data_user($email)->row();
			$token = $this->generateRandomString();
			$data_session =[
				'status' => 'berhasil',
				'message' => 'Berhasil Login',
				'token' => $token,
				'id_user' => $dataUser->id_user,
				'email' => $dataUser->email
			];
			/* Mengupdate token */
			$dataToken = [
				'token' => $token
			];
			$this->api->simpan_token($dataToken,$email);
			$this->response(
				$data_session,
				200
			);
		}else{
			$this->response([
				'status' => 'gagal',
				'message' => 'Username atau Password yang anda masukkan salah'
			], 404);
		}
	}

	private function generateRandomString($length = 10) {
		return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
	}
}
