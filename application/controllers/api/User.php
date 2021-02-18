<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;


class User extends RestController {
	public $user;

	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->load->model('Mapi');
	}

	public function tampil_get()
	{

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
