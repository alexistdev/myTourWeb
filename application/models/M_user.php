<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_user extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->tableName = "user";
		$this->column_list = array('user.id_user as idUser', 'username', 'email','nama_lengkap', 'no_ktp', 'alamat', 'no_telp');

	}

	public function getData()
	{
		$this->db->join('detail_user', 'detail_user.id_user=user.id_user');
		$this->db->select($this->column_list);
		$this->db->where('type !=', 1);
		return $this->db->get($this->tableName);
	}
}
