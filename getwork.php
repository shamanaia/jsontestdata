<?php
	require_once 'https://github.com/shamanaia/jsontestdata/blob/main/bitcoind-server.php';

	echo json_encode($bitcoin->getwork());

?>
