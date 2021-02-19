<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;


class Booking extends RestController {
	public $Mapi;

	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->load->model('Mapi');
	}

	public function tampil_post()
	{
		$idUser = $this->post('id_user');
		$dataBooking = $this->Mapi->data_booking($idUser);
		if($dataBooking->num_rows() !=0 ){
			$data = [
				'status' => 'berhasil',
				'result' => $dataBooking->result_array(),
				'message' => 'Data berhasil didapatkan'
			];
			$this->response($data, 200);
		} else {
			$this->response([
				'status' => 'gagal',
				'result' => [],
				'message' => 'data kosong!'
			], 404);
		}
	}

	public function cekEmail_post()
	{
		$email = $this->post('email');
		$cekEmail = $this->user->Cek_Email($email);
		if ($cekEmail > 0){
			$this->response( "ok", 200 );
		}
	}

}
