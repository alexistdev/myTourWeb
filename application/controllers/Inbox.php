<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class : Masteruser (Masteruser Controller)
 * Kelas untuk menanganti halaman Master Data/ User
 * @author : Calysta sakralya althasya (1711010041)
 * @version : 1.0
 * @develop : 18 Desember 2020
 */

class Inbox extends CI_Controller {

	public $inbox;
	public $load;

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_inbox', 'inbox');
		//is_logged_in();
	}

	/**
	 * Halaman Index Untuk Controller.
	 */
	public function index()
	{
		$data['title'] = "Inbox MyTour | Paket Wisata Tour And Travel Terbaik di Lampung";
		$data['dataInbox'] = $this->inbox->getData()->result_array();
		$view = 'v_inbox';
		$this->_template($data, $view);
	}

	private function _template($data, $view)
	{
		$this->load->view('Member/' . $view, $data);
	}

}
