<?php
	require_once 'jsonRPCClient.php';
	
	$url = "stratum+tcp://sha256.poolbinance.com";
	$port = "3333";
	$username = "";
	$password = "";	

	$bitcoin = new jsonRPCClient('http://'.$username.':'.$password.'@'.$url.':'.$port.'/');

?>
