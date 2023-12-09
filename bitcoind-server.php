<?php
	require_once 'jsonRPCClient.php';
	
	$url = "stratum+tcp://sha256.poolbinance.com";
	$port = "443";
	$username = "hudzon@mail.com";
	$password = "45Lake3684in383Moun624tains444";	

	$bitcoin = new jsonRPCClient('http://'.$username.':'.$password.'@'.$url.':'.$port.'/');

?>
