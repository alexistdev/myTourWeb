<?php
defined('BASEPATH') or exit('No direct script access allowed');

if ( ! function_exists('sanitasi')) {
	function sanitasi($str)
	{
		return htmlentities($str, ENT_QUOTES, 'UTF-8');
	}
}
