<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_admin extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->tbadmin = 'admin';
		$this->tbuser = 'user';
		$this->tbdetailuser = 'detail_user';
	}
	####################################################################################
	#                              Tabel destinasi                                     #
	####################################################################################
	public function get_data_destinasi($data)
	{
		return $this->db->get("destinasi");
	}

	public function get_data_byiddestinasi($data)
	{
		$this->db->where('id_destinasi', $data);
		return $this->db->get("destinasi");
	}

	public function simpan_destinasi($data)
	{
		$this->db->insert("destinasi",$data);
		return $this->db->insert_id();
	}

	public function update_destinasi($dataDestinasiGambar,$idDestinasi)
	{
		$this->db->where('id_destinasi',$idDestinasi);
		$this->db->update("destinasi",$dataDestinasiGambar);
	}

	public function hapus_destinasi($id)
	{
		$this->db->where('id_destinasi', $id);
		$this->db->delete("destinasi");
	}


	####################################################################################
	#                              Tabel user & detailuser                             #
	####################################################################################
	public function get_data_user($data=null){
		$this->db->join($this->tbdetailuser, 'detail_user.id_user=user.id_user');
		if($data != null){
			$this->db->where('user.id_user', $data);
		}
		return $this->db->get($this->tbuser);
	}
	public function update_user($data,$id)
	{
		$this->db->where('id_user',$id);
		$this->db->update($this->tbuser,$data);
	}
	public function update_detail($data,$id)
	{
		$this->db->where('id_user',$id);
		$this->db->update($this->tbdetailuser,$data);
	}
	public function simpan_user($data)
	{
		$this->db->insert($this->tbuser,$data);
		return $this->db->insert_id();
	}
	/** Menyimpan data detail user */
	public function simpan_detail_user($data)
	{
		$this->db->insert($this->tbdetailuser,$data);
	}

	####################################################################################
	#                                  Tabel admin                                     #
	####################################################################################
	/** Dapat data untuk validasi login */
	public function validasi_login($username)
	{
		$this->db->where('username', $username);
		return $this->db->get($this->tbadmin);
	}

	public function update_admin($data)
	{
		$this->db->where('id_admin',1);
		$this->db->update($this->tbadmin,$data);
	}
}
