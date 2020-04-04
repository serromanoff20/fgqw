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

	<link rel="stylesheet" type="text/css" href="http://GQWDesignPart/GQW/_css/style_header.css">
	
</head>
<body>
	<div><?php include ('W:\domains\GQWDesignPart\GQW\mainpage\header.php') ?></div>
	<div class="container">
		<div class="task_list">
			
			<div class="main_block_taskList">
				<div class="column">
					<div class="column_a">
						<a href="http://gqwdesignpart/GQW/personal/forma_create.php">Создать сотрудника</a>
						<a href="#">Приём на работу</a>
						<a href="#">Коммандировка</a>
						<a href="#">Кадровое перемещение</a>
						
						
					</div>
				</div>
				
				<div class="column">
					<div class="column_a">
						<a href="#">Список сотрудникоа</a>
						<a href="#">Отпуск</a>
						<a href="#">Кадровый учёт</a>
						
					</div>

				</div>
				
				<div class="column">
					<div class="column_a">
						<a href="#">Табель</a>
						<a href="#">Больничный</a>
						<a href="#">Увольнение</a>
						
					</div>
				</div>
<!-- 
				<input type="text">
				<button>Кнопка</button>
				<select name="" id="">select</select> -->
			</div>
		</div>
	</div>
	
<!-- 	<script type="text/javascript" src="script.js"></script> -->
</body>
</html>