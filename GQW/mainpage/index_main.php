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
	<div><?php include ('header.php') ?></div>
	<div class="container">
		<div class="task_list">
			
			<div class="main_block_taskList">
				<div class="column">
					<p>Справочники:</p>
					<div class="column_a">
						<a href="#">Организации</a>
						<a href="#">Сотрудники</a>
						<a href="#">Кадровый учёт</a>
						<a href="#">Начисления</a>
						<a href="#">Выплаты</a>
					</div>
				</div>
				
				<div class="column">
					<p>Создать:</p>
					<div class="column_a">
						<a href="#">Организацию</a>
						<a href="http://gqwdesignpart/GQW/personal/forma_create.php">Сотрудника</a>
						<a href="#">Начисление</a>
						
					</div>

				</div>
				
				<div class="column">
					<p>Отчёты:</p>
					<div class="column_a">
						<a href="#">Приходный кассовый ордер</a>
						<a href="#">Рассходный кассовый ордер</a>
						<a href="#">Расчетная ведомость (T-51)</a>
						
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