<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class : Member (MemberController)
 * Login class to control to authenticate user credentials and starts user's session.
 * @author : Calysta sakralya althasya (1711010041)
 * @version : 1.0
 * @develop : 18 Desember 2020
 */

class Masteruser extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_user', 'user');
		//is_logged_in();
	}

	/**
	 * Halaman Index Untuk Controller.
	 */
	public function index()
	{
		$data['title'] = "Dashboard MyTour | Paket Wisata Tour And Travel Terbaik di Lampung";
		$data['dataUser'] = $this->user->getData()->result_array();
		$this->load->view('Member/v_datauser', $data);
	}
}
