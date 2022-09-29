<?php
	$session = session();
	session_destroy();
	header("Location: http://localhost/UAS_Web3/public/");
	exit;
?>
