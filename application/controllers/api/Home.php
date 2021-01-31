<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;


class Home extends RestController
{
	public $api;

	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->load->model('M_api', 'api');
	}

	public function destinasi_get()
	{
		$getData =  $this->api->data_tampil_destinasi();
		if($getData->num_rows() !=0 ){
			$data = [
				'status' => 'berhasil',
				'result' => $getData->result_array(),
				'message' => 'Data berhasil didapatkan'
			];
			$this->response($data, 200);
		}else {
			$this->response([
				'status' => 'gagal',
				'result' => [],
				'message' => 'data kosong!'
			], 404);
		}
	}

}
