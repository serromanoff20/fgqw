<?php
	session_start();
	unset($_SESSION['$nameSS']);
	session_destroy();
	header('Location: Login.php');
	exit;
?>