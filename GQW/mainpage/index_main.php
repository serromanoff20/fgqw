<?php 
	session_start();
		
	$name = $_POST['names'];

	$_SESSION['name'] = $name;
	$nameSS = $_SESSION['name'];
	
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="http://GQWDesignPart/GQW/css/style_main.css">
	
</head>
<body>
	
	<div><?php include ('header.php') ?></div>
	<div class="container">
		<div class="task_list">
			<div class="head_task_list">
				<h2>NOTEBOOKs</h2>
			</div>
			
			<div id="main_part">
				<ul class="todoItem">
					<input class="checkbox" type="checkbox">
					<label class="label" >Изучить JavaScript</label>
					<input class="textfield" type="text">
					<!-- <button class="edit">Изменить</button> -->
					<button class="delete">Удалить</button>
					
				</ul>

			</div>	


			<form id="todoForma">
				<input id="addInput" type="text" name="" size="49px">
				<button id="addButton">Добавить</button>
			</form>
		</div>
	</div>

	<script type="text/javascript" src="script.js"></script>
</body>
</html>