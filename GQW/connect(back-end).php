<?php

	$db_host = 'localhost'; //Хост, где проходит подключение. Без порта.
	$db_user = 'root'; //Пользователь MySQL
	$db_password = ''; //Пароль MySQL
	$db_database = 'gqw'; //Название базы

	$link = mysqli_connect($db_host, $db_user, $db_password, $db_database);
	$select_db = mysqli_select_db($link, $db_database);
	
?>