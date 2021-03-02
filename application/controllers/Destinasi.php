<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class : Member (MemberController)
 * Login class to control to authenticate user credentials and starts user's session.
 * @author : Calysta sakralya althasya (1711010041)
 * @version : 1.0
 * @develop : 18 Desember 2020
 */

class Destinasi extends CI_Controller {

	public $session;
	public $form_validation;
	public $admin;
	public $upload;
	public $input;

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_admin', 'admin');
		if ($this->session->userdata('is_login_in') !== TRUE) {
			redirect('Login');
		}
	}

	private function _layout($data, $view)
	{
		$this->load->view('view/' . $view, $data);
	}

	public function index()
	{
		$data['title'] = _myJudul();
		$data['dataDestinasi'] = $this->admin->get_data_destinasi(null);
		$view ='v_destinasi';
		$this->_layout($data,$view);
	}

	public function hapus($idx=null)
	{
		$id = decrypt_url($idx);
		$cekData = $this->admin->get_data_byiddestinasi($id)->num_rows();
		if($idx == NULL || $idx == '' || $cekData == 0){
			redirect('Destinasi');
		} else {
			$this->admin->hapus_destinasi($id);
			$this->session->set_flashdata('pesan2', '<div class="alert alert-danger" role="alert">Data berhasil dihapus!</div>');
			redirect('Destinasi');
		}
	}

	public function edit($idx=null)
	{
		$id = decrypt_url($idx);
		$cekData = $this->admin->get_data_byiddestinasi($id)->num_rows();
		if($idx == NULL || $idx == '' || $cekData == 0){
			redirect('Destinasi');
		} else {
			$this->form_validation->set_rules(
				'judul',
				'Judul Deskripsi',
				'trim|min_length[3]|max_length[50]|required',
				[
					'max_length' => 'Panjang karakter judul maksimal 50 karakter!',
					'min_length' => 'Panjang karakter judul minimal 3 karakter!',
					'required' => 'judul harus diisi !'
				]
			);
			$this->form_validation->set_rules(
				'deskripsi',
				'Deskripsi Destinasi',
				'trim|min_length[5]|max_length[400]|required',
				[
					'max_length' => 'Panjang karakter Deskripsi maksimal 400 karakter!',
					'min_length' => 'Panjang karakter Deskripsi minimal 5 karakter!',
					'required' => 'Deskripsi harus diisi !'
				]
			);
			$this->form_validation->set_error_delimiters('<div class="alert alert-danger" role="alert">', '</div>');
			if ($this->form_validation->run() === false) {
				$this->session->set_flashdata('pesan', validation_errors());
				$data = $this->_preparedata($id);
				$judul['title'] = _myJudul();
				$data = array_merge($data, $judul);
				$view = 'v_editdestinasi';
				$this->_layout($data, $view);
			} else {
				$dataDestinasi = [
					'judul_destinasi' => $this->input->post('judul', TRUE),
					'deskripsi' => $this->input->post('deskripsi', TRUE),
					'like_destinasi' => 0
				];
				$this->admin->update_destinasi($dataDestinasi,$id);

				$config['upload_path'] = './gambar/'; //path folder
				$config['allowed_types'] = 'gif|jpg|png|bmp'; //type yang dapat diakses bisa anda sesuaikan
				$config['encrypt_name'] = TRUE; //nama yang terupload nantinya

				$this->load->library('upload',$config);
				for ($i=1; $i <=5 ; $i++) {
					if(!empty($_FILES['filefoto'.$i]['name'])){
						if(!$this->upload->do_upload('filefoto'.$i)) {
							$pesan = $this->upload->display_errors();
							$pesanError = true;
						}else {
							$upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
							$file_name = $upload_data['file_name'];
							$dataDestinasiGambar = [
								'gambar'.$i => $file_name,
							];
							$this->admin->update_destinasi($dataDestinasiGambar,$id);
							$pesan = "Data berhasil ditambahkan!";
							$pesanError = false;
						}
					}
				}
				if($pesanError){
					$this->session->set_flashdata('pesan2', '<div class="alert alert-danger" role="alert">'.$pesan.'</div>');
				} else {
					$this->session->set_flashdata('pesan2', '<div class="alert alert-success" role="alert">'.$pesan.'</div>');
				}
				redirect('Destinasi');
			}
		}
	}

	private function _preparedata($id)
	{
		$data=[];
		$detailDestinasi = $this->admin->get_data_byiddestinasi($id)->result_array();
		foreach($detailDestinasi as $rowDes){
			$data['idDestinasi'] = $id;
			$data['judul'] = $rowDes['judul_destinasi'];
			$data['deskripsi'] = $rowDes['deskripsi'];
		}
		return $data;
	}


	public function tambah()
	{
		$this->form_validation->set_rules(
			'judul',
			'Judul Deskripsi',
			'trim|min_length[3]|max_length[50]|required',
			[
				'max_length' => 'Panjang karakter judul maksimal 50 karakter!',
				'min_length' => 'Panjang karakter judul minimal 3 karakter!',
				'required' => 'judul harus diisi !'
			]
		);
		$this->form_validation->set_rules(
			'deskripsi',
			'Deskripsi Destinasi',
			'trim|min_length[5]|max_length[400]|required',
			[
				'max_length' => 'Panjang karakter Deskripsi maksimal 400 karakter!',
				'min_length' => 'Panjang karakter Deskripsi minimal 5 karakter!',
				'required' => 'Deskripsi harus diisi !'
			]
		);

		$this->form_validation->set_error_delimiters('<div class="alert alert-danger" role="alert">', '</div>');
		if ($this->form_validation->run() === false) {
			$this->session->set_flashdata('pesan', validation_errors());
			$data['title'] = _myJudul();
			$view = 'v_tambahdestinasi';
			$this->_layout($data, $view);
		} else {
			$dataDestinasi = [
				'judul_destinasi' => $this->input->post('judul', TRUE),
				'deskripsi' => $this->input->post('deskripsi', TRUE),
				'like_destinasi' => 0
			];
			$idDestinasi = $this->admin->simpan_destinasi($dataDestinasi);
			$config['upload_path'] = './gambar/'; //path folder
			$config['allowed_types'] = 'gif|jpg|png|bmp'; //type yang dapat diakses bisa anda sesuaikan
			$config['encrypt_name'] = TRUE; //nama yang terupload nantinya

			$this->load->library('upload',$config);
			for ($i=1; $i <=5 ; $i++) {
				if(!empty($_FILES['filefoto'.$i]['name'])){
					if(!$this->upload->do_upload('filefoto'.$i)) {
						$pesan = $this->upload->display_errors();
						$pesanError = true;
					}else {
						$upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
						$file_name = $upload_data['file_name'];
						$dataDestinasiGambar = [
							'gambar'.$i => $file_name,
						];
						$this->admin->update_destinasi($dataDestinasiGambar,$idDestinasi);
						$pesan = "Data berhasil ditambahkan!";
						$pesanError = false;

					}
				}
			}
			if($pesanError){
				$this->session->set_flashdata('pesan2', '<div class="alert alert-danger" role="alert">'.$pesan.'</div>');
			} else {
				$this->session->set_flashdata('pesan2', '<div class="alert alert-success" role="alert">'.$pesan.'</div>');
			}
			redirect('Destinasi');
		}
	}

}
