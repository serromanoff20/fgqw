<?php
	session_start();
	require('connect(back-end).php');
	
	$fullname = $_POST['fullnames'];
	$mail = $_POST['mails'];
	$login = $_POST['logins'];
	$password = $_POST['password_1'];
	
	if (!empty($login) && !empty($password)) 
	{
		$query = "INSERT INTO users (id, fullname, mails, logins, passwords, prava) VALUES (NULL, '$fullname','$mail', '$login', '$password', 'root')";
		$result = mysqli_query($link, $query);

		if ($result) 
		{
			$smsg = "Регистрация прошла успешно, $login!";
		}else 
		{
			$fsmsg = "Ошибка! Некорректно введены данные!";
		}
	}
	
?>