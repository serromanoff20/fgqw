<?php 
	session_start();

	require('W:\domains\GQWDesignPart\GQW\connect(back-end).php');

	$login = $_POST['logins'];
	$_SESSION['login'] = $login;
	$loginS = $_SESSION['login'];


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="http://GQWDesignPart/GQW/_css/style_main.css">
	
</head>
<body>
	<div><?php include ('W:\domains\GQWDesignPart\GQW\mainpage\header.php') ?></div>
	<div class="container">
		<div class="task_list">
			<!-- <div class="head_task_list">sss</div> -->
		</div>
	</div>
	
</body>
</html>