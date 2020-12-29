<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Helper : Mytour_helper
 * Helper yang digunakan untuk membuat fungsi atau method yang dapat digunakan di semua kelas.
 * @author : Calysta sakralya althasya (1711010041)
 * @version : 1.0
 * @develop : 18 Desember 2020
 */


/**
 * Method untuk mensanitasi output sebelum dikirimkan ke html
 */

if ( ! function_exists('sanitasi')) {
	function sanitasi($str)
	{
		return htmlentities($str, ENT_QUOTES, 'UTF-8');
	}
}
/**
 * Method untuk mengenkripsi id di url.
 */

if ( ! function_exists('encrypt_url')) {
	function encrypt_url($string)
	{

		$output = false;
		/*
		 * mengambil security.ini file dan mendapatkan chiper key nya.
		 */

		$security = parse_ini_file("security.ini");
		$secret_key = $security["encryption_key"];
		$secret_iv = $security["iv"];
		$encrypt_method = $security["encryption_mechanism"];

		// hash
		$key = hash("sha256", $secret_key);

		// iv – encrypt method AES-256-CBC expects 16 bytes – else you will get a warning
		$iv = substr(hash("sha256", $secret_iv), 0, 16);

		//do the encryption given text/string/number
		$result = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
		$output = base64_encode($result);
		return $output;
	}
}
/**
 * Method untuk mengembalikan id yang sebelumnya sudah dienkripsi di url.
 */

if ( ! function_exists('decrypt_url')) {
	function decrypt_url($string)
	{

		$output = false;

		/*
		 * mengambil security.ini file dan mendapatkan chiper key nya.
		 */


		$security = parse_ini_file("security.ini");
		$secret_key = $security["encryption_key"];
		$secret_iv = $security["iv"];
		$encrypt_method = $security["encryption_mechanism"];

		// hash
		$key = hash("sha256", $secret_key);

		// iv – encrypt method AES-256-CBC expects 16 bytes – else you will get a warning
		$iv = substr(hash("sha256", $secret_iv), 0, 16);

		//do the decryption given text/string/number

		$output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
		return $output;
	}
}


