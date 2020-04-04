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
						<a href="#">Список сотрудников</a>
						<a href="#">Выплата через банк</a>
						<a href="#">Рассходный кассовый ордер</a>
						
					</div>
				</div>
				
				<div class="column">
					<div class="column_a">
						<a href="#">Начисление зарплаты</a>
						<a href="#">Вычеты по НДФЛ</a>
						<a href="#">Расчетная ведомость (T-51)</a>
						
					</div>

				</div>
				
				<div class="column">
					<div class="column_a">
						<a href="#">Аванс</a>
						<a href="#">Выплата через кассу</a>
						<a href="#">Приходный кассовый ордер</a>
						
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