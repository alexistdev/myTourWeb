<?php
error_reporting(-1);
ini_set('display_errors', 'On');
date_default_timezone_set('Asia/Jakarta');

require_once 'DbHandler.php';

$db = new DbHandler();
$db->tampilUser();
