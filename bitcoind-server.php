<?php
	require_once 'jsonRPCClient.php';
	
	$url = "stratum+tcp://sha256.poolbinance.com";
	$port = "443";
	$username = "un";
	$password = "pw";	

	$bitcoin = new jsonRPCClient('http://'.$username.':'.$password.'@'.$url.':'.$port.'/');

?>