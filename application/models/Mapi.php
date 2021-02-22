<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mapi extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->tbDestinasi = 'destinasi';
		$this->tbuser = 'user';
		$this->tbdetailuser = 'detail_user';
	}
	/**
	 * ==========================================================================
	 * Table Paket
	 * ==========================================================================
	 */
	public function data_paket($kategori)
	{
		$this->db->where('id_kategori', $kategori);
		return $this->db->get('paket');
	}

	public function data_harga($idPaket)
	{
		$this->db->where('id_paket', $idPaket);
		return $this->db->get('harga');
	}

	/**
	 * ==========================================================================
	 * Table Fasilitas Include
	 * ==========================================================================
	 */
	public function data_fasilitas_include($id,$type){
		$this->db->where('id_destinasi', $id);
		$this->db->where('type', $type);
		return $this->db->get('fasilitas_include');
	}

	/**
	 * ==========================================================================
	 * Table Inbox
	 * ==========================================================================
	 */
	public function data_inbox($id){
		$this->db->where('id_user',$id);
		return $this->db->get('inbox');
	}
	/**
	 * ==========================================================================
	 * Table Booking
	 * ==========================================================================
	 */
	public function data_booking($id){
		//$this->db->select('booking.id_booking');
		$this->db->join("paket", "paket.id_paket = booking.id_paket");
		$this->db->where('booking.id_user',$id);
		return $this->db->get('booking');
	}

	/**
	 * ==========================================================================
	 * Table Jadwal
	 * ==========================================================================
	 */
	public function data_jadwal($id,$type){
		$this->db->where('id_destinasi', $id);
		$this->db->where('type', $type);
		return $this->db->get('jadwal');
	}


	/**
	 * ==========================================================================
	 * Table Destinasi
	 * ==========================================================================
	 */

	/* Menampilkan destinasi */
	public function data_tampil_destinasi(){
		return $this->db->get($this->tbDestinasi);
	}

	/**
	 * ==========================================================================
	 * Table user dan detail_user
	 * ==========================================================================
	 */

	public function cek_email($email)
	{
		$this->db->where('email',$email);
		return $this->db->get($this->tbuser);
	}
	public function simpan_user($data)
	{
		$this->db->insert($this->tbuser,$data);
		return $this->db->insert_id();
	}
	public function simpan_detail_user($data)
	{
		$this->db->insert($this->tbdetailuser,$data);
	}

	public function cek_login($email, $password)
	{
		$this->db->where('email', $email);
		$this->db->where('password', $password);
		return $this->db->get($this->tbuser);
	}

	/** Data login */
	public function data_user($email)
	{
		$this->db->where('email', $email);
		return $this->db->get("user");
	}
	public function simpan_token($data,$email)
	{
		$this->db->where('email',$email);
		$this->db->update($this->tbuser,$data);
	}

	/** Data akun berdasarkan id dan token*/

	public function data_akun($data,$token){
		$this->db->join("detail_user", "detail_user.id_user = user.id_user");
		$this->db->where("user.id_user",$data);
		$this->db->where("user.token",$token);
		return $this->db->get("user");
	}

	public function update_password($dataUser,$id)
	{
		$this->db->where("id_user",$id);
		$this->db->update("user",$dataUser);
	}

	public function update_detail_user($dataDetail,$id)
	{
		$this->db->where("id_user",$id);
		return $this->db->update("detail_user",$dataDetail);
	}




}
