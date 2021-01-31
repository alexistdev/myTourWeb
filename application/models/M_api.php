<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_api extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->tbDestinasi = 'destinasi';
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






}
