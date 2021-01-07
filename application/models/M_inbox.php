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
		$this->column_list = array('id_inbox', 'nama_lengkap','key_token','judul', 'pesan', 'time', 'status');

	}
	public function getData()
	{
		$this->db->join($this->tableNameC, 'user.id_user=inbox.id_user');
		$this->db->join($this->tableNameD, 'detail_user.id_user=user.id_user');
		$this->db->select($this->column_list);
//		$this->db->orderBy('status', 'ASC');
		return $this->db->get($this->tableNameA);
	}

	public function cek_inbox($token)
	{
		$this->db->where('key_token', $token);
		return $this->db->get($this->tableNameA)->num_rows();
	}

	public function getDetail($token)
	{
		$this->db->where('key_token', $token);
		$this->db->join($this->tableNameC, 'user.id_user=inbox.id_user');
		$this->db->join($this->tableNameD, 'detail_user.id_user=user.id_user');
		return $this->db->get($this->tableNameA)->row();
	}

	public function simpan_admin_balas($dataBalas)
	{
		$this->db->insert($this->tableNameB, $dataBalas);
	}

	public function getData_balas($token)
	{
		$this->db->where('key_token',$token);
		return $this->db->get($this->tableNameB);
	}

	public function ubah_status($token, $data)
	{
		$this->db->where('key_token',$token);
		$this->db->update('inbox',$data);
	}

}
