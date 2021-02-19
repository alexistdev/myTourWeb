<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;


class Inbox extends RestController
{
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
		$dataInbox = $this->Mapi->data_inbox($idUser);
		if($dataInbox->num_rows() !=0 ){
			$data = [
				'status' => 'berhasil',
				'result' => $dataInbox->result_array(),
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
}
