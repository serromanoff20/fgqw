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
			<p>Создание организации:</p>

			<div class="panel">
<!-- 				<a href="#">Главная</a>

				<a href="#">Основные сведения</a>	
				<a href="#">Учётная политика</a> -->
			</div>
			

			 <?php include ('forma_create(back-end).php') ?>

				<form class="create_elem" action="" method="POST">
					<div class="first td">
						<ul><b style='color:red'>*</b>Вид организации:</ul>
						<select name="typeOrg">
							<option value=""></option>
							<option value="Физическое лицо">Физическое лицо</option>
						</select>
					</div>

					<div class="second td">
						<ul><b style='color:red'>*</b>Сокращённое название организации: </ul>
						<input type="text" name="shortNameOrg">
					</div>
					
					<div class="third td">
						<ul>Полное название организации: </ul>
						<input type="text" name="longNameOrg">
					</div>
					
					<div class="for td">
						<ul>Префикс: </ul>
						<input type="text" name="Pr">
					</div>
				<hr>
					<div class="five td">
						<ul><b style='color:red'>*</b>ИНН: </ul>
						<input type="text"class="" name="INN">
					</div>

					<div class="six td">
						<ul><b style='color:red'>*</b>КПП: </ul>
						<input type="text"class="" name="KPP">
					</div>

					<div class="seven td">
						<ul><b style='color:red'>*</b>ОГРН: </ul>
						<input type="text" name="" id="OGRN">
					</div>
<!-- 
					<ul></ul>
					<input type="date" class="input_entry" name="date_birth" value="2002-01-01" max="2002-01-01"> -->

					<button type="submit">Создать организацию</button>
				</form>
		</div>
	</div>
	
</body>
</html>