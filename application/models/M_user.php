<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_user extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->tableName = "user";
		$this->tableNameB = "detail_user";
		$this->column_list = array('user.id_user as idUser', 'email','nama_lengkap', 'no_ktp', 'alamat', 'no_telp');

	}

	public function getData()
	{
		$this->db->join('detail_user', 'detail_user.id_user=user.id_user');
		$this->db->select($this->column_list);
		$this->db->where('type !=', 1);
		return $this->db->get($this->tableName);
	}

	public function simpan_data_user($dataUser)
	{
		$this->db->insert($this->tableName, $dataUser);
		return $this->db->insert_id();
	}
	public function simpan_detail_user($dataDetailUser)
	{
		$this->db->insert($this->tableNameB, $dataDetailUser);
	}
}