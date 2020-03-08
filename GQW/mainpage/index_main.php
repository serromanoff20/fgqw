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
	<div><?php include ('header.php') ?></div>
	<div class="container">
		<div class="task_list">
			<div class="head_task_list">
				<h2>NOTEBOOK</h2>
			</div>
			
			<div id="mainPart_taskList">
				<ul class="todoItem">
					<input class="checkbox" type="checkbox">
					<label class="label">Изучить JavaScript</label>
					<input class="textfield" type="text">
					<button class="edit">Изменить</button>
					<button class="delete">Удалить</button>
					
				</ul>

			</div>	

			<?php include('index_main(back-end).php'); ?>

			<form method="POST" id="todoForma">
				<input id="addInput" type="text" name="name_task" size="49px">
				<button id="addButton">Добавить</button>
			</form>

		</div>
	</div>

	
	<script type="text/javascript" src="script_for_notebook.js"></script>
</body>
</html>