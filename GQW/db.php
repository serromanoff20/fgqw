<?php
	session_start();
	require('connect.php');
	
	$fullname = $_POST['fullnames'];
	$mail = $_POST['mails'];
	$login = $_POST['logins'];
	$password = $_POST['password_1'];
	
	if (!empty($login) && !empty($password)) 
	{
		$query = "INSERT INTO users (fullname, mails, logins, passwords) VALUES ('$fullname','$mail', '$login', '$password')";
		$result = mysqli_query($link, $query);

		$_SESSION['fullname'] = $fullname;
		$fullnameS = $_SESSION['fullname'];
		
		if ($result) {
			$smsg = "Регистрация прошла успешно, $fullnameS!";
		}else 
		{
			$fsmsg = "Ошибка! Некорректно введены данные!";
		}
	} 
	
?>