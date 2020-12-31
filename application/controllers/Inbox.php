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

	public function balas($keyx=NULL)
	{
		$key= $keyx;
		if(($keyx == NULL) || ($keyx = '')){
			redirect('Inbox');
		} else{
			$cektoken = $this->inbox->cek_inbox($key);
			if($cektoken != 0){
				$data['title'] = "Balas Inbox MyTour | Paket Wisata Tour And Travel Terbaik di Lampung";
				$data['judul'] = $this->inbox->getDetail($key)->judul;
				$data['pengirim'] = $this->inbox->getDetail($key)->nama_lengkap;
				$data['pesanAwal'] = $this->inbox->getDetail($key)->pesan;
				$data['waktuPembuatan'] = $this->inbox->getDetail($key)->time;
				$data['token'] = $this->inbox->getDetail($key)->key_token;
				$data['dataBalas'] = $this->inbox->getData_balas($key)->result_array();
				$view = 'v_balas';
				$this->_template($data, $view);

			} else {
				redirect('Inbox');
			}
		}
	}

	public function AdminBalas($keyx=NULL)
	{
		$key= $keyx;
		if(($keyx == NULL) || ($keyx = '')){
			redirect('Inbox');
		} else{
			$cektoken = $this->inbox->cek_inbox($key);
			if($cektoken != 0){
				$this->form_validation->set_rules(
					'pesan',
					'Pesan',
					'trim|required|min_length[10]',
					[
						'required' => 'Pesan harus diisi!',
						'min_length' => 'Panjang karakter Pesan minimal 10 karakter!',
						'max_length' => 'Panjang karakter Pesan maksimal 200 karakter'
					]
				);
				$this->form_validation->set_error_delimiters('<div class="alert alert-danger" role="alert">', '</div>');
				if ($this->form_validation->run() == false) {
					$this->session->set_flashdata('pesan', validation_errors());
					$this->balas($key);
				} else {
					$pesan = $this->input->post('pesan', TRUE);
					$dataBalas = [
						'is_admin' => 1,
						'key_token' => $key,
						'pesan' => $pesan,
						'time' => time()
					];
					$this->inbox->simpan_admin_balas($dataBalas);
					$this->session->set_flashdata('pesan2', '<div class="alert alert-success" role="alert">Anda telah membalas pesan!</div>');
					redirect('Inbox/balas/'.$key);
				}
			} else {
				redirect('Inbox');
			}
		}
	}

}
