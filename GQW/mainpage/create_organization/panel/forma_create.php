<?php include ('W:\domains\GQWDesignPart\GQW\header.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Create to emloyee</title>
	<link rel="stylesheet" type="text/css" href="http://GQWDesignPart/GQW/_css/style_main.css">
	<link rel="stylesheet" type="text/css" href="http://GQWDesignPart/GQW/_css/style_header.css">
	<link rel="stylesheet" type="text/css" href="http://GQWDesignPart/GQW/_css/forma_create.css">
	
</head>
<body>
	<div class="container">
		<div class="task_list">
			<p>Создание сотрудника:</p>

			 <?php include ('forma_create(back-end).php') ?>

				<form class="create_elem" action="" method="POST">
					<ul>Сокращённое название организации: </ul>
					<input type="text"class="" name="">

					<ul>Полное название организации: </ul>
					<input type="text" class="" name="">
					
					<ul>ИНН: </ul>
					<input type="text"class="" name="">
					
					<ul>КПП: </ul>
					<input type="text"class="" name="">
					
					<ul></ul>
					<input type="date" class="input_entry" name="date_birth" value="2002-01-01" max="2002-01-01">

					<hr>

					<button type="submit">Создать организацию</button>
				</form>
		</div>
	</div>
	
</body>
</html>