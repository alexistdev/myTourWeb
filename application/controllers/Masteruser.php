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
	public $user;
	public $session;
	public $form_validation;
	public $input;


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
		$view = 'v_datauser';
		$this->_template($data, $view);
	}

	private function _template($data, $view)
	{
		$this->load->view('Member/' . $view, $data);
	}

	public function tambah()
	{
		$this->form_validation->set_rules(
            'namaLengkap',
            'Nama Lengkap',
            'trim|required|min_length[4]',
            [
                'required' => 'Nama Lengkap harus diisi!',
                'min_length' => 'Panjang karakter Nama minimal 4 karakter!'
            ]
        );
		$this->form_validation->set_rules(
			'nomorTelepon',
			'Nomor Telepon',
			'trim|max_length[30]',
			[
				'max_length' => 'Panjang karakter maksimal 30 karakter!'
			]
		);
		$this->form_validation->set_rules(
			'email',
			'Email User',
			'trim|required',
			[
				'required' => 'Email harus diisi!'
			]
		);
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger" role="alert">', '</div>');
		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata('pesan', validation_errors());
			$this->index();
		} else {
			$namaLengkap = $this->input->post('namaLengkap', TRUE);
			$emailUser = $this->input->post('email', TRUE);
			$nomorTelepon = $this->input->post('nomorTelepon', TRUE);
			$password = md5("123456789");
			//simpan ke dalam tabel user
			$dataUser = [
				'email' => $emailUser,
				'password' => $password,
				'type' => 3
			];
			$idUser = $this->user->simpan_data_user($dataUser);
			//menyimpan ke dalam tabel detail_user
			$dataDetailUser = [
				'id_user' => $idUser,
				'nama_lengkap' => $namaLengkap,
				'no_telp' => $nomorTelepon
			];
			$this->user->simpan_detail_user($dataDetailUser);
			$this->session->set_flashdata('pesan2', '<div class="alert alert-success" role="alert">Pesan berhasil dibuat!</div>');
			redirect('Masteruser');
		}
	}
	public function detail($idUserx=NULL){
		$idUser = $idUserx;
		if(($idUserx == NULL) || ($idUserx = '')){
			redirect('Masteruser');
		} else {
			$cekIdUser = $this->user->cek_id_user($idUser);
			if($cekIdUser != 0){
				$data['title'] = "Detail User MyTour | Paket Wisata Tour And Travel Terbaik di Lampung";
				$data['namaUser'] = $this->user->getDetailInfo($idUser)->nama_lengkap;
				$data['emailUser'] = $this->user->getDetailInfo($idUser)->email;
				$data['telpUser'] = $this->user->getDetailInfo($idUser)->no_telp;
				$data['alamatUser'] = $this->user->getDetailInfo($idUser)->alamat;
				$view = 'v_detail_user';
				$this->_template($data, $view);
			} else {
				redirect('Masteruser');
			}
		}
	}
}
