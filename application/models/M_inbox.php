<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_inbox extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->tableNameA = "inbox";
		$this->tableNameB = "inboxbalas";
		$this->tableNameC = "user";
		$this->tableNameD = "detail_user";
		$this->column_list = array('id_inbox', 'nama_lengkap','judul', 'pesan', 'time', 'status');

	}
	public function getData()
	{
		$this->db->join($this->tableNameC, 'user.id_user=inbox.id_user');
		$this->db->join($this->tableNameD, 'detail_user.id_user=user.id_user');
		$this->db->select($this->column_list);
		$this->db->where('type !=', 1);
		return $this->db->get($this->tableNameA);
	}
}
